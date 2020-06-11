<div class="hero-tabContent">
    <div class="tab-content">
        <div class="tab-pane active" id="ht-1">
            <div class="ht-1-slider owl-carousel owl-theme">
                @foreach($prods as $prod)
                    @include('includes.product.slider-product')
                @endforeach
            </div>
        </div>
    </div>
</div>