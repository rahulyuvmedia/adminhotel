<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';
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
    

    use HasFactory;
}
