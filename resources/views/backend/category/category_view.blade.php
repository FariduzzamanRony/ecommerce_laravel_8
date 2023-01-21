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
        <h3 class="box-title">Category List <span class="badge badge-pill badge-danger"> {{ count($category) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
              <!--<th>Category  Icon</th>             -->
								<th>Category Name English</th>
								<th>Category Name Others</th>
                <th>Category  Image One</th>
              
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($category as $items)
							<tr>
                 
								                <td>{{ $items->category_name_en }}</td>
                                <td>{{ $items->category_name_others }}</td>
                                <td><img src="{{ asset($items->category_image_one) }}" style="height:60px;width:120px;"></td>
                                
								
								<td width="20%">
                                    <a href=" {{ route('category.edit',$items->id) }} " class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('category.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></a>
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
                <h3 class="box-title">Add Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

                <form action="{{ route('category.store') }}"  method="post" enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
                    id="steps-uid-2" novalidate="novalidate">

                @csrf
               
                <input type="hidden" name="status"  value="1"  >
                
                    <section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                        
                            
                    <div class="form-group">
                        <label for="wfirstName2"> Category Name English : <span class="danger">*</span> </label>
                        <input type="text" name="category_name_en"  class="form-control"  >
                       @error('category_name_en')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>
                
                        <div class="form-group">
                            <label for="wlastName2"> Category  Name Others : <span class="danger">*</span> </label>
                            <input type="text" name="category_name_others"   class="form-control"  >
                    
                            @error('category_name_others')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="wlastName2"> Category Icon : <span class="danger">*</span> </label>
                            <input type="text" name="category_icon"   class="form-control"  >
                    
                            @error('category_icon')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        
            
                        <div class="form-group">
                            <label for="wlastName2">Category Image One (190*184) : <span class="danger">*</span> </label>
                            <input type="file" name="category_image_one"     class="form-control"   >
                   
                            @error('category_image_one')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                    
                    </section>
                <hr>
                        <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add Category" >
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