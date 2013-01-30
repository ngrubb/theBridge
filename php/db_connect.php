<?php

/* ----------------------------------------------------------------------------
  File establishes a connection and selects the correct database and adds 
  functions available to every web page.
*/
DEFINE(	'DB_USER',     'db160034');
DEFINE(	'DB_PASSWORD', 'S3m1c0l0n');
DEFINE(	'DB_HOST',     'internal-db.s160034.gridserver.com');
DEFINE(	'DB_NAME',     'db160034_Apartment');

$dbc = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD) or
        die('Could not connect to the correct database management system. <br /><br />
            Please contact TheDevelopers as soon as possible.');

mysql_select_db(DB_NAME) or
        die('Could not select the correct database. <br /><br /> 
            Please contact TheDevelopers as soon as possible.');

function close_connection($dbc){
	mysql_close($dbc);
}

?>
