<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->text('image');
            $table->text('location');
            $table->text('features');
            $table->text('besttime');
            $table->text('directions');
            $table->text('trekkingroutes');
            $table->text('items')->nullable();
            $table->text('cautions')->nullable();
            $table->text('conditions');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
