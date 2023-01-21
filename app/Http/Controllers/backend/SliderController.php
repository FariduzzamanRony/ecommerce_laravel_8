<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Slider;
use Carbon\Carbon;
use Image;

class SliderController extends Controller
{
   
     
    public function SliderView(){
		$sliders = Slider::latest()->get();
		return view('backend.slider.slider_view',compact('sliders'));
	} 



    public function SliderStore(Request $request){

    	$request->validate([

    		'slider_img_back' => 'required',
    	],[
    		'slider_img_back.required' => 'Plz Select  Image',

    	]);

        $image_back = $request->file('slider_img_back');
    	$name_gen_back = hexdec(uniqid()).'.'.$image_back->getClientOriginalExtension();
    	$path_back = public_path('backend/upload/slider/'.$name_gen_back);
    	Image::make($image_back)->resize(1903,520)->save($path_back);
    	$backgound_img = 'backend/upload/slider/'.$name_gen_back;

	Slider::insert([
		'title' => $request->title,
		'description' => $request->description,
        'slider_img_back' => $backgound_img,

    	]);

	    $notification = array(
			'message' => 'Slider Inserted Successfully',
			'alert-type' => 'success'
		);

		return redirect()->back()->with($notification);

    } // end method 




    public function SliderEdit($id){
        $sliders = Slider::findOrFail($id);
            return view('backend.slider.slider_edit',compact('sliders'));
        }
    
    
    public function SliderUpdate(Request $request){
    
            $slider_id = $request->id;
            $old_img = $request->old_image;
    
            if ($request->file('slider_img_back')) {
    
            unlink(public_path($old_img));
           $image_back = $request->file('slider_img_back');
    	$name_gen_back = hexdec(uniqid()).'.'.$image_back->getClientOriginalExtension();
    	$path_back = public_path('backend/upload/slider/'.$name_gen_back);
    	Image::make($image_back)->resize(1903,520)->save($path_back);
    	$backgound_img = 'backend/upload/slider/'.$name_gen_back;
    
        Slider::findOrFail($slider_id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'slider_img_back' => $backgound_img,
    
            ]);
    
            $notification = array(
                'message' => 'Slider Updated Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('manage-slider')->with($notification);
    
            }else{
    
            Slider::findOrFail($slider_id)->update([
            'title' => $request->title,
            'description' => $request->description,
    
    
            ]);
    
            $notification = array(
                'message' => 'Slider Updated Without Image Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->route('manage-slider')->with($notification);
    
            } // end else 
        } // end method


        public function SliderDelete($id){
            $slider = Slider::findOrFail($id);
            $img = $slider->slider_img_back;
            unlink(public_path($img));
            Slider::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Slider Delectd Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method


        public function SliderInactive($id){
            Slider::findOrFail($id)->update(['status' => 0]);
    
            $notification = array(
                'message' => 'Slider Inactive Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method 
    
    
        public function SliderActive($id){
            Slider::findOrFail($id)->update(['status' => 1]);
    
            $notification = array(
                'message' => 'Slider Active Successfully',
                'alert-type' => 'info'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method 


}
