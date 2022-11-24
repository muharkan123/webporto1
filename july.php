<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <?php
    include 'header.php';
    ?>
    <title>Web Ark Production</title>
</head>
<body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><a href="home.php"/></svg>
        <span class="navbar-brand fs-5">Ark Production</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="galeri.php" class="nav-link">Galeri</a></li>
        <li class="nav-item"><a href="profil.php" class="nav-link">Profil</a></li>
        <li class="nav-item"><a href="contactus.php" class="nav-link">Contact Us</a></li>
      </ul>
    </header>
    <nav class="nav nav-pills nav-justified">
          <a class="nav-link" href="programming.php">Programming</a>
          <a class="nav-link" href="teknologi.php">Teknologi</a>
          <a class="nav-link" href="sosial.php">Sosial</a>
          <a class="nav-link" href="budaya.php">Budaya</a>
          <a class="nav-link" href="ekonomi.php">Ekonomi</a>
          <a class="nav-link" href="politik.php">Politik</a>
        </nav>
        <hr>

    </div>
  
<div class="b-example-divider"></div>

<div class="container" id="artik"></div>
<br>
<div class="container">
     <div class="card">
      <div class="card-body bg-light">
        <h3 class="pb-4 mb-4 fst-italic border-bottom text-center">
          July Article
        </h3>
          <div class="container mt-4 ">
            <div class="row mb-2">
                  <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative shadow-lg">
                      <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-danger">Sosial</strong>
                        <h3 class="mb-0">Trust issue</h3>
                        <div class="mb-1 text-muted">July 2022</div>
                        <p class="mb-auto"> Trust issue adalah masalah emosional yang berdampak tak hanya pada hubungan personal namun ...</p>
                        <a href="sosial1.php" class="stretched-link">Lanjut Membaca</a>
                      </div>
                      <div class="col-auto d-none d-lg-block px-4 mt-5">
                          <img src="asset/images/sosial.jpg" width="150" height="120">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative shadow-lg">
                      <div class="col p-4 d-flex flex-column position-static ">
                        <strong class="d-inline-block mb-2 text-secondary">Budaya</strong>
                        <h3 class="mb-0">Gamelan</h3>
                        <div class="mb-1 text-muted">July 2022</div>
                        <p class="mb-auto">Gamelan merupakan gabungan kata "gamel" dan "an". Menurut arti bahasa Jawa, kata "gamel" berarti... </p>
                        <a href="budaya1.php" class="stretched-link">Lanjut Membaca</a>
                      </div>
                      <div class="col-auto d-none d-lg-block px-4 mt-5">
                          <img src="asset/images/gmln.webp" width="150" height="150">
                      </div>
                    </div>
                  </div>
            </div>
            <p>
          <a class="btn btn-primary" href="index.php" role="button">Back To Home &raquo;</a>
        </p>
          </div>
          
      </div>
     </div>
     
</div>

<br>
<br>

<?php
include('footer.php');
?>



</body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X      +965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
