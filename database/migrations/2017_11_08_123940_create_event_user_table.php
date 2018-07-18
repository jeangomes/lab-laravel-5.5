<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('event_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('event_id')->unsigned()->index();            
            $table->timestamp('subscribe_date')->useCurrent();
            //$table->date('payment_deadline')->nullable();
            $table->timestamps();
        });

        Schema::table('event_user', function (Blueprint $table) {
            $table->unique(['user_id', 'event_id'], 'unique_participation');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('event_user', function (Blueprint $table) {
            $table->dropForeign('user_event_user_id_foreign');
            $table->dropForeign('user_event_event_id_foreign');
        });
        Schema::dropIfExists('event_user');
    }

}
