<?php
    error_reporting(E_ALL ^ E_NOTICE);

    $DBConnect = mysqli_connect("localhost", "root", "admin")
    or die ("Unable to connect");

    mysqli_select_db($DBConnect, "lazerosa");
?>