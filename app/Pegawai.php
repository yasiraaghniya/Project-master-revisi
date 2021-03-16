<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'tbpegawais';
    protected $fillable = ['nama_pegawai, nip, nrp, tempatlhr, tgllahir, alamat, hp, pangkat, golongan, jabatan, bagian, kanwil'];
    protected $hidden = ['created_at', 'updated_at'];
}
