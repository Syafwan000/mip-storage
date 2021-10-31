/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })
})()

const toggler = document.querySelector('.navbar-toggler');
const icon = document.querySelector('.bi-grid');

toggler.addEventListener('click', function () {
  if(icon.className === 'bi bi-grid') {
    icon.classList.remove('bi-grid');
    icon.classList.add('bi-grid-fill');
  } else {
    icon.classList.remove('bi-grid-fill');
    icon.classList.add('bi-grid');
  }
})