let uri = new URL(location.href);
uri = decodeURIComponent(uri.pathname.replace(/^\/+|\/+$/g, ''));
let allElementsMenu = document.querySelectorAll('header menu a');

allElementsMenu.forEach((elementMenu) => {
    if(elementMenu.getAttribute('href') === uri) {
        document.querySelector('header menu a.active').classList.remove('active');
        elementMenu.classList.add('active');
    }
});