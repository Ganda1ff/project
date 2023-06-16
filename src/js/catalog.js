document.addEventListener("DOMContentLoaded", function() {
    let toggleButton = document.querySelectorAll(".catalog_button");

    toggleButton.forEach(function(button) {
        button.addEventListener("click", function() {
            let el_catalogBox = this.nextElementSibling;
            let el_list = el_catalogBox.querySelector(".catalog_ul");

            if (el_catalogBox.style.display === "none" || el_catalogBox.style.display === "") {
                el_catalogBox.style.display = "block";
                el_list.style.display = "block";

            } else {
                el_catalogBox.style.display = "none";
                el_list.style.display = "none";

            }
        });
    });


    

let categoryLinks = document.querySelectorAll('.catalog_li');

let shopItems = document.querySelectorAll('.shop_item');

categoryLinks.forEach(function(link) {
    link.addEventListener('click', function() {

        let category = this.textContent; 

        shopItems.forEach(function(item) {
            let itemCategory = item.getAttribute('data-category');

            if (itemCategory === category || category === 'Все') {
                item.style.display = 'block'; 
            } else {
                item.style.display = 'none'; 
            }
        });
    });
});
});