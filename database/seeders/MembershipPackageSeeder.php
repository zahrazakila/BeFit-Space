<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MembershipPackageSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('membership_packages')->insert([
            ['name' => 'Paket 1 Bulan', 'duration_days' => 30, 'price' => 289000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paket 3 Bulan', 'duration_days' => 90, 'price' => 807000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paket 6 Bulan', 'duration_days' => 180, 'price' => 1494000, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paket 1 Tahun', 'duration_days' => 365, 'price' => 2748000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
