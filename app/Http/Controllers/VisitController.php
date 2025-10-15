<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    // Membuat form untuk menambah kunjungan baru untuk pasien tertentu
    public function create(Patient $patient)
    {
        return view('visits.create', ['patient' => $patient]);
    }

    // Menyimpan kunjungan baru untuk pasien tertentu
    public function store(Request $request, Patient $patient)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'visit_date' => 'required|date',
            'keluhan' => 'required|string',
            'pemeriksaan' => 'required|string',
        ]);

        // Jika validasi berhasil, simpan data kunjungan baru
        $patient->visits()->create($validatedData);

        // Redirect ke halaman detail pasien setelah menyimpan kunjungan
        return redirect()->route('patients.show', $patient->id);
    }
}
