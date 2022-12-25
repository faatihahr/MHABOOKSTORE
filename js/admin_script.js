let menu = document.querySelector('#menu-btn');
let user = document.querySelector('#user-btn');
let navbar = document.querySelector('.header .navbar');
let accountBox = document.querySelector('.header .account-box');

//menu
menu.onclick = () => {
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}
//account box
user.onclick = () => {
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}

//window
window.onscroll = () =>{
    navbar.classList.remove('active');
    accountBox.classList.remove('active');
}
