<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('user_name',50);
            $table->string('user_email',200)->unique();
            $table->string('pass',200);
            $table->string('icon')->nullable();
            $table->integer('authority')->comment('1:運営　2:USER');
            $table->integer('role')->comment('1:フロント　2:バック　3:インフラ 4:デザイナー');
            $table->text('skill');
            $table->text('portfolio')->nullable();
            $table->timestamps();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
