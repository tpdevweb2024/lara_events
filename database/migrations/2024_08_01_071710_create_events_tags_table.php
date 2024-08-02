<?php

use App\Models\Tag;
use App\Models\Event;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreignId('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_tags');
    }
};
