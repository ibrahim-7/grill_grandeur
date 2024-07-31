
<!--
   Author: W3layouts
   Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Grill Grandeur-About us</title>

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
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
  
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
  
	//Main navigation Active Class Add Remove
	$(".navbar-toggler").on("click", function () {
	  $("header").toggleClass("active");
	});
	$(document).on("ready", function () {
	  if ($(window).width() > 991) {
		$("header").removeClass("active");
	  }
	  $(window).on("resize", function () {
		if ($(window).width() > 991) {
		  $("header").removeClass("active");
		}
	  });
	});
  </script>
  <!--//MENU-JS-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->


<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side "><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                    <li class="active ">About</li>
                </ul>
            </div>
</div>

   </div>
    </section>
<!-- breadcrumbs //-->

<section class="w3l-content-with-photo-4"  id="about">
    <div class="content-with-photo4-block ">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name ">
					Why we are Best
                </h3>
                <p class="tiltle-para  ">Experience excellence with our commitment to quality, innovative flavors, and exceptional service. We strive to exceed your expectations every time you dine with us.</p>
            </div>
            <div class="row">

                <div class="my-bio col-lg-5">
                    <h3>Best Restaurant food ideas & traditions from the whole world</h3>
                <p class="para mb-3">At our restaurant, we take pride in offering a menu inspired by the rich culinary traditions and innovative food ideas from around the globe. We believe that great food tells a story, and we’re dedicated to bringing you the best of every culture, from the spicy street foods of Southeast Asia to the refined elegance of Mediterranean cuisine. Our chefs skillfully blend traditional recipes with modern techniques to create dishes that are both authentic and uniquely our own. </p> 
        
            </div>
            <div class="col-lg-7">
                <div class="foot-best">
                <img src="assets/images/b7.jpg" alt="product" class="img-responsive about-me">
                <img src="assets/images/b8.jpg" alt="product" class="img-responsive about-me">
            </div>
            </div>
            </div>
    </div>
</div>
</section>
<section class="w3l-stats">
  <div class="main-w3 ">
      <div class="container">
          <div class="row align-items-center">

              <div class="col-lg-6 main-cont-wthree-fea text-center">
                  <div class="row">
                      <div class="col-6 pr-2">
                          <div class="grids-speci1">
                              <span class="fa fa-smile-o"></span>
                              <h3 class="title-spe">1200+</h3>
                              <p>Happy Clients</p>
                          </div>
                      </div>
                      <div class="col-6 pl-2">
                          <div class="grids-speci1">
                              <span class="fa fa-cutlery"></span>
                              <h3 class="title-spe">25+</h3>
                              <p>Resturant</p>
                          </div>
                      </div>
                      <div class="col-6 pr-2 mt-4">
                          <div class="grids-speci1">
                              <span class="fa fa-users"></span>
                              <h3 class="title-spe">85+</h3>
                              <p>Chefs</p>
                          </div>
                      </div>
                      <div class="col-6 pl-2 mt-4">
                          <div class="grids-speci1">
                              <span class="fa fa-comments"></span>
                              <h3 class="title-spe">575+</h3>
                              <p>Dishes</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 title">
                <h3 class="title-big">Best luxury Food in India.Cutlery Resturant since 2005.</h3>
                <p class="mt-4 para">Discover the epitome of fine dining at Cutlery Restaurant, a beacon of luxury food in India since 2005. Renowned for our exquisite culinary creations and impeccable service, we offer a sophisticated dining experience that combines tradition with modern elegance. Our menu features a curated selection of gourmet dishes, crafted from the finest ingredients and inspired by global cuisine. At Cutlery Restaurant, every meal is an opportunity to indulge in luxury, where every detail, from our meticulously set tables to our attentive staff, is designed to provide an unparalleled dining experience. Join us and savor the artistry of high-end cuisine in an ambiance of refined comfort.</p>
            </div>
          </div>

      </div>
  </div>
</section>
<section class="w3l-recent-work">
	<div class="jst-two-col">
		<div class="container">
<div class="row">

	<div class="my-bio col-lg-6">
		<h3>We Deliver Good Food
			Offer Great Smile</h3>
	<p class="para mb-3">At Cutlery Restaurant, we take pride in not only serving exceptional food but also delivering it with a genuine smile. Our commitment to excellence extends beyond the plate, ensuring that every interaction is as delightful as the meal itself.</p> 
	<a href="about.php" class="action-button btn mt-3">Read more</a>
</div>
<div class="col-lg-6 ">
	<img src="assets/images/b4.jpg" alt="product" class="img-responsive about-me">
</div>
</div>
		</div>
	</div>
</section>
<section class="w3l-team-main-6" id="team">
	<!-- /team-grids -->
	<div class="team-content-page  ">

		<div class="container">
			<div class="main-titles-head ">
                <h3 class="header-name ">
					Our Food Magician
                </h3>
                <p class="tiltle-para  ">Meet our culinary maestro, the genius behind our extraordinary dishes. With a blend of creativity, skill, and passion, our food magician transforms simple ingredients into unforgettable culinary experiences. Every plate is a masterpiece, crafted with precision and flair to delight your senses and elevate your dining experience.</p>
            </div>
			<div class="row main-contteam-29">
				<div class="team-main-29 col-md-4 text-center">
					<div class="column-29">
						<a href="team-single.php">
							<img class="img-responsive" src="assets/images/t1.jpg" alt=" ">
						</a>
						<div class="right-team-9">
							<h6><a href="team-single.php" class="title-team-29">Ishaq Jadeed</a></h6>
							<p class="sm-text-29">Head Chef</p>
						</div>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						</ul>
					</div>
				   
				</div>
				<div class="team-main-29 col-md-4 mt-md-0 mt-4 text-center">
					<div class="column-29">
						<a href="team-single.php">
							<img class="img-responsive" src="assets/images/t2.jpg" alt=" ">
						</a>
						<div class="right-team-9">
							<h6><a href="team-single.php" class="title-team-29">Wasim Khan</a></h6>
							<p class="sm-text-29">Head Chef</p>
						</div>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						</ul>
					</div>
				   
				</div>
				<div class="team-main-29 col-md-4 mt-md-0 mt-4 text-center">
					<div class="column-29">
						<a href="team-single.php">
							<img class="img-responsive" src="assets/images/t3.jpg" alt=" ">
						</a>
						<div class="right-team-9">
							<h6><a href="team-single.php" class="title-team-29">Ilyas Shaikh</a></h6>
							<p class="sm-text-29">Head Chef</p>
						</div>
						<ul class="social">
							<li><a href="#"><span class="fa fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter-square"></span></a></li>
							<li><a href="#"><span class="fa fa-linkedin-square"></span></a></li>
						</ul>
					</div>
					
				</div>
			 </div>
		  </div>
	</div>
	<!-- /team-grids -->
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
	window.onscroll = function () {
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
