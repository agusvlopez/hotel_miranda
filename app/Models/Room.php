<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //use HasFactory;
    protected $table = "rooms";

    protected $primaryKey = "id";

    protected $fillable = [
        'image', 'room_type', 'description', 'price', 'discount', 'discountedPrice'
    ];

    public $timestamps = true;
}
