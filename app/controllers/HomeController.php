<?php
class HomeController extends BaseController {
	
	 public function __construct()
    {		
		$this->apikey='uoNHpMHDTRtgmP0jrRv2Hpsw4f22i3xB5RYlUxbMybkDm9cX2t9bSTUbiGbn2pik';
		$this->apisec='hdAP9DPWR8dOP5qzitsFxiMw44tczgeWCNQeavlfN3jRoiD0CpCTxCXsw8BMdCJi';
    }

	public function binanceAgain(){
		$apik = $this->apikey;
		$apisec = $this->apisec;
		$api12 = new Binance\API($apik,$apisec);
		$ticker = $api12->prices();
		echo"<pre>";
		print_r($ticker); // List prices of all symbols
		die;
	}	
}
