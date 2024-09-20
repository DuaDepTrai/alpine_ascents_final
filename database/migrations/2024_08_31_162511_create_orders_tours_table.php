<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersToursTable extends Migration
{
    public function up()
    {
        Schema::create('orders_tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->nullable();
            $table->foreignId('tour_id')->constrained('tours');
            $table->string('name');
            $table->string('phone')->default('000-000-0000');
            $table->string('email')->nullable();
            $table->integer('quantity');
            $table->integer('total');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders_tours');
    }
}