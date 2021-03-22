<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengikutiplth extends Model
{
    protected $table = 'tb_mengikutiplth';
    protected $guarded = [];
    // protected $fillable = ['pegawaiplth_id', 'tglsurat', 'no_surat', 'nama_plth', 'tgl_plth', 'tmpt_plth',];
    protected $hidden = ['created_at', 'updated_at'];
    public function pegawaiplth()
    {
        return $this ->belongsTo('App\Pegawai');
    } 
}
