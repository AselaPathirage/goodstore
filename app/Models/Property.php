<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'type',
        'userid',
        'category',
        'size', 
        'pricetype', 
        'description', 
        'price',
        'negotiable', 
        'productimg1',
        'productimg2', 
        'productimg3', 
        'productimg4', 
        'name', 
        'productimg5',
        'email',
        'location',
        'phonenumber',
        'approved',
        'topad'
    ];
}
