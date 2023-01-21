<!DOCTYPE html>
<html lang="en">

@php
        $header_section = App\Models\SiteSetting::find(1);
        $seo = App\Models\Seo::find(1);
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>
    @if(session()->get('language') == 'others')
        {{  $header_section->favicon_name_others  }} 
        @else
        {{  $header_section->favicon_name_en }}
        @endif
    </title>

    <meta name="description" content="{{ $seo->meta_description }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="author" content="{{ $seo->meta_author }}">
<meta name="keywords" content="{{ $seo->meta_keyword }}">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{asset($header_section->favicon)}}">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700'] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

         <!-- Bootstrap Core CSS -->
         <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap.min.css') }}">

    <link rel="preload" href="{{ asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2') }}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2') }}" as="font" type="font/woff2"
            crossorigin="anonymous">
    <link rel="preload" href="{{ asset('frontend/assets/fonts/wolmart87d5.ttf?png09e') }}" as="font" type="font/ttf" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Default CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.min.css') }}">
</head>

<body>
    <div class="page-wrapper">
        <!-- Start of Header -->
     

        @include('frontend.body.header')


        <!-- End of Header -->


        <!-- Start of Main -->
      
        @yield('blog_content')


        <!-- End of Main -->

        <!-- Start of Footer -->
       
        @include('frontend.body.footer')


      

        <!-- End of Footer -->
        
    </div>
    <!-- End of Page Wrapper -->

    <!-- Start of Sticky Footer -->

    @include('frontend.body.sticky_footer')

    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
    <!-- End of Scroll Top -->

    <!-- Start of Mobile Menu -->

 @include('frontend.body.mobile_menu')

    <!-- End of Mobile Menu -->

    <!-- Plugin JS File -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/isotope/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/SearchProduct.js') }}"></script>
    
    <script src="{{ asset('frontend/assets/js/main.min.js') }}"></script>

  
    <script>
        @if(Session::has('message'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('message') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('message') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('message') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('message') }}");
                  break;
          }
        @endif
     </script>





<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
// Start Product View with Modal 
function productView(id){
    // alert(id)
    $.ajax({
        type: 'GET',
        url: '/product/view/modal/'+id,
        dataType:'json',
        success:function(data){

            // console.log(data)
            $('#pname').text(data.product.product_name_en);
            $('#price').text(data.product.selling_price_en);
            $('#pcode').text(data.product.product_code_en);
            $('#pcategory').text(data.product.category.category_name_en);
            $('#pbrand').text(data.product.brand.brand_name_en);
            $('#pimage').attr('src','/'+data.product.product_thambnail_one);
            $('#product_id').val(id);
            $('#qty').val(1);
                    // Product Price 
                    if (data.product.discount_price_en == null) {
                     $('#pprice').text('');
                    $('#oldprice').text('');
                    $('#pprice').text(data.product.selling_price_en);
                }else{
                    $('#pprice').text(data.product.discount_price_en);
                    $('#oldprice').text(data.product.selling_price_en);
                } // end prodcut price 
                // Start Stock opiton
                if (data.product.product_qty_en > 0) {
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#aviable').text('aviable');
                }else{
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#stockout').text('stockout');
                } // end Stock Option 



            $('select[name="color"]').empty();        
            $.each(data.color,function(key,value){
                $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
            }) // end color

            $('select[name="size"]').empty();        
                $.each(data.size,function(key,value){
                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
                    if (data.size == "") {
                        $('#sizeArea').hide();
                    }else{
                        $('#sizeArea').show();
                    }
                }) // end size

        }
    })
 
}

// End Product View with Modal 







        // Start Add To Cart Product 
        function addToCart(){
                var product_name = $('#pname').text();
                var id = $('#product_id').val();
                var color = $('#color option:selected').text();
                var size = $('#size option:selected').text();
                var quantity = $('#qty').val();
                $.ajax({
                    type: "POST",
                    dataType: 'json',
                    data:{
                        color:color, size:size, quantity:quantity, product_name:product_name, 
                    },
                    url: "/cart/data/store/"+id,
                    success:function(data){
                        miniCart()
                        $('#closeModel').click();
                        // console.log(data)

                         // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
                    }
                })
            }



// End Add To Cart Product


</script>






        <script type="text/javascript">
            function miniCart(){
                $.ajax({
                    type: 'GET',
                    url: '/product/mini/cart',
                    dataType:'json',
                    success:function(response){
                        $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                        var miniCart = ""
                $.each(response.carts, function(key,value){
                    miniCart += `<div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a  class="product-name">
                                            ${value.name}
                                                </a>
                                            <div class="price-box">
                                                <span class="product-quantity">${value.qty}</span>
                                                <span class="product-price">${value.price}</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a >
                                                <img src="/${value.options.image}" alt="product" height="84" width="94">
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>`
        });
                
                $('#miniCart').html(miniCart);
            }
        })
     }
 miniCart();


  /// mini cart remove Start 
  function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            cart();
            miniCart();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }
 //  end mini cart remove 
       
                    
        </script>




<!--  /// Start Add Wishlist Page  //// -->

<script type="text/javascript">
    
    function addToWishList(product_id){
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "/add-to-wishlist/"+product_id,
        success:function(data){

             // Start Message 
             const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message
        }
    })
}
</script>





        <script type="text/javascript">
            function miniCart(){
                $.ajax({
                    type: 'GET',
                    url: '/product/mini/cart',
                    dataType:'json',
                    success:function(response){
                        $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                        var miniCart = ""
                $.each(response.carts, function(key,value){
                    miniCart += `<div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a  class="product-name">
                                            ${value.name}
                                                </a>
                                            <div class="price-box">
                                                <span class="product-quantity">${value.qty}</span>
                                                <span class="product-price">${value.price}</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a >
                                                <img src="/${value.options.image}" alt="product" height="84" width="94">
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                </div>`
        });
                
                $('#miniCart').html(miniCart);
            }
        })
     }
 miniCart();


  /// mini cart remove Start 
  function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
            miniCart();
             // Start Message 
                const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      icon: 'success',
                      showConfirmButton: false,
                      timer: 3000
                    })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message 
            }
        });
    }
 //  end mini cart remove 
       
                    
        </script>








<!--  //////////////// =========== End Coupon Remove================= ////  -->













<!--  //////////////// =========== End Coupon Apply Start ================= ////  -->







</body>




</html>