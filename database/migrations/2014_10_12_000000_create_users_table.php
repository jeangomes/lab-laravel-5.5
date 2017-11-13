<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email')->unique();
            $table->string('password');
            $table->date('birth_date');
            $table->string('cellphone', 20)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('number', 2)->nullable();
            $table->string('occupation', 25)->nullable();
            $table->json('emergency_contact')->nullable();
            $table->boolean('admin')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('users');
    }

}
