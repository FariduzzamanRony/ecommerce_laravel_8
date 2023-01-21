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




<!--   ------------ Add Division Page -------- -->


          <div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Edit Division </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('division.update',$divisions->id) }}" >
	 	@csrf


	 <div class="form-group">
		<h5>Division Name English <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name_en" class="form-control" value="{{ $divisions->division_name_en }}" > 
	 @error('division_name_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>

    <div class="form-group">
		<h5>Division Name Others <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name_others" class="form-control" value="{{ $divisions->division_name_others }}" > 
	 @error('division_name_others') 
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