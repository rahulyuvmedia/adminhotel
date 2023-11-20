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
}

