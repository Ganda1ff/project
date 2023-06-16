let el_settings = document.querySelector('.settings');
let el_settingsBlock = document.querySelector('.settings_wrap');
el_settings.addEventListener('click', ()=>{
    el_settingsBlock.classList.toggle('active');
});