<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['name','booking_number','email','tel_number','book_time','courts_id'];

    protected $dates = [
        'book_date'
    ];

    public function courts()
    {
        return $this->belongsTo(Court::class);
    }
}
