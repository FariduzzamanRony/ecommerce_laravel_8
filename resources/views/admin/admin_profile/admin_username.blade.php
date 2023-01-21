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
				<form action="{{ route('admin.change.username') }}" method="post" class="validation-wizard wizard-circle wizard clearfix" role="application" 
				id="steps-uid-2" novalidate="novalidate">

				@csrf

					
					<section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="wfirstName2"> Admin Name : <span class="danger">*</span> </label>
									<input type="text" class="form-control required" id="wfirstName2" name="name" value="{{ $adminData->name }}">
								 </div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="wlastName2"> Admin E-mail : <span class="danger">*</span> </label>
									<input type="text" class="form-control required" id="wlastName2" name="email" value="{{ $adminData->email }}">
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