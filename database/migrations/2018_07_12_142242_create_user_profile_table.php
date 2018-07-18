<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->date('birth_date')->nullable();
            $table->string('cellphone', 20)->nullable();
            $table->json('emergency_contact')->nullable();
            $table->string('nick_name', 30)->nullable();
            $table->string('rg', 15)->nullable();
            $table->string('issuing_agency', 15)->nullable();
            $table->timestamps();
        });

        Schema::table('user_profile', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_profile', function (Blueprint $table) {
            $table->dropForeign('user_profile_user_id_foreign');
        });
        Schema::dropIfExists('user_profile');
    }
}
