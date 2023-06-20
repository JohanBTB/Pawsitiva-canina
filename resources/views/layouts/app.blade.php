<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    

</head>

    <body class="min-w-[35rem] bg-gris-50">
    
    <div id="LoadingScreen" class="fixed w-screen h-screen bg-marron-900 top-0 left-0 z-40">
        <img src="gifts\navigation\normal.gif" class=" m-auto my-16  w-[40%] "/>
        <p class="text-6xl font-extrabold text-center text-gris-100">Cargando<img src="gifts\navigation\bolas.gif" class="inline-block m-auto w-32 "/> </p>
    </div>

    <div id="contenido_completo" class="hidden" >
        @if(session('success'))
            <div class="notification z-30 top-0 -translate-y-full text-white font-bold text-xl h-10 flex items-center justify-center  duration-1000 w-screen bg-green-600 fixed">
                <p>{{session('success')}}</p>
            </div>
        @endif
        @if(session('error'))
            <div class="notification z-30 top-0 -translate-y-full text-white font-bold text-xl h-10 flex items-center justify-center  duration-1000 w-screen bg-red-600 fixed">
                <p>{{session('error')}}</p>
            </div>
        @endif
        
        @yield('navbar')
        
        @yield('content1')
        @yield('content2')
        @yield('content3')
        
        @yield('footer')
    
    </div>
    @vite('node_modules/flowbite/dist/flowbite.min.js')
    <script>
        document.addEventListener("DOMContentLoaded", function(){
        var espera = 1500 + Math.floor(Math.random()*1500);
        setTimeout(function(){
            var cargando = document.getElementById("LoadingScreen");
            var contenido = document.getElementById("contenido_completo");
            
            cargando.style.display="none";
            contenido.classList.remove("hidden");
        }, espera)
        var notifications = Array.from(document.getElementsByClassName("notification"));
        
        notifications.forEach(function(notification){
            
                setTimeout(function() {notification.classList.remove('-translate-y-full')}, 100);
                
                setTimeout(function() {notification.classList.add('-translate-y-full')}, espera + 3000);
            });
        });  
    </script>
    </body>
</html>