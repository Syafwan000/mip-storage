// Login
const username = document.querySelector('.username');
const usernameIcon = document.querySelector('#basic-addon1');
const password = document.querySelector('.password');
const passwordIcon = document.querySelector('#basic-addon2');

if(!username) {
    console.log(null);
}

if(username) {
    username.addEventListener('input', function() {
        usernameIcon.classList.add('username-active');
    })
    
    password.addEventListener('input', function() {
        passwordIcon.classList.add('password-active');
    })

    if(username.value) {
        usernameIcon.classList.add('username-active');
    }
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})