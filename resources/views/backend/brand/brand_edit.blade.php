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
                <h3 class="box-title">Update Brands</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

                <form action="{{ route('brand.update',$brand->id) }}"  method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
                id="steps-uid-2" novalidate="novalidate">

                @csrf
                <input type="hidden" name="id"  value="{{ $brand->id }}"  >
                <input type="hidden" name="old_image"  value="{{ $brand->brand_image }}"  >
                    
                    <section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                        
                            
                    <div class="form-group">
                        <label for="wfirstName2"> Brand Name English : <span class="danger">*</span> </label>
                        <input type="text" name="brand_name_en" value="{{ $brand->brand_name_en }}"  class="form-control"  >
                       @error('brand_name_en')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>
                
                        <div class="form-group">
                            <label for="wlastName2"> Brand  Name Others : <span class="danger">*</span> </label>
                            <input type="text" name="brand_name_others"  value="{{ $brand->brand_name_others }}"  class="form-control"  >
                    
                            @error('brand_name_others')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
            
                    <div class="form-group">
                            <label for="wlastName2">Brand Image : <span class="danger">*</span> </label>
                            <input type="file" name="brand_image"     class="form-control"   >
                   
                            @error('brand_image')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
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