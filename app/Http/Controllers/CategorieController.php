<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategorieController extends Controller
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
        $categories = \App\Categorie::paginate(10);
        $allCategories = \App\Categorie::All();
        $allSousCategories = \App\Souscategorie::All();
        return view('categorie',['categories'=> $categories,'allSousCategories'=> $allSousCategories,'allCategories'=>$allCategories]);
    }

    public function modifCategorie()
    {   
        $data = request();
         $this->validate($data, [
           'libelle' => 'required|string',
            
        ]);

         $categorie = \App\Categorie::find($data['id']);
         $categorie->libelle=$data['libelle'];
          $categorie->save();
         //ajout de sous categorie
          if (!empty($data['ajoutSousCategorie'])) {
           
            $this->validate($data, [
           'ajoutSousCategorie' => 'string',
            ]);
           $d= $categorie->souscategories()->create([
                            'libelle' => $data['ajoutSousCategorie'],
                        ]);
       }
         if (empty($data['libelle'])) {
             return Redirect::back()->with('souscategorie','Sous categorie ajouter');
         }else{
            return Redirect::back()->with('souscategorie','modification pris en compte');
        }
       
    }

    public function suprimerSousCategorie()
    {   
      $data = request();
        $id = $data['idsuppSousCategorie'];
        $Souscategorie =\App\Souscategorie::find($id);
        $Souscategorie->delete();
       
        return Redirect::back()->with('messageSousCategorie','Suppression reussi!');
    }

    public function suprimerCategorie()
    {   
      $data = request();
        $id = $data['idsuppCategorie'];
        $categorie =\App\Categorie::find($id);
        $categorie->delete();
       
        return Redirect::back()->with('message','Suppression reussi!');
    }

    public function ajoutcategories()
    {   
    	$categorie = new \App\Categorie;

        $data = request();
        
        
         $this->validate($data, [
           //'image1' => 'required|image|size:100000',
           'libelle' => 'required|string|unique:categories',

            
        ]);
         $categorie->libelle = $data['libelle'];
         $categorie->save();
       return Redirect::back()->with('messagecategorie','categorie ajouter!');
    }

    public function affichagecategorie($id)
    {   
         $htags = \App\Htag::All();
        $categories = \App\Categorie::paginate(10);
        $allCategories = \App\Categorie::All();
        $allSousCategories = \App\Souscategorie::All();
        return view('categorie',['categories'=> $categories,'allSousCategories'=> $allSousCategories,'allCategories'=>$allCategories,'idCategorie'=>$id]);
    }

    public function rechercheCategorie()
    {   
        $htags = \App\Htag::All();
        $allCategories = \App\Categorie::All();
        $allSousCategories = \App\Souscategorie::All();
        
        $data=Request();
        $rechercheCategorie =\App\Categorie::where('libelle', 'like', "%{$data['research']}%")->paginate(10);
       

       return view('categorie',['categories'=> $rechercheCategorie,'allSousCategories'=> $allSousCategories,'allCategories'=>$allCategories]);
       // return Redirect::back()->with('message','Operation Successful !');
    }

    
}
