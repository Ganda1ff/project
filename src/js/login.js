let el_log_btn = document.querySelector('.a_login');
if(el_log_btn) {
el_log_btn.addEventListener('click', ()=>{
    let el_reg_form = document.querySelector('.reg');
    let el_log_form = document.querySelector('.login');
    el_reg_form.classList.toggle('active');
    el_log_form.classList.toggle('disable');

});
}

let el_reg_btn = document.querySelector('.reg_a');
if(el_reg_btn) {
el_reg_btn.addEventListener('click', ()=>{
    let el_reg_form = document.querySelector('.reg');
    let el_log_form = document.querySelector('.login');
    el_reg_form.classList.toggle('disable');
    el_log_form.classList.toggle('disable');

});
}