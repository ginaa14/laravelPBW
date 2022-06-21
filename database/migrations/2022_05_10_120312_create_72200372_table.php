<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create72200372Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('72200372', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nidn');
            $table->string('nama', 30);
            $table->string('status', 30);
            $table->string('jafung', 30);
            $table->string('pakar', 50);
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
        Schema::dropIfExists('72200372');
    }
}
