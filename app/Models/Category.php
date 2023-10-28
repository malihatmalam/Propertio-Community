<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name','slug'];

    public function articles(){
    	return $this->hasMany(Article::class);
    }

    public function getRouteKeyName()
	{
	    return 'slug';
	}
}
