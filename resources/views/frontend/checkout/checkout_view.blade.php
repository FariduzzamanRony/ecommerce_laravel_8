@extends('frontend.common.product_master')

@section('product_content')

  <!-- Start of Main -->
  <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed"><a href="cart.html">Shopping Cart</a></li>
                        <li class="active"><a href="checkout.html">Checkout</a></li>
                        <li><a href="order.html">Order Complete</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->


            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
   

                    <form class="form checkout-form" action="{{ route('checkout.store') }}" method="POST">
                    @csrf

                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" name="shipping_name_one" value="{{ Auth::user()->name }}" class="form-control form-control-md" 
                                                required>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="shipping_email_one"  value="{{ Auth::user()->email }}" class="form-control form-control-md" >
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" name="shipping_phone_one" value="{{ Auth::user()->phone }}" class="form-control form-control-md" required>
                                </div>

                                <div class="row">
                                <div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <label>Division Select *</label>
                                    <div class="select-box">
                                    <select name="division_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select Division</option>
			@foreach($divisions as $item)
 <option value="{{ $item->id }}">{{ $item->division_name_en }}</option>	
			@endforeach
		</select>
                                        @error('division_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>District Select *</label>
                                	<select name="district_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select District</option>

		</select>
                                                    @error('district_id') 
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                    
                                </div>
                                </div>
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State Select *</label>
                                            <select name="state_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select State</option>

		</select>
                                            @error('state_id') 
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror 
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Post Code *</label>
                                            <input type="text" class="form-control form-control-md" name="post_code_one" required>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Village/House No *</label>
                                    <input type="text" class="form-control form-control-md" name="village_one" required>
                                </div>
                                <div class="form-group checkbox-toggle pb-2">
                                    <input type="checkbox" value="1" name="others_shipping" class="custom-checkbox" id="shipping-toggle"
                                        name="others_shipping">
                                    <label for="shipping-toggle">Ship to a different address?</label>
                                </div>
                                <div class="checkbox-content">
                                <div class="row gutter-sm">
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label>Full Name *</label>
                                            <input type="text" class="form-control form-control-md" name="shipping_name_two"
                                                >
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="eamil" class="form-control form-control-md" name="shipping_email_two">
                                </div>

                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control form-control-md" name="shipping_phone_two">
                                </div>
                                <div class="row">
                                <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Division  *</label>
                                    <input type="text" 
                                        class="form-control form-control-md mb-2" name="division_two" >
                                </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>District  *</label>
                                    <input type="text" 
                                        class="form-control form-control-md mb-2" name="district_two" >
                                    
                                </div>
                                </div>
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State  *</label>
                                            <input type="text" class="form-control form-control-md" name="state_two" >
                                        </div>                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Post Code *</label>
                                            <input type="text" class="form-control form-control-md" name="post_code_two" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Village/House No *</label>
                                    <input type="text" class="form-control form-control-md" name="village_two" >
                                </div>
                                </div>

                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="notes" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                        <table class="order-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <b>Product</b>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($carts as $item)
                                                <tr class="bb-no">

                                                 <td class="product-name">{{ $item->name }}  <i
                                                            class="fas fa-times"></i> <span
                                                            class="product-quantity">( {{ $item->qty }} )</span></td>

                                                    <td class="product-total">${{ $cartTotal }}</td>                                                  
                                                   
                                                </tr>
                                                @endforeach 
                                                @if(Session::has('coupon'))
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal :</b>
                                                    </td>
                                                    <td>
                                                        <b>${{ $cartTotal }}</b>
                                                    </td>
                                                </tr>
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Coupon Name :</b>
                                                    </td>
                                                    <td>
                                                        <b>{{ session()->get('coupon')['coupon_name'] }}
                                                        ( {{ session()->get('coupon')['coupon_discount'] }} % )</b>
                                                    </td>
                                                </tr>

                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Coupon Discount :</b>
                                                    </td>
                                                    <td>
                                                        <b>${{ session()->get('coupon')['discount_amount'] }} </b>
                                                    </td>
                                                </tr>

                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Grand Total :</b>
                                                    </td>
                                                    <td>
                                                        <b>${{ session()->get('coupon')['total_amount'] }} </b>
                                                    </td>
                                                </tr>

                                                @else
                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Subtotal :</b>
                                                    </td>
                                                    <td>
                                                        <b>${{ $cartTotal }}</b>
                                                    </td>
                                                    </tr>

                                                <tr class="cart-subtotal bb-no">
                                                    <td>
                                                        <b>Grand Total :</b>
                                                    </td>
                                                    <td>
                                                        <b>${{ $cartTotal }}</b>
                                                    </td>
                                                </tr>
                                                @endif 



                                            </tbody>
                                          
                                        </table>

                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                               
                         
                                            <div class="row">
		    	<div class="col-md-12" style="margin-top:5px;margin-bottom:10px;">
		   <label for="Bikash">Bikash / Nogod / Rocket</label> 		
       <input type="radio" id="Bikash" name="payment_method" value="bikash"><br>
       <img src="{{ asset('frontend/assets/images/payments/7.png') }}" style="height:30px;width:auto;margin-top:5px;margin-bottom:10px;">		    		
		    	</div> <!-- end col md 4 -->

		    

		    	<div class="col-md-12" style="margin-top:5px;margin-bottom:10px;">
		    		<label for="Cash">Cash</label> 		
       <input type="radio" id="Cash" name="payment_method" value="cash">	<br>
	   <img src="{{ asset('frontend/assets/images/payments/6.png') }}" style="margin-top:5px;margin-bottom:10px;">  		
		    	</div> <!-- end col md 4 -->


			</div> <!-- // end row  -->
                                                
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

            <script type="text/javascript">
            $(document).ready(function() {
            $('select[name="division_id"]').on('change', function(){
            var division_id = $(this).val();
            if(division_id) {
                $.ajax({
                    url: "{{  url('/district-get/ajax') }}/"+division_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                        $('select[name="state_id"]').empty(); 
                    var d =$('select[name="district_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name_en + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
            });
            $('select[name="district_id"]').on('change', function(){
            var district_id = $(this).val();
            if(district_id) {
                $.ajax({
                    url: "{{  url('/state-get/ajax') }}/"+district_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                    var d =$('select[name="state_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name_en + '</option>');
                        });
                    },
                });
            } else {
                alert('danger');
            }
            });

            });
            </script>


        

        
        @endsection