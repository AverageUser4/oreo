export default class MenuHandler {

  toggler;
  dropdown;

  constructor() {
    this.toggler = document.querySelector('.the-header__menu-button');
    this.dropdown = document.querySelector('.the-header__nav');

    this.toggler.addEventListener('click', () => this.toggleDropdown());
    window.addEventListener('resize', () => this.closeDropdown());
  }

  toggleDropdown() {
    if(getComputedStyle(this.dropdown).display === 'none')
      this.openDropdown();
    else
      this.closeDropdown();
  }

  openDropdown() {
    this.dropdown.classList.add('the-header__nav--visible-phase-1');
    setTimeout(() => {
      this.dropdown.classList.add('the-header__nav--visible-phase-2');
    });

    this.toggler.children[0].style.display = 'none';
    this.toggler.children[1].style.display = 'block';
  }

  closeDropdown() {
    this.dropdown.classList.remove('the-header__nav--visible-phase-2');
    setTimeout(() => {
      this.dropdown.classList.remove('the-header__nav--visible-phase-1');
    }, 300);

    this.toggler.children[0].style.display = 'block';
    this.toggler.children[1].style.display = 'none';
  }

}