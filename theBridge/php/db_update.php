<?php
/*
This is for the forms that will be submitted to this page.
Forms will be coming from both the arduino and the website,
so this has to be able to handle both!
(6/21/12) 
*/
include ('db_connect.php');

	if($_GET["lights"]){
	
		if($_GET["lights"] == '11111111'){  //on
			mysql_query("UPDATE status SET current_setting='11111111'
			WHERE category='lights'");
		}
		else if($_GET["lights"] == '0'){  //off.. but this isnt working right now
			mysql_query("UPDATE status SET current_setting='00000000'
			WHERE category='lights'");
		}
		else{
			mysql_query("UPDATE status SET current_setting='00000000'
			WHERE category='lights'");
		}  
	}
	
	if($_GET["shades"]){

		if ($_GET["shades"] == '11111111'){ //open
			mysql_query("UPDATE status SET current_setting='11111111'
		 		WHERE category='shades'");
		}
		else if($_GET["shades"] == '00000000'){  //closed
			mysql_query("UPDATE status SET current_setting='00000000'
		 		WHERE category='shades'");
		}
		else {  //closed
			mysql_query("UPDATE status SET current_setting='00000000'
		 		WHERE category='shades'");
		}
	}

	if($_GET["door"]){
		if ($_GET["door"] == '11111111'){ //open
			mysql_query("UPDATE status SET current_setting='11111111'
		 		WHERE category='door'");
		}
		else if($_GET["door"] == '00000000'){  //closed
			mysql_query("UPDATE status SET current_setting='00000000'
		 		WHERE category='door'");
		}
		else {  //closed
			mysql_query("UPDATE status SET current_setting='00000000'
		 		WHERE category='door'");
		}
	}
?>