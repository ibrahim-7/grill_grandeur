<!doctype html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <meta name="title" content="Grill Grandeur - Exquisite Dining Experience">
    <meta name="description" content="Experience unparalleled dining at Grill Grandeur. Discover our luxurious menu and exceptional service at our renowned restaurant.">
    <meta name="keywords" content="restaurant, fine dining, luxury food, Grill Grandeur, gourmet cuisine">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Grill Grandeur Team">
    <meta name="language" content="English">
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Grill Grandeur - Exquisite Dining Experience">
    <meta property="og:description" content="Indulge in a world-class dining experience at Grill Grandeur, featuring a luxurious menu and exceptional service.">
    <meta property="og:image" content="URL_to_image.jpg">
    <meta property="og:url" content="https://ibr.crestwebsolutions.com/restaurant/index.php">
    <meta property="og:type" content="website">
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Grill Grandeur - Exquisite Dining Experience">
    <meta name="twitter:description" content="Experience the finest in dining at Grill Grandeur with our luxurious menu and exceptional service.">
    <meta name="twitter:image" content="URL_to_image.jpg">
    <link rel="canonical" href="https://ibr.crestwebsolutions.com/restaurant/index.php">
  <title>Grill Grandeur</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body id="home">
  <?php
  require 'header.php';
  ?>

  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
  <!--bootstrap working-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap working-->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- disable body scroll which navbar is in active -->

  <section class="w3l-hero-headers-9" id="home">
    <div class="slide text-center header11" data-selector="header11">
      <div class="container">
        <div class="banner-text ">
          <h5 class=" ">Only taste is <br>real for food</h5>
          <p class=" ">Experience the true essence of food with flavors that speak for themselves. Our dishes are crafted to deliver authentic and memorable taste.</p>
          <a href="services.php" class="btn logo-button top-margin">View Our Menu</a>
        </div>
      </div>

    </div>
  </section>
  <section class="w3l-teams-15">
    <div class="team-single-main ">
      <div class="container">

        <div class="row">
          <div class="column2 image-text col-lg-6">
            <div class="nature-row ">
              <h5><a href="#page">
                  Enjoy Our Delicious Food</a></h5>
              <p class="para  text ">Delight in our delicious food, crafted with the finest ingredients and exceptional care.</p>
            </div>
            <div class="nature-row ">
              <h5><a href="#page">
                  All Different Types </a></h5>
              <p class="para  text ">Explore a diverse range of dishes, offering something for every taste and preference.</p>
            </div>
            <div class="nature-row ">
              <h5><a href="#page">Experience new flavors</a></h5>
              <p class="para  text ">
                Embark on a culinary journey with innovative flavors and unique combinations that will excite your palate.</p>
            </div>
          </div>
          <div class="column2 image-text col-lg-6">
            <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section class="w3l-specification-6">
    <div class="specification-layout ">
      <div class="container">
        <div class="main-titles-head ">
          <h3 class="header-name ">
            Our Special Feature
          </h3>
          <p class="tiltle-para ">Discover our special feature, designed to offer a unique and memorable experience. From exceptional service to exclusive dishes, we ensure every visit is extraordinary.</p>
        </div>
        <div class="call-grids-w3 d-grid">
          <div class="grids-1  grids-effect-2">
            <span class="fa fa-beer"></span>
            <h4><a href="#feature" class="title-head">Well Decorated</a></h4>
            <p class="para"> Immerse yourself in a beautifully decorated ambiance that enhances your dining experience.</p>
          </div>
          <div class="grids-1  grids-effect-2">
            <div class="color-white">
              <span class="fa fa-cutlery"></span>
              <h4><a href="#page" class=" title-head">Breakfast</a></h4>
              <p class="para">Start your day right with our hearty and flavorful breakfast options.</p>
            </div>
          </div>
          <div class="grids-1 grids-effect-2">
            <span class="fa fa-handshake-o"></span>
            <h4><a href="#feature" class="title-head">Expert Chef</a></h4>
            <p class="para">Enjoy dishes crafted by our expert chef, renowned for culinary excellence.</p>
          </div>
          <div class="grids-1  grids-effect-2">
            <div class="color-white">
              <span class="fa fa-spoon"></span>
              <h4><a href="#page" class=" title-head">Lunch</a></h4>
              <p class="para">Rejuvenate your afternoon with a delightful and satisfying lunch selection.</p>
            </div>
          </div>
          <div class="grids-1 grids-effect-2">
            <span class="fa fa-smile-o"></span>
            <h4><a href="#feature" class="title-head">Quick Serve</a></h4>
            <p class="para"> Experience fast and efficient service without compromising on quality.</p>
          </div>
          <div class="grids-1  grids-effect-2">
            <div class="color-white">
              <span class="fa fa-apple"></span>
              <h4><a href="#page" class=" title-head">Dinner</a></h4>
              <p class="para">Indulge in a sumptuous dinner that promises a memorable end to your day.</p>
            </div>
          </div>
          <div class="grids-1 grids-effect-2">
            <span class="fa fa-diamond"></span>
            <h4><a href="#feature" class="title-head title-head">Delicious Food</a></h4>
            <p class="para">Savor every bite of our delicious food, made with the finest ingredients.</p>
          </div>
          <div class="grids-1  grids-effect-2">
            <div class="color-white">
              <span class="fa fa-thumbs-o-up"></span>
              <h4><a href="#page" class=" title-head">Desert</a></h4>
              <p class="para">Treat yourself to our exquisite desserts, the perfect finish to any meal.</p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="w3l-call-to-action_9">
    <div class="call-w3">
      <div class="container text-center">
        <div class="title-head">
          <h3>Enjoy Our<br>
            Delicious Food</h3>
          <p><i>Enjoy our delicious food, crafted to perfection. Savor every bite with dishes made from the freshest ingredients, designed to tantalize your taste buds and leave you craving more.</i></p>
        </div>

      </div>
    </div>
    </div>
  </section>
  <section class="w3l-covers-18">
    <div class="covers-main ">
      <div class="container">
        <div class="main-titles-head ">
          <h3 class="header-name ">
            Discover Our Menu
          </h3>
          <p class="tiltle-para  "><i>Explore our diverse menu, featuring a selection of delicious dishes crafted to delight your taste buds.</i> </p>
        </div>
        <div class="gallery-image row">
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Coconut Chicken and Rice</a></h5>
            <p class="para">Savor the rich flavors of tender chicken and fragrant coconut rice, a perfect blend of tropical goodness.</p>
          </div>
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Garlic Roast Chicken</a></h5>
            <p class="para">Indulge in our savory garlic roast chicken, seasoned to perfection and roasted for a deliciously crispy finish.</p>
          </div>
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Butter pecan caramel</a></h5>
            <p class="para">Treat yourself to a decadent dessert featuring buttery pecans and smooth caramel, a true delight for your taste buds.</p>
          </div>
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b4.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Stuffed Baby Eggplant</a></h5>
            <p class="para">Enjoy our stuffed baby eggplant, filled with a savory mix of ingredients and baked to perfection.</p>
          </div>
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b5.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Classic Key Lime Pie </a></h5>
            <p class="para">Delight in a refreshing classic key lime pie, with a tangy lime filling and a buttery crust.</p>
          </div>
          <div class="img-box col-lg-4 col-md-6 col-sm-6">
            <img src="assets/images/b6.jpg" alt="product" class="img-responsive ">
            <h5 class="my-2"><a href="about.php">Classic Stuffed PEPPERS</a></h5>
            <p class="para">Relish the flavors of our classic stuffed peppers, filled with a hearty blend of meats and spices.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="w3l-clients" id="client">
    <div class="main-w3 text-center">
      <div class="container">
        <div class="form-right-inf">
          <div class="form-inner-cont">
            <div class="main-titles-head ">
              <h3 class="header-name white ">
                Book your Table
              </h3>
              <p class="tiltle-para  "><i>Please provide your contact information to confirm your reservation.</i></p>
            </div>
            <form action="search-results.php" method="post" class="signin-form">
              <div class="row book-form">
                <div class="form-input col-lg-6 col-md-6">
                  <input type="text" name="" placeholder="Enter Your Name" required="">
                </div>
                <div class="form-input col-lg-6 col-md-6 mt-md-0 mt-3">
                  <input type="email" name="" placeholder="Email" required="">

                </div>
                <div class="form-input col-md-4 mt-3">
                  <input type="date" name="" placeholder="Date" required="">
                </div>
                <div class="form-input col-md-4 mt-3">
                  <select class="selectpicker">
                    <option>Time</option>
                    <option>9:00 AM</option>
                    <option>10:00 AM</option>
                    <option>11:00 AM</option>
                    <option>12:00 PM</option>
                    <option>1:00 PM</option>
                    <option>2:00 PM</option>
                    <option>3:00 PM</option>
                    <option>4:00 PM</option>
                    <option>5:00 PM</option>
                    <option>6:00 PM</option>
                    <option>7:00 PM</option>
                    <option>8:00 PM</option>
                  </select>


                </div>
                <div class="form-input col-md-4  mt-3">
                  <select class="selectpicker">
                    <option>Adults</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                  </select>

                </div>
                <div class="form-input col-md-4 mt-3">
                  <select class="selectpicker">
                    <option>Children</option>
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                  </select>

                </div>
                <div class="form-input col-md-4  mt-3">
                  <select class="selectpicker">
                    <option>Table</option>
                    <option>Table 1</option>
                    <option>Table 2</option>
                    <option>Table 3</option>
                    <option>Table 4</option>
                    <option>Table 5</option>
                    <option>Table 6</option>
                    <option>Table 7</option>
                    <option>Table 8</option>
                    <option>Table 9</option>
                    <option>Table 10</option>
                  </select>
                </div>
                <div class="bottom-btn col-md-4  mt-3">
                  <button class="btn">Check Availability</button>
                </div>
              </div>



            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  require 'footer.php';
  ?>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-long-arrow-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</body>

</html>