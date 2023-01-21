@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp
  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">Order Details</h3>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Order Details</li>

							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>



		<!-- Main content -->
		<section class="content">
		  <div class="row">


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Billing Address</strong> </h4>
				  </div>


<table class="table">
            <tr>
              <th> Billing Name : </th>
               <th> {{ $order->shipping_name_one }} </th>
            </tr>

             <tr>
              <th> Billing Phone : </th>
               <th> {{ $order->shipping_phone_one }} </th>
            </tr>

             <tr>
              <th> Billing Email : </th>
               <th> {{ $order->shipping_email_one }} </th>
            </tr>

             <tr>
              <th> Division : </th>
               <th> {{ $order->division->division_name_en }} </th>
            </tr>

             <tr>
              <th> District : </th>
               <th> {{ $order->district->district_name_en }} </th>
            </tr>

             <tr>
              <th> State : </th>
               <th>{{ $order->state->state_name_en }} </th>
            </tr>
            <tr>
              <th> Village/House No : </th>
               <th>{{ $order->village_one }} </th>
            </tr>
            <tr>
              <th> Post Code : </th>
               <th> {{ $order->post_code_one }} </th>
            </tr>

            <tr>
              <th> Order Date : </th>
               <th> {{ $order->order_date }} </th>
            </tr>

           </table>



				</div>
			  </div> <!--  // cod md -6 -->


<div class="col-md-6 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Order Details</strong><span class="text-danger"> Invoice : {{ $order->invoice_no }}</span></h4>
				  </div>


<table class="table">
            <tr>
              <th>  Name : </th>
               <th> {{ $order->user->name }} </th>
            </tr>

             <tr>
              <th>  Phone : </th>
               <th> {{ $order->user->shipping_phone_one }} </th>
            </tr>
            
            @if($order->reference_name == null)

            @else

            <tr>
              <th> Reference Name : </th>
               <th> {{ $order->reference_name }} </th>
            </tr>
        @endif

          @if($order->reference_name == null)

            @else

            <tr>
              <th> {{ $order->payment_method }} Number : </th>
               <th> {{ $order->payment_number }} </th>
            </tr>
        @endif
             <tr>
              <th> Payment Type : </th>
               <th> {{ $order->payment_method }} </th>
            </tr>

             <tr>
              <th> Tranx ID : </th>
               <th> {{ $order->transaction_id }} </th>
            </tr>

             <tr>
              <th> Invoice  : </th>
               <th class="text-danger"> {{ $order->invoice_no }} </th>
            </tr>

             <tr>
              <th> Order Total : </th>
               <th>${{ $order->amount }} </th>
            </tr>

            <tr>
              <th> Order : </th>
               <th>   
                <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{ $order->status }} </span> </th>
            </tr>

            <tr>
              <th>  </th>
               <th> 
               @if($order->status == 'pending')
               	<a href="{{ route('pending-confirm',$order->id) }}" class="btn btn-block btn-success" id="confirm">Confirm Order</a>
                   @elseif($order->status == 'confirm')
               	<a href="{{ route('confirm.processing',$order->id) }}" class="btn btn-block btn-success" id="processing">Processing Order</a>

               	@elseif($order->status == 'processing')
               	<a href="{{ route('processing.picked',$order->id) }}" class="btn btn-block btn-success" id="picked">Picked Order</a>

               	@elseif($order->status == 'picked')
               	<a href="{{ route('picked.shipped',$order->id) }}" class="btn btn-block btn-success" id="shipped">Shipped Order</a>

               	@elseif($order->status == 'shipped')
                <a href="{{ route('shipped.delivered',$order->id) }}" class="btn btn-block btn-success" id="delivered">Delivered Order</a>
               	@endif

                 </th>
            </tr>



           </table>



				</div>
			  </div> <!--  // cod md -6 -->


        <div class="col-md-12 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">
					<h4 class="box-title"><strong>Shipping Address</strong> </h4>
				  </div>

          
<table class="table">
            <tr>
              <th> Shipping Name : </th>
              @if(  $order->shipping_name_two == NULL )
              <th> {{ $order->shipping_name_one }} </th>
              @else
               <th> {{ $order->shipping_name_two }} </th>
               @endif
            </tr>

             <tr>
              <th> Shipping Phone : </th>
              @if(  $order->shipping_email_two == NULL )
              <th> {{ $order->shipping_phone_one }} </th>
              @else
               <th> {{ $order->shipping_phone_two }} </th>
               @endif
            </tr>

             <tr>
              <th> Shipping Email : </th>
              @if(  $order->shipping_email_two == NULL )
              <th> {{ $order->shipping_email_one }} </th>
              @else
               <th> {{ $order->shipping_email_two }} </th>
               @endif
            </tr>

             <tr>
              <th> Division : </th>
              @if(  $order->division_two == NULL )
              <th> {{ $order->division->division_name_en }} </th>
              @else
               <th> {{ $order->division_two }} </th>
               @endif
            </tr>

             <tr>
              <th> District : </th>
              @if(  $order->district_two == NULL )
              <th> {{ $order->district->district_name_en }} </th>
              @else
               <th> {{ $order->district_two }} </th>
               @endif
            </tr>

             <tr>
              <th> State : </th>
              @if(  $order->state_two == NULL )
              <th>{{ $order->state->state_name_en }} </th>
              @else
               <th>{{ $order->state_two }} </th>
               @endif
            </tr>
            <tr>
          
              <th> Village/House No : </th>
              @if(  $order->village_two == NULL )
              <th>{{ $order->village_one }} </th>
            @else           
               <th>{{ $order->village_two }} </th>
               @endif
            </tr>
            <tr>
              <th> Post Code : </th>
              @if(  $order->post_code_two == NULL )
              <th>{{ $order->post_code_one }} </th>
              @else
              
               <th> {{ $order->post_code_two }} </th>
               @endif
            </tr>

            <tr>
              <th> Order Date : </th>
              
               <th> {{ $order->order_date }} </th>
            </tr>

           </table>



				</div>
			  </div> <!--  // cod md -6 -->


<div class="col-md-12 col-12">
				<div class="box box-bordered border-primary">
				  <div class="box-header with-border">

				  </div>



 <table class="table">
            <tbody>

              <tr>
                <td width="10%">
                  <label for=""> Image</label>
                </td>

                 <td width="20%">
                  <label for=""> Product Name </label>
                </td>

             <td width="10%">
                  <label for=""> Product Code</label>
                </td>


               <td width="10%">
                  <label for=""> Color </label>
                </td>

                <td width="10%">
                  <label for=""> Size </label>
                </td>

                  <td width="10%">
                  <label for=""> Quantity </label>
                </td>

               <td width="10%">
                  <label for=""> Price </label>
                </td>

              </tr>


              @foreach($orderItem as $item)
       <tr>
               <td width="10%">
                  <label for=""><img src="{{ asset($item->product->product_thambnail_one) }}" height="50px;" width="50px;"> </label>
                </td>

               <td width="20%">
                  <label for=""> {{ $item->product->product_name_en }}</label>
                </td>


                <td width="10%">
                  <label for=""> {{ $item->product->product_code_en }}</label>
                </td>

               <td width="10%">
                  <label for=""> {{ $item->color }}</label>
                </td>

               <td width="10%">
                  <label for=""> {{ $item->size }}</label>
                </td>

                <td width="10%">
                  <label for=""> {{ $item->qty }}</label>
                </td>

         <td width="10%">
                  <label for=""> ${{ $item->price }}  ( $ {{ $item->price * $item->qty}} ) </label>
                </td>

              </tr>
              @endforeach





            </tbody>

          </table>











				</div>
			  </div>  <!--  // cod md -12 -->
















		  </div>
		  <!-- /. end row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection 