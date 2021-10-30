const toggler = document.querySelector('.navbar-toggler');
const icon = document.querySelector('.bi-grid');

toggler.addEventListener('click', function() {
    if(icon.className === 'bi bi-grid') {
        icon.classList.remove('bi-grid');
        icon.classList.add('bi-grid-fill');
    } else {
        icon.classList.remove('bi-grid-fill');
        icon.classList.add('bi-grid');
    }
})

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

gsap.from('.navbar-brand', { duration: 1.5, x: '-100', opacity: 0 });
gsap.from('.navbar-nav', { duration: 1.5, x: '100', opacity: 0 });
gsap.from('.navbar-toggler', { duration: 1.5, x: '100', opacity: 0 });
gsap.from('.col-12', { duration: 1.5, y: '-100', opacity: 0 });
gsap.from('.image', { duration: 2, y: '500', opacity: 0 });