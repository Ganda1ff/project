let el_checkbox = document.getElementById('show_pass');
let el_pass = document.getElementById('password-input');

el_checkbox.onclick = function showPass() {
    if (el_pass.getAttribute('type') === 'password') {
        el_pass.setAttribute('type','text'); 
    
    }

    else {
        el_pass.setAttribute('type', 'password');
    }
}