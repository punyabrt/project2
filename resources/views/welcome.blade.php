<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
          @include('layouts/head')
         
    </head>
    <body style="font-family: 'Niramit', sans-serif;">
   
    @include('layouts/header')
                  
               @section('main-content')
                  @show
                                    




      @include('layouts/footer')   
</body>
</html>
