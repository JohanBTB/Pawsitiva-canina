

<div class="bg-white mx-12 sm:mx-24 md:mx-48 ">
    <div class="py-24  sm:py-32">
        <div class="px-6 px-4 sm:px-12 lg:px-24 xl:px-32 m-auto">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-6xl font-bold tracking-tight text-mylightblue-900 sm:text-4xl">{{$tabla}}</h2>
            </div>
            <div class="mx-auto min-w-80 mt-10 max-w-2xl gap-y-16 gap-x-8 border-t 
                    border-marron-600 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none ">
                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2  xl:grid-cols-3 mx-auto">
                @php
                    $datos = $datos->toArray();
                @endphp
                @foreach($datos as $dato) 
                    @include('buscar.card', ['dato' =>$dato, 'tabla'=>$tabla])
                @endforeach


                </div>
            </div>               
        </div>
    </div>
 </div>