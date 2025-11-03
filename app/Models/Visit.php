<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Visit extends Model
{
    use HasFactory, SoftDeletes;

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
