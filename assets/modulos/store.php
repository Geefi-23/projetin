<div class="section">
  <div class="section--header">
    <img style="width: 50px;image-rendering: pixelated" src="/assets/icons/cash.png" alt="">
    <h2 class="ms-2">Nossa loja</h2>
  </div>
  <div class="section--body flex-column">
    <div class="store">
      <div class="store-flags">
        <?php for($i = 0; $i < 26; $i++): ?>
          <div class="flag flag-a"></div>
          <div class="flag flag-b"></div>
        <?php endfor; ?>
      </div>
      <div class="slider">
        <button id="store-slider--prev" class="store-slider_btn" aria-label="Previous">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
          </svg>
        </button>
        <div id="slider--body" class="store-content">
          <div class="store-item">
            <div class="thumbnail"></div>
            <div class="title"><h4>Clube sofá</h4></div>
            <small class="text-secondary">Por: geefizin</small>
            <h4>R$ 00,00</h4>
            <button class="button-buy">Comprar</button>
          </div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
          <div class="store-item"></div>
        </div>
        <button id="store-slider--next" class="store-slider_btn" aria-label="Previous" style="right: 0">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg>
        </button>
      </div>
      
    </div>
    
  </div>
</div>