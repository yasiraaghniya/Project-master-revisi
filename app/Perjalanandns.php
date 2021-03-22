<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perjalanandns extends Model
{
    protected $table = 'tb_perjalanandinas';
    public function pegawaipdinas()
    {
        return $this ->belongsTo('App\Pegawai');
    } 
}
