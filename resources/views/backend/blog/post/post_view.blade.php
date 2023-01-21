@extends('admin.admin_master')
@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Blog Post </h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

                <form method="post" action="{{ route('post-store') }}" enctype="multipart/form-data" >
		 	@csrf

					  <div class="row">
	<div class="col-sm-12 col-md-12">	





<div class="row"> <!-- start 2nd row  -->


			<div class="col-sm-12 col-md-6">

				 <div class="form-group">
			<h5>Post Title English <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="post_title_en" class="form-control" required="">
     @error('post_title_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 	  </div>
		</div>

			</div> <!-- end col md 6 -->


			<div class="col-sm-12 col-md-6">

				 <div class="form-group">
			<h5>Post Title Others <span class="text-danger">*</span></h5>
			<div class="controls">
				<input type="text" name="post_title_others" class="form-control" required="">
     @error('post_title_others') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 		 </div>
		</div>

			</div> <!-- end col md 6 -->

		</div> <!-- end 2nd row  -->




				<div class="row"> <!-- start 2nd row  -->


		<div class="col-sm-12 col-md-6">

			<div class="form-group">
		<h5>Post Tag English <span class="text-danger">*</span></h5>
		<div class="controls">
		<input type="text" name="post_tag_en" value="Small,Madium" data-role="tagsinput" placeholder="add tag" /> 
		@error('post_tag_en') 
		<span class="text-danger">{{ $message }}</span>
		@enderror
		</div>
		</div>

		</div> <!-- end col md 6 -->


		<div class="col-sm-12 col-md-6">

			<div class="form-group">
		<h5>Post Tag Others <span class="text-danger">*</span></h5>
		<div class="controls">
		<input type="text" name="post_tag_others" value="Small,Madium" data-role="tagsinput" placeholder="add tag" /> 
		@error('post_tag_others') 
		<span class="text-danger">{{ $message }}</span>
		@enderror
		</div>
		</div>

		</div> <!-- end col md 6 -->

		</div> <!-- end 2nd row  -->




<div class="row"> <!-- start 6th row  -->
			<div class="col-sm-12 col-md-6">

	 <div class="form-group">
	<h5>BlogCategory Select <span class="text-danger">*</span></h5>
	<div class="controls">
		<select name="category_id" class="form-control" required="" >
			<option value="" selected="" disabled="">Select BlogCategory</option>
		 @foreach($blogcategory as $category)
         <option value="{{ $category->id }}">{{ $category->blog_category_name_en }}</option>	
			@endforeach
		</select>
		@error('category_id') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	 </div>
		 </div>

			</div> <!-- end col md 6 -->

			<div class="col-sm-12 col-md-6">

	    <div class="form-group">
			<h5>Post Main Image  <span class="text-danger">*</span></h5>
			<div class="controls">
	 <input type="file" name="post_image" class="form-control" onChange="mainThamUrl(this)" required="" >
     @error('post_image') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror
	 <img src="" id="mainThmb">
	 		 </div>
		</div>


			</div> <!-- end col md 6 -->




		</div> <!-- end 6th row  -->









<div class="row"> <!-- start 8th row  -->
			<div class="col-sm-12 col-md-6">

	    <div class="form-group">
			<h5>Post Details English <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor1" name="post_details_en" rows="10" cols="80" required="" >
		
						</textarea>  
	 		 </div>
		</div>

			</div> <!-- end col md 6 -->

			<div class="col-sm-12 col-md-6">

	     <div class="form-group">
			<h5>Post Details Others <span class="text-danger">*</span></h5>
			<div class="controls">
	<textarea id="editor2" name="post_details_others" rows="10" cols="80">
		
						</textarea>       
	 		 </div>
		</div>


			</div> <!-- end col md 6 -->		 

		</div> <!-- end 8th row  -->


	 <hr>

	 <div class="row">
						<div class="col-md-6">
								<div class="form-group">									
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="popular_posts" id="checkbox_2"  value="1">
											<label for="checkbox_2">Popular Posts</label>
										</fieldset>
									
									<div class="help-block"></div></div>
								</div>
							</div>
							
						</div>


	 	<div class="text-xs-right">
<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Post">
						</div>
					</form>




			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>




<script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>






@endsection 