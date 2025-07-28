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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            $table->string('designation_ar');               // عنوان بالعربية
            $table->string('designation_fr');               // titre en français
            $table->longText('description');                // Rich‑text body (Filament’s <x-filament::rich-editor>)
            $table->dateTime('date_de_publication');        // Publication date & time
            $table->text('DOI')->nullable();                // Digital Object Identifier
            $table->string('author');                       // Author name
            $table->text('link')->nullable();               // External link / source
            $table->string('cover')->nullable();            // Image path (store in storage/app/public)

            $table->timestamps();                           // created_at & updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
