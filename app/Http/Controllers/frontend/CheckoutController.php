<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ShipDivision;
use App\Models\ShipDistrict;
use App\Models\ShipState;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{
    
    
	public function DistrictGetAjax($division_id){

    	$ship = ShipDistrict::where('division_id',$division_id)->orderBy('district_name_en','ASC')->get();
    	return json_encode($ship);

    } // end method 


     public function StateGetAjax($district_id){

    	$ship = ShipState::where('district_id',$district_id)->orderBy('state_name_en','ASC')->get();
    	return json_encode($ship);

    } // end method


    public function CheckoutStore(Request $request){
    	// dd($request->all());
    	$data = array();
    	$data['shipping_name_one'] = $request->shipping_name_one;
    	$data['shipping_email_one'] = $request->shipping_email_one;
    	$data['shipping_phone_one'] = $request->shipping_phone_one;
    	$data['post_code_one'] = $request->post_code_one;
		$data['division_id'] = $request->division_id;
    	$data['district_id'] = $request->district_id;
    	$data['state_id'] = $request->state_id;
		$data['village_one'] = $request->village_one;
        $data['shipping_name_two'] = $request->shipping_name_two;
    	$data['shipping_email_two'] = $request->shipping_email_two;
    	$data['shipping_phone_two'] = $request->shipping_phone_two;
    	$data['post_code_two'] = $request->post_code_two;
    	$data['division_two'] = $request->division_two;
    	$data['district_two'] = $request->district_two;
    	$data['state_two'] = $request->state_two;
		$data['village_two'] = $request->village_two;
    	$data['notes'] = $request->notes;
		$data['others_shipping'] = $request->others_shipping;
		$cartTotal = Cart::total();

		
    	if ($request->payment_method == 'bikash') {
    		return view('frontend.payment.bikash',compact('data','cartTotal'));
    	}elseif ($request->payment_method == 'cash') {
    		return view('frontend.payment.cash',compact('data','cartTotal'));
    	}else{
			return 'card';
    	}


    }// end mehtod.


}
