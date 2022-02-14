let payOption = null;
const PAY_OPTION_DIAMONDS = 'DIAMONDS';
const PAY_OPTION_POINTS = 'POINTS';

window.onload = () => {
  let payOptionDiamonds = document.querySelector('#pay-option-diamonds');
  let payOptionPoints = document.querySelector('#pay-option-points');
  

  const setPayOption = (method) => {
    payOption = method;
  };

  payOptionDiamonds.onclick = function() {
    document.querySelectorAll('.product-pay-option').forEach((element) => {
      element.classList.remove('pay-option-active');
    });
    this.classList.add('pay-option-active')
    setPayOption(PAY_OPTION_DIAMONDS);
  };

  payOptionPoints.onclick = function() {
    document.querySelectorAll('.product-pay-option').forEach((element) => {
      element.classList.remove('pay-option-active');
    });
    this.classList.add('pay-option-active')
    setPayOption(PAY_OPTION_POINTS);
  };
};