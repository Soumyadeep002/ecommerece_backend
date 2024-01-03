<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('oid');
            $table->unsignedBigInteger('pid');
            $table->unsignedBigInteger('cid');
            $table->foreign('pid')->references('pid')->on('products');
            $table->foreign('cid')->references('cid')->on('customers');
            $table->date('order_date');
            $table->date('deliv_date');
            $table->string('quantity');
            $table->timestamps();
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
};
