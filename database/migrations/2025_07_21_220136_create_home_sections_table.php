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
    Schema::create('home_sections', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('subtitle')->nullable();
        $table->text('short_description')->nullable();

        // Pour les images, on peut stocker leurs chemins en string
        $table->string('image1')->nullable();
        $table->string('image2')->nullable();
        $table->string('image3')->nullable();

        // Pour les 4 icônes, avec titre et description, on peut faire par exemple :
        $table->string('icon1')->nullable();
        $table->string('icon1_title')->nullable();
        $table->text('icon1_description')->nullable();

        $table->string('icon2')->nullable();
        $table->string('icon2_title')->nullable();
        $table->text('icon2_description')->nullable();

        $table->string('icon3')->nullable();
        $table->string('icon3_title')->nullable();
        $table->text('icon3_description')->nullable();

        $table->string('icon4')->nullable();
        $table->string('icon4_title')->nullable();
        $table->text('icon4_description')->nullable();

        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sections');
    }
};
