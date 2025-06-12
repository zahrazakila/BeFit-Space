<?php

namespace App\Http\Controllers;

use App\Models\FreeTrialSubmission;
use Illuminate\Http\Request;

class FreeTrialController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi Input
        $validatedData = $request->validate([
            'city' => 'required|string|max:255',
            'club' => 'required|string|max:255', // sesuaikan name di form
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20', // sesuaikan name di form
            'email' => 'required|email|max:255',
            'contact_time' => 'required|string|max:255', // sesuaikan name di form
            'referral' => 'nullable|string|max:255', // sesuaikan name di form
            'newsletter' => 'sometimes|boolean', // sesuaikan name di form
            'agreement' => 'required', // pastikan agreement dicentang
        ]);

        // 2. Simpan ke Database
        FreeTrialSubmission::create([
            'city' => $validatedData['city'],
            'club_preference' => $validatedData['club'],
            'name' => $validatedData['name'],
            'phone_number' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'contact_preference' => $validatedData['contact_time'],
            'referral_code' => $validatedData['referral'],
            'newsletter_opt_in' => $request->has('newsletter'),
        ]);

        // 3. Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Klaim free trial Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
}
