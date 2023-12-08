<?php
session_start();


$username = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;

include "bot2.php";

if ($username) {
  echo '<script>
          document.addEventListener("DOMContentLoaded", function() {
            document.querySelector("body > header > div > div > div > nav > ul > li:nth-child(3)").innerHTML += \'<a class="purchasesmobile" href="product-details.php">Purchases</a>\';
              var navList = document.querySelector("body > header > div > div > div > nav > ul").innerHTML += \'<li style="font-size:24px; color:white"><a href="product-details.php">Purchases</a></li>\';
          });
          
        </script>';
};
function displayLoginMessage() {
    $username = isset($_SESSION['user_login']) ? $_SESSION['user_login'] : null;

    if (empty($username)) {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    document.querySelector("body > div.purchaseticket").innerHTML = \'<a style="font-size:26px; margin-top:40px; color:black;" href="login.php">Please Sign in to make a new order</a>\';
                });
              </script>';
    }
};
displayLoginMessage();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>Tomser - Purchases</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-lugx-gaming.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="stylesheet" href="product-details.css">
  <link rel="stylesheet" href="manual.css">
  <!--

TemplateMo 589 lugx gaming!

https://templatemo.com/tm-589-lugx-gaming

-->
</head>

<body>
  <div class="cover"></div>
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
              <!-- <li><a href="product-details.php" class="active">Purchases</a></li> -->
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

  <div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Purchase a ticket</h3>

        </div>
      </div>
    </div>
  </div>
  <div class="purchaseticket">
    <form action="" method="post">
      <h2>Select film and order a ticket</h2>

      <label for="films">Choose a film:</label>
      <select id="films" name="films">
        <option value="THE MARVELS">THE MARVELS (EN, Action, Adventure, Fantasy,
          Motion 12+)</option>
        <option value="FREDDY">FIVE NIGHTS AT
          FREDDY’S (EN, horror)</option>
        <option value="NAPOLEON">NAPOLEON (EN, Action, Adventure, Biography, Drama 18+)</option>
        <option value="WOMEN_IN_Black">WOMEN IN BLACK (EN, Action, Drama 18+)</option>
        <option value="WISH">WISH (AR, Animation, Family 2+)</option>
        <option value="PONYHERZ">PONYHERZ (AR, Animation, Adventure 9+)</option>
        <option value="RENAISSANCE">RENAISSANCE: A FILM BY BEYONCÉ (EN, Documentary film, Music 16+)</option>
        <option value="OPERATION_HONORABLE_BEGGARS">OPERATION HONORABLE BEGGARS (AR, Comedy, Adventure 16+)</option>
        <option value="THE PIPER">THE PIPER (EN, Horror 18+)</option>

      </select>

      <label for="quantity">Quantity:</label>
      <input type="number" id="quantity" name="quantity" min="1" value="1">
      <input type="hidden" id="filmsData" name="filmsData" value="[]">
      <input type="hidden" id="username" name="username" value=<?php echo $username ?>>
      <button type="button" onclick="addFilm()">Add</button>

      <!-- Display added films -->
      <div id="addedFilms"></div>
      <div class="deliveryaddress">
        <input type="text" id="address" name="address" placeholder="Your address">
        <input type="tel" id="phone" name="phone" placeholder="(Your phone number)">
        <span>phone number format 012345678 (without +374)</span>
      </div>
      <button id="firstconfirm" type="button">Confirm order</button>

      <div class="finalsubmit">


      </div>

    </form>

    <script>
      var filmsData = [];
      var addedFilms = []; // Array to store added films

      function addFilm() {
        var selectedFilm = document.getElementById('films').value;
        var quantity = document.getElementById('quantity').value;

        // Add film and quantity to both arrays
        filmsData.push({
          film: selectedFilm,
          quantity: quantity
        });

        var existingFilmIndex = addedFilms.findIndex(item => item.film === selectedFilm);

        if (existingFilmIndex !== -1) {
          addedFilms[existingFilmIndex].quantity = parseInt(addedFilms[existingFilmIndex].quantity) + parseInt(quantity);
        } else {
          addedFilms.push({
            film: selectedFilm,
            quantity: quantity
          });
        }

        displayAddedFilms();

        // Update the hidden input value with the latest filmsData
        document.getElementById('filmsData').value = JSON.stringify(filmsData);

        // Find the index of the newly added film in the films dropdown and set it as the selected index
        var filmsDropdown = document.getElementById("films");
        var newIndex = Array.from(filmsDropdown.options).findIndex(option => option.value === selectedFilm);
        filmsDropdown.selectedIndex = newIndex;

        // Reset form fields
        document.getElementById("quantity").value = 1;
      }

      function removeFilm(index) {
        // Remove only one quantity instead of the entire selection
        if (addedFilms[index].quantity > 1) {
          addedFilms[index].quantity--;
        } else {
          addedFilms.splice(index, 1);
        }

        // Update filmsData array to reflect the removal
        var removedFilm = addedFilms[index];
        var removedIndexInFilmsData = filmsData.findIndex(item => item.film === removedFilm.film);
        if (removedIndexInFilmsData !== -1) {
          filmsData.splice(removedIndexInFilmsData, 1);
        }

        displayAddedFilms();

        // Update the hidden input value with the latest filmsData
        document.getElementById('filmsData').value = JSON.stringify(filmsData);
      }

      function displayAddedFilms() {
        var addedFilmsDiv = document.getElementById("addedFilms");
        addedFilmsDiv.innerHTML = "";

        addedFilms.forEach(function(item, index) {
          var filmEntry = document.createElement("div");
          filmEntry.classList.add("filmEntry");

          var filmDetails = document.createElement("div");
          filmDetails.classList.add("filmDetails");
          filmDetails.textContent = "Film: " + item.film + ", Quantity: " + item.quantity;

          var removeButton = document.createElement("button");
          removeButton.classList.add("removeButton");
          removeButton.textContent = "Remove";
          removeButton.addEventListener("click", function() {
            removeFilm(index);
          });

          filmEntry.appendChild(filmDetails);
          filmEntry.appendChild(removeButton);
          addedFilmsDiv.appendChild(filmEntry);
        });
      }
    </script>





  </div>
  <!-- <div class="single-product section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-image">
            <img src="assets/images/single-game.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <h4>Call of Duty®: Modern Warfare® II</h4>
          <span class="price"><em>$28</em> $22</span>
          <p>LUGX Gaming Template is based on the latest Bootstrap 5 CSS framework. This template is provided by TemplateMo and it is suitable for your gaming shop ecommerce websites. Feel free to use this for any purpose. Thank you.</p>
          <form id="qty" action="#">
            <input type="qty" class="form-control" id="1" aria-describedby="quantity" placeholder="1">
            <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          </form>
          <ul>
            <li><span>Game ID:</span> COD MMII</li>
            <li><span>Genre:</span> <a href="#">Action</a>, <a href="#">Team</a>, <a href="#">Single</a></li>
            <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a href="#">Royal</a></li>
          </ul>
        </div>
        <div class="col-lg-12">
          <div class="sep"></div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="more-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews (3)</button>
                  </li>
                </ul>
              </div>              
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                  <p>You can search for more templates on Google Search using keywords such as "templatemo digital marketing", "templatemo one-page", "templatemo gallery", etc. Please tell your friends about our website. If you need a variety of HTML templates, you may visit Tooplate and Too CSS websites.</p>
                  <br>
                  <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean shorts edison bulb poutine next level humblebrag la croix adaptogen. Hashtag poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents street art.</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                  <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean shorts edison bulb poutine next level humblebrag la croix adaptogen. <br><br>Hashtag poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents street art.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="section categories related-games">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>Action</h6>
            <h2>Related Games</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.php">View All</a>
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
  <div class="orderhistory">
    <h4>View order <span>history</span></h4>
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
  <script>
    document.addEventListener('DOMContentLoaded', function() {

      function openorder() {
        var addressInput = document.querySelector("#address");
        var phoneInput = document.querySelector("#phone");

        var address = addressInput.value.trim();
        var phone = phoneInput.value.trim();

        // Check if address and phone are not empty and phone is a number
        if (address !== "" && phone !== "" && !isNaN(phone)) {
          // Clear any previous error messages
          clearErrorMessages();

          document.querySelector("body > div.cover").style.display = "initial";
          document.querySelector("body > div.purchaseticket > form > div.finalsubmit").style.display = "flex";
          console.log(address + " " + phone)
          document.querySelector("body > div.purchaseticket > form > div.finalsubmit").innerHTML += `<h3>We will contact You via phone number to confirm the order</h3>`;
          document.querySelector("body > div.purchaseticket > form > div.finalsubmit").innerHTML += `<p>Your address is: ${address}</p>`;
          document.querySelector("body > div.purchaseticket > form > div.finalsubmit").innerHTML += `<p><br>Your phone number is: ${phone}<p>`;
          document.querySelector("body > div.purchaseticket > form > div.finalsubmit").innerHTML += `<div><button type="submit">Confirm order</button><button type="button" id="cancelorder">Cancel order</button></div>`;

          // Pass a reference to the function without invoking it
          document.querySelector("#cancelorder").addEventListener("click", closeorder);
        } else {
          // Display error messages
          displayErrorMessage(addressInput, "Address field is empty or phone number is not correct");
        }
      }

      function closeorder() {
        document.querySelector("body > div.cover").style.display = "none";
        document.querySelector("body > div.purchaseticket > form > div.finalsubmit").style.display = "none";
        clearErrorMessages();
        document.querySelector("#address").value = "";
        document.querySelector("#phone").value = "";
        document.querySelector("body > div.purchaseticket > form > div.finalsubmit").innerHTML = "";
      }

      function displayErrorMessage(inputElement, message) {
        // Create and append a small red text element under the input field
        var errorElement = document.createElement("p");
        errorElement.style.color = "red";
        errorElement.textContent = message;
        inputElement.parentNode.appendChild(errorElement);
      }

      function clearErrorMessages() {
        // Remove all error messages
        var errorMessages = document.querySelectorAll(".error-message");
        errorMessages.forEach(function(element) {
          element.parentNode.removeChild(element);
        });
      }

      document.querySelector("#firstconfirm").addEventListener("click", openorder);

    });
    document.addEventListener("DOMContentLoaded", function() {
      // Select the toggle button
      var toggleButton = document.querySelector("body > div.orderhistory > h4 > span");

      // Select the form
      var myForm = document.querySelector("body > div.purchaseticket > form");
      var historybox = document.querySelector("body > div.historyitems");
      // Add a click event listener to the button
      toggleButton.addEventListener("click", function() {
        // Toggle the form's display property
        myForm.style.display = myForm.style.display === "none" ? "block" : "none";
        historybox.style.display = historybox.style.display === "table" ? "none" : "table";
        // Toggle the button text
        if (toggleButton.innerHTML === "history") {
          toggleButton.innerHTML = "Go back";
        } else {
          toggleButton.innerHTML = "history"
        }

      });
    });
  </script>


</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from the POST request
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $filmsData = json_decode($_POST["filmsData"], true);
    $user_login = $_POST["username"];
    include "database.php";

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert data into the orders table
    $sql = "INSERT INTO orders (address, phone, user_login, film) VALUES ('$address', '$phone' , '$user_login', '')";
    if ($conn->query($sql) === TRUE) {
        $orderId = $conn->insert_id;

        // Initialize an associative array to store film quantities
        $filmQuantities = array();

        // Sum up quantities for each film
        foreach ($filmsData as $film) {
            $filmName = $film["film"];
            $filmQuantity = $film["quantity"];

            if (isset($filmQuantities[$filmName])) {
                $filmQuantities[$filmName] += $filmQuantity;
            } else {
                $filmQuantities[$filmName] = $filmQuantity;
            }
        }

        // Initialize film string
        $filmString = '';

        // Concatenate films and quantities
        foreach ($filmQuantities as $filmName => $quantity) {
            $filmString .= "$filmName - Quantity: $quantity\n";
        }

        // Debugging statement
        echo "Order confirmed successfully, we will contact you!";

        // telegrambotsendorder(); // Comment out for testing

        // Update the film column with the concatenated string
        $sql = "UPDATE orders SET film = '$filmString' WHERE id = '$orderId'";
        if ($conn->query($sql) === TRUE) {
            telegrambotsendorder();
        } else {
            echo "Error updating film column: " . $conn->error;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}


?>

<?php
// Assuming $username is set in your PHP code

// Include database connection
include "database.php";
$user_name =  $_SESSION['user_login'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch the last 9 rows from the orders table for the specific user_login
$sql = "SELECT user_login, film, phone, address FROM orders WHERE user_login = ? ORDER BY id DESC LIMIT 9";
$stmt = $conn->prepare($sql);

// Bind parameters to the prepared statement
$stmt->bind_param("s", $user_name);

// Execute the query
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Display the fetched data in an HTML container with table-like styling
echo '<div class="historyitems" style="display: none; width: 100%; border-spacing: 10px; border-collapse: separate;">';

// Counter to keep track of the number of columns
$columnCount = 0;

// Loop through the results
while ($row = $result->fetch_assoc()) {
  // Start a new row for every 3 columns
  if ($columnCount % 3 === 0) {
    echo '<div style="display: table-row;">';
  }

  // Output data in a column with table cell styling
  echo '<div style="display: table-cell; width: 33%; padding: 10px; border: 1px solid #ccc; background-color: #f5f5f5;">';
  echo '<p style="margin: 0;">User: ' . $row["user_login"] . '</p><br>';
  echo '<p style="margin: 0;">Film: ' . $row["film"] . '</p><br>';
  echo '<p style="margin: 0;">Phone number: ' . $row["phone"] . '</p><br>';
  echo '<p style="margin: 0;">Deliver address: ' . $row["address"] . '</p><br>';
  echo '</div>';

  // End the row for every 3 columns
  if ($columnCount % 3 === 2) {
    echo '</div>';
  }

  // Increment the column count
  $columnCount++;
}

// If the last row doesn't have 3 columns, close it
if ($columnCount % 3 !== 0) {
  echo '</div>';
}

echo '</div>';

// Close the prepared statement and database connection
$stmt->close();
$conn->close();
?>