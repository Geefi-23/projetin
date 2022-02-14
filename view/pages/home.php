<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
      <div class="section--header">
        <h2>Últimas Notícias</h2>
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
        <a class="gallery-card">
          <div class="h-100">
            <img src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
          </div>
          <div class="info-box">
            <h4>Nome da foto aqui</h4>
            <h5>Geefi</h5>
            <span>Clique para ver a foto!</span>
          </div>
        </a>
      </div>
    </div>
    <div class="d-flex flex-row w-100">
      <div class="section" style="width: 30%;background-color: firebrick"></div>
      <div class="section">
        <div class="section--header">
          <h2>Tópicos</h2>
        </div>
        <div class="section--body">
          <div class="d-flex justify-content-center flex-wrap gap-2 w-100">
            
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>
            <a class="topic-card">
              <div class="d-inline-block p-2" style="height: 100%;width: 90px;">
                <img style="height: inherit" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="">
              </div>
              <div class="info-box" style="max-width: calc(100% - 90px);">
                <strong role="title" class="d-block w-100 text-truncate">Titulo do tópico aaaaaaaaaaaaqui</strong>
                <small class="d-block text-secondary">16 horas atras</small>
                <small class="text-secondary">por: geefi</small>
              </div>
            </a>

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