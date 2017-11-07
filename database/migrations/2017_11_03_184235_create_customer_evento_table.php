<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerEventoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('customer_evento', function (Blueprint $table) {
            $table->integer('customer_id')->unsigned()->index();
            $table->integer('evento_id')->unsigned()->index();
            $table->timestamp('subscribe_date')->useCurrent();
            $table->timestamps();
        });

        Schema::table('customer_evento', function (Blueprint $table) {
            $table->primary(['customer_id', 'evento_id']);
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('evento_id')->references('id')->on('eventos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('customer_evento', function (Blueprint $table) {
            $table->dropForeign('customer_evento_customer_id_foreign');
            $table->dropForeign('customer_evento_evento_id_foreign');
        });
        Schema::dropIfExists('customer_evento');
    }

}
