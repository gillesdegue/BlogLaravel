<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'FrontendController@index')->name('accueil');
Route::get('htags/', 'HomeController@indexHtags')->name('htags');
Route::get('categories/', 'CategorieController@index')->name('categories');
Route::post('modifCategorie/', 'CategorieController@modifCategorie')->name('modifCategorie');
Route::post('ajoutCategories/', 'CategorieController@ajoutcategories')->name('ajoutcategories');
Route::get('categories/{id}', 'CategorieController@affichagecategorie')->name('affichagecategorie');
Route::post('rechercheCategorie/', 'CategorieController@rechercheCategorie')->name('rechercheCategorie');

//Route::get('rechercheSousCategorie', 'CategorieController@rechercheSousCategorie')->name('rechercheSousCategorie');
Route::get('rechercheSousCategorie', function(){
	if (Request::ajax()) {
		return 'getrequest';
	}
});
Route::post('rechercheSousCategorie', function(){
	if (Request::ajax()) {
		$data=Request();
		
		return Response::json(\App\Categorie::find($data['id'])->souscategories->toJson());
		
	}

});

Route::post('/suprimerSousCategorie/', 'CategorieController@suprimerSousCategorie')->name('suprimerSousCategorie');
Route::post('/suprimerCategorie/', 'CategorieController@suprimerCategorie')->name('suprimerCategorie');

Route::post('htags/', 'HomeController@modifHtags')->name('modifHtag');
Route::post('rechercheHtags/', 'HomeController@rechercheHtags')->name('rechercheHtags');

Route::post('rechercheArticle/', 'HomeController@rechercheArticle')->name('rechercheArticle');
Route::get('ajout/', 'HomeController@ajout')->name('ajout');
Route::post('ajout/', 'PostController@store')->name('ajout');

Route::get('profil/', 'HomeController@profil')->name('profil');
Route::post('profil/', 'PostController@update')->name('profil');

Route::get('/suprimerHtag/{id}', 'HomeController@supHTag');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::post('/suprimerArticle/', 'HomeController@suprimerArticle')->name('suprimerArticle');
Route::get('/suprimerHtag/{id}', 'HomeController@suprimerHtag')->name('suprimerHtag');
Route::get('/article/{titre}', 'HomeController@selectionArticle')->name('modificationArticle');
Route::post('/articleModification/', 'PostController@updateArticle')->name('modification');

