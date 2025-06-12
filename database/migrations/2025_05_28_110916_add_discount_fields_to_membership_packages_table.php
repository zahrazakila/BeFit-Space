<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Target tabel: membership_packages
        Schema::table('membership_packages', function (Blueprint $table) {
            // 1. Kolom untuk menyimpan harga asli paket SEBELUM diskon.
            //    Akan ditambahkan setelah kolom 'price' yang sudah ada.
            $table->decimal('original_price', 15, 2)->after('price')->nullable()->comment('Harga asli paket sebelum diskon');

            // 2. Kolom untuk menyimpan persentase diskon.
            $table->decimal('discount_percentage', 5, 2)->nullable()->after('original_price')->comment('Persentase diskon, misal 10.00 untuk 10%');

            // 3. Kolom boolean untuk menandakan apakah diskon aktif.
            $table->boolean('is_discount_active')->default(false)->after('discount_percentage')->comment('Status aktif diskon (true/false)');

            // 4. (Opsional) Kolom untuk tanggal mulai berlakunya diskon.
            $table->date('discount_start_date')->nullable()->after('is_discount_active')->comment('Tanggal mulai diskon');

            // 5. (Opsional) Kolom untuk tanggal berakhirnya diskon.
            $table->date('discount_end_date')->nullable()->after('discount_start_date')->comment('Tanggal akhir diskon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Target tabel: membership_packages
        Schema::table('membership_packages', function (Blueprint $table) {
            // Hapus kolom-kolom yang ditambahkan jika migrasi di-rollback
            $table->dropColumn([
                'original_price',
                'discount_percentage',
                'is_discount_active',
                'discount_start_date',
                'discount_end_date',
            ]);
        });
    }
};
