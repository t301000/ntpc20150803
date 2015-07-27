<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['user_id', 'title', 'content', 'page_views'];

    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function comments()
    {
        return $this->hasMany('\App\Comment')->orderBy('created_at', 'asc');
    }

    public function tags()
    {
        return $this->belongsToMany('\App\Tag');
    }

    public function is_owner()
    {
        return (\Auth::id() == $this->user_id);
    }
}
