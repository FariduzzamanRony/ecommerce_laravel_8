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
                                <h5 for="wlastName2"> User  Name : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                        
                                    <span> {{ $user->name }} </span>
                                   
                                    </div>

							</div>  
                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> User  Mobile Number : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span> {{ $user->phone }}</span>
                                    </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2">User  E-mail  : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    <span>
									{{ $user->email }}
								
								</span>
                                    
                                </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                         </div>  <!-- End 1st row -->



            
                   <div class="row mb-5"> <!-- Start 2nd row -->

						    <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> User Address : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                        
                                   @if($user->address == null)

										@else
                                          
                                        <span> {{ $user->address }}</span>
										@endif
                                   
                                    </div>

							</div>  
                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2"> User Gender  : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                    @if($user->gender == null)

										@else
                                          
                                        <span> {{ $user->gender }}</span>
										@endif
                                    </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                            <div class="col-md-4">

                                <div class="form-group">
                                <h5 for="wlastName2">User Birthday  : <span class="danger">*</span> </h5>
                                    <div class="controls">
                                     @if($user->birthday == null)

										@else
                                          
                                        <span> {{ $user->birthday }}</span>
										@endif
                                    
                                </div>
                                </div>  

                            </div>  <!--  col md 4 -->

                         </div>  <!-- End 2nd row -->
					






								<div class="row mt-5"> <!-- Start 3rd row -->

									<div class="col-md-4">

									<div class="form-group">
										<h5 for="wlastName2">User Photo  : <span class="danger">*</span> </h5>
											<div class="controls">
                                            <img style="border:2px solid transparent;border-radius:50%;" src="{{ (!empty($user->user->profile_photo_path))? url($user->user->profile_photo_path):url('upload/no_image.jpg') }}"
                                                                        alt="Commenter Avatar" width="90" height="90">
											</div>
									</div>


									</div>  <!--  col md 4 -->

									

								

									</div>  <!-- End 3rd row -->





		<hr>


			
				

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