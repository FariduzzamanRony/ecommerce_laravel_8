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
				<h3 class="box-title">Product List <span class="badge badge-pill badge-danger"> {{ count($product) }} </span></h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
                                <th>Product Name English </th>
								<th>Product Name Others</th>
								<th>Product Image</th>
                                <th>Product Quantity</th>
								<th>Product Status</th>
                                <th>Action</th>
								
							</tr>
						</thead>
						<tbody>
                            
                            @foreach($product as $item)

							<tr>
                                <td>{{ $item->product_name_en }}</td>
                                <td>{{ $item->product_name_others }}</td>
                                <td><img src="{{ asset($item->product_thambnail_one) }}" style="height:40px;width:70px;"></td>
                                <td>{{ $item->product_qty_en }}</td>
								<td>
									@if($item->status == 1)
									<span class="badge badge-pill badge-success"> Active </span>
									@else
								<span class="badge badge-pill badge-danger"> InActive </span>
									@endif

								</td>
								
								<td style="width:24%">
                                    <a href="{{ route('product.edit',$item->id) }}" class="btn btn-info" title="Edit"><i class="fa fa-pencil"></i></a>
                                    <a href="{{ route('product.view',$item->id) }}" class="btn btn-success" title="View" ><i class="fa fa-eye"></i></a>
									<a href="{{ route('product.delete',$item->id) }}" class="btn btn-danger" id="delete" title="Delete" ><i class="fa fa-trash"></i></a>
									@if($item->status == 1)
									<a href="{{ route('product.inactive',$item->id) }}" class="btn btn-danger" title="Inactive Now"><i class="fa fa-arrow-down"></i> </a>
										@else
									<a href="{{ route('product.active',$item->id) }}" class="btn btn-success" title="Active Now"><i class="fa fa-arrow-up"></i> </a>
										@endif
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