<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\QCenter;

class Qvolunteer extends Model
{
    public function qcenters()
    {
        return $this->belongsTo('App\QCenter');
    }
}
