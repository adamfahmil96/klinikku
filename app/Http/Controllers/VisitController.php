<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Visit;
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
        return redirect()->route('patients.show', $patient->id)->with('success', 'Kunjungan baru berhasil ditambahkan.');
    }

    public function edit(Visit $visit, Patient $patient)
    {
        return view('visits.edit', ['visit' => $visit, 'patient' => $patient]);
    }

    public function update(Request $request, Visit $visit)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'visit_date' => 'required|date',
            'keluhan' => 'required|string',
            'pemeriksaan' => 'required|string',
        ]);

        // Jika validasi berhasil, perbarui data kunjungan
        $visit->update($validatedData);

        // Redirect ke halaman detail pasien setelah memperbarui kunjungan
        return redirect()->route('patients.show', $visit->patient_id)->with('success', 'Kunjungan berhasil diperbarui.');
    }

    public function destroy(Visit $visit)
    {
        $patientId = $visit->patient_id;
        $visit->delete();

        // Redirect ke halaman detail pasien setelah menghapus kunjungan
        return redirect()->route('patients.show', $patientId)->with('success', 'Kunjungan berhasil dihapus.');
    }
}
