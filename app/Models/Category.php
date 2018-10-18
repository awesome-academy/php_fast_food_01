<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['id','name','description'];
    public $timestamps = false;

    public function food()
    {
    	return $this->hasMany('App\Models\Food','category_id','id');
    }
}
