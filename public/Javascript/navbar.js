document.addEventListener('DOMContentLoaded', function(){
    let dropdownButton = document.getElementById('dropdownButton');
    let dropdownMenu = document.getElementById('dropdownMenu');
    let menuButtton = document.getElementById('menuButton');
    let mobileMenu = document.getElementById('mobileMenu');

    if(dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', function() {
            dropdownMenu.classList.toggle('hidden');
        })
    }

    if(menuButton && mobileMenu) {
        menuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        })
    }
})