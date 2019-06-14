<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    protected $casts=['good_year' =>'boolean','stock_status'=>'boolean'];
    protected $fillable = ['name', 'brand', 'price_wine', 'winery_id', 'category_id', 'country_id', 'origin', 'size', 'varietal', 'good_year', 'date_production', 'serv_temp', 'description', 'stock_status', 'conditioning', 'ranking', 'alcohol_level', 'slug', 'delivery_delay', 'image'];

    public function winery() {
        return $this->belongsTo('App\Winery');
    }

    public function category() {
        return $this->belongsTo('App\Category');
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
