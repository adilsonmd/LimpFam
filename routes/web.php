<?php

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

//$router->get('/', function () use ($router) {
//    return view('dashboard.index');
//});
$router->get('/', ['as' => 'home', 'uses' => 'SaleController@getSales']);
$router->get('/api/latestmonth', 'SaleController@getLastestMonth');

$router->post('/sale', ['as' => 'createSale','uses' => 'SaleController@create']);


$router->get('/balance', 'MonthBalanceController@index');
$router->post('/balance/endmonth', 'MonthBalanceController@create');

$router->get('/contact', function (){
    return view('contact.index');
});