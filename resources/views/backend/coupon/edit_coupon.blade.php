@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">






<!--   ------------ Add Coupon Page -------- -->


          <div class="col-sm-12 col-md-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Coupon </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('coupon.update',$coupons->id) }}" >
	 	@csrf


	 <div class="form-group">
		<h5>Coupon Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="coupon_name" class="form-control" value="{{ $coupons->coupon_name }}"> 
	 @error('coupon_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>
	@if($coupons->product_code == NULL)
							@else
   					 <div class="form-group">
                            <label for="wlastName2">Select Product  code : <span class="danger">*</span> </label>
								<div class="controls">
									<select name="product_code" class="form-control" aria-invalid="false">
										<option value="" selected="" >Select Product  code</option>
                                    @foreach($products as $product)
										<option value="{{ $product->product_code_en }}" <?php if ($product->product_code_en == $coupons->product_code ) {
                     	echo "selected"; } ?>  >{{ $product->product_code_en }}</option>
                                    @endforeach
									</select>
								<div class="help-block">
                                @error('product_code')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                                </div></div>
							</div>  
							@endif


							@if($coupons->product_all == NULL)
							@else

							 <div class="form-group">
                            <label for="wlastName2">All Products: <span class="danger">*</span> </label>
								<div class="controls">
									<select name="product_all" class="form-control" aria-invalid="false">
										<option value="" selected="" >Select</option>                                   
										<option value="1" <?php if ($coupons->product_all == 1 ) {
                     	echo "selected"; } ?>  >All Products</option>
                                   
									</select>
								<div class="help-block">
                                @error('product_all')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                                </div></div>
							</div> 
@endif

	<div class="form-group">
		<h5>Coupon Discount <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="coupon_discount" class="form-control" value="{{ $coupons->coupon_discount }}">
     @error('coupon_discount') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>


	<div class="form-group">
		<h5>Coupon Validity Date  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupons->coupon_validity }}">
     @error('coupon_validity') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div> 


			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection 