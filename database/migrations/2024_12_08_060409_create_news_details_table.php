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
        Schema::create('news_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_tag_id')->constrained('news_tags')->onDelete('cascade');
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->date('date_news');
            $table->string('author');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_details');
    }
};
