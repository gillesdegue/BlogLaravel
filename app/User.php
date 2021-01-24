<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    
     */

    protected $fillable = [
        'name', 'email','image', 'password','nom','prenom','apropos'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function article()
        {
            return $this->hasMany(Article::class);
        }

    public static function updateUser($data,$path)
    {

            $user =User::find(Auth::user()->id);
            $user->name=$data['name'];
            $user->nom=$data['nom'];
            $user->prenom=$data['prenom'];
            $user->apropos=$data['apropos'];
            $user->email= $data['email'];
            if ($path!="")
            {
                $user->image=$path;      
            }
            //si l'ancien mot de pass est egale a celui de la base alors il
            //le remplace par le nouveau
            if (Hash::check($data['oldPassword'], Auth::user()->password))
             {
            $user->password=bcrypt($data['password']);
            }
           $user->save();
           return true;
    
        
}
}
