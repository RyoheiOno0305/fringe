<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->string('id',36)->primary();
            $table->string('user_id',36);
            $table->text('text');
            $table->string('parent_post_id');
            $table->unsignedInteger('comment_count');
            $table->timestamp('posted_at');
            
            $table->foreign('user_id')->references('id')->on('test_users')->onDelete('cascade');
            $table->foreign('parent_post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
