<?php
require_once app_path() . '/libraries/xcoin_api_client.php';
class BithumbController extends BaseController {
	 public function __construct() {		
		$this->apikey='644ff01b820559164a9ca4e18e7cee5a';
		$this->apisec='96b435b7fb10744fad5685438ac7e931';
    }

	public function bithumbAgain(){
		return View::make("response/bithumb");		
	}	
	
	public function bithumbResponse(){
			$api = new XCoinAPI($this->apikey, $this->apisec);
			$result = $api->xcoinApiCall("/public/ticker/ALL");
			foreach($result->data as $key => $val){			
				$ary[] = $key;
			}
			$length = count($ary);
			?>
			<table>
				<thead><tr><th>Market</th><th>Opening Price</th><th>Closing Price</th><th>Min Price</th><th>Max Price</th><th>Average Price</th><th>Volume 1day</th><th>Volume 7day</th><th>Buy Price</th><th>Sell Price</th></tr></thead>
				<tbody>
				<?php
			for ($i = 0; $i < $length; $i++) {
				$bn = $ary[$i];
				if($bn!='date'){
					$open_p = $result->data->$bn->opening_price;			
					$close_p = $result->data->$bn->closing_price;			
					$min_p = $result->data->$bn->min_price;			
					$max_p = $result->data->$bn->max_price;			
					$average_p = $result->data->$bn->average_price;			
					$vol1_p = $result->data->$bn->volume_1day;			
					$vol7_p = $result->data->$bn->volume_7day;			
					$buy_p = $result->data->$bn->buy_price;
					$sell_p = $result->data->$bn->sell_price;
					?>
					<tr>
						<td><?php echo $bn; ?></td>
						<td><?php echo $open_p; ?></td>
						<td><?php echo $close_p; ?></td>
						<td><?php echo $min_p; ?></td>
						<td><?php echo $max_p; ?></td>
						<td><?php echo $average_p; ?></td>
						<td><?php echo $vol1_p; ?></td>
						<td><?php echo $vol7_p; ?></td>
						<td><?php echo $buy_p; ?></td>
						<td><?php echo $sell_p; ?></td>
					</tr>			
					<?php					
				}
			}
			?></tbody>
			</table>
			<?php
			exit;
	}
	
}
