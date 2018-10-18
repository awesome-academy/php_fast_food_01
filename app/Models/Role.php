<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id','name'];
    public $timestamps = false;

    public function user()
    {
    	return $this->hasMany('App\Models\User','role_id','id');
    }
}
