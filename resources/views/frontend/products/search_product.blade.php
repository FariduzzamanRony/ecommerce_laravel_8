@if($products -> isEmpty())

<div class="container mt-5" style="width:100%">
    <div class="row d-flex justify-content-center " style="width:100%">
        <div class="col-md-12">
            <div class="card">

<h5 class="text-center text-danger mt-5">Product Not Found </h5>


</div>
    </div>
</div>
</div>


@else


<div class="container mt-5" style="width:100%">
    <div class="row d-flex justify-content-center " style="width:100%">
        <div class="col-md-12">
            <div class="card">


            @foreach($products as $item)
         <a href="{{ url('product/details',$item->id.'/'.$item->product_slug_en) }}">
                <div class="list border-bottom"> 
                     <img src="{{ asset($item->product_thambnail_one) }}" style="width: 30px; height: 30px;"> 

             <div class="d-flex flex-column ml-3" style="margin-left: 10px;"> <span>{{ Str::limit($item->product_name_en,25) }}
                  </span> 
                
                </div>
                <div class="product-price" style="margin-left:30px;">
                                        
                                        <ins class="new-price"> 
                                        <small>
                                        @if(session()->get('language') == 'others')
                                         ${{ $item->discount_price_others }}                                             
                                        @else
                                        ${{ $item->discount_price_en }}
                                        @endif
</small>
                                        
                                    </ins>
                                        <del class="old-price">
                                        <small>
                                        @if(session()->get('language') == 'others')
                                         ${{ $item->selling_price_others }}                                             
                                        @else
                                        ${{ $item->selling_price_en }}
                                        @endif
</small>
                                        
                                    </del>
                                        
                                                                                
                                        
                                    </div>
                 
                </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endif



<style>
	
body {
    background-color: #eee
}
.card {
    background-color: #fff;
    padding: 15px;
    border: none
}
.input-box {
    position: relative
}
.input-box i {
    position: absolute;
    right: 13px;
    top: 15px;
    color: #ced4da
}
.form-control {
    height: 50px;
    background-color: #eeeeee69
}
.form-control:focus {
    background-color: #eeeeee69;
    box-shadow: none;
    border-color: #eee
}
.list {
    padding-top: 20px;
    padding-bottom: 10px;
    display: flex;
    align-items: center
}
.border-bottom {
    border-bottom: 2px solid #eee
}
.list i {
    font-size: 19px;
    color: red
}
.list small {
    color: #dedddd
}
</style>

