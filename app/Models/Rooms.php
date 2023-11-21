<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    protected $table = 'rooms';
    use HasFactory;
    

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'room_id');
    }
    protected $casts = [
        'facilities' => 'json',
    ];
}

