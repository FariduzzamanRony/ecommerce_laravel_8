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
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = '{{ asset('frontend/assets/js/webfont.js') }}';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
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

    <link href="{{ asset('frontend/loader/star_style.css') }}" type="text/css" rel="stylesheet" media="all" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/fontawesome-free/css/all.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/animate/animate.min.css') }}">
    


    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/photoswipe/photoswipe.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/photoswipe/default-skin/default-skin.min.css') }}">
 

		

    <!-- Default CSS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/style.min.css') }}">

   
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">


</head>

<body class="home">

    <div class="page-wrapper">

    
        
     <!-- Start of Header -->
     @include('frontend.body.header')

    <!-- End of Header -->

        <!-- Start of Main-->
       
        @yield('product_content')


        <!-- End of Main -->

        <!-- Start of Footer -->
       
        @include('frontend.body.footer')


      

        <!-- End of Footer -->
    </div>
    <!-- End of Page-wrapper-->

    <!-- Start of Sticky Footer -->

    @include('frontend.body.sticky_footer')




    <!-- End of Sticky Footer -->

    <!-- Start of Scroll Top -->
    <a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="fas fa-chevron-up"></i></a>
    <!-- End of Scroll Top -->

     <!-- Start of Mobile Menu -->


        @include('frontend.body.mobile_menu')


     <!-- End of Mobile Menu -->

    <!-- Start of Quick View -->
 

    

    <!-- End of Quick view -->

        <!-- {{ asset('frontend/') }} -->


    <!-- Plugin JS File -->
    <script src="{{ asset('frontend/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('frontend/assets/vendor/jquery.plugin/jquery.plugin.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/jquery.countdown/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/photoswipe/photoswipe.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/photoswipe/photoswipe-ui-default.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/sticky/sticky.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/vendor/skrollr/skrollr.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/SearchProduct.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend/assets/js/main.min.js') }}"></script>

  


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>





<!-- Add to Cart Product Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top:25px;margin-bottom:60px">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel"><span id="pname"></span> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

       <div class="row">

        <div class="col-md-4">

            <div class="card" style="width: 18rem;">
            <img src=" " class="card-img-top" alt="..." style="height: 200px; width: 200px;" id="pimage">

  

</div>

        </div><!-- // end col md -->


        <div class="col-md-4">

     <ul class="list-group">
     <li class="list-group-item">Product Price: <strong class="text-danger">$<span id="pprice"></span></strong>
        <del id="oldprice">$</del>
    </li>
        <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
        <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
        <li class="list-group-item">Brand: <strong id="pbrand"></strong></li>
        <li class="list-group-item">Stock: <span class="badge badge-pill badge-success" id="aviable" style="background: green; color: white;"></span> 
            <span class="badge badge-pill badge-danger" id="stockout" style="background: red; color: white;"></span> 
         </li>
    </ul>

        </div><!-- // end col md -->


        <div class="col-md-4">

            <div class="form-group">
            <label for="color">Choose Color</label>
             <select class="form-control" id="color" name="color">   

            </select>
  </div>

  <div class="form-group" id="sizeArea">
    <label for="size">Choose Size</label>
    <select class="form-control" id="size" name="size">
        
    </select>
  </div>  <!-- // end form group -->

  <div class="form-group">
  <label for="qty">Quantity</label>
    <input type="number" class="form-control" id="qty" value="1" min="1" >
  </div> <!-- // end form group -->
    <input type="hidden" id="product_id">
    <button type="submit" class="btn btn-primary mb-2" onclick="addToCart()" >Add to Cart</button>

        </div><!-- // end col md -->


       </div> <!-- // end row -->



      </div> <!-- // end modal Body -->

    </div>
  </div>
</div>




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





 <!--  /// End Add Wishlist Page  ////   -->


<!-- /// Load Wishlist Data  -->


<script type="text/javascript">
            function wishlist(){
                $.ajax({
                    type: 'GET',
                    url: '/user/get-wishlist-product',
                    dataType:'json',
                    success:function(response){
                        var rows = ""
                        $.each(response, function(key,value){
                            rows += `<tr>
                                <td class="product-thumbnail">
                                    <div class="p-relative">
                                        <a href="product-default.html">
                                            <figure>
                                                <img src="/${value.product.product_thambnail_one}" alt="product" width="300"
                                                    height="338">
                                            </figure>
                                        </a>
                                        <button type="submit" id="${value.id}" onclick="wishlistRemove(this.id)" class="btn btn-close"><i
                                                class="fas fa-times"></i></button>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <a href="product-default.html">
                                    ${value.product.product_name_en}
                                    </a>
                                </td>
                                <td class="product-price">
                                ${value.product.discount_price_en == null
                                    ? `<ins class="new-price">${value.product.selling_price_en} </ins>`
                                    :
                                    `<ins class="new-price">${value.product.discount_price_en} </ins>
                                    <del class="old-price">${value.product.selling_price_en}</del>`
                                }
                                    
                                </td>
                                <td class="product-stock-status">
                                    <span class="wishlist-in-stock">In Stock</span>
                                </td>
                                <td class="wishlist-action">
                                    <div class="d-lg-flex">
                                        <button type="button"
                                            class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">Quick
                                            View</button>
                                        <button type="button" data-toggle="modal" data-target="#exampleModal" id="${value.product.id}" onclick="productView(this.id)" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">Add to
                                            cart</button>
                                    </div>
                                </td>
                            </tr>`
                });
                        
                        $('#wishlist').html(rows);
                    }
                })
            }
        wishlist();



 ///  Wishlist remove Start 
 function wishlistRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/wishlist-remove/'+id,
            dataType:'json',
            success:function(data){
            wishlist();
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
        });
    }
 // End Wishlist remove   













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
            couponCalculation();
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








<!-- /// Load My Cart /// -->

<script type="text/javascript">
     function cart(){
        $.ajax({
            type: 'GET',
            url: '/user/get-cart-product',
            dataType:'json',
            success:function(response){
    var rows = ""
    $.each(response.carts, function(key,value){
        rows += `<tr>
                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                                <a href="product-default.html">
                                                    <figure>
                                                        <img src="/${value.options.image}" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                                </a>
                                                <button type="submit" class="btn btn-close" id="${value.rowId}" onclick="cartRemove(this.id)"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="">
                                            ${value.name}
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount">$${value.price}</span></td>
                                        <td class="product-quantity">
                                        ${value.qty > 1
            ? `<button type="submit" class="btn btn-danger btn-sm" id="${value.rowId}" onclick="cartDecrement(this.id)"  style="padding-top:5px;padding-bottom:5px;padding-left:12px;padding-right:12px;">-</button> `
            : `<button type="submit" class="btn btn-danger btn-sm" disabled  style="padding-top:5px;padding-bottom:5px;padding-left:12px;padding-right:12px;" >-</button> `
            }      
           <input type="text" value="${value.qty}" min="1" max="100" disabled="" style="width:25px;" >      
           <button type="submit" class="btn btn-success btn-sm" id="${value.rowId}" onclick="cartIncrement(this.id)" style="padding-top:5px;padding-bottom:5px;padding-left:12px;padding-right:12px;">+</button> 
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount">$${value.subtotal}</span>
                                        </td>
                                    </tr>`
        });
                
                $('#cartPage').html(rows);
            }
        })
     }
 cart();

    ///  Cart remove Start 
    function cartRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
            couponCalculation();
            cart();
            miniCart();
            $('#couponField').show();
            $('#coupon_name').val('');
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
        });
    }
 // End Cart remove  



// -------- CART INCREMENT --------//
function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
 // ---------- END CART INCREMENT -----///


 // -------- CART Decrement  --------//
 function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
 // ---------- END CART Decrement -----///








 /// <!-- End Load Wisch list Data  -->
 </script>  

<!-- //End Load My cart / -->




<!--  //////////////// =========== Coupon Apply Start ================= ////  -->
<script type="text/javascript">
  function applyCoupon(){
    var coupon_name = $('#coupon_name').val();
    
    $.ajax({
        type: 'POST',
        dataType: 'json',
        data: {coupon_name:coupon_name},
        url: "{{ url('/coupon-apply') }}",
        success:function(data){
            couponCalculation();
               if (data.validity == true) {
                $('#couponField').hide();
               }

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




  function couponCalculation(){
    $.ajax({
        type: 'GET',
        url: "{{ url('/coupon-calculation') }}",
        dataType: 'json',
        success:function(data){

  if (data.total) {
                $('#couponCalField').html(
                    `<div class="cart-summary mb-4" >
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>$ ${data.total}</span>
                                    </div>

                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Total</label>
                                        <span>$ ${data.total}</span>
                                    </div>

                                    <hr class="divider">

                                
                                    </div>`
            )
            }else{
                 $('#couponCalField').html(
                    `<div class="cart-summary mb-4" >
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Subtotal</label>
                                        <span>$ ${data.subtotal}</span>
                                        
                                    </div>

                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Coupon</label>
                                        <span>$ ${data.coupon_name}</span>
                                        <button type="submit" onclick="couponRemove()"><i class="fa fa-times"></i>  </button>
                                    </div>

                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Discount Amount</label>
                                        <span>$ ${data.discount_amount}</span>
                                    </div>

                                    <div class="cart-subtotal d-flex align-items-center justify-content-between">
                                        <label class="ls-25">Total</label>
                                        <span>$ ${data.total_amount}</span>
                                    </div>

                                    <hr class="divider">

                                
                                    </div>`
            )
            }
        }
    });
  }
 couponCalculation();




</script>









<!--  //////////////// =========== Start Coupon Remove================= ////  -->

<script type="text/javascript">
     
     function couponRemove(){
        $.ajax({
            type:'GET',
            url: "{{ url('/coupon-remove') }}",
            dataType: 'json',
            success:function(data){
                couponCalculation();
                $('#couponField').show();
                $('#coupon_name').val('');
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
  //////////////// =========== End Coupon Apply Start ================= ////  -->
            }
        });
     }
</script>


<!--  //////////////// =========== End Coupon Remove================= ////  -->













<!--  //////////////// =========== End Coupon Apply Start ================= ////  -->












</body>



</html>