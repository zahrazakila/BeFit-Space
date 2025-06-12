<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// Jangan lupa tambahkan ini jika belum ada
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin manual
        // // Cek dulu apakah user admin sudah ada, agar tidak duplikat jika seeder dijalankan berkali-kali
        // if (!User::where('email', 'admin@befit.com')->exists()) {
        //     User::create([
        //         'name' => 'Admin BeFit',
        //         'email' => 'admin@befit.com',
        //         'password' => Hash::make('password123'), // ubah ke password aman
        //         'role' => 'admin',
        //     ]);
        // }

        // Panggil seeder untuk MembershipPackage
        $this->call([
            MembershipPackageSeeder::class,
            // Jika ada seeder lain, tambahkan di sini
        ]);

        // Kamu juga bisa membuat user biasa sebagai contoh jika perlu
        // User::factory(10)->create(); // Ini akan membuat 10 user random jika kamu punya UserFactory
    }
}
