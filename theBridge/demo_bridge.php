
<!DOCTYPE html> 
<html> 
<head> 
	<title>TheBridge</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="js/m_bridge.js"></script>
	<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Righteous|Raleway' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/m_bridge.css" />
</head>

<body> 

<div data-role="page" data-theme="a" >

	<div data-role="header">
		<h1>
			<div id="logo">
				<span class="the">THE</span>
				<span class="bridge">BRIDGE</span>
			</div>
		</h1>
	</div><!-- /header -->

	<div data-role="content">
		<form id="update" action="demo_bridge.php" METHOD="get">	
		<div data-role="collapsible-set" data-inset="false" data-theme="a">

			<!-- ==========Controls for the LIGHTS========== -->
			<div data-role="collapsible" data-collapsed-icon="arrow_r">

				<h3>Lights <span class="current_display">On</span></h3>

				<div class="panel-content">
					<i class="icon-lightbulb icon-3x panel-icon"></i> 
					<select name="lights" id="lights" data-role="slider" data-theme="a">
						<option  
								value=00000000>Off</option>
						<option 
			
								value=11111111>On</option>
					</select>
				</div>
			</div>


			<!-- ==========Controls for the SHADES========== -->
			<div data-role="collapsible">

				<h3>Shades <span class="current_display">Closed</span></h3>

				<div class="panel-content">
					<i class="icon-adjust icon-3x panel-icon"></i> 
					<select name="shades" id="shades" data-role="slider" data-theme="a">
						<option value=00000000>Close</option>
						<option value=11111111>Open</option>
					</select>
				</div>
			</div>

			<!-- ==========Controls for the DOOR========== -->
			<div data-role="collapsible">


				<h3>Door</h3>

				<div class="door-panel-content panel-content">
						
						<i class="icon-lock icon-3x panel-icon"></i> 

						<select name="door" id="door" data-role="slider" data-theme="a">
							<option value=0000000>Locked</option>
							<option value=11111111>Unlocked</option>
						</select>

				</div>
			</div>			
		</div>	

<!-- 		<input type="submit" value="Submit Button" /> -->
		</form>	
	</div><!-- /content -->

</div><!-- /page -->

<script src="js/form_update.js"></script>
</body>
</html>