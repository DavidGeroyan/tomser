<?php
session_start();

// Accessing session data
$username = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;

include "bot.php";
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

  <title>Tomser - Contact Page</title>

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
              <li><a href="index.php">Home</a></li>
              <li><a href="shop.php">Our Shop</a></li>
              
              <!-- <li><a href="product-details.php">Product Details</a></li> -->
              
              <li><a href="contact.php" class="active">Contact Us</a></li>
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Contact Us</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Contact Us</span>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-page section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="left-text">
            <div class="section-heading">
              <h6>Contact Us</h6>
              <h2>Say Hello!</h2>
            </div>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora aliquid optio facere voluptatibus nostrum, vero recusandae dolorum delectus perspiciatis quasi quas ab provident, possimus ut, officiis laudantium modi nesciunt consectetur id. Rem rerum quisquam nemo a placeat. Libero, amet. Totam quos maiores temporibus autem dolor quis iusto ea cum voluptate.</p>
            <ul>
              <li><span>Address</span> YEREVAN, YEREVAN, YEREVAN</li>
              <li><span>Phone</span> +123 456 7890</li>
              <li><span>Email</span> tomser@contact.com</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-content">
            <div class="row">
              <div class="col-lg-12">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24386.768624793032!2d44.45017397431639!3d40.17911099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abda939e08755%3A0xeeda996173ad92f4!2sCinema%20Star%20Dalma%20Garden%20Mall!5e0!3m2!1sen!2sus!4v1701562315777!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-12">
                <form id="contact-form" action="" method="post">
                  <div class="row">
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="surname" name="surname" id="surname" placeholder="Your Surname..." autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="subject" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
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


<?php
include "database.php";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve data from the form
  $name = $_POST["name"];
  $surname = $_POST["surname"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];

  // Insert data into the "contactus" table
  $sql = "INSERT INTO contactus (name, surname, email, subject, message) VALUES (?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);

  // Bind parameters to the prepared statement
  $stmt->bind_param("sssss", $name, $surname, $email, $subject, $message);

  // Execute the query
  if ($stmt->execute()) {
    echo "Message sent successfully!";
    telegrambotsend();
  } else {
    echo "Error: " . $stmt->error;
  }

  // Close the prepared statement
  $stmt->close();
}

// Close the database connection
$conn->close();
?>

