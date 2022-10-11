import HeaderHandler from '../classes/HeaderHandler.js';
import MenuHandler from '../classes/MenuHandler.js';
import LanguageChooserHandler from '../classes/LanguageChooserHandler.js';

const links = document.querySelectorAll('a');
for(let link of links) {
  if(!link.hasAttribute('href'))
    link.setAttribute('href', 'javascript:void(0)');
}

document.querySelector('.the-footer__go-up-button').addEventListener('click', () => {
  window.scrollTo({top: 0, behavior: 'smooth'});
});

const headerHandler = new HeaderHandler;
const menuHandler = new MenuHandler;
const languageChooserHandler = new LanguageChooserHandler;

export { headerHandler, menuHandler, languageChooserHandler };