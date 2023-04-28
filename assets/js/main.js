jQuery('img.svg').each(function() {
  var $img = jQuery(this);
  var imgID = $img.attr('id');
  var imgClass = $img.attr('class');
  var imgURL = $img.attr('src');

  jQuery.get(imgURL, function(data) {
    // Get the SVG tag, ignore the rest
    var $svg = jQuery(data).find('svg');

    if($img.hasClass('heart-svg')) {
      $svg.attr('width', 24);
      $svg.attr('height', 30);
    }
    // Add replaced image's ID to the new SVG
    if(typeof imgID !== 'undefined') {
        $svg = $svg.attr('id', imgID);
    }
    // Add replaced image's classes to the new SVG
    if(typeof imgClass !== 'undefined') {
        $svg = $svg.attr('class', imgClass+' replaced-svg');
    }

    // Remove any invalid XML tags as per http://validator.w3.org
    $svg = $svg.removeAttr('xmlns:a');

    // Replace image with new SVG
    $img.replaceWith($svg);

  }, 'xml');
});

//==== Установка Ид для карточек (wish (heart)) ====///

const checkboxes = document.querySelectorAll('.card-checkbox');
// перебираем все чекбоксы и устанавливаем уникальный id для каждого
checkboxes.forEach((checkbox, index) => {
  const id = `card_checkbox_${index + 1}`; // генерируем уникальный id
  checkbox.id = id; // устанавливаем id для чекбокса
  const label = checkbox.nextElementSibling; // находим связанный с чекбоксом элемент label
  label.setAttribute('for', id); // устанавливаем атрибут "for" для label, чтобы связать его с чекбоксом
});

//==== Слайдер для товара + плавный переход ====///

const imageFluid = document.querySelector(".img-fluid");
const previewsImage = document.querySelectorAll(".previews img");
const timeMs= 360;

previewsImage.forEach((img) => {
  img.addEventListener("click", () => {
    if (!img.classList.contains("active")) {
      // добавляем класс active для нажатого изображения и убираем его у других изображений в слайдере
      previewsImage.forEach((sliderImg) => sliderImg.classList.remove("active"));
      img.classList.add("active");

      // заменяем src основного изображения с плавным переходом opacity
      imageFluid.style.opacity = 0;
      setTimeout(() => {
        imageFluid.src = img.src;
        imageFluid.style.opacity = 1;
      }, timeMs);
    }
  });
});

//=====Payment=====//
const radios = document.querySelectorAll('input[name="collapseRadios"]');
const collapseItems = document.querySelectorAll('.collapse');

radios.forEach(function(radio) {
  radio.addEventListener('change', function() {
    if (this.checked) {
      radios.forEach(function(otherRadio) {
        if (otherRadio !== radio) {
          otherRadio.checked = false;
          otherRadio.removeAttribute('disabled');
        } else {
          otherRadio.setAttribute('disabled', 'disabled');
        }
      });

      collapseItems.forEach(function(collapseItem) {
        if (collapseItem.dataset.collapseId === radio.id) {
          collapseItem.classList.add('show');
        } else {
          collapseItem.classList.remove('show');
        }
      });
    }
  });
});

const cardDate = document.getElementById('input_cardDate');

cardDate.addEventListener('input', function() {
  const inputLength = cardDate.value.length;
  if (inputLength === 2 && !cardDate.value.includes('/')) {
    cardDate.value = cardDate.value + '/';
  }
});

const inputNumber = document.getElementById('input_number');

// Добавляем обработчик событий для поля ввода
inputNumber.addEventListener('input', function() {
  const maxLength = 19; // максимальное количество символов в поле номера
  const value = inputNumber.value.replace(/\D/g, ''); // удаляем все нецифровые символы из введенного значения
  const spacedValue = value.replace(/(.{4})/g, '$1 '); // добавляем пробел после каждой группы из 4 цифр
  inputNumber.value = spacedValue.trim().slice(0, maxLength); // убираем лишние пробелы и обрезаем до максимальной длины
});

//=====Your Data=====//

const inputTel = document.getElementById('input_tel');

inputTel.addEventListener('focus', function() {
  const prefix = '+38';
  if (!inputTel.value.startsWith(prefix)) {
    inputTel.value = prefix + inputTel.value;
  }
});

inputTel.addEventListener('input', function() {
  const maxLength = 13; // максимальное количество символов в поле телефона
  if (inputTel.value.length > maxLength) {
    inputTel.value = inputTel.value.slice(0, maxLength);
  }
});

//=====Product-list=====//

