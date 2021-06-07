<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
      'user_id','guia_id', 'title', 'content','name', 'description', 'image', 'video'
    ];
    
    /**
     * Get the comments for the blog post.
     */
    function comments() {
        return $this->hasMany(Comment::class);
    }
    
    /**
     * Get the category that owns the blog post.
     */
    function guia() {
        return $this->belongsTo(Guia::class);
    }
    
    /**
     * Get the user that owns the blog post.
     */
    function user() {
        return $this->belongsTo(User::class);
    }
    /**
     * The same of user()
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function author() {
        return $this->belongsTo(User::class,'user_id');
    }
    
 
}
