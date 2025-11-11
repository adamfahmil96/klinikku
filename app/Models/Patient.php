<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    // mendefinisikan atribut yang dapat diisi secara massal
    protected $fillable = [
        'name',
        'date_of_birth',
        'gender',
        'address',
        'phone_number',
    ];

    // mendefinisikan relasi one-to-many dengan model Visit
    public function visits()
    {
        return $this->hasMany(Visit::class);
    }

    /**
     * Booted method to handle model events.
     * Fungsi spesial yang dijalankan saat model di-booting (saat aplikasi mulai menggunakan model ini).
     */
    protected static function booted(): void
    {
        // Sebuah instruksi yang diberikan
        static::deleting(function (Patient $patient) {
            /**
             * Hapus semua kunjungan terkait saat pasien dihapus.
             * Ini akan menjadi SOFT DELETE karena kita menggunakan SoftDeletes pada model Visit.
             * 
             * Analogi: "Halo, pasang telingamu! Aku punya tugas penting untukmu.
             * Dengarkan sebuah event bernama 'deleting' yang terjadi pada model Patient.
             * 'Deleting' artinya Tepat sebelum seorang pasien dihapus dari database."
             */
            $patient->visits()->delete();
        });
    }
}
