@extends('layouts.alternative_front')
@section('content')

<!-- Breadcrumb Area Start -->
<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb breadcrumb-style">
		<li class="breadcrumb-item"><a href="{{route('front.index')}}"><i class="fas fa-home"></i> {{ $langg->lang17 }}</a></li>
		
		<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('user-wishlists') }}">{{ $page->title }}</a></li>
	  </ol>
	</nav>
</div>
<!-- Breadcrumb Area End -->



<section class="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="about-info">
            <h4 class="title">
              {{ $page->title }}
            </h4>
            <p>
              {!! $page->details !!}
            </p>

          </div>
        </div>
      </div>
    </div>
  </section>

@endsection