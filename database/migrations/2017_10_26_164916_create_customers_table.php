<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->date('birth_date');
            $table->string('cellphone', 20)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('number', 2)->nullable();
            $table->string('occupation',25)->nullable();
            $table->json('emergency_contact')->nullable();
            $table->boolean('special_customer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('customers');
    }

}
