@extends('frontend.common.product_master')

@section('product_content')

<div class="body-content mt-5">
	<div class="container">
		<div class="sign-in-page">
			<div class="row text-center ">
            <div class="container">

        <div class="col-md-6 col-sm-12 mb-5" >
            <div style="margin-bottom:10px;">
            <spn class="text-justify">Thanks for signing up! Before getting started, could you verify your email address by 
                clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
            </span>
            </div>
<div style="margin-bottom:10px;" class="text-justify">

                @if (session('status') == 'verification-link-sent')

              <span class="text-danger">  A new verification link has been sent to the email address you provided during registration.</span>

                @endif
        </div>

         <div style="margin-bottom:10px;" >

<form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <button type="submit" class=" btn btn-success checkout-page-button">
                        {{ __('Resend Verification Code') }}
                    </button>

           
</div>
 </form>

</div>
      

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
        </div>
        </div>
        </div>
        </div>


        </div>



@endsection
