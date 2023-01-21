@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  

            <div class="col-sm-12 col-md-8">

            <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Update User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

                <form action="{{ route('update.user') }}"  method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
                id="steps-uid-2" novalidate="novalidate">

                @csrf
                <input type="hidden" name="old_id"  value="{{ $user->id }}"  >
               
                    
                    <section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                        
                            
                    <div class="form-group">
                        <label for="wfirstName2">User Name : <span class="danger">*</span> </label>
                        <input type="text"name="name" value="{{ $user->name }}"  class="form-control"  >
                       @error('name')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>
                
                        <div class="form-group">
                            <label for="wlastName2">User  Mobile Number : <span class="danger">*</span> </label>
                            <input type="text"name="phone" value="{{ $user->phone }}"  class="form-control"  >
                    
                            @error('phone')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        
                        
                        
                        
                        
                          <div class="form-group">
                            <label for="wlastName2">User  E-mail  : <span class="danger">*</span> </label>
                            <input type="email" name="email" value="{{ $user->email }}"  class="form-control"  >
                    
                            @error('email')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        
                        
                        
                        
                          <div class="form-group">
                            <label for="wlastName2">User Address  : <span class="danger">*</span> </label>
                            <input type="text"name="address" value="{{ $user->address }}"  class="form-control"  >
                    
                            @error('address')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        
                        
                        
                        
                            <div class="form-group">
                            <label for="wlastName2">User Gender  : <span class="danger">*</span> </label>
                             @if($user->gender == NULL)
                                        
                                        <select class="form-control" name="gender">
                                                        <option value="" selected="" disabled="">Please select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                        </select>
    @else
                                        <select class="form-control" name="gender">
                                                        <option value="{{ $user->gender }}" selected="" disabled="" >Please select</option>
                                                        <option value="Male" <?php if ($user->gender == 'Male' ) {
                     echo "selected"; } ?> >Male</option>
                                                        <option value="Female" <?php if ($user->gender == 'Female' ) {
                     echo "selected"; } ?> >Female</option>
                                                        <option value="Others" <?php if ($user->gender == 'Others' ) {
                     echo "selected"; } ?> >Others</option>
                                        </select>

                                        @endif
                    
                            @error('gender')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        
                        
                        
                            <div class="form-group">
                            <label for="wlastName2">User Birthday  : <span class="danger">*</span> </label>
                            
                            
                            
                           @if($user->birthday == NULL)

                                
                                        <div class="controls">
                                        <input type="date" name="birthday" class="form-control" max="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    @error('birthday') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>

                                    @else

                                    
                                        <div class="controls">
                                        <input type="date" name="birthday" value="{{ $user->birthday }}" class="form-control" max="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    @error('birthday') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>

                                    @endif
                            
                    
                           
                        </div>
                        
                        
                        
                        
                        
                


                    </section>
                <hr>
                <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Update" >
                        </div>

                </div>
                
                </form>


                </div>
            </div> <!-- End col-4 -->
   <!-- /.box-body -->
 </div>
 <!-- /.box -->

 
 <!-- /.box -->          
</div>

		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->
	  

        



	  </div>
 



      

@endsection