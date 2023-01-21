@extends('admin.admin_master')

@section('admin')
<div class="container-full">
<!-- Main content -->
<section class="content">
			<div class="row">
				
            <div class="box box-widget widget-user">
					<!-- Add the bg color to the header using any of the bg-* classes -->
					<div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
					  <h3 class="widget-user-username">Admin Name: {{ $adminData->name }}</h3>
					  <h6 class="widget-user-desc">Admin E-mail: {{ $adminData->email }}</h6>
					</div>
					<div class="widget-user-image">
					  <img class="rounded-circle" src="{{ (!empty($adminData->profile_photo_path))? url('upload/admin_images/'.$adminData->profile_photo_path):url('upload/no_image.jpg') }}" alt="User Avatar">
					</div>
					<div class="box-footer">
					  <div class="row">
						<div class="col-sm-4">
						  <div class="description-block">
							<h5 class="description-header mb-3">Change username & e-mail</h5>
							<span class="description-text">
                                <a  href="{{ route('change.username') }}">
								<input type="submit"    class="btn btn-primary mt-5 mb-5" value="Change" >
                                 </a>
                            </span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4 br-1 bl-1">
						  <div class="description-block">
                          <h5 class="description-header mb-3">Change profile photo</h5>
							<span class="description-text">
                                <a  href="{{ route('change.photo') }}">
								<input type="submit"    class="btn btn-primary mt-5 mb-5" value="Change" >
                                 </a>
                            </span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
						<div class="col-sm-4">
						  <div class="description-block">
                          <h5 class="description-header mb-3">Change password</h5>
							<span class="description-text">
                                <a  href="{{ route('change.password') }}">
								<input type="submit"    class="btn btn-primary mt-5 mb-5" value="Change" >
                                 </a>
                            </span>
						  </div>
						  <!-- /.description-block -->
						</div>
						<!-- /.col -->
					  </div>
					  <!-- /.row -->
					</div>
				  </div>
                
			</div>
		</section>
		<!-- /.content -->
		</div>

@endsection