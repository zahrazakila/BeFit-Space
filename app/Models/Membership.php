<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'membership_package_id',
        'start_date',
        'end_date',
        'status',
        'last_reminder_sent_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'date', // Eloquent akan otomatis mengubah ini menjadi objek Carbon
        'end_date' => 'date',   // Eloquent akan otomatis mengubah ini menjadi objek Carbon
        // Jika Anda menggunakan timestamp default (created_at, updated_at),
        // biasanya sudah otomatis di-cast.
        'last_reminder_sent_at' => 'datetime', // <-- TAMBAHKAN INI (gunakan datetime agar ada jamnya)
    ];

    // Relasi Anda yang sudah ada:
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membershipPackage()
    {
        return $this->belongsTo(MembershipPackage::class);
    }

    public function payment()
    {
        // Jika satu membership bisa memiliki banyak payment (misal perpanjangan), gunakan hasMany
        // Jika satu membership hanya terkait satu payment awal, hasOne sudah benar.
        return $this->hasOne(Payment::class);
    }
}
