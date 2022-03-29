// REST API
// (con diferentes metodos)


// v1.0.3
Route::name('/api/v1.0.3')->group('api', function(){

  Route::get('/users', 'App\Http\Controllers\UsersController@index');
  Route::post('/users/add', 'App\Http\Controllers\UsersController@add');
  Route::put('/users/edit', 'App\Http\Controllers\UsersController@edit'); // put - edite todas datas, patch - edite part de datos
  Route::delete('/users/delete', 'App\Http\Controllers\UsersController@delete');

  Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index');
  Route::post('/currencies/add', 'App\Http\Controllers\CurrenciesController@add');
  Route::put('/currencies/edit', 'App\Http\Controllers\CurrenciesController@edit');
  Route::delete('/currencies/delete', 'App\Http\Controllers\CurrenciesController@delete');

  Route::get('/bitcoins', 'App\Http\Controllers\BitcoinsController@index');
  Route::post('/bitcoins/add', 'App\Http\Controllers\BitcoinsController@add');
  Route::put('/bitcoins/edit', 'App\Http\Controllers\BitcoinsController@edit');
  Route::delete('/bitcoins/delete', 'App\Http\Controllers\BitcoinsController@delete');
});

// v1.0.2
Route::name('/api/v1.0.3')->group('api', function(){
  Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index');
});

