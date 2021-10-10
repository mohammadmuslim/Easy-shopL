@extends('master')
@section('content')
    <div class="container">
        <h1>Cart list Product</h1>
        <div class="card-footer text-muted">
            <a class="btn btn-success" href="/order">Order Now</a>
            <button onclick="goBack()">Go Back</button>
        </div>
        @foreach ($products as $item )
        <div class="row">
            <div class="col-sm-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="{{$item->gallery}}" style="width:100%;" alt="...">
                        </div>
                    </div>
            </div>
            <div class="col-sm-6">
                    <div class="card text-center" style="margin-top: 50px;">
                        <div class="card-header">
                            {{$item->category}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$item->name}}</h5>
                            <h5 class="card-title">tk:BDT{{$item->price}}</h5>
                            <br>
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-success">Remove to Cart</a>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </div>

<script>
function goBack() {
  window.history.back();
}
</script>
@endsection