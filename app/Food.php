<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    public function wines() {
        return $this->belongsToMany('App\Wine', 'wines_with_foods', 'food_fk', 'wine_fk');
    }
}
