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
      <title>BETA TESTE</title>
   </head>
   <body>
      <?php 
         require 'assets/modulos/header.php'; 
         require 'assets/modulos/banner.php';
      ?>
      <main id="container">
         <div class="section">
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
               <h2>Nossa Galeria</h2>
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
      </main>
      <footer class="mt-4" style="background-color: blue; width: 100%; height: 250px"></footer>
   </body>
</html>