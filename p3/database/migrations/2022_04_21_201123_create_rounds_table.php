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
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('twenty')->constrained('scores');
            $table->foreignId('thirty')->constrained('scores');
            $table->foreignId('forty')->constrained('scores');
            $table->foreignId('twentyTimed')->constrained('scores');
            $table->foreignId('thirtyTimed')->constrained('scores');
            $table->foreignId('fortyTimed')->constrained('scores');
            $table->foreignId('event_id')->constrained();
            $table->foreignId('validatedBy')->constrained('users')->nullable();
            $table->foreignId('approvedBy')->constrained('users')->nullable();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rounds');
    }
};