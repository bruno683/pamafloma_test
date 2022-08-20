const buttonMenu = document.querySelector('a.toggle-button');
const menuMobile = document.querySelector('.container-mobile');


buttonMenu.addEventListener('click', () => {
    menuMobile.classList.toggle('active')
})