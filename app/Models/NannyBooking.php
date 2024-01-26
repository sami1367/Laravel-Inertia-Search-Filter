<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NannyBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'price', 'start_date_time', 'end_date_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
