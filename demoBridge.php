<?php

include ('php/db_connect.php');

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>TheBridge</title>
    <link href='http://fonts.googleapis.com/css?family=Righteous|Raleway' rel='stylesheet' type='text/css'>

    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-switch.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bridge.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="js/jquery.switch.js"></script>
	<script type="text/javascript">
		<!--
		if (screen.width <= 700) {
		window.location = "m_bridge.php";
		}
		//-->
	</script>
</head>

<body>

		<div id="logo">
			<h1><span class="the">THE</span><span class="bridge">BRIDGE</span></h1>
		</div>

		<form action="php/db_update.php" METHOD="get">
			<div id="lights" class="panel">
				<h2 class="panelLabel">Lights</h2>

				<!-- Note: <canvas> animations will be added in the future. -->
				<!-- <canvas width="300" height="400" id="bulbCanvas"></canvas> -->
				<i class="icon-lightbulb icon-4x panel-icon"></i> 			
				<div class="switch switch-large">  <!-- switch-large, switch-small or switch-mini -->
				    <input type="checkbox" name="lights"
				    	<?php
				    		$lightsResult = mysql_query("SELECT * FROM status WHERE category = 'lights'");
							while($row = mysql_fetch_array($lightsResult)){
								if ($row['current_setting'] == 11111111)
									echo 'checked="checked"';
							}
						?>>
				</div>
			</div>

			<div id="shades" class="panel">
				<h2 class="panelLabel">Shades</h2>
					<i class="icon-adjust icon-4x panel-icon"></i>
					<div class="switch switch-large" data-on-label="Open" data-off-label="Closed">  <!-- switch-large, switch-small or switch-mini -->
					    <input type="checkbox" name="shades"
						    <?php
						    	$shadesResult = mysql_query("SELECT * FROM status WHERE category = 'shades'");
								while($row = mysql_fetch_array($shadesResult)){
									if ($row['current_setting'] == 11111111)
										echo 'checked="checked"';
								}
							?>>
					</div>
			</div>

			<div id="door" class="panel">
				<h2 class="panelLabel">Door</h2>
					<i class="icon-lock icon-4x panel-icon"></i>
					<div class="switch switch-large" data-on-label="Locked" data-off-label="Unlock">  <!-- switch-large, switch-small or switch-mini -->
					    <input type="checkbox" name="door"
					    	<?php
					    		$doorResult = mysql_query("SELECT * FROM status WHERE category = 'door'");
								while($row = mysql_fetch_array($doorResult)){
									if ($row['current_setting'] == 11111111)
										echo 'checked="checked"';
								}
							?>>
					</div>
			</div>

		<button type="submit" class="btn btn-primary pull-right go">Save changes</button>
		</form>

	<!-- 		<canvas></canvas> -->
</body>

</html>