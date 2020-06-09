@extends('layouts.index_front')

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
<div id="test_loader">
<div class="hero-tabContent">
    <div class="tab-content">
        <div class="tab-pane active" id="ht-1">
            <div class="ht-1-carousel hero-tab-carousel">
                @foreach($trending_products as $prod)

                <a href="{{ route('front.product', $prod->slug) }}" class="card">
                    <img class="card-img"
                         src="{{ $prod->thumbnail ? asset('assets/images/thumbnails/'.$prod->thumbnail):asset('assets/images/noimage.png') }}"
                         alt="">

                    <div class="card-body">
                        <h3>{{$prod->name}}</h3>

                        <div class="stars">
                            <div class="ratings">
                                <div class="empty-stars"></div>
                                <div class="full-stars" style="width:{{App\Models\Rating::ratings($prod->id)}}%"></div>
                            </div>
                        </div>
                        <h4 class="price">{{ $prod->showPrice() }}</h4>
                        <div class="item-cart-area">
                            @if($prod->product_type == "affiliate")
                            <span class="add-to-cart-btn affilate-btn"
                                  data-href="{{ route('affiliate.product', $prod->slug) }}"><i class="icofont-cart"></i>
																	{{ $langg->lang251 }}
																</span>
                            @else
                            @if($prod->emptyStock())
                            <span class="add-to-cart-btn cart-out-of-stock">
																	<i class="icofont-close-circled"></i> {{ $langg->lang78 }}
																</span>
                            @else
                            <span class="add-to-cart add-to-cart-btn"
                                  data-href="{{ route('product.cart.add',$prod->id) }}">
																	<i class="icofont-cart"></i> {{ $langg->lang56 }}
																</span>
                            <span class="add-to-cart-quick add-to-cart-btn"
                                  data-href="{{ route('product.cart.quickadd',$prod->id) }}">
																	<i class="icofont-cart"></i> {{ $langg->lang251 }}
																</span>
                            @endif
                            @endif
                        </div>
                    </div>


                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
@foreach($categories as $key=>$category)
@php
$subcats=App\Models\Subcategory::where('category_id',$category->id)->get()
@endphp
<div class="container mb-5 pb-xl-2">
    @if($key%2==0)
    <div class="hero-tab-wrapper primary-theme d-sm-flex">
        @else
        <div class="hero-tab-wrapper flower-theme d-sm-flex">
            @endif
            <div class="hero-tab">
                <div class="hero-tab__label">
                    <h2><a href="{{route('front.category',[$category->slug,$subcats->first()['slug']])}}">{{$category->name}}</a>
                    </h2>
                </div>
                <ul class="nav">

                    <li class="nav-item">
                        @foreach($subcats as $subcat)

                        <a class="nav-link d-flex align-items-center" data-toggle="tab"
                           href=""
                           onclick="load_cat_data('{{$category->slug}}','{{$subcat->slug}}');">
                            {{$subcat->name}}
                        </a>
                        @endforeach
                    </li>

                </ul>
            </div>
            <div  id="content_cat_{{$category->slug}}">


            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
@section('scripts')
<script>
    function load_cat_data(param, param2) {
        // $("#content_cat_"+param).load("{{ route('front.category', [':param',':param2'])}}".replace(':param', param).replace(':param2', param2))
        $.ajax({
            url: "{{ route('front.category', [':param',':param2'])}}".replace(':param', param).replace(':param2', param2),
            success: function (response) {
                $("#content_cat_" + param).html(response)
                console.log(response)
            }
        })
    }
</script>
@endsection
