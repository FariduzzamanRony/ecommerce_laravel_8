<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Review;
use Auth;
use Carbon\Carbon;

class ReviewController extends Controller
{
   
    
    public function ReviewStore(Request $request){

        if(Auth::check()){

            $product = $request->product_id;

            $request->validate([
                'comment' => 'required',
            ]);
    
            Review::insert([
                'product_id' => $product,
                'user_id' => Auth::id(),
                'comment' => $request->comment,
                'rating' => $request->quality,
                'created_at' => Carbon::now(),
    
            ]);
    
            $notification = array(
                'message' => 'Review Will Approve By Admin',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    

        }else{


            $notification = array(
                'message' => 'At first login your account',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);



        }

    	

    } // end mehtod 



    public function PendingReview(){

    	$review = Review::where('status',0)->orderBy('id','DESC')->get();
    	return view('backend.review.pending_review',compact('review'));

    } // end method 



    public function ReviewApprove($id){

        

    	Review::where('id',$id)->update(['status' => 1]);

    	$notification = array(
            'message' => 'Review Approved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    } // end mehtod 


    public function PublishReview(){
        $review = Review::where('status',1)->orderBy('id','DESC')->get();
            return view('backend.review.publish_review',compact('review'));
        }
    
    
    
        public function DeleteReview($id){
    
            Review::findOrFail($id)->delete();
    
            $notification = array(
                'message' => 'Review Delete Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    
        } // end method


}
