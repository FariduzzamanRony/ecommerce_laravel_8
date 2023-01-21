@extends('admin.admin_master')
@section('admin')

@php
$adminData = DB::table('admins')->find(1);
@endphp	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

	 <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Site Setting Header </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
                <form method="post" action="{{ route('footer_update.sitesetting') }}" enctype="multipart/form-data">
	 	@csrf
         <input type="hidden" name="id"  value="{{ $setting->id }}"  >
		 <input type="hidden" name="old_logo"  value="{{ $setting->footer_logo }}"  >

					  <div class="row">
						<div class="col-12">

			<div class="row">

				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5>Company Name English  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="company_name_en" value="{{ $setting->company_name_en }}" class="form-control"  > </div>
				</div>
				</div>

				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5> Company Name Others  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="company_name_others" value="{{ $setting->company_name_others }}" class="form-control"  > </div>
				</div>
				</div>

				
				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5>Company Address English  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="company_address_en" value="{{ $setting->company_address_en }}" class="form-control"  > </div>
				</div>
				</div>

				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5> Company Address Others  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="company_address_others" value="{{ $setting->company_address_others }}" class="form-control"  > </div>
				</div>
				</div>

	
			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5>Phone Number One English  <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="text"  name="phone_one_en" value="{{ $setting->phone_one_en }}" class="form-control"  > </div>
			</div>
			</div>

			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5>Phone Number One Others  <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="text"  name="phone_one_others" value="{{ $setting->phone_one_others }}" class="form-control"  > </div>
			</div>
			</div>

			
			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5>Phone Number Two English  <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="text"  name="phone_two_en" value="{{ $setting->phone_two_en }}" class="form-control"  > </div>
			</div>
			</div>

			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5>Phone Number Two Others  <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="text"  name="phone_two_others" value="{{ $setting->phone_two_others }}" class="form-control"  > </div>
			</div>
			</div>

			
			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5>Company Email <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="email"  name="email" value="{{ $setting->email }}" class="form-control"  > </div>
			</div>
			</div>

			<div class="col-sm-12 col-md-6">
			<div class="form-group">
				<h5> Facebook Link  <span class="text-danger">*</span></h5>
				<div class="controls">
			<input type="text"  name="facebook" value="{{ $setting->facebook }}" class="form-control"  > </div>
			</div>
			</div>

			
				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5>Twitter Link  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="twitter" value="{{ $setting->twitter }}" class="form-control"  > </div>
				</div>
				</div>

				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5> Linkedin Link  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="linkedin" value="{{ $setting->linkedin }}" class="form-control"  > </div>
				</div>
				</div>

				
				<div class="col-sm-12 col-md-6">
				<div class="form-group">
					<h5>youtube Link  <span class="text-danger">*</span></h5>
					<div class="controls">
				<input type="text"  name="youtube" value="{{ $setting->youtube }}" class="form-control"  > </div>
				</div>
				</div>

				<div class="col-sm-12 col-md-6">
	<div class="form-group">
		<h5>Site Footer Logo(432*135)  <span class="text-danger">*</span></h5>
		<div class="controls">
        <input type="file" name="footer_logo"     class="form-control"  onChange="logoUrl(this)" >
            <div class="help-block">
                <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset($setting->footer_logo) }}" style="height:80px;width:80px;">
                        <h5 class="mt-2">Old Logo </h5>
                        </div>
                        <div class="col-mid-6">
                        <img src="" id="logo" style="margin-top:10px;">
                        <h5 class="mt-2">New Logo </h5>
                        </div>
                </div>
                
            </div>
</div>
	</div>
    </div>
				</div> <!-- end cold md 6 --> 
   

			</div>	<!-- end row 	 -->	




			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>



	  </div>




	<!-- Main Image section -->


	<script type="text/javascript">
			function logoUrl(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#logo').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}	
		</script>

<script type="text/javascript">
			function faviconUrl(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#favicon').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}	
		</script>




@endsection