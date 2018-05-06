<?php
include "db.php";
session_start();
?>

<!doctype html>

<head>
  <meta charset="utf-8">
  <title>게시판</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
  <style>
    a {
      color: black;
    }

    a:hover {
      color: black;
    }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">자유게시판</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="container">
          <ul class="navbar-nav">
<?php if (empty($_SESSION['id'])) { ?>
            <li class="nav-item active">
              <a class="nav-link" href="signup.php">회원가입
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="signin.php">로그인
                <span class="sr-only">(current)</span>
              </a>
            </li>
          <?php } else { ?>
            <li class="nav-item active">
              <a class="nav-link" href="logout.php">로그아웃
                <span class="sr-only">(current)</span>
              </a>
            </li>
          <?php } ?>
          </ul>
        </div>
      </div>
    </nav>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">번호</th>
          <th scope="col" style="text-align: center">글쓴이</th>
          <th scope="col" style="text-align: center">제목</th>
          <th scope="col" style="text-align: center">내용</th>
        </tr>
      </thead>
      <tbody>
        <?php
$query = "select * from post";
$result = mysqli_query($conn, $query);

for($i = 1; $row = mysqli_fetch_assoc($result); $i++){ 
?>
          <tr>
            <th scope="row">
              <?= $row['no'] ?>
            </th>
            <td style="text-align: center">
              <?= $row['author'] ?>
            </td>
            <td style="text-align: center">
              <a href="detail.php?id=<?= $row['no'] ?>">
                <?= $row['title'] ?>
              </a>
            </td>
            <td style="text-align: center">
              <?= $row['comment']?>
            </td>
          </tr>
          <?php } ?>
      </tbody>
    </table>

    <button type="button" class="btn btn-primary btn-lg btn-block" onClick="window.location.href='post.php'">작성하기</button>
  </div>
</body>

</html>