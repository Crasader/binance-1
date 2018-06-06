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
		return View::make("response/coinbase");
	}
	
	public function coinbaseResponse() {
		$configuration = Configuration::apiKey($this->apikey, $this->apisec);
		$client = Client::create($configuration);
		/**Creating array for response**/
		$symbol_ary = array("ETH","BTC","LTC");
		$currency = "USD";
		?>
		<!--result-->
		<table id="table" cellspacing="0" width="100%" style="visibility: visible; width: 100%;" class="ui striped table dataTable no-footer" role="grid">
			<thead>
				<tr><th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Market</th><th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Sell Price</th><th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Buy Price</th><th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Currency</th></tr>
			</thead>
			<tbody>
				<?php
				foreach($symbol_ary as $sym){
					$finalv = $sym.'-'.$currency;
					$buyPrice = $client->getBuyPrice("$finalv");
					$sellPrice = $client->getSellPrice("$finalv");
					?>
						<tr id="0" role="row" class="odd">
							<td style="color:#4183c4; padding:20px;"><?php echo $sym; ?></td>
							<td><?php echo $sellPrice->getAmount(); ?></td>
							<td><?php echo $buyPrice->getAmount(); ?></td>
							<td><?php echo $currency; ?></td>
						</tr>
					<?php
				}
				?>
			</tbody>
		</table>
		<?php
		exit;
	}
}