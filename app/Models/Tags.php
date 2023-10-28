<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    protected $fillable = ['name','slug'];

    public function articles(){
    	return $this->belongsToMany(Article::class);
    }
}
