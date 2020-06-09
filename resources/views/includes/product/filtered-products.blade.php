<div class="hero-tabContent">
    <div class="tab-content">
        <div class="tab-pane active" id="ht-1">
            <div class="ht-1-carousel hero-tab-carousel">
                @foreach($prods as $prod)
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