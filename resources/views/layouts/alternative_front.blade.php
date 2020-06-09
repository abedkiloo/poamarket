<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @if(isset($page->meta_tag) && isset($page->meta_description))
    <meta name="keywords" content="{{ $page->meta_tag }}">
    <meta name="description" content="{{ $page->meta_description }}">
    <title>{{$gs->title}}</title>
    @elseif(isset($blog->meta_tag) && isset($blog->meta_description))
    <meta name="keywords" content="{{ $blog->meta_tag }}">
    <meta name="description" content="{{ $blog->meta_description }}">
    <title>{{$gs->title}}</title>
    @elseif(isset($productt))
    <meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
    <meta name="description"
          content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
    <meta property="og:title" content="{{$productt->name}}"/>
    <meta property="og:description"
          content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}"/>
    <meta property="og:image" content="{{asset('assets/images/thumbnails/'.$productt->thumbnail)}}"/>
    <meta name="author" content="GeniusOcean">
    <title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>
    @else
    <meta name="keywords" content="{{ $seo->meta_keys }}">
    <meta name="author" content="GeniusOcean">
    <title>{{$gs->title}}</title>
    @endif
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
                            <p>{{ Session::has('cart') ? count(Session::get('cart')->items) : '0' }}</p>
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
            <div class="d-flex justify-content-between site-main-menu-area">
                <div class="cat-wrapper">
                    <a href="#/" class="cat-btn"><i class="fas fa-bars"></i></a>
                </div>
                <div class="site-main-menu">
                    <button class="site-main-menu-trigger"><i class="fas fa-bars"></i> Menu</button>
                    <ul>


                        @if($gs->is_home == 1)
                        <li><a href="{{ route('front.index') }}"><i class="fas fa-home"></i>{{ $langg->lang17 }}</a>
                        </li>
                        @endif
                        <li><a href="{{ route('front.blog') }}"><i class="fas fa-blog"></i>{{
                                $langg->lang18 }}</a></li>
                        @if($gs->is_faq == 1)
                        <li><a href="{{ route('front.faq') }}"><i class="fas fa-blog"></i>{{ $langg->lang19 }}</a></li>
                        @endif
                        @foreach(DB::table('pages')->where('header','=',1)->get() as $data)
                        <li><a href="{{ route('front.page',$data->slug) }}"><i class="fas fa-blog"></i>{{ $data->title
                                }}</a></li>
                        @endforeach
                        @if($gs->is_contact == 1)
                        <li><a href="{{ route('front.contact') }}"><i class="fas fa-blog"></i>{{ $langg->lang20 }}</a>
                        </li>
                        @endif
                        <li>
                            <a href="javascript:;" data-toggle="modal" data-target="#track-order-modal"
                               class="track-btn"><i class="fas fa-blog"></i>{{ $langg->lang16 }}</a>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="site-megamenu">

                <ul>
                    @php
                    $i=1;
                    @endphp
                    @foreach($categories as $category)

                    <li class="site-megamenu__item {{count($category->subs) > 0 ? 'dropdown_list':''}} {{ $i >= 15 ? 'rx-child' : '' }}">
                        @if(count($category->subs) > 0)
                        <img style="width: 15px;height: 15px"
                             src="{{ asset('assets/images/categories/'.$category->photo) }}" alt="">

                        <a style="color: #0c0c0c" href="{{ route('front.category',$category->slug) }}">{{ $category->name }}</a>
                        @if(count($category->subs) > 0)
                        <a style="color: #0c0c0c" href="javascript:;">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                        @endif

                        @else
                        <a  style="color: #0c0c0c"  href="{{ route('front.category',$category->slug) }}">
                            <img style="width: 15px;height: 15px"
                                 src="{{ asset('assets/images/categories/'.$category->photo) }}"> {{ $category->name
                            }}</a>

                        @endif
                        @if(count($category->subs) > 0)

                        @php
                        $ck = 0;
                        foreach($category->subs as $subcat) {
                        if(count($subcat->childs) > 0) {
                        $ck = 1;
                        break;
                        }
                        }
                        @endphp

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
                                        @foreach($category->subs as $subcat)
                                        <div class="col-md-4 mb-4 mb-md-0">
                                            <div class="heading-style">
                                                <a href="{{ route('front.subcat',['slug1' => $subcat->category->slug, 'slug2' => $subcat->slug]) }}">{{$subcat->name}}</a>
                                            </div>
                                            @if(count($subcat->childs) > 0)
                                            <ul class="site-megamenu__listLink">
                                                @foreach($subcat->childs as $childcat)
                                                <li> <a href="{{ route('front.childcat',['slug1' => $childcat->subcategory->category->slug, 'slug2' => $childcat->subcategory->slug, 'slug3' => $childcat->slug]) }}">{{$childcat->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </li>

                        </ul>
                        @endif

                    </li>

                    @php
                    $i++;
                    @endphp

                    @if($i == 15)
                    <li>
                        <a href="{{ route('front.categories') }}"><i class="fas fa-plus"></i> {{ $langg->lang15 }}
                        </a>
                    </li>
                    @break
                    @endif


                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- site header end -->
@yield('content')
<!-- Footer area start -->

<!-- footer start -->
<footer style="     background: #ebffee;" class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-sm-6 mb-5 mb-sm-0 text-center text-sm-left">
                <a class="site-footer__logo" href="#">
                    <img src="assets/img/footer-logo.png" alt="">
                </a>
                <ul class="site-footer__contact">
                    <li><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</li>
                    <li><a href="tel:+1234567890"><i class="fas fa-phone"></i> Phone: +1234567890</a></li>
                    <li><a href="mailto:info@yourdomain.com"><i class="fas fa-envelope"></i> Email: info@yourdomain.com</a>
                    </li>
                </ul>
                <div class="d-md-flex align-items-center site-footer__social">
                    <h3 class="mb-2 mb-md-0">{{ $langg->lang53 }}:</h3>
                    <ul>

                        @if(App\Models\Socialsetting::find(1)->f_status == 1)
                        <li>
                            <a href="{{ App\Models\Socialsetting::find(1)->facebook }}" class="facebook"
                               target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        @endif

                        @if(App\Models\Socialsetting::find(1)->g_status == 1)
                        <li>
                            <a href="{{ App\Models\Socialsetting::find(1)->gplus }}" class="google-plus"
                               target="_blank">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        @endif

                        @if(App\Models\Socialsetting::find(1)->t_status == 1)
                        <li>
                            <a href="{{ App\Models\Socialsetting::find(1)->twitter }}" class="twitter" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        @endif

                        @if(App\Models\Socialsetting::find(1)->l_status == 1)
                        <li>
                            <a href="{{ App\Models\Socialsetting::find(1)->linkedin }}" class="linkedin"
                               target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        @endif

                        @if(App\Models\Socialsetting::find(1)->d_status == 1)
                        <li>
                            <a href="{{ App\Models\Socialsetting::find(1)->dribble }}" class="dribbble" target="_blank">
                                <i class="fab fa-dribbble"></i>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-md-8 offset-md-3 offset-xl-0 mt-4 mt-xl-0">
                <h3 class="site-footer__title">Latest News</h3>
                @foreach (App\Models\Blog::orderBy('created_at', 'desc')->limit(3)->get() as $blog)

                <div class="media align-items-center site-footer__news">
                    <div class="date">
                        <div class="date__content text-center">
                            <h2> {{ date('d',(strtotime($blog->created_at))) }}
                            </h2>
                            <h3>										{{ date('M ',(strtotime($blog->created_at))) }}
                            </h3>
                        </div>
                    </div>
                    <div class="media-body">
                        <h3><a href="#"> {{mb_strlen($blog->title,'utf-8') > 45 ? mb_substr($blog->title,0,45,'utf-8')."
                                .." : $blog->title}}
                            </a></h3>
                        <ul class="source">
                            <li><a href="#"><img style="width: 43px; height: 39px;"
                                                 src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">Snstheme</a>
                            </li>
                            <li><a href="#">{{$blog->meta_description}}</a></li>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->


<!-- copyright section start -->
<div style="     background: #aec1cc;" class="container">
    <div class="footer-copyright text-center">
        <p>{!! $gs->copyright !!}</p>
    </div>
</div>
<!-- copyright section end -->

<!-- Footer aera end -->
<!-- Back to Top Start -->
<div class="bottomtotop">
    <i class="fas fa-chevron-right"></i>
</div>
<!-- Back to Top End -->

<!-- LOGIN MODAL -->
<div class="modal fade" id="comment-log-reg" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
     aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav class="comment-log-reg-tabmenu">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link login active" id="nav-log-tab1" data-toggle="tab" href="#nav-log1"
                           role="tab" aria-controls="nav-log" aria-selected="true">
                            {{ $langg->lang197 }}
                        </a>
                        <a class="nav-item nav-link" id="nav-reg-tab1" data-toggle="tab" href="#nav-reg1" role="tab"
                           aria-controls="nav-reg" aria-selected="false">
                            {{ $langg->lang198 }}
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-log1" role="tabpanel"
                         aria-labelledby="nav-log-tab1">
                        <div class="login-area">
                            <div class="header-area">
                                <h4 class="title">{{ $langg->lang172 }}</h4>
                            </div>
                            <div class="login-form signin-form">
                                @include('includes.admin.form-login')
                                <form class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="{{ $langg->lang173 }}"
                                               required="">
                                        <i class="icofont-user-alt-5"></i>
                                    </div>
                                    <div class="form-input">
                                        <input type="password" class="Password" name="password"
                                               placeholder="{{ $langg->lang174 }}" required="">
                                        <i class="icofont-ui-password"></i>
                                    </div>
                                    <div class="form-forgot-pass">
                                        <div class="left">
                                            <input type="checkbox" name="remember" id="mrp"
                                                   {{ old('remember') ? 'checked' : '' }}>
                                            <label for="mrp">{{ $langg->lang175 }}</label>
                                        </div>
                                        <div class="right">
                                            <a href="javascript:;" id="show-forgot">
                                                {{ $langg->lang176 }}
                                            </a>
                                        </div>
                                    </div>
                                    <input type="hidden" name="modal" value="1">
                                    <input class="mauthdata" type="hidden" value="{{ $langg->lang177 }}">
                                    <button type="submit" class="submit-btn">{{ $langg->lang178 }}</button>
                                    @if(App\Models\Socialsetting::find(1)->f_check == 1 ||
                                    App\Models\Socialsetting::find(1)->g_check == 1)
                                    <div class="social-area">
                                        <h3 class="title">{{ $langg->lang179 }}</h3>
                                        <p class="text">{{ $langg->lang180 }}</p>
                                        <ul class="social-links">
                                            @if(App\Models\Socialsetting::find(1)->f_check == 1)
                                            <li>
                                                <a href="{{ route('social-provider','facebook') }}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            @endif
                                            @if(App\Models\Socialsetting::find(1)->g_check == 1)
                                            <li>
                                                <a href="{{ route('social-provider','google') }}">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-reg1" role="tabpanel" aria-labelledby="nav-reg-tab1">
                        <div class="login-area signup-area">
                            <div class="header-area">
                                <h4 class="title">{{ $langg->lang181 }}</h4>
                            </div>
                            <div class="login-form signup-form">
                                @include('includes.admin.form-login')
                                <form class="mregisterform" action="{{route('user-register-submit')}}"
                                      method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-input">
                                        <input type="text" class="User Name" name="name"
                                               placeholder="{{ $langg->lang182 }}" required="">
                                        <i class="icofont-user-alt-5"></i>
                                    </div>

                                    <div class="form-input">
                                        <input type="email" class="User Name" name="email"
                                               placeholder="{{ $langg->lang183 }}" required="">
                                        <i class="icofont-email"></i>
                                    </div>

                                    <div class="form-input">
                                        <input type="text" class="User Name" name="phone"
                                               placeholder="{{ $langg->lang184 }}" required="">
                                        <i class="icofont-phone"></i>
                                    </div>

                                    <div class="form-input">
                                        <input type="text" class="User Name" name="address"
                                               placeholder="{{ $langg->lang185 }}" required="">
                                        <i class="icofont-location-pin"></i>
                                    </div>

                                    <div class="form-input">
                                        <input type="password" class="Password" name="password"
                                               placeholder="{{ $langg->lang186 }}" required="">
                                        <i class="icofont-ui-password"></i>
                                    </div>

                                    <div class="form-input">
                                        <input type="password" class="Password" name="password_confirmation"
                                               placeholder="{{ $langg->lang187 }}" required="">
                                        <i class="icofont-ui-password"></i>
                                    </div>


                                    @if($gs->is_capcha == 1)

                                    <ul class="captcha-area">
                                        <li>
                                            <p><img class="codeimg1"
                                                    src="{{asset(" assets/images/capcha_code.png")}}" alt=""> <i
                                                        class="fas fa-sync-alt pointer refresh_code "></i></p>
                                        </li>
                                    </ul>

                                    <div class="form-input">
                                        <input type="text" class="Password" name="codes"
                                               placeholder="{{ $langg->lang51 }}" required="">
                                        <i class="icofont-refresh"></i>
                                    </div>


                                    @endif

                                    <input class="mprocessdata" type="hidden" value="{{ $langg->lang188 }}">
                                    <button type="submit" class="submit-btn">{{ $langg->lang189 }}</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN MODAL ENDS -->

<!-- FORGOT MODAL -->
<div class="modal fade" id="forgot-modal" tabindex="-1" role="dialog" aria-labelledby="comment-log-reg-Title"
     aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="login-area">
                    <div class="header-area forgot-passwor-area">
                        <h4 class="title">{{ $langg->lang191 }} </h4>
                        <p class="text">{{ $langg->lang192 }} </p>
                    </div>
                    <div class="login-form">
                        @include('includes.admin.form-login')
                        <form id="mforgotform" action="{{route('user-forgot-submit')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-input">
                                <input type="email" name="email" class="User Name"
                                       placeholder="{{ $langg->lang193 }}" required="">
                                <i class="icofont-user-alt-5"></i>
                            </div>
                            <div class="to-login-page">
                                <a href="javascript:;" id="show-login">
                                    {{ $langg->lang194 }}
                                </a>
                            </div>
                            <input class="fauthdata" type="hidden" value="{{ $langg->lang195 }}">
                            <button type="submit" class="submit-btn">{{ $langg->lang196 }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- FORGOT MODAL ENDS -->


<!-- VENDOR LOGIN MODAL -->
<div class="modal fade" id="vendor-login" tabindex="-1" role="dialog" aria-labelledby="vendor-login-Title"
     aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" style="transition: .5s;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav class="comment-log-reg-tabmenu">
                    <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                        <a class="nav-item nav-link login active" id="nav-log-tab11" data-toggle="tab" href="#nav-log11"
                           role="tab" aria-controls="nav-log" aria-selected="true">
                            {{ $langg->lang234 }}
                        </a>
                        <a class="nav-item nav-link" id="nav-reg-tab11" data-toggle="tab" href="#nav-reg11" role="tab"
                           aria-controls="nav-reg" aria-selected="false">
                            {{ $langg->lang235 }}
                        </a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-log11" role="tabpanel" aria-labelledby="nav-log-tab">
                        <div class="login-area">
                            <div class="login-form signin-form">
                                @include('includes.admin.form-login')
                                <form class="mloginform" action="{{ route('user.login.submit') }}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="{{ $langg->lang173 }}"
                                               required="">
                                        <i class="icofont-user-alt-5"></i>
                                    </div>
                                    <div class="form-input">
                                        <input type="password" class="Password" name="password"
                                               placeholder="{{ $langg->lang174 }}" required="">
                                        <i class="icofont-ui-password"></i>
                                    </div>
                                    <div class="form-forgot-pass">
                                        <div class="left">
                                            <input type="checkbox" name="remember" id="mrp1" {{ old('remember') ?
                                            'checked' : '' }}>
                                            <label for="mrp1">{{ $langg->lang175 }}</label>
                                        </div>
                                        <div class="right">
                                            <a href="javascript:;" id="show-forgot1">
                                                {{ $langg->lang176 }}
                                            </a>
                                        </div>
                                    </div>
                                    <input type="hidden" name="modal" value="1">
                                    <input type="hidden" name="vendor" value="1">
                                    <input class="mauthdata" type="hidden" value="{{ $langg->lang177 }}">
                                    <button type="submit" class="submit-btn">{{ $langg->lang178 }}</button>
                                    @if(App\Models\Socialsetting::find(1)->f_check == 1 ||
                                    App\Models\Socialsetting::find(1)->g_check == 1)
                                    <div class="social-area">
                                        <h3 class="title">{{ $langg->lang179 }}</h3>
                                        <p class="text">{{ $langg->lang180 }}</p>
                                        <ul class="social-links">
                                            @if(App\Models\Socialsetting::find(1)->f_check == 1)
                                            <li>
                                                <a href="{{ route('social-provider','facebook') }}">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            @endif
                                            @if(App\Models\Socialsetting::find(1)->g_check == 1)
                                            <li>
                                                <a href="{{ route('social-provider','google') }}">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-reg11" role="tabpanel" aria-labelledby="nav-reg-tab">
                        <div class="login-area signup-area">
                            <div class="login-form signup-form">
                                @include('includes.admin.form-login')
                                <form class="mregisterform" action="{{route('user-register-submit')}}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="text" class="User Name" name="name"
                                                       placeholder="{{ $langg->lang182 }}" required="">
                                                <i class="icofont-user-alt-5"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="email" class="User Name" name="email"
                                                       placeholder="{{ $langg->lang183 }}" required="">
                                                <i class="icofont-email"></i>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="text" class="User Name" name="phone"
                                                       placeholder="{{ $langg->lang184 }}" required="">
                                                <i class="icofont-phone"></i>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="address"
                                                       placeholder="{{ $langg->lang185 }}" required="">
                                                <i class="icofont-location-pin"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="text" class="User Name" name="shop_name"
                                                       placeholder="{{ $langg->lang238 }}" required="">
                                                <i class="icofont-cart-alt"></i>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="owner_name"
                                                       placeholder="{{ $langg->lang239 }}" required="">
                                                <i class="icofont-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="shop_number"
                                                       placeholder="{{ $langg->lang240 }}" required="">
                                                <i class="icofont-shopping-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="shop_address"
                                                       placeholder="{{ $langg->lang241 }}" required="">
                                                <i class="icofont-opencart"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="reg_number"
                                                       placeholder="{{ $langg->lang242 }}" required="">
                                                <i class="icofont-ui-cart"></i>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="User Name" name="shop_message"
                                                       placeholder="{{ $langg->lang243 }}" required="">
                                                <i class="icofont-envelope"></i>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="password" class="Password" name="password"
                                                       placeholder="{{ $langg->lang186 }}" required="">
                                                <i class="icofont-ui-password"></i>
                                            </div>

                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="password" class="Password" name="password_confirmation"
                                                       placeholder="{{ $langg->lang187 }}" required="">
                                                <i class="icofont-ui-password"></i>
                                            </div>
                                        </div>

                                        @if($gs->is_capcha == 1)

                                        <div class="col-lg-6">


                                            <ul class="captcha-area">
                                                <li>
                                                    <p>
                                                        <img class="codeimg1" src="{{asset(" assets/images/capcha_code.png")}}"
                                                        alt=""> <i class="fas fa-sync-alt pointer refresh_code "></i>
                                                    </p>

                                                </li>
                                            </ul>


                                        </div>

                                        <div class="col-lg-6">

                                            <div class="form-input">
                                                <input type="text" class="Password" name="codes"
                                                       placeholder="{{ $langg->lang51 }}" required="">
                                                <i class="icofont-refresh"></i>

                                            </div>


                                        </div>

                                        @endif

                                        <input type="hidden" name="vendor" value="1">
                                        <input class="mprocessdata" type="hidden" value="{{ $langg->lang188 }}">
                                        <button type="submit" class="submit-btn">{{ $langg->lang189 }}</button>

                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- VENDOR LOGIN MODAL ENDS -->

<!-- Product Quick View Modal -->

<div class="modal fade" id="quickview" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog quickview-modal modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="submit-loader">
                <img src="{{asset('assets/images/'.$gs->loader)}}" alt="">
            </div>
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container quick-view-modal">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Quick View Modal -->

<!-- Order Tracking modal Start-->
<div class="modal fade" id="track-order-modal" tabindex="-1" role="dialog" aria-labelledby="order-tracking-modal"
     aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><b>{{ $langg->lang772 }}</b></h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="order-tracking-content">
                    <form id="track-form" class="track-form">
                        {{ csrf_field() }}
                        <input type="text" id="track-code" placeholder="{{ $langg->lang773 }}" required="">
                        <button type="submit" class="mybtn1">{{ $langg->lang774 }}</button>
                        <a href="#" data-toggle="modal" data-target="#order-tracking-modal"></a>
                    </form>
                </div>

                <div>
                    <div class="submit-loader d-none">
                        <img src="{{asset('assets/images/'.$gs->loader)}}" alt="">
                    </div>
                    <div id="track-order">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Order Tracking modal End -->


<script type="text/javascript">
    var mainurl = "{{url('/')}}";
    var gs = {!!json_encode($gs)!!};
    var langg = {!!json_encode($langg)!!};
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


<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>

{!! $seo->google_analytics !!}

@if($gs->is_talkto == 1)
<!--Start of Tawk.to Script-->
{!! $gs->talkto !!}
<!--End of Tawk.to Script-->
@endif

@yield('scripts')
</body>

</html>
