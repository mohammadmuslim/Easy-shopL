@extends('master')
@section('content')
  <div class="custom_product">
        
    
        <div class="tendding-warpper container">
            <h3> Tendding Product</h3><button class="btn btn success" onclick="goBack()">Go Back</button>
            <div class="row">
            @foreach ($objects as $item )
                <div class="card col-sm-4">
                    <img src="{{$item['gallery']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$item['name']}}</h5>
                        <p class="card-text">{{$item['des']}}</p>
                        <a href="detail/{{$item['id']}}" class="btn btn-primary">Adbout More</a>
                    </div>
                    </div>
             @endforeach
        </div>
    </div>
 
  <script>
function goBack() {
  window.history.back();
}
</script>
@endsection