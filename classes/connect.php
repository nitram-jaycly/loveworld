<?php

    $servername = "localhost"; //41.160.234.181";
    $username = "";
    $password = "";

    $dbhandle = mysql_connect ( $servername, $username, $password );
	
	$selected = mysql_select_db("lovewsat_data_collection", $dbhandle); 
	
?>	