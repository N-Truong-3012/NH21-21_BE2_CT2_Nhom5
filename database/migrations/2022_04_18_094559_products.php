<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('Product_ID');
            $table->string('Image');
            $table->string('Product_Name');
            $table->integer('Type_ID');
            $table->integer('Manu_ID');
            $table->integer('Price');
            $table->text('Description');
            $table->tinyInteger('Feature');
            $table->timestamps();
            $table->integer('Quantity_Stock');
            $table->integer('Quantity_Sold');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
