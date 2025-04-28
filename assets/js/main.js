/* Меню */

document.querySelector('.menu__head').addEventListener('click', function(e) {
    e.preventDefault();
    document.querySelector('.mobile-menu').classList.toggle('active');
  });