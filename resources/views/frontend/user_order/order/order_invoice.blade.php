<!doctype html>
<html lang="en">
  <head>
      
      @php
        $setting = App\Models\SiteSetting::find(1);
      
        @endphp

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Invoice</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
    .font{
      font-size: 15px;
    }
    .authority {
        /*text-align: center;*/
        float: right
    }
    .authority h5 {
        margin-top: -10px;
        color: green;
        /*text-align: center;*/
        margin-left: 35px;
    }
    .thanks p {
        color: green;;
        font-size: 16px;
        font-weight: normal;
        font-family: serif;
        margin-top: 20px;
    }
</style>

</head>
<body>

  <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
    <tr>
        <td valign="top">
           {{-- <img src="{{asset($setting->header_logo)}}" alt="" style="width:150px;height:auto;"/> --}} 
          <!--<h2 style="color: green; font-size: 26px;"><strong>EasyShop</strong></h2>-->
        </td>
        <td align="right">
            <pre class="font" >
               Electrocapture Head Office
               Email:noreply@electrocapture.com <br>
               Mob: {{  $setting->phone_one_en }}  <br>
               Mob: {{  $setting->phone_two_en }}  <br>
               {{  $setting->company_address_en }} <br>

            </pre>
        </td>
    </tr>

  </table>


  <table width="100%" style="background:white; padding:2px;margin-top:2px;"></table>
  <table width="100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
    <tr>
        <td>
          <p class="font" style="margin-left: 20px;">
          <strong>Name:{{ $order->user->name }}</strong> <br>
           <strong>Email:{{ $order->user->email }}</strong>  <br>
           <strong>Phone:{{ $order->user->phone }}</strong>  <br>        
           <strong>Address:{{ $order->user->address }}</strong>  <br>
         </p>
        </td>
        <td>
          <p class="font">
          <h3><span style="color: green;">Invoice:{{ $order->invoice_no }}</span> </h3>
            </span>
         </p>
        </td>
    </tr>
  </table>





  <table style="width:100%">
  <tr>
    <th align="left">Billing Address</th>
    <th align="left">Shipping Address</th>

  </tr>
  <tr>
    <td>Name :{{ $order->shipping_name_one }}</td>

    @if(  $order->shipping_name_two == NULL )
    <td> Name :{{ $order->shipping_name_one }} </td>
    @else
    <td>Name : {{ $order->shipping_name_two }} </td>
    @endif
    
  </tr>
  <tr>
    <td>Phone :{{ $order->shipping_phone_one }}</td>
    @if(  $order->shipping_phone_two == NULL )
    <td> Phone :{{ $order->shipping_phone_one }} </td>
    @else
    <td>Phone : {{ $order->shipping_phone_two }}</td>
    @endif
 
  </tr>
  <tr>
    <td>Email : {{ $order->shipping_email_one }}</td>
    @if(  $order->shipping_email_two == NULL )
    <td> Email : {{ $order->shipping_email_one }} </td>
    @else
    <td> Email  : {{ $order->shipping_email_two }}</td>
    @endif
    
  </tr>
  <tr>
    <td>Address : {{ $order->village_one }}, {{ $order->state->state_name_en }}, {{ $order->district->district_name_en }}, {{ $order->division->division_name_en }}</td>
   
   
    <td>Address :  @if(  $order->village_two == NULL )
                      {{ $order->village_one }} ,
                    @else
                   {{ $order->village_two }}, 
                    @endif 

                    @if(  $order->state_two == NULL )
                      {{ $order->state->state_name_en }} , 
                    @else
                     {{ $order->state_two }},
                    @endif

                    @if(  $order->district_two == NULL )
                    {{ $order->district->district_name_en }} ,
                  @else
                  {{ $order->district_two }},
                  @endif

                  @if(  $order->division_two == NULL )
                 {{ $order->division->division_name_en }} 
                @else
               {{ $order->division_two }} 
                @endif



 
  </tr>

  <tr>
    <td>Post Code : {{ $order->post_code_one }}</td>
    @if(  $order->post_code_two == NULL )
    <td> Post Code : {{ $order->post_code_one }} </td>
    @else
    <td>Post Code : {{ $order->post_code_two }}</td>
    @endif

  </tr>

</table>







  
  <br/>
<h3>Products</h3>
  <table width="100%">
    <thead style="background-color: green; color:#FFFFFF;">
      <tr class="font">
        <th>Image</th>
        <th>Product Name</th>
        <th>Size</th>
        <th>Color</th>
        <th>Code</th>
        <th>Quantity</th>
        <th>Unit Price </th>
        <th>Total </th>
      </tr>
    </thead>
    <tbody>
     

    @foreach($orderItem as $item)

      <tr class="font" >
        <td align="center">
             <img src="{{ public_path($item->product->product_thambnail_one)  }}" height="60px;" width="60px;" alt="">
        </td>
        <td align="center"> {{ $item->product->product_name_en }}</td>
        <td align="center">
        @if($item->size == NULL)
           ----
          @else
            {{ $item->size }}
          @endif 
        </td>
        
        <td align="center">{{ $item->color }}</td>
        <td align="center">{{ $item->product->product_code_en }}</td>
        <td align="center">{{ $item->qty }}</td>
        <td align="center">${{ $item->price }}</td>
        <td align="center">${{ $item->price * $item->qty }} </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
  <br>
  <table width="100%" style=" padding:0 10px 0 10px;">
    <tr>
        <td align="right" >
        <h2><span style="color: green;">Subtotal:</span>${{ $order->amount }}</h2>
            <h2><span style="color: green;">Total:</span> ${{ $order->amount }}</h2>
            {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
        </td>
    </tr>
  </table>
  <div class="thanks mt-3">
    <p>Thanks For Buying Products..!!</p>
  </div>
  <div class="authority float-right mt-5">
      <p>-----------------------------------</p>
      <h5>Authority Signature:</h5>
    </div>
</body>
</html> 