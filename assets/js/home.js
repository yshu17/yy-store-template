const header = document.querySelector('.header__navmenu');

  function changeHeaderBackground() {
    const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    if (scrollPosition >= header.offsetHeight) {
      header.classList.add('scrolled'); // добавляем класс, который содержит цвет фона при скролле
    } else {
      header.classList.remove('scrolled'); // удаляем класс, чтобы вернуть прозрачный фон
    }
  }

  window.addEventListener('scroll', changeHeaderBackground);

  VANTA.FOG({
    el: "#hero",
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.00,
    minWidth: 200.00,
    highlightColor: 0x0,
    midtoneColor: 0x0,
    lowlightColor: 0xffffff,
    baseColor: 0x0,
  });