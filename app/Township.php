<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\City;
use App\QCenter;

class Township extends Model
{
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function qcenters()
    {
        return $this->hasMany('App\QCenter');
    }
}
