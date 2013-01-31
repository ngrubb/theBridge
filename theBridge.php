<?php

include ('php/db_connect.php');
/*
This is for the forms that will be submitted to this page.
Forms will be coming from both the arduino and the website,
so this has to be able to handle both!
(6/21/12) 
*/

	$lightsResult = mysql_query("SELECT * FROM status WHERE category = 'lights'");
		
	while($row = mysql_fetch_array($lightsResult)){

		if ($_GET["lights"] != $row['current_setting']) {

			$new_value = $_GET['lights'];	
			mysql_query("UPDATE status SET current_setting=".$new_value."
					     WHERE category='lights'");
		}
	}

	$shadesResult = mysql_query("SELECT * FROM status WHERE category = 'shades'");
		
	while($row = mysql_fetch_array($shadesResult)){

		if ($_GET["shades"] != $row['current_setting']) {

			$new_value = $_GET['shades'];
			mysql_query("UPDATE status SET current_setting=".$new_value."
					     WHERE category='shades'");
		}
	}

	$doorResult = mysql_query("SELECT * FROM status WHERE category = 'door'");
		
	while($row = mysql_fetch_array($doorResult)){

		if ($_GET["door"] != $row['current_setting']) {

			$new_value = $_GET['door'];
			mysql_query("UPDATE status SET current_setting=".$new_value."
					     WHERE category='door'");
		}
	}

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>TheBridge</title>
    <link href='http://fonts.googleapis.com/css?family=Righteous|Raleway' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="js/jquery.js"></script>

    <link rel="stylesheet" href="css/bridge.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" />

<!--<script type="text/javascript" src="js/bridge.js"></script> -->
	<link rel="stylesheet" href="css/toggle-switch.css">
	<script type="text/javascript">
		<!--
		if (screen.width <= 700) {
		window.location = "http://turtle8me8.com/m_bridge.php";
		}
		//-->
	</script>
</head>

<body>

		<div id="logo">
			<h1 class="the">THE</h1><h1 class="bridge">BRIDGE</h1>
		</div>

		<form>
			<div id="lights" class="panel">
				<h2 class="panelLabel">Lights</h2>
					<!-- Note: <canvas> animations will be added in the future. -->
					<!-- <canvas width="300" height="400" id="bulbCanvas"></canvas> -->
					<i class="icon-lightbulb icon-4x panel-icon"></i> 			
					<label class="checkbox toggle candy" onclick="" style="width:80%">
						<input id="view" type="checkbox" />
						<p>
							<span>On</span>
							<span>Off</span>
						</p>	
						<a class="slide-button"></a>
					</label>
								
			</div>

			<div id="shades" class="panel">
				<h2 class="panelLabel">Shades</h2>
					<i class="icon-adjust icon-4x panel-icon"></i>
					<div class="switch candy blue" style="width:80%">
						<input id="week" name="view" type="radio" value=00000000 checked>
						<label for="week" onclick="">Week</label>

						<input id="month" name="view" type="radio" value=11111111>	
						<label for="month" onclick="">Month</label>
						
						<span class="slide-button"></span>
					</div>
			</div>

			<div id="door" class="panel">
				<h2 class="panelLabel">Door</h2>
					<i class="icon-lock icon-4x panel-icon"></i>
					<div class="switch candy blue" style="width:80%">
						<input id="unlocked" name="view" type="radio" checked>
						<label for="week" onclick="">Unlocked</label>

						<input id="locked" name="view" type="radio">	
						<label for="month" onclick="">Locked</label>
						
						<span class="slide-button"></span>
					</div>
			</div>
		</form>

	<!-- 		<canvas></canvas> -->
</body>

</html>