@extends('frontend.common.product_master')

@section('product_content')


<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li><a href="my-account.html">My account</a></li>
                        <li>Order {{ $order->invoice_no }}</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg">
                        
                    <p class="mb-7">Order {{ $order->invoice_no }} was placed on April 30, 2021 and is currently On hold.</p>
                    <div class="col-md-12">

<div class="table-responsive">
  <table class="table">
    <tbody>

      <tr style="background: #e2e2e2;">
        <td class="col-md-1">
          <label for=""> Image</label>
        </td>

        <td class="col-md-3">
          <label for=""> Product Name </label>
        </td>

        <td class="col-md-3">
          <label for=""> Product Code</label>
        </td>


        <td class="col-md-2">
          <label for=""> Color </label>
        </td>

         <td class="col-md-2">
          <label for=""> Size </label>
        </td>

         <td class="col-md-1">
          <label for=""> Quantity </label>
        </td>

        <td class="col-md-1">
          <label for=""> Price </label>
        </td>

      </tr>


      @foreach($orderItem as $item)
<tr>
        <td class="col-md-1">
          <label for=""><img src="{{ asset($item->product->product_thambnail_one) }}" height="50px;" width="50px;"> </label>
        </td>

        <td class="col-md-3">
          <label for=""> {{ $item->product->product_name_en }}</label>
        </td>


         <td class="col-md-3">
          <label for=""> {{ $item->product->product_code_en }}</label>
        </td>

        <td class="col-md-2">
          <label for=""> {{ $item->color }}</label>
        </td>

        <td class="col-md-2">
          <label for=""> {{ $item->size }}</label>
        </td>

         <td class="col-md-2">
          <label for=""> {{ $item->qty }}</label>
        </td>

  <td class="col-md-2">
          <label for="">${{ $item->price * $item->qty }} </label>
        </td>

      </tr>
      @endforeach





    </tbody>

  </table>

</div>


</div> <!-- / end col md 12 -->

                

                            <div class="tab-pane active order">

                                <div class="order-details-wrapper mb-5">
                                    <h4 class="title text-uppercase ls-25 mb-5">Order Details</h4>
                                    <table class="order-table">
                                        <thead>
                                            <tr>
                                                <th class="text-dark">Product</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                      




                                       
                                        
                                    </table>
                                </div>
                                <!-- End of Order Details -->
            
                                


                                
                                <!-- End of Sub Orders-->
            
                                <div id="billing-account-addresses">
                                    <div class="row">       
                                        <div class="col-md-4 col-sm-12  mb-8">
                                            <div class="ecommerce-address billing-address">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Order Details</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Invoice : {{ $order->invoice_no }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>User Name:{{ $order->user->name }}</td>
                                                            </tr>
                                                  
                                                            <tr>
                                                                <td>Phone :{{ $order->user->phone }}</td>
                                                            </tr>

                                                            @if( $order->payment_number == NULL)
                                                            @else
                                                            <tr>
                                                                <td>{{ $order->payment_method }} Number :{{ $order->payment_number}}</td>
                                                            </tr>
                                                    @endif

                                                    @if($order->reference_name == NULL)
                                                            @else
                                                            <tr>
                                                                <td>Reference Name  :{{ $order->reference_name }}</td>
                                                            </tr>
                                                    @endif
                                                            <tr>
                                                                <td>Payment Type :{{ $order->payment_method }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tranx ID :{{ $order->transaction_id }}</td>
                                                            </tr>

                                                            <tr>
                                                                <td>Order Total   :{{ $order->amount }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Order Status : <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span></td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 mb-8">
                                            <div class="ecommerce-address billing-address">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Billing Address</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                            <tr>
                                                                <td>Name :{{ $order->shipping_name_one }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Phone :{{ $order->shipping_phone_one }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email : {{ $order->shipping_email_one }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Division : {{ $order->division->division_name_en }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>District : {{ $order->district->district_name_en }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>State : {{ $order->state->state_name_en }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Village/House No: {{ $order->village_one }}</td>
                                                            </tr>
                                                            <tr >
                                                                <td>Post Code : {{ $order->post_code_one }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-12 mb-8">
                                            <div class="ecommerce-address shipping-address">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Shipping Address</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                            <tr>
                                                                @if(  $order->shipping_name_two == NULL )
                                                                <td> Name :{{ $order->shipping_name_one }} </td>
                                                                @else
                                                                <td>Name : {{ $order->shipping_name_two }} </td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->shipping_phone_two == NULL )
                                                                <td> Phone :{{ $order->shipping_phone_one }} </td>
                                                                @else
                                                                <td>Phone : {{ $order->shipping_phone_two }}</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->shipping_email_two == NULL )
                                                                <td> Email : {{ $order->shipping_email_one }} </td>
                                                                @else
                                                                <td> Email  : {{ $order->shipping_email_two }}</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->division_two == NULL )
                                                                <td> Division : {{ $order->division->division_name_en }} </td>
                                                                @else
                                                                <td>Division : {{ $order->division_two }} </td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->district_two == NULL )
                                                                <td> District : {{ $order->district->district_name_en }} </td>
                                                                @else
                                                                <td>District : {{ $order->district_two }} </td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->state_two == NULL )
                                                                <td> State : {{ $order->state->state_name_en }}  </td>
                                                                @else
                                                                <td>State : {{ $order->state_two }}</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->village_two == NULL )
                                                                <td> Village/House No: {{ $order->village_one }} </td>
                                                                @else
                                                                <td>Village/House No : {{ $order->village_two }}</td>
                                                                @endif
                                                            </tr>
                                                            <tr>
                                                                @if(  $order->post_code_two == NULL )
                                                                <td> Post Code : {{ $order->post_code_one }} </td>
                                                                @else
                                                                <td>Post Code : {{ $order->post_code_two }}</td>
                                                                @endif
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Account Address -->

                                @if($order->status == "delivered")

<h4 class="text-center mb-2"> Order Delivary</h4>

 @else
 @php 
$order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
@endphp


@if($order)
<div class="container">
<form action="{{ route('return.order',$order->id) }}" method="post">
 @csrf

<div class="form-group">
<label for="label"> Order Return Reason:</label>
<textarea name="return_reason" id="" class="form-control" cols="30" rows="05"placeholder="Return Reason"></textarea>    
</div>

<button type="submit" class=" btn btn-success btn-rounded">Order Return</button>
<span class="badge badge-pill badge-warning" style="background: red">You Have send return request for this product</span>
</form>
</div>
@endif

 @endif

            
                                <a href="{{url('/dashboard')}}" class="btn btn-dark btn-rounded btn-icon-left btn-back mt-6 mb-6"><i class="w-icon-long-arrow-left"></i>Back To List</a>
                            </div>
                      
                    </div>
                </div>

              

            </div>
            <!-- End of PageContent -->
        </main>

        @endsection