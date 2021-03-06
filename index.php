<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food | Website</title>
    <!-- --------owl carsole css link-------- -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- -----link fontawesome-------- -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- -------link bootstrap css--------- -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- grid CSS -->
     <link rel="stylesheet" href="css/grid.css">
    <!-- ---------link local css---------- -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="nav-class">
        <a href="#" class="logo"><i class="fas fa-utensils"></i>Resto.</a>
        <nav class="nav-bar">
            
                <a class=".nav-item active" href="#">home</a>
                <a href="#" class=".nav-item" data-scroll-nav="0">dishes</a>
                <a class=".nav-item" href="#" data-scroll-nav="1">about</a>
                <a class=".nav-item" href="#" data-scroll-nav="2">menu</a>
                <a class=".nav-item" href="#" data-scroll-nav="3">review</a>
                <a class=".nav-item" href="#" data-scroll-nav="4">order</a>
            </ul>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" onclick="openNav()" id="menu-bars"></i>
            <i class="fas fa-search"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
            
        </div>
        </div>
        <div class="mobile-menu">
            
            <div id="mynav" class="overlay">
                <a class='close-btn' onclick='closeNav()' href="javascript:void(0)">&times;</a>
                <div class="overlay-content">
                    <a onclick='closeNav()' href="#">home</a>
                    <a onclick='closeNav()' href="#">dishes</a>
                    <a onclick='closeNav()' href="#">about</a>
                    <a onclick='closeNav()' href="#">menu</a>
                    <a onclick='closeNav()' href="#">review</a>
                    <a onclick='closeNav()' href="#">order</a>
                    
                </div>

            </div>
        </div>
    </header>
    <!-- nav-section end -->

    <!-- --header section start------- -->
    <header class="header-section sec-padding" data-scroll-index="0">
        <div class="container">
            <div class="row col-lg-12">
                <div class="owl-carousel features-carousel">
                    <div class="row align-items-center swiper-slide">
                        <div class="col-md-6 col-lg-6 header-text">
                            <h4>our special dish</h4>
                            <h1>Spicy noodles</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, beatae.</p>
                            <a href="" class="btn btn-implement">order now</a>
                
                        </div>
                        <div class="col-md-6 col-lg-6 header-img">
                            <img src="images/home-img-1.png" alt="">
                        </div>
                    </div>
                    <div class="row align-items-center swiper-slide">
                        <div class="col-md-6 col-lg-6 header-text">
                            <h4>our special dish</h4>
                            <h1>fried chicken</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, beatae.</p>
                            <a href="" class="btn btn-implement">order now</a>
                
                        </div>
                        <div class="col-md-6 col-lg-6 header-img">
                            <img src="images/home-img-2.png" alt="">
                        </div>
                    </div>
                    <div class="row align-items-center swiper-slide">
                        <div class="col-md-6 col-lg-6 header-text">
                            <h4>our special dish</h4>
                            <h1>hot pizza</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, beatae.</p>
                            <a href="#" class="btn btn-implement">order now</a>
                
                        </div>
                        <div class="col-md-6 col-lg-6 header-img">
                            <img src="images/home-img-3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- header section end -->

    <!-- -------dishes section start----------  -->
    <section class="dishes-section sec-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2 data-title="our dishes">popular dishes</h2>
                </div>
            </div>
            <!-- <div class="row"> -->
                <div class="box-container">
                <div class="dishes-item">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="images/dish1.png" alt="dish 1">
                    <h3>tasty food</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        

                    </div>
                    <span>$15.99</span>
                    <a href="#" class="btn btn-implement">add to card</a>
                </div>
            
            <div class="dishes-item">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish2.png" alt="dish 2">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    

                </div>
                <span>$15.99</span>
                <a href="#" class="btn btn-implement">add to card</a>
            </div>
            <div class="dishes-item">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish3.png" alt="dish 3">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    

                </div>
                <span>$15.99</span>
                <a href="#" class="btn btn-implement">add to card</a>
            </div>
            <div class="dishes-item">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish4.png" alt="dish 4">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    

                </div>
                <span>$15.99</span>
                <a href="#" class="btn btn-implement">add to card</a>
            </div>
            <div class="dishes-item">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish5.png" alt="dish 5">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    

                </div>
                <span>$15.99</span>
                <a href="#" class="btn btn-implement">add to card</a>
            </div>
            <div class="dishes-item">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="images/dish6.png" alt="dish 6">
                <h3>tasty food</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    

                </div>
                <span>$15.99</span>
                <a href="#" class="btn btn-implement">add to card</a>
            </div>
            
        </div>
        </div>
    </section>
    <!-- -------dishes section end---------- - -->

    <!---- -------Choose section start -->
    <section class="choose-section sec-padding" data-scroll-index="2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="section-title">
                    <h2 data-title="about us">why choose us?</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-md-6 choose-pic-sec">
                    <img src="images/about-img.png" alt="about us">
                </div>
                <div class="col-md-6 choose-text-sec">
                    <h2>best food in the country</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe praesentium totam deleniti tempore, veritatis consequatur nemo suscipit dignissimos aut quas.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, fuga!</p>
                    <div class="icon-container">
                        <div class="about-btn">
                            <i class="fas fa-shipping-fast"></i>
                            <span>Free Delivery</span>
                        </div>
                        <div class="about-btn">
                            <i class="fas fa-dollar-sign"></i>
                            <span>Easy Payments</span>
                        </div>
                        <div class="about-btn">
                            <i class="fas fa-headset"></i>
                            <span>24/7 Service</span>
                        </div>
                    </div>
                    
                    <a href="#" class="btn btn-implement">learn more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- -------Choose section end -->


    <!-- ------link jequery----- -->
    <script src="js/jaquery.min.js"></script>
    <!-- -----------link bootstrap js--------- -->
    <script src="js/bootstrap.min.js"></script>
    <!-- --link owel--- -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- ---------link local js --------- -->
    <script src="js/main.js"></script>
</body>
</html>