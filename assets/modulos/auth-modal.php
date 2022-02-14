<div id="authModal" class="modal faded" data-bs-backdrop="static" aria-hidden="true">
  <div class="auth-dialog modal-dialog modal-dialog-centered" role="dialog">
    <div class="modal-content p-2">
      <div id="loginForm-container" class="h-100 w-100">
        <h2>Entre na sua conta</h2>
        <form class="d-flex flex-column align-items-center gap-3" action="#">
          <input type="text" placeholder="Usuario" aria-label="Usuario">
          <div class="d-flex flex-row w-75">
            <input style="width: 85% !important" class="rounded-0 rounded-start" type="password" placeholder="Senha" aria-label="Senha">
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
          <div>
            <a class="link-primary" href="/forgot-user">Esqueci meu usuário</a>
            <span class="text-secondary">|</span>
            <a class="link-primary" href="/forgot-password">Esqueci minha senha</a>
          </div>
          <div>
            Não tenho tenho uma conta, <a id="linkto-register" class="link-primary" href="#">quero me cadastrar!</a>
          </div>
          
          <div class="d-flex justify-content-between w-75 mt-2">
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal" aria-label="Fechar">Fechar</button>
            <button class="btn btn-primary" type="submit" aria-label="Entrar">Entrar</button>
          </div>
        </form>
      </div>
      <div id="registerForm-container" class="d-none h-100 w-100">
        <h2>Faça seu cadastro</h2>
        <form class="d-flex flex-column align-items-center gap-3" action="#">
          <input type="text" placeholder="" aria-label="Usuario">
          <div class="d-flex flex-row w-75">
            <input style="width: 85% !important" class="rounded-0 rounded-start" type="password" 
            placeholder="Senha" aria-label="Senha">
            <button type="button" class="border border-start-0 rounded-end" style="width: 15%"
            onclick="let input = this.closest('div').querySelector('input'); input.type = input.type === 'password' ? 'text' : 'password';
            let repeatPass = document.querySelector('#input-repeatPass'); repeatPass.type = repeatPass.type === 'password' ? 'text' : 'password'">
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
          <input id="input-repeatPass" class="w-75 rounded-0 rounded-start" type="password" 
          placeholder="Repita sua senha" aria-label="Repita sua senha">
          
          <div>
            Já tenho uma conta, <a id="linkto-login" class="link-primary" href="javascript:void()">entrar.</a>
          </div>
          
          <div class="d-flex justify-content-between w-75 mt-2">
            <button class="btn btn-primary" type="button" data-bs-dismiss="modal" aria-label="Fechar">Fechar</button>
            <button class="btn btn-primary" type="submit" aria-label="Entrar">Entrar</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</div>