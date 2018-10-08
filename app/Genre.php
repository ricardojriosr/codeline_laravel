<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = "genre";
    protected $fillable = [
        'name'
    ];

    public function film()
    {
        return $this->belongsTo('App\Film');
    }
}
