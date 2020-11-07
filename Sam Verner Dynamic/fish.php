<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fish</title>
    <link href="CSS/fish.css" rel="stylesheet"> <!--css input-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- JQuery -->
</head>
<body>
    <header class="header"> <!--cart and navigation-->
        <div class="header-box">
            <a href="account.html" class="account-text">Account</a>
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
                          </tr>         <!--location to put cart items-->
                        </thead>
                        <tbody></tbody>
                      </table>
                      <p class="total-container" id="total-price"></p>
                      <a href="thankyou.html" id="checkout-btn" class="cart-btn">Checkout</a>
                      <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
                    </div>
                  </li>
                </ul>
              </div>
        </div>
    </header>
    <nav>
        <div class="logo">
            <a href="home.html">                <!--content and grid-->
                <img src="pics/logo.png" class="logo-image">
            </a>
        </div>
        <div class="nav-items">
            <li><a href="about-us.html">About us</a></li>
            <li><a href="animals.html">Animals</a></li>
            <li><a href="support.html">Support</a></li>
        </div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Search..." required>
        </form>
    </nav>
    <div class="category-background">
        <a href="dog.html" class="category">Dog</a><br>
        <a href="cat.html" class="category">Cat</a><br>
        <a href="fish.html" class="category">Fish</a><br>
        <a href="small-pets.html" class="category">Small Pets</a><br>
        <a href="reptile.html" class="category">Reptile</a><br>
        <a href="bird.html" class="category">Bird</a><br>
        <a href="horse.html" class="category">Horse</a>
    </div>
    <div class="card" id="grid">
        <div class="card1">
            <img src="pics/fish/fish1.jpg" alt="Fish Food">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$20</p>
                <p class="cardtext">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="43">ADD TO CART</button>
            </div>
        </div>
        <div class="card2">
            <img src="pics/fish/fish1.jpg" alt="Fish Food">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$5</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="44">ADD TO CART</button>
            </div>
        </div>
        <div class="card3">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$10</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="45">ADD TO CART</button>
            </div>
        </div>
        <div class="card4">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$29</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="46">ADD TO CART</button>
            </div>
        </div>
        <div class="card5">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$13</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="47">ADD TO CART</button>
            </div>
        </div>
        <div class="card6">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image"> 
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$12</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart"data-id="48">ADD TO CART</button>
            </div>
        </div>
        <div class="card7">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$14</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="49">ADD TO CART</button>
            </div>
        </div>
        <div class="card8">
            <img src="pics/fish/fish1.jpg" alt="Fish Food" class="card__image">
            <div class="card__info">
                <h1 class="card__title">Fish Food</h1>
                <p class="card__price">$10</p>
                <p class="card-text">Some text about the very<br>interesting horse food<br>we have here</p>
                <button class="card__btn add-to-cart" data-id="50">ADD TO CART</button>
            </div>
        </div>
    </div>   
    <div class="footer">    <!--footer-->
        <div class="footer-container">Copyright &copy; 2020 Pet Food Shop</div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>