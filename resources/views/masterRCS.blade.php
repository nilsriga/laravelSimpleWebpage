<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Basic slider --}}
    <link type="text/css" rel="Stylesheet" href="css\private\galaDarbsRCS.css" />

    {{-- jQuerry ui --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    {{-- Fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
   
    {{-- bootstrap --}}
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
   
    {{-- materialize --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   
    {{-- Icons --}}
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    {{csrf_field()}}
    <title>@yield('title', 'RCS Mājaslapa')</title>
</head>

<body>

    @include('galaDarbsRCS/navBar')

    @yield('content')

    @include('galaDarbsRCS/footer')

</body>

{{-- jQuery --}}
<script src="js/public/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

{{-- jQuerryUI Plugins --}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

{{-- Fancybox --}}
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

{{-- Vue --}}
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

{{-- Bootstrap --}}
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

{{-- Materialize --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>



{{-- Private jSs  --}}
<script src="js/private/galaDarbsRCS.js"></script>
    

@yield('clickerScript')

@yield('calculatorScript')

@yield('messagesScript')

</html>
