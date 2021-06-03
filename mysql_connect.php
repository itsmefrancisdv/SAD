<?php
session_start();
$dbc=mysqli_connect('localhost','root','admin','lazerosa');

if (!$dbc) {
 die('Could not connect: ');
}

?>
