<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufactures extends Model
{
    use HasFactory;
    function products(){
        return $this->hasMany(Products::class, 'Manu_ID','Manu_ID');
    }
}
