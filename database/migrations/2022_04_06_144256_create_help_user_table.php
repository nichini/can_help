<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_user', function (Blueprint $table) {
           //help_idとuser_idを外部キーに設定
            $table->integer('help_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->primary(['help_id', 'user_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('help_user');
    }
}
