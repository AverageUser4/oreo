export default class CarouselHandler {

  carousel;
  pictureTags;
  visiblePicture;

  constructor() {
    this.carousel = document.querySelector('.carousel');
    this.pictureTags = this.carousel.querySelectorAll('.carousel__picture');
    this.visiblePicture = this.carousel.querySelector('.carousel__picture:not(.carousel__picture--invisible)');

    setInterval(() => this.changeVisiblePicutre(), 1000);
  }

  changeVisiblePicutre() {
    let next = this.visiblePicture.nextElementSibling;
    if(!next)
      next = this.pictureTags[0];

    // phase-1 = opacity: 0
    // phase-2 = display: none

    this.visiblePicture.classList.add('carousel__picture--invisible-phase-1');
    next.classList.remove('carousel__picture--invisible-phase-2');

    setTimeout(() => {
      next.classList.remove('carousel__picture--invisible-phase-1');
    });

    setTimeout(() => {
      this.visiblePicture.classList.add('carousel__picture--invisible-phase-2');
      this.visiblePicture = next;
    }, 300);
  }

  /*
    - seems like 'next' element doesn't need to be transitioned from opacity: 0,
    probably will make transition a bit smoother if removed,
    maybe will try it later
    - transition doesn't get applied when the page is scrolled down (even just a bit)
  */

}