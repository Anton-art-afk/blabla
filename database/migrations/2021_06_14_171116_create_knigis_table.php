<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnigisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('knigis', function (Blueprint $table) {
            $table->id();
            $table->text(column: 'Avtor');
            $table->text(column: 'Nazvanie');
            $table->text(column: 'Shanr');
            $table->text(column: 'Opisanie');
            $table->longblob(column: 'image');
        });
      
    }

    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('knigis');
    }
}
