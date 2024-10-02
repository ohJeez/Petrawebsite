<?php
// Include the database connection and function files
include 'connect.php';
include 'common-functions/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <title>Petra</title>

    <!-- Stylesheets -->
    <!-- <link rel="stylesheet" href="./home.css" /> -->

    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400&display=swap"
    />
    
    <!-- Custom Styling -->
    <link rel="stylesheet" href="header.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <div class="navigation-bar">
      <div class="title">Petra</div>
      <nav>
        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">Pet Care</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>

      <!-- Right Side -->
      <div class="nav-right">
        <ul class="auth-buttons">
          <li><a href="#" class="btn">Sign In</a></li>
          <li><a href="#" class="btn">Register</a></li>
        </ul>
        <div class="search-container">
          <img class="vector-icon" alt="Search Icon" src="./images/icons/search_icon.png" />
          <input type="text" class="search-bar" placeholder="Search" />
        </div>
        <img src="./images/icons/cart_icon.png" class="cart-icon" alt="Cart Icon" />
      </div>
    </div>
    <br>
    <section class="hero-section">
        <div class="header-pic">
            <div class="content">
                <div class="text">Taking care for your Pets !</div>
                <div class="subtext">Petra is the final destination for all your pet needs</div>
                <button class="btn">Explore</button>
            </div>
            <img src="./images/header.png" alt="Cover image"/>
        </div>
    </section>    
    <!-- Services -->
    <div class="services-provided">
        <h2>Services Provided</h2>
        <div class="service-card-container">
            <div class="card">
                <div class="card-content">
                    <img src="./images/Sections/Grooming.png" alt="Grooming Icon">
                    <h3>Grooming</h3>
                </div>
            </div>
    
            <div class="card">
                <div class="card-content">
                    <img src="./images/Sections/daycare.png" alt="Daycare Icon">
                    <h3>Daycare</h3>
                </div>
            </div>
    
            <div class="card">
                <div class="card-content">
                    <img src="./images/Sections/healthcare.png" alt="Healthcare Icon">
                    <h3>Healthcare</h3>
                </div>
            </div>
    
            <div class="card">
                <div class="card-content">
                    <img src="./images/Sections/hyginic care.png" alt="Hygienic Care Icon">
                    <h3>Hygienic Care</h3>
                </div>
            </div>
    
            <div class="card">
                <div class="card-content">
                    <img src="./images/Sections/Training.png" alt="Training Icon">
                    <h3>Training      </h3>
                </div>
            </div>
        </div>
    </div>

    <!-- New Pets Section -->
    <section class="product-grid">
      <h2>New Pets</h2>
      <div class="product-row">
        <?php
          // Display the products dynamically
          getProducts();
        ?>
      </div>
    </section>

    <!-- Footer -->
    <footer>
  <div class="footer-container">
    <div class="footer-about">
      <h3>About Petra</h3>
      <p>Petra is your trusted partner for all things pets. From pet grooming to healthcare and products, we ensure your pets receive the best care.</p>
    </div>
    
    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#services">Our Services</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#products">Products</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </div>

    <div class="footer-contact">
      <h3>Contact Us</h3>
      <ul>
        <li>Email: support@petra.com</li>
        <li>Phone: +123 456 7890</li>
        <li>Location: 1234 Pet Street, Pet City</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2024 Petra. All rights reserved.</p>
  </div>
</footer>
    <!-- JavaScript for Event Handling -->
    <script>
      const links = [
        { id: "pets", url: "./mac-book-pro-14-3.php" },
        { id: "products", url: "./mac-book-pro-14-3.php" },
        { id: "support", url: "./mac-book-pro-14-3.php" },
        { id: "about", url: "./mac-book-pro-14-3.php" },
        { id: "explorepetra", url: "./mac-book-pro-14-3.php" },
        { id: "Namitha", url: "./index.html" }
      ];

      links.forEach(link => {
        const element = document.getElementById(link.id);
        if (element) {
          element.addEventListener("click", function () {
            window.location.href = link.url;
          });
        }
      });
    </script>
  </body>
</html>
