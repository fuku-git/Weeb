<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration //postからboardsに変更
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('post_contents');
            $table->text('post_body');
            // $table->foreign('user_name')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('boards');
    }
}
