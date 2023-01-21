 <!-- Start of Mobile Menu -->
 <div class="mobile-menu-wrapper">
        <div class="mobile-menu-overlay"></div>
        <!-- End of .mobile-menu-overlay -->

        <a href="#" class="mobile-menu-close"><i class="close-icon"></i></a>
        <!-- End of .mobile-menu-close -->

        <div class="mobile-menu-container scrollable">
            <form method="post" action="{{ route('product.search') }}" class="input-wrapper">
                @csrf
                <input type="text" class="form-control" id="search" name="search" onfocus="search_result_show()" onblur="search_result_hide()" autocomplete="off" placeholder="Search"
                    required />
                <button class="btn btn-search" type="submit">
                    <i class="w-icon-search"></i>
                </button>
            </form>
            <!-- End of Search Form -->
            <div class="tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#main-menu" class="nav-link active">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a href="#categories" class="nav-link">Categories</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="main-menu">
                    <ul class="mobile-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
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
                                    <ul>

                                    @php
                                        $sub_subcategories = DB::table('sub_sub_categories')->where('subcategory_id',$subcategory->id)->orderBy('sub_subcategory_name_en','ASC')->get();
                                        @endphp

                                        @foreach($sub_subcategories as $sub_subcategory)
                                        <li><a href="{{ url('/sub/subcategory/'.$sub_subcategory->id.'/'.$sub_subcategory->sub_subcategory_slug_en) }}">
                                        @if(session()->get('language') == 'others')
                                                        {{ $sub_subcategory->sub_subcategory_name_others }}
                                                        @else
                                                        {{ $sub_subcategory->sub_subcategory_name_en }}
                                                        @endif
                                        </a>
                                        </li>
                                        @endforeach
                                      
                                    </ul>
                                </li>
                               
 @endforeach

                            </ul>

                            @endif
                        </li>

@endforeach
                        <li>
                            <a href="{{ route('shop.products') }}">Shop</a>                           
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">Blog</a>                           
                        </li>
                               
                              
                                
                            </ul>
                        </li>
                       
                       
                       
                    </ul>
                </div>









                <div class="tab-pane" id="categories">
                    <ul class="mobile-menu">

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
                            <ul>
                            @php
                               $subcategory = App\Models\SubCategory::where('category_id',$cat->id)->orderBy('subcategory_name_en','ASC')->limit(5)->get();
                            @endphp
                            @foreach($subcategory as $subcat)
                                <li>
                                    <a href="#">
                                    @if(session()->get('language') == 'others')
                                                        {{ $subcat->subcategory_name_others }}
                                                        @else
                                                        {{ $subcat->subcategory_name_en }}
                                            @endif
                                    </a>
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
                                </li>
                                @endforeach

                            </ul>
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
        </div>
    </div>
    <!-- End of Mobile Menu -->

    
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