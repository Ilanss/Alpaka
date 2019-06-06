<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function wines() {
        return $this->hasMany('App\Wine');
    }
}
