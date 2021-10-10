@extends('master')
@section('content')
  <div class="custom_product">
        
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner text-center">
            @foreach ($products as $item )
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                <img src="{{$item['gallery']}}" class="slider_img" alt="...">
                <h1>{{$item['name']}}</h1>
                <h3>{{$item['price']}}</h3>
                <p>{{$item['des']}}</p>
                </div>
            @endforeach
                
           
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
        <div class="tendding-warpper container">
            <h3> Tendding Product</h3>
            <div class="row">
            @foreach ($products as $item )
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
  </div>
  
@endsection