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
        Schema::create('videos', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('category')->nullable();
        $table->string('video_type')->default('file'); 
        // file | youtube

        $table->text('short_description')->nullable();
        $table->longText('details')->nullable();

        $table->string('video_path')->nullable(); 
        // store video file OR youtube link

        $table->string('thumbnail')->nullable();

        $table->date('video_date')->nullable();

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
    }
};
