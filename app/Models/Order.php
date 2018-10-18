<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['id','full_name','address','phone','description','status','date','restaurant_id'];
    public $timestamps = false;

    public function store()
    {
    	return $this->belongsTo('App\Models\Store','restaurant_id','id');
    }

    public function orderFood()
    {
    	return $this->hasMany('App\Models\OrderFood','order_id','id');
    }
}
