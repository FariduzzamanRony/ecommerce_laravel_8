<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Brand;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\SubSubCategory;
use App\Models\Product;
use App\Models\MultiImg;
use DB;
use Carbon\Carbon;
use Image;

class ProductController extends Controller
{
    
    

    public function Product_Manage(){


        $product =  Product::latest()->get();

       return view('backend.products.products_manage',compact('product'));
   }

   public function Product_Add(){
       
       $brands = Brand::latest()->get();
       $category = Category::latest()->get();
       $subcategories = SubCategory::latest()->get();
       $sub_subcategory = SubSubCategory::latest()->get();

       return view('backend.products.products_add',compact('brands','category','subcategories','sub_subcategory'));
   }



   public function Product_Store(Request $request){

        $request->validate([
      'brand_id' => 'required',
            'category_id' => 'required',
            'product_name_en' => 'required',
            'selling_price_en' => 'required',
            'product_thambnail_one' => 'required',
            'product_thambnail_two' => 'required',
            'selling_price_others' => 'required',
            
        ]);


    $save_url_one = "";
    if($request->product_thambnail_one != ""){
        $image_one = $request->file('product_thambnail_one');
       $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
       $path_one = public_path('backend/upload/products/thambnail/'.$name_gen_one);
       Image::make($image_one)->resize(300,338)->save($path_one);
       $save_url_one = 'backend/upload/products/thambnail/'.$name_gen_one;
    }
  
    $save_url_two = "";
    if($request->product_thambnail_two != ""){
        $image_two = $request->file('product_thambnail_two');
        $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        $path_two = public_path('backend/upload/products/thambnail/'.$name_gen_two);
        Image::make($image_two)->resize(300,338)->save($path_two);
        $save_url_two = 'backend/upload/products/thambnail/'.$name_gen_two;
    }
    $save_url_bannar = "";
    if($request->product_video_banner != ""){
        $image_bannar = $request->file('product_video_banner');
        $name_gen_bannar = hexdec(uniqid()).'.'.$image_bannar->getClientOriginalExtension();
        Image::make($image_bannar)->resize(610,300)->save('backend/upload/products/video-bannar/'.$name_gen_bannar);
        $save_url_bannar = 'backend/upload/products/video-bannar/'.$name_gen_bannar;
    }
      

    $data = array();
    $data= [
        'brand_id' => $request->brand_id,
        'category_id' => $request->category_id,
        'subcategory_id' => $request->subcategory_id,
        'sub_subcategory_id' => $request->sub_subcategory_id,
        'product_name_en' => $request->product_name_en,
        'product_name_others' => $request->product_name_others,
        'product_slug_en' => strtolower(str_replace(' ', '-', $request->product_name_en)),
        'product_slug_others' => str_replace(' ', '-', $request->product_name_others),
        'product_code_en' => $request->product_code_en,
        'product_qty_en' => $request->product_qty_en,
        'Product_model_en' => $request->Product_model_en,
        'Product_model_slug_en' => strtolower(str_replace(' ', '-', $request->Product_model_en)),
        'product_size_en' => $request->product_size_en,
        'product_color_en' => $request->product_color_en,
        'selling_price_en' => $request->selling_price_en,
        'selling_price_others' => $request->selling_price_others,
        'discount_price_en' => $request->discount_price_en,
        'discount_price_others' => $request->discount_price_others,
        'short_descp_en' => $request->short_descp_en,
        'long_descp_en' => $request->long_descp_en,
    


        'product_video' => $request->product_video,
        'product_guarantee_en' => $request->product_guarantee_en,
        'sku' => 'EOS'.mt_rand(10000000,99999999),


        'hot_deal' => $request->hot_deal,
        'best_seller' => $request->best_seller,
        'new_arrivals' => $request->new_arrivals,
        'featured' => $request->featured,
        'special_offer' => $request->special_offer,
        'most_populer' => $request->most_populer,
        'trending' => $request->trending,

        'status' => 1,
        'product_thambnail_one' => $save_url_one,
        'product_thambnail_two' => $save_url_two,
        'product_video_banner' => $save_url_bannar,
        'created_at' => Carbon::now(),

    ];

    $productlastid = Product::insertGetId($data);
    
    if($request->file('multi_img')){
        $multi_image = $request->file('multi_img');
        foreach($multi_image as $image){ 
            $make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $path_three = public_path('backend/upload/products/multi-images/'.$make_name);
            Image::make($image)->resize(800,900)->save($path_three);
    
            $upload_img = 'backend/upload/products/multi-images/'.$make_name;
 
            MultiImg::insert([
                'product_id' => $productlastid,
                'photo_name' => $upload_img,
                'created_at' => Carbon::now(),
            ]);
        }
    }

       $notification = array(
           'message' => 'Product Inserted Successfully',
           'alert-type' => 'success'
       );

       return back()->with($notification);

    //    return redirect()->back()->with($notification);



   }




   public function Product_Edit($id){

       $multiImgs = MultiImg::where('product_id',$id)->get();
       $brands = Brand::latest()->get();
       $category = Category::latest()->get();
       $subcategories = SubCategory::latest()->get();
       $sub_subcategory = SubSubCategory::latest()->get();
       $products = Product::FindOrFail($id);

       return view('backend.products.products_edit',compact('products','brands','category','subcategories','sub_subcategory','multiImgs'));

   }



   public function Product_Update(Request $request){


        $request->validate([
            'brand_id' => 'required',
            'category_id' => 'required',
            'product_name_en' => 'required',
            'selling_price_en' => 'required',


        ]);


       $product_id = $request->id;
       $thambnail_one = $request->old_image_one;
       $thambnail_two = $request->old_image_two;
       $bannar = $request->old_image_three;

       $data = array();
       if($request->product_thambnail_one != ""){
            if(file_exists(public_path('backend/upload/products/thambnail/'.$thambnail_one))){
                unlink(public_path($thambnail_one));
           }
           
            $image_one = $request->file('product_thambnail_one');
            $name_gen_one = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            $path_one = public_path('backend/upload/products/thambnail/'.$name_gen_one);
            Image::make($image_one)->resize(300,338)->save($path_one);
            $save_url_one = 'backend/upload/products/thambnail/'.$name_gen_one;
            $data['product_thambnail_one'] =  $save_url_one;
        }

       if($request->product_thambnail_two != ""){
        if(file_exists(public_path('backend/upload/products/thambnail/'.$thambnail_two))){
            unlink(public_path($thambnail_two));
       }
       
        $image_two = $request->file('product_thambnail_two');
        $name_gen_two = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
        $path_two = public_path('backend/upload/products/thambnail/'.$name_gen_two);
        Image::make($image_two)->resize(300,338)->save($path_two);
        $save_url_two = 'backend/upload/products/thambnail/'.$name_gen_two;
        $data['product_thambnail_two'] = $save_url_two;
        }

    if($request->product_video_banner != ""){
        if(file_exists(public_path('backend/upload/products/video-bannar/'.$bannar))){
            unlink(public_path($bannar));
       }
        $image_bannar = $request->file('product_video_banner');
        $name_gen_bannar = hexdec(uniqid()).'.'.$image_bannar->getClientOriginalExtension();
        Image::make($image_bannar)->resize(610,300)->save('backend/upload/products/video-bannar/'.$name_gen_bannar);
        $save_url_bannar = 'backend/upload/products/video-bannar/'.$name_gen_bannar;
        $data['product_video_banner'] = $save_url_bannar;
    }

    if($request->file('multi_img')){
        $multi_image = $request->file('multi_img');
        foreach($multi_image as $image){ 
            $make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $path_three = public_path('backend/upload/products/multi-images/'.$make_name);
            Image::make($image)->resize(800,900)->save($path_three);
            $upload_img = 'backend/upload/products/multi-images/'.$make_name;
            MultiImg::insert([
                'product_id' => $product_id,
                'photo_name' => $upload_img,
                'created_at' => Carbon::now(),
            ]);
        }
    }


    
    $data['brand_id'] = $request->brand_id;
    $data['category_id'] = $request->category_id;
    $data['sub_subcategory_id'] = $request->sub_subcategory_id;
    $data['product_name_en'] = $request->product_name_en;
    $data['product_slug_en'] =  strtolower(str_replace(' ', '-', $request->product_name_en));
    $data['product_code_en'] = $request->product_code_en;
    $data['product_qty_en'] = $request->product_qty_en;
    $data['Product_model_en'] = $request->Product_model_en;
    $data['Product_model_slug_en'] = strtolower(str_replace(' ', '-', $request->Product_model_en));
    $data['product_size_en'] = $request->product_size_en;
    $data['product_color_en'] = $request->product_color_en;
    $data['selling_price_en'] = $request->selling_price_en;
    $data['selling_price_others'] = $request->selling_price_others;
    $data['discount_price_en'] = $request->discount_price_en;
    $data['discount_price_others'] = $request->discount_price_others;
    $data['short_descp_en'] = $request->short_descp_en;
    $data['long_descp_en'] = $request->long_descp_en;
    $data['product_video'] = $request->product_video;
    $data['sku'] = 'EOS'.mt_rand(10000000,99999999);
    $data['hot_deal'] = $request->hot_deal;
    $data['best_seller'] = $request->best_seller;
    $data['new_arrivals'] = $request->new_arrivals;
    $data['featured'] = $request->featured;
    $data['special_offer'] = $request->special_offer;
    $data['most_populer'] = $request->most_populer;
    $data['new_arrivals'] = $request->new_arrivals;
    $data['trending'] = $request->trending;
    $data['status'] = 1;
    $data['created_at'] = Carbon::now();


  
    $product_id_multi =  Product::where('id',$product_id)->update($data);

    $notification = array(
        'message' => 'Product Update Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.product')->with($notification);

   }




   public function Product_MultiImage(Request $request){
       $imgs = $request->multi_img;

      
       if($imgs != ""){
        foreach ($imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            if(file_exists(public_path('backend/upload/products/multi-images/'.$imgDel->photo_name))){
             unlink(public_path($imgDel->photo_name));
            }
            
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
             $path_three = public_path('backend/upload/products/multi-images/'.$make_name);
             Image::make($img)->resize(800,900)->save($path_three);
            $uploadPath = 'backend/upload/products/multi-images/'.$make_name;
     
            MultiImg::where('id',$id)->update([
                'photo_name' => $uploadPath,
                'updated_at' => Carbon::now(),
     
            ]);
     
         } 
     
           $notification = array(
                'message' => 'Product Multi Image Updated Successfully',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);

       }
       else{
        $notification = array(
            'message' => 'Please Change a Image after Update',
            'alert-type' => 'warning'
        );
        return redirect()->back()->with($notification);
       }

   } 



           //// Multi Image Delete ////
           public function MultiImageDelete($id){
               $oldimg = MultiImg::findOrFail($id);
               unlink(public_path($oldimg->photo_name));
               MultiImg::findOrFail($id)->delete();

               $notification = array(
               'message' => 'Product multi Image Deleted Successfully',
               'alert-type' => 'success'
           );

           return redirect()->back()->with($notification);

           } // end method 




           public function ProductDelete($id){


               $product = Product::findOrFail($id);


               if($product->product_video_banner != NULL){

                unlink(public_path($product->product_thambnail_one));
                unlink(public_path($product->product_thambnail_two));
                unlink(public_path($product->product_video_banner));


                Product::findOrFail($id)->delete();
      
                $images = MultiImg::where('product_id',$id)->get();
                foreach ($images as $img) {
                    unlink(public_path($img->photo_name));
                    MultiImg::where('product_id',$id)->delete();
                }
                }else{
                    unlink(public_path($product->product_thambnail_one));
                    unlink(public_path($product->product_thambnail_two));

                    Product::findOrFail($id)->delete();
      
                    $images = MultiImg::where('product_id',$id)->get();
                    foreach ($images as $img) {
                        unlink(public_path($img->photo_name));
                        MultiImg::where('product_id',$id)->delete();
                    }
                    
        
                }

               


            
      
               $notification = array(
                  'message' => 'Product Deleted Successfully',
                  'alert-type' => 'error'
              );
      
              return redirect()->back()->with($notification);
      
           }// end method 





           public function ProductInactive($id){
               Product::findOrFail($id)->update(['status' => 0]);
               $notification = array(
                  'message' => 'Product Inactive',
                  'alert-type' => 'success'
              );
      
              return redirect()->back()->with($notification);
           }
      
      
        public function ProductActive($id){
            Product::findOrFail($id)->update(['status' => 1]);
               $notification = array(
                  'message' => 'Product Active',
                  'alert-type' => 'success'
              );
      
              return redirect()->back()->with($notification);
      
           }




           public function Product_view($id){

               $multiImgs = MultiImg::where('product_id',$id)->get();
               $products = Product::with('category','brand','subcategory','sub_subcategory')->FindOrFail($id);
       
               return view('backend.products.products_view',compact('products','multiImgs'));




           }





             // product Stock 
           public function ProductStock(){

               $products = Product::latest()->get();
               return view('backend.products.product_stock',compact('products'));
           }












}
