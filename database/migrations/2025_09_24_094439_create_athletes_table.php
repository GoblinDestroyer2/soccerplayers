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
        Schema::create('athletes', function (Blueprint $table) {
            $table->id(); // Primary key, auto increment
            $table->string('name', 50); // Varchar, maximaal 50 tekens
            $table->string('sport', 25); // Varchar, maximaal 25 tekens
            $table->string('club', 80); // Varchar, maximaal 80 tekens
            $table->integer('salary')->nullable(); // Integer, mag leeg zijn
            $table->boolean('active'); // Boolean
            $table->date('date_of_birth'); // Date
            $table->integer('total_goals'); // Integer
            $table->timestamps(); // created_at en updated_at DateTime
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('athletes');
    }
};