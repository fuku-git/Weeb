<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            //データ型の変更
            $table->string('name',50)->change();
            $table->string('email',191)->change();
            $table->string('password',191)->change();

            //カラム名の変更
            $table->renameColumn('id', 'user_id');
            $table->renameColumn('name', 'user_name');
            $table->renameColumn('email', 'user_email');
            $table->renameColumn('password', 'pass');
            $table->renameColumn('created_at', 'created_user');
            $table->renameColumn('updated_at', 'updated_user');

            // カラムの追加
            $table->string('icon')->nullable();
            $table->integer('authority')->comment('1:運営　2:USER');
            $table->integer('role')->comment('1:フロント　2:バック　3:インフラ 4:デザイナー');
            $table->text('skill');
            $table->text('portfolio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('users', function (Blueprint $table) {
            // 追加したカラム名を削除
            $table->dropColumn('icon');
            $table->dropColumn('authority');
            $table->dropColumn('role');
            $table->dropColumn('skill');
            $table->dropColumn('portfolio');

            //データ型を初期値に戻す
            $table->string('user_name')->change();
            $table->string('user_email')->change();
            $table->string('pass')->change();

            //カラム名を初期値に戻す
            $table->renameColumn('user_id', 'id');
            $table->renameColumn('user_name', 'name');
            $table->renameColumn('user_email', 'email');
            $table->renameColumn('pass', 'password');
            $table->renameColumn('created_user', 'created_at');
            $table->renameColumn('updated_user', 'updated_at');

        });
    }
}
