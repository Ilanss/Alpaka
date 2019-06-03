<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    public function wine() {
        return $this->belongsTo('App\Wine');
    }
}
