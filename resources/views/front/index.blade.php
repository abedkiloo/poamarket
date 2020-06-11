@extends('layouts.alternative_front')

@section('content')

@if($ps->slider == 1)

@if(count($sliders))
@include('includes.slider-style')
@endif
@endif

@if($ps->slider == 1)
<!-- Hero area start -->
<div class="hero-area">
    <div class="container">
        @if($ps->slider == 1)

        @if(count($sliders))
        <div class="row">
            <div class="col-lg-12">
                <div class="site-bar-hero-main">
                    <div class="slider-blk">
                        <div class="site-hero-slider-aera owl-carousel">
                            @foreach($sliders as $data)
                            <div class="signle-hero-sldier-items d-flex align-items-center"
                                 style="background-image: url({{asset('assets/images/sliders/'.$data->photo)}})">

                                <div class="hero-slider-inner-content">
                                    <!-- layer 1 -->
                                    <div class="layer-1">
                                        <h4 style="font-size: {{$data->subtitle_size}}px; color: {{$data->subtitle_color}}"
                                            class="subtitle subtitle{{$data->id}}"
                                            data-animation="animated {{$data->subtitle_anime}}">
                                            {{$data->subtitle_text}}</h4>
                                        <h2 style="font-size: {{$data->title_size}}px; color: {{$data->title_color}}"
                                            class="title title{{$data->id}}"
                                            data-animation="animated {{$data->title_anime}}">{{$data->title_text}}</h2>
                                    </div>
                                    <!-- layer 2 -->
                                    <div class="layer-2">
                                        <p style="font-size: {{$data->details_size}}px; color: {{$data->details_color}}"
                                           class="text text{{$data->id}}"
                                           data-animation="animated {{$data->details_anime}}">
                                            {{$data->details_text}}</p>
                                    </div>
                                    <!-- layer 3 -->
                                    <div class="layer-3">
                                        <a href="{{$data->link}}" target="_blank" class="popup-hero__btn"><span>{{ $langg->lang25 }} <i
                                                        class="fas fa-chevron-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @endif
    </div>
</div>
<!-- Hero area end -->
@endif


@if($ps->featured_category == 1)

<!-- feature area start -->
<div class="featured-area">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 d-mb">
                <div class="row">
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-12  d-mb-blk">
                <div class="row">
                    <div class="col-sm-6 col-6 col-lg-3 mb-4">
                        <div class="ftr-inner-content text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>bad wood</h2>
                                <p>The primary idea of modern furniture</p>
                                <a href="{{ route('front.categories') }}">See more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 npd  mb-4 ">
                        <div class="featured-row">
                            <div class="featured-single text-center text-lg-left">
                                <img src="{{ asset('assets/img/bg-2.png') }}" alt="">
                                <div class="ft-content-banner">
                                    <h3>Big fetival furniture sale</h3>
                                    <div class="number-blk">
                                        <p>35
                                            <sup>OFF</sup>
                                            <span>%</span>
                                        </p>
                                    </div>
                                    <p class="date-meta">28th - 30th, Dec, 2016</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-row">
                            <div class="row">
                                <div class="col-lg-6 pd-rt mb-4 mb-lg-0">
                                    <div class="featured-single half-box text-center text-lg-left">
                                        <img src="{{ asset('assets/img/bg-2.png') }}" alt="">
                                        <div class="ft-content-banner">
                                            <h4>chair reading</h4>
                                            <br>
                                            <h5>From $150.
                                                <a href="{{ route('front.categories') }}">Buy now</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 pd-lft text-center text-lg-left">
                                    <div class="featured-single half-box sec-color">
                                        <img src="{{ asset('assets/img/bg-2.png') }}" alt="">
                                        <div class="ft-content-banner">
                                            <h4>chair reading</h4>
                                            <br>
                                            <h5>From $150.
                                                <a href="{{ route('front.categories') }}">Buy now</a>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-6 col-lg-3  mb-4">
                        <div class="ftr-inner-content lst-item text-center text-lg-left">
                            <img src="{{ asset('assets/img/tm-1.png') }}" alt="">
                            <div class="ft-content">
                                <h2>Table
                                    <br>
                                    Lamps
                                    <br>
                                    Design

                                </h2>
                                <a href="{{ route('front.categories') }}">See more ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>



    </div>
</div>
<!-- feature area end -->

@endif

@foreach($slide_cat as $key=>$category)
@php
$subcats=App\Models\Subcategory::where('category_id',$category->id)->get()
@endphp
<div class="container mb-5 pb-xl-2">
    @if($key%2==0)
    <div class="hero-tab-wrapper primary-theme d-sm-flex {{$category->slug}}">
        @else
        <div class="hero-tab-wrapper flower-theme d-sm-flex {{$category->slug}}">
            @endif
            <div class="hero-tab">
                <div class="hero-tab__label">
                    <h2>{{$category->name}}</h2>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        @foreach($subcats as $subcat)

                        <a class="nav-link d-flex align-items-center {{ $loop->first ? 'active' : '' }}" data-toggle="tab" href="" data-id="{{$category->slug}}" data-paraa="{{$subcat->slug}}" onclick="load_cat_data('{{$category->slug}}','{{$subcat->slug}}');">
                            {{$subcat->name}}
                        </a>
                        @endforeach
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
@endforeach

    @if($ps->small_banner == 1)

		<!-- Banner Area One Start -->
		<section class="banner-section">
			<div class="container">
				@foreach($top_small_banners->chunk(2) as $chunk)
					<div class="row">
						@foreach($chunk as $img)
							<div class="col-lg-6 remove-padding">
								<div class="left">
									<a class="banner-effect" href="{{ $img->link }}" target="_blank">
										<img src="{{asset('assets/images/banners/'.$img->photo)}}" alt="">
									</a>
								</div>
							</div>
						@endforeach
					</div>
				@endforeach
			</div>
		</section>
		<!-- Banner Area One Start -->
    @endif
    
    <section id="extraData">
		<div class="text-center">
			<img src="{{asset('assets/images/'.$gs->loader)}}">
		</div>
	</section>


@endsection
@section('scripts')
<script>
    function load_cat_data(param, param2) {
        // $("#content_cat_"+param).load("{{ route('front.category', [':param',':param2'])}}".replace(':param', param).replace(':param2', param2))
        
        $("." + param).find('.hero-tabContent').remove();
        $.ajax({
            url: "{{ route('front.category', [':param',':param2'])}}".replace(':param', param).replace(':param2', param2),
            success: function (response) {
                $("." + param).append(response);
                $(".owl-carousel").owlCarousel({
                    items:1,
                    nav:false,
                    dot:true,
                    loop:true,
                    margin:20,
                    autoplay:true,
                    startPosition: 1,
                    autoplayTimeout:2000,
                    smartSpeed:1000,
                    responsiveClass:true,
                    autoplayHoverPause:true,
                    responsive:{
                    0:{
                        items:1,
                        
                    },
                    768:{
                        items:3,
                    },
                    1000:{
                        items:4,
                    }
                    }
                });
            }
        })
    }
    $(document).ready(function () {
        $('.hero-tab ul li a.active').trigger('click');
    });
</script>

<script>
    $(window).on('load',function() {

        setTimeout(function(){

            $('#extraData').load('{{route('front.extraIndex')}}');

        }, 500);
    });

</script>
@endsection
