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
        Schema::create('padwans', function (Blueprint $table) {
            $table->id();
               //we are linking the has one relationship one to one, the padwan belongs to the Jedi Knight or Master
            $table->foreignId('jedi_id')->constrained()->onDelete('cascade');
            $table->string('first_name');
            $table->string('surname');
            $table->integer('age');
            $table->string('race');
            $table->string('gender');
            $table->string('fighting_style');
            $table->string('image');
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
        Schema::dropIfExists('padwans');
    }
};
