<?php
include "koneksi.php"
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daily Journal</title>
    <link rel="icon" href="img/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">My Daily Journal</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text dark">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Article</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#schedule">Schedule</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about me">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>
            <button id="themeToggle" class="btn btn-secondary">
              <i class="bi bi-moon-fill"></i>
            </button>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end -->

    <!-- hero begin -->
    <section id="hero" class="text-center p-5 bg-secondary-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row-reverse align-items-center">
          <img src="img/banner.jpg" class="img-fluid" width="300">
          <div>
            <h1 class="fw-bold display-4">Create memories, Save memories, Everyday</h1>
            <h4 class="lead display-6">Mencatat semua kegiatan sehari-hari yang ada tanpa terkecuali</h4>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </div>
        </div>
      </div>
    </section>
    <!-- hero end -->

    <!-- article begin -->
   <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <!-- article end -->

    <!-- gallery begin -->
    <section id="gallery" class="text-center p-5 bg-secondary-subtle">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Gallery</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/car.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/kijang.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/motor.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/pesawat.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/samsung.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- gallery end -->

    
    <!-- schedule begin -->
    <section id="schedule" class="text-center p-5">
      <div class="container">
        <h1 class="fw-bold display-4 pb-3">Schedule</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Senin</li>
            <li class="list-group-item">Basis data <br> 10:20-12:00 | D.3.m</li>
            <li class="list-group-item">Rekayasa Perangkat Lunak <br> 12:30-15:00 | H.5.12 <br> <br><br></li>
           
          </ul>
          
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Selasa</li>
            <li class="list-group-item">Pemrograman Web <br> 10:20-12:00 |D.2.J</li>
            <li class="list-group-item">PKN<br>12:30-14:15 | Aula <br> <br> <br></li>
           
          </ul>
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Rabu</li>
            <li class="list-group-item">Logika Informatika <br> 12:30-15:00 |H.4.10</li>
            <li class="list-group-item">Probabilitas Statistik <br> 15:30-18:00 |H.4.11 <br> <br> <br></li>
           
          </ul>
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Kamis</li>
            <li class="list-group-item">Basis data <br> 8:40-10:20 |H.4.6</li>
            <li class="list-group-item">Sistem Operasi<br>12:30-15:00 |H.4.11 <br> <br> <br></li>
           
          </ul>
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Jumat</li>
            <li class="list-group-item">Free<br><br><br><br><br><br><br></li>
           
          </ul>
          <ul class="list-group">
            <li class="list-group-item  bg-danger" aria-disabled="true">Sabtu</li>
            <li class="list-group-item">Free<br><br><br><br><br><br><br></li>
           
          </ul>
        </div>
      </div>
    </section>

    <!-- schedule end -->

    <!-- Aboutme begin -->
    <section id="about me" class="text-center p-5 bg-danger-subtle text-sm-start">
      <div class="container">
        <div class="d-sm-flex flex-sm-row align-items-center justify-content-center">
          <img src="https://th.bing.com/th?id=OSK.HEROElarvsvpgiVPqg7JTYnZDEI5K2rzL2P8_-NhnTrS-Ok&w=312&h=200&c=15&rs=2&o=6&dpr=1.3&pid=SANGAM" class="rounded-circle" alt="Cinque Terre" width="300">
          <div>
            <p>A11.2023.15336</p>
            <h3 class="fw-bold display">Fabian Adam Maheswara</h3>
            <p class="lead display">Program Studi Teknik Informatika</p>
            <p class="fw-bold display "><a href="https://dinus.ac.id/" class="text-dark">Universitas Dian Nuswantoro</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- Aboutme end -->

    

    <!-- footer begin -->
    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/biaaaannnnn_"> <i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://twitter.com/Biannn35800486"> <i class="bi bi-twitter h2 p-2 text-dark"></i></a>
        <a href="https://wa.me/+6281315114280"> <i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
      </div>
      <div>Fabian Adam Maheswara &copy; 2024</div>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
      // Display Date and Time
      window.setTimeout("tampilWaktu()", 1000);
      function tampilWaktu () {
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;
        setTimeout("tampilWaktu()",1000);
        document.getElementById("tanggal").innerHTML = waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
      }
      // Toggle Light/Dark Mode
      document.getElementById("themeToggle").addEventListener("click", function () {
        var currentTheme = document.documentElement.getAttribute("data-bs-theme");
        var newTheme = currentTheme === "light" ? "dark" : "light";
        document.documentElement.setAttribute("data-bs-theme", newTheme);
        // Change the icon
        this.innerHTML = newTheme === "light" ? '<i class="bi bi-moon-fill"></i>' : '<i class="bi bi-brightness-high-fill"></i>';
      });
    </script>
  </body>
</html>
