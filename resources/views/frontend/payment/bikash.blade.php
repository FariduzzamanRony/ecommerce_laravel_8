 
 @extends('frontend.common.product_master')

@section('product_content')
  
  <!-- Start of Main -->
  <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                        <li class="passed"><a href="checkout.html">Checkout</a></li>
                        <li class="active"><a href="order.html">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->


            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
   
                <ul class="nav nav-checkout-progress list-unstyled">


<hr>
		 <li>
		 	@if(Session::has('coupon'))

<strong>SubTotal: </strong> ${{ $cartTotal }} <hr>

<strong>Coupon Name : </strong> {{ session()->get('coupon')['coupon_name'] }}
( {{ session()->get('coupon')['coupon_discount'] }} % )
 <hr>

 <strong>Coupon Discount : </strong> ${{ session()->get('coupon')['discount_amount'] }} 
 <hr>

  <strong>Grand Total : </strong> ${{ session()->get('coupon')['total_amount'] }} 
 <hr>


		 	@else

<strong>SubTotal: </strong> ${{ $cartTotal }} <hr>

<strong>Grand Total : </strong> ${{ $cartTotal }} <hr>


		 	@endif 

		 </li>



				</ul>	
                   

                        <div class="row mb-9">
                            <div class="col-lg-5 pr-lg-4 mb-4">

                            <span> At first Payment then </span>
                               
                            </div>
                            <div class="col-lg-7 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <div class="order-summary">
                                      

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                <form action="{{ route('bikash.order') }}" method="post" id="payment-form" onsubmit="return PhoneVarify()">
                            @csrf
        <div class="form-row">

          <img src="{{ asset('frontend/assets/images/payments/7.png') }}" style="height:30px;width:auto;margin-bottom:20px;">

            <label for="card-element">

      <input type="hidden" name="shipping_name_one" value="{{ $data['shipping_name_one'] }}">
      <input type="hidden" name="shipping_email_one" value="{{ $data['shipping_email_one'] }}">
      <input type="hidden" name="shipping_phone_one" value="{{ $data['shipping_phone_one'] }}">
      <input type="hidden" name="post_code_one" value="{{ $data['post_code_one'] }}">

      <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
      <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
      <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
 
	  <input type="hidden" name="village_one" value="{{ $data['village_one'] }}">


      <input type="hidden" name="shipping_name_two" value="{{ $data['shipping_name_two'] }}">
      <input type="hidden" name="shipping_email_two" value="{{ $data['shipping_email_two'] }}">
      <input type="hidden" name="shipping_phone_two" value="{{ $data['shipping_phone_two'] }}">
      <input type="hidden" name="post_code_two" value="{{ $data['post_code_two'] }}">
      <input type="hidden" name="division_two" value="{{ $data['division_two'] }}">
      <input type="hidden" name="district_two" value="{{ $data['district_two'] }}">
      <input type="hidden" name="state_two" value="{{ $data['state_two'] }}">
      <input type="hidden" name="others_shipping" value="{{ $data['others_shipping'] }}">
      <input type="hidden" name="village_two" value="{{ $data['village_two'] }}">
      

      <input type="hidden" name="notes" value="{{ $data['notes'] }}"> 

            </label>


                            <div class="form-group mb-7">
                            <label for="exampleFormControlSelect1"> select paymet type</label>
                            <select class="form-control" name="payment_type" id="exampleFormControlSelect1" required>  
                            <option value="" selected="" disabled="">Select paymet type</option>  
                               <option value="Bikash" >Bikash</option>                         
                               <option value="Nogod" >Nogod</option>
                               <option value="Rocket" >Rocket</option>
                               </select>
                            </div>

                                <div class="form-group mb-7">
                                    <label>Bikash / Nogod / Rocket Number*</label>
                                    <input type="text" id="PhoneNumber" class="form-control form-control-md" name="payment_number" >
                                    <div class="help-block">

                                <span class="text-danger" id="message"></span>
                                        
                                    </div>

                                </div>
                                </div>

                                <div class="form-group mb-7">
                                    <label>Reference Name *</label>
                                    <input type="text" class="form-control form-control-md" name="reference_name"  required>
                                </div>

                                <div class="form-group mb-7">
                                    <label>Transection Number *</label>
                                    <input type="text" class="form-control form-control-md" name="transaction_id" required>
                                </div>
        </div>


        

                                                  
                                                </div>
                                              
              
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>

        <script>
		function PhoneVarify(){

			var a = document.getElementById("PhoneNumber").value;

			if(a==""){
				document.getElementById("message").innerHTML="Please fillup mobile number";
				return false;
			}

			if(isNaN(a)){
				document.getElementById("message").innerHTML="Enter only digit or number";
				return false;
			}

			if(a.length>11){
				document.getElementById("message").innerHTML="Mobile number must be 11 digit";
				return false;
			}

			if(a.length<11){
				document.getElementById("message").innerHTML="Mobile number must be 11 digit";
				return false;
			}

			if((a.charAt(0)!=0) && (a.charAt(1)!=1)){
				document.getElementById("message").innerHTML="At first input 01";
				return false;
			}

			if((a.charAt(2)==2) || (a.charAt(2)==1)){
				document.getElementById("message").innerHTML="Example: 013 ,014, 015, 016, 017, 018, 019";
				return false;
			}
           


		}


</script>


        @endsection