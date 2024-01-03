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
        Schema::create('address', function (Blueprint $table) {
            $table->id('aid');
            $table->unsignedBigInteger('cid');
            $table->foreign('cid')->references('cid')->on('customers');
            $table->string("address1");
            $table->string("address2")->nullable();
            $table->string("city");
            $table->string("pincode");
            $table->string("state");
            $table->string("country");
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
