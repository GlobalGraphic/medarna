<?php

define('DB_SERVER', '46.229.230.117');
define('DB_USERNAME', 'nr026900');
define('DB_PASSWORD', 'vnawaxyv');
define('DB_NAME', 'nr026900db');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>