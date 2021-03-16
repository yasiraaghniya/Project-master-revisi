<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kenaikangaji extends Model
{
    protected $table = 'tb_kenaikangaji';
    protected $guarded = [];
    // protected $fillable = ['pegawaikgaji_id, tglsurat, no_surat, gajipkk_lama, gajipkk_baru, masakerja, tahunkgs'];
    protected $hidden = ['created_at', 'updated_at'];
    
    public function pegawaikenaikangaji()
    {
        return $this->belongsTo('App\Pegawai');
    } 
}
