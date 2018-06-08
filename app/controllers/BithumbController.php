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
			<table id="table" cellspacing="0" width="100%" style="visibility: visible; width: 100%;" class="ui striped table dataTable no-footer" role="grid">
				<thead>
					<tr>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Market</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Opening Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Closing Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Min Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Max Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Average Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Volume 1day</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Volume 7day</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Buy Price</th>
						<th class="left aligned sorting" tabindex="0" aria-controls="table" rowspan="1" colspan="1">Sell Price</th>
					</tr>
				</thead>
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
					<tr id="0" role="row" class="odd">
						<td style="color:#4183c4; padding:20px;"><?php echo $bn; ?></td>
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
