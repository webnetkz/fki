function showCloseMenu(icon) {
    const menu = document.querySelector('header menu');
    let check = menu.style.top;
    
    if(check === '' || check === '-101vh' ) {
        menu.style.cssText = `
            top: 50px;
        `;
    } else {
        menu.style.cssText = `
            top: -101vh;
        `;
    }
}


