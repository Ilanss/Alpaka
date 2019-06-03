<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function winery() {
        return $this->belongsTo('App\Winery');
    }

    public function foods() {
        return $this->belongsToMany('App\Food', 'wines_with_foods');
    }

    public function promotions() {
        return ($this->hasMany('App\Promotion'));
    }

    public function ratings() {
        return $this->hasMany('App\Rating');
    }

    public function country() {
        return $this->belongsTo('App\Country');
    }
}
