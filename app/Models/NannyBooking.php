<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;

class NannyBooking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'price', 'start_date_time', 'end_date_time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter(Builder $query, $filters)
    {
        // Retrieve filter value
        $filterValue = isset($filters['filter_value']) ? $filters['filter_value'] : null;
    
        if ($filterValue) {
            $query->where(function ($query) use ($filterValue) {
                // Filtering based on NannyBooking attributes
                $query->where('title', 'like', '%' . $filterValue . '%')
                    ->orWhere('price', 'like', '%' . $filterValue . '%')
                    ->orWhere('start_date_time', 'like', '%' . $filterValue . '%')
                    ->orWhere('end_date_time', 'like', '%' . $filterValue . '%');
    
                // Filtering based on User attributes
                $query->orWhereHas('user', function ($query) use ($filterValue) {
                    $query->where('name', 'like', '%' . $filterValue . '%')
                        ->orWhere('email', 'like', '%' . $filterValue . '%');
                });
            });
        }
    
        // Additional filtering based on other attributes if needed
        // ...
    
        return $query;
    }
}
