<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = [
        'patient_id',
        'visit_date',
        'keluhan',
        'pemeriksaan',
    ];

    // mendefinisikan relasi many-to-one dengan model Patient
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
