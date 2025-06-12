<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            // Mengubah kolom 'user_id' agar bisa bernilai NULL.
            // Method change() ini membutuhkan doctrine/dbal.
            $table->foreignId('user_id')->nullable()->change();
            $table->foreignId('membership_id')->nullable()->change(); // Sekalian kita buat nullable juga untuk jaga-jaga
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            // Mengembalikan kolom menjadi tidak boleh NULL jika migrasi di-rollback.
            $table->foreignId('user_id')->nullable(false)->change();
            $table->foreignId('membership_id')->nullable(false)->change();
        });
    }
};
