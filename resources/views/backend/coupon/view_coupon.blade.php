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



			<div class="col-sm-12 col-md-8">

			 <div class="box">
				<div class="box-header with-border">
				<h3 class="box-title">Coupon List <span class="badge badge-pill badge-danger"> {{ count($coupons) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Product Code </th>
								<th>Coupon Name </th>
								<th>Coupon Discount</th>
								<th>Validity </th>
								<th>Status </th>
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($coupons as $item)
	 <tr>

        <td>	
		@if($item->product_code == NULL)
		<span >All Products</span>
		@else
		{{ $item->product_code }} 
		@endif
		 </td>

		<td> {{ $item->coupon_name }}  </td>
		<td> {{ $item->coupon_discount }} </td>
		<td width="25%">
       {{ Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y') }}
			 </td>
		<td>
        @if($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
		 	<span class="badge badge-pill badge-success"> Valid </span>
		 	@else
             <span class="badge badge-pill badge-danger"> Invalid </span>
		 	@endif

		 </td>

         <td width="40%">
         <a href="{{ route('coupon.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
         <a href="{{ route('coupon.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">   
 	<i class="fa fa-trash"></i></a>
		</td>

	 </tr>
	  @endforeach
						</tbody>

					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->


			</div>
			<!-- /.col -->


<!--   ------------ Add Category Page -------- -->


          <div class="col-sm-12 col-md-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Coupon </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('coupon.store') }}" >
	 	@csrf


	 <div class="form-group">
		<h5>Coupon Name  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="coupon_name" class="form-control" > 
	 @error('coupon_name') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>

    <div class="form-group">
            <label for="wlastName2">Select Product  code : <span class="danger">*</span> </label>
            <div class="controls">
                <select name="product_code" class="form-control" aria-invalid="false">
                    <option value="" selected="" disabled="">Select Product  code</option>
                @foreach($products as $product)
                    <option value="{{ $product->product_code_en }}">{{ $product->product_code_en }}</option>
                @endforeach
                </select>
            <div class="help-block">
            @error('product_code')
        <span class="text-danger">{{ $message }} </span>
        @enderror
            </div></div>
        </div>  

		<div class="form-group">
            <label for="wlastName2">All Products : <span class="danger">*</span> </label>
            <div class="controls">
                <select name="product_all" class="form-control" aria-invalid="false">
                    <option value="" selected="" >Select</option>              
                    <option value="1">All Products</option>
                </select>
            <div class="help-block">
            @error('product_all')
        <span class="text-danger">{{ $message }} </span>
        @enderror
            </div></div>
        </div>  


	<div class="form-group">
		<h5>Coupon Discount <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text" name="coupon_discount" class="form-control" >
     @error('coupon_discount') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div>


	<div class="form-group">
		<h5>Coupon Validity Date  <span class="text-danger">*</span></h5>
		<div class="controls">
        <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
     @error('coupon_validity') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	  </div>
	</div> 


			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
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