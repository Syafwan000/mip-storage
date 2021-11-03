/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })
})()

// Toggler Navbar
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

// Date and Time
const time = document.querySelector('.time');
const date = document.querySelector('.date');
const r_time = document.querySelector('.r_time');
const r_date = document.querySelector('.r_date');

if(time) {
    setInterval(() => {
      moment.locale('id');
      time.textContent = '🕖' + ' ' + moment().format('LTS');
      date.textContent = '📅' + ' ' + moment().format('LL');
      r_time.textContent = '🕖' + ' ' + moment().format('LTS');
      r_date.textContent = '📅' + ' ' + moment().format('LL');
  }, 1000);
}
