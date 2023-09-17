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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id')->constrained('users');

            $table->integer('animal_id')->constrained('animals');

            $table->dateTime('dataInicio');
            $table->dateTime('dataTermino');
            $table->float('custo');
            $table->string('tratamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
