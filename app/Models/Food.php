<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    protected $fillable = [
    	'id','name','description','information','price','rating','size','image','image_detail','promotion_id','category_id'
    ];
    public $timestamps = false;

    public function category()
    {
    	return $this->belongsTo('App\Models\Category','category_id','id');
    }

    public function promotion()
    {
    	return $this->belongsTo('App\Models\Promotion','promotion_id','id');
    }

    public function orderFood()
    {
    	return $this->hasMany('App\Models\OrderFood','food_id','id');
    }

    public function storeFood()
    {
    	return $this->hasMany('App\Models\StoreFood','food_id','id');
    }

    public function comment()
    {
    	return $this->hasMany('App\Models\Comment','food_id','id');
    }
}
