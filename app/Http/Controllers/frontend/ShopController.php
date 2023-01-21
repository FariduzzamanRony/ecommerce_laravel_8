<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand; 
use App\Models\Product;


class ShopController extends Controller
{
   
    
    public function ShopPage(){

        $products = Product::query();

        if (!empty($_GET['brand'])) {
            $slugs = explode(',',$_GET['brand']);
            $brandIds = Brand::select('id')->whereIn('brand_slug_en',$slugs)->pluck('id')->toArray();
            $products = $products->whereIn('brand_id',$brandIds)->paginate(3);
        }
        else{
             
        }


        $brands = Brand::orderBy('brand_name_en','ASC')->get();
        return view('frontend.shop.shop_page',compact('products','brands'));

    } // end Method 


    public function ShopFilter(Request $request){

        $data = $request->all();
    

            // Filter Brand 

        $brandUrl = "";
        if (!empty($data['brand'])) {
           foreach ($data['brand'] as $brand) {
              if (empty($brandUrl)) {
                 $brandUrl .= '&brand='.$brand;
              }else{
                $brandUrl .= ','.$brand;
              }
           } // end foreach condition
        } // end if condition 



        return redirect()->back($brandUrl);

    }

}
