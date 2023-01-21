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
			  
		
			<div class="col-12">

			 <div class="box">
				<div class="box-header with-border">
        <h3 class="box-title">Manage Product Show By Brand List <span class="badge badge-pill badge-danger"> {{ count($brand) }} </span></h3>
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
								<td><img src="{{ asset($items->brand_image) }}" style="height:40px;width:70px;"></td>
								<td width="20%">
                                   
                                    <a href="{{ route('brand.remove.show',$items->id) }}" class="btn btn-danger" id="delete" title="Remove" >Remove</a>
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
			<!-- /.col-12 -->


        
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