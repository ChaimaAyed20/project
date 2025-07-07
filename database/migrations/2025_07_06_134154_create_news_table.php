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
    Schema::create('news', function (Blueprint $table) {
        $table->id();
        $table->string('designation_ar');
        $table->text('description_ar');
        $table->string('cover')->nullable();
        $table->unsignedBigInteger('author_id');
        $table->json('files')->nullable();   // if multiple files, consider json or separate table
        $table->json('images')->nullable();  // same for images
        $table->date('publication')->nullable();
        $table->timestamps();

        // Foreign key constraint
        $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
