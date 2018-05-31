<?php
require_once app_path() . '/libraries/xcoin_api_client.php';
class BithumbController extends BaseController {	
	 public function __construct()
    {		
		$this->apikey='644ff01b820559164a9ca4e18e7cee5a';
		$this->apisec='96b435b7fb10744fad5685438ac7e931';
    }

	public function bithumbAgain(){
		$api = new XCoinAPI($this->apikey, $this->apisec);
		$result = $api->xcoinApiCall("/public/orderbook/BCH");
		echo"<pre>";
		print_r($result);	
		die;  
	}	
}
