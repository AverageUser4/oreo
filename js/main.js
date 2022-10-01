import MenuHandler from './classes/MenuHandler.js';
import LanguageChooserHandler from './classes/LanguageChooserHandler.js';

// TEMPORARY *************************************
const links = document.querySelectorAll('a');
for(let val of links)
  val.setAttribute('href', 'javascript:void(0)');
// ***********************************************

const menuHandler = new MenuHandler();
const languageChooserHandler = new LanguageChooserHandler();