<?php
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function binanceAgain(){
		$api12 = new Binance\API("uoNHpMHDTRtgmP0jrRv2Hpsw4f22i3xB5RYlUxbMybkDm9cX2t9bSTUbiGbn2pik","hdAP9DPWR8dOP5qzitsFxiMw44tczgeWCNQeavlfN3jRoiD0CpCTxCXsw8BMdCJi");
		$ticker = $api12->prices();
		echo"<pre>";
		print_r($ticker); // List prices of all symbols
		die;
	}
}
