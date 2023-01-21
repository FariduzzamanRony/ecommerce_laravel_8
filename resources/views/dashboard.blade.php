@extends('frontend.common.product_master')

@section('product_content')


        <!-- Start of Main -->
  
        
<main class="main">
            <!-- Start of Page Header -->
            <div class="page-header">
                <div class="container">
                    <h1 class="page-title mb-0">My Account</h1>
                </div>
            </div>
            <!-- End of Page Header -->

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

            <!-- Start of PageContent -->
            <div class="page-content pt-2">
                <div class="container">
                    <div class="tab tab-vertical row gutter-lg">
                       

                    <ul class="nav nav-tabs mb-6" role="tablist">
                            <li class="nav-item">
                                <a href="#account-dashboard" class="nav-link active">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-orders" class="nav-link">Orders</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-downloads" class="nav-link">Downloads</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-addresses" class="nav-link">Return Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="#account-details" class="nav-link">Account details</a>
                            </li>
                            <li class="nav-item">
                                <a href="#user_photo" class="nav-link">photo Change</a>
                            </li>
                            <li class="nav-item">
                                <a href="#password-change" class="nav-link">Change password</a>
                            </li>
                            <!-- <li class="link-item">
                                <a href="{{route('wishlist')}}">Wishlist</a>
                            </li>
                            <li class="link-item">
                                <a href="login.html">Logout</a>
                            </li> -->
                        </ul>


                        <div class="tab-content mb-6">
                            <div class="tab-pane active in" id="account-dashboard">
                            

                           

                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-orders" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-orders">
                                                    <i class="w-icon-orders"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Orders</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-downloads" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-download">
                                                    <i class="w-icon-download"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Downloads</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-addresses" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-address">
                                                    <i class="w-icon-map-marker"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Return Order</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="#account-details" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-account">
                                                    <i class="w-icon-user"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Account Details</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="{{route('wishlist')}}" class="link-to-tab">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-wishlist">
                                                    <i class="w-icon-heart"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Wishlist</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-6 mb-4">
                                        <a href="{{route('user.logout')}}">
                                            <div class="icon-box text-center">
                                                <span class="icon-box-icon icon-logout">
                                                    <i class="w-icon-logout"></i>
                                                </span>
                                                <div class="icon-box-content">
                                                    <p class="text-uppercase mb-0">Logout</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane mb-4" id="account-orders">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-orders">
                                        <i class="w-icon-orders"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title text-capitalize ls-normal mb-0">Orders</h4>
                                    </div>
                                </div>

                                <div class="col-md-12">

<div class="table-responsive">
  <table class="table">
    <tbody>

      <tr style="background: #e2e2e2;">
        <td class="col-md-1">
          <label for=""> Date</label>
        </td>

        <td class="col-md-3">
          <label for=""> Total </label>
        </td>

        <td class="col-md-3">
          <label for=""> Payment</label>
        </td>


        <td class="col-md-2">
          <label for=""> Invoice </label>
        </td>

         <td class="col-md-2">
          <label for=""> Order </label>
        </td>

         <td class="col-md-1">
          <label for=""> Action </label>
        </td>


      </tr>


      @foreach($orders as $order)
<tr>

        <td class="col-md-3">
          <label for=""> {{ $order->order_date }}</label>
        </td>


         <td class="col-md-3">
          <label for=""> ${{ $order->amount }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->payment_method }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->invoice_no }}</ </label>
        </td>

         <td class="col-md-2">
          <label for=""> 
               @if($order->status == 'pending')        
              <span class="badge badge-pill badge-warning" style="background: #800080;"> Pending </span>
        @elseif($order->status == 'confirm')
             <span class="badge badge-pill badge-warning" style="background: #0000FF;"> Confirm </span>

          @elseif($order->status == 'processing')
             <span class="badge badge-pill badge-warning" style="background: #FFA500;"> Processing </span>

          @elseif($order->status == 'picked')
            <span class="badge badge-pill badge-warning" style="background: #808000;"> Picked </span>

          @elseif($order->status == 'shipped')
            <span class="badge badge-pill badge-warning" style="background: #808080;"> Shipped </span>

          @elseif($order->status == 'delivered')
            <span class="badge badge-pill badge-warning" style="background: #008000;"> Delivered </span>

            @elseif($order->return_order == 1)
            <span class="badge badge-pill badge-warning" style="background: #008000;"> Return Requested </span>

         @else
            <span class="badge badge-pill badge-warning" style="background: #FF0000;"> Cancel </span>

        @endif
    </label>
        </td>

  <td class="col-md-2">
          <label for="">

          <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-success btn-rounded " style="padding:10px;">View</a>
          </label>
        </td>

      </tr>
      @endforeach




    </tbody>

  </table>

</div>


</div> <!-- / end col md 12 -->

                                <!-- <a href="{{url('/')}}" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Shop<i class="w-icon-long-arrow-right"></i></a> -->
                            </div>

                            <div class="tab-pane" id="account-downloads">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-downloads mr-2">
                                        <i class="w-icon-download"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title ls-normal">Downloads</h4>
                                    </div>
                                </div>
                                <div class="col-md-12">

<div class="table-responsive">
  <table class="table">
    <tbody>

      <tr style="background: #e2e2e2;">
        <td class="col-md-1">
          <label for=""> Date</label>
        </td>

        <td class="col-md-3">
          <label for=""> Total </label>
        </td>

        <td class="col-md-3">
          <label for=""> Payment</label>
        </td>


        <td class="col-md-2">
          <label for=""> Invoice </label>
        </td>

         <td class="col-md-2">
          <label for=""> Order </label>
        </td>

         <td class="col-md-1">
          <label for=""> Action </label>
        </td>


      </tr>


      @foreach($orders as $order)
<tr>

        <td class="col-md-3">
          <label for=""> {{ $order->order_date }}</label>
        </td>


         <td class="col-md-3">
          <label for=""> ${{ $order->amount }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->payment_method }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->invoice_no }}</ </label>
        </td>

         <td class="col-md-2">
          <label for=""> 
               @if($order->status == 'pending')        
              <span class="badge badge-pill badge-warning" style="background: #800080;"> Pending </span>
        @elseif($order->status == 'confirm')
             <span class="badge badge-pill badge-warning" style="background: #0000FF;"> Confirm </span>

          @elseif($order->status == 'processing')
             <span class="badge badge-pill badge-warning" style="background: #FFA500;"> Processing </span>

          @elseif($order->status == 'picked')
            <span class="badge badge-pill badge-warning" style="background: #808000;"> Picked </span>

          @elseif($order->status == 'shipped')
            <span class="badge badge-pill badge-warning" style="background: #808080;"> Shipped </span>

          @elseif($order->status == 'delivered')
            <span class="badge badge-pill badge-warning" style="background: #008000;"> Delivered </span>

            @elseif($order->return_order == 1)
            <span class="badge badge-pill badge-warning" style="background: #008000;"> Return Requested </span>

         @else
            <span class="badge badge-pill badge-warning" style="background: #FF0000;"> Cancel </span>

        @endif
    </label>
        </td>

  <td class="col-md-2">
<a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-success btn-rounded" style="padding:10px;"><i class="fa fa-download" style="color: white;margin-right:5px;"></i>Invoice</a>
        </td>

      </tr>
      @endforeach




    </tbody>

  </table>

</div>


</div> <!-- / end col md 12 -->
                                <!-- <a href="{{url('/')}}" class="btn btn-dark btn-rounded btn-icon-right">Go
                                    Shop<i class="w-icon-long-arrow-right"></i></a> -->
                            </div>



                            <div class="tab-pane" id="account-addresses">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-map-marker">
                                        <i class="w-icon-map-marker"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Return Order</h4>
                                    </div>
                                </div>                                
                                <div class="col-md-12">

<div class="table-responsive">
  <table class="table">
    <tbody>

      <tr style="background: #e2e2e2;">
        <td class="col-md-1">
          <label for=""> Date</label>
        </td>

        <td class="col-md-3">
          <label for=""> Total </label>
        </td>

        <td class="col-md-3">
          <label for=""> Payment</label>
        </td>


        <td class="col-md-2">
          <label for=""> Invoice </label>
        </td>

         <td class="col-md-2">
          <label for=""> Order Reason </label>
        </td>

         <td class="col-md-1">
          <label for=""> Order Status </label>
        </td>


      </tr>


      @foreach($orders as $order)
<tr>

        <td class="col-md-3">
          <label for=""> {{ $order->order_date }}</label>
        </td>


         <td class="col-md-3">
          <label for=""> ${{ $order->amount }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->payment_method }} </label>
        </td>

        <td class="col-md-2">
          <label for="">{{ $order->invoice_no }} </label>
        </td>
        <td class="col-md-2">
          <label for=""> 
          {{ $order->return_reason }}</label>
        </td>

         <td class="col-md-2">
          <label for=""> 
          @if($order->return_order == 0) 
                  <span class="badge badge-pill badge-warning" style="background: #418DB9;"> No Return Request </span>
                  @elseif($order->return_order == 1)
                  <span class="badge badge-pill badge-warning" style="background: #800000;"> Pedding </span>
                  <span class="badge badge-pill badge-warning" style="background:red;">Return Requested </span>

                  @elseif($order->return_order == 2)
                    <span class="badge badge-pill badge-warning" style="background: #008000;">Success </span>
                    @endif
    </label>
        </td>


      </tr>
      @endforeach




    </tbody>

  </table>

</div>


</div> <!-- / end col md 12 -->
                            </div>

                            <div class="tab-pane" id="account-details">
                                <div class="icon-box icon-box-side icon-box-light">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Account Details</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" action="{{ route('user.profile.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        
                       
                                    <div class="row">
                                        
                                    <div class="form-group col-md-6">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        নাম :
                                        @else
                                        Name :
                                        @endif
                           <span>*</span></label>
                                        <input type="text" name="name" value="{{ $user->name }}"  class="form-control "  required  autofocus/>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        মোবাইল নম্বর :
                          @else
                          Mobile Number: 
                          @endif
                          <span>*</span></label>
                                        <input type="text" name="phone" value="{{ $user->phone }}" id="PhoneNumber"  class="form-control "  autofocus/>
                                   
                                        <div class="help-block">

                                            <span class="text-danger" id="message"></span>
                                                    
                                                </div>
                                   
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        ই-মেইল :
                          @else
                          E-mail  :
                          @endif
                          <span>*</span></label>
                                        <input type="email" name="email" value="{{ $user->email }}"  class="form-control "  required  autofocus/>
                                    </div>
                                      


                                    <div class="form-group col-md-6">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        ঠিকানা :
                          @else
                          Address :
                          @endif
                          <span>*</span></label>
                                        <input type="text" name="address" value="{{ $user->address }}"  class="form-control "  autofocus/>
                                    </div>


                                    <div class="form-group col-md-6 ">
                                        <label class="info-title form-group-float-label" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        লিঙ্গ :
                          @else
                          Gender : 
                          @endif
                         <span>*</span></label>
                                        @if(Auth::user()->gender == NULL)
                                        
                                        <select class="form-control" name="gender">
                                                        <option value="" selected="" disabled="">Please select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Others">Others</option>
                                        </select>
    @else
                                        <select class="form-control" name="gender">
                                                        <option value="{{ Auth::user()->gender }}" selected="" disabled="" >Please select</option>
                                                        <option value="Male" <?php if (Auth::user()->gender == 'Male' ) {
                     echo "selected"; } ?> >Male</option>
                                                        <option value="Female" <?php if (Auth::user()->gender == 'Female' ) {
                     echo "selected"; } ?> >Female</option>
                                                        <option value="Others" <?php if (Auth::user()->gender == 'Others' ) {
                     echo "selected"; } ?> >Others</option>
                                        </select>

                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                    @if(Auth::user()->birthday == NULL)

                                    
                                    <label class="info-title form-group-float-label" for="exampleInputEmail1">
                                    @if(session()->get('language') == 'others')
                                    জন্মদিন :
                          @else
                          Birthday :
                          @endif
                          <span>*</span></label>
                                        <div class="controls">
                                        <input type="date" name="birthday" class="form-control" max="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    @error('birthday') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>

                                    @else

                                    <label class="info-title form-group-float-label" for="exampleInputEmail1">
                                    @if(session()->get('language') == 'others')
                                    জন্মদিন :
                          @else
                          Birthday :
                          @endif
                          <span>*</span></label>
                                        <div class="controls">
                                        <input type="date" name="birthday" value="{{ Auth::user()->birthday }}" class="form-control" max="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                    @error('birthday') 
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror 
                                    </div>

                                    @endif
	</div> 


                                    </div>

                                  

                                   
                                  
                                   
                                    
                                    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                                </form>
                            </div>


                            <div class="tab-pane" id="user_photo">
                                <div class="icon-box icon-box-side icon-box-light" style="margin-bottom:10px;">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Photo Change</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" action="{{ route('user.photo.store') }}" method="post" enctype="multipart/form-data" >
        @csrf
        
                                
                    <input type="hidden" name="id" value="{{ $user->id }}"  class="form-control " />
                                            <input type="hidden" name="old_img"  value="{{ $user->profile_photo_path }}"  >
                                
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        ছবি:
                          @else
                          Photo :
                          @endif
                           <span>*</span></label>
                                        <input type="file" name="profile_photo_path"  class="form-control "  required />
                                    </div>

                                    


                            </div>

                                  

                                   
                                  
                                   
                                    
                                    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                                </form>
                            </div>


                            <div class="tab-pane" id="password-change">
                                <div class="icon-box icon-box-side icon-box-light" style="margin-bottom:20px;">
                                    <span class="icon-box-icon icon-account mr-2">
                                        <i class="w-icon-user"></i>
                                    </span>
                                    <div class="icon-box-content">
                                        <h4 class="icon-box-title mb-0 ls-normal">Change Password</h4>
                                    </div>
                                </div>
                                <form class="form account-details-form" action="{{ route('user.change.password.store') }}" method="post"  >
        @csrf
        
                       
                                    <div class="row">
                                        
                                    <div class="form-group col-md-8">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        বর্তমান পাসওয়ার্ড :
                          @else
                          Current Password :
                          @endif
                           <span>*</span></label>
                                        <input id="current_password" name="old_password" type="password" wire:model.defer="state.current_password"  class="form-control "  required />
                                    </div>


                                    
                                    <div class="form-group col-md-8">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        নতুন পাসওয়ার্ড :
                          @else
                          New Password:
                          @endif
                           <span>*</span></label>
                                        <input id="password" name="password" type="password" wire:model.defer="state.password" class="form-control "  required/>
                                    </div>
                                    
                                    <div class="form-group col-md-8">
                                        <label class="info-title" for="exampleInputEmail1">
                                        @if(session()->get('language') == 'others')
                                        পাসওয়ার্ড নিশ্চিত করুন :
                          @else
                          Confirm Password  :
                          @endif
                           <span>*</span></label>
                                        <input id="password_confirmation" name="password_confirmation" type="password" wire:model.defer="state.password_confirmation"  class="form-control "  required />
                                    </div>


                                    </div>

                                  

                                   
                                  
                                   
                                    
                                    <button type="submit" class="btn btn-dark btn-rounded btn-sm mb-4">Save Changes</button>
                                </form>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>

        <!-- End of Main -->

        @endsection