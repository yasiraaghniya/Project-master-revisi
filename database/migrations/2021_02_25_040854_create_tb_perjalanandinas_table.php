<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPerjalanandinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_perjalanandinas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pegawaipdinas_id')->constrained('tbpegawais')->onDelete('cascade')->onUpdate('cascade');
            $table->date('tglsurat');
            $table->double('no_surat');
            $table->string('perihal', 100);
            $table->date('tgl_berangkat');
            $table->date('tgl_kembali');
            $table->string('selama', 100);
            $table->string('tujuan', 100);
            $table->string('transportasi', 100);
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
        Schema::dropIfExists('tb_perjalanandinas');
    }
}
