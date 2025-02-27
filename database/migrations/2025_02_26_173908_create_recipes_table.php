<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up()
        {
            Schema::create('recipes', function (Blueprint $table) {
                $table->id(); // Auto-incrementing primary key
                $table->string('title'); // Recipe title
                $table->text('description'); // Recipe description
                $table->integer('cooking_time'); // Time in minutes
                $table->timestamps(); // Created_at & updated_at
            });
        }       

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
