<?php
/*
This is for the forms that will be submitted to this page.
Forms will be coming from both the arduino and the website,
so this has to be able to handle both!
(6/21/12) 
*/

	$con = mysql_connect("localhost","root","S3micolon");
	if (!$con){
		die('Could not connect: ' . mysql_error());
	}
		mysql_select_db("Apartment", $con);
	
	if($_GET["lights"]){
	
		if($_GET["lights"] == '11111111'){  //on
			mysql_query("UPDATE status SET currentSetting='11111111'
			WHERE category='lights'");
		}
		else if($_GET["lights"] == '0'){  //off.. but this isnt working right now
			mysql_query("UPDATE status SET currentSetting='00000000'
			WHERE category='lights'");
		}
		else{
			mysql_query("UPDATE status SET currentSetting='00000000'
			WHERE category='lights'");
		}  
	}
	
	if($_GET["shades"]){

		if ($_GET["shades"] == '11111111'){ //open
			mysql_query("UPDATE status SET currentSetting='11111111'
		 		WHERE category='shades'");
		}
		else if($_GET["shades"] == '00000000'){  //closed
			mysql_query("UPDATE status SET currentSetting='00000000'
		 		WHERE category='shades'");
		}
		else {  //closed
			mysql_query("UPDATE status SET currentSetting='00000000'
		 		WHERE category='shades'");
		}
	}
    

  // STATEMENTS BELOW THIS LINE USE DUMMY VARIABLES... ACTUAL COMMANDS NOT YET DETERMINED (8.11.12)
	if($_GET["bubbler"]){  

		if ($_GET["bubbler"] == '00110000'){
			mysql_query("UPDATE status SET currentSetting='00110000'
		 		WHERE category='bubbler'");
		}
		else if($_GET["bubbler"] == '01010000'){
			mysql_query("UPDATE status SET currentSetting='01010000'
		 		WHERE category='bubbler'");
		}
	}

	if($_GET["plants"]){  

		if ($_GET["plants"] == '00110000'){
			mysql_query("UPDATE status SET currentSetting='00110000'
		 		WHERE category='plants'");
		}
		else if($_GET["plants"] == '01010000'){
			mysql_query("UPDATE status SET currentSetting='01010000'
		 		WHERE category='plants'");
		}
	}

	if($_GET["remote"]){  

		if ($_GET["remote"] == '00110000'){
			mysql_query("UPDATE status SET currentSetting='00110000'
		 		WHERE category='remote'");
		}
		else if($_GET["remote"] == '01010000'){
			mysql_query("UPDATE status SET currentSetting='01010000'
		 		WHERE category='remote'");
		}
	}

	if($_GET["display"]){  

		if ($_GET["display"] == '00110000'){
			mysql_query("UPDATE status SET currentSetting='00110000'
		 		WHERE category='display'");
		}
		else if($_GET["display"] == '01010000'){
			mysql_query("UPDATE status SET currentSetting='01010000'
		 		WHERE category='display'");
		}
	}

	
	$lightsResult = mysql_query("SELECT * FROM status WHERE category = 'lights'");
	while($row = mysql_fetch_array($lightsResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}
	
	$shadesResult = mysql_query("SELECT * FROM status WHERE category = 'shades'");
	while($row = mysql_fetch_array($shadesResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}

	$bubblerResult = mysql_query("SELECT * FROM status WHERE category = 'bubbler'");
	while($row = mysql_fetch_array($bubblerResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}

	$plantsResult = mysql_query("SELECT * FROM status WHERE category = 'plants'");
	while($row = mysql_fetch_array($plantsResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}

	$remoteResult = mysql_query("SELECT * FROM status WHERE category = 'remote'");
	while($row = mysql_fetch_array($remoteResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}

	$displayResult = mysql_query("SELECT * FROM status WHERE category = 'display'");
	while($row = mysql_fetch_array($displayResult)){
		echo $row['category'] . " " . $row['currentSetting'];
		echo "<br />";
	}

mysql_close($con);

?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body {background-color:green;}
p {color:white;}


h1{
	position:absolute;
	left:500px;
	top:20px;
	color: blue;
	text-decoration: underline;
}

h2.pos_right{
	position:absolute;	
	right:500px;
	top:160px;
	color: black;
}

</style>
</head>

<body>
<p>


<h1 style="text-align:center"><big>The Bridge</big></h1>
</br></br>

<h2 class=pos_left style="text-align:left;"> Christmas Lights </br>
	<form action="Apartment_Controller.php" METHOD="GET" ></br>
		Options:<br>
		<input type=radio name=lights value=11111111>ON</br>
		
		<input type=radio name=lights value=00000000>OFF</br>
		<input type=submit value=Update>
	</form>
</h2>
	

<h2 class = pos_right style="text-align:right;"> Shade Settings</br>

	<form METHOD="GET" action="Apartment_Controller.php" ></br>
		<input type=radio name = shades value=11111111> Open </br>       
		<input type=radio name = shades value=00000000> Close </br>
		</br>
		<input type=submit value = Update>
	</form>
</h2>

</body>

</html>

