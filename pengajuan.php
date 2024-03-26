<?php

include 'database.php';

// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
  $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $posisi = mysqli_real_escape_string($conn, $_POST['posisi']);

  $sql = "INSERT INTO pengajuan (nama_pelamar, email, nama_pekerjaan) VALUES ('$nama_lengkap', '$email', '$posisi')";
  if (empty($nama_lengkap) || empty($email) || empty($posisi)) {
    echo "<script>alert('anda harus mengisi semua kolom pendaftaran')</script>";
  } else {
    if (mysqli_query($conn, $sql)) {
      echo "<script>
                  alert('Data telah berhasil diunggah');
              </script>";
    } else {
      echo "<script>
                  alert('maaf data anda belum bisa dimasukan');
              </script>";
    }
  }
  $extensionDiizinkan = array('pdf');
  $namafile = $_FILES['fileToUpload']['name'];
  $fileExtension = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
  $file_tmp = $_FILES['fileToUpload']['tmp_name'];
  if (in_array($fileExtension, $extensionDiizinkan) > 0) {

    move_uploaded_file($file_tmp, 'cv_pelamar/' . $namafile);

    echo "<script>alert('Berkas anda Berhasil diunggah')</script>";
  } else {
    echo "File gagal diunggah";
  }
}
?>
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
    <div class="container-fluid p-2 bg-danger ">
      <a class="navbar-brand mx-3 " href="#">
        <img src="logo.png" alt="Bootstrap" width="70" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-2">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="daftarLowongan.php">Daftar Lowongan</a>
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
  <!-- Content here-->
  <div class="container">
    <div class="text-light my-4">
      <h1>Formulir Pengajuan</h1>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
      <div class="text-light" style="width: 600px;">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
          <input type="Name" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class=" mb-3">
          <label for="exampleFormControlInput1" class="form-label">Pilih Lowongan</label>
          <select class="form-select" type="text" name="posisi" id="inputGroupSelect01">
            <option value="UI/UX DESIGNER">UI/UX DESIGNER</option>
            <option value="IT SUPPORT">IT SUPPORT</option>
            <option value="FULLSTACK DEVELOPER">FULLSTACK DEVELOPER</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Masukan File CV</label>
          <input class="form-control" name="fileToUpload" type="file" id="formFile">
        </div>
        <div class="col-12">
          <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
        </div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>