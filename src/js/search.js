document.addEventListener("DOMContentLoaded", function() {
    let searchInput = document.querySelector("#searchInput");
    let shopItems = document.querySelectorAll(".shop_item");

    searchInput.addEventListener("input", function() {
        let searchTerm = searchInput.value.trim().toLowerCase();

        shopItems.forEach(function(item) {
            let itemName = item.querySelector(".shop_item_name").textContent.toLowerCase();
            let itemDisplay = itemName.includes(searchTerm) ? "block" : "none";
            item.style.display = itemDisplay;
        });
    });
});