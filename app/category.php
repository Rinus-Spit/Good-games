<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function games()
    {
        return $this->belongsToMany(Game::class, 'game_category');
    }
    
    public function hasgame($game) {
        return $category->games->contains($game);
    }    

}
