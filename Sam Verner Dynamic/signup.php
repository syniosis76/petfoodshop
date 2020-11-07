<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link href="CSS/signup.css" rel="stylesheet">   <!--css input-->
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
                          </tr>     <!--location to put cart items-->
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
    <div class="card" id="grid"></div>
    <nav>
        <div class="logo">
            <a href="home.html">        <!--content-->
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
    <div class="content">
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="header-image">
            <img src="pics/accounttitle.JPG" class="signup-image">
            <img src="pics/signup.png" class="signup-text">
        </div>
        <div class="inputs">
            <input type="text" class="first-name" placeholder="First Name" required>        <!--content inputs-->
            <input type="text" class="last-name" placeholder="Last Name" required><br>
            <input type="text" class="email-address" placeholder="Email Address" required><br>
            <input type="text" class="password" placeholder="Password" required><br>
            <div class="tos-text">
                <input type="checkbox" class="tos"required>I have read and agree to the following terms of service<br>
            </div>
            <div class="login-button-background">
                <a href="profile-settings.html" class="login-button">Signup</a>
            </div>
        </div>
    </div>     
    <div class="footer">    <!--footer-->
        <div class="footer-container">Copyright &copy; 2020 Pet Food Shop</div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>