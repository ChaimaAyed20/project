<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('archives_per_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('archive_id')->constrained('archives')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('archive_categories')->onDelete('cascade');
            $table->timestamps(); // optional but recommended
        });        
    }

    public function down(): void
    {
        Schema::dropIfExists('archives_per_category');
    }
};
