<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>회원가입</title>

  <style>
    body {
      background-image: url("https://wallpaperclicker.com/storage/wallpaper/COOL-WALLPAPER-7037-21909636.jpg")
    }
  </style>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
  <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/4.0/examples/cover/cover.css" rel="stylesheet">
</head>

<body>

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <p style="text-aling=center">
            <h3 class="masthead-brand">Sign in</h3>
          </p>
        </div>
      </header>
      <main role="main" class="inner cover">
        <h1 class="cover-heading"></h1>
        <form action="signup_process.php" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">아이디</label>
            <input type="text" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">비밀번호</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">이메일주소</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" name="" aria-describedby="emailHelp">
          </div>
          <button type="submit" class="btn btn-primary">회원가입</button>
        </form>

      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
        </div>
      </footer>
    </div>



  </body>

</html>