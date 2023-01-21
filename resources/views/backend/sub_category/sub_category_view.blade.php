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
        <h3 class="box-title">SubCategory List <span class="badge badge-pill badge-danger"> {{ count($subcategory) }} </span> </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Category Name</th>
                                <th>Sub Category Name English</th>
								                <th>Sub Category Name Others</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($subcategory as $items)
							<tr>
                               <td>{{ $items['Re_Category']['category_name_en'] }}</td>
								                <td>{{ $items->subcategory_name_en }}</td>
                                <td>{{ $items->subcategory_name_others }}</td>
							                	<td style="width:20%;">
                                    <a href=" {{ route('subcategory.edit',$items->id) }} " class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('subcategory.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></
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
                <h3 class="box-title">Add SubCategory</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

                <form action="{{ route('subcategory.store') }}"  method="post" class="validation-wizard wizard-circle wizard clearfix" role="application" 
                    id="steps-uid-2" novalidate="novalidate">

                @csrf
               

                    <section id="steps-uid-2-p-0" role="tabpanel" aria-labelledby="steps-uid-2-h-0" class="body current" aria-hidden="false">
                        
                    <div class="form-group">
                             <label for="wlastName2">Select Category  Name : <span class="danger">*</span> </label>
								<div class="controls">
									<select name="Category_id" class="form-control" aria-invalid="false">
										<option value="" selected="" disabled="">Select Your Category</option>
                                    @foreach($category as $cat)
										<option value="{{ $cat->id }}">{{ $cat->category_name_en }}</option>
                                    @endforeach
									</select>
								<div class="help-block">
                                @error('Category_id')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                                </div></div>
							</div>  
                    <div class="form-group">
                        <label for="wfirstName2">Sub Category Name English : <span class="danger">*</span> </label>
                        <input type="text" name="subcategory_name_en"  class="form-control"  >
                       @error('subcategory_name_en')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>
                
                        <div class="form-group">
                            <label for="wlastName2">Sub Category  Name Others : <span class="danger">*</span> </label>
                            <input type="text" name="subcategory_name_others"   class="form-control"  >
                    
                            @error('subcategory_name_others')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                    </section>
                <hr>
                <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add SubCategory" >
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