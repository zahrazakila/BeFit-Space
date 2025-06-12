<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FreeTrialSubmission;
use Illuminate\Http\Request; // Pastikan 'use' untuk Request ada

class FreeTrialAdminController extends Controller
{
    public function index(Request $request) // Tambahkan Request $request
    {
        // Mulai query builder
        $query = FreeTrialSubmission::query();

        // Terapkan filter berdasarkan status dari URL
        if ($request->query('status') === 'new') {
            $query->whereNull('contacted_at');
        } elseif ($request->query('status') === 'contacted') {
            $query->whereNotNull('contacted_at');
        }

        // Ambil data, urutkan dari yang terbaru, dan gunakan paginate
        // withQueryString() penting agar filter tetap aktif saat pindah halaman
        $submissions = $query->latest()->paginate(15)->withQueryString();

        return view('admin.free-trials.index', compact('submissions'));
    }

    public function markAsContacted(FreeTrialSubmission $submission)
    {
        $submission->update(['contacted_at' => now()]);
        return redirect()->back()->with('success', 'Status pendaftar berhasil diperbarui!');
    }
}
