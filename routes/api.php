/*
 * REST API
 * (con diferentes metodos)
 *
 * Author: Alexander Kuziv
 * E-mail: hola.kuziv@gmail.com
 */

// v1.0.3 
Route::middleware(['my_first', 'my_second'])->name('/api/v1.0.3')->group('api', function(){

  Route::get('/users', 'App\Http\Controllers\UsersController@index');
  Route::post('/users/add', 'App\Http\Controllers\UsersController@add');
  // put - edite todas datas, patch - edite part de datos
  Route::put('/users/edit/{id}', 'App\Http\Controllers\UsersController@edit')->where('id', [0-9]+); 
  Route::delete('/users/delete/{id}', 'App\Http\Controllers\UsersController@delete')->where('id', [0-9]+);

  Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index');
  Route::post('/currencies/add', 'App\Http\Controllers\CurrenciesController@add');
  Route::put('/currencies/edit/{id}', 'App\Http\Controllers\CurrenciesController@edit')->where('id', [0-9]+);
  Route::delete('/currencies/delete/{id}', 'App\Http\Controllers\CurrenciesController@delete')->where('id', [0-9]+);

  Route::get('/bitcoins', 'App\Http\Controllers\BitcoinsController@index');
  Route::post('/bitcoins/add', 'App\Http\Controllers\BitcoinsController@add');
  Route::put('/bitcoins/edit/{id}', 'App\Http\Controllers\BitcoinsController@edit')->where('id', [0-9]+);
  Route::delete('/bitcoins/delete/{id}', 'App\Http\Controllers\BitcoinsController@delete')->where('id', [0-9]+);

  Route::get('/respuestas', 'App\Http\Controllers\RespuestasController@index');
  Route::post('/respuestas/add', 'App\Http\Controllers\RespuestasController@add');
  Route::put('/respuestas/edit/{id}', 'App\Http\Controllers\RespuestasController@edit')->where('id', [0-9]+);
  Route::delete('/respuestas/delete/{id}', 'App\Http\Controllers\RespuestasController@delete')->where('id', [0-9]+);
});

// v1.0.2 
Route::name('/api/v1.0.3')->group('api', function(){
  Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index');
});

