<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'userid',
        'model',
        'price',
        'negotiable', 
        'productimg1',
        'productimg2', 
        'productimg3', 
        'productimg4',
        'email',
        'location',
        'phonenumber',
        'approved',
        'topad',
    ];
}
