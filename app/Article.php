<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    	public function user()
    	{
    		return $this->belongsTo(User::class);
    	}

    	public function categorie()
    	{
    		return $this->belongsTo(Categorie::class);
    	}

    	public function souscategorie()
    	{
    		return $this->belongsTo(Categorie::class);
    	}

        public function htags()
        {
            return $this->belongsToMany(htag::class);
        }
}
