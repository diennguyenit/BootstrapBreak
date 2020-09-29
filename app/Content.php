<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'link' => 'json',
    ];

    public $timestamps = false;

    public static function getAllContents() {
        return  Content::all();
    }
}
