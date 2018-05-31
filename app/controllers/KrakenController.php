<?php
require app_path() . '/libraries/KrakenAPIClient.php';
class KrakenController extends BaseController {
	/*
	KrakenController to get information
	*/
	 public function __construct()
    {		
		$this->apikey='uYXMOYkzh1bJwKLk8SFb00EiYydmLDvoqskEOtqlk4hSE9NAM9RRV08C';
		$this->apisec='9FsUJswhQX13nGdahA6YDgkfZdYd05/SPObJKD12GAP5LKq1smT0FAVuMc26PH0fvuYPVlPVECBYXvu8Aqy92Q==';
    }
	public function krakenAgain(){
		$apike = $this->apikey;
		$apisec = $this->apisec;
		$kraken = new KrakenAPI($apike, $apisec);
		$res = $kraken->QueryPublic('Ticker', array('pair' => 'XXBTZUSD'));
		echo"<pre>";
		print_r($res);
		die;   
	} 
}
