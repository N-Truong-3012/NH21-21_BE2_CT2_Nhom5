<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protypes extends Model
{
    use HasFactory;
    function products(){
        return $this->hasMany(Products::class, 'Type_ID','Type_ID');
    }
}
