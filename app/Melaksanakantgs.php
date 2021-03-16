<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Melaksanakantgs extends Model
{
         protected $table = 'tb_melaksanakantgs';
    public function pegawaimtgs()
    {
    
        return $this ->belongsTo('App\Pegawai');
    } 
}
