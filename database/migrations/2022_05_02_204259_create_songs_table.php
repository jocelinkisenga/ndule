<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Categorie_id')->nullable();
            $table->foreignId('artist_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->string('title')->unique();
            $table->string('artist_name');
            $table->text('description');
            $table->string('file_path')->nullable();
            $table->string('cover_art')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
};
