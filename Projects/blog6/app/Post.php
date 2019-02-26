<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

     // ----------
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }

    public function scopeFilter($query, $filters)
    {
    	if($month = $filters('month')) {
    		// Query Builder
    		$query->whereMonth('created_at', Carbon::parse($month)->month);
    	}

    	if($year = $filters('year')) {
    		$query->whereYear('created_at', $year);
    	}
    }
}
