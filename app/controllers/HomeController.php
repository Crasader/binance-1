<?php
use Illuminate\Routing\UrlGenerator;

class HomeController extends BaseController {
	
	protected $url;
	
	 public function __construct() {		
		$this->apikey='uoNHpMHDTRtgmP0jrRv2Hpsw4f22i3xB5RYlUxbMybkDm9cX2t9bSTUbiGbn2pik';
		$this->apisec='hdAP9DPWR8dOP5qzitsFxiMw44tczgeWCNQeavlfN3jRoiD0CpCTxCXsw8BMdCJi';
    }

	public function binanceAgain() {			
		return View::make("response/binance");
	}	
	
	public function binanceResponse() {
		$apik = $this->apikey;
		$apisec = $this->apisec;
		$api = new Binance\API($apik,$apisec);
		$ticker = $api->prices();	
		/**Getting response**/
		$api->miniTicker(function($api, $ticker) {		
			?>
			<!--result-->
			<table>
				<thead><tr><th>Market</th><th>Close</th><th>Open</th><th>High</th><th>Low</th><th>Volume</th><th>Quote Volume</th></tr></thead>
				<?php
					foreach($ticker as $tic){		
						echo '<tr><td>'.$tic['symbol'].'</td>';
						echo '<td>'.$tic['close'].'</td>';
						echo '<td>'.$tic['open'].'</td>';
						echo '<td>'.$tic['high'].'</td>';
						echo '<td>'.$tic['low'].'</td>';
						echo '<td>'.$tic['volume'].'</td>';
						echo '<td>'.$tic['quoteVolume'].'</td></tr>';					
					}				
				?>
			</table>
			<?php	
			exit;	
		});		
	}	
}