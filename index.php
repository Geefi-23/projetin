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
  <link rel="stylesheet" href="/assets/css/card.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/media-queries.css">

  <title>BETA TESTE</title>
</head>
<body>
  <?php 
    require 'assets/modulos/header.php'; 
    require 'assets/modulos/banner.php';
  ?>
  
  <main id="container">
    <div class="section mt-2">
      <div class="section--header">
        <h2>Últimas Notícias</h2>
        <div class="section--toolbar">
          <select class="h-75 p-1 border rounded-pill" name="filtro" >
            <option value="filtros" selected>Filtros</option>
          </select>
          <div class="d-flex p-1">
            <input class="ps-1 border rounded" type="text" role="search">
            <button class="border-0" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
            </button>
          </div>
          <nav class="nav">
            <button class="nav_btn nav_btn-caret">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
              </svg>
            </button>
            <button class="nav_btn nav_btn-caret">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
              </svg>
            </button>
          </nav>
        </div>
      </div>
      <div class="section--body">
        <div style="width: 995px">
          <?php 
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
            require 'assets/modulos/card.php';
          ?>
        </div>
      </div>
    </div>
    <section>
      <div class="titulo-galeria">
        <h1>Nossa Galeria</h1>
      </div>
      <div class="section-pai">
      <div class="imagem" style="  width: 251px; margin-left: 63px; height: 172px; border-radius: 10px;background-image: url('https://lighthabbo.com.br/uploads/noticia-db3e9680528bd8c3c009c4345b42d6af.png')">
<a href="coluna/1177-1-bate-papo-na-light-oeamanda">
<div class="info">
<div>
<p>Nenhum comentário ainda</p>
<p><b>27</b>
visualizações</p>
</div>
</div>
</a>
</div>
<div class="imagem" style=" width: 251px;    border-radius: 10px;
    margin-left: 63px;background-image: url('https://lighthabbo.com.br/uploads/noticia-db3e9680528bd8c3c009c4345b42d6af.png')">
<a href="coluna/1177-1-bate-papo-na-light-oeamanda">
<div class="info">
<div>
<p>Nenhum comentário ainda</p>
<p><b>27</b>
visualizações</p>
</div>
</div>
</a>
</div>
<div class="imagem" style="  width: 251px;   border-radius: 10px;
    margin-left: 63px;background-image: url('https://lighthabbo.com.br/uploads/noticia-db3e9680528bd8c3c009c4345b42d6af.png')">
<a href="coluna/1177-1-bate-papo-na-light-oeamanda">
<div class="info">
<div>
<p>Nenhum comentário ainda</p>
<p><b>27</b>
visualizações</p>
</div>
</div>
</a>
</div>
<div class="imagem" style=" width: 251px;    border-radius: 10px;
    margin-left: 63px;background-image: url('https://lighthabbo.com.br/uploads/noticia-db3e9680528bd8c3c009c4345b42d6af.png')">
<a href="coluna/1177-1-bate-papo-na-light-oeamanda">
<div class="info">
<div>
<p>Nenhum comentário ainda</p>
<p><b>27</b>
visualizações</p>
</div>
</div>
</a>
</div>
  </div>
  </div>
    </section>
    <div class="titulo">
      <h1>Emblemas</h1>
    </div>
 <section>
 <div class="main-and-sidebar-wrapper">
    <section class="main"></section>
    <aside class="sidebar"></aside>
</div>
 </section>
 <section>
  <div class="section-emblemas">
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
</div>
<div class="section-emblemas-2">
<div class="section-emblemas">
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
</div>
</div>
<div class="section-emblemas">
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
  <div class="emblema-1"></div>
</section>
<section>
  <div class="titulo">
    <h1>Colunas</h1>
  </div>

</div>
</section>
  </main>
  <footer class="mt-4" style="background-color: blue; width: 100%; height: 250px"></footer>
</body>
</html>