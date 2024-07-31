<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Grill Grandeur- Contact us</title>
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body id="home">
  <?php
  require 'header.php';
  ?>
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

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
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <section class="w3l-inner-banner-main">
    <div class="about-inner contact">
      <div class="breadcrumbs-sub">
        <ul class="breadcrumbs-custom-path">
          <li class="right-side "><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a>
            <p>
          </li>
          <li class="active ">
            Contact
          </li>
        </ul>
      </div>
    </div>
    </div>
  </section>
  <section class="w3l-contact-info-main" id="contact">
    <div class="contact-sec	">
      <div class="container">
        <div class="main-titles-head">
          <h3 class="header-name ">
            Get In Touch
          </h3>
          <p class="tiltle-para ">We’d love to hear from you! Whether you have questions, feedback, or simply want to say hello, don’t hesitate to reach out. Contact us today and let’s connect!</p>
        </div>
        <div class="contact-grids d-grid">
          <div class="contact-left">
            <h4>We are here for you</h4>
            <h6>Your satisfaction is our top priority. Whether you need assistance, have questions, or simply want to share your thoughts, we’re here to support you every step of the way.
            </h6>
            <div class="hours">
              <h6 class="info mt-3 mb-1">Email:</h6>
              <p> <a href="mailto:grillgrandeur-mail@support.com">
                  grillgrandeur-mail@support.com</a></p>
              <h6 class="info mt-3 mb-1">Address:</h6>
              <p class="para"> Estate Business, #32841 block, #221DRS Real estate business building, UK.</p>
              <h6 class="info mt-3 mb-1">Contact:</h6>
              <p class="margin-top"><a href="tel:+(+(21)-255-999-8888)">+91 9324312213</a></p>
            </div>
          </div>
          <div class="contact-right">
            <form action="#" method="post" class="signin-form">
              <div class="input-grids">
                <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input">
                <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input" required="">
                <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input">
              </div>
              <div class="form-input">
                <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
              </div>
              <button class="btn btn-style btn-primary submit">Send Message</button>
            </form>
          </div>

        </div>
      </div>
      <div class="container-padding" style='height:70px'></div>
      <!-- <div class="container-fluid"> -->
      <!-- <div class="map-iframe mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
</div> -->
      <!-- </div> -->
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