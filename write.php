<?php

include "db.php";

$title = $_POST['title'];
$comment = $_POST['comment'];
$author = $_POST['author'];

echo $title . "<br>";

$sql= "INSERT INTO post(title, comment, author)
       VALUES('$title','$comment', '$author')";
       
$mysqli->query($sql);

header('Location: index.php');
?>