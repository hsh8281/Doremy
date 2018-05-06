<?php
include "db.php";
session_start();
    if (empty($_POST["id"]) || empty($_POST["password"])) {
        die("<script>alert('empty'); history.go(-1);</script>");
    } else {
        $id = $_POST['id'];

        $password = $_POST['password'];
        $id = addslashes($id);
        $id = stripslashes($id);
        $password = stripslashes($password);
        $id = mysqli_real_escape_string($conn, $id);
        $password = mysqli_real_escape_string($conn, $password);
        $password = hash('sha256', $password);
        $query = "select * from user where id=trim('{$id}') and password='$password'";
        $row = mysqli_fetch_array($mysqli->query($query));
        if (isset($row['id'])) {
            $_SESSION['id'] = $row['id'];
            die("<script>alert('{$_SESSION['id']}님 오신걸 환영합니다.'); window.location.href= 'index.php';</script>");
        } else {
           
            die("<script>alert('입력하신 계정이 로그인에 실패 하였습니다.'); history.go(-1);</script>");
        }
    }

?>