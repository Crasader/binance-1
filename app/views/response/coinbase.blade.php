@include('html.header')
		<div style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0;" class="ui grid basic segment">
			<div id="theader" class="twelve wide column left aligned">
				<button id="btnLayout" class="ui labeled icon button"><i class="list layout icon"></i>  Layout</button>
				<button id="btnFilters" class="ui labeled icon button"><i class="filter icon"></i><span id="numFilters">0 Filters</span></button>
				<button id="btnFormat" class="ui labeled icon button"><i class="settings icon"></i>  Format</button>
				<div id="table_filter" class="dataTables_filter ui input icon" style="padding-left: 5px; height: 36px;"><i class="ui search icon"></i><input type="search" class="" placeholder="Filter currencies..." aria-controls="table">
				</div>
			</div>

			<div class="four wide column right aligned">
				<div id="affiliate" style="padding: 0; float: right;" class="ui center aligned basic segment">
					<div style="margin-top: -5px;" class="ui mini statistic">
						<div class="label">Start trading Crypto now!</div>
						<div style="height: 16px; margin-bottom: 0; padding-bottom: 0;" class="ui horizontal list">
							<div style="height: 16px;" class="item"><a href="" style="text-decoration: underline;">Binance</a></div>
							<div style="height: 16px;" class="item"><a href="bithumb" style="text-decoration: underline;">Bithumb</a></div>
							<div style="height: 16px;" class="item"><a href="coinbase" style="text-decoration: underline;">Coinbase </a></div>
							<div style="height: 16px;" class="item"><a href="kraken" style="text-decoration: underline;">Kraken</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="table_wrapper" class="click dataTables_wrapper dt-semanticUI no-footer">
			
		</div>
		<div class="loading">Loading&#8230;</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>	
			var base_url = '{{ url('/') }}'+'/coinbase_res';
			setInterval(function() { 
				jQuery.ajax({
					url: base_url,
					cache: false,
					success: function(data){	
						jQuery(".loading").hide();
						jQuery(".click").html(data);					
					}
				}); 	
				jQuery('.click').load(base_url);
			}, 8000);
			 
		</script>
	</body>
</html>
