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
        Schema::create('flag_video', function (Blueprint $table) {
            $table->foreignId('video_id')->references('id')->on('videos')->constrained()->cascadeOnDelete();
            $table->foreignId('flag_id')->references('id')->on('flags')->constrained();
            $table->primary(['video_id', 'flag_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flag_video');
    }
};
