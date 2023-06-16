<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/cart.css">
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

        <title>Корзина</title>
</head>
<body>
<div class="el_logo"><a href="index.php"></a></div>
    <?php
    session_start();
    if($_SESSION['user']) {

    ?>
<div class="cart-container">
    <h2>КОРЗИНА</h2>
    <div class="cart-items"></div>
    <div class="total">ВСЕГО: <span class="cart-total">0.00 ₽</span></div>
    <div class="button"><button class="order">ОФОРМИТЬ ЗАКАЗ</button>        <a href="/index.php" class="buttons">НА ГЛАВНУЮ</a></div>
 
</div>




<script>    
var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

    var cartItemsContainer = document.querySelector(".cart-items");

    cartItemsContainer.innerHTML = "";

    cartItems.forEach(function(item) {
        var cartItemElement = document.createElement("div");
        cartItemElement.classList.add("cart-item");

        cartItemElement.innerHTML = `
    <div class="cart-item-name">${item.name}</div>
    <div class="cart-item-price">${item.price} ₽</div>
    <!--<div class="cart-item-quantity">Quantity: ${item.quantity}</div>-->
    <button class="remove-item" data-item-id="${item.id}">УДАЛИТЬ</button>
`;

        cartItemsContainer.appendChild(cartItemElement);
    });

    var cartTotal = cartItems.reduce(function(total, item) {
        return total + item.price * item.quantity;
    }, 0);

    var cartTotalElement = document.querySelector(".cart-total");

    cartTotalElement.textContent = cartTotal.toFixed(2) + " ₽";

    var removeItemButtons = document.querySelectorAll(".remove-item");

    removeItemButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            var itemId = this.getAttribute("data-item-id");

            cartItems = cartItems.filter(function(item) {
                return item.id !== itemId;
            });

            localStorage.setItem("cartItems", JSON.stringify(cartItems));

            location.reload();
        });
    });

</script>
 <?php
    }
    else {
       echo "<h1>ВОЙДИТЕ ИЛИ ЗАРЕГИСТРИРУЙТЕСЬ</h1>";
    }
    ?> 

<!-- <footer>
    <div class="global_footer_flex">
<div class="footer_logo"></div>

<div class="center_block">
<div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">О КОМПАНИИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">КОНТАКТЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">БЛОГ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПОДДЕРЖКА</li>
    </a>
  
</ul>

    </div>

    <div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">ПОДАРОЧНЫЕ КАРТЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ВАКАНСИИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПРЕДЗАКАЗЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ВОЗВРАТ</li>
    </a>

</ul>

    </div>

    <div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">ЛИДЕРЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">НОВИНКИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПОДБОРКИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">СКИДКИ</li>
    </a>

</ul>
</div>
    </div>

    <div class="socials">
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
    </div>
</div>
</footer> -->

</body>
</html>