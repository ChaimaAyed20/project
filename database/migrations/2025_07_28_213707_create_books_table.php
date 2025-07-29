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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('designation_ar');
            $table->string('designation_fr');
            $table->text('description_ar')->nullable();
            $table->string('author')->nullable();
            $table->dateTime('date_de_publication')->nullable();
            $table->string('cover')->nullable(); // if image path or file
            $table->text('annex')->nullable();
            $table->string('ISBN')->nullable();
            $table->enum('type', ['library', 'reference']); // distinction
            $table->string('maison_edition')->nullable();
            $table->timestamps(); // includes created_at, updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
