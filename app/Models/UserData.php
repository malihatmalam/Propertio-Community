<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserData extends Model
{
    use SoftDeletes;

    protected $connection = 'mysql_auth';
    protected $table = 'user_datas';
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'user_id', 
        'fullname', 
        'phone', 
        'picture_profile', 
        'image_cover', 
        'address', 
        'city', 
        'province'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
