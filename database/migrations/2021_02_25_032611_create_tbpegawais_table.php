<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbpegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbpegawais', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai', 100);
            $table->string('nip');
            $table->string('nrp');
            $table->string('tempatlhr', 50);
            $table->date('tgllahir');
            $table->string('alamat', 50);
            $table->double('hp');
            $table->string('pangkat', 50);
            $table->string('golongan', 50);
            $table->string('jabatan', 50);
            $table->string('bagian',50);
            $table->string('kanwil', 50);
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
        Schema::dropIfExists('tbpegawais');
    }
}
