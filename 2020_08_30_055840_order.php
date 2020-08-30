<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Order extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->bigIncrements('id_order');
            $table->date('tanggal_order');
            $table->integer('harga_barang');
            $table->text('alamat_tujuan');
            $table->unsignedBigInteger('id_customers');
            $table->unsignedBigInteger('id_product');

            $table->foreign('id_customers')->references('id_customers')->on('tabel_customers');
            $table->foreign('id_product')->references('id_product')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
