<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'id',
        'title',
        'body'
    ];

    // public function users()
    // {
    // 	return $this->belongsToMany (related: User::class);
    // }
}
