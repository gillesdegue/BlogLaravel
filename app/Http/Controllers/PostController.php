<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $article = new \App\Article;

        $data = request();
         $image1="";
        
         $this->validate($data, [
           'image1' => 'required|image',
           'titre' => 'required|string|unique:articles',
           'contenu' => 'required|string',

            
        ]);
        
        $article->categorie_id=$data['selectcategorie'] ;
         if (!empty($data['selectsouscategorie'])) {
            $article->souscategorie_id=$data['selectsouscategorie'] ;
            };
       // dd(request()->file('image1')->store('imagesArticles','public'));
        // $image1= request()->file('image1')->store('imagesArticles','public');
         $article->image1= request()->file('image1')->store('imagesArticles','public');
        if (!empty($data['image2'])) {
            $this->validate($data, [
           'image2' => 'image',
            
            ]);
            $image2= request()->file('image2')->store('imagesArticles','public');
            $article->image2=$image2;
        }else{}

        if (!empty($data['image3'])) {
           
            $this->validate($data, [
           'image3' => 'image',
            
            ]);
            $image3= request()->file('image3')->store('imagesArticles','public');
            $article->image3=$image3;
        }else{}
       ///creation de l'article 
        $article->titre=$data['titre'];
        $article->contenu=$data['contenu'];
        $article->vues=0;
        $article->user_id=Auth::user()->id;
        $article->save();

        $htags=$data['selectHtags'];
        //cree un nouveau tableau dans lequel je vais mettre les id des htags associes
        $idHtags=array();
        $i=0;
        if (!empty($data['selectHtags'])) {
        foreach ($htags as $index => $htag) { 
           if(!\App\Htag::find($htag))
           {
            $newHtag = new \App\Htag;
            $newHtag->libelle=$htag;
            $newHtag->save();

            //recupere le htag qu on vient d'ajouter
            array_push($idHtags, $newHtag->id);
           }else
           {
             array_push($idHtags, $htag);
           }
        }
       $htagsAssocier = \App\Htag::find($idHtags);
       $article->htags()->attach($htagsAssocier);
   }
       return Redirect::back()->with('message','Article ajouter!');
      

       
    }

    public function updateArticle()
    {
        //
       
       

        $data = request();
         $image1="";
         $article =\App\Article::find($data['id']);
         $this->validate($data, [
           'titre' => 'required|string',
           'contenu' => 'required|string',

            
        ]);
        
        $article->categorie_id=$data['selectcategorie'] ;
         if (!empty($data['selectsouscategorie'])) {
            $article->souscategorie_id=$data['selectsouscategorie'] ;
            };
       // dd(request()->file('image1')->store('imagesArticles','public'));
        // $image1= request()->file('image1')->store('imagesArticles','public');
         
         if (!empty($data['image1'])) {
            $this->validate($data, [
           'image1' => 'image',
            
            ]);
            $article->image1= request()->file('image1')->store('imagesArticles','public');
          
        }else{}
        if (!empty($data['image2'])) {
            $this->validate($data, [
           'image2' => 'image',
            
            ]);
            $image2= request()->file('image2')->store('imagesArticles','public');
            $article->image2=$image2;
        }else{}

        if (!empty($data['image3'])) {
           
            $this->validate($data, [
           'image3' => 'image',
            
            ]);
            $image3= request()->file('image3')->store('imagesArticles','public');
            $article->image3=$image3;
        }else{}
       ///creation de l'article 
        $article->titre=$data['titre'];
        $article->contenu=$data['contenu'];
        
        $article->user_id=Auth::user()->id;
        $article->save();

        $htags=$data['selectHtags'];
        //cree un nouveau tableau dans lequel je vais mettre les id des htags associes
        $idHtags=array();
        $i=0;
        $existe=false;
        $htagsForDelete=array();
        //recuperation des htags dans un tableau pour la suppression
        foreach ($article->htags as $index => $articleHtag)
              {
                //
                array_push($htagsForDelete, $articleHtag->id);
            }

        if (!empty($htags)) {
            foreach ($htags as $index => $htag) { 
            $existe = false;
            foreach ($htagsForDelete as $index => $articleHtag)
              {
                if ($articleHtag == $htag) {
                    unset($htagsForDelete[$index]) ;
                 $existe=true;
                 //echo $existe;
                  
                }else{}
            }
            if($existe == false)
            {
               
                 if(!\App\Htag::find($htag))
                       {
                       //echo $htag;
                        $newHtag = new \App\Htag;
                        $newHtag->libelle=$htag;
                        $newHtag->save();
                        

                        //recupere le htag qu on vient d'ajouter
                        array_push($idHtags, $newHtag->id);
                       }else
                       {
                         array_push($idHtags, $htag);
                       } 
                     
            }
            if ($existe == true) {
                
                
            }
           
        }
        }
        foreach ($htagsForDelete as $index => $c)
              {
                \DB::table('article_htag')->where('article_id','=', $article->id)
                                         ->where('htag_id','=',$c)
                                         ->delete();
        
    }
       $htagsAssocier = \App\Htag::find($idHtags);
       $article->htags()->attach($htagsAssocier);
       return Redirect('admin')->with('message','modification de l article pris en compte!');
      // return view('pages/modification',['article'=> $article,'message'=> 'modification prise en compte',]);
      // return Redirect::back()->with('message','Article modifier!')->with('article', $article);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $data = request();
        $path="";
        $this->validate($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            
        ]);
        if (!empty($data['password'])) {
            $this->validate($data, [
            'password' => 'string|min:1|confirmed',
        ]);
        }
        if (!empty($data['image'])) {
              $this->validate($data, [
            'image' => 'image',
        ]);
              //stockage de l image dans le donner imagesArticles qui se trouve dans storage/public
        $path= request()->file('image')->store('imagesArticles','public'); 
        
        }
       
        //appel de la fontion update dans le model user
           \App\User::updateUser($data,$path);
          return Redirect::back()->with('message','modification pris en compte!');
        
        
}
    

    public function getHtags()
    {
       
        
        
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
