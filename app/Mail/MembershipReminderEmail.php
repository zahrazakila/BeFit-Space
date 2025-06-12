<?php

namespace App\Mail;

use App\Models\Membership; // 1. Import model Membership
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue; // Opsional: untuk antrian email
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Carbon\Carbon; // Untuk format tanggal

class MembershipReminderEmail extends Mailable // Opsional: implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Membership $membership; // 2. Properti publik untuk menampung data membership

    /**
     * Create a new message instance.
     *
     * @param \App\Models\Membership $membership
     */
    public function __construct(Membership $membership)
    {
        // 3. Terima objek membership saat Mailable dibuat
        $this->membership = $membership;
    }

    /**
     * Get the message envelope.
     * Mendefinisikan subjek email dan penerima (jika tidak di-set saat mengirim).
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            // Anda juga bisa men-set 'to' di sini jika penerimanya selalu sama,
            // tapi lebih fleksibel jika di-set saat Mail::to(...)->send()
            subject: 'Pengingat: Membership BeFit Space Anda Akan Segera Berakhir!',
        );
    }

    /**
     * Get the message content definition.
     * Mendefinisikan view Blade mana yang akan digunakan untuk konten email.
     */
    public function content(): Content
    {
        // Kita akan membuat view ini nanti: resources/views/emails/memberships/reminder.blade.php
        return new Content(
            markdown: 'emails.memberships.reminder', // Menggunakan template Markdown email
            with: [ // Data yang ingin Anda kirim ke view email
                'userName' => $this->membership->user->name,
                'packageName' => $this->membership->membershipPackage->name,
                'endDate' => Carbon::parse($this->membership->end_date)->isoFormat('D MMMM YYYY'),
                'remainingDays' => Carbon::parse($this->membership->end_date)->endOfDay()->diffInDays(now()->startOfDay()),
                'renewalLink' => route('memberships.index'), // Contoh link untuk perpanjang (ke halaman paket)
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return []; // Tidak ada attachment untuk email ini
    }
}
