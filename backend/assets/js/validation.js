var usernameElement = document.querySelector('#username');
usernameElement.onblur = function(e) {
    if (e.target.value) {
        usernameElement.parentElement.classList.remove('invalid')
        usernameElement.parentElement.querySelector('.form-message').innerText = ''
    } else {
        usernameElement.parentElement.classList.add('invalid')
        usernameElement.parentElement.querySelector('.form-message').innerText = 'Enter your username'
    }
}

var emailElement = document.querySelector('#email');
emailElement.oninput = function() {
    emailElement.parentElement.classList.remove('invalid')
    emailElement.parentElement.querySelector('.form-message').innerText = ''
}
emailElement.onblur = function(e){
    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(e.target.value.match(regex)) {
        emailElement.parentElement.classList.remove('invalid')
        emailElement.parentElement.querySelector('.form-message').innerText = ''
    } else {
        emailElement.parentElement.classList.add('invalid')
        emailElement.parentElement.querySelector('.form-message').innerText = 'Email format invalid'
    }
}

var fullnameElement = document.querySelector('#fullname');
fullnameElement.onblur = function(e) {
    if (e.target.value) {
        fullnameElement.parentElement.classList.remove('invalid')
        fullnameElement.parentElement.querySelector('.form-message').innerText = ''
    } else {
        fullnameElement.parentElement.classList.add('invalid')
        fullnameElement.parentElement.querySelector('.form-message').innerText = 'Enter your fullname'
    }
}

var passElement = document.querySelector('#password');
passElement.oninput = function() {
    passElement.parentElement.classList.remove('invalid')
    passElement.parentElement.querySelector('.form-message').innerText = ''
}
passElement.onchange = function(e) {
    if (e.target.value.length < 6) {
        passElement.parentElement.classList.add('invalid')
        passElement.parentElement.querySelector('.form-message').innerText = 'Password must be at least 6 character'
    } else {
        passElement.parentElement.classList.remove('invalid')
        passElement.parentElement.querySelector('.form-message').innerText = ''
    }
}

var passConfirmElement = document.querySelector('#password_confirm');
passConfirmElement.onblur = function(e) {
    check = passElement.value;
    if(e.target.value === check) {
        passConfirmElement.parentElement.classList.remove('invalid')
        passConfirmElement.parentElement.querySelector('.form-message').innerText = ''
    } else {
        passConfirmElement.parentElement.classList.add('invalid')
        passConfirmElement.parentElement.querySelector('.form-message').innerText = 'Please make sure your passwords match'
    }
}

var formElement = document.querySelector('.sign__form')
formElement.onsubmit = function(e) {
    e.preventDefault();
}

formElement.querySelector('.sign__btn').onclick = function(e) {
    var inputElements = formElement.querySelectorAll('.sign__input')
    var formInfo = {}
    for(i= 0; i<inputElements.length; ++i) {
        if(!inputElements[i].value) {
            inputElements[i].parentElement.classList.add('invalid')
            inputElements[i].parentElement.querySelector('.form-message').innerText = 'This is a required field'
        }
        formInfo[inputElements[i].getAttribute('id')] = inputElements[i].value;
    }
    console.log(formInfo)
}