<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePriceFromProducts extends Migration
{
    
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }

  
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->double('price', 9,2);
        });
    }
}
