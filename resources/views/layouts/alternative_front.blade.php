<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>sMarket - Blog</title>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,400;1,700&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/default.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.css')}}">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/previous-work.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
</head>
<body>
<!-- header top start   -->
<div class="header-top">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="header-top__left d-sm-flex vertical-seperator">
                <li><a href="tel:+060800801858"><i class="fas fa-phone-square"></i> +060 (800) 801-858</a></li>
                <li><a href="mailto:info@yourdomain.com"><i class="fas fa-envelope-square"></i> info@yourdomain.com</a>
                </li>
            </ul>

            <ul class="header-top__right d-sm-flex align-self-center vertical-seperator">
                <li>
                    <select class="selectpicker" data-width="fit">
                        <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                        <option data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                    </select>
                </li>
                <li>
                    <select class="selectpicker" data-width="fit">
                        <option data-content='<i class="fas fa-dollar-sign"></i> USD'>USD</option>
                        <option data-content='<i class="fas fa-euro-sign"></i> EURO'>EURO</option>
                    </select>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- header top end   -->

<!-- logo section start -->
<div class="container text-center">
    <a href="" class="site-lgoo"><img src="assets/img/site-logo.png" alt=""></a>
</div>
<!-- logo section end -->

<!-- navbar top start -->
<div class="navbar-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-7">
                <form action="#" class="navbar-top__form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search anything here..">
                        <div class="input-group-append">
                            <button class="btn" type="button"><img src="assets/img/search-outline.svg" alt=""></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <ul class="navbar-top__link float-sm-right text-center text-sm-auto mt-3 mt-sm-0">
                    <li>
                        <a href="{{ route('user.login') }}">
                            <img src="assets/img/user-icon.png" alt="">
                            <p>Account</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('front.cart') }}">
                            <img src="assets/img/cart-icon.png" alt="">
                            <p>Cart</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- navbar top end -->

<!-- site header start -->

<div class="site-menu-inner">
    <div class="container">
        <div class="site-menu-wrapper">
            <div class="d-flex site-main-menu-area align-items-center">
                <div class="cat-wrapper">
                    <a href="#/" class="cat-btn"><i class="fas fa-bars"></i></a>
                </div>
                <div class="site-main-menu">
                    <button class="site-main-menu-trigger"><i class="fas fa-bars"></i> Menu</button>
                    <ul>
                        <li><a href="{{route('front.index')}}"><i class="fas fa-home"></i>HOME</a></li>
                        <li><a href="{{route('front.blog')}}"><i class="fas fa-briefcase"></i>BLOG</a></li>
                        <li><a href="sMarket-category.html"><i class="fal fa-shopping-bag"></i>SHOP PAGES</a></li>
                        <li><a href="#/"><i class="fal fa-code-merge"></i>SHORT CODES </a></li>
                        <li><a href="#/"><i class="fas fa-coffee"></i>ABOUT US</a></li>
                        <li><a href="{{route('front.contact')}}"><i class="far fa-address-card"></i>CONTACT US</a></li>
                    </ul>
                </div>
            </div>
            <div class="site-megamenu">
                <ul>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-1.png" alt="">Living room
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-2.png" alt="">Bedroom
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-3.png" alt="">Bath
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-4.png" alt="">Kitchens
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-5.png" alt="">Dining
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-6.png" alt="">Textiles
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-7.png" alt="">Business
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-8.png" alt="">Outdoor
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-9.png" alt="">College
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="site-megamenu__item">
                        <img src="assets/img/b-10.png" alt="">Idea
                        <ul>
                            <li>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 pb-5 pb-md-0 d-none d-md-block">
                                            <div class="site-megamenu__slider">
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                                <div>
                                                    <div><img src="assets/img/product-img.jpg" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 1</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="heading-style">
                                                <h2 class="heading-style__title"><span>Sub Categories 2</span></h2>
                                            </div>
                                            <ul class="site-megamenu__listLink">
                                                <li><a href="#">Electronics (10)</a></li>
                                                <li><a href="#">Camera & Comcorders</a></li>
                                                <li><a href="#">Cosmetic</a></li>
                                                <li><a href="#">Electronic</a></li>
                                                <li><a href="#">Laptop & Computer</a></li>
                                                <li><a href="#">Media & Healthcare</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- site header end -->
@yield('content')
<!-- Footer area start -->

<!-- footer start -->
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-5 mb-sm-0 text-center text-sm-left">
                <a class="site-footer__logo" href="#">
                    <img src="assets/img/footer-logo.png" alt="">
                </a>
                <ul class="site-footer__contact">
                    <li><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</li>
                    <li><a href="tel:+1234567890"><i class="fas fa-phone"></i> Phone: +1234567890</a></li>
                    <li><a href="mailto:info@yourdomain.com"><i class="fas fa-envelope"></i> Email: info@yourdomain.com</a></li>
                </ul>
                <div class="d-md-flex align-items-center site-footer__social">
                    <h3 class="mb-2 mb-md-0">Follo us on:</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-wallet"></i></a></li>
                        <li><a href="#"><i class="fab fa-slack-hash"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-sm-3 mb-5 mb-sm-0 text-center text-sm-left">
                <h3 class="site-footer__title">Information</h3>
                <ul class="site-footer__link">
                    <li><a href="#">Our Blog</a></li>
                    <li><a href="#">About our shop</a></li>
                    <li><a href="#">Secure Shopping</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Custom Link</a></li>
                </ul>
            </div>
            <div class="col-xl-2 col-sm-3 mb-2 mb-sm-0 text-center text-sm-left">
                <h3 class="site-footer__title">My account</h3>
                <ul class="site-footer__link">
                    <li><a href="#">My account</a></li>
                    <li><a href="#">Checkout</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Custom Link</a></li>
                </ul>
            </div>
            <div class="col-xl-4 col-md-8 offset-md-3 offset-xl-0 mt-4 mt-xl-0">
                <h3 class="site-footer__title">Latest News</h3>
                <div class="media align-items-center site-footer__news">
                    <div class="date">
                        <div class="date__content text-center">
                            <h2>25</h2>
                            <h3>Nov</h3>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3><a href="#">Pull Up a chair or a rug and stay a while at calliope</a></h3>
                        <ul class="source">
                            <li><a href="#"><img src="assets/img/company-logo.jpg" alt="">Snstheme</a></li>
                            <li><a href="#">3 Comment</a></li>
                        </ul>
                    </div>
                </div>
                <div class="media align-items-center site-footer__news">
                    <div class="date">
                        <div class="date__content text-center">
                            <h2>25</h2>
                            <h3>Nov</h3>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3><a href="#">Pull Up a chair or a rug and stay a while at calliope</a></h3>
                        <ul class="source">
                            <li><a href="#"><img src="assets/img/company-logo.jpg" alt="">Snstheme</a></li>
                            <li><a href="#">3 Comment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!-- footer bottom start -->
<div class="container">
    <div class="d-md-flex justify-content-between align-items-center text-center text-md-left footer-bottom">
        <a href="#" class="d-block mb-3 mb-md-0 footer-bottom__left">
            <img src="assets/img/visa.png" alt="">
        </a>
        <ul class="footer-bottom__right">
            <li><a href="#"><img src="assets/img/google-play-btn.png" alt=""></a></li>
            <li><a href="#"><img src="assets/img/app-store-btn.png" alt=""></a></li>
            <li><a href="#"><img src="assets/img/windows-btn.png" alt=""></a></li>
        </ul>
    </div>
</div>
<!-- footer bottom end -->

<!-- quick links start -->
<div class="container">
    <div class="quick-links">
        <ul class="quick-links__row d-flex justify-content-between flex-wrap">
            <li><a href="#">Blog</a></li>
            <li><a href="#">business</a></li>
            <li><a href="#">clean</a></li>
            <li><a href="#">design</a></li>
            <li><a href="#">fashion</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">magazine</a></li>
            <li><a href="#">modern</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">psd</a></li>
            <li><a href="#">slider</a></li>
            <li><a href="#">sport</a></li>
            <li><a href="#">style</a></li>
            <li><a href="#">tech</a></li>
            <li><a href="#">bootstrap</a></li>
            <li><a href="#">clean</a></li>
            <li><a href="#">corporate</a></li>
            <li><a href="#">creative</a></li>
            <li><a href="#">cv</a></li>
            <li><a href="#">designer</a></li>
            <li><a href="#">freelancer</a></li>
            <li><a href="#">minimal</a></li>
        </ul>
        <ul class="quick-links__row d-flex justify-content-between flex-wrap">
            <li><a href="#">modern</a></li>
            <li><a href="#">multipages</a></li>
            <li><a href="#">onepage</a></li>
            <li><a href="#">portfolio</a></li>
            <li><a href="#">best pest</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">cockroach</a></li>
            <li><a href="#">damp</a></li>
            <li><a href="#">local past work</a></li>
            <li><a href="#">multipurpose</a></li>
            <li><a href="#">pest control</a></li>
            <li><a href="#">pest control template</a></li>
            <li><a href="#">pest experts</a></li>
            <li><a href="#">pest solutions</a></li>
            <li><a href="#">professional</a></li>
            <li><a href="#">psd template</a></li>
        </ul>
    </div>
</div>
<!-- quick links end -->

<!-- copyright section start -->
<div class="container">
    <div class="footer-copyright text-center">
        &copy; 2020 Betpia | all rights reserved
    </div>
</div>
<!-- copyright section end -->


<!-- Footer aera end -->




<script type="text/javascript">
    var mainurl = "{{url('/')}}";
    var gs      = {!! json_encode($gs) !!};
    var langg    = {!! json_encode($langg) !!};
</script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/Popper.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
<script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.min.j')}}s"></script>
<script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
<script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>



<script>
    var rangeOne = document.querySelector('input[name="rangeOne"]'),
        rangeTwo = document.querySelector('input[name="rangeTwo"]'),
        updatedMinPrice = document.querySelector('input[name="updatedMinPrice"]'),
        updatedMaxPrice = document.querySelector('input[name="updatedMaxPrice"]'),
        outputOne = document.querySelector('.outputOne'),
        outputTwo = document.querySelector('.outputTwo'),
        minprice = document.querySelector('.minprice'),
        maxprice = document.querySelector('.maxprice'),
        inclRange = document.querySelector('.incl-range'),
        updateView = function() {
            if (this.getAttribute('name') === 'rangeOne') {
                outputOne.innerHTML = this.value + ' $';
                minprice.innerHTML = '$ ' + this.value;
                updatedMinPrice.value = this.value;
                outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
            } else {
                outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
                outputTwo.innerHTML = this.value + ' $';
                maxprice.innerHTML = '$ ' + this.value;
                updatedMaxPrice.value = this.value;
            }
            if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
                inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
                inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
            } else {
                inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
                inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
            }
        };

    document.addEventListener('DOMContentLoaded', function() {
        updateView.call(rangeOne);
        updateView.call(rangeTwo);
        $('input[type="range"]').on('mouseup', function() {
            this.blur();
        }).on('mousedown input', function() {
            updateView.call(this);
        });
    });

</script>




<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

@yield('scripts')
</body>

</html>
