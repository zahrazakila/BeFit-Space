<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'membership_id',
        'order_id',
        'amount',
        'status',
        'customer_name',
        'customer_email',
        'customer_phone',
        'payment_token',
        // TAMBAHKAN KOLOM BARU DI SINI:
        'payment_method',
        'transaction_id_midtrans',
        'transaction_time',
        'settlement_time',
        'fraud_status',
        // 'payment_code', // Jika Anda menambahkannya
        // 'pdf_url',    // Jika Anda menambahkannya
    ];

    // Definisikan $casts jika perlu, misalnya untuk tanggal
    protected $casts = [
        'amount' => 'decimal:2',
        'transaction_time' => 'datetime',
        'settlement_time' => 'datetime',
    ];
    // ... (relasi yang sudah Anda buat sebelumnya)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
