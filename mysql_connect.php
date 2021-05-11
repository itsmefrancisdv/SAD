<?php
session_start();
$dbc=mysqli_connect('localhost','root','','dblazerosa2');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}

?>
