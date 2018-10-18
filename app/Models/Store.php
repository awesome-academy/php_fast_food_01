<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';
    protected $fillable = ['id','name','address','phone','description','avater','workspace_id'];
    public $timestamps = false;

    public function order()
    {
    	return $this->hasMany('App\Models\Order','store_id','id');
    }

    public function storeFood()
    {
    	return $this->hasMany('App\Models\StoreFood','store_id','id');
    }
}
