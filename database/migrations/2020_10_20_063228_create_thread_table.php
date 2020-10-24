<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thread', function (Blueprint $table) {
            $table->bigIncrements('id'); //increments('board_id');
            $table->string('user_id'); //nameをidに変更// ->unsigned()->index();
            $table->text('post_contents');
            $table->text('post_body');
            $table->text('comment');
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
        Schema::dropIfExists('thread');
    }
}
