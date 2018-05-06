<?php

include "db.php";

$comment = $_POST['comment'];
$p_id = $_POST['p_id'];


$sql= "INSERT INTO comment(p_id,comment) VALUES('$p_id','$comment')";
       

$mysqli->query($sql);

header('Location: detail.php?id='.$p_id);
?>
