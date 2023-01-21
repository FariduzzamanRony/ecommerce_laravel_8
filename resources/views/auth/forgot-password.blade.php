@extends('frontend.common.product_master')

@section('product_content')




<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class="active">Forgot Password</li>
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
	<h4 class="">Forgot  password</h4>
	<p class="text-dark">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
	
    @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 text-success">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4 text-danger"   style="line-height:0px;" />


    <form method="POST" action="{{ route('password.email') }}"  class="register-form outer-top-xs" role="form">
            @csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
		    <input type="email" name="email" :value="old('email')"  class="form-control unicase-form-control text-input" id="email" required autofocus />
		</div>
	  
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button"> Email password reset link </button>
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