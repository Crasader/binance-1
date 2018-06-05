<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function() {
	return View::make('newhome');
});
Route::get('/binance', 'HomeController@binanceAgain'); 
Route::get('/binres', 'HomeController@binanceResponse');
Route::get('/coinbase', 'CoinbaseController@coinbaseAgain'); 
Route::get('/coinbase_res', 'CoinbaseController@coinbaseResponse'); 
Route::get('/kraken', 'KrakenController@krakenAgain'); 
Route::get('/kraken_res', 'KrakenController@krakenResponse'); 
Route::get('/bithumb', 'BithumbController@bithumbAgain');
Route::get('/bitres', 'BithumbController@bithumbResponse');