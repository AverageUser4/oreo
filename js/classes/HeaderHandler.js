export default class HeaderHandler {

  header;

  constructor() {
    this.header = document.querySelector('.the-header');

    window.addEventListener('scroll', () => this.onScroll());
  }

  onScroll() {
    if(scrollY > 0)
      this.header.classList.add('the-header--shrunk');
    else
      this.header.classList.remove('the-header--shrunk');
  }

}