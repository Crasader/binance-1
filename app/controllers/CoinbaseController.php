<?php
use Coinbase\Wallet\Client;
use Coinbase\Wallet\Configuration;
class CoinbaseController extends BaseController {
	/*
	Coinbase Controller
	*/
	 public function __construct() {		
		$this->apikey='IwWcTUbT88ztK2iD';
		$this->apisec='fDXR5z8tf31rVhl0iZzhOzAVkzyfaZbd';
    }
	
	public function coinbaseAgain(){
		$configuration = Configuration::apiKey($this->apikey, $this->apisec);
		$client = Client::create($configuration);
		$currencies = $client->getCurrencies();
		echo"<pre>";
		print_r($currencies);
		die;
	}
}
