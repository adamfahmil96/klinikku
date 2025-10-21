<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Ambil semua data pasien dari database
        // $patients = Patient::all();

        // Kembalikan view dengan data pasien
        // return view('patients.index', ['patients' => $patients]);

        // Ambil data pasien dengan fitur pencarian
        $patients = Patient::query();
        if ($request->filled('search')) { // Cek jika ada parameter pencarian dan ada isinya di request pencarian
            $search = $request->get('search');
            $patients->where('name', 'like', '%' . $search . '%');
        }

        // Kembalikan view dengan data pasien
        return view('patients.index', ['patients' => $patients->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:50',
            'address' => 'required|string',
            'phone_number' => 'nullable|string|max:20',
        ]);

        // Simpan data pasien baru ke database
        Patient::create($validatedData);

        // Redirect ke halaman daftar pasien setelah berhasil menyimpan
        return redirect('/patients')->with('success', 'Pasien baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     * Disebut sebagai Route Model Binding,
     * Laravel otomatis mencari data Patient berdasarkan ID yang diberikan di URL dan memasukkannya ke dalam parameter $patient.
     */
    public function show(Patient $patient)
    {
        return view('patients.show', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     * Disebut sebagai Route Model Binding,
     * Laravel otomatis mencari data Patient berdasarkan ID yang diberikan di URL dan memasukkannya ke dalam parameter $patient.
     */
    public function edit(Patient $patient)
    {
        return view('patients.edit', ['patient' => $patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        // validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:50',
            'address' => 'required|string',
            'phone_number' => 'nullable|string|max:20',
        ]);
        // Update data pasien
        $patient->update($validatedData);

        // Redirect ke halaman daftar pasien setelah berhasil memperbarui
        return redirect('/patients')->with('success', 'Data pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        // Hapus data pasien
        $patient->delete();

        // Redirect ke halaman daftar pasien setelah berhasil menghapus
        return redirect('/patients')->with('success', 'Data pasien berhasil dihapus.');
    }
}
