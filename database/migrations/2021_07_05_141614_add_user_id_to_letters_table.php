<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('letters', function (Blueprint $table) {
            //
            $table->integer('user_id')->unsigned()->default("Guest");                           // 符号無し属性を作成
            $table->foreign('user_id')->references('id')->on('users');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('letters', function (Blueprint $table) {
            //
            $table->dropForeign('posts_user_id_foreign');
            $table->dropForeign(['user_id']);
        });
    }
}
