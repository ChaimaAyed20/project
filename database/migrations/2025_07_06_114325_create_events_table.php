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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Foreign key to events_category
            //$table->unsignedBigInteger('events_category_id');
            //$table->foreign('events_category_id')->references('id')->on('events_category')->onDelete('cascade');

            // Other fields
            $table->string('designation_ar');
            $table->text('description_ar');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('place')->nullable();
            $table->text('organizer')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
