 
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
                            <div class="col-lg-7 pr-lg-4 mb-4">
                               
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <div class="order-summary">
                                      

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                <form action="{{ route('cash.order') }}" method="post" id="payment-form">
                            @csrf
        <div class="form-row">

          <img src="{{ asset('frontend/assets/images/payments/cash.png') }}">

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




        </div>
        <br>

        

                                                  
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




        @endsection