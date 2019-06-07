<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public function wine() {
        return $this->belongsTo('App\Wine');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
