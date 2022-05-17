<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SendContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('send_contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameContact',100);
            $table->string('emailContact',100);
            $table->string('contentContact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('send_contact', function (Blueprint $table) {
            Schema::dropIfExists('send_contact');
        });
    }
}
