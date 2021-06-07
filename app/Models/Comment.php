<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
	 'comment' , 'guia_id' , 'user_id', 
	];
	
   public  function user() {
        return $this->belongsTo(User::class);
    }
    public function author() {
        return $this->belongsTo(User::class,'user_id');
    }
}
