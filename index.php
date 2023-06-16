<?php
session_start();

if ($_SESSION['user']) {
    
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

    <title>Главная</title>
</head>
<body>
<header class="el_header">
    
    <div class="el_logo"><a href=""></a></div>
        <button class="el_header_button catalog_button el_a catalog_button1">КАТАЛОГ ИГР</button>
<div class="games_catalog">
            <ul class="catalog_ul">
                <li class="catalog_li" data-category="Все">Все</li>
                <li class="catalog_li" data-category="Аркады">Аркады</li>
                <li class="catalog_li" data-category="Шутеры">Шутеры</li>
                <li class="catalog_li" data-category="RPG">RPG</li>
                <li class="catalog_li" data-category="Экшн">Экшн</li>
                <li class="catalog_li" data-category="Гонки">Гонки</li>
            </ul>
                    
                    </div>

            </div>

            <input class="el_header_input"  id="searchInput" type="text" placeholder="Введите название игры">
            <a href="vendor/authorization_form.php" class="el_a">
                <button class="el_header_button enter_button">ВОЙТИ</button>
            </a>
            <?php
                if (empty($_SESSION['user'])) {
            ?>
            <script src="src/js/profile_button.js"></script>
            <?php
                }
                ?>

                    <a class="profile_href" href="profile.php" style="margin: 10px 0;"></a>
            <?php 
                if (!empty($_SESSION['user'])) {
                    ?>
                <script src="src/js/logout_button.js">
                    </script>
                    <?php
                }
            ?>
            <a class="el_shopping_cart" href="cart.php"></a>



</header>


<main>


<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="appear">
            <h1 class="el_h1_appear">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui amet eaque odio fuga quos. Recusandae nesciunt earum reiciendis iusto! </h1>
            <a href="#"><button class="el_button_appear add_to_cart" data-item-id="13" data-item-name="Red Dead Redemption 2" data-item-price="899.00">В КОРЗИНУ</button></a>
        </div>
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>

        <!-- <a href="#"><img class="el_image_blured" src="images/rdr2.jpg" style="width:100%"></a> -->
        
        
    </div>

    <div class="mySlides fade">
    <div class="appear">
            <h1 class="el_h1_appear">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui amet eaque odio fuga quos. Recusandae nesciunt earum reiciendis iusto! Est dolore iusto consequuntur, esse minima possimus aspernatur dolor suscipit? Nisi.</h1>
            <a href="#"><button class="el_button_appear add_to_cart" data-item-id="14" data-item-name="Cyberpunk 2077" data-item-price="1999.00">В КОРЗИНУ</button></a>
        </div>
        
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>
    </div>

    <div class="mySlides fade">
    <div class="appear">
            <h1 class="el_h1_appear">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis praesentium facilis reprehenderit quas non nobis eaque, quibusdam itaque qui amet labore soluta ad cumque error deserunt ipsa quis corporis.</h1>
            <a href="#"><button class="el_button_appear add_to_cart" data-item-id="15" data-item-name="The Witcher 3: Wild Hunt" data-item-price="299.00">В КОРЗИНУ</button></a>
        </div>
        
        <div class="price">
            <h3 class="price_number">899₽</h3>
            <h3 class="discount_amount">50%</h3>
        </div>
        >
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>

<br>

<container class="items_for_sale">
    <h1 class="items_for_sale_heading">ВСЕ ИГРЫ</h1>
    <div class="shopping_list">

        
    <div class="shop_item" data-category="RPG">
        <img src="images/vertical_images/rdr2_vertical.jpg" alt="">
        <div class="shop_item_description">
            <a href="#"><h3 class="shop_item_name">Red Dead Redemption 2</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">899₽</h3>
                <form action="cart.php" methos="POST"></form>
                <input type="hidden" name="product_id" value="1">
        <input type="hidden" name="product_name" value="Product Name">
        <input type="hidden" name="product_price" value="10.00">
                <button class="add_to_cart" name="add_to_cart" data-item-id="1"  data-item-name="Игра 1" data-item-price="890.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item" data-category="Аркады">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name">Dark Souls III</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">1699₽</h3>
        
                <button class="add_to_cart" data-item-id="2" data-item-name="Dark Souls III" data-item-price="1699.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item" data-category="Гонки">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name">Gothic II</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">49₽</h3>
        
                <button class="add_to_cart" data-item-id="3" data-item-name="Gothic II" data-item-price="49.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item" data-category="Экшн">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name">Mafia II</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">399₽</h3>
        
                <button class="add_to_cart" data-item-id="4" data-item-name="Mafia II" data-item-price="399.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name">GTA V</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">299₽</h3>
        
                <button class="add_to_cart" data-item-id="5" data-item-name="GTA V" data-item-price="299.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name">God of War (2018)</h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price">1399₽</h3>
        
                <button class="add_to_cart" data-item-id="6" data-item-name="God of War (2018)" data-item-price="1399.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="7" data-item-name="Игра 7" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="8" data-item-name="Игра 8" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="9" data-item-name="Игра 9" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="10" data-item-name="Игра 10" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="11" data-item-name="Игра 11" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>

    <div class="shop_item">
        <img src="images/rdr2.jpg" alt="">
        <div class="shop_item_description">
        <a href="#"><h3 class="shop_item_name"></h3></a>
            <div class="price_flex">

                <h3 class="shop_item_price"></h3>
        
                <button class="add_to_cart" data-item-id="12" data-item-name="Игра 12" data-item-price="10.00">В КОРЗИНУ</button>

            </div>
        </div>
    </div>
            </form>
</div>
<div class="switch_page">
          
<li class="list_style"><a href="#" id="link1" class="link">1</a></li>
  <li class="list_style"><a href="#" id="link2" class="link">2</a></li>
  <li class="list_style"><a href="#" id="link3" class="link">3</a></li>
  <li class="list_style"><a href="#" id="link4" class="link">4</a></li>
  <li class="list_style"><a href="#" id="link5" class="link">5</a></li>

</div>

</container>

<h1 class="comments_header">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h1>
<?php
if (!empty($_SESSION['user'])) { ?>

<div class="comment_bar">
<form method="POST" action="">
    <div class="comment_left">

    <label for="comment"></label>
    <textarea id="comment_textarea" placeholder="НАПИШИТЕ СЮДА СВОИ ВПЕЧАТЛЕНИЯ ОТ НАШЕГО МАГАЗИНА" name="comment" id="comment" required></textarea>

    <input class="comment_button" type="submit" name="submit" value="ОПУБЛИКОВАТЬ ОТЗЫВ">
</div>

</form>


<?php
}
?>
<div class="comment_right">
<?php

session_start();

$db = new mysqli('localhost', 'root', 'root', 'bd');

if (isset($_POST['submit'])) {
    $name = $_SESSION['user']['name'];
    $comment = $_POST['comment'];

    $query = "SELECT * FROM comments WHERE name='$name'";
    $result = $db->query($query);
    if ($result->num_rows > 0) {
        echo "<strong class='comment_strong_red_alert' color='red'>ВЫ УЖЕ ОСТАВИЛИ ОТЗЫВ</strong>";
    } else {
        $query = "INSERT INTO comments (name, comment) VALUES ('$name', '$comment')";
        $db->query($query);
    }
}

$query = "SELECT * FROM comments";
$result = $db->query($query);

while ($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $comment = $row['comment'];
    $date = $row['date'];

    echo "<div class='comment'>";
    echo "<strong>$name:</strong> $comment";
    echo "<br><small>$date</small>";
    echo "<hr>";
    echo "</div>";
}

?>
</div>
</div>

</main>

<footer>
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
</footer>

<script src="src/js/slide_gallery.js"></script>
<script src="src/js/switch_page.js"></script>
<!-- <script src="src/js/add_to_cart.js"></script> -->
<script src="src/js/search.js"></script>
<script src="src/js/catalog.js"></script>

<?php
session_start();

if($_SESSION['user']) {
    

    ?>

<script>
    document.addEventListener("DOMContentLoaded", function() {

var addToCartButtons = document.querySelectorAll(".add_to_cart");

addToCartButtons.forEach(function(button) {
    button.addEventListener("click", function() {
        var itemId = this.getAttribute("data-item-id");
        var itemName = this.getAttribute("data-item-name");
        var itemPrice = parseFloat(this.getAttribute("data-item-price"));

        var cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

        var existingItem = cartItems.find(function(item) {
            return item.id === itemId;
        });

        if (existingItem) {
            existingItem.quantity++;
        } else {
            cartItems.push({
                id: itemId,
                name: itemName,
                price: itemPrice,
                quantity: 1
            });
        }

        localStorage.setItem("cartItems", JSON.stringify(cartItems));

    alert("Item added to cart!");

        location.reload();
    });
});
});

</script>
<?php
}?>
</body>
</html>