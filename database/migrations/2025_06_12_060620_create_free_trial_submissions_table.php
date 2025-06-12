<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_xxxxxx_create_free_trial_submissions_table.php
    public function up(): void
    {
        Schema::create('free_trial_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('club_preference');
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('contact_preference');
            $table->string('referral_code')->nullable(); // nullable berarti boleh kosong
            $table->boolean('newsletter_opt_in')->default(false);
            $table->timestamp('contacted_at')->nullable(); // Untuk menandai jika sudah dihubungi
            $table->timestamps(); // membuat kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_trial_submissions');
    }
};
