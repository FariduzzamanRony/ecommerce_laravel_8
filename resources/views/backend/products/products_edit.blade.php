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
			  <h4 class="box-title">Update Product</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">



					<form   action="{{ route('product.update') }}"  method="post"     enctype="multipart/form-data"  novalidate="">

					@csrf
		<input type="hidden" name="id" value="{{ $products->id }}" >
		<input type="hidden" name="old_image_one"  value="{{ $products->product_thambnail_one }}"  >
		<input type="hidden" name="old_image_two"  value="{{ $products->product_thambnail_two }}"  >
		<input type="hidden" name="old_image_three"  value="{{ $products->product_video_banner }}"  >



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
                                            <option value="{{ $brand->id }}" {{ $brand->id == $products->brand_id ? 'selected' : '' }}>{{ $brand->brand_name_en }}</option>
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
                                            <option value="{{ $cat->id }}" {{ $cat->id == $products->category_id ? 'selected' : '' }} >{{ $cat->category_name_en }}</option>
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
                                            <option value="" selected="" disabled="" >Select SubCategory</option>
											@foreach($subcategories as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $products->subcategory_id ? 'selected' : '' }} >{{ $cat->subcategory_name_en }}</option>
                                        @endforeach
                                       
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
												@foreach($sub_subcategory as $cat)
                                            <option value="{{ $cat->id }}" {{ $cat->id == $products->sub_subcategory_id ? 'selected' : '' }} >{{ $cat->sub_subcategory_name_en }}</option>
                                        @endforeach
											
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
									<input type="text" name="product_name_en" value="{{ $products->product_name_en }}" class="form-control" > 
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
									<input type="text" name="product_name_others" value="{{ $products->product_name_others }}" class="form-control" > 
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
												<input type="text" name="product_code_en" value="{{ $products->product_code_en }}" class="form-control" > 
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
										<label for="wlastName2">Product Code Others : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="product_code_others" value="{{ $products->product_code_others }}" class="form-control" > 
													<div class="help-block">
														@error('product_code_others')
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
												<input type="text" name="product_qty_en" value="{{ $products->product_qty_en }}" class="form-control" > 
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
											<label for="wlastName2">Product Model English : <span class="danger">*</span> </label>
												<div class="controls">
												<input type="text" name="Product_model_en" value="{{ $products->Product_model_en }}" class="form-control" > 
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
											<label for="wlastName2">Product Model Others : <span class="danger">*</span> </label>
												<div class="controls">
												<input type="text" name="Product_model_others" value="{{ $products->Product_model_others }}" class="form-control" > 
														<div class="help-block">
															@error('Product_model_others')
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
												<input type="text" name="product_size_en" value="{{ $products->product_size_en }}" data-role="tagsinput" placeholder="add size" /> 
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

											<div class="form-group">
											<label for="wlastName2">Product Size Others : <span class="danger">*</span> </label>
												<div class="controls">
												<input type="text" name="product_size_others" value="{{ $products->product_size_others }}" data-role="tagsinput" placeholder="add size" /> 
														<div class="help-block">
															@error('product_size_others')
															<span class="text-danger">{{ $message }} </span>
															@enderror
														</div>
												</div>
										</div>


											</div>  <!--  col md 4 -->

											<div class="col-md-4">

											<div class="form-group">
												<label for="wlastName2">Product Color English : <span class="danger">*</span> </label>
													<div class="controls">
													<input type="text" name="product_color_en" value="{{ $products->product_color_en }}" data-role="tagsinput" placeholder="add color" /> 
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
												<label for="wlastName2">Product Color Others : <span class="danger">*</span> </label>
													<div class="controls">
													<input type="text" name="product_color_others" value="{{ $products->product_color_others }}" data-role="tagsinput" placeholder="add color" /> 
															<div class="help-block">
																@error('product_color_others')
																<span class="text-danger">{{ $message }} </span>
																@enderror
															</div>
													</div>
											</div>

											</div>  <!--  col md 4 -->

											</div>  <!-- End 5th row -->





							<div class="row"> <!-- Start 6th row -->

								<div class="col-md-4">

								<div class="form-group">
										<label for="wlastName2">Product selling price English : <span class="danger">*</span> </label>
											<div class="controls">
												<input type="text" name="selling_price_en" value="{{ $products->selling_price_en }}" class="form-control" > 
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
												<input type="text" name="selling_price_others" value="{{ $products->selling_price_others }}" class="form-control" > 
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
												<input type="text" name="discount_price_en" value="{{ $products->discount_price_en }}" class="form-control" > 
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
													<input type="text" name="discount_price_others" value="{{ $products->discount_price_others }}" class="form-control" > 
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
													<input type="text" name="product_guarantee_en" value="{{ $products->product_guarantee_en }}" class="form-control" > 
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
													<input type="text" name="product_guarantee_others" value="{{ $products->product_guarantee_others }}" class="form-control" > 
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

										<div class="col-md-12">

											<!-- <div class="form-group">
													<label for="wlastName2">Product Video  Url  : <span class="danger">*</span> </label>
														<div class="controls">
															<input type="text" name="product_video" value="{{ $products->product_video }}" class="form-control" > 
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

											<!-- <div class="form-group">
												<label for="wlastName2">Product Video Bannar: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="product_video_banner" class="form-control" onChange="videobannarUrl(this)">
															<div class="help-block">
																@error('product_video_banner')
																<span class="text-danger">{{ $message }} </span>
																@enderror
																<div class="row">
																<div class="col-md-6">
																<img src="{{ asset($products->product_video_banner) }}" style="height:80px;width:80px;margin-top:5px;">
																<h5 class="mt-2">Old Image </h5>
																</div>
																<div class="col-mid-6">
																<img src="" id="VideoBannar" style="margin-top:5px;">
																<h5 class="mt-2">New Image </h5>
																</div>
																</div>
																
																
															</div>
													</div>
											</div> -->


										</div> 

									

										<div class="col-md-4">

										<div class="form-group">
												<label for="wlastName2">Main Thambnail One: <span class="danger">*</span> </label>
													<div class="controls">
															<input type="file" name="product_thambnail_one" class="form-control" onChange="mainThamUrlone(this)">
															<div class="help-block">
																@error('product_thambnail')
																<span class="text-danger">{{ $message }} </span>
																@enderror
																<div class="row">
																<div class="col-md-6">
																<img src="{{ asset($products->product_thambnail_one) }}" style="height:80px;width:80px;margin-top:5px;">
																<h5 class="mt-2">Old Image </h5>
																</div>
																<div class="col-mid-6">
																<img src="" id="mainThmbone" style="margin-top:5px;">
																<h5 class="mt-2">New Image </h5>
																</div>
																</div>
																
																
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
																<div class="row">
																<div class="col-md-6">
																<img src="{{ asset($products->product_thambnail_two) }}" style="height:80px;width:80px;margin-top:5px;">
																<h5 class="mt-2">Old Image </h5>
																</div>
																<div class="col-mid-6">
																<img src="" id="mainThmbtwo" style="margin-top:5px;">
																<h5 class="mt-2">New Image </h5>
																</div>
																</div>
																
																
															</div>
													</div>
											</div>


										</div>  <!--  col md 4 -->

										
										

										</div>  <!-- End 8th row -->





										<div class="row"> <!-- Start 9th row -->

											<div class="col-md-6">

											<div class="form-group">
													<label for="wlastName2">Product Short Description English : <span class="danger">*</span> </label>
														<div class="controls">
														<textarea name="short_descp_en" id="editor4" rows="10" cols="80" required="">{!! $products->short_descp_en !!}</textarea> 
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
													<label for="wlastName2">Product Short Description Others : <span class="danger">*</span> </label>
														<div class="controls">
														<textarea name="short_descp_others" id="editor3" rows="10" cols="80" required="" >{!! $products->short_descp_others !!}</textarea> 
																<div class="help-block">
																	@error('short_descp_others')
																	<span class="text-danger">{{ $message }} </span>
																	@enderror
																</div>
														</div>
												</div>

											</div>  <!--  col md 4 -->



											</div>  <!-- End 9th row -->




											<div class="row"> <!-- Start 10th row -->

												<div class="col-md-6">

												<div class="form-group">
														<label for="wlastName2">Product Short Description English : <span class="danger">*</span> </label>
															<div class="controls">
															<textarea id="editor1" name="long_descp_en" rows="10" cols="80">
															{!! $products->long_descp_en !!}
															</textarea>
																	<div class="help-block">
																		@error('long_descp_en')
																		<span class="text-danger">{{ $message }} </span>
																		@enderror
																	</div>
															</div>
													</div>


												</div>  <!--  col md 4 -->

												<div class="col-md-6">

												<div class="form-group">
														<label for="wlastName2">Product Short Description Others : <span class="danger">*</span> </label>
															<div class="controls">
															<textarea id="editor2" name="long_descp_others" rows="10" cols="80">
															{!! $products->long_descp_others !!}
															</textarea>
																	<div class="help-block">
																		@error('long_descp_others')
																		<span class="text-danger">{{ $message }} </span>
																		@enderror
																	</div>
															</div>
													</div>

												</div>  <!--  col md 4 -->



												</div>  <!-- End 10th row -->


		<hr>









					  
		<div class="row">
						<div class="col-md-6">
								<div class="form-group">									
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="hot_deal" id="checkbox_2"  value="1" {{ $products->hot_deal == 1 ? 'checked' :'' }}>
											<label for="checkbox_2">Hot Deal</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="best_seller" id="checkbox_3" value="1" {{ $products->best_seller == 1 ? 'checked' :'' }}>
											<label for="checkbox_3">Best Seller</label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										<fieldset>
											<input type="checkbox"  name="new_arrivals" id="checkbox_4"  value="1" {{ $products->new_arrivals == 1 ? 'checked' :'' }}>
											<label for="checkbox_4">New Arrivals</label>
										</fieldset>
										<fieldset>
											<input type="checkbox" name="featured" id="checkbox_5" value="1" {{ $products->featured == 1 ? 'checked' :'' }}>
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
											<input type="checkbox" name="special_offer" id="checkbox_9" value="1" {{ $products->special_offer == 1 ? 'checked' :'' }}>
											<label for="checkbox_9"> Special Offer</label>
										</fieldset>
										<fieldset>
											<input type="checkbox"  name="most_populer" id="checkbox_8"  value="1" {{ $products->most_populer == 1 ? 'checked' :'' }}>
											<label for="checkbox_8">Most Populer </label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="controls">
										
										<fieldset>
											<input type="checkbox"  name="trending" id="checkbox_7" value="1" {{ $products->trending == 1 ? 'checked' :'' }}>
											<label for="checkbox_7">Trending </label>
										</fieldset>
									<div class="help-block"></div></div>
								</div>
							</div>
						</div>

						<div class="text-xs-right">
                        <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Update Product" >
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




			<!-- ///////////////// Start Multiple Image Update Area ///////// -->

 <section class="content">
 	<div class="row">

<div class="col-md-12">
		<div class="box bt-3 border-info">
			<div class="box-header">
		 		<h4 class="box-title">Product Multiple Image <strong>Update</strong></h4>
			</div>


		<form method="post" action="{{ route('update-product-image') }}" enctype="multipart/form-data">
			@csrf
			<div class="row row-sm">
				@foreach($multiImgs as $img)
				<div class="col-md-3">

				<div class="card">
				<img src="{{ asset($img->photo_name) }}" class="card-img-top" style="height:300px; width:338px;">
				<div class="card-body">
					<h5 class="card-title">
				<a href="{{ route('product.multiimg.delete',$img->id) }}" class="btn btn-sm btn-danger" id="delete" title="Delete Data"><i class="fa fa-trash"></i> </a>
					</h5>
					<p class="card-text"> 
						<div class="form-group">
							<label class="form-control-label">Change Image <span class="tx-danger">*</span></label>
							<input class="form-control" type="file" name="multi_img[{{ $img->id }}]">
						</div> 
					</p>

				</div>
				</div> 		

				</div>	
			@endforeach

							</div>			
				@if ($multiImgs->count() > 0)
				<div class="text-xs-right">
					<input type="submit" class="btn btn-rounded btn-primary mb-5 ml-2" value="Update Image">
					</div>
				@endif
				
				<br><br>



		</form>		   





				</div>
			  </div>



 	</div> <!-- // end row  -->

 </section>


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