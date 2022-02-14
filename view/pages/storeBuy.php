<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="/assets/css/reset.css" rel="stylesheet">
  <link href="/assets/css/storeBuy.css" rel="stylesheet">

  <title>Loja - {Nome do item}</title>
</head>
<body>
  <div class="container-sm d-flex flex-column bg-white border rounded mt-5" style="height: 500px">
    <div id="cash-bar">
      <div class="cash-bar-item"></div>
      <div class="cash-bar-item"></div>
      <div class="cash-bar-item"></div>
    </div>
    <div class="row h-100 gx-0">
      <div class="col p-4">
        <div class="h-100">
          <div class="d-flex flex-column align-items-center h-100 w-100">
            <div class="product-view"></div>
            <div class="product-info">
              <h5>Nome do produto</h5>
              <span>Preço em dimas</span>
              <span>Preço em pontos de presença</span>
              <small class="mt-2">Nome do vendedor</small>
              <small class="mt-5"><span class="text-danger">*</span> Tenha em mente que não será possível fazer reembolso após a confirmação da compra!</small>
            </div>
          </div>
        </div>
      </div>
      <div class="col border-end">
        <div class="d-flex justify-content-center align-items-center w-100 h-100">
          <div class="w-75 h-75">
            <h6>Comprador: {Nome do cliente}</h6>
            <div class="d-flex gap-2 mt-4">
              <span>Pagar em: </span>
              <div id="pay-option-diamonds" class="product-pay-option" aria-label="Diamantes">
                Dimas
              </div>
              <div id="pay-option-points" class="product-pay-option" aria-label="Pontos de presença">
                Pontos
              </div>
            </div>
            <h5 class="mt-2">Confirme seus dados:</h5>
            <div class="w-50 mt-2">
              <label class="position-relative w-100">
                <input id="in-username" class="w-100 border" style="height: 40px" type="text" placeholder=" " autocomplete="off"
                aria-label="Usuário">
                <span>Usuário</span>
              </label>
            </div>
            <div class="position-relative d-flex flex-row w-50 mt-3" style="height: 40px">
              <input style="width: 85% !important" class="border rounded-0 rounded-start" type="password" 
              placeholder=" " aria-label="Senha">
              <span>Senha</span>
              <button type="button" class="border border-start-0 rounded-end" style="width: 15%"
              onclick="let input = this.closest('div').querySelector('input'); input.type = input.type === 'password' ? 'text' : 'password'">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                  <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                  <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
                <svg style="display: none" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-eye-slash" viewBox="0 0 16 16">
                  <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7.028 7.028 0 0 0-2.79.588l.77.771A5.944 5.944 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.134 13.134 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755-.165.165-.337.328-.517.486l.708.709z"/>
                  <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829l.822.822zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829z"/>
                  <path d="M3.35 5.47c-.18.16-.353.322-.518.487A13.134 13.134 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7.029 7.029 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12-.708.708z"/>
                </svg>
              </button>
            </div>
            <div class="d-flex justify-content-between" style="margin-top: 20%">
              <a class="btn btn-secondary" href="/">Voltar</a>
              <button class="btn btn-success">Confirmar compra</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/js/storeBuy.js"></script>
</body>
</html>