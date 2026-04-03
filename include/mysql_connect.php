<?php
	$db_host = 'localhost';
	$db_username = 'niclas';
	$db_pass = 'ecenier';
	$db_name = 'ecdb';

	$link = mysqli_connect($db_host, $db_username, $db_pass) or die ("Could not connect to MySQL Server");
	mysqli_select_db($link, $db_name) or die ("No database");
	mysqli_set_charset($link, 'utf8');
?>
