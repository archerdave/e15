<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->tinyInteger('points')->unsigned();
            $table->tinyInteger('distance')->unsigned();
            $table->boolean('isTimed');
            $table->foreignId('validatedBy')->constrained('people');
            $table->foreignId('approvedBy')->constrained('people');
            $table->foreignId('archer')->constrained('people');
            $table->foreignId('event_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
};