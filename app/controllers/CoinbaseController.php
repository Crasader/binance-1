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
		<table>
			<thead>
				<tr><th>Market</th><th>Sell Price</th><th>Buy Price</th><th>Currency</th></tr>
			</thead>
			<tbody>
				<?php
				foreach($symbol_ary as $sym){
					$finalv = $sym.'-'.$currency;
					$buyPrice = $client->getBuyPrice("$finalv");
					$sellPrice = $client->getSellPrice("$finalv");
					?>
						<tr>
							<td><?php echo $sym; ?></td>
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