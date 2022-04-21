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
            $table->foreignId('twenty')->constrained('scores')->nullable();
            $table->foreignId('thirty')->constrained('scores')->nullable();
            $table->foreignId('forty')->constrained('scores')->nullable();
            $table->foreignId('twentyTimed')->constrained('scores')->nullable();
            $table->foreignId('thirtyTimed')->constrained('scores')->nullable();
            $table->foreignId('fortyTimed')->constrained('scores')->nullable();
            $table->foreignId('event_id')->constrained();
            $table->foreignId('validatedBy')->constrained('users')->nullable();
            $table->foreignId('approvedBy')->constrained('users')->nullable();
            $table->date('submitted')->nullable();
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