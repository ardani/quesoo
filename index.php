<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>Quesoo</title>

    <!--css-->
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/flexslider.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.theme.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.transitions.css">
    <link rel="stylesheet" href="assets/css/pace-minimal.css">
 <!--   <link rel="stylesheet" href="assets/css/jquery.selectBox.css" type="text/css">-->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico">
</head>
<body>
    <!--Container-->
    <div id="container">
        <!--header-->
        <header class="clearfix">
            <!--static navbar-->
            <div class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="#" class="navbar-brand"><!--<img src="assets/img/logo1.jpg" class="logo" alt="">--></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="drop"><a href="index.php" class="active">Home</a>
                                <ul class="drop-down">
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                </ul>
                            </li>
                            <li class="drop"><a href="index.php" class="active">Features</a>
                                <ul class="drop-down">
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                </ul>
                            </li>
                            <li class="drop"><a href="index.php" class="active">Blog</a>
                                <ul class="drop-down">
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Home Default</a></li>
                                    <li><a href="index.php"> Level 3</a>
                                        <ul class="drop-down level3">
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                            <li><a href="#">Level 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="portfolio.html">Portfolio</a>
                                <ul class="drop-down">
                                    <li><a href="portfolio.html">3 Colums</a></li>
                                    <li><a href="portfolio-4col.html">4 Colums</a></li>
                                    <li><a href="portfolio-4col-vers2.html">4 Colums - vers2</a></li>
                                    <li><a href="portfolio-5col.html">5 Colums</a></li>
                                    <li><a href="single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li><a href="#login">Sign In  <i class="fa fa-sign-in"> </i></a>
                                <ul class="drop-down">
                                    <form action="#" class="form-login">
                                        <input type="text" placeholder="Username">
                                        <input type="password" placeholder="Password">
                                        <br>
                                        <div class="col-md-6">
                                            <input type="checkbox"> Remember
                                            <a href="#"> Forget password ?</a>
                                            <a href="#"> Register</a>
                                        </div>
                                        <div class="col-md-6 right-side">
                                            <button type="submit" class="btn btn-danger btn-login right-side"> Sign In</button>
                                        </div>
                                        <hr width="100%"/>
                                        <div class="social-login">
                                            <a href="#"><img src="assets/img/1.png" alt=""></a>
                                            <a href="#"><img src="assets/img/1.png" alt=""></a>
                                            <a href="#"><img src="assets/img/1.png" alt=""></a>
                                            <a href="#"><img src="assets/img/1.png" alt=""></a>
                                        </div>
                                    </form>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!--End of Header-->

        <!--Slider-->
        <div class="flexslider" id="slider">
            <ul class="slides">
                <li>
                    <img src="assets/img/replace10.jpg" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="assets/img/replace10.jpg" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="assets/img/replace10.jpg" class="img-responsive" alt="Slider Image" />
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"></div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Slider -->

        <!--Filter-->
        <div class="container search">

            <div class="box-filter owl-backSlide-in ">
                <img class="logo1" src="assets/img/logo1.jpg" alt="">
            <div class="filter">
                <p class="title-search"> Find The Best Restaurants, Cafe, and Bars in Yogyakarta </p>
                <select class="location">
                    <option>Location</option>
                    <option>London</option>
                    <option>Paris</option>
                    <option>New York</option>
                </select>
                <input type="text" name="searchKeywords" class="search-form" placeholder="Search Keywords, Cuisine, Dish...">
                <button type="button" class="btn"><i class="fa fa-search"></i>Search</button>
            </div>
            </div>
        </div>
        <!--End of Filter-->

        <!--Collection-->
        <div class="container">
            <div class="collection">
             <div class="title-section">
                    <div class="row">
                        <h3>Collection</h3>
                        <p>Best Recommendation for your meals</p>
                    </div>
                </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label restaurant">Restaurant</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label cuisine">Chinesee</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label place">Rooftop</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label restaurant">Restaurant</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label restaurant">Restaurant</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="item">
                                <div class="item-header clearfix">
                                    <h3><a href="#">Top Restaurant This Week</a></h3>
                                    <span class="favorite"><i class="fa fa-heart"></i>9</span>
                                </div>
                                <figure>
                                    <img src="assets/img/item.png" alt="" class="img-responsive">
                                    <span class="label cuisine">Restaurant</span>
                                    <div class="overlay">
                                        <a href="#" class="btn btn-detail">Detail</a>
                                    </div>
                                </figure>
                                <div class="item-detail">
                                    <div class="left">
                                        <p>Find best restaurant to spent your quality meals</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="buttons">
                            <a class="owl-prev button-third" href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="button-third" href="#">See All Collection</a>
                            <a class="owl-next button-third" href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
            </div>


            <!-- statistik -->
            <div class="facts_wrap animated">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="clearfix row">
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/place.png" alt=""></figure>
                                        <small>Collection</small>
                                        <span data-fact="5532">0000</span>
                                    </div>
                                </li>
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/place.png" alt=""></figure>
                                        <small>Place</small>
                                        <span data-fact="2518">0000</span>
                                    </div>
                                </li>
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/avatar1.png" alt=""></figure>
                                        <small>User</small>
                                        <span data-fact="1007">0000</span>
                                    </div>
                                </li>
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/place.png" alt=""></figure>
                                        <small>Check-In</small>
                                        <span data-fact="2119">0000</span>
                                    </div>
                                </li>
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/place.png" alt=""></figure>
                                        <small>Photo</small>
                                        <span data-fact="1020">000</span>
                                    </div>
                                </li>
                                <li class="counter col-md-2 col-sm-3">
                                    <div>
                                        <figure><img src="assets/img/place.png" alt=""></figure>
                                        <small>Review</small>
                                        <span data-fact="1122">000</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!--fact-wraps -->

            <!--location -->
            <div class="container">
                    <div class="title-section">
                        <div class="row">
                            <h3>Location</h3>
                            <p>Find Specific information by Location you choose</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="panel panel-default">
                            <div class="location">
                                <div class="row">
                                    <div class="col-md-4">
                                        <p> <a href="#">Jogjakarta Utara (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Selatan (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Barat (19879)</a></p>
                                        <p> <a href="#">Jogjakarta Timur (187678)</a></p>
                                        <p> <a href="#">Bantul (187678)</a></p>
                                        <p> <a href="#">Kulon Progo (187678)</a></p>
                                        <p> <a href="#">Kaliurang (187678)</a></p>
                                        <p> <a href="#">Malioboro (187678)</a></p>
                                        <p> <a href="#">Sleman (187678)</a></p>
                                        <p> <a href="#">Gamping (187678)</a></p>

                                    </div>
                                    <div class="col-md-4">
                                        <p> <a href="#">Jogjakarta Utara (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Selatan (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Barat (19879)</a></p>
                                        <p> <a href="#">Jogjakarta Timur (187678)</a></p>
                                        <p> <a href="#">Bantul (187678)</a></p>
                                        <p> <a href="#">Kulon Progo (187678)</a></p>
                                        <p> <a href="#">Kaliurang (187678)</a></p>
                                        <p> <a href="#">Malioboro (187678)</a></p>
                                        <p> <a href="#">Sleman (187678)</a></p>
                                        <p> <a href="#">Gamping (187678)</a></p>
                                    </div>
                                    <div class="col-md-4">
                                        <p> <a href="#">Jogjakarta Utara (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Selatan (1890)</a></p>
                                        <p> <a href="#">Jogjakarta Barat (19879)</a></p>
                                        <p> <a href="#">Jogjakarta Timur (187678)</a></p>
                                        <p> <a href="#">Bantul (187678)</a></p>
                                        <p> <a href="#">Kulon Progo (187678)</a></p>
                                        <p> <a href="#">Kaliurang (187678)</a></p>
                                        <p> <a href="#">Malioboro (187678)</a></p>
                                        <p> <a href="#">Sleman (187678)</a></p>
                                        <p> <a href="#">Gamping (187678)</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!-- Landmark -->
            <div class="container">
                <div class="title-section">
                    <div class="row">
                        <h3>Landmark</h3>
                        <p>Get Easy to the Landmark</p>
                    </div>
                </div>

                <div class="row">
                    <div class="panel panel-default">
                        <div class="landmark">
                            <div id="owl-demo" class="owl-carousel owl-theme">

                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""> <p>Galleria Mall</p></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""><p>Hartono Jogja Mall</p></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""><p>Sahid JwWalks Mall</p></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""><p>Galleria Jogja Mall</p></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""><p>Lippo Plaza Mall</p></a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="assets/img/thumbnail.jpg" alt="Owl Image">
                                    <div class="caption-landmark">
                                        <a href=""><p>Ambarukmo Plaza Mall</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Review Share -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="title-section">
                            <h3>Top Reviewers</h3>
                            <p>Here we go, Best reviewer this week</p>
                        </div>
                        <div class="top">
                            <ul class="list-group">
                                <li class="list-group-item clearfix">
                                    <img src="assets/img/avatar1.png" alt="">
                                    <div class="about">
                                        <div class="name">Andromeda Galaxy</div>
                                        <div class="status"><i class="fa fa-circle"></i> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title-section">
                            <h3>Top Photographers</h3>
                            <p>The man behind the photo scene</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="title-section">
                            <h3>Top Foodys Blogger</h3>
                            <p>Share your mood, share your food</p>
                        </div>
                    </div>
                </div>
            </div>


        </div><!-- container pertama -->



    <!--JS-->

    <script src="assets/js/jquery-2.1.1.js"  type="text/javascript"></script>
    <script src="assets/js/jquery-ui.js"  type="text/javascript"></script>
    <script src="assets/js/jquery.flexslider.js" type="text/javascript"></script>
   <!-- <script src="assets/js/jquery.selectBox.min.js" type="text/javascript"></script>-->
    <script src="assets/js/bootstrap.js" type="text/javascript"></script>
    <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="assets/js/counter.animation.js" type="text/javascript"></script>
    <script src="assets/js/jquery.appear.js" type="text/javascript"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>


    <script>
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide"
            });
        });
    </script>
    <script>
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({

                autoPlay: 3000, //Set AutoPlay to 3 seconds

                items : 4,
                itemsDesktop : [1199,3],
                itemsDesktopSmall : [979,3]

            });

        });
    </script>
</body>
</html>