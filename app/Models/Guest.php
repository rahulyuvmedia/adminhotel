<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guest';
    use HasFactory;

    public function reservations()
    {
        return $this->hasOne(Reservation::class, 'guest_id');
    }
    public function guest()
    {
        return $this->belongsTo(Guest::class);
    }
    
    
    public function rooms()
    {
        return $this->hasOne(Rooms::class, 'id', 'room_id');
    }
    
    public function policeInquiry()
    {
        return $this->hasOne(PoliceInquiry::class);
    }
}

