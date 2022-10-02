import MenuHandler from './classes/MenuHandler.js';
import LanguageChooserHandler from './classes/LanguageChooserHandler.js';
import CarouselHandler from './classes/CarouselHandler.js';
import HeaderHandler from './classes/HeaderHandler.js';

// TEMPORARY *************************************
const links = document.querySelectorAll('a');
for(let val of links)
  val.setAttribute('href', 'javascript:void(0)');
// ***********************************************

const menuHandler = new MenuHandler();
const languageChooserHandler = new LanguageChooserHandler();
const carouselHandler = new CarouselHandler();
const headerHandler = new HeaderHandler();