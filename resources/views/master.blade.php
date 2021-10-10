<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    

      
         {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}



         <style>
        .custom-login{
            height:500px;
            padding-top:100px;
        }
        .custom_product{
         background-color: #f1f1f1;
        }
        .slider_img{
          width:20%
        }
        .serarch_box{
          width:400px;
        }
    </style>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>
