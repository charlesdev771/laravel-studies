<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);


Route::get('/products', function(){
    return view('products');
});

Route::get('/produtos', function()
{
    $busca = request('search');
    return view('produto', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function($id = 1)
{
    return view('products', ['id' => $id]);
});

/*
Route::get('/nome', function(){

    $name = 'charles';
    $age = 21;
    $arr = [1,2,3,4,5];

    return view('aa', [
        'age' => $age,
        'name' => $name
    ]);

});
*/
