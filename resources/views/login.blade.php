@extends('master')
@section('content')
    <div class="container col-sm-4 custom-login">
        <form action="/login" method="Post">
           <div class="form-group">
            @csrf
             <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
           </div>
        </form>
    </div>

    
@endsection