<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aserraderos', function (Blueprint $table) {
            $table->id();
            $table->decimal("capacidad", 10);
            $table->string("tipo");
            $table->unsignedBigInteger('madera_id');
            $table->foreign('madera_id')->references('id')->on('maderas');
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
        Schema::dropIfExists('aserraderos');
    }
};
