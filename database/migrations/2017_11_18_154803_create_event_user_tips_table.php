<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTipsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('event_user_tips', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gift_tip', 150);
            $table->integer('event_user_id')->unsigned()->index();
            $table->timestamps();
        });

        Schema::table('event_user_tips', function (Blueprint $table) {
            $table->foreign('event_user_id')->references('id')->on('event_user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('event_user_tips');
    }

}
