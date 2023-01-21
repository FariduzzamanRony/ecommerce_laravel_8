@extends('frontend.blog.blog_master')

@section('blog_content')


<main class="main">

<!-- Start of Breadcrumb -->
<nav class="breadcrumb-nav mb-6">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="demo1.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
        </ul>
    </div>
</nav>
<!-- End of Breadcrumb -->

<!-- Start of Page Content -->
<div class="page-content">
    <div class="container">
        <ul class="nav-filters filter-underline blog-filters mb-4">
            <li><a href="#" class="nav-filter active" data-filter="*">All Blog Posts <span>{{ count($blog_counts) }}</span></a></li>

            @foreach($blogcategory as  $category)
            <li><a href="{{ url('/post/category',$category->id.'/'.$category->blog_category_slug_en) }}" class="nav-filter" data-filter=".{{ $category->blog_category_name_en }}">
            @if(session()->get('language') == 'others')
              
              {{ Str::limit($category->blog_category_name_others, 19 )  }}
              @else
              
              {{ Str::limit($category->blog_category_name_en, 19 )  }}
              @endif


              @php

              $totalpost = App\Models\BlogPost::where('category_id',$category->id)->get();

              @endphp



               <span>{{ count($totalpost) }}</span></a></li>
    @endforeach
           
        </ul>

        <div class="row grid cols-xl-4 cols-lg-3 cols-md-2 mb-2" data-grid-options="{
            'layoutMode': 'fitRows'
        }">

        @foreach($blogpost as $blog)

            <article class="post post-grid-type grid-item overlay-zoom {{ $blog->category->blog_category_name_en }}">
                <figure class="post-media br-sm">
                    <a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}">
                        <img src="{{asset($blog->post_image)}}" width="600"
                            height="420" alt="blog">
                    </a>
                </figure>
                <div class="post-details">
                    <div class="post-cats text-primary">
                        <a href="#">
                        @if(session()->get('language') == 'others')
              
              {{ Str::limit($blog->category->blog_category_name_others, 19 )  }}
              @else
              
              {{ Str::limit($blog->category->blog_category_name_en, 19 )  }}
              @endif
                        </a>
                    </div>
                    <h4 class="post-title">
                        <a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}">
                        @if(session()->get('language') == 'others')
              
              {{ Str::limit($blog->post_title_others, 19 )  }}
              @else
              
              {{ Str::limit($blog->post_title_en, 19 )  }}
              @endif
                        </a>
                    </h4>
                    <div class="post-content">
                        <p>      
                      @if(session()->get('language') == 'others')
              
              {!! Str::limit($blog->post_details_others, 100 )  !!}
              @else
              
              {!! Str::limit($blog->post_details_en, 100 )  !!}
              @endif
            </p> 
                        <a href="{{ url('/blog/details',$blog->id.'/'.$blog->post_slug_en) }}" class="btn btn-link btn-primary">(read more)</a>
                    </div>
                    <div class="post-meta">
                        <a href="#" class="post-date">{{ Carbon\Carbon::now()->format('d-m-y') }}</a>
                    </div>
                </div>
            </article>


    @endforeach
           
        </div>
        <ul class="pagination justify-content-center mb-10 pb-2 pt-2">
        {{ $blogpost->links('vendor.pagination.custom')  }}
        </ul>
    </div>
</div>
<!-- End of Page Content -->
</main>

@endsection