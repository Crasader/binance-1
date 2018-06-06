	<!DOCTYPE html>
	<html>
		<head>
			<link href="public/css/semantic.min.css" rel="stylesheet">
			<link href="public/css/custom.css" rel="stylesheet">
		</head>
	
	<body style="background-color: rgb(239, 239, 239);" class="dimmable scrolling">
		<div id="context" style="width: 100%;">
			<div style="max-width: 1280px; margin: auto;" class="layout-width">			
			<div style="padding-top: 20px; padding-bottom: 5px;" class="ui top attached segment">
				<a href="">
					<img id="logo" src="public/images/logo-light-beta.svg" height="42px">
				</a>
				<div style="float: right;">				
					<a href="#"><button class="ui small left attached button"><i class="sign in icon"></i>Log in</button></a><a href="#">
					<button style="background-color: #ff9c00 !important;" class="ui small right attached positive button"><i class="add user icon"></i>Sign up free</button></a>
				</div>
			</div>

			<div class="ui bottom attached labeled icon menu">
				<a href="#" class="item"><i class="inverting money icon"></i><span class="inverting">Currencies</span></a>
				<a href="#" class="item"><i class="inverting law icon"></i><span class="inverting">Exchanges</span></a>
				<a href="#" class="item"><i class="inverting dollar icon"></i><span class="inverting">Markets</span></a>
				<a href="#" class="item"><i class="inverting book icon"></i><span class="inverting">Watchlist</span></a>
				<a href="#" class="item"><i class="inverting line chart icon"></i><span class="inverting">Portfolio</span></a>
					<div class="item">
						<input id="fiatRate" type="hidden"><i class="inverting world icon large"></i>
						<div id="fiat" class="ui dropdown icon">
							<span id="fiat" class="inverting">USD</span>
							<i class="inverting dropdown giant icon"></i>
								<div style="max-height: 400px; overflow-y: scroll;" id="menu" class="menu" tabindex="-1">
									<h4 class="header">Base Currency</h4>
									<div class="divider"></div>
									<div class="ui search icon input"><i class="search icon"></i><input type="text" name="search" placeholder="Search currencies..." tabindex="0">
									</div>
								</div>
						</div>
					</div>

				<div class="item">
					<input id="pollRate" type="hidden"><i class="inverting lightning icon large"></i>
					<div id="poll" class="ui dropdown icon" tabindex="0">
						<span id="poll" class="inverting">2 sec</span>
						<i class="inverting dropdown giant icon"></i>
						<div id="menu" style="max-height: 400px; overflow-y: scroll;" class="menu" tabindex="-1">
						<h4 class="header">Refresh Rate</h4>
						<div class="divider"></div>
						<div class="item">1 sec</div>
						<div class="item">2 sec</div>
						<div class="item">5 sec</div>
						<div class="item">10 sec</div>
							<div class="item">30 sec</div>
							<div class="item">60 sec</div>
						</div>
					</div>
				</div>
				
				<a href="" class="item"><i class="inverting newspaper outline icon"></i><span class="inverting">News</span></a>
				<a href="" class="item"><i class="inverting add circle icon"></i><span class="inverting primary">Add Coin</span></a>
				
				<div class="ui right secondary menu">
					<div class="item">
					<form id="topSearch" method="GET">
						<div id="topSearch" class="ui search search-coins"><div class="ui icon input"><input id="topSearch" type="text" placeholder="Search currencies..." class="prompt" autocomplete="off"><i class="search icon"></i></div><div class="results"></div>
						</div>
					</form>
					</div>
				</div>
			</div>