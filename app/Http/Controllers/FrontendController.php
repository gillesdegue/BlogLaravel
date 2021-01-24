<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {   
        $categories =  \App\Categorie::All();
         $allArticles = \App\Article::All();
        $i=1;
        $art1;
        $art2;
        $art3;
        $art4;
        foreach ($allArticles as $index => $Art) {
        	if ($i==1) {
        		$art1=$Art;
        	}

        	if ($i==2) {
        		$art2=$Art;
        	}

        	if ($i==3) {
        		$art3=$Art;
        	}

        	if ($i==4) {
        		$art4=$Art;
        	}
        	$i++;
        }
        
        $user = \App\User::All();

        $articles = \App\Article::where('id', '>', $art4->id)->paginate(8);

        return view('page_frontend/accueil',['articles'=> $articles,'categories'=> $categories,'article1'=>$art1,'article2'=>$art2,'article3'=>$art3,'article4'=>$art4,'user'=>$user]);
    }
}
