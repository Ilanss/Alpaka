<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    public function winery() {
        return $this->belongsTo('App\Winery', 'winery_fk');
    }

    public function foods() {
        return $this->belongsToMany('App\Food', 'wines_with_foods', 'wine_fk', 'food_fk');
    }
}
