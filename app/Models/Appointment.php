<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'app_date',
        'session',
        'branch',
        'notelp',
        'pet_id',
        'petsex',
        'petages',
        'petweights',
        'user_id',
        'detail'
    ];

    public function appointments()
    {
        return $this->belongsTo(Pet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Services::class);
    }
}
