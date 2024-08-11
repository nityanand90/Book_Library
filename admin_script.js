let navbar = document.querySelector('.header .navbar');
let accountBox = decument.querySelector('.header .account-box');
document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    accountBox.classList.remove('active');
}
document.querySelector('#user-btn').onclick = () => {
    accountBox.classList.toggle('active');
    navbar.classList.remove('active');
}

window.onscroll = () => {
    navbar.classList.remove('active');
    accountBox.classList.remove('active');
}