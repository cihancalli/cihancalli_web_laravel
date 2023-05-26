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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('post_title');
            $table->string('imageUrl');
            $table->string('post_summary');
            $table->longText('post_content');
            $table->integer('view')->default(0);
            $table->boolean('published')->default(false);
            $table->string('post_slug');
            $table->softDeletes();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
