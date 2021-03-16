<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mengikutiplth extends Model
{
    protected $table = 'tb_mengikutiplth';
    public function pegawaiplth()
    {
        return $this ->belongsTo('App\Pegawai');
    } 
}
