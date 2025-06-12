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
        Schema::table('payments', function (Blueprint $table) {
            // Kolom-kolom ini akan diisi dari notifikasi Midtrans
            // Sesuaikan penempatan 'after()' jika Anda ingin urutan kolom yang spesifik

            // Kolom untuk menyimpan metode pembayaran yang digunakan (misal: bank_transfer, credit_card, gopay)
            $table->string('payment_method')->nullable()->after('status')->comment('Metode pembayaran dari Midtrans');

            // Kolom untuk menyimpan ID transaksi unik dari Midtrans
            $table->string('transaction_id_midtrans')->nullable()->unique()->after('payment_method')->comment('ID Transaksi dari Midtrans');

            // Kolom untuk menyimpan waktu transaksi dari Midtrans
            $table->timestamp('transaction_time')->nullable()->after('transaction_id_midtrans')->comment('Waktu transaksi dari Midtrans');

            // Kolom untuk menyimpan waktu settlement (penyelesaian) pembayaran
            $table->timestamp('settlement_time')->nullable()->after('transaction_time')->comment('Waktu penyelesaian pembayaran');

            // Kolom untuk menyimpan status fraud dari Midtrans (misal: accept, challenge, deny)
            $table->string('fraud_status')->nullable()->after('settlement_time')->comment('Status fraud dari Midtrans');

            // Anda mungkin juga ingin kolom untuk 'payment_code' (misal nomor VA) atau 'pdf_url' jika Midtrans menyediakannya
            // $table->string('payment_code')->nullable()->after('fraud_status');
            // $table->string('pdf_url')->nullable()->after('payment_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropColumn([
                'payment_method',
                'transaction_id_midtrans',
                'transaction_time',
                'settlement_time',
                'fraud_status',
                // 'payment_code', // Jika Anda menambahkannya di atas
                // 'pdf_url',    // Jika Anda menambahkannya di atas
            ]);
        });
    }
};
