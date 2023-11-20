<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    use HasFactory;
    
    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

     public function room()
    {
        return $this->belongsTo(Rooms::class, 'room_id');
    }
    
}

