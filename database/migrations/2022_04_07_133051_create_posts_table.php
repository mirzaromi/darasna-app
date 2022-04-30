<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->string('kategori');
            $table->foreignId('author_id')->nullable();
            $table->string('slug')->unique();
            $table->string('foto')->nullable();
            $table->string('foto_vertical')->nullable();
            $table->string('foto_horizontal')->nullable();
            $table->integer('view')->nullable();
            $table->integer('like')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
