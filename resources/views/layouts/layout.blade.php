<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/questions-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 10:58:43 GMT -->
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Disilab -  Social Questions and Answers HTML Template</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-te-1.4.0.css') }}">
    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/upvotejs.min.css') }}">
    @livewireStyles
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div id="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<header class="header-area bg-white shadow-sm">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
                <div class="logo-box">
                    <a href="index.html" class="logo"><img src="{{ asset('images/logo-black.png') }}" alt="logo"></a>
                    <div class="user-action">
                        <div class="search-menu-toggle icon-element icon-element-xs shadow-sm mr-1" data-toggle="tooltip" data-placement="top" title="Search">
                            <i class="la la-search"></i>
                        </div>
                        <div class="off-canvas-menu-toggle icon-element icon-element-xs shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                            <i class="la la-bars"></i>
                        </div>
                    </div>
                </div>
            </div><!-- end col-lg-2 -->
            <div class="col-lg-10">
                <div class="menu-wrapper border-left border-left-gray pl-4 justify-content-end">
                    <nav class="menu-bar mr-auto menu--bar">
                        <ul>
                            <li>
                                <a href="#">Home <i class="la la-angle-down fs-11"></i></a>
                                <ul class="dropdown-menu-item">
                                    <li><a href="index.html">Home - landing</a></li>
                                    <li><a href="home-2.html">Home - main</a></li>
                                    <li><a href="home-3.html">Home - layout 2 <span class="badge bg-warning text-white">New</span></a></li>
                                </ul>
                            </li>
                            <li class="is-mega-menu">
                                <a href="#">pages <i class="la la-angle-down fs-11"></i></a>
                                <div class="dropdown-menu-item mega-menu">
                                    <ul class="row">
                                        <li class="col-lg-3">
                                            <a href="user-profile.html">user profile</a>
                                            <a href="notifications.html">Notifications</a>
                                            <a href="referrals.html">Referrals</a>
                                            <a href="setting.html">settings</a>
                                            <a href="ask-question.html">ask question</a>
                                            <a href="question-details.html">question details</a>
                                            <a href="about.html">about</a>
                                            <a href="revisions.html">revisions</a>
                                            <a href="category.html">category</a>
                                            <a href="companies.html">companies</a>
                                            <a href="company-details.html">company details</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="careers.html">careers</a>
                                            <a href="career-details.html">career details</a>
                                            <a href="contact.html">contact</a>
                                            <a href="faq.html">FAQs</a>
                                            <a href="pricing-table.html">pricing tables</a>
                                            <a href="error.html">page 404</a>
                                            <a href="terms-and-conditions.html">Terms & conditions</a>
                                            <a href="privacy-policy.html">privacy policy</a>
                                            <a href="cart.html">cart</a>
                                            <a href="talent.html">talent</a>
                                            <a href="advertising.html">advertising</a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="free-demo.html">free demo</a>
                                            <a href="checkout.html">checkout</a>
                                            <a href="wishlist.html">wishlist</a>
                                            <a href="login.html">login</a>
                                            <a href="login-2.html">login 2</a>
                                            <a href="signup.html">sign up</a>
                                            <a href="signup-2.html">sign up 2</a>
                                            <a href="recover-password.html">recover password</a>
                                            <a href="questions-layout-2.html">questions layout 2 <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-full-width.html">questions full-width <span class="badge bg-warning text-white">New</span></a>
                                            <a href="questions-left-sidebar.html">questions left sidebar <span class="badge bg-warning text-white">New</span></a>
                                        </li>
                                        <li class="col-lg-3">
                                            <a href="questions-right-sidebar.html">questions right sidebar <span class="badge bg-warning text-white">New</span></a>
                                            <a href="user-list.html">user list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="category-list.html">category list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="tags-list.html">tags list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="add-post.html">add post <span class="badge bg-warning text-white">New</span></a>
                                            <a href="badges-list.html">Badges list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="job-list.html">job list <span class="badge bg-warning text-white">New</span></a>
                                            <a href="error-2.html">page 404 2 <span class="badge bg-warning text-white">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#">blog <i class="la la-angle-down fs-11"></i></a>
                                <ul class="dropdown-menu-item">
                                    <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                    <li><a href="blog-single.html">blog detail</a></li>
                                </ul>
                            </li>
                        </ul><!-- end ul -->
                    </nav><!-- end main-menu -->
                    <form method="post" class="mr-2">
                        <div class="form-group mb-0">
                            <input class="form-control form--control h-auto py-2" type="text" name="search" placeholder="Type your search words...">
                            <button class="form-btn" type="button"><i class="la la-search"></i></button>
                        </div>
                    </form>
                    @if (auth()->check())
                        <div class="dropdown">
                            <button class="btn theme-btn theme-btn-sm theme-btn-outline mr-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ auth()->user()->name }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Account</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
                            </div>
                        </div>
                    @else
                        <div class="nav-right-button">
                            <a href="{{ route('user.login.page') }}" class="btn theme-btn theme-btn-sm theme-btn-outline mr-1">Log in</a>
                            <a href="{{ route('user.signup.page') }}" class="btn theme-btn theme-btn-sm">Sign up</a>
                        </div>
                    @endif
                </div><!-- end menu-wrapper -->
            </div><!-- end col-lg-10 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="off-canvas-menu custom-scrollbar-styled">
        <div class="off-canvas-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home - landing</a></li>
                    <li><a href="home-2.html">Home - main</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Pages</a>
                <ul class="sub-menu">
                    <li><a href="user-profile.html">user profile</a></li>
                    <li><a href="notifications.html">Notifications</a></li>
                    <li><a href="referrals.html">Referrals</a></li>
                    <li><a href="setting.html">settings</a></li>
                    <li><a href="ask-question.html">ask question</a></li>
                    <li><a href="question-details.html">question details</a></li>
                    <li><a href="about.html">about</a></li>
                    <li><a href="revisions.html">revisions</a></li>
                    <li><a href="category.html">category</a></li>
                    <li><a href="companies.html">companies</a></li>
                    <li><a href="company-details.html">company details</a></li>
                    <li><a href="careers.html">careers</a></li>
                    <li><a href="career-details.html">career details</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="faq.html">FAQs</a></li>
                    <li><a href="pricing-table.html">pricing tables</a></li>
                    <li><a href="error.html">page 404</a></li>
                    <li><a href="terms-and-conditions.html">Terms & conditions</a></li>
                    <li><a href="privacy-policy.html">privacy policy</a></li>
                </ul>
            </li>
            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-grid-no-sidebar.html">grid no sidebar</a></li>
                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                    <li><a href="blog-single.html">blog detail</a></li>
                </ul>
            </li>
        </ul>
        <div class="off-canvas-btn-box px-4 pt-5 text-center">
            <a href="#" class="btn theme-btn theme-btn-sm theme-btn-outline" data-toggle="modal" data-target="#loginModal"><i class="la la-sign-in mr-1"></i> Login</a>
            <span class="fs-15 fw-medium d-inline-block mx-2">Or</span>
            <a href="#" class="btn theme-btn theme-btn-sm" data-toggle="modal" data-target="#signUpModal"><i class="la la-plus mr-1"></i> Sign up</a>
        </div>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-40px" type="text" name="search" placeholder="Type your search words...">
                    <span class="la la-search input-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div><!-- end off-canvas-menu-close -->
        </div>
    </div><!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header>
@yield('content')
<section class="footer-area pt-80px bg-dark position-relative">
    <span class="vertical-bar-shape vertical-bar-shape-1"></span>
    <span class="vertical-bar-shape vertical-bar-shape-2"></span>
    <span class="vertical-bar-shape vertical-bar-shape-3"></span>
    <span class="vertical-bar-shape vertical-bar-shape-4"></span>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Company</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="advertising.html">Advertising</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Legal Stuff</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-and-conditions.html">Terms of Service</a></li>
                        <li><a href="privacy-policy.html">Cookie Policy</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Help</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="faq.html">Knowledge Base</a></li>
                        <li><a href="contact.html">Support</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-18 fw-bold pb-2 text-white">Connect with us</h3>
                    <ul class="generic-list-item generic-list-item-hover-underline pt-3 generic-list-item-white">
                        <li><a href="#"><i class="la la-facebook mr-1"></i> Facebook</a></li>
                        <li><a href="#"><i class="la la-twitter mr-1"></i> Twitter</a></li>
                        <li><a href="#"><i class="la la-linkedin mr-1"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="la la-instagram mr-1"></i> Instagram</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <hr class="border-top-gray my-5">
    <div class="container">
        <div class="row align-items-center pb-4 copyright-wrap">
            <div class="col-lg-6">
                <a href="index.html" class="d-inline-block">
                    <img src="{{ asset('images/logo-white.png') }}" alt="footer logo" class="footer-logo">
                </a>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <p class="copyright-desc text-right fs-14">Copyright &copy; 2021 <a href="https://techydevs.com/">TechyDevs</a> Inc.</p>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<div id="back-to-top" data-toggle="tooltip" data-placement="top" title="Return to top">
    <i class="la la-arrow-up"></i>
</div>
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/jquery-te-1.4.0.min.js') }}"></script>
<script src="{{ asset('js/upvote.vanilla.js') }}"></script>
<script src="{{ asset('js/upvote-script.js') }}"></script>
<script src="{{ asset('js/selectize.min.js') }}"></script>
<script src="{{ asset('js/jquery.multi-file.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script>
    function deleteSubmit() {
        document.getElementById("submitAnchor").submit();
    }
</script>
@livewireScripts
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/disilab-demo/disilab/questions-full-width.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Sep 2021 10:58:43 GMT -->
</html>