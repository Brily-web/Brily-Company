<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lowongan kerja</title>
  <link rel="shortcut icon" href="logo.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
  <!-- ini adalah bagian Navbar-->
  <nav class="navbar navbar-expand-lg ">
    <div class="container-fluid p-3 bg-danger ">
      <a class="navbar-brand mx-3 " href="#">
        <img src="logo.png" alt="Bootstrap" width="70" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftarLowongan.php">Daftar Lowongan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Masuk.php">Masuk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="daftar.php">Daftar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li class="align-self-center mx-3 my-2"><img src="person.png" class="rounded-circle" style="height: 30px;" alt="..."> <a class="link-offset-2 link-underline link-underline-opacity-0 link-danger" href="#"> Myaccount</a></li>
              <li><a class="dropdown-item" href="#"></a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir Navbar-->

  <!-- content pembuka-->
  <div class="container">
    <div class="container text-center text-light" style="height: 300px;">
      <div class="row" style="height: 300px;">
        <div class="col ">
          <img src="reqrutment.png" style="height: 500px; width: 600px;" alt="...">
        </div>
        <div class="col align-self-end mx-5">
          <div class="text-start">
            <h1>Create, your way</h1>
            <p>Bekerja bersama kami dengan membentuk tim <br> kerja Web Developer yang terbaik</p>
          </div>
          <form class="row g-3">
            <div class="col-auto">
              <a href="daftar.php" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Get Started</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- content akhir-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>