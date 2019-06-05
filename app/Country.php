<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function wines() {
        return $this->hasMany('App\Wine');
    }

    public function wineries() {
        return $this->hasMany('App\Wine');
    }
}
