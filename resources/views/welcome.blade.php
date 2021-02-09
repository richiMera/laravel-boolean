<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
       <div class="container">
           <div class="cars_container">
               
                    @foreach ($cars as $item)
                    <div class="car">
                        <a href="{{route('product', ['id'=>'product'])}}">{{$item->car_model}}</a>
                    </div>
                    @endforeach
               
           </div>
       </div>
    </body>
</html>
