<?php
$db_server="localhost";
$db_id="root";
$db_pw="";
$db_name="wework";

$mysqli = new mysqli($db_server, $db_id, $db_pw, $db_name);
$mysqli->set_charset("utf-8");

$conn = mysqli_connect($db_server,$db_id,$db_pw,$db_name);
mysqli_query($conn, "SET CHARSET UTF8");


?>