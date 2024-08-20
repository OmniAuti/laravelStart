<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Renter; 

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'rating',
    ];

    public function renter() {
        return $this->belongsTo(Renter::class);
    }
}
