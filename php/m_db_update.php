<?php

include ('db_connect.php');

	$lightsResult = mysql_query("SELECT * FROM status WHERE category = 'lights'");
		
	while($row = mysql_fetch_array($lightsResult)){

		if ($_GET["lights"] != $row['current_setting']) {

			$new_value = $_GET['lights'];
			mysql_query("UPDATE status SET current_setting='".$new_value."'
					     WHERE category='lights'");
		}
	}

	$shadesResult = mysql_query("SELECT * FROM status WHERE category = 'shades'");
		
	while($row = mysql_fetch_array($shadesResult)){

		if ($_GET["shades"] != $row['current_setting']) {

			$new_value = $_GET['shades'];
			mysql_query("UPDATE status SET current_setting='".$new_value."'
					     WHERE category='shades'");
		}
	}

	$doorResult = mysql_query("SELECT * FROM status WHERE category = 'door'");
		
	while($row = mysql_fetch_array($doorResult)){

		if ($_GET["door"] != $row['current_setting']) {

			$new_value = $_GET['door'];
			mysql_query("UPDATE status SET current_setting='".$new_value."'
					     WHERE category='door'");
		}
	}

header ('Location: ../m_bridge.php');

?>