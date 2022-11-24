<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'city',
        'app_date',
        'session_id',
        'clinic_id',
        'notelp',
        'pet_id',
        'user_id',
        'detail',
        'service_id',
        'status'
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
        return $this->belongsTo(Pet::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function clinic()
    {
        return $this->belongsTo(Clinic::class);
    }

    public function session()
    {
        return $this->belongsTo(session::class);
    }
}
