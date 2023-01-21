
@extends('frontend.common.product_master')

@section('product_content')


<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="">Home</a></li>
				<li class="active">Reset  Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div>

       

<div class="body-content" style="margin-bottom:20px">
	<div class="container">
	
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Reset  Password</h4>
	<p class=""></p>


    <x-jet-validation-errors class="mb-4 text-danger"   style="line-height:0px;" />

    <form method="POST" action="{{ route('password.update') }}"  class="register-form outer-top-xs" role="form">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email"  name="email" :value="old('email', $request->email)"  class="form-control unicase-form-control text-input" id="email" required autofocus />
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">New Password<span>*</span></label>
		    <input type="password" name="password"  class="form-control unicase-form-control text-input" id="password" required autofocus />
		</div>

        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Confirm Password<span>*</span></label>
		    <input  type="password" name="password_confirmation"   class="form-control unicase-form-control text-input" id="password_confirmation" required autofocus />
		</div>
	  
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Change Password</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
  
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>












@endsection