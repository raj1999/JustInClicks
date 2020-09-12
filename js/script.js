const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#inputPassword4');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});

function blink_text() {
    $('.m-p').fadeOut(500);
    $('.m-p').fadeIn(500);
}
setInterval(blink_text, 1000);
