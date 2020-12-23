<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCheck extends Migration
{
    public function up()
    {
         Schema::create('tbl_check', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->decimal('berat_badan');
            $table->decimal('tinggi_badan');
            $table->increments('no_pasien');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('tbl_check');
    }
}
