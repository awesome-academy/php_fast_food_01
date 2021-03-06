<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'id',
        'name',
        'description',
    ];
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function food()
    {
        return $this->hasMany(Food::class);
    }
}
