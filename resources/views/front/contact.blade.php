@extends('layouts.alternative_front')


@section('content')


<!-- breadcrumb start -->
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style">
            <li class="breadcrumb-item">

                <a href="{{ route('front.index') }}">
                    {{ $langg->lang17 }}
                </a></li>
            <li class="breadcrumb-item">

                <a href="{{ route('front.contact') }}">
                    {{ $langg->lang20 }}
                </a>
            </li>
        </ol>
    </nav>
</div>
<!-- breadcrumb end -->


<!-- Contact Us Area Start -->
<div class="category-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">
                <div class="contact-top-map-tab">
                    <div class="contact-tab-inner">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                             aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home"
                               role="tab" aria-controls="v-pills-home" aria-selected="true">
                                <div class="tab-button-main">
                                    <div class="tab-button-inner">
                                        <h4><i class="fas fa-map-marker-alt"></i>USA office</h4>
                                        <p>Address: 8888 @if($ps->street != null)
                                            {!! $ps->street !!}
                                            @endif, New York <br>
                                            Phone: @if($ps->phone != null && $ps->fax != null)
                                            <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>
                                            <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>
                                            @elseif($ps->phone != null)
                                            <a href="tel:{{$ps->phone}}">{{$ps->phone}}</a>
                                            @else
                                            <a href="tel:{{$ps->fax}}">{{$ps->fax}}</a>
                                            @endif <br>
                                        <p> Email : @if($ps->site != null && $ps->email != null)
                                            <!--                                            <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>-->
                                            <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>
                                            @elseif($ps->site != null)
                                            <a href="{{$ps->site}}" target="_blank">{{$ps->site}}</a>
                                            @else
                                            <a href="mailto:{{$ps->email}}">{{$ps->email}}</a>
                                            @endif</p></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                 aria-labelledby="v-pills-home-tab">
                                <div id="test" class="gmap3"></div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                 aria-labelledby="v-pills-profile-tab">content
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                 aria-labelledby="v-pills-messages-tab">content
                            </div>
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                 aria-labelledby="v-pills-settings-tab">content
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div> <!-- ./category-area -->


<!-- Contact Us Area End-->

@endsection