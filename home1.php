<?php
// Include the database connection and function files
include 'connect.php';
include 'common-functions/functions.php';
?>

<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="./home.css" />
    <link rel="stylesheet" href="./global.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Public Sans:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fredoka One:wght@400&display=swap"
    />
  </head>
  <body>
    <div class="home">
      <section class="home-inner">
        <div class="rectangle-parent">
          <div class="frame-child"></div>
          <img class="image-110-icon" alt="" src="./images/Funny_Dog_H.jpeg" />

          <nav class="header">
            <div class="trending-products-name">
              <a class="petra">Petra</a>
            </div>
            <div class="trending-products-support">
              <div class="support-links">
                <a class="pets" id="pets">Pets</a>
                <a class="products" id="products">Products </a>
                <a class="about" id="about">About</a>
                <a class="support" id="support">Support</a>
              </div>
            </div>
            <div class="trending-products-search">
              <div class="search-bar">
                <div class="search-input"></div>
                <div class="search-icon">
                  <img class="vector-icon" alt="" src="./images/icons/search_icon.png" />
                </div>
                <input
                  class="enter-your-email"
                  placeholder="Search"
                  type="text"
                />
              </div>
              <div class="avatar-icons-parent">
                <img
                  class="avatar-icons"
                  loading="lazy"
                  alt=""
                  src="./images/icons/cart_icon.png"
                />

                <div class="avatar-icons1">
                  <div class="avatar-background"></div>
                  <img
                    class="skvnqsbgqu1pidewmjgtmte2-2-icon"
                    loading="lazy"
                    alt=""
                    src="./images/ajay_dp.png"
                  />
                </div>
                <img
                  class="avatar-icons2"
                  loading="lazy"
                  alt=""
                  src="./images/icons/menu_icon.png"
                />
              </div>
            </div>
          </nav>
          <div class="welcome-message">
            <div class="welcome-message-container">
              <div class="welcome-to-petra-container">
                <p class="welcome-to-petra">Welcome to Petra</p>
                <p class="where-pets-find">
                  Where Pets Find Their Forever Homes
                </p>
                <p class="blank-line">&nbsp;</p>
              </div>
              <button class="rectangle-group" id="explorepetra">
                <div class="frame-item"></div>
                <div class="explore-petra">EXPLORE PETRA</div>
              </button>
            </div>
          </div>
        </div>
      </section>

      
      <!-- NEw PETS -->
      <h3><b class="new-pets">New pets</b></h3>
      <section class="product-grid">
          <div class="product-row">
            <?php
              // Display the products dynamically
              getProducts();
            ?>
          </div>
        </section>

      <!-- Footer section -->
      <section class="footer">
        <div class="footer-background"></div>
        <div class="footer-content">
          <div class="newsletter">
            <b class="sign-up-for"
              >Sign up for our weekly newsletter for more information</b
            >
            <div class="subscription-form">
              <div class="input">
                <input
                  class="enter-your-email"
                  placeholder="Enter your email address"
                  type="text"
                />
              </div>
              <button class="button-l">
                <div class="subcribe-now">Subcribe Now</div>
              </button>
            </div>
          </div>
        </div>
        <div class="footer-links">
          <div class="links-container">
            <div class="page-links">
              <b class="home1">Home</b>
              <b class="category" >Category</b>
              <b class="customer-care" id="Namitha">Customer Care</b>
            </div>
            <div class="social-links">
              <img
                class="facebook-negative"
                loading="lazy"
                alt=""
                src="./public/facebook--negative.svg"
              />

              <img
                class="twitter-negative"
                loading="lazy"
                alt=""
                src="./public/twitter--negative.svg"
              />

              <img
                class="instagram-negative"
                loading="lazy"
                alt=""
                src="./public/instagram--negative.svg"
              />

              <img
                class="youtube-negative"
                loading="lazy"
                alt=""
                src="./public/youtube--negative.svg"
              />
            </div>
          </div>
          <div class="copyright">
            <div class="copyright-info">
              <b class="paws-haven-all"
                >© 2023 Paws Haven. All rights reserved.</b
              >
              <div class="petra1">PETRA</div>
              <div class="terms-of-service">
                Terms of Service Privacy Policy
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  <script>
  var pets = document.getElementById("pets");
      if (pets) {
        pets.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var products = document.getElementById("products");
      if (products) {
        products.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var support = document.getElementById("support");
      if (support) {
        support.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var about = document.getElementById("about");
      if (about) {
        about.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var explorepetra = document.getElementById("explorepetra");
      if (explorepetra) {
        explorepetra.addEventListener("click", function (e) {
          window.location.href = "./mac-book-pro-14-3.php";
        });
      }
      var Namitha = document.getElementById("Namitha");
      if (Namitha) {
        Namitha.addEventListener("click", function (e) {
          window.location.href = "./index.html";
        });
      }
      
    </script>
</html>