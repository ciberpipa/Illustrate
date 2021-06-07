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
            $table->foreignId('guia_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->string('title');
            $table->string('description');    
            $table->text('content');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            
            //$table->unsignedBigInteger('category_id');
            //$table->foreign('category_id')->references('id')->on('categories');
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
