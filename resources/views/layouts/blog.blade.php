<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title-->
    <title>@yield('title','Blog')</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!-- owl carousel css -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/owl.carousel.min.css">

    <!-- animate -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/animate.min.css">

    <!-- ionicon -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/ionicons.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/bootstrap.min.css">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/meanmenu.css">

    <!-- Style css -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/style.css">

    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('Content')}}/assets/css/responsive.css">

    <!-- Favicon  -->
    <link rel="shortcut icon" href="{{asset('Content')}}/assets/img/components/favicon.html" type="image/x-icon">
    <link rel="icon" href="{{asset('Content')}}/assets/img/components/fevicon.png" type="image/x-icon">
</head>

<body>
    <div class="giant-blog error">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-2">
                        <div class="header_logo">
                            <a href="index-2.html">
                                <img src="{{asset('Content')}}/assets/img/components/blog-logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-10">
                        <div class="mainmenu_area">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active">
                                        <a href="{{url('/home')}}">
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Posts</a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">Categories</a>
                                    </li>

                                    <li>
                                        <a href="about_us.html">About</a>
                                    </li>

                                    <li>
                                        <a href="{{url('Contact')}}">Contact</a>
                                    </li>


                                    <li>
                                        <a href="{{url('Contact')}}">Contact </a>
                                    </li>
                                </ul>
                            </nav>
                            <nav class="navbar_left">
                                <div class="search_icon">
                                    <a href="#!">
                                        <i class="ion-ios-search"></i>
                                    </a>
                                </div>
                                <div class="search_icon_hover">
                                    <form action="#!">
                                        <input type="text" placeholder="Text your....">
                                        <button>Search</button>
                                    </form>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content');
        <footer class="footer_area">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-3">
                            <div class="footer_widget">
                                <div class="brand_logo">
                                    <a href="index-2.html">
                                        <img src="{{asset('Content')}}/assets/img/components/blog-logo.png" alt="companny logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5">
                            <div class="footer_widget">
                                <h3 class="widget_title">Get in touch</h3>
                                <div class="footer_widget_content">
                                    <p>
                                        Duis autem vel eum iriure dolor
                                        hendrerit in vulputate velit esse
                                        lobortis nisl ut alquh commodo
                                        olestie consequat.
                                    </p>
                                </div>
                                <div class="social_icon footer_icon">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-facebook-outline"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-twitter-outline"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-github-outline"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-pinterest-outline"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion-social-skype-outline"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-offset-1 col-md-4 col-sm-4">
                            <div class="footer_widget">
                                <h3 class="widget_title">Popular Posts</h3>
                                <div class="sidebar_widget_body recent_post">
                                    <ul>
                                        <li>
                                            <div class="recent_post_image">
                                                <img src="{{asset('Content')}}/assets/img/footer/p-post-1.jpg" alt="recent post image">
                                            </div>
                                            <div class="recnet_post_content">
                                                <a href="#">
                                                    <h4>Sed diam nonummy euismod</h4>
                                                </a>
                                                <p><span>18 - 10 - 2016</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="recent_post_image">
                                                <img src="{{asset('Content')}}/assets/img/footer/p-post-2.jpg" alt="recent post image">
                                            </div>
                                            <div class="recnet_post_content">
                                                <a href="#">
                                                    <h4>Sed diam nonummy euismod</h4>
                                                </a>
                                                <p><span>18 - 10 - 2016</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="footer_bottom_inner">
                                <ul>
                                    <li>
                                        &copy; Copyright 2017 Giant, All Rights Reserved
                                    </li>
                                    <li>
                                        Designed by <a href="#">ThemeeBiT</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ===========================================
						==End footer==
			=========================================== -->
    </div>
    <!-- Vendor  -->
    <script src="{{asset('Content')}}/assets/js/vendor/jquery-1.12.1.min.js"></script>

    <!-- Library Min js-->
    <script src="{{asset('Content')}}/assets/js/bootstrap.min.js"></script>

    <!-- Library Min js-->
    <script src="{{asset('Content')}}/assets/js/jquery.meanmenu.min.js"></script>

    <!-- Venobox -->
    <script src="{{asset('Content')}}/assets/js/jquery.easing.min.js"></script>

    <!-- Venobox -->
    <script src="{{asset('Content')}}/assets/js/owl.carousel.min.js"></script>

    <!-- Waypoint -->
    <script src="{{asset('Content')}}/assets/js/waypoints.min.js"></script>

    <!-- Venobox -->
    <script src="{{asset('Content')}}/assets/js/wow.min.js"></script>

    <!-- Google Map -->
    <script src="../maps.googleapis.com/maps/api/js"></script>

    <!-- main js -->
    <script src="{{asset('Content')}}/assets/js/main.js"></script>
</body>

</html>
