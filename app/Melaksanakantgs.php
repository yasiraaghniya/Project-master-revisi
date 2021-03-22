<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Melaksanakantgs extends Model
{
    protected $table = 'tb_melaksanakantgs';
    protected $guarded = [];

    public function pegawaitgs()
    {
        return $this ->belongsTo('App\Pegawai');
    } 
}
