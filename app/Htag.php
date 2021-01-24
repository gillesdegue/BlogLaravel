<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Htag extends Model
{
    public function articles()
    	{
    		return $this->belongsToMany(Article::class);
    	}
     
}
