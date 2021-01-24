<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Categorie extends Model
{

	    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    
     */

    protected $fillable = [
        'libelle',
    ];
    public function articles()
        {
            return $this->hasMany(Article::class);
        }

    public function souscategories()
        {
            return $this->hasMany(Souscategorie::class);
        }

    
}
