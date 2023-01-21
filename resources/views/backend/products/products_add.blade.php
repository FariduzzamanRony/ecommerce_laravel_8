@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container-full">


		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Add Product</h4>

			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">



					<form   action="{{ route('product.store') }}"  method="post"     enctype="multipart/form-data"  novalidate="">

					@csrf

					  <div class="row">
						<div class="col-12">

                         <div class="row"> <!-- Start 1st row -->

						    <div class="col-md-4">

                                <div class="form-group">
                                <label for="wlastName2">Select Brand  Name : <span class="danger">*</span> </label>
                                    <div class="controls">
                                        <select name="brand_id" class="form-control" aria-invalid="false">
                                            <option value="" selected="" disabled="">Select Brand</option>
                                        @foreach($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->brand_name_en }}</option>
                                        @endforeach
                                        </select>
                                    <div class="help-block">
                                    @error('brand_id')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                                    </div>
                                    </div>

							</div>
                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <label for="wlastName2">Select Category  Name : <span class="danger">*</span> </label>
                                    <div class="controls">
                                        <select name="category_id" class="form-control" aria-invalid="false">
                                            <option value="" selected="" disabled="">Select Category</option>
                                        @foreach($category as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->category_name_en }}</option>
                                        @endforeach
                                        </select>
                                    <div class="help-block">
                                    @error('category_id')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                                    </div></div>
                                </div>

                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <label for="wlastName2">Select SubCategory  Name : <span class="danger">*</span> </label>
                                    <div class="controls">
                                        <select name="subcategory_id" class="form-control" aria-invalid="false">
                                            <option value="" selected="" disabled="">Select SubCategory</option>

                                        </select>
                                    <div class="help-block">
                                    @error('subcategory_id')
                                <span class="text-danger">{{ $message }} </span>
                                @enderror
                                    </div></div>
                                </div>

                            </div>  <!--  col md 4 -->

                         </div>  <!-- End 1st row -->





						 <div class="row"> <!-- Start 2nd row -->

								<div class="col-md-4">

									<div class="form-group">
									<label for="wlastName2">Select Sub SubCategory  Name : <span class="danger">*</span> </label>
										<div class="controls">
											<select name="sub_subcategory_id" class="form-control" aria-invalid="false">
												<option value="" selected="" disabled="">Select Sub SubCategory</option>

											</select>
										<div class="help-block">
										@error('sub_subcategory_id')
									<span class="text-danger">{{ $message }} </span>
									@enderror
										</div>
										</div>

								</div>
								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
								<label for="wlastName2">Product Name English : <span class="danger">*</span> </label>
								<div class="controls">
									<input type="text" name="product_name_en" class="form-control" >
									<div class="help-block">
									@error('product_name_en')
									<span class="text-danger">{{ $message }} </span>
									@enderror
									</div></div>
								</div>

								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
								<label for="wlastName2">Product Name Others : <span class="danger">*</span> </label>
								<div class="controls">
									<input type="text" name="product_name_others" class="form-control" >
									<div class="help-block">
									@error('product_name_others')
									<span class="text-danger">{{ $message }} </span>
									@enderror
									</div></div>
								</div>

								</div>  <!--  col md 4 -->

								</div>  <!-- End 2nd row -->






								<div class="row"> <!-- Start 3rd row -->

									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Product Code English : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="product_code_en" class="form-control" >
													<div class="help-block">
														@error('product_code_en')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

                                        <div class="form-group">
											<label for="wlastName2">Product Model English : <span class="danger">*</span> </label>
												<div class="controls">
												<input type="text" name="Product_model_en" class="form-control" >
														<div class="help-block">
															@error('Product_model_en')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>

									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
										<label for="wlastName2">Product Quantity : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="product_qty_en" class="form-control" >
													<div class="help-block">
														@error('product_qty_en')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

									</div>  <!--  col md 4 -->

									</div>  <!-- End 3rd row -->






									<div class="row"> <!-- Start 4th row -->

										<div class="col-md-4">

                                            <div class="form-group">
												<label for="wlastName2">Product Color English : <span class="danger">*</span> </label>
													<div class="controls">
													<input type="text" name="product_color_en" value="Red,Blue" data-role="tagsinput" placeholder="add color" />
															<div class="help-block">
																@error('product_color_en')
																<span class="text-danger">{{ $message }} </span>
																@enderror
															</div>
													</div>
											</div>


										</div>  <!--  col md 4 -->


										<div class="col-md-4">

										<div class="form-group">
											<label for="wlastName2">Product Size English : <span class="danger">*</span> </label>
												<div class="controls">
												<input type="text" name="product_size_en" value="Small,Madium" data-role="tagsinput" placeholder="add size" />
														<div class="help-block">
															@error('product_size_en')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>

										</div>  <!--  col md 4 -->

										</div>  <!-- End 4th row -->




										<div class="row"> <!-- Start 5th row -->

											<div class="col-md-4">

									{{-- <div class="form-group">
											   <label for="wlastName2">Product Size Others : <span class="danger">*</span> </label>
												<div class="controls">
												    <input type="text" name="product_size_others" value="Small,Madium" data-role="tagsinput" placeholder="add size" />
														<div class="help-block">
															@error('product_size_others')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div> --}}


											</div>  <!--  col md 4 -->

											<div class="col-md-4">



											</div>  <!--  col md 4 -->

											<div class="col-md-4">

									 {{-- <div class="form-group">
												    <label for="wlastName2">Product Color Others : <span class="danger">*</span> </label>
													<div class="controls">
													<input type="text" name="product_color_others" value="Red,Blue" data-role="tagsinput" placeholder="add color" />
															<div class="help-block">
																@error('product_color_others')
																<span class="text-danger">{{ $message }} </span>
																@enderror
															</div>
													  </div>
											</div> --}}

											</div>  <!--  col md 4 -->

											</div>  <!-- End 5th row -->





							<div class="row"> <!-- Start 6th row -->

								<div class="col-md-4">

								<div class="form-group">
										<label for="wlastName2">Product selling price English : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="selling_price_en" class="form-control" >
													<div class="help-block">
														@error('selling_price_en')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>


								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
										<label for="wlastName2">Product selling price Others : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="selling_price_others" class="form-control" >
													<div class="help-block">
														@error('selling_price_others')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
										<label for="wlastName2">Product Discount price English : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="discount_price_en" class="form-control" >
													<div class="help-block">
														@error('discount_price_en')
														<span class="text-danger">{{ $message }} </span>
														@enderror
													</div>
											</div>
									</div>

								</div>  <!--  col md 4 -->

								</div>  <!-- End 6th row -->





									<div class="row"> <!-- Start 8th row -->

									<div class="col-md-4">

									<div class="form-group">
											<label for="wlastName2">Product Discount price Others : <span class="danger">*</span> </label>
												<div class="controls">
													<input type="text" name="discount_price_others" class="form-control" >
														<div class="help-block">
															@error('discount_price_others')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
											<label for="wlastName2">Product Guarantee  English : <span class="danger">*</span> </label>
												<div class="controls">
													<input type="text" name="product_guarantee_en" class="form-control" >
														<div class="help-block">
															@error('product_guarantee_en')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
											<label for="wlastName2">Product Guarantee  Others : <span class="danger">*</span> </label>
												<div class="controls">
													<input type="text" name="product_guarantee_others" class="form-control" >
														<div class="help-block">
															@error('product_guarantee_others')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>


									</div>  <!--  col md 4 -->







										</div>  <!-- End 8th row -->





										<div class="row"> <!-- Start 8th row -->


										<div class="col-md-4">

										<!-- <div class="form-group">
												<label for="wlastName2">Product Video Bannar: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="product_video_banner" class="form-control" onChange="videobannarUrl(this)">
															<div class="help-block">
																@error('product_video_banner')
																<span class="text-danger">{{ $message }} </span>
																@enderror

																<img src="" id="VideoBannar" style="margin-top:5px;margin-left:5px;">
															</div>
													</div>
											</div> -->


										</div>  <!--  col md 4 -->

												<div class="col-md-8">

												<!-- <div class="form-group">
														<label for="wlastName2">Product Video  Url  : <span class="danger">*</span> </label>
															<div class="controls">
																<input type="text" name="product_video" class="form-control" >
																	<div class="help-block">
																		@error('product_video')
																		<span class="text-danger">{{ $message }} </span>
																		@enderror
																	</div>
															</div>
													</div> -->


												</div>  <!--  col md 4 -->




													</div>  <!-- End 8th row -->




										<div class="row"> <!-- Start 8th row -->


										<div class="col-md-4">

										<div class="form-group">
												<label for="wlastName2">Main Thambnail One: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="product_thambnail_one" class="form-control" onChange="mainThamUrlone(this)">
															<div class="help-block">
																@error('product_thambnail_one')
																<span class="text-danger">{{ $message }} </span>
																@enderror

																<img src="" id="mainThmbone" style="margin-top:5px;margin-left:5px;">
															</div>
													</div>
											</div>


										</div>  <!--  col md 4 -->


										<div class="col-md-4">

										<div class="form-group">
												<label for="wlastName2">Main Thambnail Two: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="product_thambnail_two" class="form-control" onChange="mainThamUrltwo(this)">
															<div class="help-block">
																@error('product_thambnail_two')
																<span class="text-danger">{{ $message }} </span>
																@enderror

																<img src="" id="mainThmbtwo" style="margin-top:5px;margin-left:5px;">
															</div>
													</div>
											</div>


										</div>  <!--  col md 4 -->

										<div class="col-md-4">

										<div class="form-group">
												<label for="wlastName2">Multiple Images: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="multi_img[]" class="form-control"  multiple="" id="multiImg">
															<div class="help-block">
																@error('multi_imgs')
																<span class="text-danger">{{ $message }} </span>
																@enderror
																<div class="row" id="preview_img" style="margin-top:5px;margin-left:5px;"></div>
															</div>
													</div>
											</div>

										</div>  <!--  col md 4 -->

										<div class="col-md-4">



										</div>  <!--  col md 4 -->

										</div>  <!-- End 8th row -->




										<div class="row"> <!-- Start 9th row -->

											<div class="col-md-6">

											<div class="form-group">
													<label for="wlastName2">Product Short Description English : <span class="danger">*</span> </label>
														<div class="controls">
														<textarea name="short_descp_en" id="editor4"  cols="30" rows="80"  required="" placeholder=""></textarea>
																<div class="help-block">
																	@error('short_descp_en')
																	<span class="text-danger">{{ $message }} </span>
																	@enderror
																</div>
														</div>
												</div>


											</div>  <!--  col md 4 -->

											<div class="col-md-6">

                                                <div class="form-group">
                                                    <label for="wlastName2">Product Long Description English : <span class="danger">*</span> </label>
                                                        <div class="controls">
                                                        <textarea id="editor1" name="long_descp_en" rows="10" cols="80">

                                                        </textarea>
                                                                <div class="help-block">
                                                                    @error('long_descp_en')
                                                                    <span class="text-danger">{{ $message }} </span>
                                                                    @enderror
                                                                </div>
                                                        </div>
                                                </div>

											</div>  <!--  col md 4 -->



											</div>  <!-- End 9th row -->






		<hr>










						<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="hot_deal" id="checkbox_2"  value="1">
											<label for="checkbox_2">Hot Deal</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="best_seller" id="checkbox_3" value="1">
											<label for="checkbox_3">Best Seller</label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="new_arrivals" id="checkbox_4"  value="1">
											<label for="checkbox_4">New Arrivals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="featured" id="checkbox_5" value="1">
											<label for="checkbox_5">Featured</label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
						</div>





						<div class="row">
						<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
									<fieldset>
											<input type="checkbox" name="special_offer" id="checkbox_9" value="1">
											<label for="checkbox_9"> Special Offer</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="most_populer" id="checkbox_8"  value="1">
											<label for="checkbox_8">Most Populer </label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">

										<fieldset>
											<input type="checkbox"  name="trending" id="checkbox_11" value="1">
											<label for="checkbox_11">New Collection</label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
						</div>








						<div class="text-xs-right">
                        <div class="form-group">
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add Product" >
                        </div>

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
		<!-- /.content -->
	  </div>








	  <script type="text/javascript">
      $(document).ready(function() {
        $('select[name="category_id"]').on('change', function(){
            var category_id = $(this).val();
            if(category_id) {
                $.ajax({
                    url: "{{  url('/admin/categories/subcategory/ajax') }}/"+category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
						$('select[name="sub_subcategory_id"]').html('');
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });


		$('select[name="subcategory_id"]').on('change', function(){
            var subcategory_id = $(this).val();
            if(subcategory_id) {
                $.ajax({
                    url: "{{  url('/admin/categories/sub_subcategory/ajax') }}/"+subcategory_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="sub_subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="sub_subcategory_id"]').append('<option value="'+ value.id +'">' + value.sub_subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });





    });
    </script>


	<!-- Main Image One section -->


		<script type="text/javascript">
			function mainThamUrlone(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#mainThmbone').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>







	<!-- Main Image Two section -->


	<script type="text/javascript">
			function mainThamUrltwo(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#mainThmbtwo').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>









	<!-- Video Bannar  section -->


	<script type="text/javascript">
			function videobannarUrl(input){
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e){
						$('#VideoBannar').attr('src',e.target.result).width(80).height(80);
					};
					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>






















			<!-- Multiple Image Section -->

		<script type="text/javascript">
		$(document).ready(function(){
		$('#multiImg').on('change', function(){ //on file input change
			if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
			{
				var data = $(this)[0].files; //this file data

				$.each(data, function(index, file){ //loop though each file
					if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
						var fRead = new FileReader(); //new filereader
						fRead.onload = (function(file){ //trigger function on successful read
						return function(e) {
							var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(80)
						.height(80); //create image element
							$('#preview_img').append(img); //append image to output element
						};
						})(file);
						fRead.readAsDataURL(file); //URL representing the file's data.
					}
				});

			}else{
				alert("Your browser doesn't support File API!"); //if File API is absent
			}
		});
		});

		</script>











@endsection
