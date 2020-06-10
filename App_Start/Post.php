<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'header', 'content', "tag_id", 'time_to_read', 'user_id',
    ];
}
