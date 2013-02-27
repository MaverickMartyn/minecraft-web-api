<?php
	$mysqlhost = "HOST";
    $mysqluser = "USERNAME";
    $mysqlpw = "MYSQLPW";
	$connection=mysql_connect("$mysqlhost", "$mysqluser", "$mysqlpw") or die
    ("Failed to connect.");
?>