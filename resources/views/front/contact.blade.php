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
<!--                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"-->
<!--                             aria-orientation="vertical">-->
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                               role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                <div class="tab-button-main">
                                    <div class="tab-button-inner">
                                        <h4><i class="fas fa-map-marker-alt"></i>USA office</h4>
                                        <p>Address: 3584 Hickory Heights <br>
                                            Drive ,Hanover MD 2107 <br>
                                            Phone: +00-000-000-000 <br>
                                            Email:
                                            //geniusocean.com/<br/>
                                            admin@geniusocean.comm</p>
                                    </div>
<!--                                </div>-->
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