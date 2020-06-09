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
                <div class="row">
                    <div class="col-sm-4">

                        <div class="tab-button-inner">
                            <h6><i class="fas fa-map-marker-alt"></i>USA office</h6>
                            <h6><i class="fas fa-street-view"></i>: 3584 Hickory Heights </h6>
                            <h6> <t/> Drive ,Hanover MD 2107 </h6>
                            <h6><i class="fas fa-phone"></i>: +00-000-000-000 </h6>
                            <h6><i class="fas fa-mail-bulk"></i> :admin@geniusocean.comm</h6>
                        </div>
                    </div>
                    <div class="col-sm-8">
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
</div> <!-- ./category-area -->


<!-- Contact page main form area start -->

<div class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 mb-5 mb-lg-0">
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="sc-title">
                    <h3>Drop us a message</h3>
                </div>
                <div class="contact-main-form">
                    <form action="">
                        <div class="single-inp-box">
                            <input type="name" placeholder="{{ $langg->lang47 }} *">
                        </div>
                        <div class="single-inp-box">
                            <input type="email" placeholder="{{ $langg->lang49 }} *">
                        </div>
                        <div class="single-inp-box">
                            <input type="phone" placeholder="{{ $langg->lang48 }}  *">
                        </div>
                        <div class="single-inp-box">
                            <textarea name="text" id="" cols="30" rows="10" placeholder="{{ $langg->lang50 }}"
                                      required=""></textarea>
                        </div>
                        <input type="hidden" name="to" value="{{ $ps->contact_email }}">
                        @if($gs->is_capcha == 1)

                        <ul class="captcha-area">
                            <li>
                                <p><img class="codeimg1" src="{{asset(" assets/images/capcha_code.png")}}" alt=""> <i
                                            class="fas fa-sync-alt pointer refresh_code"></i></p>

                            </li>
                            <li>
                                <input name="codes" type="text" class="input-field" placeholder="{{ $langg->lang51 }}"
                                       required="">

                            </li>
                        </ul>

                        @endif
                        <div class="sb-btn">
                            <button type="submit">{{ $langg->lang52 }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Contact page main form area end -->


<!-- Contact Us Area End-->

@endsection
@section('scripts')
<script src="{{asset('assets/js/gmap3.js')}}"></script>

<script>
    $(function () {
        $('#test')
            .gmap3({
                center: [48.8620722, 2.352047],
                zoom: 4
            })
            .marker([{
                position: [48.8620722, 2.352047]
            },
                {
                    address: "86000 Poitiers, France"
                },
                {
                    address: "66000 Perpignan, France",
                    icon: "http://maps.google.com/mapfiles/marker_grey.png"
                }
            ])
            .on('click', function (marker) {
                marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
            })
            .then(function (markers) {
                markers[1].setIcon('http://maps.google.com/mapfiles/marker_orange.png');
            });
    });

</script>
@endsection