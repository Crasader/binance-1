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
		$apikey = $this->apikey;
		$apisec = $this->apisec;
		$beta = true; 
		$version = 0;
		$sslverify = $beta ? false : true;
		$kraken = new KrakenAPI($apikey, $apisec, $this->url, $version, $sslverify);
		/*creating array for getting response*/
		/**array for values**/
		$ary_cur = array("DASHUSD","BCHUSD","BCHEUR","EOSEUR","EOSUSD","GNOETH","GNOEUR","GNOUSD","GNOXBT");		
		?>
		<!--result-->
		<table id="table" cellspacing="0" width="100%" style="visibility: visible; width: 100%;" class="ui striped table dataTable no-footer" role="grid">
			<thead>
				<tr>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Market Pair</th>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Last</th>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">High</th>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Low</th>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">24 Hour Volume</th>
					<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Weighted Avg</th>
				</tr>
			</thead>			
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
						<tr id="0" role="row" class="odd">
							<td style="color:#4183c4; padding:20px;"><?php echo $valc; ?></td>
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
