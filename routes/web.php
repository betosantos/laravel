<?php


Route::get('/', 'FrontController@front')->name('front');
Route::get('/sobre', 'FrontController@sobre')->name('front.sobre');
Route::get('/curso', 'FrontController@curso')->name('front.curso');
Route::get('/contato', 'FrontController@contato')->name('front.contato');
Route::get('/detalhes/{id}', 'FrontController@detalhes')->name('front.detalhes');
Route::get('/categoria/{id}', 'FrontController@categoria')->name('front.categoria');
Route::get('/logout', 'FrontController@logout')->name('front.logout');
Route::get('/search', 'FrontController@search')->name('front.search');


Route::group(['middleware' => ['auth']], function () {

  Route::prefix('admin')->group(function () {
      Route::get('/categorias', 'CategoriasController@index')->name('admin.categorias.index');
      Route::get('/categorias/create', 'CategoriasController@create')->name('admin.categorias.create');
      Route::get('/categorias/edit/{id}', 'CategoriasController@edit')->name('admin.categorias.edit');
      Route::put('/categorias/update/{id}', 'CategoriasController@update')->name('admin.categorias.update');
      Route::get('/categorias/show/{id}', 'CategoriasController@show')->name('admin.categorias.show');
      Route::get('/categorias/destroy/{id}', 'CategoriasController@destroy')->name('admin.categorias.destroy');
      Route::post('/categorias/strore', 'CategoriasController@store')->name('admin.categorias.store');
  });

  Route::prefix('admin')->group(function () {
      Route::get('/cursos', 'CursosController@index')->name('admin.cursos.index');
      Route::get('/cursos/create', 'CursosController@create')->name('admin.cursos.create');
      Route::post('/cursos/strore', 'CursosController@store')->name('admin.cursos.store');
      Route::get('/cursos/edit/{id}', 'CursosController@edit')->name('admin.cursos.edit');
      Route::get('/cursos/show/{id}', 'CursosController@show')->name('admin.cursos.show');
      Route::put('/cursos/update/{id}', 'CursosController@update')->name('admin.cursos.update');
      Route::get('/cursos/destroy/{id}', 'CursosController@destroy')->name('admin.cursos.destroy');
  });

});

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
