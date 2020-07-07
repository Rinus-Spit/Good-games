<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['title', 'excerpt', 'body', 'image'];

    public function getImageAttribute($value)
    {
        if ($value) {
            return asset('storage/'.$value);
        }
        return '';
    }


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'game_category');
    }
    
    public function hasCategory($category) {
        return $this->categories->contains($category);
    }    

    public function users()
    {
        return $this->belongsToMany(User::class, 'game_user')->withPivot('stars');
    }

    public function review()
    {
        return $this->belongsToMany(User::class, 'Reviews')->withPivot(['body','id']);
    }

    public function stars()
    {
        $stars = 0;
        $count_users = 0;
        foreach ($this->users as $user) {
            $stars += $user->pivot->stars;
            $count_users++;
        }
        if ($count_users) return $stars/$count_users;
        return 0;
        // return $this->belongsToMany(User::class, 'game_user')->withPivot('stars');
    }

    public function showStars($count = 0)
    {
        $show = '<div class="ratingbox  text-warning">';
        $rating = floor($count * 20);
        $show .= '<div class="rating" style="width:'.$rating.'%;"></div>';
        $show .= '</div>';
        // for ($i=0;$i<$count;$i++) {
        //     if ($i <= ($count - 1)) {
        //         $show .= '<span class="fa fa-star text-warning" aria-hidden="true"></span>';
        //     } else {
        //         $show .= '<span class="fa fa-star text-warning half" aria-hidden="true"></span>';
        //         // $show .= '<span>&nbsp;</span>';
        //     }
        // }
        return $show;
    }
}
