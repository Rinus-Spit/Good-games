<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'excerpt', 'body'];

    public function category()
    {
        return $this->belongsToMany(Category::class, 'game_category');
    }
    
    public function hasCategory($category) {
        return $this->category->contains($category);
    }    

}
