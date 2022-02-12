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
    <div class="section">
      <div class="titulo-galeria">
        <img src="https://2.bp.blogspot.com/-re9B1s0_qyE/VzZfziH8taI/AAAAAAAAEwE/qVPcqGTHnqIxToqsewSobA5yF1vT2stqQCLcB/s1600/Image%2B1383.png" alt="">
        <h2 style="margin-left: 94px;">Nossa Galeria</h2>
      </div>
      <script>
        $(document).ready(function() {
          var zindex = 10;

          $("div.card").click(function(e) {
            e.preventDefault();

            var isShowing = false;

            if ($(this).hasClass("show")) {
              isShowing = true
            }

            if ($("div.cards").hasClass("showing")) {
              // a card is already in view
              $("div.card.show")
                .removeClass("show");

              if (isShowing) {
                // this card was showing - reset the grid
                $("div.cards")
                  .removeClass("showing");
              } else {
                // this card isn't showing - get in with it
                $(this)
                  .css({
                    zIndex: zindex
                  })
                  .addClass("show");

              }

              zindex++;

            } else {
              // no cards in view
              $("div.cards")
                .addClass("showing");
              $(this)
                .css({
                  zIndex: zindex
                })
                .addClass("show");

              zindex++;
            }

          });
        });
      </script>
      <div class="cards">
        <div class="card">
          <div class="card__image-holder">
            <img class="card__image" src="data:image/jpeg;base64,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" alt="wave" />
          </div>
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
              NATAL NO KARALHO
              <small>Postado Por Marcos</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__image-holder">
            <img class="card__image" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="beach" />
          </div>
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
              NATAL NO KARALHO
              <small>Postado por Marcos</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__image-holder">
            <img class="card__image" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="mountain" />
          </div>
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
              Natal Poha
              <small>Postado por Marcos</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card__image-holder">
            <img class="card__image" src="https://pbs.twimg.com/profile_images/1149310538612166659/ru86F4OH_400x400.jpg" alt="mountain" />
          </div>
          <div class="card-title">
            <a href="#" class="toggle-info btn">
              <span class="left"></span>
              <span class="right"></span>
            </a>
            <h2>
              Natal Poha
              <small>Postado por Marcos</small>
            </h2>
          </div>
          <div class="card-flap flap1">
            <div class="card-description">
              This grid is an attempt to make something nice that works on touch devices. Ignoring hover states when they're not available etc.
            </div>
            <div class="card-flap flap2">
              <div class="card-actions">
                <a href="#" class="btn">Read more</a>
              </div>
            </div>
          </div>
        </div>



        <!--GALERIA PEGA TODA GALERIA-->

        <div class="main-and-sidebar-wrapper">
          <section class="main"></section>
          <aside class="sidebar"></aside>
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