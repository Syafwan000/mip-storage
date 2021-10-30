// Register
const r_name = document.querySelector('.r-name');
const r_nameIcon = document.querySelector('#basic-addon-r1');
const r_username = document.querySelector('.r-username');
const r_usernameIcon = document.querySelector('#basic-addon-r2');
const r_email = document.querySelector('.r-email');
const r_emailIcon = document.querySelector('#basic-addon-r3');
const r_password = document.querySelector('.r-password');
const r_passwordIcon = document.querySelector('#basic-addon-r4');
const r_con_password = document.querySelector('.r-con-password');
const r_con_passwordIcon = document.querySelector('#basic-addon-r5');

if(!r_name) {
    console.log(null);
}

if(r_name) {
    r_name.addEventListener('input', function() {
        r_nameIcon.classList.add('r-name-active');
    })

    r_username.addEventListener('input', function() {
        r_usernameIcon.classList.add('r-username-active');
    })

    r_email.addEventListener('input', function() {
        r_emailIcon.classList.add('r-email-active');
    })

    r_password.addEventListener('input', function() {
        r_passwordIcon.classList.add('r-password-active');
    })

    r_con_password.addEventListener('input', function() {
        r_con_passwordIcon.classList.add('r-con-password-active');
    })
}

if(r_name.value) {
    r_nameIcon.classList.add('r-name-active');
}

if(r_username.value) {
    r_usernameIcon.classList.add('r-username-active');
}

if(r_email.value) {
    r_emailIcon.classList.add('r-email-active');
}