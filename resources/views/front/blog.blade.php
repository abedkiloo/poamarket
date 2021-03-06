@extends('layouts.alternative_front')
@section('content')


<!-- Hero area start -->


<div class="category-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-1 mb-30"></div>
            <div class="col-lg-9 mb-30">
                <div class="blog-detais-wrp-main">

                    <div class="all-blog-lists">
                        @foreach($blogs as $blogg)

                        <div class="single-blog-items">
                            <div class="blog-main-big-img">
                                <a href='{{route('front.blogshow',$blogg->id)}}'>
                                <img src="{{ $blogg->photo ? asset('assets/images/blogs/'.$blogg->photo):asset('assets/images/noimage.png') }}"
                                     class="img-fluid" alt="">

                                </a>
                            </div>
                            @foreach(explode(",",$blogg->tags) as $tg)
                            @endforeach
                            <div class="b-top-cat-btn">
                                @foreach(explode(",",$blogg->tags) as $key=>$tg)
                                @if($key%2==0)
                                <a href="" style="background: #33cccc;">{{$tg}}</a>
                                @else
                                <a href="" style="background: #e56e6e;">{{$tg}}</a>
                                @endif
                                @endforeach
                               </div>
                            <div class="single-blog-texts">
                                <a href='{{url('front.blogshow',$blogg->id)}}'>
                                <h4 class="blog-title">
                                    {{mb_strlen($blogg->title,'utf-8') > 50 ?
                                    mb_substr($blogg->title,0,50,'utf-8')."...":$blogg->title}}
                                </h4>
                                </a>                                </h2>
                                <p class="blog-text">
                                    {{substr(strip_tags($blogg->details),0,120)}}5 February, 2020
                                </p>
                            </div>
                            <div class="blog-meta">
                                <ul>
                                    <li><img src="assets/img/avatar.png" alt="">{{date('d-M-Y',
                                        strtotime($blogg->created_at))}}
                                    </li>
                                    <li>{{$blogg->views}} Views</li>
                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pagination-list">

                        <ul>
                            <li><a href=""><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">-</a></li>
                            <li><a href="">25</a></li>
                            <li><a href=""><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>


                </div>

            </div>
            <div class="col-lg-1 mb-30"></div>

        </div>
    </div>
</div> <!-- ./category-area -->

<!-- Call to action area start -->

<div class="call-to-action-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="cl-ac-left-text">
                    <p><i class="fal fa-paper-plane"></i>Sign up to Newsletter <span>and receive <span
                                    style="color: #f6ff04">$20</span> coupon for first shopping.</span></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="subs-form">
                    <form action="">
                        <div class="subs-bx">
                            <input type="text" placeholder="Your email addres">
                            <i class="fas fa-envelope"></i>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Call to action area end -->


@endsection


@section('scripts')

<script type="text/javascript">


    // Pagination Starts

    $(document).on('click', '.pagination li', function (event) {
        event.preventDefault();
        if ($(this).find('a').attr('href') != '#' && $(this).find('a').attr('href')) {
            $('#preloader').show();
            $('#ajaxContent').load($(this).find('a').attr('href'), function (response, status, xhr) {
                if (status == "success") {
                    $("html,body").animate({
                        scrollTop: 0
                    }, 1);
                    $('#preloader').fadeOut();


                }

            });
        }
    });

    // Pagination Ends

</script>


@endsection