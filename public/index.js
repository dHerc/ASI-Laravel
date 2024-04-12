function setDarkMode() {
    window.localStorage.setItem('mode', 'dark');
    document.documentElement.classList.add('dark-mode');
}

function setLightMode() {
    window.localStorage.setItem('mode', 'light');
    document.documentElement.classList.remove('dark-mode');
}

function togglePageNav() {
    document.getElementById('side-nav').classList.toggle('expanded')
}

if(window.localStorage.getItem('mode') === 'dark') {
    setDarkMode();
}
