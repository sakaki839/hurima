<?php

namespace App\Http\Controllers;

use Illuminate\Http\ProfileRequest;

class Profile extends Model
{
use HasFactory;
       protected $fillable = [
        'name', 
        'post code',
        'address',
        'property'
       ];
}