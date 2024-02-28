@extends('shop')
   
@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th style="width:50%" class="text-center">Product</th>
            <th style="width:10%" class="text-center">Price</th>
            <th style="width:8%" class="text-center">Quantity</th>
            <th style="width:10%" class="text-center">Size</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:22%" class="text-center">Action</th>
        
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $shoes)
                @php $total += $shoes['price'] * $shoes['quantity'] @endphp
                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ asset('images')}}/{{ $shoes['image']  }}" class="card-img-top" style="width: 50px;"/></div>
                            <div class="col-sm-9" style="margin-top: 15px;">
                                <h4 class="nomargin">{{ $shoes['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price" class="text-center" style="font-weight: bold;">₱{{ $shoes['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $shoes['quantity'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Size">
                         <input type="number" value="6" class="form-control sizequantity cart_size" min="6" max="10" />
                    </td>
                    <td data-th="Subtotal" class="text-center" style="font-weight: bold;">₱{{ $shoes['price'] * $shoes['quantity'] }}</td>
                    <td class="actions text-center">
                        <a class="btn btn-danger delete-product"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="6" style="text-align: right;"><h3><strong>Total: ₱{{$total}} </strong></h3></td>
        </tr>
        <tr>
            <td colspan="6" class="text-right">
                <form action="/session" method="POST">
                <a href="{{ url('/home') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type='hidden' name="productname" id="productname" value="Sneakersphere Shoes">
                <input type='hidden' name="total" id="total" value="{{$total}}">
                @if($total <=0)
                <button @disabled(true) class="btn btn-danger"  id="checkout-live-button">Checkout</button>
                @else
                <button class="btn btn-danger"  id="checkout-live-button">Checkout</button>
                @endif
                </form>
            </td>
        </tr>
        
    </tfoot>
</table>
@endsection
   
@section('scripts')
<script type="text/javascript">

    $(".cart_update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("rowId"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".delete-product").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{route('deleteProduct')}}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
   
   
</script>
@endsection