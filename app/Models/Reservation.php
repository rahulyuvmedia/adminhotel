<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    use HasFactory;

    // public function news()
    // {
    //     return $this->belongsTo(news::class, 'news_id');
    // }
}

