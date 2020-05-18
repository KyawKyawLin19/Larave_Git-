<?php

namespace App;
use App\QCenter;
use Illuminate\Database\Eloquent\Model;

class Quser extends Model
{   
    public function qcenter()
    {
        return $this->belongsTo('App\QCenter','qcenter_id');
    }
}
