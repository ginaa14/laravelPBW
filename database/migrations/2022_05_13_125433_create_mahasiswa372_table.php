<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswa372Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa372', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('nim');
            $table->string('nama', 150);
            $table->string('gender', 150);
            $table->string('jurusan', 150);
            $table->string('bidang_minat', 150);

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
        Schema::dropIfExists('mahasiswa372');
    }
}
