let btnSignup = document.querySelector('input[type=submit]');
btnSignup.addEventListener('click', changeBtnColor);

function changeBtnColor() {
    btnSignup.style.background = 'lightgray';
    btnSignup.style.color = 'gray';
}