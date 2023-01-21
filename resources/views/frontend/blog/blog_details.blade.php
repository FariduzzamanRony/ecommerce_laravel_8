@extends('frontend.common.product_master')

@section('product_content')




 <!-- Start of Main -->
 <main class="main">
      

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb bb-no">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <!-- <li>Blog Single</li> -->
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of Page Content -->
            <div class="page-content mb-8">
                <div class="container">
                    <div class="row gutter-lg">
                        <div class="main-content post-single-content">
                            <div class="post post-grid post-single">
                                <figure class="post-media br-sm">
                                    <img src="{{asset($blogpost->post_image)}}" alt="Blog" width="930" height="500" />
                                </figure>
                                <div class="post-details">
                                    <div class="post-meta">
                                 <a href="#" class="post-date">{{ Carbon\Carbon::now()->format('d-m-y') }}</a>
                                        <a href="#" class="post-comment"><i class="w-icon-comments"></i><span>0</span>Comments</a>
                                    </div>
                                    <h2 class="post-title">
                                    @if(session()->get('language') == 'others')
                                    {{ $blogpost->post_title_others  }}
                          @else
                          
                          {{ $blogpost->post_title_en  }}
                          @endif
                                    </h2>
                                    <div class="post-content">
                                       
                                    @if(session()->get('language') == 'others')
                                    {!! $blogpost->post_details_others  !!}
                          @else
                          
                          {!! $blogpost->post_details_en  !!}
                          @endif

                                    </div>
                                </div>
                            </div>
                            <!-- End Post -->
                           
                         
                            
                           
                            <div class="social-links mb-10">
                                <div class="social-icons social-no-color border-thin">
                                    <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                    <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                    <a href="#" class="social-icon social-pinterest w-icon-pinterest"></a>
                                    <a href="#" class="social-icon social-instagram w-icon-instagram"></a>
                                    <a href="#" class="social-icon social-youtube w-icon-youtube"></a>
                                </div>
                            </div>
                            <!-- End Social Links -->
                         
                            <!-- End Post Navigation -->
                            <h4 class="title title-lg font-weight-bold mt-10 pt-1 mb-5">Related Posts</h4>
                            <div class="post-slider owl-carousel owl-theme owl-nav-top row cols-lg-3 cols-md-4 cols-sm-3 cols-xs-2 cols-1 pb-2" data-owl-options="{
                                'nav': true,
                                'dots': false,
                                'margin': 20,
                                'responsive': {
                                    '0': {
                                        'items': 2
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

                            @foreach($related_blog as $blog)

                                <div class="post post-grid">
                                    <figure class="post-media br-sm">
                                        <a href="{{ url('/post/details',$blog->id.'/'.$blog->post_slug_en) }}">
                                            <img src="{{asset($blog->post_image)}}" alt="Post" width="296"
                                                height="190" style="background-color: #bcbcb4;" />
                                        </a>
                                    </figure>
                                    <div class="post-details text-center">
                                      
                                        <h4 class="post-title mb-3"><a href="{{ url('/post/details',$blog->id.'/'.$blog->post_slug_en) }}">
                                        @if(session()->get('language') == 'others')
                          
                          {{ Str::limit($blog->post_title_others, 19 )  }}
                          @else
                          
                          {{ Str::limit($blog->post_title_en, 19 )  }}
                          @endif
                                        </a></h4>
                                        <a href="{{ url('/post/details',$blog->id.'/'.$blog->post_slug_en) }}" class="btn btn-link btn-dark btn-underline font-weight-normal">Read More<i class="w-icon-long-arrow-right"></i></a>
                                    </div>
                                </div>

@endforeach

                        
                            </div>
                            <!-- End Related Posts -->
                            
                            <h4 class="title title-lg font-weight-bold pt-1 mt-10">3 Comments</h4>
                            <ul class="comments list-style-none pl-0">
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/2.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">Semi Colon</a>
                                                <span class="comment-date">Aug 24, 2021 at 13:25 am</span>
                                            </h4>
                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>  
                                    </div>
                                </li>
                                <li class="comment">
                                    <div class="comment-body">
                                        <figure class="comment-avatar">
                                            <img src="assets/images/blog/single/1.png" alt="Avatar" width="90" height="90" />
                                        </figure>
                                        <div class="comment-content">
                                            <h4 class="comment-author font-weight-bold">
                                                <a href="#">John Doe</a>
                                                <span class="comment-date">Aug 23, 2021 at 10:46 am</span>
                                            </h4>
                                            <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.arcu fer
                                                ment umet, dapibus sed, urna.</p>
                                            <a href="#" class="btn btn-dark btn-link btn-underline btn-icon-right btn-reply">Reply<i class="w-icon-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- End Comments -->
                            <form class="reply-section pb-4">
                                <h4 class="title title-md font-weight-bold pt-1 mt-10 mb-0">Leave a Reply</h4>
                                <p>Your email address will not be published. Required fields are marked</p>
                                <div class="row">
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Name" id="name">
                                    </div>
                                    <div class="col-sm-6 mb-4">
                                        <input type="text" class="form-control" placeholder="Enter Your Email" id="email_1">
                                    </div>
                                </div>
                                <textarea cols="30" rows="6" placeholder="Write a Comment" class="form-control mb-4" id="comment"></textarea>
                                <button class="btn btn-dark btn-rounded btn-icon-right btn-comment">Post Comment<i class="w-icon-long-arrow-right"></i></button>
                            </form>
                        </div>
                        <!-- End of Main Content -->
                        <aside class="sidebar right-sidebar blog-sidebar sidebar-fixed sticky-sidebar-wrapper">
                            <div class="sidebar-overlay">
                                <a href="#" class="sidebar-close">
                                    <i class="close-icon"></i>
                                </a>
                            </div>
                            <a href="#" class="sidebar-toggle">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                            <div class="sidebar-content">
                                <div class="sticky-sidebar">
                                    <div class="widget widget-search-form">
                                        <div class="widget-body">
                                            <form action="#" method="GET" class="input-wrapper input-wrapper-inline">
                                                <input type="text" class="form-control"
                                                    placeholder="Search in Blog" autocomplete="off" required>
                                                <button class="btn btn-search"><i
                                                        class="w-icon-search"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End of Widget search form -->
                                    <div class="widget widget-categories">
                                        <h3 class="widget-title bb-no mb-0">Categories</h3>
                                        <ul class="widget-body filter-items search-ul">

                                        @foreach($blogcategory as $category)
                                            <li><a href="blog.html">
                                            @if(session()->get('language') == 'others')
                                    {{ $category->blog_category_name_others  }}
                                    @else
                                    
                                    {{ $category->blog_category_name_en  }}
                                    @endif 
                                            </a></li>

                                           @endforeach
                                            
                                        </ul>
                                    </div>
                                    <!-- End of Widget categories -->
                                    <div class="widget widget-posts">
                                        <h3 class="widget-title bb-no">Popular Posts</h3>
                                        <div class="widget-body">
                                            <div class="owl-carousel owl-theme owl-nav-top row cols-1" data-owl-options="{
                                                'nav': true,
                                                'dots': false,
                                                'margin': 20
                                            }">

                                          

                                            @foreach($populer_blog->chunk(4) as $chunk)

                                                <div class="widget-col">


                                            @foreach($chunk as $blog)

                                                    <div class="post-widget mb-4">
                                                        <figure class="post-media br-sm">
                                                            <img src="{{asset($blog->post_image)}}" alt="Blog" width="150" height="150" />
                                                        </figure>
                                                        <div class="post-details">
                                                            <div class="post-meta">
                                                                <a href="#" class="post-date">{{ Carbon\Carbon::now()->format('d-m-y') }}</a>
                                                            </div>
                                                            <h4 class="post-title">
                                                                <a href="{{ url('/post/details',$blog->id.'/'.$blog->post_slug_en) }}">
                                                                @if(session()->get('language') == 'others')
                                                                {{ Str::limit($blog->post_title_others, 19 )  }}
                                                                @else
                                                                
                                                                {{ Str::limit($blog->post_title_en, 19 )  }}
                                                                @endif
                                                                </a>
                                                            </h4>
                                                        </div>
                                                    </div>

@endforeach
                                                

                                                    
                                                </div>
                                                
@endforeach



                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Widget posts -->
                                    <div class="widget widget-custom-block">
                                        <h3 class="widget-title bb-no">Custom Block</h3>
                                        <div class="widget-body">
                                            <p class="text-default mb-0">Fringilla urna porttitor rhoncus dolor purus.
                                                Luctus veneneratis lectus magna fring.
                                                Suspendisse potenti. Sed egestas, ante et 
                                                vulputate volutpat, uctus metus libero.</p>
                                        </div>
                                    </div>
                                    <!-- End of Widget custom block -->
                                    <div class="widget widget-tags">
                                        <h3 class="widget-title bb-no">Browse Tags</h3>
                                        <div class="widget-body tags">
                                            <a href="#" class="tag">Fashion</a>
                                            <a href="#" class="tag">Style</a>
                                            <a href="#" class="tag">Travel</a>
                                            <a href="#" class="tag">Women</a>
                                            <a href="#" class="tag">Men</a>
                                            <a href="#" class="tag">Hobbies</a>
                                            <a href="#" class="tag">Shopping</a>
                                            <a href="#" class="tag">Photography</a>
                                        </div>
                                    </div>
                                    <div class="widget widget-calendar">
                                        <h3 class="widget-title bb-no">Calendar</h3>
                                        <div class="widget-body">
                                            <div class="calendar-container" data-calendar-options="{
                                                'dayExcerpt': 1
                                            }"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->







@endsection