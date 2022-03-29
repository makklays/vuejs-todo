/*
 * REST API
 * (con diferentes metodos)
 *
 * Author: Alexander Kuziv
 * E-mail: hola.kuziv@gmail.com
 */

use App\Http\Controllers\AmbulancesController;

Route::middleware(['my_first', 'my_second'])->name('api.')->group('/api', function(){
  
  // v1.0.3
  Route::name('v103.')->group('/v1.0.3', function(){

    Route::get('/users', 'App\Http\Controllers\UsersController@index')->name('users'); // route('api.v103.users');
    Route::post('/users/add', 'App\Http\Controllers\UsersController@add')->name('users.add');
    // put - edite todas datas, patch - edite part de datos
    Route::put('/users/edit/{id}', 'App\Http\Controllers\UsersController@edit')->where('id', [0-9]+)->name('users.edit');
    Route::delete('/users/delete/{id}', 'App\Http\Controllers\UsersController@delete')->where('id', [0-9]+)->name('users.delete');

    Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index');
    Route::post('/currencies/add', 'App\Http\Controllers\CurrenciesController@add');
    Route::put('/currencies/edit/{id}', 'App\Http\Controllers\CurrenciesController@edit')->where('id', [0-9]+);
    Route::delete('/currencies/delete/{id}', 'App\Http\Controllers\CurrenciesController@delete')->where('id', [0-9]+);

    Route::get('/bitcoins', 'App\Http\Controllers\BitcoinsController@index');
    Route::post('/bitcoins/add', 'App\Http\Controllers\BitcoinsController@add');
    Route::put('/bitcoins/edit/{id}', 'App\Http\Controllers\BitcoinsController@edit')->where('id', [0-9]+);
    Route::delete('/bitcoins/delete/{id}', 'App\Http\Controllers\BitcoinsController@delete')->where('id', [0-9]+);

    // resPuestas o conTestas)
    Route::get('/respuestas', 'App\Http\Controllers\RespuestasController@index');
    Route::post('/respuestas/add', 'App\Http\Controllers\RespuestasController@add');
    Route::put('/respuestas/edit/{id}', 'App\Http\Controllers\RespuestasController@edit')->where('id', [0-9]+);
    Route::delete('/respuestas/delete/{id}', 'App\Http\Controllers\RespuestasController@delete')->where('id', [0-9]+);
  });

  // v1.0.2 
  Route::name('v102.')->group('/v1.0.2', function(){
    Route::get('/currencies', 'App\Http\Controllers\CurrenciesController@index')->name('currencies'); // route('api.v102.currencies');
  });

  // v9.1.1 
  Route::middleware(['mi_prueba'])->name('v911.')->group('/v9.1.1', function(){
    Route::get('/ambulances', 'AmbulancesController@index')->name('ambulances'); // route('api.v911.ambulances');
  });

});

