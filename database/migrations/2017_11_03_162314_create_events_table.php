<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 80);
            $table->integer('vacancy');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->decimal('price', 10, 2);
            $table->date('payment_deadline')->nullable();
            $table->time('boarding_time')->nullable();
            $table->dateTime('start_date');
            $table->dateTime('final_date');
            $table->string('picture', 80);
            $table->boolean('active')->default(0);
            $table->enum('type',['Travessia','Bate e Volta','Pernoite Nutella'])->nullable();
            $table->string('level', 200)->nullable();
            $table->text('description')->nullable();
            $table->string('meeting_point', 200);
            $table->text('meeting_point_map')->nullable();
            $table->text('equipment')->nullable();
            $table->text('food')->nullable();
            $table->text('what_is_included')->nullable();
            $table->text('what_is_not_included')->nullable();
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('events');
    }

}
