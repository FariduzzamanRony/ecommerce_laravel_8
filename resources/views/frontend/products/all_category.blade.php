@extends('frontend.common.product_master')

@section('product_content')


<!-- Start of Main -->
<main class="main">

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav mb-10 pb-1">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <!-- <li><a href="#">Elements</a></li> -->
                        <li>Product Categories</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content pb-10 mb-2">


                <div class="container">
                    

                    <section class="element-section text-center mt-2 mb-10 pt-3 pb-2" id="section-elements">

                   

                        <div class="row elements cols-xl-5 cols-lg-4 cols-md-3 cols-xs-2 cols-1">

                        @foreach($all_category as $all_cat)

                            <div class="mb-4 text-center">
                                <a href="{{ url('/category/'.$all_cat->id.'/'.$all_cat->category_slug_en) }}"  class="element">
                                <img src="{{ asset($all_cat->category_image_one) }}" alt="Category" width="100"
                                    height="100">
                                    <p>
                                    @if(session()->get('language') == 'others')
                                            {{ $all_cat->category_name_others }}
                                            @else
                                            {{ $all_cat->category_name_en }}
                                            @endif
                                    </p>
                                </a>
                            </div>




    @endforeach
                           
                            
                       
                     
               
                  
                        </div>
                    </section>
                    <!-- End of Element Section -->
                </div>
                <!-- End of Container -->
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->






@endsection