import HeaderHandler from '../classes/HeaderHandler.js';
import LanguageChooserHandler from '../classes/LanguageChooserHandler.js';
import MenuHandler from '../classes/MenuHandler.js';

const menuHandler = new MenuHandler();
const languageChooserHandler = new LanguageChooserHandler();
const headerHandler = new HeaderHandler();

document.querySelector('.the-footer__go-up-button').addEventListener('click', () => {
  window.scrollTo({top: 0, behavior: 'smooth'});
});

// TEMPORARY *************************************
const links = document.querySelectorAll('a');
for(let val of links)
  val.setAttribute('href', 'javascript:void(0)');
// ***********************************************