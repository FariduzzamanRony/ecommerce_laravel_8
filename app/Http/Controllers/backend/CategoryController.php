<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SubCategory;
use App\Models\Category;
use App\Models\SubSubCategory;
use Image;
use DB;

class CategoryController extends Controller
{
    
    
    public function Categories_view(){

        $category = Category::latest()->where('status',1)->get();

        return view('backend.category.category_view',compact('category'));
    }


    public function Category_Store(Request $request){

        $request->validate([

            'category_name_en' => 'required',
            'category_name_others' => 'required',
            'category_image_one' => 'required',
            'category_icon' => 'required',

        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_others.required' => 'Input Category Others Name',
            'category_image_one.required' => 'Input Category Image  ',
            'category_icon.required' => 'Input Category Icon ',
        ]);

        


        $image = $request->file('category_image_one');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
         $path = public_path('backend/upload/categories/'.$name_gen);
        Image::make($image)->resize(190,184)->save($path);

        $save_url = 'backend/upload/categories/'.$name_gen;

        Category::insert([

            

            'category_name_en' => $request->category_name_en,
            'category_name_others' => $request->category_name_others,
            'category_icon' => $request->category_icon,
            'status' => $request->status,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_others' => str_replace(' ', '-', $request->category_name_others),
            'category_image_one' => $save_url,

        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);


    }


    public function Category_Edit($id){

        $category = Category::findOrFail($id);

        return view('backend.category.category_edit',compact('category'));

    }


    public function Category_Update(Request $request){


        $request->validate([

            'category_name_en' => 'required',
            'category_name_others' => 'required',
            'category_icon' => 'required',
           

        ],[
            'category_name_en.required' => 'Input Category English Name',
            'category_name_others.required' => 'Input Category Others Name',
            'category_icon.required' => 'Input Category Icon ',
        
        ]);


        $category_id = $request->id;
        $old_img = $request->old_image;

        if($request->file('category_image_one')){

            unlink(public_path($old_img));
            $image = $request->file('category_image_one');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
             $path = public_path('backend/upload/categories/'.$name_gen);
            Image::make($image)->resize(190,184)->save($path);
    
            $save_url = 'backend/upload/categories/'.$name_gen;


        Category::findOrFail($category_id)->update([

            'category_name_en' => $request->category_name_en,
            'category_name_others' => $request->category_name_others,
            'category_icon' => $request->category_icon,
            'status' => $request->status,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_others' => str_replace(' ', '-', $request->category_name_others),
            'category_image_one' => $save_url,

        ]);

        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    }else{


        Category::findOrFail($category_id)->update([

            'category_name_en' => $request->category_name_en,
            'category_name_others' => $request->category_name_others,
            'category_icon' => $request->category_icon,
            'status' => $request->status,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_others' => str_replace(' ', '-', $request->category_name_others),

        ]);

        $notification = array(
            'message' => 'Category Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);


    }



    }

    public function Category_Delete($id){

        $category = Category::FindOrFail($id);
        $img = $category->category_image_one;
        unlink(public_path($img));

        Category::FindOrFail($id)->delete();
        
        
        
          $subcategories = SubCategory::where('category_id',$id)->get();

     
        foreach($subcategories as $subcategory){

            $subcategory->delete();

        }


        $subsubcategories = SubSubCategory::where('category_id',$id)->get();

     
        foreach($subsubcategories as $subsubcategory){

          $img  =   $subsubcategory->sub_subcategory_image;

            unlink(public_path($img));
            $subsubcategory->delete();

        }
        
       

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }



}
