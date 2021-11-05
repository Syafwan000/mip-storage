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

// Form

const title = document.querySelector('.nama-barang');
const titleIcon = document.querySelector('#basic-addon-i1');
const price = document.querySelector('.harga-barang');
const priceIcon = document.querySelector('#basic-addon-i2');


if(!title) {
  console.log(null);
}

if(title) {
  title.addEventListener('input', function() {
    titleIcon.classList.add('title-active');
  })

  price.addEventListener('input', function() {
    priceIcon.classList.add('price-active');
  })

  if(title.value) {
    titleIcon.classList.add('title-active');
  }

  if(price.value) {
    priceIcon.classList.add('price-active');
  }
}