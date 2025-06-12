<?php

namespace App\Http\Controllers\Admin; // Pastikan namespace ini benar

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\MembershipPackage; // Pastikan model Anda ada di App\Models\MembershipPackage

class MembershipPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Logika untuk menampilkan daftar semua paket membership di halaman admin
        $membershipPackages = MembershipPackage::orderBy('name')->paginate(10); // Contoh: urutkan berdasarkan nama, paginasi 10 item
        return view('admin.membership_packages.index', compact('membershipPackages'));
        // Pastikan Anda memiliki view 'admin.membership_packages.index'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Menampilkan form untuk membuat paket membership baru
        return view('admin.membership_packages.create');
        // Pastikan Anda memiliki view 'admin.membership_packages.create'
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Logika untuk menyimpan paket membership baru
        // (Akan kita lengkapi nanti jika Anda memerlukan fungsionalitas 'create')
        // Untuk sekarang, kita fokus pada 'update'

        // Contoh validasi dasar untuk store
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:membership_packages,name'],
            'duration_days' => ['required', 'integer', 'min:1'],
            'original_price' => ['required', 'numeric', 'min:0'],
            'discount_percentage' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'is_discount_active' => ['nullable', 'boolean'],
            'discount_start_date' => ['nullable', 'date', 'after_or_equal:today'],
            'discount_end_date' => ['nullable', 'date', 'after_or_equal:discount_start_date'],
        ]);

        $isDiscountActive = $request->has('is_discount_active');
        $originalPrice = (float) $validatedData['original_price'];
        $discountPercentage = (float) ($validatedData['discount_percentage'] ?? 0);
        $price = $originalPrice;

        if ($isDiscountActive && $discountPercentage > 0) {
            $discountAmount = ($originalPrice * $discountPercentage) / 100;
            $price = $originalPrice - $discountAmount;
        }
        $price = max(0, $price); // Pastikan harga tidak negatif

        MembershipPackage::create([
            'name' => $validatedData['name'],
            'duration_days' => $validatedData['duration_days'],
            'original_price' => $originalPrice,
            'price' => $price, // Simpan harga final
            'discount_percentage' => $discountPercentage ?: null,
            'is_discount_active' => $isDiscountActive,
            'discount_start_date' => $validatedData['discount_start_date'] ?? null,
            'discount_end_date' => $validatedData['discount_end_date'] ?? null,
        ]);

        return redirect()->route('admin.membership-packages.index')
            ->with('success', 'Paket membership baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipPackage  $membershipPackage
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipPackage $membershipPackage)
    {
        // Biasanya tidak terlalu diperlukan untuk admin panel CRUD sederhana,
        // kecuali Anda ingin halaman detail khusus.
        // return view('admin.membership_packages.show', compact('membershipPackage'));
        return redirect()->route('admin.membership-packages.edit', $membershipPackage);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipPackage  $membershipPackage  // Route Model Binding
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipPackage $membershipPackage)
    {
        // Mengirim data paket yang akan diedit ke view form edit
        // View ini adalah yang sudah Anda buat: 'admin.membership_packages.edit'
        return view('admin.membership_packages.edit', compact('membershipPackage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipPackage  $membershipPackage // Route Model Binding
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MembershipPackage $membershipPackage)
    {
        // 1. Validasi Input
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255', Rule::unique('membership_packages')->ignore($membershipPackage->id)],
            'duration_days' => ['required', 'integer', 'min:1'],
            'original_price' => ['required', 'numeric', 'min:0'],
            'discount_percentage' => ['nullable', 'numeric', 'min:0', 'max:100'],
            'is_discount_active' => ['nullable', 'boolean'],
            'discount_start_date' => ['nullable', 'date' /*, 'after_or_equal:today' // bisa diaktifkan jika perlu */],
            'discount_end_date' => ['nullable', 'date', 'after_or_equal:discount_start_date'],
        ]);

        $isDiscountActive = $request->has('is_discount_active');

        // 2. Menghitung Harga Final (price)
        $originalPrice = (float) $validatedData['original_price'];
        $discountPercentage = (float) ($validatedData['discount_percentage'] ?? 0);
        $price = $originalPrice; // Harga default adalah harga asli

        if ($isDiscountActive && $discountPercentage > 0) {
            // (Opsional) Tambahkan pengecekan tanggal di sini jika diskon berjangka waktu
            $isValidDateRange = true; // Asumsi valid
            if ($validatedData['discount_start_date'] && $validatedData['discount_end_date']) {
                $today = now()->startOfDay();
                $startDate = \Carbon\Carbon::parse($validatedData['discount_start_date'])->startOfDay();
                $endDate = \Carbon\Carbon::parse($validatedData['discount_end_date'])->endOfDay(); // akhir hari agar inklusif
                if (!($today->gte($startDate) && $today->lte($endDate))) {
                    $isValidDateRange = false;
                }
            } else if ($validatedData['discount_start_date']) { // Hanya ada tanggal mulai
                $today = now()->startOfDay();
                $startDate = \Carbon\Carbon::parse($validatedData['discount_start_date'])->startOfDay();
                if ($today->lt($startDate)) {
                    $isValidDateRange = false;
                }
            }
            // Jika hanya is_discount_active dan percentage, tanpa tanggal, maka diskon selalu berlaku jika aktif

            if ($isValidDateRange) { // Hanya hitung diskon jika dalam rentang tanggal yang valid (jika tanggal diset)
                $discountAmount = ($originalPrice * $discountPercentage) / 100;
                $price = $originalPrice - $discountAmount;
            }
        }

        // Pastikan harga tidak negatif
        $price = max(0, $price);

        // 3. Update Data Paket di Database
        $membershipPackage->name = $validatedData['name'];
        $membershipPackage->duration_days = $validatedData['duration_days'];
        $membershipPackage->original_price = $originalPrice;
        $membershipPackage->discount_percentage = $discountPercentage ?: null;
        $membershipPackage->is_discount_active = $isDiscountActive;
        $membershipPackage->discount_start_date = $validatedData['discount_start_date'] ?? null;
        $membershipPackage->discount_end_date = $validatedData['discount_end_date'] ?? null;

        // Simpan harga final yang sudah dihitung
        $membershipPackage->price = $price;

        $membershipPackage->save();

        // 4. Redirect dengan Pesan Sukses
        return redirect()->route('admin.membership-packages.index') // Sesuaikan nama route
            ->with('success', 'Paket membership berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipPackage  $membershipPackage
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipPackage $membershipPackage)
    {
        // Logika untuk menghapus paket membership
        $membershipPackage->delete();
        return redirect()->route('admin.membership-packages.index')
            ->with('success', 'Paket membership berhasil dihapus!');
    }
}
