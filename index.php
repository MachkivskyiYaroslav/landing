<?php
	// Основные константы, которые можно менять, исходя из надобности
	$meta->title = ''; // МЕТА Заголовок
	$meta->desc = ''; // МЕТА описание
	$meta->key = ''; // МЕТА Ключевые слова
	
	require "./assets/less/lessc.inc.php";
	
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";

	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }

	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);

	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}

	autoCompileLess('./css/styles.less' , './css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.js"></script>
        <script src="assets/js/scroll.js"></script>
        <script src="assets/js/parallax.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                $("nav ul").toggleClass("showing");
            });
        });
        $(window).on("scroll", function() {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.slider').bxSlider({
                auto: true,
                autoControls: false,
                stopAutoOnClick: true,
                pager:  true,
                controls:false,
                slideWidth: 600,
                adaptiveHeight: true
            });
        });
        $(document).ready(function(){
    $(window).resize(function(){
        console.log($(window).width());
        if($(window).width() <= 600){
           $('.slider').bxSlider();
        }
    });
});
    </script>

    <body>
        <div class="wrapper">
            <header class="section-1">
                <nav>
                    <div class="menu-icon">
                        <i class="fa fa-bars fa-2x"></i>
                    </div>
                    <div class="logo">
                        PUREFIVE
                    </div>
                    <div class="menu">
                        <ul>
                            <li><a href="">HOME</a></li>
                            <li><a href="">ABOUT</a></li>
                            <li><a href="">MENU</a></li>
                            <li><a href="">CONTACT</a></li>
                            <li class="header-divider"><a href=""><span></span></a></li>
                            <li><a href=""><i class="fa fa-map-marker" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>



                </nav>
                <div class="header-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="logo-restaraunt">
                                    <img src="images/reastaurant-logo.png" alt="">
                                </div>
                                <div class="logo-text">
                                    Wide Array Of Options
                                </div>
                                <div class="reserved">
                                    <a href="" class="reserved-link">RESERVE A TABLE</a>
                                    <a href="" class="buy-gift">BUY A GIFT CARD</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="play-bottom">
                        <div class="line-1">
                            <span class="line-text">1049 Park Ave</span>
                            <a href=""> <i class="fa fa-play" aria-hidden="true"></i></a>
                            <span class="line-text">New York 10028</span>
                        </div>
                        <div class="line-2">
                            <ul>
                                <li><a href="">TRIPADVISOR</a></li>
                                <li><a href="">TIMEOUT</a></li>
                                <li><a href="">HELP</a></li>
                                <li><a href="">MORE REVIEWS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <div class="section-2">
                <div class="container">
                    <div class="content-1">
                        <div class="col-sm-5 left">
                            <h1 class="restaraunt-font">
                                Some of our <br> featerued dishes <br> this week
                            </h1> <br>
                            <h3>Our restaurant serves some of the best food in town!</h3>
                        </div>
                        <div class="col-sm-offset-1 col-sm-6 right">
                            <img src="images/featured-1.png" alt="">
                        </div>
                    </div>
                    <div class="content-2">
                        <div class="top">
                            <div class="col-sm-3 top-food"><img src="images/salats/1.png" alt=""><br>
                                <h3 class="text-food">Sallad Ninja <br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$18</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/2.png" alt=""><br>
                                <h3 class="text-food">Sour Chicken<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$21</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/3.png" alt=""><br>
                                <h3 class="text-food">Fried Chicken<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$16</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/4.png" alt=""><br>
                                <h3 class="text-food">Savore Sallad<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$12</h3>
                            </div>
                        </div>
                        <div class="top top-padding">
                            <div class="col-sm-3 top-food"><img src="images/salats/1.png" alt=""><br>
                                <h3 class="text-food">Sallad Ninja <br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$18</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/2.png" alt=""><br>
                                <h3 class="text-food">Sour Chicken<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$21</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/3.png" alt=""><br>
                                <h3 class="text-food">Fried Chicken<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$16</h3>
                            </div>
                            <div class="col-sm-3 top-food"><img src="images/salats/4.png" alt=""><br>
                                <h3 class="text-food">Savore Sallad<br><img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <h3 class="price">$12</h3>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <div class="section-3 parallax">
                <div class="container pt-60 pb-40">
                    <div class="row">
                        <div class="col-md-12 scroll">
                            <h1 class="restaraunt-font white">
                                Reserve Your Table Now!
                            </h1>
                            <h5 class="whites">
                                Delicious Foods You Must Try

                            </h5>
                            <a href="" class="btn">RESERVE NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-4">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header">
                                <h3>Our Menus</h3>
                                <h5>DELICIOUS</h5>
                                <img src="images/salats/underline.png" class="underline" alt="">
                                <p>Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. <br>Cras neque nulla, convallis non commodo et, euismod nonsese. </p>
                            </div>
                        </div>
                        <div class="col-sm-12 menu">
                            <div class="content">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Lunch</a></li>
                                    <li><a href="#tab2" data-toggle="tab">Salads</a></li>
                                    <li><a href="#tab3" data-toggle="tab">Dessert</a></li>
                                    <li><a href="#tab4" data-toggle="tab">Diner</a></li>
                                    <li><a href="#tab5" data-toggle="tab">Snacks</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <div class="row">
                                            <div class="col-sm-6 left">
                                                <div class="info">
                                                    <div class="image"><img src="images/menu/menu-1.jpg" alt="">
                                                    </div>
                                                    <div class="text">Shellfish & Stew <br> <span class="ingrid">AlbacoreTona,Cucumber,Limes</span>
                                                        <p class="price">12$</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 right">
                                                <div class="info">
                                                    <div class="image"><img src="images/menu/menu-1.jpg" alt="">
                                                    </div>
                                                    <div class="text">Shellfish & Stew <br> <span class="ingrid">AlbacoreTona,Cucumber,Limes</span>
                                                        <p class="price">12$</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                    <div class="tab-pane" id="tab2">
                                        <div class="col-sm-6 left">
                                            <div class="info">
                                                <div class="image"><img src="images/menu/menu-1.jpg" alt="">
                                                </div>
                                                <div class="text">Shellfish & Stew <br> <span class="ingrid">AlbacoreTona,Cucumber,Limes</span>
                                                    <p class="price">12$</p>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="col-sm-6 right">
                                            <div class="info">
                                                <div class="image"><img src="images/menu/menu-1.jpg" alt="">
                                                </div>
                                                <div class="text">Shellfish & Stew <br> <span class="ingrid">AlbacoreTona,Cucumber,Limes</span>
                                                    <p class="price">12$</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <p>Хей, я 3-я секция.</p>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <p>Хей, я 4-я секция.</p>
                                    </div>
                                    <div class="tab-pane" id="tab5">
                                        <p>Хей, я 5-я секция.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="blog">
                                <h1>News & Views</h1>
                                <h3>RESTARAUNT BLOG<br>
                                    <img src="images/salats/underline.png" class="underline" alt=""></h3>
                                <p>Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. <br> Cras neque nulla, convallis non commodo et, euismod nonsese.</p>
                            </div>
                        </div>
                        <div class="col-sm-4 display">
                            <a href="">
                                <div class="box box-hover">
                                    <h5>HOW TO</h5>
                                    <h3 class="restaraunt-font">
                                        Restaurant StartUp
                                    </h3>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet isse potenti. <br> Vesquam ante aliquet lacusemper elit. Cras <br>neque nulla, Cras neque nulla et...
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 display">
                            <a href="">
                                <div class="box box-hover">
                                    <h5>TIPS & TRICKS</h5>
                                    <h3 class="restaraunt-font">
                                        This Week Finds
                                    </h3>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet isse potenti. <br> Vesquam ante aliquet lacusemper elit. Cras <br>neque nulla, Cras neque nulla et...
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 display">
                            <a href="">
                                <div class="box box-hover">
                                    <h5>RECIPES</h5>
                                    <h3 class="restaraunt-font">
                                        Sweet and Sour
                                    </h3>
                                    <p class="text">
                                        Lorem ipsum dolor sit amet isse potenti. <br> Vesquam ante aliquet lacusemper elit. Cras <br>neque nulla, Cras neque nulla et...
                                    </p>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
            <div class="section-6">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="header">
                                <h3>Reviews and Ratings</h3>
                                <h5>WHAT THEY SAY <br><img src="images/salats/underline.png" class="underline" alt=""></h5>
                            </div>
                            </div>
                       
                           
                    </div>
                </div>
                     <div class="col-md-12 center">
                                 <div class="slider">
                                <div> <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, rerum deleniti suscipit sunt ipsa! Quasi quam quod quas laborum? Fugit quo esse accusantium doloremque nam quos voluptates aliquam vero sit. <br>
                                <img src="images/quotes-color.png" alt="">
                                </div>
                                </div>
                                <div><div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iusto unde vel culpa repudiandae! Nisi fugit culpa repellendus sunt minus reiciendis. Quam illum consequuntur rem rerum quia impedit quidem, atque!<br>
                                <img src="images/quotes-color.png" alt=""></div></div>
                        </div>
                            </div>
            </div>
            <div class="section-7">
                <div class="container"><div class="row">
                    <div class="col-sm-12 center">
                        <h3>Book A Table</h3>
                        <h5>GET IN TOUCH<br><img src="images/salats/underline.png" class="underline" alt=""></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Accusamus reprehenderit in doloribus soluta, quasi aliquid culpa magnam <br> </p>
                    </div>
                </div></div>
                <div class="col-sm-12">
                <div class="image col-sm-6"><img src="images/featured-1.png" alt=""></div>
                <div class="form col-sm-4">
                    
                    <div class="reserv ">
                        <form method="post" action="" name="contactform" id="contactform">
                            <fieldset>
                                <input name="name" type="text" id="name" placeholder="Name">
                                <input name="email" type="text" id="email" placeholder="Email">
                                <input name="subject" type="text" id="subject" placeholder="Guest Number">
                                <input type="datetime-local" name="created">
                                <input type="submit" class="submit" id="submit" value="RESERVE A TABLE">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>

    </html>