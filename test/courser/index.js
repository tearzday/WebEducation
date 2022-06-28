const i18Obj = {
  'en': {
    'skills': 'Skills',
    'portfolio': 'Portfolio',
    'video': 'Video',
    'price': 'Price',
    'contacts': 'Contacts',
    'hero-title': 'Alexa Rise',
    'hero-text': 'Save sincere emotions, romantic feelings and happy moments of life together with professional photographer Alexa Rise',
    'hire': 'Hire me',
    'skill-title-1': 'Digital photography',
    'skill-text-1': 'High-quality photos in the studio and on the nature',
    'skill-title-2': 'Video shooting',
    'skill-text-2': 'Capture your moments so that they always stay with you',
    'skill-title-3': 'Rotouch',
    'skill-text-3': 'I strive to make photography surpass reality',
    'skill-title-4': 'Audio',
    'skill-text-4': 'Professional sounds recording for video, advertising, portfolio',
    'winter': 'Winter',
    'spring': 'Spring',
    'summer': 'Summer',
    'autumn': 'Autumn',
    'price-description-1-span-1': 'One location',
    'price-description-1-span-2': '120 photos in color',
    'price-description-1-span-3': '12 photos in retouch',
    'price-description-1-span-4': 'Readiness 2-3 weeks',
    'price-description-1-span-5': 'Make up, visage',
    'price-description-2-span-1': 'One or two locations',
    'price-description-2-span-2': '200 photos in color',
    'price-description-2-span-3': '20 photos in retouch',
    'price-description-2-span-4': 'Readiness 1-2 weeks',
    'price-description-2-span-5': 'Make up, visage',
    'price-description-3-span-1': 'Three locations or more',
    'price-description-3-span-2': '300 photos in color',
    'price-description-3-span-3': '50 photos in retouch',
    'price-description-3-span-4': 'Readiness 1 week',
    'price-description-3-span-5': 'Make up, visage, hairstyle',
    'order': 'Order shooting',
    'contact-me': 'Contact me',
    'send-message': 'Send message'
  },
  'ru': {
    'skills': 'Навыки',
    'portfolio': 'Портфолио',
    'video': 'Видео',
    'price': 'Цены',
    'contacts': 'Контакты',
    'hero-title': 'Алекса Райс',
    'hero-text': 'Сохраните искренние эмоции, романтические переживания и счастливые моменты жизни вместе с профессиональным фотографом',
    'hire': 'Пригласить',
    'skill-title-1': 'Фотография',
    'skill-text-1': 'Высококачественные фото в студии и на природе',
    'skill-title-2': 'Видеосъемка',
    'skill-text-2': 'Запечатлите лучшие моменты, чтобы они всегда оставались с вами',
    'skill-title-3': 'Ретушь',
    'skill-text-3': 'Я стремлюсь к тому, чтобы фотография превосходила реальность',
    'skill-title-4': 'Звук',
    'skill-text-4': 'Профессиональная запись звука для видео, рекламы, портфолио',
    'winter': 'Зима',
    'spring': 'Весна',
    'summer': 'Лето',
    'autumn': 'Осень',
    'price-description-1-span-1': 'Одна локация',
    'price-description-1-span-2': '120 цветных фото',
    'price-description-1-span-3': '12 отретушированных фото',
    'price-description-1-span-4': 'Готовность через 2-3 недели',
    'price-description-1-span-5': 'Макияж, визаж',
    'price-description-2-span-1': 'Одна-две локации',
    'price-description-2-span-2': '200 цветных фото',
    'price-description-2-span-3': '20 отретушированных фото',
    'price-description-2-span-4': 'Готовность через 1-2 недели',
    'price-description-2-span-5': 'Макияж, визаж',
    'price-description-3-span-1': 'Три локации и больше',
    'price-description-3-span-2': '300 цветных фото',
    'price-description-3-span-3': '50 отретушированных фото',
    'price-description-3-span-4': 'Готовность через 1 неделю',
    'price-description-3-span-5': 'Макияж, визаж, прическа',
    'order': 'Заказать съемку',
    'contact-me': 'Свяжитесь со мной',
    'send-message': 'Отправить'
  }
}



let lang;
 
const language = document.querySelectorAll('.lan');
const buttonLanguage = document.querySelector('.language');

buttonLanguage.addEventListener('click', (event) => {
   const languageButton = event.target;
   lang = languageButton.dataset.language;
   if (!languageButton.classList.contains('en')) {
      language.forEach((button, i) => language[i].classList.remove('en'));
      languageButton.classList.add('en');
      getTranslate(languageButton.dataset.language)
   }
});

function getTranslate(even) {
   const i18 = document.querySelectorAll("*[data-i18]");
   i18.forEach((currentElement) => {
      currentElement.textContent = i18Obj[even][currentElement.dataset.i18];
      if (currentElement.placeholder) {
         currentElement.placeholder = i18Obj[even][currentElement.dataset.i18];
         currentElement.textContent = '';
      }
   });
}

function setLocalStorage() {
   localStorage.setItem('lang', lang);
}
window.addEventListener('beforeunload', setLocalStorage)

function getLocalStorage() {
   if (localStorage.getItem('lang')) {
      const lang = localStorage.getItem('lang');
      getTranslate(lang);
   }
}
window.addEventListener('load', getLocalStorage)





const hamburger = document.querySelector('.header__burger');
const menu = document.querySelector('.header__nav')

function toggleMenu() {
  hamburger.classList.toggle('open');
  menu.classList.toggle('open');
}




hamburger.addEventListener('click', toggleMenu);
menu.addEventListener('click', toggleMenu);



document.querySelectorAll('.header__li').forEach(n => n.addEventListener('click', () => {
  hamburger.classList.remove('open');
  navMenu.classList.remove('open');
}))


//Portfolio
const portfolioWinter = document.getElementById('winter');
const portfolioSpring = document.getElementById('spring');
const portfolioSummer = document.getElementById('summer');
const portfolioAutumn = document.getElementById('autumn');
const portfolioBtn= document.querySelectorAll('.portfolio__button');

const portfolioImages = document.querySelectorAll('.portfolio-image');

portfolioWinter.addEventListener('click', () => {
  portfolioImages.forEach((img, index) => img.src = `./assets/img/winter/${index + 1}.jpg`);
  portfolioWinter.classList.toggle('active');
  portfolioSpring.classList.remove('active');
  portfolioSummer.classList.remove('active');
  portfolioAutumn.classList.remove('active');
});

portfolioSpring.addEventListener('click', () => {
  portfolioImages.forEach((img, index) => img.src = `./assets/img/spring/${index + 1}.jpg`);
  portfolioWinter.classList.remove('active');
  portfolioSpring.classList.toggle('active');
  portfolioSummer.classList.remove('active');
  portfolioAutumn.classList.remove('active');
});

portfolioSummer.addEventListener('click', () => {
  portfolioImages.forEach((img, index) => img.src = `./assets/img/summer/${index + 1}.jpg`);
  portfolioWinter.classList.remove('active');
  portfolioSpring.classList.remove('active');
  portfolioSummer.classList.toggle('active');
  portfolioAutumn.classList.remove('active');
});

portfolioAutumn.addEventListener('click', () => {
  portfolioImages.forEach((img, index) => img.src = `./assets/img/autumn/${index + 1}.jpg`);
  portfolioWinter.classList.remove('active');
  portfolioSpring.classList.remove('active');
  portfolioSummer.classList.remove('active');
  portfolioAutumn.classList.toggle('active');
});



const themeButton = document.querySelector('.themeButton');
const section = document.querySelectorAll('.section');
const sectionTitle = document.querySelectorAll('.section-title');
const sectionTitleSpan = document.querySelectorAll('.section-title-span');


themeButton.addEventListener('click', () => {

   function changeTopic() {
      portfolioBtn.forEach((el) => el.classList.toggle('light-theme'));
      sectionTitle.forEach((el) => el.classList.toggle('light-theme-title'));
      section.forEach((el) => el.classList.toggle('light-theme'));
      sectionTitleSpan.forEach((el) => el.classList.toggle('light-theme-span'));
   };
   changeTopic();
});
