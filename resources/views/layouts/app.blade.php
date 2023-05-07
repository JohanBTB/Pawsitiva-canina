<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

</head>
    <body class="min-w-[35rem] bg-gris-50">
    @yield('navbar')

    @yield('content1')
    
    @yield('content2')

    @yield('content3')
    @yield('footer')
    </body>
</html>