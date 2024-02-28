@extends('shop')

@section('content')
    
<div class="row">
    @foreach ($shoes as $shoe)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
               <img src="{{asset('images')}}/{{ $shoe->image}}" class="card-img-top">
            </div>
            <div class="card-body">
                <h2 class="card-title text-center" style="width: 300px;">{{$shoe->name}}</h2>
                <p class="card-text text-center" style="font-size:15px; width:300px">{{$shoe->description}}</p>
                <p class="card-text text-center"><strong>Price:</strong> ₱{{$shoe->price}}</p>
                <p class="btn-holder text-center"><a href="{{route('addtocart',$shoe->id)}}" class="btn btn-outline-danger">Add to cart</a></p>
            </div>
        </div>
    @endforeach
</div>

@endsection