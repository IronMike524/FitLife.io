document.getElementById("btn-register").addEventListener("click", register);
document.getElementById("btn-login").addEventListener("click", login);


var container_login_register = document.querySelector(".container-login-register")
var form_login = document.querySelector(".form-login");
var form_register = document.querySelector(".form-register");
var box_back_login = document.querySelector(".box-back-login");
var box_back_register = document.querySelector(".box-back-register");

function login() {
    form_register.style.display = "none";
    container_login_register.style.left = "10px";
    form_login.style.display = "block";
    box_back_register.style.opacity = "1";
    box_back_login.style.opacity = "0"
}

function register() {
    form_register.style.display = "block";
    container_login_register.style.left = "410px";
    form_login.style.display = "none";
    box_back_register.style.opacity = "0";
    box_back_login.style.opacity = "1"
}

const sr = ScrollReveal ({
    distance: '65px',
    duration: 2600,
    delay: 450,
    reset: true
});

sr.reveal('.app-text',{delay:200, origin:'top'});
sr.reveal('.app',{delay:450, origin:'top'});