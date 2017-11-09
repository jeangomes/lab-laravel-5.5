<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPurchaseTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('product_purchase', function (Blueprint $table) {
            $table->integer('purchase_id')->unsigned()->index();
            $table->integer('product_id')->unsigned()->index();
            $table->integer('qtd')->unsigned();
        });

        Schema::table('product_purchase', function (Blueprint $table) {
            $table->primary(['purchase_id', 'product_id']);
            $table->foreign('purchase_id')->references('id')->on('purchases')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('product_purchase', function (Blueprint $table) {
            $table->dropForeign('product_purchase_purchase_id_foreign');
            $table->dropForeign('product_purchase_product_id_foreign');
        });
        Schema::dropIfExists('product_purchase');
    }

}
