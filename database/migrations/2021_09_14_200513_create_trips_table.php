<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {

            $table->id();
            $table->string('title', 100);
            $table->string('departure_place',100);
            $table->string('destination', 100);
            $table->date('departure_date');
           
            $table->smallInteger('permanence_days')->unsigned();
            $table->smallInteger('number_people')->unsigned();
            $table->string('transport', 50);
            $table->text('details')->nullable;
            $table->float('price', 8, 2);
            $table->timestamps();
            
        });
    }
            
            
            

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
