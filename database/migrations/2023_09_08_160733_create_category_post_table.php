<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('post_id')->references('id')->on('posts');
            // две последние строки можно не писать, если придерживаемся названий по умолчанию(по правилам),
            // в противном случае, если даем свои названия, то такие строки обязательны с новыми названиями
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_post');
    }
};
