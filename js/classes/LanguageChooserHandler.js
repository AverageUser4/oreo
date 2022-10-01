export default class LanguageChooserHandler {

  toggler;
  languageChooser;

  constructor() {
    this.toggler = document.querySelector('.language-chooser__button');
    this.languageChooser = document.querySelector('.language-chooser');

    this.toggler.addEventListener('click', (event) => this.toggleClass(event));
    window.addEventListener('click', () => this.removeClass());
  }

  toggleClass(event) {
    event.stopPropagation();
    this.languageChooser.classList.toggle('language-chooser--open');
  }

  removeClass() {
    this.languageChooser.classList.remove('language-chooser--open');
  }

}