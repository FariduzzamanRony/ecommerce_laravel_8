@extends('frontend.common.product_master')

@section('product_content')

<style>
	.checked {
  color: orange;
}
</style>

@php 
	$reviewcount = App\Models\Review::where('product_id',$products->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$products->id)->where('status',1)->avg('rating');


$counts = App\Models\Review::where('product_id',$products->id)->where('status',1)->count('rating');

$one = App\Models\Review::where('product_id',$products->id)->where('status',1)->where('rating',1)->count('rating');
$two = App\Models\Review::where('product_id',$products->id)->where('status',1)->where('rating',2)->count('rating');
$three = App\Models\Review::where('product_id',$products->id)->where('status',1)->where('rating',3)->count('rating');
$four = App\Models\Review::where('product_id',$products->id)->where('status',1)->where('rating',4)->count('rating');
$five = App\Models\Review::where('product_id',$products->id)->where('status',1)->where('rating',5)->count('rating');

    if($counts){

    $avag_one = (100*$one)/$counts;
    $avag_two = (100*$two)/$counts;
    $avag_three = (100*$three)/$counts;
    $avag_four = (100*$four)/$counts;
    $avag_five = (100*$five)/$counts;  
    
    }

@endphp



<link href="{{ asset('frontend/rating_star/star_style.css') }}" type="text/css" rel="stylesheet" media="all" />


     <!-- Start of Main -->
     <main class="main mb-10 pb-1">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav container">
                <ul class="breadcrumb bb-no">
                    <li><a href="demo1.html">Home</a></li>
                    <li>Products</li>
                </ul>
                <ul class="product-nav list-style-none">
                    <li class="product-nav-prev">
                        <a href="#">
                            <i class="w-icon-angle-left"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Soft Sound Maker</span>
                        </span>
                    </li>
                    <li class="product-nav-next">
                        <a href="#">
                            <i class="w-icon-angle-right"></i>
                        </a>
                        <span class="product-nav-popup">
                            <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110"
                                height="110" />
                            <span class="product-name">Fabulous Sound Speaker</span>
                        </span>
                    </li>
                </ul>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content">
                            <div class="product product-single row">
                                <div class="col-md-6 mb-4 mb-md-8">
                                    <div class="product-gallery product-gallery-sticky">
                                        <div
                                            class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no">
                                            
                                            
                                            @foreach($multiImag  as $img)
                                            <figure class="product-image" >
                                                <img src="{{ asset($img->photo_name) }}"
                                                    data-zoom-image="{{ asset($img->photo_name) }}"
                                                    alt="Fashion Table Sound Marker" width="800" height="900">
                                            </figure>
                                            @endforeach

                                      
                                           
                                           
                                        </div>
                                        <div class="product-thumbs-wrap">
                                            <div class="product-thumbs row cols-4 gutter-sm">

                                            @foreach($multiImag  as $img)
                                                <div class="product-thumb active">
                                                    <img src="{{ asset($img->photo_name) }}"
                                                        alt="Product Thumb" width="800" height="900">
                                                </div>
                                                @endforeach
                                                
                                                
                                                
                                             
                                            </div>
                                            <button class="thumb-up disabled"><i class="w-icon-angle-left"></i></button>
                                            <button class="thumb-down disabled"><i
                                                    class="w-icon-angle-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-6 mb-md-8">
                                    <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                        <h1 class="product-title" id="pname">
                                        @if(session()->get('language') == 'others')
                          
                          {{ $products->product_name_others  }}
                          @else
                          
                          {{ $products->product_name_en  }}
                          @endif
                                    </h1>
                                        <div class="product-bm-wrapper">
                                            <figure class="brand">
                                                <img src="{{ asset($products->brand->brand_image) }}" alt="Brand"
                                                    width="85" height="48" />
                                            </figure>
                                            <div class="product-meta">
                                                <div class="product-categories">
                                                    Category:
                                                    <span class="product-category"><a href="#">
                                                    @if(session()->get('language') == 'others')
                          
                                                    {{ $products->category->category_name_others  }}
                                                    @else
                                                    
                                                    {{ $products->category->category_name_en  }}
                                                    @endif
                                                    </a></span>
                                                </div>
                                                <div class="product-sku">
                                                    SKU: <span>{{ $products->sku  }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="product-divider">

                                        @if($products->discount_price_en == NULL)
                                        <div class="product-price">

                                            <ins class="new-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $products->selling_price_others }}                                             
                                            @else
                                            {{ $products->selling_price_en }}
                                            @endif
                                            </ins>
                                            
                                        </div>
                                        
                                        @else

                                        <div class="product-price">
                                        
                                            <ins class="new-price"> 
                                            @if(session()->get('language') == 'others')
                                             {{ $products->discount_price_others }}                                             
                                            @else
                                            {{ $products->discount_price_en }}
                                            @endif
                                            
                                        </ins>
                                            <del class="old-price">
                                            @if(session()->get('language') == 'others')
                                             {{ $products->selling_price_others }}                                             
                                            @else
                                            {{ $products->selling_price_en }}
                                            @endif
                                            
                                        </del>
                                            
                                                                                    
                                            
                                        </div>
                                        @endif

        

                                        <div class="ratings-container">

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

                                        <div class="product-short-desc">
                                            <ul class="list-type-check list-style-none">
                                            @if(session()->get('language') == 'others')
                          
                          {!! Str::limit($products->short_descp_others, 500 )  !!}
                          @else
                          
                          {!! Str::limit($products->short_descp_en, 500 )  !!}
                          @endif
                                            </ul>
                                        </div>

                                        <hr class="product-divider">

                                        <div class="product-form product-variation-form product-size-swatch">
                                            <label class="mb-1">color:</label>
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
                                            
                                        </div>
                                        @if( $products->product_size_en == NULL )
									@else
                                        <div class="product-form product-variation-form product-size-swatch">
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
                                            <!-- <a href="#" class="product-variation-clean" >Clean All</a> -->
                                        </div>
                                        @endif

                                        <div class="fix-bottom product-sticky-content sticky-content" >
                                            <div class="product-form container">
                                                <div class="product-qty-form">
                                                    <div class="input-group">
                                                        <input class="quantity form-control" type="number" id="qty" min="1"
                                                            max="10000000">

                                                            
                                                        <!-- <button class="quantity-plus w-icon-plus"></button>
                                                        <button class="quantity-minus w-icon-minus"></button> -->
                                                    </div>
                                                </div>
                                                <input type="hidden" id="product_id" value="{{ $products->id }}" min="1">
                                                
                                                <button class="btn btn-primary btn-cart" type="submit" onclick="addToCart()" >
                                                    <i class="w-icon-cart"></i>
                                                    <span>Add to Cart</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="social-links-wrapper">
                                            <div class="social-links">
                                                <div class="social-icons social-no-color border-thin">
                                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                                    <a href="#"
                                                        class="social-icon social-pinterest fab fa-pinterest-p"></a>
                                                    <a href="#" class="social-icon social-whatsapp fab fa-whatsapp"></a>
                                                    <a href="#"
                                                        class="social-icon social-youtube fab fa-linkedin-in"></a>
                                                </div>
                                            </div>
                                            <span class="divider d-xs-show"></span>
                                            <div class="product-link-wrapper d-flex">
                                                <a href="#"
                                                    class="btn-product-icon btn-wishlist w-icon-heart"><span></span></a>
                                                <a href="#"
                                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a href="#product-tab-description" class="nav-link active">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#product-tab-specification" class="nav-link">Specification</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a href="#product-tab-reviews" class="nav-link">Customer Reviews ({{ count($reviewcount) }})</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="product-tab-description">
                                        <div class="row mb-4">
                                            <div class="col-md-12 mb-5">
                                                <h4 class="title tab-pane-title font-weight-bold mb-2">Detail</h4>
                                                @if(session()->get('language') == 'others')
                          
                                                {!! $products->long_descp_en !!}
                                                @else
                                                
                                                {!! $products->long_descp_others !!}
                                                @endif
                                               
                                            </div>
                                            <div class="col-md-6 mb-5">
                                                <div class="banner banner-video product-video br-xs">
                                                    <!-- <figure class="banner-media">
                                                        <a href="#">
                                                            <img src="{{ asset($products->product_video_banner) }}"
                                                                alt="banner" width="610" height="300"
                                                                style="background-color: #bebebe;">
                                                        </a>
                                                        <a class="btn-play-video btn-iframe"
                                                            href="{{ $products->product_video }}"></a>
                                                    </figure> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row cols-md-3">
                                            <!-- <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span class="mr-3">1.</span>Free
                                                    Shipping &amp; Return</h5>
                                                <p class="detail pl-5">We offer free shipping for products on orders
                                                    above 50$ and offer free delivery for all orders in US.</p>
                                            </div> -->
                                            <!-- <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span>2.</span>Free and Easy
                                                    Returns</h5>
                                                <p class="detail pl-5">We guarantee our products and you could get back
                                                    all of your money anytime you want in 30 days.</p>
                                            </div> -->
                                            <!-- <div class="mb-3">
                                                <h5 class="sub-title font-weight-bold"><span>3.</span>Special Financing
                                                </h5>
                                                <p class="detail pl-5">Get 20%-50% off items over 50$ for a month or
                                                    over 250$ for a year with our special credit card.</p>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="product-tab-specification">
                                        <ul class="list-none">
                                            <li>
                                                <label>Model</label>
                                                <p>
                                                @if(session()->get('language') == 'others')
                          
                          {{ $products->Product_model_others  }}
                          @else
                          
                          {{ $products->Product_model_en }}
                          @endif
                                                </p>
                                            </li>
                                            <li>
                                                <label>Color</label>
                                                <p>
                                                @if(session()->get('language') == 'others')
                          
                                                @foreach($product_color_others as $color)
                          {{ $color  }}
                          @endforeach
                          @else
                          @foreach($product_color_en as $color)
                          {{ $color  }}
                          @endforeach
                          @endif
                                                </p>
                                            </li>
                                            <li>
                                                <label>Size</label>
                                                <p>
                                                @if(session()->get('language') == 'others')
                          @foreach($product_size_others as $size)
                          {{ $size  }}
                          @endforeach
                          @else
                          @foreach($product_size_en as $size)
                          {{ $size  }}
                          @endforeach
                          @endif
                                                </p>
                                            </li>
                                            <li>
                                                <label>Guarantee Time</label>
                                                <p>
                                                @if(session()->get('language') == 'others')
                          
                          {{ $products->product_guarantee_others }}
                          @else
                          
                          {{ $products->product_guarantee_en}}
                          @endif
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="product-tab-reviews">
                                        <div class="row mb-4">
                                            <div class="col-xl-4 col-lg-5 mb-4">
                                                <div class="ratings-wrapper">
                                                    <div class="avg-rating-container">
                                                        <h4 class="avg-mark font-weight-bolder ls-50">{{number_format($avarage,1)}}</h4>
                                                        <div class="avg-rating">
                                                            <p class="text-dark mb-1">Average Rating</p>
                                                            <div class="ratings-container">
                                                            @php 
	$reviewcount = App\Models\Review::where('product_id',$products->id)->where('status',1)->latest()->get();
	$avarage = App\Models\Review::where('product_id',$products->id)->where('status',1)->avg('rating');
    
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
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ratings-value d-flex align-items-center text-dark ls-25">
                                                        <!-- <span
                                                            class="text-dark font-weight-bold">66.7%</span>Recommended<span
                                                            class="count">(2 of 3)</span> -->
                                                    </div>
                                                    <div class="ratings-list">
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>
                                                                    @if($counts)
                                                                    {{ number_format($avag_five,1)}}%
                                                                    @else
                                                                    0%
                                                                    @endif
                                                                </mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>
                                                                @if($counts)
                                                                    {{ number_format($avag_four,1)}}%
                                                                    @else
                                                                    0%
                                                                    @endif
                                                                </mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>
                                                                @if($counts)
                                                                    {{ number_format($avag_three,1)}}%
                                                                    @else
                                                                    0%
                                                                    @endif
                                                                   </mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 40%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>
                                                                @if($counts)
                                                                    {{ number_format($avag_two,1)}}%
                                                                    @else
                                                                    0%
                                                                    @endif
                                                                    </mark>
                                                            </div>
                                                        </div>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 20%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                            <div class="progress-bar progress-bar-sm ">
                                                                <span></span>
                                                            </div>
                                                            <div class="progress-value">
                                                                <mark>
                                                                @if($counts)
                                                                    {{ number_format($avag_one,1)}}%
                                                                    @else
                                                                    0%
                                                                    @endif
                                                                    </mark>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-8 col-lg-7 mb-4">
                                                <div class="review-form-wrapper">
                                                    <h3 class="title tab-pane-title font-weight-bold mb-1">Submit Your
                                                        Review</h3>
                                                    
                                                    <form action="{{ route('review.store') }}" method="POST" class="review-form">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $products->id }}">
                                                        <div class="rating-form">
                                                            <label for="rating">Your Rating Of This Product :</label>
                                                            <span class="rating-stars">
                                                                
                                                            <input type="radio" class="star_input"  name="quality"  value="5" id="rate-1">
																	<label for="rate-1" class="fa fa-star"></label>
                                                                    <input type="radio" class="star_input"  name="quality"   value="4" id="rate-2">
																	<label for="rate-2" class="fa fa-star"></label>
                                                                    <input type="radio" class="star_input"  name="quality"   value="3" id="rate-3">
																	<label for="rate-3" class="fa fa-star"></label>
                                                                    <input type="radio" class="star_input" name="quality"  value="2" id="rate-4">
																	<label for="rate-4" class="fa fa-star"></label>
																	
                                                                    <input type="radio" class="star_input"   name="quality"  value="1" id="rate-5">
																	<label for="rate-5" class="fa fa-star "></label>
																	
																	
																	
                                                            </span>
                                                         
                                                          
                                                        </div>
                                                        <textarea cols="30" rows="6"
                                                            placeholder="Write Your Review Here..." name="comment" class="form-control"
                                                            id="review"></textarea>
                                                            @error('comment') 
                                                            <span class="text-danger">{{ $message }}</span>
                                                            @enderror 
                                                        
                                                        <button type="submit" class="btn btn-dark">Submit
                                                            Review</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab tab-nav-boxed tab-nav-outline tab-nav-center">
                                            
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="show-all">
                                                    <ul class="comments list-style-none">
                                                    @php
											$reviews = App\Models\Review::where('product_id',$products->id)->where('status',1)->latest()->paginate(5);
											$pendings = App\Models\Review::where('product_id',$products->id)->where('status',0)->orderBy('id','DESC')->paginate(5);
											@endphp

                                            @if($pendings)								
										@guest 
										@else

                                        @forelse($pendings as $item)
                                                  
                                <li class="comment">
                                                            <div class="comment-body" style="margin-top:0px;padding:0px;">
                                                                <figure class="comment-avatar">
                                                                <img style="border:2px solid transparent;border-radius:50%;" src="{{ (!empty($item->user->profile_photo_path))? url($item->user->profile_photo_path):url('upload/no_image.jpg') }}"
                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                </figure>
                                                                <div class="comment-content">
                                                                    <h4 class="comment-author">
                                                                        <a href="">{{ $item->user->name }}</a>
                                                                        <span class="badge badge-danger" style="margin-left:5px;">pending</span>
                                                                        <span class="comment-date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                                    </h4>
                                                                    <div class="ratings-container comment-rating">
                                                                      
                                                                        @if($item->rating == NULL)

                                                                        @elseif($item->rating == 1)
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        @elseif($item->rating == 2)
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>

                                                                        @elseif($item->rating == 3)
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        <span class="fa fa-star"></span>

                                                                        @elseif($item->rating == 4)
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star"></span>
                                                                        @elseif($item->rating == 5)
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>
                                                                        <span class="fa fa-star checked"></span>

                                                                        @endif
                                                                                                                                                
                                                                    </div>
                                                                    <p>"{{ $item->comment }}"</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </li>

                                                        @empty
													@endforelse

                                                    @endguest
								@else
								@endif



                                @forelse($reviews as $item)

                                <li class="comment" style="margin-top:0px;padding:0px;">
                                                            <div class="comment-body">
                                                                <figure class="comment-avatar">
                                                                    <img style="border:2px solid transparent;border-radius:50%;" src="{{ (!empty($item->user->profile_photo_path))? url($item->user->profile_photo_path):url('upload/no_image.jpg') }}"
                                                                        alt="Commenter Avatar" width="90" height="90">
                                                                </figure>
                                                                <div class="comment-content">
                                                                    <h4 class="comment-author">
                                                                        <a href="">{{ $item->user->name }}</a>
                                                                        <span class="comment-date">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>
                                                                    </h4>
                                                                    <div class="ratings-container comment-rating">
                                                                      
                                                                        @if($item->rating == NULL)

                                                                    @elseif($item->rating == 1)
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    @elseif($item->rating == 2)
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>

                                                                    @elseif($item->rating == 3)
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>

                                                                    @elseif($item->rating == 4)
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    @elseif($item->rating == 5)
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>
                                                                    <span class="fa fa-star checked"></span>

                                                                    @endif
                                                                        
                                                                    </div>
                                                                    <p>"{{ $item->comment }}"</p>
                                                                    
                                                                </div>
                                                            </div>
                                                        </li>



                                                  
                                
                                @empty
										@endforelse
                                                       
                                                    </ul>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                            <section class="related-product-section">
                                <div class="title-link-wrapper mb-4">
                                    <h4 class="title">Related Products</h4>
                                    <a href="#" class="btn btn-dark btn-link btn-slide-right btn-icon-right">More
                                        Products<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                                <div class="owl-carousel owl-theme row cols-lg-3 cols-md-4 cols-sm-3 cols-2"
                                    data-owl-options="{
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
                                            'items': 4
                                        },
                                        '992': {
                                            'items': 5
                                        }
                                    }
                                }">


                                @foreach($relatedProduct as $item)
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                            </a>
                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Add to wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Add to Compare"></a>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-quickview" title="Quick View">Quick
                                                    View</a>
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
                                            <div class="product-pa-wrapper">
                                                
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
                            </section>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
                            <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
                            <div class="sidebar-content scrollable">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-icon-box mb-6">
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-truck"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Free Shipping & Returns</h4>
                                                <p>For all orders over $99</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-bag"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Secure Payment</h4>
                                                <p>We ensure secure payment</p>
                                            </div>
                                        </div>
                                        <div class="icon-box icon-box-side">
                                            <span class="icon-box-icon text-dark">
                                                <i class="w-icon-money"></i>
                                            </span>
                                            <div class="icon-box-content">
                                                <h4 class="icon-box-title">Money Back Guarantee</h4>
                                                <p>Any back within 30 days</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Icon Box -->

                                    <div class="widget widget-banner mb-9">
                                        <div class="banner banner-fixed br-sm">
                                            <figure>
                                                <img src="{{asset('frontend/assets/images/shop/banner3.jpg')}}" alt="Banner" width="266"
                                                    height="220" style="background-color: #1D2D44;" />
                                            </figure>
                                            <div class="banner-content">
                                                <div class="banner-price-info font-weight-bolder text-white lh-1 ls-25">
                                                    40<sup class="font-weight-bold">%</sup><sub
                                                        class="font-weight-bold text-uppercase ls-25">Off</sub>
                                                </div>
                                                <h4
                                                    class="banner-subtitle text-white font-weight-bolder text-uppercase mb-0">
                                                    Ultimate Sale</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget Banner -->

                                    <div class="widget widget-products">
                                        <div class="title-link-wrapper mb-2">
                                            <h4 class="title title-link font-weight-bold">More Products</h4>
                                        </div>

                                        <div class="owl-carousel owl-theme owl-nav-top" data-owl-options="{
                                            'nav': true,
                                            'dots': false,
                                            'items': 1,
                                            'margin': 20
                                        }">
                                            <div class="widget-col">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Smart Watch</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$80.00 - $90.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Sky Medical Facility</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$58.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Black Stunt Motor</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 60%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$374.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-col">
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Skate Pan</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$278.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">Modern Cooker</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 80%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$324.00</div>
                                                    </div>
                                                </div>
                                                <div class="product product-widget">
                                                    <figure class="product-media">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/images/shop/13.jpg')}}" alt="Product"
                                                                width="100" height="113" />
                                                        </a>
                                                    </figure>
                                                    <div class="product-details">
                                                        <h4 class="product-name">
                                                            <a href="#">CT Machine</a>
                                                        </h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings-full">
                                                                <span class="ratings" style="width: 100%;"></span>
                                                                <span class="tooltiptext tooltip-top"></span>
                                                            </div>
                                                        </div>
                                                        <div class="product-price">$236.00</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- End of Sidebar -->
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->


        <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-610cc87ff7df5aac"></script>



        @endsection