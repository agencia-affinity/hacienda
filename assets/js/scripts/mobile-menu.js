const btnMenu = document.querySelector('.btn-menu');
const menu = document.querySelector('.menu');
const asideMenu = document.querySelector('.aside-menu');
const itemLinks = document.querySelectorAll('.aside-menu .menu li .link');

// Toggle ao clicar no botão do menu
btnMenu.addEventListener('click', () => {
    menu.classList.toggle('active');
    btnMenu.classList.toggle('is-active');
    asideMenu.classList.toggle('active');
    document.body.classList.toggle('menu-opened');
});

// Fechar menu ao clicar nos links
itemLinks.forEach((link) => {
    link.addEventListener('click', () => {
        menu.classList.remove('active');
        btnMenu.classList.remove('is-active');
        asideMenu.classList.remove('active');
        document.body.classList.remove('menu-opened');
    });
});
