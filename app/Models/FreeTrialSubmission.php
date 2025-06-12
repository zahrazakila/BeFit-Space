<?php

// app/Models/FreeTrialSubmission.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreeTrialSubmission extends Model
{
    use HasFactory;

    // Tentukan kolom mana saja yang boleh diisi secara massal
    protected $fillable = [
        'city',
        'club_preference',
        'name',
        'phone_number',
        'email',
        'contact_preference',
        'referral_code',
        'newsletter_opt_in',
        'contacted_at',
    ];
}
