<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_registration', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_type');
            $table->string('serial_number');
            $table->string('name');
            $table->string('address');
            $table->integer('phone_number');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_registration', function (Blueprint $table) {
            Schema::dropIfExists('product_registration');
        });
    }
}
