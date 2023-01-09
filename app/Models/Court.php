<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Court extends Model
{
    use HasFactory;

    protected $fillable = ['name','image','description','price'];

    public function sports()
    {
        return $this->belongsToMany(Sport::class,'sport_court');
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
