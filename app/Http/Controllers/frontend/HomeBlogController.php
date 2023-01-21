<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\BlogPostCategory;
use App\Models\BlogPost;

use Carbon\Carbon;


class HomeBlogController extends Controller
{
    
    

    public function DetailsBlogPost($id,$slug){

        $blogcategory = BlogPostCategory::latest()->get();
    	$blogpost = BlogPost::findOrFail($id);
        $populer_blog = BlogPost::where('popular_posts',1)->where('id','!=',$id)->limit(16)->latest()->get();

        $cat_id = $blogpost->category_id;

        $related_blog = BlogPost::where('category_id',$cat_id)->where('id','!=',$id)->limit(15)->latest()->get();

        
    	return view('frontend.blog.blog_details',compact('blogpost','blogcategory','populer_blog','related_blog'));
    }



    public function BlogPost_Category(){

        $blogcategory = BlogPostCategory::latest()->get();

        $blog_counts = BlogPost::with('category')->orderBy('post_title_en','ASC')->get();

    	$blogpost = BlogPost::with('category')->orderBy('post_title_en','ASC')->paginate(20);


    	return view('frontend.blog.blog_cat_view',compact('blogpost','blogcategory','blog_counts'));


    }










        
}
