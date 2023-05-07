<section class="relative isolate px-6 mt-96  md:mt-40 xl:mt-12 sm:mb-12 mb-24 bg-gris-50 relative isolate text-marron-500">
    <div class="relative mx-auto max-w-4xl  py-12 md:py-24 xl:py-32  max-w-screen-md">
        <form class=" sm:mb-24 mb-32">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gris-500 sr-only ">Buscar</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 dark:text-gris-400 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gris-900 border border-marron-600 rounded-lg bg-gray-50 focus:ring-marron-800 focus:border-marron-300 " placeholder="Usuarios, perritos, albergues ..." required>
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-marron-700 hover:bg-marron-800 focus:ring-4 focus:outline-none focus:ring-marron-300 font-medium rounded-lg text-sm px-4 py-2">Buscar</button>
            </div>
        </form>
        <img src ="images/buscar/body.png" alt="body1" class="absolute bottom-0 right-[25%]  w-1/2"/>
    </div>
    
    
    <?php

    
        
  
    ?>


    
    @include('buscar.list', ['tabla'=>'Perritos', 'datos'=> $perritos] )
    
    @include('buscar.list', ['tabla'=>'Albergues', 'datos'=> $albergues])

    @include('buscar.list', ['tabla'=>'Usuarios', 'datos'=> $usuarios])




</section>    
