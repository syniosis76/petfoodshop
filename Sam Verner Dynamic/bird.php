
<?php include('libs/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bird</title>
    <link href="CSS/bird.css" rel="stylesheet"> <!--css input-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- JQuery -->
</head>
<body>
    <header class="header"> <!--cart and navigation-->
        <div class="header-box">
            <a href="account.php" class="account-text">Account</a>
            <div class="header__cart">
                <ul>
                  <li class="header__submenu" id="submenu">
                    <button class="header__cart-btn" id="toggle-cart-btn"><svg class="cart" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"></path>
          </svg> Your Cart</button>
                    <div id="shopping-cart" class="shopping-cart-container">
                      <table id="cart-content">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                          </tr>     <!--location to put cart items-->
                        </thead>
                        <tbody></tbody>
                      </table>
                      <p class="total-container" id="total-price"></p>
                      <a href="thankyou.php" id="checkout-btn" class="cart-btn">Checkout</a>
                      <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
                    </div>
                  </li>
                </ul>
              </div>
        </div>
    </header>
    <nav>
        <div class="logo">          <!--content and grid-->
            <a href="home.php">
                <img src="pics/logo.png" class="logo-image">
            </a>
        </div>
        <div class="nav-items">
            <li><a href="about-us.php">About us</a></li>
            <li><a href="animals.php">Animals</a></li>
            <li><a href="support.php">Support</a></li>
        </div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Search..." required>
        </form>
    </nav>
    <div class="category-background">
        <a href="dog.php" class="category">Dog</a><br>
        <a href="cat.php" class="category">Cat</a><br>
        <a href="fish.php" class="category">Fish</a><br>
        <a href="small-pets.php" class="category">Small Pets</a><br>
        <a href="reptile.php" class="category">Reptile</a><br>
        <a href="bird.php" class="category">Bird</a><br>
        <a href="horse.php" class="category">Horse</a>
    </div>
    <div class="card" id="grid">
        <div class="card1">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" onclick="loadpage('product-detail.php?id=19')">
            <div class="card__info">
                <h1 class="card__title"><?php echo $test1a['title'];?></h1>
                <p class="card__price"><?php echo $test1a['price'];?></p>
                <p class="card-text"><?php echo $test1a['info'];?></p>
                <input type="number" id="quantity" name="quantity" data-id="19" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="19">ADD TO CART</button>
            </div>
        </div>
        <div class="card2">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" onclick="loadpage('product-detail.php?id=20')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$155</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="20" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="20">ADD TO CART</button>
            </div>
        </div>
        <div class="card3">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=21')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$150</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="21" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="21">ADD TO CART</button>
            </div>
        </div>
        <div class="card4">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=22')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$29</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="22" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="22">ADD TO CART</button>
            </div>
        </div>
        <div class="card5">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=23')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$13</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="23" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="23">ADD TO CART</button>
            </div>
        </div>
        <div class="card6">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=24')"> 
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$12</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="24" value="1" min="1" max="5">
                <button class="card__btn add-to-cart"data-id="24">ADD TO CART</button>
            </div>
        </div>
        <div class="card7">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=25')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$14</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="25" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="25">ADD TO CART</button>
            </div>
        </div>
        <div class="card8">
            <img src="pics/bird/bird1.jpg" alt="Bird Food" class="card__image" onclick="loadpage('product-detail.php?id=19')">
            <div class="card__info">
                <h1 class="card__title">Bird Food</h1>
                <p class="card__price">$10</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <input type="number" id="quantity" name="quantity" data-id="26" value="1" min="1" max="5">
                <button class="card__btn add-to-cart" data-id="26">ADD TO CART</button>
            </div>
        </div>
    </div>
    <div class="footer">    <!--footer-->
        <div class="footer-container">Copyright &copy; 2020 Pet Food Shop</div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>