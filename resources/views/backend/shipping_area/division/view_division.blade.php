@extends('admin.admin_master')

@section('admin')
@php
$adminData = DB::table('admins')->find(1);
@endphp


  <!-- Content Wrapper. Contains page content -->

	  <div class="container-full">
		<!-- Content Header (Page header) -->


		<!-- Main content -->
		<section class="content">
		  <div class="row">



			<div class="col-sm-12 col-md-8">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Division List</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">
					  <table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Division Name English</th>
                                <th>Division Name Others</th>  
								<th>Action</th>

							</tr>
						</thead>
						<tbody>
	 @foreach($divisions as $item)
	 <tr>
		<td> {{ $item->division_name_en }}  </td> 
        <td> {{ $item->division_name_others }}  </td>

		<td width="30%">
        <a href="{{ route('division.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
        <a href="{{ route('division.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
 	<i class="fa fa-trash"></i></a>
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


			</div>
			<!-- /.col -->


<!--   ------------ Add Division Page -------- -->


          <div class="col-sm-12 col-md-4">

			 <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Add Division </h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div class="table-responsive">


 <form method="post" action="{{ route('division.store') }}" >
	 	@csrf


	 <div class="form-group">
		<h5>Division Name English <span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name_en" class="form-control" > 
	 @error('division_name_en') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>

    <div class="form-group">
		<h5>Division Name  Others<span class="text-danger">*</span></h5>
		<div class="controls">
	 <input type="text"  name="division_name_others" class="form-control" > 
	 @error('division_name_others') 
	 <span class="text-danger">{{ $message }}</span>
	 @enderror 
	</div>
	</div>



			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">					 
						</div>
					</form>





					</div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box --> 
			</div>




		  </div>
		  <!-- /.row -->
		</section>
		<!-- /.content -->

	  </div>




@endsection 