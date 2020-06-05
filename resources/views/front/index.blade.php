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
                                        <a href="{{$data->link}}" target="_blank" class="mybtn1"><span>{{ $langg->lang25 }} <i
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

{{-- Slider buttom Category Start --}}
<div class="featured-area">
    <div class="container">

        <div class="cat-products">
            <div class="row">
                @foreach($categories->where('is_featured','=',1) as $cat)

                <div class="col-lg-3 col-md-6">
                    <a href="{{ route('front.category',$cat->slug) }}" class="single-category">

                        <div class="single-cat-product-items">
                            <div class="ctpr-img">
                                <img src="{{asset('assets/images/categories/'.$cat->image) }}" alt="">
                            </div>
                            <div class="cat-pro-info">
                                <h5 class="title">
                                    {{ $cat->name }}
                                </h5>
                                <p class="count">
                                    {{ count($cat->products) }} {{ $langg->lang4 }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
{{-- Slider buttom banner End --}}

@endif

@if($ps->featured == 1)
<!-- Trending Item Area Start -->
<section class="trending">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 remove-padding">
                <div class="section-top">
                    <h2 class="section-title">
                        {{ $langg->lang26 }}
                    </h2>
                    {{-- <a href="#" class="link">View All</a> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 remove-padding">
                <div class="trending-item-slider">
                    @foreach($feature_products as $prod)
                    @include('includes.product.slider-product')
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Tranding Item Area End -->
@endif

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
    $(window).on('load', function () {


    });

</script>
@endsection