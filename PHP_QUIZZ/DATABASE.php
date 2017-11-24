<?php

// Create Connection Credentials

$db_host = 'localhost';
$db_name = 'phpquizz';
$db_user = 'root';
$db_pass = 'Jaisrirama';

// Create mysqli object

$mysqli = new mysqli ($db_host, $db_user, $db_pass, $db_name);

//  Error Handler

if ($mysqli -> connect_error) {
	
	die("Connection failed: " . $mysqli -> connect_error);	
}

	
?>