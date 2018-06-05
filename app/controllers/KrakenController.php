<?php
require app_path() . '/libraries/KrakenAPIClient.php';
class KrakenController extends BaseController {
	/*
	KrakenController to get information
	*/
	 public function __construct() {		
		$this->apikey='uYXMOYkzh1bJwKLk8SFb00EiYydmLDvoqskEOtqlk4hSE9NAM9RRV08C';
		$this->apisec='9FsUJswhQX13nGdahA6YDgkfZdYd05/SPObJKD12GAP5LKq1smT0FAVuMc26PH0fvuYPVlPVECBYXvu8Aqy92Q==';
		$this->url =  'https://api.kraken.com';
    }
	public function krakenAgain(){
		return View::make("response/kraken");		
	}

	public function krakenResponse(){
		$apike = $this->apikey;
		$apisec = $this->apisec;
		$beta = true; 
		$version = 0;
		$sslverify = $beta ? false : true;
		$kraken = new KrakenAPI($apike, $apisec, $this->url, $version, $sslverify);
		/*creating array for getting response*/
		$ary_cur = array("DASHUSD","BCHUSD","BCHEUR","EOSEUR","EOSUSD","GNOETH","GNOEUR","GNOUSD","GNOXBT");		
		?>
		<!--result-->
		<table>
			<thead><tr><th>Market Pair</th><th>Last</th><th>High</th><th>Low</th><th>24 Hour Volume</th><th>Weighted Avg</th></tr></thead>			
			<tbody>
			<?php			
				  foreach($ary_cur as $valc){
					$resn = $kraken->QueryPublic('Ticker', array('pair' => "$valc"));										
					if(empty($resn['error'])){
						$last_rec = $resn['result'][$valc]['a'][0];
						$vol_rec = $resn['result'][$valc]['v'][0];
						$avg_rec = $resn['result'][$valc]['o'];
						$high_rec = $resn['result'][$valc]['h'][1];
						$low_rec = $resn['result'][$valc]['l'][0];
						?>
						<tr>
							<td><?php echo $valc; ?></td>
							<td><?php echo $last_rec; ?></td>
							<td><?php echo $high_rec; ?></td>
							<td><?php echo $low_rec; ?></td>
							<td><?php echo $vol_rec; ?></td>
							<td><?php echo $avg_rec; ?></td>
						</tr>
						<?php
					} 
				}   
		?>
			</tbody>	
		</table>
		<?php
		exit;
	}
}
