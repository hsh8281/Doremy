<?php
include "db.php";

$id = $_POST['id'];
$password = $_POST['password'];
$password = hash('sha256', $password);
$email = $_POST['email'];

$sql="INSERT INTO user(id,password,email)
   VALUES('$id','$password','$email')";

$mysqli->query($sql);

header('Location: signin.php');
?>


