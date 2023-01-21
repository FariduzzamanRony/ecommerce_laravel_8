@extends('admin.admin_master')

@section('admin')
<div class="container-full">
<!-- Main content -->
<section class="content">
			
<div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Name and E-mail</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="{{ route('admin.photo') }}" method="post" enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
				id="steps-uid-2" novalidate="novalidate">

				@csrf

					
					<section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="wfirstName2"> Admin Photo : <span class="danger">*</span> </label>
									<div class="controls">
									<input type="file" name="profile_photo_path" class="form-control" required="" aria-invalid="false">
									</div>
								 </div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									
							  </div>
							</div>
						</div>

					</section>
				<hr>
							<span class="description-text">
								
								<input type="submit"    class="btn btn-primary mt-5 mb-5" value="Change" >   
							</span>

				</div>
				
				</form>
			</div>
			<!-- /.box-body -->
		  </div>         
 
		</section>
		<!-- /.content -->
		</div>

@endsection