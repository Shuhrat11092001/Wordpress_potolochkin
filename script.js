//     fetch('api.php')
// .then(response => response.json()) 
// .then(data => {
//     var region = data.region_name || 'Unknown'; 
//     console.log("Received city name:", region);
//     var parsedResponse = JSON.parse(response); 

   
//     var regionName = decodeURIComponent(JSON.stringify(parsedResponse.region_name).replace(/\\u([\d\w]{4})/gi, function (match, grp) {
//     return String.fromCharCode(parseInt(grp, 16));
// }));

// console.log(regionName); 
// })
// .catch(error => {
//     console.error('Error:', error);
// });





// cities selector



// let jsonData = <?php echo $json_data; ?>;

// function changeCity(index) {
//   let cities = jsonData;
//   document.querySelector('.header_info p').innerText = cities[index].phone;
//   document.querySelector('.map_footer-title h1').innerHTML = 'г. ' + cities[index].city + ', ' + cities[index].address +
//     '<div class="d-flex align-items-center">' +
//     cities[index].phone +
//     '<div class=" mx-4">' +
//     '<img class="map-icons" loading="lazy" src="./assets/Group 1520 (1).png" alt="">' +
//     '<img class="map-icons" loading="lazy" src="./assets/Group 1521 (1).png" alt="">' +
//     '</div></div>';
//   document.querySelector('.banner_title span:last-child').innerText = cities[index].city;
// }

// function fillSelect() {
//   let cities = jsonData;
//   let select = document.querySelector('.logo_text');
//   for(let i = 0; i < cities.length; i++) {
//     let option = document.createElement('option');
//     option.value = i;
//     option.text = cities[i].city;
//     select.appendChild(option);
//   }
// }



// select.addEventListener('change', function() {
//   changeCity(this.value);
// });

// changeCity(0);



let cities = [
  {city: 'Москва', phone: '8 111 111 11 11', address: 'ул. Лубянка, д. 7'},
  {city: 'Санкт-Петербург', phone: '8 222 222 22 22', address: 'ул. Невский проспект, д. 1'},
  {city: 'Новосибирск', phone: '8 333 333 33 33', address: 'ул. Красный проспект, д. 101'},
  {city: 'Екатеринбург', phone: '8 444 444 44 44', address: 'ул. Малышева, д. 51'},
  {city: 'Нижний Новгород', phone: '8 555 555 55 55', address: 'ул. Большая Покровская, д. 2'},
  {city: 'Казань', phone: '8 666 666 66 66', address: 'ул. Баумана, д. 58'},
  {city: 'Челябинск', phone: '8 777 777 77 77', address: 'ул. Кирова, д. 159'},
  {city: 'Омск', phone: '8 888 888 88 88', address: 'ул. Ленина, д. 12'},
  {city: 'Самара', phone: '8 999 999 99 99', address: 'ул. Куйбышева, д. 111'},
  {city: 'Ростов-на-Дону', phone: '8 101 010 10 10', address: 'ул. Большая Садовая, д. 33'}
];

function changeCity(index) {
  document.querySelector('.header_info p').innerText = cities[index].phone;
  document.querySelector('.map_footer-title h1').innerHTML = 'г. ' + cities[index].city + ', ' + cities[index].address +
    '<div class="d-flex align-items-center">' +
    cities[index].phone +
    '<div class=" mx-4">' +
    '<img class="map-icons" loading="lazy" src="./assets/Group 1520 (1).png" alt="">' +
    '<img class="map-icons" loading="lazy" src="./assets/Group 1521 (1).png" alt="">' +
    '</div></div>';
  document.querySelector('.banner_title span:last-child').innerText = cities[index].city;
}

let dropdown = document.querySelector('.dropdown-content');
let changeBtn = document.querySelector('.change-btn');
let cityList = document.querySelector('.city-list');
let dropbtn = document.querySelector('.dropbtn');
let confirmBtn = document.querySelector('.confirm-btn');

for(let i = 0; i < cities.length; i++) {
  let city = document.createElement('a');
  city.href = "#";
  city.innerText = cities[i].city;
  city.onclick = function() {
    changeCity(i);
    dropbtn.innerText = cities[i].city;
    document.querySelector('.selected-city').innerText = cities[i].city;
    cityList.style.display = 'none'; 
    dropdown.style.display = 'none';
  };
  cityList.appendChild(city);
}

changeBtn.onclick = function() {
  if (cityList.style.display === 'none') {
    cityList.style.display = 'block';
  } else {
    cityList.style.display = 'none';
  }
};

dropbtn.onclick = function() {
  if (dropdown.style.display === 'none') {
    dropdown.style.display = 'block';
  } else {
    dropdown.style.display = 'none';
  }
};

confirmBtn.onclick = function() {
  dropdown.style.display = 'none';
};

changeCity(0);






// calculator

// <?php


// $Num1= 25 ;
// $Num2= 25 ;


// ?>


// Задаем значения переменных
var num1 = 18;
var num2 = 1;

// Получаем ссылки на элементы DOM
var firstNumberInput = document.getElementById('first_number');
var secondNumberInput = document.getElementById('second_number');
var resultElement = document.getElementById('price_text');

// Обработчик события для поля ввода первого числа
firstNumberInput.addEventListener('input', function () {
    updateResult();
});

// Обработчик события для поля ввода второго числа
secondNumberInput.addEventListener('input', function () {
    updateResult();
});

// Функция для обновления результата калькуляции
function updateResult() {
    // Получаем значения из полей ввода
    var firstNumber = parseFloat(firstNumberInput.value) || 0;
    var secondNumber = parseFloat(secondNumberInput.value) || 0;
    // var Number1 = <?php echo $Num1 ?>;
    // var Number2 = <?php echo $Num2 ?>;
    // Выполняем калькуляцию
    var result = firstNumber + secondNumber + num1 + num2;

    // Обновляем результат калькуляции
    resultElement.textContent = 'Результат: ' + result;
}




// add favorite


document.addEventListener('DOMContentLoaded', function() {
    var addToFavoritesButtons = document.querySelectorAll('.add-to-favorites');
    addToFavoritesButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var card = this.closest('.card');
            // Изменяем изображение в кнопке 'like'
            var likeButtonImage = this.querySelector('img');
            likeButtonImage.src = "./assets/icons/red_heart.png"; // Замените на путь к вашему новому изображению
            addToFavorites(card);
        });
    });

    function addToFavorites(card) {
        var favoriteProductsContainer = document.querySelector('.card__images_items');
        // Создаем новый блок для добавления сверху карточки
        var newBlock = document.createElement('div');
        newBlock.innerHTML = '<div class="card__images_item1 d-flex align-items-center gap-3"><img src="./assets/icons/close_open.png" loading="lazy" alt=""><p>Потолок вот такой</p></div>';
        // Клонируем карточку и добавляем её в favoriteProductsContainer
        var newFavoriteProduct = card.cloneNode(true);
        // Добавляем новый блок и карточку в favoriteProductsContainer
        favoriteProductsContainer.appendChild(newBlock);
        favoriteProductsContainer.appendChild(newFavoriteProduct);
    }
});


// slider

document.addEventListener('DOMContentLoaded', () => {
  initializeSlider('slides', 'dots', 'prev', 'next'); 
  initializeSlider('slides2', 'dots2', 'prev2', 'next2'); 
  initializeSlider('slides3', 'dots3', 'prev3', 'next3'); 
  initializeSlider('slides4', 'dots4', 'prev4', 'next4'); 
  initializeSlider('slides5', 'dots5', 'prev5', 'next5'); 
});

function initializeSlider(slidesClassName, dotsClassName, prevClassName, nextClassName) {
  const slidesContainer = document.querySelector(`.${slidesClassName}`);
  const slides = slidesContainer.querySelectorAll('.slide');
  const dotsContainer = document.querySelector(`.${dotsClassName}`);
  const dots = dotsContainer.querySelectorAll('.dot');
  let startX = 0;
  let endX = 0;

  function updateDots(index) {
      dots.forEach(dot => {
          dot.classList.remove('active');
      });
      dots[index].classList.add('active');
  }

  function showSlide(index) {
      slides.forEach((slide, i) => {
          if (i === index) {
              slide.style.display = 'flex';
          } else {
              slide.style.display = 'none';
          }
      });
      updateDots(index);
  }

  function nextSlide() {
      let currentIndex = Array.from(slides).findIndex(slide => slide.style.display !== 'none');
      let nextIndex = currentIndex + 1;

      if (nextIndex >= slides.length) {
          nextIndex = 0;
      }
      showSlide(nextIndex);
  }

  function prevSlide() {
      let currentIndex = Array.from(slides).findIndex(slide => slide.style.display !== 'none');
      let prevIndex = currentIndex - 1;

      if (prevIndex < 0) {
          prevIndex = slides.length - 1;
      }
      showSlide(prevIndex);
  }

  document.querySelector(`.${prevClassName}`).addEventListener('click', prevSlide);
  document.querySelector(`.${nextClassName}`).addEventListener('click', nextSlide);
  if (window.innerWidth <= 1000) { 
    dotsContainer.addEventListener('click', nextSlide);
}
  dots.forEach((dot, index) => {
      dot.addEventListener('click', () => {
          showSlide(index);
      });
  });

  slidesContainer.addEventListener('dragstart', (e) => {
      startX = e.clientX;
  });

  slidesContainer.addEventListener('dragend', (e) => {
      endX = e.clientX;
      if (startX - endX > 100) {
          nextSlide();
      } else if (startX - endX < -100) {
          prevSlide();
      }
  });

  showSlide(0);
}



    

// modal window


let expandedCard
let initialProperties = []
let finalProperties = []
let cardClip


function getAnimatableElements() {
  if (!expandedCard) return
  return expandedCard.querySelectorAll('.js-animatable')
}

function getCardContent() {
  if (!expandedCard) return
  return expandedCard.querySelector('.card__content')
}

function setup() {
  document.addEventListener('click', (e) => {
    if (expandedCard) return

    if (e.target.matches('.js-card')) {
      expandedCard = e.target
    } else if (e.target.closest('.js-card')) {
      expandedCard = e.target.closest('.js-card')
    }

    if (!expandedCard) return

    const closeButton = expandedCard.querySelector('.js-close-button')
    closeButton.addEventListener('click', collapse)

    expand()
  })
}


function expand() {
  getCardContent().addEventListener('transitionend', onExpandTransitionEnd)

  disablePageScroll()
  collectInitialProperties()

  expandedCard.classList.add('card--expanded')

  collectFinalProperties()

  setInvertedTransformAndOpacity()
  clipCardContent()

  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      expandedCard.classList.add('card--animatable')
      startExpanding()
    })
  })
}


function collectInitialProperties() {
  for (const element of getAnimatableElements()) {
    initialProperties.push({
      rect: element.getBoundingClientRect(),
      opacity: parseFloat(window.getComputedStyle(element).opacity)
    })
  }

  const cardRect = expandedCard.getBoundingClientRect()
  cardClip = {
    top: cardRect.top,
    right: window.innerWidth - cardRect.right,
    bottom: window.innerHeight - cardRect.bottom,
    left: cardRect.left
  }
}

function collectFinalProperties() {
  const elements = getAnimatableElements()
  for (const element of elements) {
    finalProperties.push({
      rect: element.getBoundingClientRect(),
      opacity: parseFloat(window.getComputedStyle(element).opacity)
    })
  }
}

function setInvertedTransformAndOpacity() {
  const elements = getAnimatableElements()
  for (const [i, element] of elements.entries()) {
    element.style.transform = `translate(${
      initialProperties[i].rect.left - finalProperties[i].rect.left
    }px, ${
      initialProperties[i].rect.top - finalProperties[i].rect.top
    }px) scale(${
      initialProperties[i].rect.width / finalProperties[i].rect.width
    })`

    element.style.opacity = `${initialProperties[i].opacity}`
  }
}

function clipCardContent() {
  getCardContent().style.clipPath = `
    inset(${cardClip.top}px ${cardClip.right}px ${cardClip.bottom}px ${cardClip.left}px round 5px)
  `
}

function startExpanding() {
  for (const [i, element] of getAnimatableElements().entries()) {
    element.style.transform = 'translate(0, 0) scale(1)'
    element.style.opacity = `${finalProperties[i].opacity}`
  }

  getCardContent().style.clipPath = 'inset(0)'
}

function onExpandTransitionEnd(e) {
  const cardContent = getCardContent()
  if (e.target !== cardContent) return

  expandedCard.classList.remove('card--animatable')
  cardContent.removeEventListener('transitionend', onExpandTransitionEnd)
  removeStyles()
}

function removeStyles() {
  for (const element of getAnimatableElements()) {
    element.style = null
  }

  getCardContent().style = null
}

function collapse() {
  getCardContent().addEventListener('transitionend', onCollapseTransitionEnd)

  setCollapsingInitialStyles()

  requestAnimationFrame(() => {
    requestAnimationFrame(() => {
      expandedCard.classList.add('card--animatable')
      startCollapsing()
    })
  })
  const cardHeader = expandedCard.querySelector('.card__header')
}



function setCollapsingInitialStyles() {
  for (const element of getAnimatableElements()) {
    element.style.transform = `translate(0, 0) scale(1)`
  }

  getCardContent().style.clipPath = 'inset(0)'
}

function startCollapsing() {
  setInvertedTransformAndOpacity()
  clipCardContent()
}

function onCollapseTransitionEnd(e) {
  const cardContent = getCardContent()
  if (e.target !== cardContent) return

  expandedCard.classList.remove('card--animatable')
  expandedCard.classList.remove('card--expanded')

  cardContent.removeEventListener('transitionend', onCollapseTransitionEnd)

  removeStyles()
  enablePageScroll()

  cleanup()
}

function disablePageScroll() {
  document.body.style.overflow = 'hidden'
}

function enablePageScroll() {
  document.body.style.overflow = ''
}


function cleanup() {
  expandedCard = null
  cardClip = null
  initialProperties = []
  finalProperties = []
}

setup()

// scroll

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('scrollUp').addEventListener('click', function() {
        document.getElementById('scrollableDiv').scrollTop -= 100;
    });

    document.getElementById('scrollDown').addEventListener('click', function() {
        document.getElementById('scrollableDiv').scrollTop += 100;
    });
});


// form

let form = document.querySelector('.form__cart__buttons');
let lastWidget = document.querySelector('.widget2');

form.addEventListener('submit', function(event) {
    event.preventDefault(); 
    if (form.checkValidity()) {
        lastWidget.style.display = 'block';
    }
});

// modal article

function showModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = (modal.style.display == "none" ? "flex" : "none");
}