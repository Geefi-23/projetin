const Store = () => {

  const initSlider = () => {
    new Glider(document.querySelector('#slider--body'), {
      slidesToShow: 5,
      slidesToScroll: 5,
      draggable: true,
      arrows: {
        prev: '#store-slider--prev',
        next: '#store-slider--next'
      }

    })
    /*let valueToSlide = 1157;
    let slider = {
      btnLeft: $('#store-slider--left_btn'),
      btnRight: $('#store-slider--right_btn'),
      body: $('#slider--body')
    };
    let slideHandler = slider.body.find('.store-item:first-child');

    slider.btnLeft.on('click', () => {
      let x = parseInt(slideHandler.css('margin-left'));
      x += valueToSlide;
      if (x > 0) {
        x = 0;
      }
      slideHandler.css('margin-left', x);
      console.log('clioquei')
    });
    slider.btnRight.on('click', () => {
      let maxX = slider.body.children().length * 233;

      let x = parseInt(slideHandler.css('margin-left'));
      console.log('x', maxX)
      x += -valueToSlide;
      console.log('x', x)
      if(x < -maxX){
        x = -maxX;
      }

      slider.body.find('.store-item:first-child').css('margin-left', x);
    });*/
  };
  
  return {
    initSlider
  }

};

export default Store();