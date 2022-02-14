const Auth = () => {
  let activeForm = 'login';
  const registerFormCont = document.querySelector('#registerForm-container');
  const loginFormCont = document.querySelector('#loginForm-container');

  const linkToLogin = registerFormCont.querySelector('#linkto-login');
  const linkToRegister = loginFormCont.querySelector('#linkto-register');

  const init = () => {
    linkToLogin.onclick = (evt) => {
      evt.preventDefault();
      toggleForm();
    }
    linkToRegister.onclick = (evt) => {
      evt.preventDefault();
      toggleForm();
    }
  };

  const toggleForm = () => {
    activeForm = activeForm === 'login' ? 'register' : 'login';

    if (activeForm === 'login') {
      loginFormCont.classList.remove('d-none')
      registerFormCont.classList.add('d-none')
    } else if (activeForm === 'register') {
      registerFormCont.classList.remove('d-none')
      loginFormCont.classList.add('d-none')
    }
  };

  return {
    init
  };
};

export default Auth();