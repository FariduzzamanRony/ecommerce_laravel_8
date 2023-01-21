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
                <form method="post" action="{{ route('header_update.sitesetting') }}" enctype="multipart/form-data">
	 	@csrf
         <input type="hidden" name="id"  value="{{ $setting->id }}"  >
         <input type="hidden" name="old_logo"  value="{{ $setting->header_logo }}"  >
         <input type="hidden" name="old_favicon"  value="{{ $setting->favicon }}"  >

					  <div class="row">
						<div class="col-12">

			<div class="row">

				<div class="col-sm-12 col-md-6">

	 <div class="form-group">
		<h5>Favicon Name English  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="favicon_name_en" value="{{ $setting->favicon_name_en }}" class="form-control"  > </div>
	</div>
    </div>

    <div class="col-sm-12 col-md-6">
	<div class="form-group">
		<h5> Favicon Name Others  <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="favicon_name_others" value="{{ $setting->favicon_name_others }}" class="form-control"  > </div>
	</div>
    </div>
	
	<div class="col-sm-12 col-md-6">

<div class="form-group">
   <h5>Content Name English  <span class="text-danger">*</span></h5>
   <div class="controls">
<input type="text"  name="marquee_en" value="{{ $setting->marquee_en }}" class="form-control"  > </div>
</div>
</div>

<div class="col-sm-12 col-md-6">
<div class="form-group">
   <h5> Content Name Others  <span class="text-danger">*</span></h5>
   <div class="controls">
<input type="text"  name="marquee_others" value="{{ $setting->marquee_others }}" class="form-control"  > </div>
</div>
</div>

    <div class="col-sm-12 col-md-6">
	<div class="form-group">
		<h5>Favicon <span class="text-danger">*</span></h5>
		<div class="controls">
        <input type="file" name="favicon"     class="form-control" onChange="faviconUrl(this)"  >
        <div class="help-block">
        <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset($setting->favicon) }}" style="height:80px;width:80px;">
                        <h5 class="mt-2">Old favicon </h5>
                        </div>
                        <div class="col-mid-6">
                        <img src="" id="favicon" style="margin-top:10px;">
                        <h5 class="mt-2">New favicon </h5>
                        </div>
                </div>

                
            </div>
     </div>
	</div>
    </div>

    <div class="col-sm-12 col-md-6">
	<div class="form-group">
		<h5>Site Header Logo (288*90) <span class="text-danger">*</span></h5>
		<div class="controls">
        <input type="file" name="logo"     class="form-control"  onChange="logoUrl(this)" >
            <div class="help-block">
                <div class="row">
                        <div class="col-md-6">
                        <img src="{{ asset($setting->header_logo) }}" style="height:80px;width:80px;">
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