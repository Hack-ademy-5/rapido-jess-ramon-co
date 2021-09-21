<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> -->

        <!-- 19sept quiero llamar a lo icons de bootstrap  / Jess / al final del body esta el sript de JS>>> NO FUNCIONO
        <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css"> -->

        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <!-- el link Lavavel MIX | primero copila resouce >sass > app.scss  llama a public > css > app.css (y ya renderiza nuestra página)-->

    <title>rapidoEs · @yield('title')</title>
</head>

<body>

    @if(session('access.denied.revisor.only'))
        <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
    @endif

    <!-- Barra de navegación -->
    @include('layouts._nav')

    <!-- distribuiremos los <div> de los últimos 6 anuncios  |  <section> <article> 1 </article> </section>  | -->
    <div class="container"></div>
    @yield('content')
    </div>

    <!-- llamada a la barra de footer -->
    @include('layouts._footer')



    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script> -->
   <script src="{{mix('js/app.js')}}"></script>

     <!-- 19sept quiero llamar a lo icons de bootstrap  Jess // >>> No Funciono
     <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"> </script> -->
</body>

</html>
