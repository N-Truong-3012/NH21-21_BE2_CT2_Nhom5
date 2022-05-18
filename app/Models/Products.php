<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['Product_ID','Product_name','Image','Type_ID','Manu_ID','Price','Description','Feature','create_at','update_at','Quantity_Stock','Quantity_Sold'];
    use HasFactory;
    function manufactures(){
        return $this->belongsTo(Manufacture::class,'Manu_ID');
    }
    function protypes(){
        return $this->belongsTo(Protypes::class,'Type_ID');
    }
}
