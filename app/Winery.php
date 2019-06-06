<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    public function Wine()
    {
        return $this->hasMany('App\Wine');
    }

    public function Country()
    {
        return $this->belongsTo('App\Country');
    }
}
