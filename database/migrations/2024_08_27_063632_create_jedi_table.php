<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jedi', function (Blueprint $table) {
            $table->id();
            //no forigen key needed
            $table->string('first_name');
            $table->string('surname');
            $table->integer('age');
            $table->string('race');
            $table->string('gender');
            $table->string('fighting_style');
            $table->string('image');
            $table->string('rank');
            $table->date('date_joined');
            $table->integer('midi_chlorian_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jedi');
    }
};
