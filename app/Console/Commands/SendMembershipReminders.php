<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Membership; // 1. Import model Membership
use Illuminate\Support\Facades\Log; // 2. Import Log Facade
use Carbon\Carbon; // 3. Import Carbon untuk manipulasi tanggal
use Illuminate\Support\Facades\Mail; // <-- TAMBAHKAN INI
use App\Mail\MembershipReminderEmail; // <-- TAMBAHKAN INI

class SendMembershipReminders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // 4. Tentukan nama perintah yang akan dipanggil di terminal
    protected $signature = 'memberships:send-reminders';

    /**
     * The console command description.
     *
     * @var string
     */
    // 5. Deskripsi singkat tentang apa yang dilakukan command ini
    protected $description = 'Cek memberships yang akan berakhir dan kirim notifikasi pengingat';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Mulai menjalankan pengecekan membership untuk pengingat...');
        Log::info('SendMembershipReminders Command: Mulai dijalankan.');

        $today = Carbon::today();
        $reminderDateLimit = $today->copy()->addDays(7); // Reminder untuk 7 hari ke depan

        Log::info("SendMembershipReminders Command: Mencari membership yang berakhir antara {$today->toDateString()} dan {$reminderDateLimit->toDateString()}");

        $expiringMemberships = Membership::with(['user', 'membershipPackage'])
            ->where('status', 'active')
            ->whereDate('end_date', '>=', $today)
            ->whereDate('end_date', '<=', $reminderDateLimit)
            // Tambahan kondisi untuk last_reminder_sent_at:
            ->where(function ($query) {
                $query->whereNull('last_reminder_sent_at') // Belum pernah dikirim reminder
                    ->orWhere('last_reminder_sent_at', '<', Carbon::now()->subHours(23)); // Atau reminder terakhir > 23 jam lalu
            })
            ->get();

        if ($expiringMemberships->isEmpty()) {
            $this->info('Tidak ada membership yang memerlukan pengingat baru hari ini.');
            Log::info('SendMembershipReminders Command: Tidak ada membership yang ditemukan untuk pengingat baru.');
            return Command::SUCCESS;
        }

        $this->info("Ditemukan {$expiringMemberships->count()} membership yang akan berakhir dan butuh pengingat baru:");

        foreach ($expiringMemberships as $membership) {
            // Pastikan user dan membershipPackage tidak null untuk menghindari error
            if (!$membership->user || !$membership->membershipPackage) {
                Log::warning("SendMembershipReminders Command: Skipping Membership ID [{$membership->id}] due to missing user or package information.");
                continue; // Lanjut ke membership berikutnya
            }

            $this->line("- Mengirim pengingat untuk: User: {$membership->user->name} ({$membership->user->email}), Paket: {$membership->membershipPackage->name}, Berakhir: {$membership->end_date->format('d M Y')}");
            Log::info("SendMembershipReminders Command: Mempersiapkan pengingat untuk User ID [{$membership->user->id}], Membership ID [{$membership->id}], Paket [{$membership->membershipPackage->name}], Berakhir pada [{$membership->end_date->toDateString()}]");

            try {
                Mail::to($membership->user->email)->send(new MembershipReminderEmail($membership));
                Log::info("SendMembershipReminders Command: Email reminder berhasil dikirim ke {$membership->user->email} untuk Membership ID [{$membership->id}]");

                // Update last_reminder_sent_at setelah email berhasil dikirim
                $membership->update(['last_reminder_sent_at' => Carbon::now()]);
                Log::info("SendMembershipReminders Command: last_reminder_sent_at diupdate untuk Membership ID [{$membership->id}]");
            } catch (\Exception $e) {
                Log::error("SendMembershipReminders Command: GAGAL mengirim email ke {$membership->user->email} untuk Membership ID [{$membership->id}]. Error: " . $e->getMessage());
                $this->error("Gagal mengirim email ke {$membership->user->email}. Error: " . $e->getMessage());
            }
        }

        $this->info('Selesai memproses pengingat.');
        Log::info('SendMembershipReminders Command: Selesai diproses.');
        return Command::SUCCESS;
    }
}
