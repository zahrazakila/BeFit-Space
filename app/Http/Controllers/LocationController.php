<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    // Data dummy untuk semua lokasi didefinisikan sebagai properti class
    private $allLocations = [
        ['id' => 1, 'name' => 'Be-Fit Banguntapan', 'city' => 'Bantul', 'province' => 'DIY', 'address' => 'Jl. Pahlawan No. 123, Banguntapan', 'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?q=80&w=1470&auto=format&fit=crop'],
        ['id' => 2, 'name' => 'Be-Fit Malioboro', 'city' => 'Yogyakarta', 'province' => 'DIY', 'address' => 'Jl. Malioboro No. 45, Yogyakarta', 'image' => 'https://images.unsplash.com/photo-1581009137042-c552e485697a?q=80&w=1470&auto=format&fit=crop'],
        ['id' => 3, 'name' => 'Be-Fit Seturan', 'city' => 'Sleman', 'province' => 'DIY', 'address' => 'Jl. Seturan Raya No. 67, Sleman', 'image' => 'https://images.unsplash.com/photo-1594882645126-14020914d58d?q=80&w=1485&auto=format&fit=crop'],
        ['id' => 4, 'name' => 'Be-Fit Kasihan', 'city' => 'Bantul', 'province' => 'DIY', 'address' => 'Jl. Bantul Km 7, Kasihan', 'image' => 'https://images.unsplash.com/photo-1605296867304-46d5465a13f1?q=80&w=1470&auto=format&fit=crop'],
        ['id' => 5, 'name' => 'Be-Fit Condongcatur', 'city' => 'Sleman', 'province' => 'DIY', 'address' => 'Jl. Anggajaya No. 1, Condongcatur', 'image' => 'https://images.unsplash.com/photo-1584735935682-2f2b69dff9d2?q=80&w=1471&auto=format&fit=crop'],
        ['id' => 6, 'name' => 'Be-Fit Pusat Kota', 'city' => 'Yogyakarta', 'province' => 'DIY', 'address' => 'Jl. Jenderal Sudirman No. 89, Yogyakarta', 'image' => 'https://images.unsplash.com/photo-1558611848-73f7eb4001a1?q=80&w=1471&auto=format&fit=crop']
    ];

    /**
     * Menampilkan daftar semua lokasi.
     */
    public function index()
    {
        // Sekarang menggunakan properti class $this->allLocations
        return view('locations.index', [
            'locations' => $this->allLocations
        ]);
    }

    /**
     * Menampilkan detail satu lokasi spesifik.
     * @param string $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        // Sekarang menggunakan properti class $this->allLocations
        $location = collect($this->allLocations)->firstWhere('id', $id);

        // Jika lokasi tidak ditemukan, tampilkan halaman 404.
        if (!$location) {
            abort(404);
        }

        return view('locations.show', [
            'location' => $location
        ]);
    }
}
