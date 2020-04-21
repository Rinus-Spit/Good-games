<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'excerpt', 'body'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'game_category');
    }
    
    public function hasCategory($category) {
        return $this->categories->contains($category);
    }    

    public function user()
    {
        return $this->belongsToMany(User::class, 'game_user')->withPivot('stars');
    }

    public function review()
    {
        return $this->belongsToMany(User::class, 'reviews')->withPivot(['body','id']);
    }

}
