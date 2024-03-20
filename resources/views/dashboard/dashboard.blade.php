@extends('layout.master')
@section('content')

<br><br>

<section class="product-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <div class="section-title title-inline mb-30" data-aos="fade-up">
                        <h2 class="title mb-20">Rental Mobil Tersedia</h2>                        
                    </div>
                </div>
                <div class="col-12">
                    <div class="tab-content" data-aos="fade-up">
                        <div class="tab-pane fade active show" id="forAll">
                            <div class="row">
                            @forelse($cars as $car)

                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="{{ url('assets/image/' . $car->image) }}" data-src="{{ url('assets/image/' . $car->image) }}" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">{{ $car->nama_mobil }}</a></h5>
                                            
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>{{ $car->penumpang }} Penumpang</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>{{ $car->pintu }} Pintu</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">Rp. {{ $car->price }}</h6>
                                            </div>
                                            <div class="product-price mt-10">
                                            <p>
                          <a href="" class="btn btn-primary btn-sm">Sewa Sekarang</a>
                        </p>
</div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                    
                                </div>
                                
                                @empty
                <p class="display-4 text-center mx-auto">Data yang anda cari kosong !</p>
            @endforelse
                                
                                
                                
                                
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product-area end -->


@endsection