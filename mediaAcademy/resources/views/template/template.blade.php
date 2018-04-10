<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <!-- Styles -->

    </head>
    <body>
        <div class="container">
          <div class="row">

            <div class="col-12">
                 @include('template.navbar')
            </div>



          </div>
          <div class="row">
            <div class="col-12">
              @include('template.banner')


            </div>
          </div>

          <div class="row">

            <div class="col-12">

              @yield('content')
            </div>

          </div>
        </div>
    

<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    </body>
</html>
