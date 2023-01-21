@extends('admin.admin_master')

@section('admin')
<div class="container-full">
<!-- Main content -->
<section class="content">
			
<div class="box box-default">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Change Password</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body wizard-content">
				<form action="{{ route('admin.change.password') }}" method="post" class="validation-wizard wizard-circle wizard clearfix" role="application" 
				id="steps-uid-2" novalidate="novalidate">

				@csrf

					
					<section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="wfirstName2"> Current Password : <span class="danger">*</span> </label>
									<input name="old_password" id="current_password" type="password" autocomplete="current-password" class="form-control"  required>
								 </div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="wlastName2"> New Password : <span class="danger">*</span> </label>
									<input name="password" id="password" type="password"  autocomplete="new-password" class="form-control"  required>
							  </div>
							</div>

							<div class="col-md-5">
								<div class="form-group">
									<label for="wlastName2"> Confirm Password : <span class="danger">*</span> </label>
									<input name="password_confirmation" id="password_confirmation" type="password" class="form-control"  required>
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