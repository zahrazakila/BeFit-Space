<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Umumnya digunakan, tambahkan jika belum ada
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon; // Untuk manipulasi tanggal

class MembershipPackage extends Model
{
    use HasFactory; // Tambahkan ini jika Anda menggunakan model factories

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'duration_days',
        'price',                // Harga final setelah diskon
        'original_price',       // Harga asli sebelum diskon
        'discount_percentage',
        'is_discount_active',
        'discount_start_date',
        'discount_end_date',
        // Tambahkan field lain yang bisa diisi massal jika ada
    ];

    /**
     * Atribut yang harus di-cast ke tipe data asli.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'price' => 'decimal:2',                 // Simpan harga sebagai desimal dengan 2 angka di belakang koma
        'original_price' => 'decimal:2',        // Sama untuk harga asli
        'discount_percentage' => 'decimal:2',   // Persentase diskon juga bisa desimal
        'is_discount_active' => 'boolean',      // Untuk status aktif diskon
        'duration_days' => 'integer',
        'discount_start_date' => 'date:Y-m-d',  // Format tanggal saat mengambil/menyimpan
        'discount_end_date' => 'date:Y-m-d',    // Format tanggal saat mengambil/menyimpan
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Mendefinisikan relasi bahwa satu paket membership bisa dimiliki oleh banyak membership (transaksi user).
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function memberships()
    {
        return $this->hasMany(Membership::class);
        // Pastikan Anda memiliki model App\Models\Membership
    }

    /**
     * Accessor untuk mengecek apakah diskon pada paket ini sedang aktif dan berlaku.
     * Ini akan membuat properti virtual $package->is_on_active_discount.
     *
     * @return bool
     */
    public function getIsOnActiveDiscountAttribute(): bool
    {
        // Diskon tidak aktif jika:
        // 1. Bendera is_discount_active adalah false
        // 2. Tidak ada persentase diskon atau persentasenya 0 atau kurang
        if (!$this->is_discount_active || !$this->discount_percentage || $this->discount_percentage <= 0) {
            return false;
        }

        $today = Carbon::today(); // Tanggal hari ini, tanpa jam

        // Skenario 1: Diskon tidak terikat tanggal (selalu aktif jika is_discount_active true)
        if (is_null($this->discount_start_date) && is_null($this->discount_end_date)) {
            return true;
        }

        // Skenario 2: Diskon memiliki tanggal mulai, tapi tidak ada tanggal akhir
        // Aktif jika hari ini sama dengan atau setelah tanggal mulai
        if (!is_null($this->discount_start_date) && is_null($this->discount_end_date)) {
            return $today->gte($this->discount_start_date);
        }

        // Skenario 3: Diskon memiliki tanggal akhir, tapi tidak ada tanggal mulai (kurang umum, tapi bisa saja)
        // Aktif jika hari ini sama dengan atau sebelum tanggal akhir
        if (is_null($this->discount_start_date) && !is_null($this->discount_end_date)) {
            return $today->lte($this->discount_end_date);
        }

        // Skenario 4: Diskon memiliki tanggal mulai dan tanggal akhir
        // Aktif jika hari ini berada di antara tanggal mulai dan tanggal akhir (inklusif)
        if (!is_null($this->discount_start_date) && !is_null($this->discount_end_date)) {
            // Pastikan tanggal akhir tidak sebelum tanggal mulai untuk logika 'between' yang benar
            if ($this->discount_end_date->lt($this->discount_start_date)) {
                return false; // Rentang tanggal tidak valid
            }
            return $today->between($this->discount_start_date, $this->discount_end_date);
        }

        // Default, jika tidak ada kondisi di atas yang terpenuhi (seharusnya tidak terjadi jika logika benar)
        return false;
    }
}
