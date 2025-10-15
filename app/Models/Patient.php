<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory;

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
}
