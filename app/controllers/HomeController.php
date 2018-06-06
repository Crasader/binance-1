<?php
use Illuminate\Routing\UrlGenerator;

class HomeController extends BaseController {
	
	protected $url;
	
	 public function __construct() {		
		$this->apikey='uoNHpMHDTRtgmP0jrRv2Hpsw4f22i3xB5RYlUxbMybkDm9cX2t9bSTUbiGbn2pik';
		$this->apisec='hdAP9DPWR8dOP5qzitsFxiMw44tczgeWCNQeavlfN3jRoiD0CpCTxCXsw8BMdCJi';
    }

	public function binanceAgain() {			
		return View::make("newhome");		
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
			<table id="table" cellspacing="0" width="100%" style="visibility: visible; width: 100%;" class="ui striped table dataTable no-footer" role="grid">
				<thead>
					<tr>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Market</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Close</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Open</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">High</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Low</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Volume</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Quote Volume</th>
					</tr>
				</thead>
				<?php
					foreach($ticker as $tic){		
						echo '<tr id="0" role="row" class="odd"><td style="color:#4183c4; padding:20px;">'.$tic['symbol'].'</td>';
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