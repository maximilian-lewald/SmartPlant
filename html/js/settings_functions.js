let theme = localStorage.getItem('theme');
const systemsettingsdark = matchMedia("(prefers-color-scheme: dark)").matches;
const button_theme_light = document.querySelector('#button_theme_light');
const button_theme_dark = document.querySelector('#button_theme_dark');
const button_theme_systemsettings = document.querySelector('#button_theme_systemsettings');

switch (theme) {
    case 'light' :
        enableLightMode();
        setLocalStorage('theme', 'light');
        break;
    case 'dark' :
        enableDarkMode();
        setLocalStorage('theme', 'dark');
        break;
    default :
        systemsettingsdark == true ? enableDarkMode() : enableLightMode();
        break;
}

function setLocalStorage(key, value) {
    localStorage.setItem(key, value);
}

function enableLightMode() {
    document.body.classList.remove('darkmode');
    theme = localStorage.getItem('theme');
}

function enableDarkMode() {
    document.body.classList.add('darkmode');
    theme = localStorage.getItem('theme');
}

matchMedia("(prefers-color-scheme: dark)").addEventListener('change', () => {
    location.reload(); 
});