<?php

$con = new mysqli('localhost', 'root', '', 'beauty_parlour');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 

?>
