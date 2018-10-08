<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
    protected $fillable = [
        'name', 'description', 'release_date', 'rating', 'ticket_price', 'country', 'photo', 'slugurl'
    ];

    public function genre()
    {
        return $this->hasMany('App\Genre');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
