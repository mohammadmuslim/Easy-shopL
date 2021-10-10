@extends('master')
@section('content')
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{$details['gallery']}}" style="width:100%;" alt="...">
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card text-center">
                    <div class="card-header">
                        {{$details['category']}}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$details['name']}}</h5>
                        <p class="card-text">{{$details['des']}}</p>
                        <h5 class="card-title">tk:BDT{{$details['price']}}</h5>
                        <form action="/add_to_card" method="post">
                        @csrf
                        <input type="hidden" value="{{$details['id']}}" name="product_id">
                             <button>Add To Card</button>
                        </form>
                        <br>
                        <a href="#" class="btn btn-success">Buy Now</a>
                    </div>
                    <div class="card-footer text-muted">
                       <button onclick="goBack()">Go Back</button>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
<script>
function goBack() {
  window.history.back();
}
</script>
@endsection