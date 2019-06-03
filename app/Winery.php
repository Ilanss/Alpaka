<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    public function Wine()
    {
        return $this->hasMany('App\Wine', 'winery_fk', 'winery_id');
    }

    public function Country()
    {
        return $this->hasOne('App\Country');
    }
}
