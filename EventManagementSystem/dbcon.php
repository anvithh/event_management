<?php

$server = "localhost";
$uname = "root";
$pswd = "";
$db = "event_mgmt";

$con = mysqli_connect($server, $uname, $pswd, $db);
if(!$con) {
    echo "Connection Failed";
}

?>