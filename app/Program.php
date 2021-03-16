<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use SoftDeletes;
    protected $hidden = ['created_at', 'updated_at'];

    public function edulevel()
    {
        return $this ->belongsTo('App\Edulevel');
    } 
}
