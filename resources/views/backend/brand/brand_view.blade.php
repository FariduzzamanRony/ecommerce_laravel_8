@extends('admin.admin_master')

@section('admin')


	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-sm-12 col-md-8">

			 <div class="box">
				<div class="box-header with-border">
        <h3 class="box-title">Brand List <span class="badge badge-pill badge-danger"> {{ count($brand) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Brand Name English</th>
								<th>Brand Name Others</th>
								<th>Brand Image</th>
								<th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                        @foreach($brand as $items)
							<tr>

								<td>{{ $items->brand_name_en }}</td>
								<td>{{ $items->brand_name_others }}</td>
								<td><img src="{{ asset($items->brand_image) }}" style="height:60px;width:120px;"></td>
								<td width="20%">
                                    <a href=" {{ route('brand.edit',$items->id) }} " class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('brand.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></
                                </td>
	
							</tr>
							
                            @endforeach	
						</tbody>
						
					  </table>
					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->

			  
			  <!-- /.box -->          
			</div>
			<!-- /.col-8 -->


            <div class="col-sm-12 col-md-4">

            <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Add Brands</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

<form action="{{ route('brand.store') }}"  method="post"  enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
                id="steps-uid-2" novalidate="novalidate">

                @csrf
               

                    <section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                        
                            
                    <div class="form-group">
                        <label for="wfirstName2"> Brand Name English : <span class="danger">*</span> </label>
                        <input type="text" name="brand_name_en"  class="form-control"  >
                       @error('brand_name_en')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>
                
                        <div class="form-group">
                            <label for="wlastName2"> Brand  Name Others : <span class="danger">*</span> </label>
                            <input type="text" name="brand_name_others"   class="form-control"  >
                    
                            @error('brand_name_others')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
            
                    <div class="form-group">
                            <label for="wlastName2">Brand Image (320*124) : <span class="danger">*</span> </label>
                            <input type="file" name="brand_image"     class="form-control"   >
                   
                            @error('brand_image')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                            


                    </section>
                <hr>
                        <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add Brand" >
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