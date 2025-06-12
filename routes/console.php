<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule; // 1. Pastikan Schedule facade di-import

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

// Ini adalah command contoh bawaan Laravel
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// --------------------------------------------------------------------------
// PENJADWALAN COMMAND UNTUK MEMBERSHIP REMINDER
// --------------------------------------------------------------------------
// 2. Tambahkan jadwal command Anda di sini:
Schedule::command('memberships:send-reminders') // Gunakan signature command Anda
    ->dailyAt('02:00')                    // Jalankan setiap hari pukul 02:00 pagi
    ->timezone('Asia/Jakarta')            // Opsional: Tentukan zona waktu server jika berbeda
    ->emailOutputTo('admin@example.com'); // Opsional: Kirim output command ke email jika ada error atau output
                                               // Ganti admin@example.com dengan email Anda.
                                               // Atau gunakan ->sendOutputTo('/path/to/logfile.log') untuk menyimpan ke file.
                                               // Atau ->appendOutputTo(...)

// Anda juga bisa menambahkan deskripsi atau konfigurasi lain di sini jika perlu.
// Misalnya, jika Anda ingin command hanya berjalan di lingkungan produksi:
// Schedule::command('memberships:send-reminders')->dailyAt('02:00')->environments(['production']);

// Contoh jika ingin menjalankan command lain:
// Schedule::command('nama:commandlain')->hourly();