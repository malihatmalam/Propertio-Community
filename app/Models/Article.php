<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Article extends Model
{
    // Slug
    use Sluggable;

	// use SoftDeletes;
    protected $table = 'articles';

	protected $fillable = [
        'title',
        'category_id',
        'user_id',
        'content',
        'image_cover',
        'slug',
        'read_duration'
    ];

    public function category(){
    	return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function tag(){
    	return $this->belongsToMany(Tags::class);
    }

    public function users(){
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
