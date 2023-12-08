<?php
session_start();

// Accessing session data
$username = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;


if ($username) {
  echo '<script>
          document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("body > header > div > div > div > nav > ul > li:nth-child(3)").innerHTML += \'<a class="purchasesmobile" href="product-details.php">Purchases</a>\';
              var navList = document.querySelector("body > header > div > div > div > nav > ul").innerHTML += \'<li style="font-size:24px; color:white"><a href="product-details.php">Purchases</a></li>\';
          });
          
        </script>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Tomser</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="manual.css" />
  <!--

TemplateMo 589 lugx gaming

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>
  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="tomser.png" alt="" style="width: 158px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="index.php" class="active">Home</a></li>
              <li><a href="shop.php">Our Shop</a></li>
              <!-- <li><a href="product-details.php">Purchases</a></li> -->
              <li><a href="contact.php">Contact Us</a></li>
              <li><a href="login.php">Sign In</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="caption header-text">
            <h6>Welcome to tomser</h6>
            <h2>BEST WEBSITE TO BUY TICKETS IN ARMENIA!</h2>
            <p>Discover unforgettable experiences! Find your tickets to the hottest concerts, thrilling sports events, and captivating shows. Secure your spot now and make lasting memories with our hassle-free ticket booking. Don't miss out – your next adventure starts here!</p>
            <div class="search-input">
              <!-- <form id="search" action="#">
                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                <button role="button">Search Now</button>
              </form> -->
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-2">
          <div class="right-image">
            <img src="https://cdn.center.am/4Jo-bz70i4c36AnDTtPlsBEJLC8HmM5olW5qxnwBF58/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQ1Mi9tdXJhY2thbnBvcnQuanBn.jpg" alt="">
            <span class="price">2750AMD</span>
            <span class="offer">-35%</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Free Storage</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
              </div>
              <h4>User More</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Reply Ready</h4>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6">
          <a href="#">
            <div class="item">
              <div class="image">
                <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
              </div>
              <h4>Easy Layout</h4>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div> -->

  <div class="section trending">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Trending</h6>
            <h2>Trending Films</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/RGGqxFSimRnCRuhNKS4MyJW09AJQ34u2SU7SSrkfua4/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQyNi9tYXJ2ZWxzcG9ydC5qcGc.jpg?width=430&height=641" alt=""></a>
              <span class="price"><em>4500AMD</em>3000AMD</span>
            </div>
            <div class="down-content">
              <span class="category">Action, Adventure, Fantasy, Motion</span>
              <h4>THE MARVELS</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/0SNvDj4I4WV1qiHn2JEAdH-bPGoqp8M9k7yQ8sEeR54/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQ0Mi9uYXBvbGVvbnBvcnQuanBn.jpg?width=430&height=641" alt=""></a>
              <span class="price">3600AMD</span>
            </div>
            <div class="down-content">
              <span class="category">Action, Adventure, Biography, Drama</span>
              <h4>NAPOLEON</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/BtzVvbL46ucmgqjfZlnWydiALRZ7gmQZptA6dzsGzyg/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQxNC9mcmVkZHlzcG9ydC5qcGc.jpg?width=430&height=641" alt=""></a>
              <span class="price"><em>3600AMD</em>2200AMD</span>
            </div>
            <div class="down-content">
              <span class="category">Horror<br></span>
              <h4>FIVE NIGHTS AT <br> FREDDY’S</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/LzQTt_AlvcVmUjLe6DX50V7323PXt7Is_XJKfVfFqs0/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDM2Ni9Xb21lbi1pbi1CbGFjay0tLUFQUC0oOTAweDEzMjMpLmpwZw.jpg?width=430&height=641" alt=""></a>
              <span class="price">3600AMD</span>
            </div>
            <div class="down-content">
              <span class="category">Action, Drama <br><br></span>
              <h4>WOMEN IN BLACK</h4>
              <a href="product-details.php"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP Films</h6>
            <h2>Most Viewed</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/RGGqxFSimRnCRuhNKS4MyJW09AJQ34u2SU7SSrkfua4/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQyNi9tYXJ2ZWxzcG9ydC5qcGc.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>THE MARVELS</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/0SNvDj4I4WV1qiHn2JEAdH-bPGoqp8M9k7yQ8sEeR54/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQ0Mi9uYXBvbGVvbnBvcnQuanBn.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>NAPOLEON</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/BtzVvbL46ucmgqjfZlnWydiALRZ7gmQZptA6dzsGzyg/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQxNC9mcmVkZHlzcG9ydC5qcGc.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>FIVE NIGHTS AT
FREDDY’S</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/LzQTt_AlvcVmUjLe6DX50V7323PXt7Is_XJKfVfFqs0/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDM2Ni9Xb21lbi1pbi1CbGFjay0tLUFQUC0oOTAweDEzMjMpLmpwZw.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>WOMEN IN BLACK</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/YCvlXXQaqMS9Ln0y0LjECe9qfWnPugYBhpEkw4AUllM/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQ1NC9waXBlcnBvcnQuanBn.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>THE PIPER</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="product-details.php"><img src="https://cdn.center.am/4Jo-bz70i4c36AnDTtPlsBEJLC8HmM5olW5qxnwBF58/rs:auto:0:0:0/g:no/czM6Ly9jaW5lbWEvNDQ1Mi9tdXJhY2thbnBvcnQuanBn.jpg?width=430&height=641" alt=""></a>
            </div>
            <div class="down-content">
              <span class="category">Adventure</span>
              <h4>OPERATION HONORABLE BEGGARS</h4>
              <a href="product-details.php">Explore</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/categories-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/categories-03.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/categories-04.jpg" alt=""></a>
            </div>
          </div>
        </div>
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>Action</h4>
            <div class="thumb">
              <a href="product-details.php"><img src="assets/images/categories-05.jpg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Lorem ipsum dolor consectetur adipiscing, sed do eiusmod tempor incididunt.</p>
                <div class="main-button">
                  <a href="shop.php">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Winter <span style="color:#ee626b">Sale</span>. Get Up To 3000AMD Off!</h2>

                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 Tomser. All rights reserved. Gagik Baghdasaryan &nbsp;&nbsp; <a rel="nofollow" href="https://templatemo.com" target="_blank">Design: TemplateMo</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Check if the session exists
      var isSessionExists = <?php echo isset($_SESSION['user_login']) ? 'true' : 'false'; ?>;

      // Get the element
      var menuElement = document.querySelector("body > header > div > div > div > nav > ul > li:nth-child(4) > a");

      // Change display property based on session existence
      if (isSessionExists) {
        menuElement.style.display = 'none';
        var navigation = document.querySelector("body > header > div > div > div > nav > ul");
        navigation.innerHTML += '<li style = "font-size:24px; color:white">Hello <?php echo $username ?></li>';
        navigation.innerHTML += '<li style = "font-size:26px; color:white";><a  href="logout.php" id="logoutbtn">Log out</a></li>';

        document.addEventListener('DOMContentLoaded', function() {
          var logoutButton = document.querySelector("body > header > div > div > div > nav > ul > li:nth-child(7) > a");

        });
      }
    });
  </script>


</body>

</html>