<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function townships()
    {
        return $this->hasMany('App\Township');
    }
}
