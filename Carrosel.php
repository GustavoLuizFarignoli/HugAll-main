<?php
  session_start();
  if(isset($_SESSION["user"]) && $_SESSION["user"] != 0){
    //echo "Bem vindo(a) ao Sistema, " . ucfirst($_SESSION["user"][0]);
  } else {
    header("Location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/carrosel.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="Imagens/hugALL-removebg-preview.png">
    <title>ONG em Destaque</title>
</head>
<body>
  <div id="main">
    <div class="menu">
      <h2 id="Logo"><img id="imagelogo" src="Imagens/hugALL-removebg-preview.png" onclick="home()"></h2>
      <a href="login.php">Logar-se</a>
      <a href="Index.php">Sobre Nós</a>
      <a href="Equipe.php">A Equipe</a>
      <a href="Carrosel.php">ONGs em Destaque</a>
      <a href="#"></a>
      <a href="#"></a>
      <a href="perfil.php">Seu Perfil</a>
    </div>
    <div class="body">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="height: 100vh !important; width: 100% !important;">
        <div class="carousel-indicators indicator">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height:100% !important;">
          <div class="carousel-item active" style="height:100% !important;">
            <img src="Imagens/TombaLatas.jpg" class="d-block w-100 image" alt="TombaLatas" onclick="tombalatas()">
            <div class="carousel-caption d-none d-md-block slidestext">
              <h5>TombaLatas</h5>
              <p>ONG que cuida de bichinhos que foram abandonados</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 100% !important;">
            <img src="Imagens/grupo-diginidade.png" class="d-block w-100 image" alt="Grupo Dignidade" onclick="dignidade()">
            <div class="carousel-caption d-none d-md-block slidestext">
              <h5>Grupo Dignidade</h5>
              <p>Um grupo que busca dar suporte para a comunidade LGBTQI+</p>
            </div>
          </div>
          <div class="carousel-item" style="height: 100% !important;">
            <img src="Imagens/Teto.png" class="d-block w-100 image" alt="Teto" onclick="teto()">
            <div class="carousel-caption d-none d-md-block slidestext">
              <h5>Teto</h5>
              <p>Um grupo independente que constrói casas para moradores em local de risco</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon arrow" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon arrow" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <script lang="javascript">
    function home(){
        location.href = "index.php";
    }
    function tombalatas(){
      window.open("https://www.instagram.com/tombalatas/", '_blank').focus();
    }
    function dignidade(){
      window.open("https://www.grupodignidade.org.br/", '_blank').focus();
    }
    function teto(){
      window.open("https://teto.org.br/sobre-a-teto/", '_blank').focus();
    }
  </script>
</body>
</html>



