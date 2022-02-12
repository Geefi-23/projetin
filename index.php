<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="/assets/css/index.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="/assets/css/topico.css">
  <link rel="stylesheet" href="/assets/css/cards.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/media-queries.css">
  <link rel="stylesheet" href="/assets/css/store.css">
  <link rel="stylesheet" href="/assets/css/modals.css">

  <link href="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.css" rel="stylesheet">

  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <title>BETA TESTE</title>
</head>

<body>
  <?php
  require 'assets/modulos/header.php';
  require 'assets/modulos/banner.php';
  require 'assets/modulos/auth-modal.php';
  ?>
  <main id="container">
    <div class="section">
      <div class="section--header justify-content-between">
        <h2>Últimas Notícias</h2>
        <div class="section--toolbar">
          <select class="h-75 p-1 border rounded-pill" name="filtro">
            <option value="filtros" selected>Filtros</option>
          </select>
          <div class="d-flex p-1">
            <input class="ps-1 border rounded" type="text" role="search">
            <button class="border-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
              </svg>
            </button>
          </div>
          <nav class="nav">
            <button class="nav_btn nav_btn-caret">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
              </svg>
            </button>
            <button class="nav_btn nav_btn-caret">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
              </svg>
            </button>
          </nav>
        </div>
      </div>
      <div class="section--body">
        <div class="d-flex flex-wrap gap-4" style="width: 952px">
          <?php
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          require 'assets/modulos/notice-card.php';
          ?>
        </div>
      </div>
    </div>
    <div class="section d-flex flex-row">
      <div class="d-inline-block w-25">
        <div class="section--header">
          <h2>Emblemas</h2>
        </div>
        <div class="d-flex flex-wrap gap-2 custom-scrollbar overflow-auto" style="height: 240px;">
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
          <div class="emblema"></div>
        </div>
      </div>
      <div class="d-inline-block w-75 ps-5">
        <div class="section--header">
          <h2>Mobis Recentes</h2>
        </div>
        <div class="section--body gap-3">
          <?php
          require 'assets/modulos/mobi-card.php';
          require 'assets/modulos/mobi-card.php';
          require 'assets/modulos/mobi-card.php';
          require 'assets/modulos/mobi-card.php';
          ?>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="section--header">
        <img style="width: 45px;image-rendering: pixelated" src="/assets/icons/frame-grass.png" alt="">
        <h2 class="ms-2">Nossa Galeria</h2>
      </div>
      <div class="section--body flex-wrap gap-1">
        <div class="gallery-card">
          <div class="h-100">
            <img src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
          </div>
          <div class="info-box">
            <h4>Nome da foto aqui</h4>
            <h5>Geefi</h5>
            <span>Clique para ver a foto!</span>
          </div>
        </div>
        <div class="gallery-card">
          <div class="h-100">
            <img src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
          </div>
          <div class="info-box">
            <h4>Nome da foto aqui</h4>
            <h5>Geefi</h5>
            <span>Clique para ver a foto!</span>
          </div>
        </div>
        <div class="gallery-card">
          <div class="h-100">
            <img src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
          </div>
          <div class="info-box">
            <h4>Nome da foto aqui</h4>
            <h5>Geefi</h5>
            <span>Clique para ver a foto!</span>
          </div>
        </div>
        <div class="gallery-card">
          <div class="h-100">
            <img src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
          </div>
          <div class="info-box">
            <h4>Nome da foto aqui</h4>
            <h5>Geefi</h5>
            <span>Clique para ver a foto!</span>
          </div>
        </div>
      </div>
    </div>
    <h1 style="font-size: 2rem;	font-family:Arial, Helvetica, sans-serif;">Colunas News</h1>
    <div class="card-container">
      <div class="card card-1">
        <div class="card-img"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag tag-news">NEWS</a>
            <div class="card-time"></div>
          </div>
          <h1 style="	font-family:Arial, Helvetica, sans-serif;" class="card-title">Esse é um teste </h1>
          <div style="font-family:Arial, Helvetica, sans-serif;" class="card-creator">Vamos falar de <a href="">Natal</a></div>

        </div>
      </div>
      <div class="card card-2">
        <div class="card-img"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag">News</a>
            <div class="card-time"></div>
          </div>
          <h1 style="	font-family:Arial, Helvetica, sans-serif;" class="card-title">Esse é um teste </h1>
          <div style="	font-family:Arial, Helvetica, sans-serif;" class="card-creator">Postado por <a href="">Marcos</a></div>
        </div>
      </div>
      <div class="card card-3">
        <div class="card-img"></div>
        <a href="" class="card-link">
          <div class="card-img-hovered"></div>
        </a>
        <div class="card-info">
          <div class="card-about">
            <a class="card-tag tag-deals">News</a>
            <div class="card-time"></div>
          </div>
          <h1 style="	font-family:Arial, Helvetica, sans-serif;" class="card-title">Esse é um teste </h1>
          <div style="	font-family:Arial, Helvetica, sans-serif;" class="card-creator">Postado por <a href="">Marcos</a></div>
        </div>
      </div>
    </div>
    </div>
    <?php require 'assets/modulos/store.php' ?>
  </main>
  <footer class="mt-4" style="background-color: blue; width: 100%; height: 250px"></footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/glider-js@1/glider.min.js"></script>
  <script src="assets/js/index.js" type="module"></script>
</body>

</html>