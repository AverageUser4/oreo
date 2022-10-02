export default class CarouselHandler {

  carousel;
  pictureTags;
  visiblePicture;

  constructor() {
    this.carousel = document.querySelector('.carousel');
    this.pictureTags = this.carousel.querySelectorAll('.carousel__picture');
    this.visiblePicture = this.pictureTags[0];

    setInterval(() => this.changeVisiblePicutre(), 5000);
  }

  changeVisiblePicutre() {
    let next = this.visiblePicture.nextElementSibling;
    if(!next)
      next = this.pictureTags[0];

    // invisible - display: none

    this.visiblePicture.style.zIndex = 1;
    this.visiblePicture.style.opacity = 0;
    next.classList.remove('carousel__picture--invisible');

    setTimeout(() => {
      this.visiblePicture.style.zIndex = 0;
      this.visiblePicture.style.opacity = 1;
      this.visiblePicture.classList.add('carousel__picture--invisible');
      this.visiblePicture = next;
    }, 300);
  }

}