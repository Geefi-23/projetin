const Store = () => {

  const initSlider = () => {
    new Glider(document.querySelector('#slider--body'), {
      slidesToShow: 5,
      slidesToScroll: 5,
      arrows: {
        prev: '#store-slider--prev',
        next: '#store-slider--next'
      }

    })
  };
  
  return {
    initSlider
  }

};

export default Store();