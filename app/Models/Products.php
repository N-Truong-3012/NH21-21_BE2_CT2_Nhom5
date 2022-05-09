<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    function manufactures(){
        return $this->belongsTo(Manufacture::class,'Manu_ID');
    }
    function protypes(){
        return $this->belongsTo(Protypes::class,'Type_ID');
    }
}
