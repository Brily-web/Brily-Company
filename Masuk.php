<?php

require 'database.php';

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = mysqli_query($conn, "SELECT * FROM data_user WHERE user_name='$username' AND password='$password' ");
  //cek username
  if (mysqli_num_rows($query) > 0) {
    header('location: daftarLowongan.php');
  } else {
    $error = true;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lowongan Kerja</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body class="bg-dark d-flex align-items-center" style="height: 100vh;">
  <div class="container text-center">
    <div class="row">
      <div class="col"></div>
      <div class="col-5 text-light bg-primary border border-2 rounded">
        <form action="" method="post">
          <br>
          <h1>Sign In</h1>
          <p></p>
          <div class="mb-3 text-start mx-2">
            <label for="exampleFormControlInput1" class="form-label ">Username</label>
            <input type="text" name="username" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="text-start mx-2">
            <label for="inputPassword5" class="form-label">Password</label>
            <input type="password" id="inputPassword5" name="password" class="form-control" aria-describedby="passwordHelpBlock">
          </div>
          <?php if (isset($error)) : ?>
            <div id="passwordHelpBlock" class="form-text text-danger">
              username atau password yang anda masukan salah!!!
            </div>
          <?php endif; ?>
          <div class="mx-1 my-3">
            <button type="submit" name="login" class="btn btn-outline-info">Masuk</button>
          </div>
        </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
  <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>