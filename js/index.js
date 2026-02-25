import Snake from './snake.js'

window.addEventListener('load', () => {

  if (document.getElementById('index-page')) {
    indexPageLogic()
  }

  if (document.getElementById('object-page')) {
    objectPageLogic()
  }

  if (document.getElementById('news-item-page')) {
    newsItemPageLogic()
  }

  if (document.getElementById('contacts-page')) {
    contactsPageLogic()
  }

  const dots = document.querySelectorAll('.snake-dots');
  document.querySelector('#menu-toggle') && document.querySelector('#menu-toggle').addEventListener('change', (e) => {
    dots.forEach(el => {
      el.style.display = e.currentTarget.checked ? 'none' : 'flex';
    })
  })

  if (document.querySelector('[data-fancybox]') && !document.getElementById('news-item-page')) {
    Fancybox.bind("[data-fancybox]", {
      // Your custom options
    });
  }

  if(document.getElementById('loader')){
    document.getElementById('loader').style.display = 'none';
  }
  

})

const indexPageLogic = () => {
  const snake = new Snake('.index-page-slider', {
    mobileFirst: false,
    swipe: true,
    speed: 1000,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: true,
    fade: true
  })

  if(document.querySelector('#index-page .snake-dots')){
    document.querySelector('#index-page .snake-dots').classList.add('container');
  }  

  const slides = document.querySelectorAll('.index-page-slider .slider__item');
  // const arrow = document.querySelectorAll('#index-page .snake-arrow.snake-next')[0];
  // arrow && arrow.setAttribute('data-text-after', 'НАШИ ОБЬЕКТЫ');
  
  const labelBySlideId = {
    'our-objects-slide': 'НОВОСТИ',
    'news-slide': 'О КОМПАНИИ',
    'about-company-slide': 'НАШИ ОБЬЕКТЫ'
  };

  const updateArrowLabel = () => {
    const arrow = document.querySelector('#index-page .snake-arrow.snake-next');
    if (!arrow) return;
    const activeSlide = document.querySelector('#index-page .index-page-slider .slider__item.snake-active');
    const content = labelBySlideId[activeSlide?.id] || 'НАШИ ОБЬЕКТЫ';
    arrow.setAttribute('data-text-after', content);
  };

  updateArrowLabel();

  const observer = new MutationObserver(function (mutationsList) {
    for (const mutation of mutationsList) {

      if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
        if (mutation.target.classList.contains('snake-active')) {
           updateArrowLabel();
        }
      }
    }
  });

  const config = {attributes: true, attributeFilter: ['class']};

  for (const slide of slides) {
    observer.observe(slide, config);
  }

  function parallax(e) {
    const containers = document.querySelectorAll('.index-page-slider-image');
    containers.forEach((container, index) => {
      // Разные скорости для разных блоков для эффекта глубины
      let speed = 0.01;
      let leftOffset = 50;
      if (container.classList.contains('index-page-slider__small-image')) {
        speed = 0.08;
        leftOffset = 20;
      } else if (container.classList.contains('index-page-slider__medium-image')) {
        speed = 0.04;
        leftOffset = 30;
      } else if (container.classList.contains('index-page-slider__main-image')) {
        speed = 0.02;
      }

      // Получаем размеры контейнера
      const rect = container.getBoundingClientRect();

      // Вычисляем центр контейнера
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;

      // Расстояние от мыши до центра контейнера
      const distanceX = e.clientX - centerX;
      const distanceY = e.clientY - centerY;

      // Нормализуем расстояние (от -1 до 1)
      const normalizedX = distanceX / (window.innerWidth / 2);
      const normalizedY = distanceY / (window.innerHeight / 2);

     const moveXPercent = normalizedX * speed * 100; // Умножаем на 100 для процентов
      const moveYPercent = normalizedY * speed * 100;

      if (container.classList.contains('index-page-slider__main-image')) {
        // Для main-image двигаем масштабированный слой, чтобы сохранить cover без "пустых" полей
        const moveX = (rect.width * moveXPercent) / 100;
        const moveY = (rect.height * moveYPercent) / 100;
        container.style.setProperty('--parallax-x', `${moveX}px`);
        container.style.setProperty('--parallax-y', `${moveY}px`);
      } else {
        // Применяем смещение как процент от фона
        container.style.backgroundPosition = `calc(${leftOffset}% + ${moveXPercent}%) calc(50% + ${moveYPercent}%)`;
      }

    });
  }

  document.addEventListener('mousemove', parallax);

}

const objectPageLogic = () => {
  new Snake('.slider', {
    mobileFirst: false,
    swipe: true,
    speed: 300,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    arrows: false
  })
}
const contactsPageLogic = () => {
  document.querySelector('.map-btn').addEventListener('click', (e) => {
    console.log('work')
    e.preventDefault();
    document.querySelector('.contacts-map .map.disabled').classList.remove('disabled')
    document.querySelector('.contacts-map .map-btn').style.display = 'none';
  })
}
const newsItemPageLogic = () => {
  const isMobile = window.innerWidth <= 768;
  const sliderSelector = isMobile ? '.slider.hide-on-desktop' : '.slider.hide-on-mobile';
  const sliderEl = document.querySelector(sliderSelector);

  if (!sliderEl) return;

  const snake = new Snake(sliderEl, {
    mobileFirst: false,
    swipe: true,
    speed: 300,
    dots: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: true,
    arrows: false,
    responsive: [{
      breakpoint: 768, settings: {
        slidesToShow: 1, slidesToScroll: 1,
      }
    }]
  });

  const galleryId = isMobile ? 'gallery-mobile' : 'gallery-desktop';
  Fancybox.bind(`[data-fancybox='${galleryId}']`, {
    on: {
      destroy: () => {
        setTimeout(() => {
          snake.applySettings(false);
        }, 10);
      },
    },
  });

  document.querySelector('.arrow.arrow-right').addEventListener('click', e => {
    e.preventDefault();
    snake.goTo(snake.getNext());
  });

  document.querySelector('.arrow.arrow-left').addEventListener('click', e => {
    e.preventDefault();
    snake.goTo(snake.getPrev());
  });
}

const initMenu = () => {
  document.querySelector('.menu-btn').addEventListener('', (e) => {
    e.preventDefault();


  })
}
