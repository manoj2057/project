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
                $table->string('title');
                $table->string('desc');
                $table->string('img');
                $table->string('author');
                $table->string('place');
              $table->foreignId('category_id')->constrained('posts','id');
                 $table->timestamps();
                 //$table->foreignId('category_id')->refrences('id')->on('categories');
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
