<?php
include "db.php";

session_start();

if(empty($_SESSION['id'])) 
  die("<script>alert('로그인 해주세요'); window.location.href='signin.php'; </script>");

?>

<!doctype html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
</head>

<body>
  <div class="alert alert-dark" role="alert">
    <h1 style="text-align: center">Jimin</span>
    </h1>
  </div>
  <form action="write.php" method="post">
    <div class="container">
      <div class="form-group">
        <label for="exampleFormControlInput1">글쓴이</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="author" value="<?= $_SESSION['id']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">제목</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="제목">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">내용</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-lg btn-block">작성하기</button>
    </div>
  </form>
</body>

</html>