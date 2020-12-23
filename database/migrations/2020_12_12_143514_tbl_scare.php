<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblScare extends Migration
{
    public function up()
    {
         Schema::create('tbl_scare', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->integer('Usia');
            $table->increments('no_pasien');
            $table->timestamps();
        });
    }
    public function down()
    {
         Schema::dropIfExists('tbl_scare');
    }
}
