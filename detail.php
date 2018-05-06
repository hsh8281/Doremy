<?php


$id = $_GET['id'];

include "db.php";
$query = "select * from post where no = $id";
$result = mysqli_query($conn, $query);
$row = $result->fetch_assoc();


?>
<!doctype html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>게시판</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">자유게시판</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      <div class="container">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="signup.PHP">회원가입
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="signin.PHP">로그인
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
        </div>
      </div>
    </nav>
<div class="card text-white bg-dark mb-12 text-center">
  <div class="card-header"><?= $row['author'] ?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $row['title'] ?></h5>
    <p class="card-text"><?= $row['comment'] ?></p>
  </div>
<p></div></p> 

<div class="container">
  <form action="CommentWrite.php" method="post">
    <div class="form-group">
    <input hidden="p_id" value="<?= $id ?>" name="p_id">
      <label for="comment">Comment</label>
      <textarea class="form-control" rows="4" id="comment" name="comment" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">작성</button>
</form>
</br>
<table class="table">
<thead> 
<tr>

    <th scope="col" >번호</th>
    
    
    <th scope="col" style="text-align: center">내용</th>
  </tr>
</thead>
  <tbody>
  
  <?php
  $query1 ="select * from comment where p_id=$id";
  $result1=mysqli_query($conn,$query1);
  for($i=1; $row1 = mysqli_fetch_assoc($result1); $i++){
  
  ?>
  <tr>  
      <th scope="row"><?= $i ;?></th>
      <td style="text-align: center"><?= nl2br($row1['comment']) ?></td>
  </tr>
<?php } ?>
      
</tbody>
</div>
</body>
</html>
