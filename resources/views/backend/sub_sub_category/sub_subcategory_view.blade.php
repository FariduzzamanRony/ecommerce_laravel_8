@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	  <div class="container-full">
		<!-- Content Header (Page header) -->
		

		<!-- Main content -->
		<section class="content">
		  <div class="row">
			  
		
			<div class="col-sm-12 col-md-8">

			 <div class="box">
				<div class="box-header with-border">
                <h3 class="box-title">Sub->SubCategory List <span class="badge badge-pill badge-danger"> {{ count($sub_subcategory) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Category Name</th>
                                <th>Sub Category Name </th>
								<th>Sub SubCategory Name English</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($sub_subcategory as $items)
							<tr>
                                <td>{{ $items['Re_Category']['category_name_en'] }}</td>
                                <td>{{ $items['Re_SubCategory']['subcategory_name_en'] }}</td>
                                <td>{{ $items->sub_subcategory_name_en }}</td>
							                	<td style="width:20%">
                                    <a href=" {{ route('sub_subcategory.edit',$items->id) }} " class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('sub_subcategory.delete',$items->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></
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
                <h3 class="box-title">Add Sub SubCategory</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    

                <form action="{{ route('sub_subcategory.store') }}"  method="post" enctype="multipart/form-data" class="validation-wizard wizard-circle wizard clearfix" role="application" 
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
                                </div>
                                </div>
							</div> 


                            <div class="form-group">
                             <label for="wlastName2">Select Sub Category  Name : <span class="danger">*</span> </label>
								<div class="controls">
									<select name="subcategory_id" class="form-control" aria-invalid="false">
										<option value="" selected="" disabled="">Select Your Sub Category</option>
                                   
									</select>
								<div class="help-block">
                                @error('subcategory_id')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                                </div>
                                </div>
							</div> 


                    <div class="form-group">
                        <label for="wfirstName2">Sub SubCategory Name English : <span class="danger">*</span> </label>
                        <input type="text" name="sub_subcategory_name_en"  class="form-control"  >
                       @error('sub_subcategory_name_en')
                            <span class="text-danger">{{ $message }} </span>
                       @enderror
                    
                    </div>

                
                        <div class="form-group">
                            <label for="wlastName2">Sub SubCategory  Name Others : <span class="danger">*</span> </label>
                            <input type="text" name="sub_subcategory_name_others"   class="form-control"  >
                    
                            @error('sub_subcategory_name_others')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="wlastName2">Sub SubCategory Image (1920*300) : <span class="danger">*</span> </label>
                            <input type="file" name="sub_subcategory_image"     class="form-control"   >
                   
                            @error('sub_subcategory_image')
                            <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>

                      

                    </section>
                <hr>
                <div class="form-group"> 
                            <input type="submit"    class="btn btn-primary mt-5 mb-5" value="Add Sub SubCategory" >
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
 



<script type="text/javascript">
      $(document).ready(function() {
        $('select[name="Category_id"]').on('change', function(){
            var Category_id = $(this).val();
            if(Category_id) {
                $.ajax({
                    url: "{{  url('/admin/categories/subcategory/ajax') }}/"+Category_id,
                    type:"GET",
                    dataType:"json",
                    success:function(data) {
                       var d =$('select[name="subcategory_id"]').empty();
                          $.each(data, function(key, value){
                              $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                          });
                    },
                });
            } else {
                alert('danger');
            }
        });
    });
    </script>

      

@endsection