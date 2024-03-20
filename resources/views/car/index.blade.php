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
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-9.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">Couple</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Aurora Starlight Elite</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-1.jpg" alt="Image">
                                                <span>By Nikon</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>3WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,000</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$25000.00</h6>.
                                                <span class="old-price font-sm">$26000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-10.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">Sports</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Thunderstorm Turbo Pro</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-2.jpg" alt="Image">
                                                <span>By Kirman</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>3WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,200</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$39000.00</h6>.
                                                <span class="old-price font-sm">$41000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-11.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">Crossover</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Eclipse Moonlight Sport</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-3.jpg" alt="Image">
                                                <span>By Morison</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>2WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,100</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$31000.00</h6>.
                                                <span class="old-price font-sm">$33000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-12.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">Hatchback</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Phoenix Firestorm GT</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-4.jpg" alt="Image">
                                                <span>By Alexis</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>4WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,400</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$61000.00</h6>.
                                                <span class="old-price font-sm">$63000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-13.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">Sedan</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Zephyr Windchaser XE</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-5.jpg" alt="Image">
                                                <span>By Johnny</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>4WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,200</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$56000.00</h6>.
                                                <span class="old-price font-sm">$58000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                                <div class="col-md-6 col-lg-4 col-xl-6">
                                    <div class="row g-0 product-default product-column border radius-md mb-30 align-items-center p-15">
                                        <figure class="product-img col-xl-5">
                                            <a href="car-details.html" target="_self" title="Link" class="lazy-container radius-sm ratio ratio-2-3">
                                                <img class="lazyload" src="assets/images/placeholder.png" data-src="assets/images/product/pro-14.png" alt="Product">
                                            </a>
                                            <a href="car-details.html" class="btn btn-sm btn-primary radius-sm hover-show" title="View Details">More Details</a>
                                        </figure>
                                        <div class="product-details col-xl-7">
                                            <span class="product-category font-sm">SUV</span>
                                            <h5 class="product-title mb-10"><a href="car-details.html" target="_self" title="Link">Radiant Sunburst Deluxe</a></h5>
                                            <div class="author mb-10">
                                                <img class="lazyload blur-up" src="assets/images/placeholder.png" data-src="assets/images/avatar-6.jpg" alt="Image">
                                                <span>By Emilie</span>
                                            </div>
                                            <ul class="product-icon-list mt-15 list-unstyled d-flex align-items-center">
                                                <li class="icon-start">
                                                    <i class="fal fa-tachometer-alt"></i>
                                                    <span>Automatic</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-tire"></i>
                                                    <span>4WD</span>
                                                </li>
                                                <li class="icon-start">
                                                    <i class="fal fa-map-marked-alt"></i>
                                                    <span>1,600</span>
                                                </li>
                                            </ul>
                                            <div class="product-price mt-10">
                                                <h6 class="new-price color-primary">$67000.00</h6>.
                                                <span class="old-price font-sm">$70000.00</span>
                                            </div>
                                        </div>
                                        <a href="car-details.html" class="btn btn-icon radius-sm" data-tooltip="tooltip" data-bs-placement="right" title="Save to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                    </div><!-- product-default -->
                                </div>
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Product-area end -->


@endsection