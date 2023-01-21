        <!-- Start of Header -->



@php


        $header_section = App\Models\SiteSetting::find(1);

        $prefix = Request::route()->getPrefix();

        $route = Route::current()->getName();

@endphp




<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">




        <header class="header">
          
        <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">
                            
                        @if(session()->get('language') == 'others')
                                            {{  $header_section->marquee_others  }} 
                                            @else
                                            {{  $header_section->marquee_en }}
                                            @endif

                        </p>
                    </div>
                    <div class="header-right">
                        <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div>
                        <!-- End of DropDown Menu -->

                        <div class="dropdown">
                            <a href="#language"><img src="{{ asset('frontend/assets/images/flags/eng.png') }}" alt="ENG Flag" width="14"
                                    height="8" class="dropdown-image" />
                                    
                                    @if(session()->get('language') == 'others')
                                            বাংলা 
                                            @else
                                            ENG
                                            @endif
                                
                                </a>
                            <div class="dropdown-box">
                                
                                <a href="{{ route('language.english') }}">
                                    <img src="{{ asset('frontend/assets/images/flags/eng.png') }}" alt="ENG Flag" width="14" height="8"
                                        class="dropdown-image" />
                                    ENG
                                </a>
                                <a href="{{ route('language.others') }}">
                                    <img src="{{ asset('frontend/assets/images/flags/fra.png') }}" alt="FRA Flag" width="14" height="8"
                                        class="dropdown-image" />
                                        বাংলা
                                </a>
                            </div>
                        </div>
                        <!-- End of Dropdown Menu -->
                        <span class="divider d-lg-show"></span>
                        <a href="blog.html" class="d-lg-show">Blog</a>
                        <a href="contact-us.html" class="d-lg-show">Contact Us</a>                      
                        @guest
                       
                        <a href="{{ url('/login') }}" class="d-lg-show "><i
                                class="w-icon-account"></i>Sign In</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="assets/ajax/login.html" class="ml-0 d-lg-show login register">Register</a>
                        @else
                        <a href="{{ url('/dashboard') }}" class="d-lg-show">My Account</a>
                        @endguest
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

<!--  Header Middle -->
            
            <div class="header-middle ">
                <div class="container">
                    <div class="header-left mr-md-4">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger">
                        </a>
                        <a href="{{ url('/')}}" class="logo ml-lg-0">
                            <img src="{{ asset($header_section->header_logo) }}" alt="logo" width="144" height="45" />
                        </a>
                        <form method="post" action="{{ route('product.search') }}" class=" header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                        @csrf
                        @php

                    $search_cat = App\Models\Category::where('status',1)->orderBy('category_name_en','ASC')->get();
                                    
                    @endphp
                        <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    @foreach($search_cat as $item)
                                    <option value="4"> @if(session()->get('language') == 'others')
                        {{ $item->category_name_others }}
                        @else
                        {{ $item->category_name_en }}
                        @endif</option>
                                    @endforeach
                                   
                                    
                                </select>
                            </div>
                            <input  class="form-control"  id="search" name="search" onfocus="search_result_show()" onblur="search_result_hide()" 
                                placeholder="Search in..." required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                        
                        <div id="searchProducts" style="width:500px"></div>
                        
                    </div>
                    <div class="header-right ml-4">
                        <div class="header-call d-xs-show d-lg-flex align-items-center">
                            <a href="tel:#" class="w-icon-call"></a>
                            <div class="call-info d-lg-show">
                                <h4 class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0">
                                    <a href="mailto:#" class="text-capitalize">Live Chat</a> or :</h4>
                                <a href="tel:#" class="phone-number font-weight-bolder ls-50">
                                @if(session()->get('language') == 'others')
                  {{  $header_section->phone_one_others }}  
		            @else 
                    {{  $header_section->phone_one_en }} 
                @endif
                                </a>
                            </div>
                        </div>
                        <a class="wishlist label-down link d-xs-show" href="{{route('wishlist')}}">
                            <i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>
                        </a>
                        <a class="compare label-down link d-xs-show" href="compare.html">
                            <i class="w-icon-compare"></i>
                            <span class="compare-label d-lg-show">Compare</span>
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="" class="cart-toggle label-down link">
                                <i class="w-icon-cart">
                                    <span class="cart-count" id="cartQty"></span>
                                </i>
                                <span class="cart-label">Cart</span>
    </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                            <!--   // Mini Cart Start with Ajax -->

                            <div id="miniCart">

                            </div>
                            
                            <!--   // End Mini Cart Start with Ajax -->


                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price" id="cartSubTotal"></span>
                                </div>

                                <div class="cart-action">
                                    <a href="{{ route('mycart') }}" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="{{ route('checkout') }}" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="#" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>

                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">

                            @php
                                $all_category = App\Models\Category::where('status',1)->orderBy('category_name_en','ASC')->limit(11)->get();
                            @endphp

                                    @foreach($all_category as $cat)
                                
                                        <li>
                                            <a href="{{ url('/category/'.$cat->id.'/'.$cat->category_slug_en) }}">
                                                <i class="{{ $cat->category_icon }}"></i>
                                                @if(session()->get('language') == 'others')
                                            {{ $cat->category_name_others }}
                                            @else
                                            {{ $cat->category_name_en }}
                                            @endif
                                            </a>
                                            @php
                                                 $subcategory = App\Models\SubCategory::where('category_id',$cat->id)->orderBy('subcategory_name_en','ASC')->limit(5)->get();
                                               
                                                 

                                                 @endphp

                                                 @php
                            $subcategories = DB::table('sub_categories')->where('category_id',$cat->id)->orderBy('subcategory_name_en','ASC')->get();
                            $subcat = $subcategories->sum('id');              
                                          @endphp                     
                            @if($subcat == NULL)
                            @else

                                            <ul class="megamenu type2">                                                
                                                <li class="row">

                                   
                                                

                                        @foreach($subcategory as $subcat)
                                                    <div class="col-md-3 col-lg-3 col-6">
                                                        <h4 class="menu-title">
                                                        @if(session()->get('language') == 'others')
                                                        {{ $subcat->subcategory_name_others }}
                                                        @else
                                                        {{ $subcat->subcategory_name_en }}
                                            @endif

                                                        </h4>
                                                        <hr class="divider" />
                                                        <ul>

                                                        @php
                                                 $sub_subcategory = App\Models\SubSubCategory::where('subcategory_id',$subcat->id)->orderBy('sub_subcategory_name_en','ASC')->limit(5)->get();
                                                @endphp

                                                @foreach($sub_subcategory as $sub_subcat)

                                                            <li><a href="{{ url('/sub/subcategory/'.$sub_subcat->id.'/'.$sub_subcat->sub_subcategory_slug_en) }}">
                                                            @if(session()->get('language') == 'others')
                                                        {{ $sub_subcat->sub_subcategory_name_others }}
                                                        @else
                                                        {{ $sub_subcat->sub_subcategory_name_en }}
                                                        @endif
                                                            </a>
                                                            </li>
                                                         
                                                 @endforeach

                                                            
                                                        </ul>
                                                    </div>
        @endforeach

                                              
                                                  
                                                   
                                                </li>
                                                <li class="row">
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">

                                                            <!-- <figure>
                                                                <img src="assets/images/menu/banner-5.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #D2D2D2;" />
                                                            </figure> -->


                                                            <div class="banner-content text-right y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-default text-capitalize">
                                                                    New Arrivals</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize ls-normal">
                                                                    Amazing Sofa</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal">
                                                                    Starting at <strong>$125.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="banner banner-fixed menu-banner5 br-xs">
                                                            <!-- <figure>
                                                                <img src="assets/images/menu/banner-6.jpg" alt="Banner"
                                                                    width="410" height="123"
                                                                    style="background-color: #9F9888;" />
                                                            </figure> -->
                                                            <div class="banner-content y-50">
                                                                <h4
                                                                    class="banner-subtitle font-weight-normal text-white text-capitalize">
                                                                    Best Seller</h4>
                                                                <h3
                                                                    class="banner-title font-weight-bolder text-capitalize text-white ls-normal">
                                                                    Chair &amp; Lamp</h3>
                                                                <div
                                                                    class="banner-price-info font-weight-normal ls-normal text-white">
                                                                    From <strong>$165.00</strong></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            @endif   
                                        </li>
                                       
                                    
                                      @endforeach
                                      
                                      
                                        <li>
                                            <a href="{{ route('all_category') }}"
                                                class="font-weight-bold text-primary text-uppercase ls-25">
                                                View All Categories<i class="w-icon-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <nav class="main-nav">
                                <ul class="menu active-underline">
                                    <li class="{{ ($route == 'index.home')? 'active':'' }}">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>

                                    @php
                $mega_menus = App\Models\Category::where('status',2)->orderBy('category_name_en','ASC')->get();
                @endphp
                @foreach($mega_menus as $mega_menu)                                  
                                    <li>
                                        <a href="{{ url('/category/'.$mega_menu->id.'/'.$mega_menu->category_slug_en) }}">
                                          @if(session()->get('language') == 'others')
                                            {{ $mega_menu->category_name_others }}
                                            @else
                                            {{ $mega_menu->category_name_en }}
                                            @endif
                                        </a>
                         @php
                            $subcategories = DB::table('sub_categories')->where('category_id',$mega_menu->id)->orderBy('subcategory_name_en','ASC')->get();
                            $subcat = $subcategories->sum('id');              
                        @endphp                     
                            @if($subcat == NULL)
                            @else
                             <ul>

                                        @foreach($subcategories as $subcategory)

                                            <li>
                                                <a href="{{ url('/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en) }}">
                                                    @if(session()->get('language') == 'others')
                                                        {{ $subcategory->subcategory_name_others }}
                                                    @else
                                                    {{ $subcategory->subcategory_name_en }}
                                                    @endif
                                                </a>

                                        @php
                                        $sub_subcategories = DB::table('sub_sub_categories')->where('subcategory_id',$subcategory->id)->orderBy('sub_subcategory_name_en','ASC')->get();
                                        @endphp
                                                <ul>
                                                @foreach($sub_subcategories as $sub_subcategory)

                                                    <li><a href="{{ url('/sub/subcategory/'.$sub_subcategory->id.'/'.$sub_subcategory->sub_subcategory_slug_en) }}">
                                                        @if(session()->get('language') == 'others')
                                                        {{ $sub_subcategory->sub_subcategory_name_others }}
                                                        @else
                                                        {{ $sub_subcategory->sub_subcategory_name_en }}
                                                        @endif
                                                    </a></li>
                                                @endforeach 

                                                </ul>



                                            </li>
                                           
                                            @endforeach

                                        </ul>
                        @endif


                                    </li>

        @endforeach








                                    <li class="{{ ($route == 'blog')? 'active':'' }}">
                                        <a href="{{ route('blog') }}">Blog</a>
                                    
                                    </li>
                                   
                                    <li class="{{ ($route == 'shop.products')? 'active':'' }}">
                                        <a href="{{ route('shop.products') }}">Shop</a>

                                    
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <a href="" type="button" data-toggle="modal" data-target="#ordertraking" class="d-xl-show">
                                <i class="w-icon-map-marker mr-1"></i>Track Order</a>

                            
                            <a href="#"><i class="w-icon-sale"></i>Daily Deals</a>
                        </div>
                    </div>
                </div>
            </div>


           
<!-- Order Traking Modal -->
<div class="modal fade" id="ordertraking" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Track Your Order </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="post" action="{{ route('order.tracking') }}">
          @csrf
         <div class="modal-body">
          <label>Invoice Code</label>
          <input type="text" name="code" required="" class="form-control" placeholder="Your Order Invoice Number">           
         </div>

         <button class="btn btn-danger" type="submit" style="margin-left: 17px;color: #fff; background-color: #d9534f;border-color: #d43f3a;"> Track Now </button>

        </form> 


      </div>

    </div>
  </div>
</div>





        </header>
        <!-- End of Header -->


        <style>
  
.header-left{
    position: relative;
  }
    #searchProducts {
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: #ffffff;
      z-index: 999;
      border-radius: 8px;
      margin-top: 5px;
      margin-left:285px;
    }
  
</style>


<script>
  function search_result_hide(){
    $("#searchProducts").slideUp();
  }
   function search_result_show(){
      $("#searchProducts").slideDown();
  }

</script> 