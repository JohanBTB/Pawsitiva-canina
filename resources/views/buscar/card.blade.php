<?php
?>

<div class="flex flex-col col-span-1 relative overflow-hidden rounded-lg shadow-lg  items-center py-10 text-marron-600" >
        <a href="/buscar?q={{ strtolower($tabla) }}-{{$dato['id'] }}" >
        <div class="w-full px-4 lg:order-2 flex justify-center">
            <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ $dato['foto']}}" alt="{{ $dato['nombre'] }}"/>
        </div>
        <div class="w-full px-4 lg:order-2 flex justify-center">
            <h5 class="mb-1 text-xl font-medium text-marron-800"> {{ $dato['nombre'] }}</h5>
        </div>
        </a> 
        <span class="text-sm text-gray-500 dark:text-gray-400">{{ isset($dato['telefono']) ? "+51 " .$dato['telefono']:""}}</span>
        <div class="flex  mt-4 space-x-3 md:mt-6">
            @if(isset($dato['adoptado_por']) )
                @if($dato['adoptado_por'])
                <p class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-marron-600 bg-gris-50 rounded-lg hover:bg-gris-100" >Ya ha sido adoptado &#10004; </p>
                @else
                <!-- <a href="/adoptar?perrito="{{$dato['id']}}" > -->
                <form method="GET" action="/adoptar">
                    <input type="hidden" name="id" value="{{$dato['id']}}"/> 
                    <input type="submit" value="Adoptar amiguito" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-marron-700 rounded-lg hover:bg-marron-800 focus:ring-4 focus:outline-none focus:ring-marron-300"/>
                </form>
                 @endif 
            @else
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-marron-700 rounded-lg hover:bg-marron-800 focus:ring-4 focus:outline-none focus:ring-marron-300 ">Agregar</a>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-gris-100 border border-gray-300 rounded-lg hover:bg-gris-300 focus:ring-4 focus:outline-none focus:ring-gray-200 ">Mensajear</a>
            @endif
        </div>
    </div>





