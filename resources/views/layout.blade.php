<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Bloger</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('frontend/img/core-img/favicon.png')}}">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/classy-nav.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    @yield('style')

</head>

<body>

    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <div class="top-meta-data d-flex align-items-center justify-content-end">
                            <!-- Login -->
                            @if(Session::has('user'))
                            <a href="{{url('/profile')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a href="{{url('/logout')}}">Logout</a>
                            @else
                            <a href="{{url('/user/login')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a href="{{url('/register')}}">Signup</a>
                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="vizew-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">

                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="vizewNav">

                        <!-- Nav brand -->
                        <a href="{{url('/')}}" class="nav-brand text-white"><img src="{{asset('frontend/img/core-img/Blogger-Logo.png')}}"></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/')}}">- Home</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive List</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive Grid</a></li>
                                    <li><a href="{{url('/user/single_post')}}">- Single Post</a></li>
                                    <li><a href="{{url('/user/video_post')}}">- Single Video Post</a></li>
                                    <li><a href="contact.html">- Contact</a></li>
                                    <li><a href="typography.html">- Typography</a></li>
                                    <li><a href="{{url('/user/login')}}">- Login</a></li>
                                </ul>
                                </li> 
                                <li><a href="#">Features</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="{{url('/')}}">- Home</a></li>
                                <li><a href="{{url('/user/archive_list')}}">- Archive List</a></li>
                                <li><a href="{{url('/user/archive_list')}}">- Archive Grid</a></li>
                                <li><a href="{{url('/user/single_post')}}">- Single Post</a></li>
                                <li><a href="{{url('/user/video_post')}}">- Single Video Post</a></li>
                                <li><a href="contact.html">- Contact</a></li>
                                <li><a href="typography.html">- Typography</a></li>
                                <li><a href="{{url('/user/login')}}">- Login</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="{{url('/')}}">- Home</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive List</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive Grid</a></li>
                                    <li><a href="{{url('/user/single_post')}}">- Single Post</a></li>
                                    <li><a href="{{url('/user/video_post')}}">- Single Video Post</a></li>
                                    <li><a href="contact.html">- Contact</a></li>
                                    <li><a href="typography.html">- Typography</a></li>
                                    <li><a href="{{url('/user/login')}}">- Login</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="{{url('/')}}">- Home</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive List</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive Grid</a></li>
                                    <li><a href="{{url('/user/single_post')}}">- Single Post</a></li>
                                    <li><a href="{{url('/user/video_post')}}">- Single Video Post</a></li>
                                    <li><a href="contact.html">- Contact</a></li>
                                    <li><a href="typography.html">- Typography</a></li>
                                    <li><a href="{{url('/user/login')}}">- Login</a></li>
                                </ul>
                                <ul class="single-mega cn-col-4">
                                    <li><a href="{{url('/')}}">- Home</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive List</a></li>
                                    <li><a href="{{url('/user/archive_list')}}">- Archive Grid</a></li>
                                    <li><a href="{{url('/user/single_post')}}">- Single Post</a></li>
                                    <li><a href="{{url('/user/video_post')}}">- Single Video Post</a></li>
                                    <li><a href="contact.html">- Contact</a></li>
                                    <li><a href="typography.html">- Typography</a></li>
                                    <li><a href="{{url('/user/login')}}">- Login</a></li>
                                </ul>
                            </div>
                            </li> 
                            {{-- <li><a href="contact.html">Contact</a></li> --}}
                            </ul>
                        </div>
                        <!-- Nav End -->
                </div>
                </nav>
            </div>
        </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <div class="container">
        @yield('content')
    </div>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <!-- Logo -->
                        <a href="{{url('/')}}" class="foo-logo d-block mb-4">Blogger</a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                        <!-- Footer Newsletter Area -->
                        <div class="footer-nl-area">
                            <form action="#" method="post">
                                <input type="email" name="nl-email" class="form-control" id="nlEmail" placeholder="Your email">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Latest Twister</h6>
                        <!-- Twitter Slides -->
                        <div class="twitter-slides owl-carousel">

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Leonard</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                            <!-- Single Twitter Slide -->
                            <div class="single--twitter-slide">
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                                <!-- Single Twit -->
                                <div class="single-twit">
                                    <p><i class="fa fa-twitter"></i> <span>@Colorlib</span> I am so happy because I found this magazine, and it just made Vizeweasier. Thanks for sharing</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Sport Videos</h6>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/1.jpg')}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{url('/user/single_post')}}" class="post-title">DC Shoes: gymkhana the</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post d-flex">
                            <div class="post-thumbnail">
                                <img src="{{asset('frontend/img/bg-img/2.jpg')}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="{{url('/user/single_post')}}" class="post-title">Sweet Yummy Chocolatea Tea</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="footer-widget mb-70">
                        <h6 class="widget-title">Our Address</h6>
                        <!-- Contact Address -->
                        <div class="contact-address">
                            <p>101 E 129th St, East Chicago, <br>IN 46312, US</p>
                            <p>Phone: 001-1234-88888</p>
                            <p>Email: info.digitalpens@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> Blogger
                        </p>
                    </div>
                    <div class="col-12 col-sm-6">
                        {{-- <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Disclaimer</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('frontend/js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{asset('frontend/js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('frontend/js/active.js')}}"></script>
</body>

</html>