<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quser;
use App\Township;
use App\Qvolunteer;

class QCenter extends Model
{
    public function qusers()
    {
        return $this->hasMany('App\Quser');
    }

    public function township()
    {
        return $this->belongsTo('App\Township');
    }

    public function qvolunteers()
    {
        return $this->hasMany('App\Qvolunteer');
    }
}
