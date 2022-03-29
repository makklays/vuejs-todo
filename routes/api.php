//

//
Route::name('/api/v1.0.3')->group('api', function(){

  Route::post('/users', 'App\Http\Controllers\UsersController@index');
  Route::post('/currencies', 'App\Http\Controllers\CurrenciesController@index');
  Route::post('/bitcoins', 'App\Http\Controllers\BitcoinsController@index');

});
