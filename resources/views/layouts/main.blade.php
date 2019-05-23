<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DLHL  @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{ URL::asset('../css/main.css') }}">

        <!-- Styles -->
    </head>


<body>
        <div class="flex-center position-ref full-height">
            @yield('content')
        </div>

</body>
