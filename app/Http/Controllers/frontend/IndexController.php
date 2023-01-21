<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\SubSubCategory;
use App\Models\Product;
use App\Models\MultiImg;
use App\Models\BlogPost;


class IndexController extends Controller
{


    public function Index(){



        $all_category = Category::where('status',1)->orderBy('category_name_en','ASC')->limit(11)->get();
        $hot_deals = Product::where('status',1)->where('hot_deal',1)->orderBy('id','DESC')->limit(5)->get();
        $special_offers = Product::where('status',1)->where('special_offer',1)->orderBy('id','DESC')->limit(15)->get();
        $featured = Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->limit(12)->get();
        $new_arrivals = Product::where('status',1)->where('new_arrivals',1)->orderBy('id','DESC')->limit(12)->get();
        $best_seller = Product::where('status',1)->where('best_seller',1)->orderBy('id','DESC')->limit(12)->get();
        $most_populer = Product::where('status',1)->where('most_populer',1)->orderBy('id','DESC')->limit(12)->get();
        $trending = Product::where('status',1)->where('trending',1)->orderBy('id','DESC')->limit(20)->get();

        $brands = Brand::orderBy('id','DESC')->latest()->get();


        $blogpost = BlogPost::orderBy('id','DESC')->limit(15)->get();

        return view('frontend.index_home',compact('all_category','hot_deals','special_offers','featured','new_arrivals','best_seller','most_populer','trending','blogpost','brands'));
    }



    public function Product_details($id,$slug){

        $products = Product::findOrFail($id);
        $multiImag = MultiImg::where('product_id',$id)->get();


        $color_en =  $products->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_others =  $products->product_color_others;
        $product_color_others = explode(',', $color_others);

        $size_en =  $products->product_size_en;
        $product_size_en = explode(',', $size_en);

        $size_others =  $products->product_size_others;
        $product_size_others = explode(',', $size_others);


        $cat_id = $products->category_id;

        $brands = Product::with('brand')->findOrFail($id);

		$relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->get();
        return view('frontend.products.product_details',compact('products','multiImag','product_color_en','product_color_others','product_size_en','product_size_others','relatedProduct','brands'));
    }





    public function Category_Product_show($id,$slug){

        $products = Product::where('status',1)->where('category_id',$id)
        ->orderBy('id','DESC')->paginate(20);
        $categories = Category::orderBy('category_name_en','ASC')->get();

        $breadcat = Category::where('id',$id)->first();

        return view('frontend.products.category_view',compact('products','categories','breadcat'));

    }


    public function Sub_subProduct_show($id,$sub_subslug){

        $products = Product::where('status',1)->where('sub_subcategory_id',$id)
        ->orderBy('id','DESC')->paginate(20);
        $categories = Category::orderBy('category_name_en','ASC')->get();

        $breadsubsubcat = SubSubCategory::with(['Re_Category','Re_SubCategory'])->where('id',$id)->get();

        return view('frontend.products.sub_subcategory',compact('products','categories','breadsubsubcat'));

    }

    public function Sub_Product_show($id,$sub_subslug){

        $products = Product::where('status',1)->where('subcategory_id',$id)
        ->orderBy('id','DESC')->paginate(20);
        $categories = Category::orderBy('category_name_en','ASC')->get();

        $categories = Category::orderBy('category_name_en','ASC')->get();

        $breadsubcat = SubCategory::with(['Re_Category'])->where('id',$id)->get();

        return view('frontend.products.subcategory',compact('products','categories','breadsubcat'));

    }





    public function Featured_Products(){

        $featured = Product::where('status',1)->where('featured',1)->orderBy('id','DESC')->get();

        return view('frontend.products.featured_products',compact('featured'));
    }

    public function Shop_Products(){

        $shop_products = Product::where('status',1)->orderBy('id','DESC')->paginate(30);

        return view('frontend.products.shop_products',compact('shop_products'));
    }


     /// Product View With Ajax

     public function ProductViewAjax($id){
        $product = Product::with('category','brand')->findOrFail($id);

        $color = $product->product_color_en;
        $product_color = explode(',', $color);

        $size = $product->product_size_en;
        $product_size = explode(',', $size);



        return response()->json(array(
            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,

        ));

    } // end method




      // Product Seach
	public function ProductSearch(Request $request){
		$item = $request->search;
        $request->validate(["search" => "required"]);
		// echo "$item";
        $categories = Category::where('show_product',NULL)->orderBy('category_name_en','ASC')->get();
		$products = Product::where('product_name_en','LIKE',"%$item%")->get();
		return view('frontend.products.search',compact('products','categories'));


	}



    ///// Advance Search Options

	public function SearchProduct(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;

		$products = Product::where('product_name_en','LIKE',"%$item%")->select('product_name_en','product_thambnail_one','selling_price_en','id','product_slug_en','discount_price_en')->limit(5)->get();
		return view('frontend.products.search_product',compact('products'));
	} // end method




    public function AllCategory(){

        $all_category =  Category::where('status',1)->orderBy('category_name_en','ASC')->get();

        return view('frontend.products.all_category',compact('all_category'));


    }






    public function Brand_View($id,$slug){

        $products = Product::where('status',1)->where('brand_id',$id)
        ->orderBy('id','DESC')->paginate(20);

        $breadbrand = Brand::findOrFail($id);


        return view('frontend.products.brand_view',compact('products','breadbrand'));

    }











}
