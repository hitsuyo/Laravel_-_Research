<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Searchable;

    // Đoạn này cho phép điền thông tin vào database
    protected $fillable = [
        'id',
        'title',
        'content',
        'author'
    ];
}
