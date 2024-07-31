<!doctype html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Grill Grandeur - Menu</title> 
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
	$(window).on("scroll", function () {
	  var scroll = $(window).scrollTop();
	  if (scroll >= 80) {
		$("#site-header").addClass("nav-fixed");
	  } else {
		$("#site-header").removeClass("nav-fixed");
	  }
	});
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
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>  
<section class="w3l-inner-banner-main">
    <div class="about-inner services ">
        <div class="container">   
        <div class="breadcrumbs-sub">
            <ul class="breadcrumbs-custom-path">
                <li class="right-side "><a href="index.php" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
                <li class="active ">Menu</li>
            </ul>
        </div>
    </div>
</div>
</section> 
<section class="w3l-recent-work-hobbies" id="services"> 
    <div class="recent-work">
        <div class="container">
            <div class="main-titles-head">
                <h3 class="header-name">
					Our Main Menu
                </h3>
                <p class="tiltle-para">Explore our carefully crafted main menu, featuring a diverse selection of dishes designed to satisfy every palate and elevate your dining experience.</p>
            </div>
            <div class="menu-body"> 
                <div class="menu-section">
                    <h3 class="menu-section-title">Breakfast </h3> 
                    <div class="appetizers"> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pasta with fish</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1900</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Delicious pasta paired with fresh fish, offering a rich and satisfying flavor experience.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Fresh meat</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1300</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Tender and juicy fresh meat, expertly prepared to deliver a hearty meal.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Big vegetarian soup</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1000</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A generous bowl of nourishing vegetarian soup, brimming with fresh ingredients and robust flavors.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Crazy Pasta</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹800</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">An affordable option featuring flavorful pasta and succulent fish, perfect for a quick, satisfying meal.</p>
                        </div>
                    </div> 
                </div> 
                </div> 
                <div class="menu-section">
                    <h3 class="menu-section-title">Main Courses
                    </h3> 
                    <div class="appetizers"> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Burger Meal</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹2300</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A classic burger served with all the fixings and a side of crispy fries.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pan Seared Sea Bass</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹2100</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Perfectly pan-seared sea bass, delivering a light yet rich taste with a touch of elegance.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>King Prawns And Lobster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1300</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Savory king prawns and lobster, showcasing a luxurious seafood dish.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Citrus Cured Salmon</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1350</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Salmon cured with citrus, offering a fresh and tangy flavor profile.</p>
                        </div>
                    </div> 
                </div> 
                </div> 
                <div class="menu-section">
                    <h3 class="menu-section-title">Chicken</h3> 
                    <div class="appetizers"> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Smoked Brisket Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1220</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A smoky and flavorful brisket sandwich, served on fresh bread for a satisfying bite.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Pulled Chicken Sandwich</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1580</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Tender pulled chicken in a hearty sandwich, perfect for a hearty meal.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Canada Dry Ginger Ale</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹2300</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A refreshing ginger ale, ideal for complementing your meal.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Peanutty Blast Smoothie</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹2350</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A rich and creamy smoothie with a delightful peanut flavor.</p>
                        </div>
                    </div>    
                </div> 
                </div> 
                <div class="menu-section">
                    <h3 class="menu-section-title">Desserts
                    </h3> 
                    <div class="appetizers"> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Bananas Foster</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1950</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A classic dessert featuring caramelized bananas, served with a touch of warmth and sweetness.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Cream Cheesecake</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1000</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">Indulge in a creamy and smooth cheesecake, a timeless dessert favorite.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Caramel Ice Cream</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1500</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A rich caramel ice cream, offering a decadent and cooling treat.</p>
                        </div>
                    </div> 
                    <div class="menu-item">
                        <div class="row border-dot no-gutters">
                            <div class="col-8 menu-item-name">
                                <h6>Lemon Meringue Pie</h6>
                            </div>
                            <div class="col-4 menu-item-price text-right">
                                <h6>₹1800</h6>
                            </div>
                        </div>
                        <div class="menu-item-description">
                            <p class="para">A tangy lemon meringue pie with a light, fluffy topping and a buttery crust.</p>
                        </div>
                    </div> 
                </div> 
                </div> 
            </div>
        </div>
    </div>
</section>
<section class="w3l-services-two" id="services">
    <div class="service-single-page ">
        <div class="container">
            <div class="gallery-image row">
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b2.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a>Coconut Chicken and Rice</a></h5>
                <p class="para">Savor the rich flavors of tender chicken and fragrant coconut rice, a perfect blend of tropical goodness.</p>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b1.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a>Garlic Roast Chicken</a></h5>
                <p class="para">Indulge in our savory garlic roast chicken, seasoned to perfection and roasted for a deliciously crispy finish.</p>
              </div>
              <div class="img-box col-lg-4 col-md-6">
                <img src="assets/images/b3.jpg" alt="product" class="img-responsive ">
                <h5 class="my-2"><a >Butter pecan caramel</a></h5>
                <p class="para">Treat yourself to a decadent dessert featuring buttery pecans and smooth caramel, a true delight for your taste buds.</p>
                </div>
                </div>
    </div>
</div>
</section>
<?php
require 'footer.php';
?> 
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script> 
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
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script> 
</body>

</html>
