@extends('frontend.master_home')

@section('content')

<style>
	.checked {
  color: orange;
}

</style>

<main class="main">
            <section class="intro-section">
                <div class="owl-carousel owl-theme owl-nav-inner owl-dot-inner owl-nav-lg animation-slider gutter-no row cols-1"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'items': 1,
                    'responsive': {
                        '0': {
                            'nav': true,
                            'dots': false
                        },
                        '576': {
                            'nav': true,
                            'dots': false
                        },
                        '1600': {
                            'nav': true,
                            'dots': false
                        }   
                    }
                }">
                    
                @php

$sliders = App\Models\Slider::where('status',1)->orderBy('id','DESC')->limit(4)->get();

@endphp

@foreach($sliders as $slider)

                    <div class="banner banner-fixed intro-slide intro-slide2"
                        style="background-image: url({{asset($slider->slider_img_back)}}); background-color: #ebeef2; background-size:cover; background-position:center;" >
                        <div class="container">
                            <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                'name': 'fadeInUpShorter',
                                'duration': '1s'
                            }">
                                {{-- <img  src="{{asset($slider->slider_img)}}" alt="Banner"
                                    data-bottom-top="transform: translateX(10vh);"
                                    data-top-bottom="transform: translateX(-10vh);" width="480" height="633">  --}}
                            </figure>
                             <div class="banner-content d-inline-block y-50">
                                <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                    <span class="text-secondary">
                                        
                                         @if($slider->title == NULL)
                                   
                                   @else
                                   {{ $slider->title }}
                                   @endif
                                        </span>
                                </h5>
                              
                                <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '.8s'
                                }">
                                   @if($slider->description == NULL)
                                   
                                   @else
                                   {{ $slider->description }}
                                   @endif
                                </p>
                                <a href="{{ route('shop.products') }}"
                                    class="btn btn-dark btn-outline btn-rounded btn-icon-right slide-animate"
                                    data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s',
                                    'delay': '1s'
                                }">
                                    SHOP NOW<i class="w-icon-long-arrow-right"></i>
                                </a>
                            </div> 
                            <!-- End of .banner-content -->
                        </div>
                        <!-- End of .container -->
                    </div>
                    <!-- End of .intro-slide2 -->
@endforeach
                
                </div>
                <!-- End of .owl-carousel -->
            </section>
            <!-- End of .intro-section -->

            

            {{-- <div class="container">
                <div class="owl-carousel owl-theme row cols-md-4 cols-sm-3 cols-1icon-box-wrapper appear-animate br-sm mt-6 mb-6"
                    data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'loop': false,
                    'responsive': {
                        '0': {
                            'items': 1
                        },
                        '576': {
                            'items': 2
                        },
                        '768': {
                            'items': 3
                        },
                        '992': {
                            'items': 3
                        },
                        '1200': {
                            'items': 4
                        }
                    }
                }">
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-shipping">
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                            <p class="text-default">For all orders over $99</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary">
                        <span class="icon-box-icon icon-payment">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                            <p class="text-default">We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-money">
                        <span class="icon-box-icon icon-money">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                            <p class="text-default">Any back within 30 days</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side icon-box-primary icon-box-chat">
                        <span class="icon-box-icon icon-chat">
                            <i class="w-icon-chat"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                            <p class="text-default">Call or email us 24/7</p>
                        </div>
                    </div>
                </div>
                <!-- End of Iocn Box Wrapper -->

                <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo1/categories/1-1.jpg') }}" alt="Category Banner"
                                    width="610" height="160" style="background-color: #ecedec;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                        class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                                </h5>
                                <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                        class="font-weight-normal                       text-capitalize">Collection</span>
                                </h3>
                                <div class="banner-price-info font-weight-normal">Starting at <span
                                        class="text-secondary                       font-weight-bolder">$170.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed br-xs">
                            <figure>
                                <img src="{{ asset('frontend/assets/images/demos/demo1/categories/1-2.jpg') }}" alt="Category Banner"
                                    width="610" height="160" style="background-color: #636363;" />
                            </figure>
                            <div class="banner-content y-50 mt-0">
                                <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                                <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                        class="font-weight-normal text-capitalize">Collection</span></h3>
                                <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                                    <span class="text-secondary font-weight-bolder">$90.00</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Category Banner Wrapper -->

                <div class="row deals-wrapper appear-animate mb-8">
                    <div class="col-lg-9 mb-4">
                        <div class="single-product h-100 br-sm">
                            <h4 class="title-sm title-underline font-weight-bolder ls-normal">Deals Hot Of The Day</h4>
                            <div class="owl-carousel owl-theme owl-nav-top owl-nav-lg row cols-1 gutter-no"
                                data-owl-options="{
                                'nav': true,
                                'dots': false,
                                'margin': 20,
                                'items': 1
                            }">

                            @foreach($hot_deals as $item)



@php


        $multiImag = App\Models\MultiImg::where('product_id',$item->id)->get();

        $color_en =  $item->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_others =  $item->product_color_others;
        $product_color_others = explode(',', $color_others);

        $size_en =  $item->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_others =  $item->product_size_others;
        $product_size_others = explode(',', $size_others);


@endphp









                                <div class="product product-single row">
                                    <div class="col-md-6">
                                        <div class="product-gallery product-gallery-vertical mb-0">
                                            <div
                                                class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                               
                                               
                                                @foreach($multiImag  as $img)
                                               
                                                <figure class="product-image">
                                                    <img src="{{ asset($img->photo_name) }}"
                                                        data-zoom-image="{{ asset($img->photo_name) }}"
                                                        alt="Product Image" width="800" height="900">
                                                </figure>
                                           
                                             @endforeach
                                            
                                            </div>
                                            <div class="product-thumbs-wrap">
                                                <div class="product-thumbs">
                                                @foreach($multiImag  as $img)

                                                    <div class="product-thumb active">
                                                        <img src="{{ asset($img->photo_name) }}"
                                                            alt="Product thumb" width="60" height="68" />
                                                    </div>
                                                  @endforeach
                                                   
                                                </div>
                                            </div>
                                            @php
                                            $amount = $item->selling_price_en - $item->discount_price_en;
                                            $discount = ($amount/$item->selling_price_en) * 100;

                                            $amount1 = $item->selling_price_others - $item->discount_price_others;
                                            $discount1 = ($amount1/$item->selling_price_others) * 100;
                                        @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="product-details scrollable">
                                            <h2 class="product-title mb-1" id="pname"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            @if(session()->get('language') == 'others')
                          
                          {{ Str::limit($item->product_name_others, 22 )  }}
                          @else
                          
                          {{ Str::limit($item->product_name_en, 22 )  }}
                          @endif
                                        </a></h2>

                                            <hr class="product-divider">

                                           
                                            @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                            <!-- <div class="product-countdown-container flex-wrap">
                                                <label class="mr-2 text-default">Offer Ends In:</label>
                                                <div class="product-countdown countdown-compact"
                                                    data-until="2022, 12, 31" data-compact="true">
                                                    629 days, 11: 59: 52</div>
                                            </div> -->

                                            <div class="ratings-container">
                                                
                                            @php 
                                                $reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
                                                $avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
                                                
                                            @endphp
                                            <span style="margin-right:4px;">
                                            @if($avarage == 0)
                                                                                No Rating Yet 
                                                                                @elseif($avarage == 1 || $avarage < 2)
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                @elseif($avarage == 2 || $avarage < 3)
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                @elseif($avarage == 3 || $avarage < 4)
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                <span class="fa fa-star"></span>

                                                                                @elseif($avarage == 4 || $avarage < 5)
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star"></span>
                                                                                @elseif($avarage == 5 || $avarage < 5)
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                <span class="fa fa-star checked"></span>
                                                                                @endif
                                                                                </span>

                                            <a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                            </div>

                                            @if( $item->product_size_en == NULL )
									@else

                                            <div class="product-form product-variation-form product-size-swatch mb-3">
                                                <label class="mb-1">Size:</label>
                                                <div class="flex-wrap d-flex align-items-center product-variations">
                                                <select class="form-select size" id="size" name="size" aria-label="Default select example">
                                                @if(session()->get('language') == 'others')
								@forelse( $product_size_others as $size)
								<option value="{{  $size }}" >{{  $size }}</option>
								@empty
								@endforelse
								@else
								@forelse($product_size_en as $size)
								
                                <option value="{{  $size }}" >{{  $size }}</option>
								@empty
								@endforelse
								@endif
                                                   
                                </select>
                                                   
                                                </div>
                                                
                                                <!-- <a href="#" class="product-variation-clean">Clean All</a> -->
                                            </div>
                                            @endif

                                            <div class="product-form product-variation-form product-size-swatch mb-3">
                                                <label class="mb-1">Color:</label>
                                                <div class="flex-wrap d-flex align-items-center product-variations">
                                                    
                                            <select class="form-select size" id="color" name="color" aria-label="Default select example">
                                           
                                                @if(session()->get('language') == 'others')
								@forelse($product_color_others as $color)
								
                                <option value="{{  $color }}" >{{  $color }}</option>
								@empty
								@endforelse
								@else
								@forelse($product_color_en as $color)
								
                                <option value="{{  $color }}" >{{  $color }}</option>
								@empty
								@endforelse
								
                                @endif

                                </select>
                                                   
                                                </div>
                                                
                                                <!-- <a href="#" class="product-variation-clean">Clean All</a> -->
                                            </div>
                                            
                                            <!-- <div class="product-variation-price">
                                                <span></span>
                                            </div> -->

                                            <div class="product-form pt-4">
                                                <div class="product-qty-form mb-2 mr-2">
                                                    <div class="input-group">
                                                    <input class="quantity form-control" type="number" id="qty" min="1"
                                                            max="10000000">
                                                        <!-- <button class="quantity-plus w-icon-plus"></button>
                                                        <button class="quantity-minus w-icon-minus"></button> -->
                                                    </div>
                                                </div>
                                                <input type="hidden" id="product_id" value="{{ $item->id }}" min="1">
                                                
                                                <button class="btn btn-primary " type="submit" onclick="addToCart()" >
                                                    <i class="w-icon-cart"></i>
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>

                                            <div class="social-links-wrapper mt-1">
                                                <div class="social-links">
                                                    <div class="social-icons social-no-color border-thin">
                                                        <a href="#"
                                                            class="social-icon social-facebook w-icon-facebook"></a>
                                                        <a href="#"
                                                            class="social-icon social-twitter w-icon-twitter"></a>
                                                        <a href="#"
                                                            class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                        <a href="#"
                                                            class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                        <a href="#"
                                                            class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                    </div>
                                                </div>
                                                <span class="divider d-xs-show"></span>
                                                <div class="product-link-wrapper d-flex">
                                                <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                                    <a href="#"
                                                        class="btn-product-icon btn-compare btn-icon-left w-icon-compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Product Single -->

                                @endforeach

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 mb-4">
                        <div class="widget widget-products widget-products-bordered h-100">
                            <div class="widget-body br-sm h-100">
                                <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Special Offers</h4>
                                <div class="owl-carousel owl-theme owl-nav-top row cols-lg-1 cols-md-3"
                                    data-owl-options="{
                                    'nav': true,
                                    'dots': false,
                                    'margin': 20,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3
                                        },
                                        '992': {
                                            'items': 1
                                        }
                                    }
                                }">

                                @foreach($special_offers->chunk(3) as $chunk)
                                    <div class="product-widget-wrap">


                                 @foreach($chunk as $item)

                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                                        <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                        width="105" height="118" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                            width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                                    @if(session()->get('language') == 'others')
                          
                                                    {{ Str::limit($item->product_name_others, 19 )  }}
                                                    @else
                                                    
                                                    {{ Str::limit($item->product_name_en, 19 )  }}
                                                    @endif
                                                    </a>
                                                </h4>
                                                <div class="ratings-container">
                                                @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp

@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif

                                                </div>


                                                @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                            </div>
                                        </div>


@endforeach

                                      
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div> --}}

            <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
                <div class="container pb-2">
                    <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
                    <div class="owl-carousel owl-theme row cols-lg-6 cols-md-5 cols-sm-3 cols-2" data-owl-options="{
                        'nav': false,
                        'dots': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 5
                            },
                            '992': {
                                'items': 6
                            }
                        }
                    }">

                    @foreach($all_category as $item)

                        <div class="category category-classic category-absolute overlay-zoom br-xs">
                            <a href="{{ url('/category/'.$item->id.'/'.$item->category_slug_en) }}" class="category-media">
                                <img src="{{ asset($item->category_image_one) }}" alt="Category" width="130"
                                    height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">
                                @if(session()->get('language') == 'others')
                                            {{ $item->category_name_others }}
                                            @else
                                            {{ $item->category_name_en }}
                                            @endif
                                </h4>
                                <a href="{{ url('/category/'.$item->id.'/'.$item->category_slug_en) }}" class="btn btn-primary btn-link btn-underline">Shop
                                    Now</a>
                            </div>
                        </div>
                       @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <!-- End of .category-section top-category -->

            <div class="container">
                <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
                </h2>
                <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
                    <ul class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link active br-sm font-size-md ls-normal" href="#tab1-1">New arrivals</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Best seller</a>
                        </li>
                        <li class="nav-item mr-2 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-3">most popular</a>
                        </li>
                        <li class="nav-item mr-0 mb-2">
                            <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-4">Featured</a>
                        </li>
                    </ul>
                </div>
                <!-- End of Tab -->
                
                <div class="tab-content product-wrapper appear-animate">
                    <div class="tab-pane active pt-4" id="tab1-1">
                        <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">

                        @foreach($new_arrivals as $new_arrival)

                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{ url('product/details',$new_arrival->id.'/'.$new_arrival->product_slug_en) }}">
                                            <img src="{{ asset($new_arrival->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($new_arrival->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $new_arrival->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $new_arrival->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>



                     @php
                          $amount = $new_arrival->selling_price_en - $new_arrival->discount_price_en;
                          $discount = ($amount/$new_arrival->selling_price_en) * 100;

                          $amount1 = $new_arrival->selling_price_others - $new_arrival->discount_price_others;
                          $discount1 = ($amount1/$new_arrival->selling_price_others) * 100;
                     @endphp


                     @if(session()->get('language') == 'others')


                                @if ($new_arrival->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($new_arrival->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif



                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ url('product/details',$new_arrival->id.'/'.$new_arrival->product_slug_en) }}">
                                         
                                        @if(session()->get('language') == 'others')
                          
                                        {{ Str::limit($new_arrival->product_name_others, 19 )  }}
                                        @else
                                        
                                        {{ Str::limit($new_arrival->product_name_en, 19 )  }}
                                        @endif

                                        </a></h4>
                                        <div class="ratings-container">
                                            @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                                    </span>

<a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                        </div>
                        

                            @if($new_arrival->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $new_arrival->selling_price_others }}                                             
                                            @else
                                            {{ $new_arrival->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $new_arrival->discount_price_others }}                                             
                                            @else
                                            {{ $new_arrival->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $new_arrival->selling_price_others }}                                             
                                            @else
                                            {{ $new_arrival->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif


                                    </div>
                                </div>
                            </div>
@endforeach

                        </div>
                    </div>


                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-2">
                        <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">

                        @foreach($best_seller as $item)

                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                        <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>

                                        @php
                          $amount = $item->selling_price_en - $item->discount_price_en;
                          $discount = ($amount/$item->selling_price_en) * 100;

                          $amount1 = $item->selling_price_others - $item->discount_price_others;
                          $discount1 = ($amount1/$item->selling_price_others) * 100;
                     @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif


                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                        @if(session()->get('language') == 'others')
                          
                                        {{ Str::limit($item->product_name_others, 19 )  }}
                                        @else
                                        
                                        {{ Str::limit($item->product_name_en, 19 )  }}
                                        @endif
                                        </a>
                                        </h4>
                                        <div class="ratings-container">
                                        @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                                    </span>

<a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                        </div>

                                        @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                     

                            @endforeach





                        </div>
                    </div>
                    <!-- End of Tab Pane -->


                    <div class="tab-pane pt-4" id="tab1-3">
                        <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">

                        @foreach($most_populer as $item)

                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                    <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                        <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>

                        @php
                          $amount = $item->selling_price_en - $item->discount_price_en;
                          $discount = ($amount/$item->selling_price_en) * 100;

                          $amount1 = $item->selling_price_others - $item->discount_price_others;
                          $discount1 = ($amount1/$item->selling_price_others) * 100;
                     @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif

                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                        @if(session()->get('language') == 'others')
                          
                                        {{ Str::limit($item->product_name_others, 19 )  }}
                                        @else
                                        
                                        {{ Str::limit($item->product_name_en, 19 )  }}
                                        @endif
                                            </a></h4>
                                        <div class="ratings-container">
                                        @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                                    </span>

                    <a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                        </div>

                                     @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else
                                 
                                 <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        
                                        @endif
                                    </div>
                                </div>
                            </div>


                            @endforeach
                           
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                    <div class="tab-pane pt-4" id="tab1-4">
                        <div class="row cols-xl-6 cols-md-4 cols-sm-3 cols-2">

                        @foreach($featured as $item)
                        
                            <div class="product-wrap">
                                <div class="product text-center">
                                    <figure class="product-media">
                                        <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                        </a>
                                        <div class="product-action-vertical">
                                        <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                title="Quickview"></a>
                                            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                title="Add to Compare"></a>
                                        </div>

                                        @php
                                            $amount = $item->selling_price_en - $item->discount_price_en;
                                            $discount = ($amount/$item->selling_price_en) * 100;

                                            $amount1 = $item->selling_price_others - $item->discount_price_others;
                                            $discount1 = ($amount1/$item->selling_price_others) * 100;
                                        @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif

                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                        @if(session()->get('language') == 'others')
                          
                                        {{ Str::limit($item->product_name_others, 19 )  }}
                                        @else
                                        
                                        {{ Str::limit($item->product_name_en, 19 )  }}
                                        @endif
                                        </a>
                                        </h4>
                                        <div class="ratings-container">
                                        @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                                    </span>

<a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                        </div>

                                        @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                    </div>
                                </div>
                            </div>

                            @endforeach
                       
                        </div>
                    </div>
                    <!-- End of Tab Pane -->
                </div>
                <!-- End of Tab Content -->

                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/3-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"> </h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">
                                   <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/3-2.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"></h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">
                                <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Home End of Category Banner -->

                @php

      $category = App\Models\Category::where('show_product',1)->orderBy('category_name_en','ASC')->get();

      @endphp

      @foreach($category as $cat)

                <div class="product-wrapper-1 appear-animate mb-5">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">
                        @if(session()->get('language') == 'others')
                          {{ $cat->category_name_others }}
                          @else
                          {{ $cat->category_name_en }}
                          @endif
                        </h2>
                        <a href="{{ url('/category/'.$cat->id.'/'.$cat->category_slug_en) }}" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">

                        <!-- <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/2.jpg); 
                                background-color: #ebeced;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                        New Arrivals<br> <span
                                            class="font-weight-normal text-capitalize">Collection</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop Now</a>
                                </div>
                            </div>
                        </div> -->

                        <!-- End of Banner -->

                        <div class="col-lg-12 col-sm-12">
                            <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 3
                                    },
                                    '992': {
                                        'items': 5
                                    },
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }">

                            @php
                    
                    $show_by_category = DB::table('products')->where('status',1)->where('Category_id',$cat->id)->orderBy('id','DESC')->limit(20)->get();
                          
                    @endphp

                    @foreach($show_by_category->chunk(2) as $chunk)

                                <div class="product-col">

                            @foreach( $chunk as $item)

                                <div class="product-wrap product text-center ">
                                        <figure class="product-media">
                                            <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">

                                                    <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                            <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>

                                            @php
                                            $amount = $item->selling_price_en - $item->discount_price_en;
                                            $discount = ($amount/$item->selling_price_en) * 100;

                                            $amount1 = $item->selling_price_others - $item->discount_price_others;
                                            $discount1 = ($amount1/$item->selling_price_others) * 100;
                                        @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif

                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            @if(session()->get('language') == 'others')
                          
                                            {{ Str::limit($item->product_name_others, 19 )  }}
                                            @else
                                            
                                            {{ Str::limit($item->product_name_en, 19 )  }}
                                            @endif
                                                    </a></h4>
                                            <div class="ratings-container">
                                            @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                                    </span>

<a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
                                            </div>
                                            @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                        </div>
                                    </div>

                            @endforeach

                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                            @endforeach



<div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/4-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"> </h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">
                                   <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/5-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"></h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">
                                <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="product-wrapper-1 appear-animate mb-8">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">New Collection</h2>
                        <a href="{{ route('featured.products') }}" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/3.jpg); 
                            background-color: #252525;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                                    <hr class="banner-divider bg-white mb-2">
                                    <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                        Top Camera <br> <span
                                            class="font-weight-normal text-capitalize">Mirrorless</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-white btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End of Banner -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 3
                                    },
                                    '992': {
                                        'items': 4
                                    },
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }">

                            @foreach($trending->chunk(2) as $chunk)

                         

                            
                                <div class="product-col">

                               @foreach($chunk as $item)

                                    <div class="product-wrap product text-center ">
                                        <figure class="product-media">
                                            <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">

                                                    <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                            <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quickview"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>

                                            @php
                                            $amount = $item->selling_price_en - $item->discount_price_en;
                                            $discount = ($amount/$item->selling_price_en) * 100;

                                            $amount1 = $item->selling_price_others - $item->discount_price_others;
                                            $discount1 = ($amount1/$item->selling_price_others) * 100;
                                        @endphp


                     @if(session()->get('language') == 'others')


                                @if ($item->discount_price_others == NULL)

                                @else
                                            <div class="product-label-group">
                                                <label class="product-label label-discount">
                                            {{ round($discount1) }}% Off
                                            </label>
                                            </div>
                                @endif


                    @else

                                  @if ($item->discount_price_en == NULL)
                                 @else
                                    <div class="product-label-group">
                                            <label class="product-label label-discount">
                                            {{ round($discount) }}% Off
                                        </label>
                                        </div>
                                 @endif

                     @endif

                                        </figure>
                                        <div class="product-details">
                                            <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            @if(session()->get('language') == 'others')
                          
                                            {{ Str::limit($item->product_name_others, 19 )  }}
                                            @else
                                            
                                            {{ Str::limit($item->product_name_en, 19 )  }}
                                            @endif
                                                    </a></h4>
                                            <div class="ratings-container">
                                            @php 
	$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');
    
@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
                                    No Rating Yet 
                                    @elseif($avarage == 1 || $avarage < 2)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 2 || $avarage < 3)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 3 || $avarage < 4)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>

                                    @elseif($avarage == 4 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    @elseif($avarage == 5 || $avarage < 5)
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    @endif
                       
                        </span>
<span class="rating-reviews">({{ count($reviewcount) }} Reviews)</span>

                                            </div>
                                            @if($item->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $item->discount_price_others }}                                             
                                            @else
                                            {{ $item->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $item->selling_price_others }}                                             
                                            @else
                                            {{ $item->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

                                        </div>
                                    </div>




                            @endforeach

                                   
                                </div>

                              
                                @endforeach 



                            
                                
                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

         <!--       <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
                    background-color: #383839;">
                    <div class="banner-content align-items-center">
                        <div class="content-left d-flex align-items-center mb-3">
                            <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                                30
                                <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                            </div>
                            <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                        </div>
                        <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                            <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                                <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                                    Best Offer</h3>
                                <p class="text-white mb-0">Use code
                                    <span
                                        class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                        <strong>12345</strong></span> to get best offer.</p>
                            </div>
                            <a href="shop-banner-sidebar.html"
                                class="btn btn-white btn-outline btn-rounded btn-icon-right mb-3">Shop Now<i
                                    class="w-icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>     -->
                <!-- End of Banner Fashion -->
                
                <div class="row category-cosmetic-lifestyle appear-animate mb-5">
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-1 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/13-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #3B4B48;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"> </h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize text-white">
                                   <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-white btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="banner banner-fixed category-banner-2 br-xs">
                            <figure>
                                <img src="{{asset('frontend/assets/images/demos/demo1/categories/12-1.jpg')}}" alt="Category Banner"
                                    width="610" height="200" style="background-color: #E5E5E5;" />
                            </figure>
                            <div class="banner-content y-50 pt-1">
                                <h5 class="banner-subtitle font-weight-bold text-uppercase"></h5>
                                <h3 class="banner-title font-weight-bolder text-capitalize">
                                <br></h3>
                                <a href="shop-banner-sidebar.html"
                                    class="btn btn-dark btn-link btn-underline btn-icon-right"><i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                @php

$brand = App\Models\Brand::where('status',1)->orderBy('brand_name_en','ASC')->get();

@endphp
@foreach($brand  as $branditem)
                <div class="product-wrapper-1 appear-animate mb-7">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">
                        @if(session()->get('language') == 'others')
                          {{ $branditem->brand_name_others }}
                          @else
                          {{ $branditem->brand_name_en }}
                          @endif
                        </h2>
                        <a href="{{ url('/brand/'.$cat->id.'/'.$branditem->brand_slug_en) }}" class="font-size-normal font-weight-bold ls-25 mb-0">More
                            Products<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                    <div class="row">
                        <!-- <div class="col-lg-3 col-sm-4 mb-4">
                            <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/5.jpg); 
                            background-color: #EAEFF3;">
                                <div class="banner-content content-top">
                                    <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                                    <hr class="banner-divider bg-dark mb-2">
                                    <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                        Trending <br> <span class="font-weight-normal text-capitalize">House
                                            Utensil</span>
                                    </h3>
                                    <a href="shop-banner-sidebar.html"
                                        class="btn btn-dark btn-outline btn-rounded btn-sm">shop now</a>
                                </div>
                            </div>
                        </div> -->
                        <!-- End of Banner -->
                        <div class="col-lg-12 col-sm-12">
                            <div class="owl-carousel owl-theme row cols-xl-4 cols-lg-3 cols-2" data-owl-options="{
                                'nav': false,
                                'dots': true,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
                                    },
                                    '576': {
                                        'items': 3
                                    },
                                    '992': {
                                        'items': 4
                                    },
                                    '1200': {
                                        'items': 6
                                    }
                                }
                            }">

                            @php
                    
                    $show_by_brand = DB::table('products')->where('status',1)->where('brand_id',$branditem->id)->orderBy('id','DESC')->limit(20)->get();
                          
                    @endphp
          
                  @foreach($show_by_brand->chunk(2) as $chunk)

                  <div class="product-col">

                    @foreach($chunk as $item)           

<div class="product-wrap product text-center ">
    <figure class="product-media">
        <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">

                <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
            width="300" height="338" />
        <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
            width="300" height="338" />
        </a>
        <div class="product-action-vertical">
        <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
            title="Add to cart"></button>
        <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
            title="Add to wishlist"></button>
            <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                title="Quickview"></a>
            <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                title="Add to Compare"></a>
        </div>

        @php
        $amount = $item->selling_price_en - $item->discount_price_en;
        $discount = ($amount/$item->selling_price_en) * 100;

        $amount1 = $item->selling_price_others - $item->discount_price_others;
        $discount1 = ($amount1/$item->selling_price_others) * 100;
    @endphp


@if(session()->get('language') == 'others')


@if ($item->discount_price_others == NULL)

@else
        <div class="product-label-group">
            <label class="product-label label-discount">
        {{ round($discount1) }}% Off
        </label>
        </div>
@endif


@else

@if ($item->discount_price_en == NULL)
@else
<div class="product-label-group">
        <label class="product-label label-discount">
        {{ round($discount) }}% Off
    </label>
    </div>
@endif

@endif

    </figure>
    <div class="product-details">
        <h4 class="product-name"><a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
        @if(session()->get('language') == 'others')

        {{ Str::limit($item->product_name_others, 19 )  }}
        @else
        
        {{ Str::limit($item->product_name_en, 19 )  }}
        @endif
                </a></h4>
        <div class="ratings-container">
        @php 
$reviewcount = App\Models\Review::where('product_id',$item->id)->where('status',1)->latest()->get();
$avarage = App\Models\Review::where('product_id',$item->id)->where('status',1)->avg('rating');

@endphp
<span style="margin-right:4px;">
@if($avarage == 0)
No Rating Yet 
@elseif($avarage == 1 || $avarage < 2)
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
@elseif($avarage == 2 || $avarage < 3)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>
@elseif($avarage == 3 || $avarage < 4)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
<span class="fa fa-star"></span>

@elseif($avarage == 4 || $avarage < 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star"></span>
@elseif($avarage == 5 || $avarage < 5)
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
@endif
</span>

<a  class="rating-reviews">({{ count($reviewcount) }} Reviews)</a>
        </div>
        @if($item->discount_price_en == NULL)
    <div class="product-price">

        <ins class="new-price">
        @if(session()->get('language') == 'others')
         {{ $item->selling_price_others }}                                             
        @else
        {{ $item->selling_price_en }}
        @endif
        </ins>
        
    </div>
    
    @else

    <div class="product-price">
    
        <ins class="new-price"> 
        @if(session()->get('language') == 'others')
         {{ $item->discount_price_others }}                                             
        @else
        {{ $item->discount_price_en }}
        @endif
        
    </ins>
        <del class="old-price">
        @if(session()->get('language') == 'others')
         {{ $item->selling_price_others }}                                             
        @else
        {{ $item->selling_price_en }}
        @endif
        
    </del>
        
                                                
        
    </div>
    @endif

    </div>
</div>



@endforeach



</div>
                              

@endforeach



                            </div>
                            <!-- End of Produts -->
                        </div>
                    </div>
                </div>
                <!-- End of Product Wrapper 1 -->

                @endforeach

                <h2 class="title title-underline mb-4 ls-normal appear-animate">Our Clients</h2>
                <div class="owl-carousel owl-theme brands-wrapper mb-9 row gutter-no cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2 appear-animate"
                    data-owl-options="{
                    'nav': false,
                    'dots': false,
                    'margin': 0,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 4
                        },
                        '992': {
                            'items': 5
                        },
                        '1200': {
                            'items': 6
                        }
                    }
                }">


@foreach($brands->chunk(2) as $chunk)


                    <div class="brand-col">                 
                    @foreach($chunk as $brand)
                   
                        <figure class="brand-wrapper">
                            <img src="{{ asset($brand->brand_image) }}" alt="Brand" width="410" height="186" />
                        </figure>

                        @endforeach
                                        
                    </div>

@endforeach
                  
                </div>
                <!-- End of Brands Wrapper -->

                <div class="post-wrapper appear-animate mb-4">
                    <div class="title-link-wrapper pb-1 mb-4">
                        <h2 class="title ls-normal mb-0">From Our Blog</h2>
                        <a href="{{ route('blog') }}" class="font-weight-bold font-size-normal">View All Articles</a>
                    </div>
                    <div class="owl-carousel owl-theme row cols-lg-4 cols-md-3 cols-sm-2 cols-1" data-owl-options="{
                        'items': 4,
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '576': {
                                'items': 3
                            },
                            '768': {
                                'items': 4
                            },
                            '992': {
                                'items': 6,
                                'dots': false
                            }
                        }
                    }">

                    @foreach($blogpost as $blog)

                        <div class="post text-center overlay-zoom">
                            <figure class="post-media br-sm">
                                <a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}">
                                    <img src="{{asset($blog->post_image)}}" alt="Post" width="280" height="180"
                                        style="background-color: #4b6e91;" />
                                </a>
                            </figure>
                            <div class="post-details">
                                <h4 class="post-title"><a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}">
                                @if(session()->get('language') == 'others')
                          
                          {{ Str::limit($blog->post_title_others, 19 )  }}
                          @else
                          
                          {{ Str::limit($blog->post_title_en, 19 )  }}
                          @endif
                                </a>
                                </h4>
                                <a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}" class="btn btn-link btn-dark btn-underline">Read More<i
                                        class="w-icon-long-arrow-right"></i></a>
                            </div>
                        </div>


                    @endforeach


                  


                        
                    </div>
                </div>
                <!-- Post Wrapper -->

                <!-- <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2> -->
                <div class="owl-carousel owl-theme owl-shadow-carousel appear-animate row cols-xl-8 cols-lg-6 cols-md-4 cols-2 pb-2 mb-10"
                    data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
                        '0': {
                            'items': 2
                        },
                        '576': {
                            'items': 3
                        },
                        '768': {
                            'items': 5
                        },
                        '992': {
                            'items': 6
                        },
                        '1200': {
                            'items': 8,
                            'dots': false
                        }
                    }
                }">
                    <!-- <div class="product-wrap mb-0">
                        <div class="product text-center product-absolute">
                            <figure class="product-media">
                                <a href="https://www.portotheme.com/html/wolmart/product-defaproduct-default.html">
                                    <img src="{{asset('frontend/assets/images/demos/demo1/products/7-1.jpg')}}" alt="Category image"
                                        width="130" height="146" style="background-color: #fff" />
                                </a>
                            </figure>
                            <h4 class="product-name">
                                <a href="product-default.html">Women's Fashion Handbag</a>
                            </h4>
                        </div>
                    </div> -->
                   
                </div>
                <!-- End of Reviewed Producs -->
            </div>
            <!--End of Catainer -->

         

        </main>


        @endsection