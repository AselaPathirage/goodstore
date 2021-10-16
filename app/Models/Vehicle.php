<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'brand',
        'userid',
        'model',
        'edition', 
        'modelyear', 
        'mileage', 
        'engcapacity', 
        'condition',
        'bodytype', 
        'transmition', 
        'fueltype', 
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
        'approved', 'vehicletype','topad',
    ];
}
