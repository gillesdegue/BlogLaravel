<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $htags = \App\Htag::All();
        $htagsPagination = \App\Htag::paginate(10);
        $articles = \App\Article::paginate(10);
        $allArticles = \App\Article::All();
        return view('admin',['articles'=> $articles,'htags'=> $htags,'htagsPagination'=> $htagsPagination,'allArticles'=>$allArticles]);
    }

    public function indexHtags()
    {   
        $htags = \App\Htag::All();
        $htagsPagination = \App\Htag::paginate(10);
        $articles = \App\Article::paginate(10);
        $allArticles = \App\Article::All();
        return view('htag',['articles'=> $articles,'htags'=> $htags,'htagsPagination'=> $htagsPagination,'pageHtags'=>"htags",'allArticles'=>$allArticles]);
    }

    public function modifHtags()
    {   
       $htags = \App\Htag::All();
        //$htagsPagination = \App\Htag::paginate(10);
        //$articles = \App\Article::paginate(10);

        $data=Request();
        $htag =\App\Htag::find($data['id_tags']);
        $htag->libelle = $data['tag_libelle'];
        $htag->save();
        //return view('admin',['articles'=> $articles,'htags'=> $htags,'htagsPagination'=> $htagsPagination,'pageHtags'=>"htags"]);
        return Redirect::back()->with('message','Modification pris en compte!');
    }

public function rechercheArticle()
    {   
      $allArticles = \App\Article::All();
       $htags = \App\Htag::All();
        $data=Request();
        $rechercheArticle =\App\Article::where('titre', 'like', "%{$data['researchA']}%")->paginate(10);
       $htagsPagination = \App\Htag::paginate(10);
        $articles = $rechercheArticle;

        return view('admin',['articles'=> $articles,'htags'=> $htags,'htagsPagination'=> $htagsPagination,'allArticles'=> $allArticles]);
       // return Redirect::back()->with('message','Operation Successful !');
    }

    public function selectionArticle($titre)
    {   
      
      $htags = \App\Htag::All();
      $categories= \App\Categorie::All();
        $rechercheArticle =\App\Article::where('titre', $titre)->first();
       // dd($rechercheArticle);
        return view('pages/modification',['article'=> $rechercheArticle,'categories'=>$categories,'allHtags'=> $htags,]);
        
       // return Redirect::back()->with('message','Operation Successful !');
    }

    public function rechercheHtags()
    {   
       $htags = \App\Htag::All();
        $data=Request();
        $rechercheHtags =\App\Htag::where('libelle', 'like', "%{$data['research']}%")->paginate(10);
        $htagsPagination = $rechercheHtags;
        $articles = \App\Article::paginate(10);

        return view('htag',['articles'=> $articles,'htags'=> $htags,'htagsPagination'=> $htagsPagination,'pageHtags'=>"htags"]);
       // return Redirect::back()->with('message','Operation Successful !');
    }
    public function suprimerArticle()
    {   
      $data = request();
        $id = $data['idSupArticle'];
        $article =\App\Article::find($id);
        $article->delete();
       
        return Redirect::back()->with('message','Suppression reussi!');
    }

     public function suprimerHtag($id)
    {   
     
        $article =\App\Htag::find($id);
        $article->delete();
       
        return Redirect::back()->with('message','Suppression reussi!');
    }
      public function supHTag($id)
    {   
        
    }

    public function ajout()
    {
        $allHtags=\App\Htag::all();
        $categories= \App\Categorie::all();
        
        return view('pages/ajout',['htags'=> $allHtags,'categories'=> $categories]);
    }

    public function profil()
    {

       return view('pages/profil');
    }

   
}
