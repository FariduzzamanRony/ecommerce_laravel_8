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
			  
		
			<div class="col-sm-12 col-md-12">

			 <div class="box">
				<div class="box-header with-border">
        <h3 class="box-title">Menu Add List <span class="badge badge-pill badge-danger"> {{ count($menu) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Category  Icon</th>
								<th>Menu Name English</th>
								<th>Menu Name Others</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($menu as $items)
							<tr>
                                <td><span>  <i class="{{ $items->category_icon }}"></i> </sapn></td>
								                <td>{{ $items->category_name_en }}</td>
                                <td>{{ $items->category_name_others }}</td>
								
								<td width="25%">
                                    <a href="{{ route('menu.edit',$items->id) }}" class="btn btn-info" title="add menu"> Add Menu</a>
                                   
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