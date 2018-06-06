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

		<!--<div style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0;" class="ui two column grid basic segment">
				<div id="tfooter_paginate" class="column left aligned">
					<div class="dataTables_paginate paging_full_numbers" id="table_paginate">
						<div class="ui stackable pagination menu">
							<div class="paginate_button item first disabled" id="table_first" href="#" aria-controls="table" data-dt-idx="0" tabindex="0">First</div>
							<div class="paginate_button item previous disabled" id="table_previous" href="#" aria-controls="table" data-dt-idx="1" tabindex="0">Previous</div>
							<a class="paginate_button item active" href="" aria-controls="table" data-dt-idx="2" tabindex="0">1</a>
							<a class="paginate_button item " href="" aria-controls="table" data-dt-idx="3" tabindex="0">2</a>
							<a class="paginate_button item " href="" aria-controls="table" data-dt-idx="4" tabindex="0">3</a>
							<a class="paginate_button item " href="" aria-controls="table" data-dt-idx="5" tabindex="0">4</a>
							<a class="paginate_button item " href="" aria-controls="table" data-dt-idx="6" tabindex="0">5</a>
							<div class="paginate_button item disabled" id="table_ellipsis" href="#" aria-controls="table" data-dt-idx="7" tabindex="0">…</div>
							<div class="paginate_button item next disabled" id="table_next" href="#" aria-controls="table" data-dt-idx="8" tabindex="0">Next</div>
							<div class="paginate_button item last disabled" id="table_last" href="#" aria-controls="table" data-dt-idx="9" tabindex="0">Last</div>
						</div>
					</div>
				</div>
				<div id="tfooter_info" class="column left aligned"><a href=""><button class="ui large button" style="float: right;">Recently Added</button></a></div>
			</div>-->
		<div class="loading">Loading&#8230;</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>	
			var base_url = '{{ url('/') }}'+'/binres';
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
		@include('html.footer')