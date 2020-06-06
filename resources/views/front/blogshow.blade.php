@extends('layouts.alternative_front')
@section('content')
<!-- Breadcrumb Area Start -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style">
            <li class="breadcrumb-item">
                <i class="fas fa-home"></i>
                <a href="{{ route('front.index') }}">
                    {{ $langg->lang17 }}
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('front.blog') }}">
                    {{ $langg->lang18 }}
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('front.blogshow',$blog->id) }}">
                    {{ $langg->lang39 }}
                </a>
            </li>
        </ol>
    </nav>
</div>
<!-- Breadcrumb Area End -->


<div class="category-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-9 mb-30">
                <div class="blog-detais-wrp-main">
                    <div class="blog-detais-wrp">
                        <div class="b-top-cat-btn">
                            @foreach(explode(",",$blog->tags) as $key=>$tg)
                            @if($key%2==0)
                            <a href="" style="background: #33cccc;">{{$tg}}</a>
                            @else
                            <a href="" style="background: #e56e6e;">{{$tg}}</a>
                            @endif
                            @endforeach
                        </div>
                        <div class="blog-details-main-wpr">
                            <h1> {{ $blog->title }}
                            </h1>
                            <div class="blog-meta">
                                <ul>
                                    <li><img src="assets/img/avatar.png" alt="">Snstheme</li>
                                    <li> {{ date('d M, Y',strtotime($blog->created_at)) }}
                                    </li>
                                    <li> {{ $blog->views }} {{ $langg->lang40 }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-main-big-img">
                            <img src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">

                        </div>
                        <div class="blog-des-para">
                            <p> {!! $blog->details !!}
                            </p>
                            <div class="box-content">
                                <p>{{$blog->meta_descriptio}}</p>
                                <h4{{$blog->meta_tag}}</h4>
                            </div>

                            <div class="box-content inner-link overflow-hidden">
                                <img src="assets/img/sp-map.png" alt="">
                                <a href="https://themeforest.net/user/snstheme/portfolio">https://themeforest.net/user/snstheme/portfolio</a>
                            </div>

                        </div>
                        <div class="blog-info-bottom">
                            <div class="row">
                                <div class="col-md-7">
                                    <p><span>#TAG:</span>
                                        @foreach(explode(",",$blog->tags) as $key=>$tg)
                                        #{{$tg}}

                                        @endforeach </p>
                                </div>
                                <div class="col-md-5">
                                    <div class="share-links">
                                        <span>share this: </span>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-google-plus-g"></i></a>
                                        <a href=""><i class="fab fa-google-wallet"></i></a>
                                        <a href=""><i class="fab fa-slack-hash"></i></a>
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-form-main">
                            <div class="sc-title">
                                <h3>LEAVE A COMMENT</h3>
                            </div>
                            <div class="form-inner">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p>Your email address will not be published. Required fields are marked
                                                *</p>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-inp-box">
                                                <input type="text" placeholder="Name *">
                                            </div>
                                            <div class="single-inp-box">
                                                <input type="text" placeholder="Email *">
                                            </div>
                                            <div class="single-inp-box">
                                                <input type="text" placeholder="Website *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="text-area">
                                                <textarea name="" id="" cols="30" rows="10"
                                                          placeholder="Comment *"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="sb-btn">
                                                <button type="submit">SUBMIT COMMENT</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 mb-30">
                <div class="left-sidebar-wrap">
                    <div class="single-side-widget">
                        <div class="search-bar">
                            <form action="">
                                <input type="text" placeholder="Search ...">
                                <button><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="sidebar-cmn-box">
                        <div class="sec-title-wrap">
                            <h2>{{ $langg->lang42 }}</h2>

                            <div class="long-jesture-wrap">
                                <span class="left-jesture"><i class="far fa-long-arrow-alt-left"></i></span>
                                <span class="right-jesture"><i class="far fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>
                        <div class="cat-lilst">
                            <ul>
                                @foreach($bcats as $cat)
                                <li>
                                    <a href="{{ route('front.blogcategory',$cat->slug) }}" {!! $cat->id ==
                                        $blog->category_id ? 'class="active"':'' !!}>
                                        <span>{{ $cat->name }}</span>
                                        <span>({{ $cat->blogs()->count() }})</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                    </div> <!-- ./sidebar-cmn-box -->

                    <div class="sidebar-cmn-box">
                        <div class="sec-title-wrap">
                            <h2>{{ $langg->lang43 }}</h2>

                            <div class="long-jesture-wrap">
                                <span class="left-jesture"><i class="far fa-long-arrow-alt-left"></i></span>
                                <span class="right-jesture"><i class="far fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>

                        <div class="most-viewed-products-list">
                            @foreach (App\Models\Blog::orderBy('created_at', 'desc')->limit(4)->get() as $blog)

                            <div class="single-cat-product-items style-2">
                                <a href="{{ route('front.blogshow',$blog->id) }}">

                                    <div class="ctpr-img">
                                        <img src="{{ asset('assets/images/blogs/'.$blog->photo) }}" alt="">
                                    </div>
                                    <div class="cat-pro-info">
                                        <h3><a href="#"> {{mb_strlen($blog->title,'utf-8') > 45 ?
                                                mb_substr($blog->title,0,45,'utf-8')." .." : $blog->title}}
                                            </a></h3>
                                        <span class="ct-date">5 August, 2015</span>
                                    </div>
                                </a>
                            </div>
                            @endforeach


                        </div> <!-- ./most-viewed-products-list -->
                    </div> <!-- ./sidebar-cmn-box -->
                    <div class="add-box">
                        <a href="#"><img src="assets/img/add-1.png" alt=""></a>
                    </div>

                    <div class="sidebar-cmn-box mt-30">
                        <div class="sec-title-wrap">
                            <h2>{{ $langg->lang44 }}</h2>

                            <div class="long-jesture-wrap">
                                <span class="left-jesture"><i class="far fa-long-arrow-alt-left"></i></span>
                                <span class="right-jesture"><i class="far fa-long-arrow-alt-right"></i></span>
                            </div>
                        </div>

                        <div class="most-viewed-products-list">
                            @foreach($archives as $key => $archive)

                            <div class="single-cat-product-items style-2">
                                <a href="{{ route('front.blogarchive',$key) }}">

                                    <span>{{ $key }}</span>
                                    <span>({{ count($archive) }})</span>
                                </a>
                            </div>
                            @endforeach

                        </div> <!-- ./most-viewed-products-list -->
                    </div> <!-- ./sidebar-cmn-box -->

                    <div class="sidebar-cmn-box mt-30">
                        <div class="sec-title-wrap">
                            <h2>{{ $langg->lang45 }}</h2>


                        </div>

                        <div class="most-viewed-products-list">

                            <ul class="tags-list">
                                @foreach($tags as $tag)
                                @if(!empty($tag))
                                <li>
                                    <a href="{{ route('front.blogtags',$tag) }}">{{ $tag }} </a>
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div> <!-- ./most-viewed-products-list -->
                    </div> <!-- ./sidebar-cmn-box -->


                </div>
            </div>
        </div>
    </div>
</div> <!-- ./category-area -->


@endsection
