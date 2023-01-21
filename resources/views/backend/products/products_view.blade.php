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
			  <h4 class="box-title">Views Product</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

					  <div class="row">
						<div class="col-12">						
							
                         <div class="row mb-5"> <!-- Start 1st row -->

						    <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> Brand  Name : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                        
                                    <span> {{ $products->brand->brand_name_en }} </span>
                                   
                                    </div>

							</div>  
                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> Category  Name : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span> {{ $products->category->category_name_en }} </span>
                                    </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> SubCategory  Name : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span>
										@if($products->subcategory_id == null)

										@else
										
									{{ $products->subcategory->subcategory_name_en }} 
									@endif
								
								</span>
                                    
                                </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                         </div>  <!-- End 1st row -->





						 <div class="row mt-5"> <!-- Start 2nd row -->

								<div class="col-md-4">

									<div class="form-group">
									<h5 for="wlastName2">Sub SubCategory  Name : <span class="danger">*</span> </h5>
										<div class="controls">
                                        
										@if($products->sub_subcategory_id == null)

										@else
                                          
                                        <span> {{ $products->sub_subcategory->sub_subcategory_name_en }} </span>
										@endif

										</div>

								</div>  
								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
								<h5 for="wlastName2">Product Name English : <span class="danger">*</span> </h5>
								<div class="controls">
									 <span> {{ $products->product_name_en }} </span>
                                    </div>
								</div>

								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
								<h5 for="wlastName2">Product Name Others : <span class="danger">*</span> </h5>
								<div class="controls">
									
                                <span> {{ $products->product_name_others }} </span>
                            </div>
								</div>

								</div>  <!--  col md 4 -->

								</div>  <!-- End 2nd row -->






								<div class="row mt-5"> <!-- Start 3rd row -->

									<div class="col-md-4">

									<div class="form-group">
										<h5 for="wlastName2">Product Code English : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <span> {{ $products->product_code_en }} </span>
											</div>
									</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
										<h5 for="wlastName2">Product Code Others : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <span> {{ $products->product_code_others }} </span>
											</div>
									</div>

									</div>  <!--  col md 4 -->

									<div class="col-md-4">

									<div class="form-group">
										<h5 for="wlastName2">Product Quantity : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <span> {{ $products->product_qty_en }} </span>
											</div>
									</div>

									</div>  <!--  col md 4 -->

									</div>  <!-- End 3rd row -->






									<div class="row mt-5"> <!-- Start 4th row -->

										<div class="col-md-4">

										<div class="form-group">
											<h5 for="wlastName2">Product Model English : <span class="danger">*</span> </h5>
												<div class="controls">
                                                <span> {{ $products->Product_model_en }} </span>
												</div>
										</div>


										</div>  <!--  col md 4 -->

										<div class="col-md-4">

										<div class="form-group">
											<h5 for="wlastName2">Product Model Others : <span class="danger">*</span> </h5>
												<div class="controls">
                                                <span> {{ $products->Product_model_others }} </span>
												</div>
										</div>

										</div>  <!--  col md 4 -->

										<div class="col-md-4">

										<div class="form-group">
											<h5 for="wlastName2">Product Size English : <span class="danger">*</span> </h5>
												<div class="controls">
                                                <span> {{ $products->product_size_en }} </span>
												</div>
										</div>

										</div>  <!--  col md 4 -->

										</div>  <!-- End 4th row -->



										
										<div class="row mt-5"> <!-- Start 5th row -->

											<div class="col-md-4">

											<div class="form-group">
											<h5 for="wlastName2">Product Size Others : <span class="danger">*</span> </h5>
												<div class="controls">
                                                <span> {{ $products->product_size_others }} </span>
												</div>
										</div>


											</div>  <!--  col md 4 -->

											<div class="col-md-4 ">

											<div class="form-group">
												<h5 for="wlastName2">Product Color English : <span class="danger">*</span> </h5>
													<div class="controls">
                                                    <span> {{ $products->product_color_en }} </span>
													</div>
											</div>

											</div>  <!--  col md 4 -->

											<div class="col-md-4">

											<div class="form-group">
												<h5 for="wlastName2">Product Color Others : <span class="danger">*</span> </h5>
													<div class="controls">
                                                    <span> {{ $products->product_color_others }} </span>
													</div>
											</div>

											</div>  <!--  col md 4 -->

											</div>  <!-- End 5th row -->


                                            


							<div class="row mt-5"> <!-- Start 6th row -->

								<div class="col-md-4">

								<div class="form-group">
										<h5 for="wlastName2">Product selling price English : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <span> {{ $products->selling_price_en }} </span>
											</div>
									</div>


								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
										<h5 for="wlastName2">Product selling price Others : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <span> {{ $products->selling_price_others }} </span>
											</div>
									</div>

								</div>  <!--  col md 4 -->

								<div class="col-md-4">

								<div class="form-group">
										<h5 for="wlastName2">Product Discount price English : <span class="danger">*</span> </h5>
											<div class="controls">
												 <span> {{ $products->discount_price_en }} </span>
											</div>
									</div>

								</div>  <!--  col md 4 -->

								</div>  <!-- End 6th row -->





									<div class="row mt-5"> <!-- Start 8th row -->

									<div class="col-md-4">

									<div class="form-group">
											<h5 for="wlastName2">Product Discount price Others : <span class="danger">*</span> </h5>
												<div class="controls">
                                                <span> {{ $products->discount_price_others }} </span>
												</div>
										</div>


									</div>  <!--  col md 4 -->

									<div class="col-md-4">

										<div class="form-group">
												<h5 for="wlastName2">Product Guarantee English : <span class="danger">*</span> </h5>
													<div class="controls">
													<span> {{ $products->product_guarantee_en }} </span>
													</div>
											</div>


										</div>  <!--  col md 4 -->

										<div class="col-md-4">

										<div class="form-group">
												<h5 for="wlastName2">Product Guarantee Others : <span class="danger">*</span> </h5>
													<div class="controls">
													<span> {{ $products->product_guarantee_others }} </span>
													</div>
											</div>


										</div>  <!--  col md 4 -->
										

										</div>  <!-- End 8th row -->



										<div class="row mt-5"> <!-- Start 8th row -->

								

										<div class="col-md-4">

										<!-- <div class="form-group">
												<h5 for="wlastName2">Product Video : <span class="danger">*</span> </h5>
													<div class="controls">
													<span>
													<iframe src="{{ $products->product_video }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
													  </span>
													</div>
											</div> -->


										</div>  <!--  col md 4 -->

										<!-- <div class="form-group">
												<h5 for="wlastName2">Product Video Banner : <span class="danger">*</span> </h5>
													<div class="controls">
													<img src="{{ asset($products->product_video_banner) }}" style="height:80px;width:80px;">
                                                </div>
											</div> -->
										

										</div>  <!-- End 8th row -->


										<div class="row mt-5"> <!-- Start 8th row -->

										<div class="col-md-4">

										<div class="form-group">
												<h5 for="wlastName2">Main Thambnail One: <span class="danger">*</span> </h5>
													<div class="controls">
                                                    <img src="{{ asset($products->product_thambnail_one) }}" style="height:80px;width:80px;">
													</div>
											</div>


										</div>  <!--  col md 4 -->

								

										<div class="col-md-4">

										<div class="form-group">
												<h5 for="wlastName2">Main Thambnail Two: <span class="danger">*</span> </h5>
													<div class="controls">
                                                    <img src="{{ asset($products->product_thambnail_two) }}" style="height:80px;width:80px;">
													</div>
											</div>


										</div>  <!--  col md 4 -->

										<div class="form-group">
												<h5 for="wlastName2">Multiple Image: <span class="danger">*</span> </h5>
													<div class="controls">
                                                        @foreach($multiImgs as $multiImg)
                                                    <img src="{{ asset($multiImg->photo_name) }}" style="height:80px;width:80px;">
													@endforeach
                                                </div>
											</div>
										

										</div>  <!-- End 8th row -->

										




										<div class="row mt-5"> <!-- Start 9th row -->

											<div class="col-md-6">

											<div class="form-group">
													<h5 for="wlastName2">Product Short Description English : <span class="danger">*</h5> </label>
														<div class="controls">
                                                        <span> {!! $products->short_descp_en !!} </span>
														</div>
												</div>


											</div>  <!--  col md 4 -->

											<div class="col-md-6">

											<div class="form-group">
													<h5 for="wlastName2">Product Short Description Others : <span class="danger">*</span> </h5>
														<div class="controls">
                                                        <span> {!! $products->short_descp_others !!} </span>
														</div>
												</div>

											</div>  <!--  col md 4 -->



											</div>  <!-- End 9th row -->




											<div class="row mt-5"> <!-- Start 10th row -->

												<div class="col-md-6">

												<div class="form-group">
														<h5 for="wlastName2">Product Long Description English : <span class="danger">*</span> </h5>
															<div class="controls">
                                                            <span> {!! $products->long_descp_en !!} </span>
															</div>
													</div>


												</div>  <!--  col md 4 -->

												<div class="col-md-6">

												<div class="form-group">
														<h5 for="wlastName2">Product Long Description Others : <span class="danger">*</span> </h5>
															<div class="controls">
                                                            <span> {!! $products->long_descp_others !!} </span>
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
                      

						</div>
				

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




		

















@endsection