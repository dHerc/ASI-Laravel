function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function setDarkMode() {
    window.localStorage.setItem('mode', 'dark');
    document.documentElement.classList.add('dark-mode');
}

function setLightMode() {
    window.localStorage.setItem('mode', 'light');
    document.documentElement.classList.remove('dark-mode');
}

if(window.localStorage.getItem('mode') === 'dark') {
    setDarkMode();
}
