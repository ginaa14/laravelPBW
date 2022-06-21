<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usr', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nik_user', 150);
            $table->string('nama_user', 150);
            $table->string('no_hp', 150);
            $table->string('password', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usr');
    }
}
