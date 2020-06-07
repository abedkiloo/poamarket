@extends('layouts.alternative_front')
@section('content')


<!-- Breadcrumb Area Start -->
<div class="container">
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb breadcrumb-style">
    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i> {{ $langg->lang17 }}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $langg->lang19 }}</li>
  </ol>
  </nav>
</div>
<!-- Breadcrumb Area End -->

  <!-- faq Area Start -->
  <section class="faq-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
          @foreach($faqs as $fq)
          <div class="tabs">
            <div class="tab">
              <input type="checkbox" id="chck{{ $fq->id }}">
              <label class="tab-label" for="chck{{ $fq->id }}"><i class="fas fa-question-circle"></i> {{ $fq->title }}</label>
              <div class="tab-content">
                {!! $fq->details !!}
              </div>
            </div>
          </div>
          
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- faq Area End-->

@endsection