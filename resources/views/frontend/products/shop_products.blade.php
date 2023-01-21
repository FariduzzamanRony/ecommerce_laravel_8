@extends('frontend.common.product_master')

@section('product_content')
  
<style>
	.checked {
  color: orange;
}
</style>

  <!-- Start of Main -->
  <main class="main">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="shop-banner-sidebar.html">Shop</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-10">
                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                    style="background-image: url({{asset('frontend/assets/images/shop/banner2.jpg')}}); background-color: #FFC74E;">
                    <div class="container banner-content">
                        <h4 class="banner-subtitle font-weight-bold">ElectroCapture </h4>
                        <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">Latest New Product</h3>
                        <a href="shop-banner-sidebar.html" class="btn btn-dark btn-rounded btn-icon-right">Shop
                            Now<i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
                <!-- End of Shop Banner -->
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                <div class="toolbox-left">
                                    <a href="#" class="btn btn-primary btn-outline btn-rounded left-sidebar-toggle 
                                        btn-icon-left"><i class="w-icon-category"></i><span>Filters</span></a>
                                    <div class="toolbox-item toolbox-sort select-box text-dark">
                                        <label>Sort By :</label>
                                        <select name="orderby" class="form-control">
                                            <option value="default" selected="selected">Default sorting</option>
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date">Sort by latest</option>
                                            <option value="price-low">Sort by pric: low to high</option>
                                            <option value="price-high">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="9">Show 9</option>
                                            <option value="12" selected="selected">Show 12</option>
                                            <option value="24">Show 24</option>
                                            <option value="36">Show 36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="shop-fullwidth-banner.html" class="icon-mode-grid btn-layout active">
                                            <i class="w-icon-grid"></i>
                                        </a>
                                        <a href="shop-list.html" class="icon-mode-list btn-layout">
                                            <i class="w-icon-list"></i>
                                        </a>
                                    </div>
                                </div>
                            </nav>
                            <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">


                            @foreach($shop_products as $item)

                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                            <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                            <img src="{{ asset($item->product_thambnail_one) }}" alt="Product"
                                                width="300" height="338" />
                                            <img src="{{ asset($item->product_thambnail_two) }}" alt="Product"
                                                width="300" height="338" />
                                            </a>
                                            <div class="product-action-horizontal">
                                            <button type="button"   data-toggle="modal" data-target="#exampleModal" id="{{ $item->id }}" onclick="productView(this.id)"  class="btn-product-icon   w-icon-cart"
                                                title="Add to cart"></button>
                                            <button type="button" id="{{ $item->id }}" onclick="addToWishList(this.id)" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></button>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
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

                                            <!-- <div class="product-cat">
                                                <a href="shop-banner-sidebar.html">Electronics</a>
                                            </div> -->

                                            <h3 class="product-name">
                                                <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                                                   
                                                @if(session()->get('language') == 'others')
                          
                                                {{ Str::limit($item->product_name_others, 19 )  }}
                                                @else
                                                
                                                {{ Str::limit($item->product_name_en, 19 )  }}
                                                @endif

                                                </a>
                                            </h3>
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
                                </div>



@endforeach
                            

                            </div>

                            <div class="toolbox toolbox-pagination justify-content-between">
                                <!-- <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-12 of 60</span>Products
                                </p> -->
                                <ul class="pagination">
                                {{ $shop_products->links('vendor.pagination.custom')  }}
                                </ul>
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->

                        <!-- Start of Sidebar, Shop Sidebar -->
                      


                        @include('frontend.common.filter_product')


                        <!-- End of Shop Sidebar -->
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->

        @endsection