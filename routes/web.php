<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


#route boot
Auth::routes(['verify' => true]);
Route::view('verify', 'auth.verify');
Route::view('/', 'home');
Route::view('contact', 'contact');
Route::view('about-us', 'about-us')->name('about-us');
Route::post('contact', 'contactController@send');
Route::view('sign-up', 'mail.sign-up');
Route::view('home', 'home')->name('home');
Route::get('order', 'CommandeController@index')->name('order');

#route produit
Route::get('produits', 'produitController@index')->name('product.index');
Route::get('produits/categorie/{id}', 'produitController@categorie')->name('product.categorie');
Route::get('produit/{produit}', 'produitController@show')->name('product.show');
Route::view('produit//create', 'product.create')->name('product.create');
Route::put('produit/add', 'produitController@store')->name('product.store');
Route::get('produit/edit/{id}', 'produitController@edit')->name('product.edit');
Route::post('produit/update/{id}', 'produitController@update')->name('product.update');
Route::get('produit/delete/{id}', 'produitController@delete')->name('product.delete');
Route::get('produits/search', 'produitController@search');
Route::get('produits/filter', 'produitController@filter');
Route::post('produit/noter', 'produitController@note_store')->name('note.store');
Route::post('produit/note/update/{note}', 'produitController@note_update')->name('note.update');

#route panier
Route::get('panier', 'panierController@show')->name('card.show');
Route::get('panier/add/produit/{id}', 'panierController@store')->name('card.store');
Route::get('panier/destroy/produit/{id}', 'panierController@delete')->name('card.delete');

#route ferme
Route::get('fermes', 'fermeController@index')->name('farm.index');
Route::get('fermes/mine', 'fermeController@mine')->middleware('can:viewAny, App\ferme')->name('farm.mine');
Route::get('ferme/{ferme}', 'fermeController@show')->name('farm.show');
Route::view('ferme//create', 'ferme.create')->middleware('can:create,App\ferme')->name('farm.create');
Route::put('ferme/store', 'fermeController@store')->middleware('can:create,App\ferme')->name('farm.store');
Route::get('ferme/edit/{ferme}', 'fermeController@edit')->middleware('can:update,ferme')->name('farm.edit');
Route::post('ferme/update/{ferme}', 'fermeController@update')->middleware('can:update,ferme')->name('farm.update');
Route::get('ferme/delete/{ferme}', 'fermeController@delete')->middleware('can:delete,ferme')->name('farm.delete');

//route ferme avis
Route::put('ferme/donner/avis', 'ferme_avisController@store')->name('notice.store');
Route::post('ferme/update/avis/{avis}', 'ferme_avisController@update')->name('notice.update');
Route::get('ferme/delete/avis/{avis}', 'ferme_avisController@delete')->name('notice.delete');

#route forum
Route::get('forums', 'forumController@index')->name('forum.index');
Route::get('forum/{forum}', 'forumController@show')->name('forum.show');
Route::post('forum/store', 'forumController@store')->middleware('auth')->name('forum.store');
Route::get('forum/edit/{forum}', 'forumController@edit')->middleware('can:update,forum')->name('forum.edit');
Route::post('forum/update/{forum}', 'forumController@update')->middleware('can:update,forum')->name('forum.update');
Route::get('forum/delete/{forum}', 'forumController@delete')->middleware('can:delete,forum')->name('forum.delete');

//route forum commentaire
Route::put('forum/commentaire/store', 'forum_commentaireController@store')->name('comment.store');
Route::get('forum/commentaire/edit/{forum}/{commentaire}', 'forum_commentaireController@edit')->middleware('can:update,commentaire')->name('comment.edit');
Route::post('forum/commentaire/update/{commentaire}', 'forum_commentaireController@update')->name('comment.update');
Route::get('forum/commentaire/delete/{commentaire}', 'forum_commentaireController@delete')->middleware('can:delete,commentaire')->name('comment.delete');

//route forum commentaire repondes
Route::post('forum/commentaire/reponde/{commentaire}', 'forum_commentaire_repondeController@store')->name('reply.store');
Route::get('forum/commentaire/reponde/edit/{forum}/{commentaire}/{reponde}', 'forum_commentaire_repondeController@edit')->middleware('can:update,reponde')->name('reply.edit');
Route::post('forum/commentaire/reponde/update/{forum}/{reponde}', 'forum_commentaire_repondeController@update')->middleware('can:update,reponde')->name('reply.update');
Route::get('forum/commentaire/reponde/delete/{reponde}', 'forum_commentaire_repondeController@delete')->middleware('can:update,reponde')->name('reply.delete');

#route profil
Route::get('profil/{client}', 'clientController@show')->name('profile.show');
Route::get('profil/edit', 'clientController@edit')->name('profile.edit');
Route::post('profil/update', 'clientController@update')->name('profile.update');
Route::get('profil/delete', 'clientController@delete')->name('profile.delete');
