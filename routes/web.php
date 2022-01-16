<?php




/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// $router->get('/', function () use ($router) {
//     // return $router->app->version();
//     return view('index');
// });

$router->get('/', 'HomeController@index');
$router->post('/store', 'HomeController@store');
$router->get('/list', 'HomeController@list');
$router->get('/edit/{id}', 'HomeController@edit');
$router->post('/update/{id}', 'HomeController@update');
$router->get('/delete/{id}', 'HomeController@delete');






// Route::get('/', function () {
//     return view('index');
// });
