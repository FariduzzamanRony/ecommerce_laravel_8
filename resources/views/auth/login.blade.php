@extends('frontend.common.product_master')

@section('product_content')

       

        <!-- Start of Main -->
        <main class="main login-page">


            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a href="demo1.html">Home</a></li>
                        <li>My account</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->
            <div class="page-content">
                <div class="container">
                @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        
                    <div class="login-popup">
                        <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
                           
                            <ul class="nav nav-tabs text-uppercase" role="tablist">
                                <li class="nav-item">
                                    <a href="#sign-in" class="nav-link active">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sign-up" class="nav-link">Sign Up</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="sign-in">


                                <form method="POST" action="{{ route('login') }}">
            @csrf

            <span >
                        <x-jet-validation-errors class="mb-4 text-danger"   style="line-height:0px;" />
                        </span>
                                    <div class="form-group">
                                        <label>Email address *</label>
                                        <input type="email" id="email" class="form-control"  name="email" :value="old('email')" required autofocus >
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Password *</label>
                                        <input type="password" class="form-control" id="password"  name="password" required autocomplete="current-password">
                                    </div>
                                    <div class="form-checkbox d-flex align-items-center justify-content-between">
                                        <input type="checkbox" class="custom-checkbox" id="remember_me" name="remember" >
                                        <label for="remember_me">Remember me</label>
                                        <a href="{{ route('password.request') }}">Last your password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign In</button>

                                    </form>
                                </div>










                                <div class="tab-pane" id="sign-up">
                                <form method="POST" action="{{ route('register') }}">
            @csrf
                                <div class="form-group">
                                        <label for="name">  Full Name *</label>
                                        <input  id="name" class="form-control" type="text" name="name" :value="old('name')"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your email address *</label>
                                        <input  class="form-control"type="email" name="email" :value="old('email')" id="email" required>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="password">Password *</label>
                                        <input  class="form-control" type="password" name="password" id="password" required>
                                    </div>
                                  
                                    <div class="form-group mb-5">
                                        <label for="password_confirmation">Confirm Password *</label>
                                        <input  id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
                                    </div>

                                    <div class="form-checkbox d-flex align-items-center justify-content-between mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="remember" name="remember" required="">
                                        <label for="remember" class="font-size-md">I agree to the <a  href="#" class="text-primary font-size-md">privacy policy</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                                </form>
                            </div>
                            <p class="text-center">Sign in with social account</p>
                            <div class="social-icons social-icon-border-color d-flex justify-content-center">
                                <a href="#" class="social-icon social-facebook w-icon-facebook"></a>
                                <a href="#" class="social-icon social-twitter w-icon-twitter"></a>
                                <a href="#" class="social-icon social-google fab fa-google"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End of Main -->


        @endsection
