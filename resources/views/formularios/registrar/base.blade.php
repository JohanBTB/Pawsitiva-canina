
<section class="relative m-auto isolate px-6 mt-96  md:mt-40 xl:mt-12 bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Registrar</h2>
        <p class="mb-8 lg:mb-16 font-semibold text-center text-gray-500 dark:text-marron-600 sm:text-xl">¿Registrara usuario, perrito o albergue?</p>
        <form action="/registrar" method="GET">
            <div class="w-[50%] mx-auto mt-6 space-y-6">
                @php
                if(!(Auth::guard('usuario')->check()??Auth::guard('albergue')->check())){
                    echo '<div class="flex items-center gap-x-3">
                            <input id="Usuario" name="registro" value="usuario" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                            <label for="usuario" class="block text-base font-medium leading-6 text-marron-600">Usuario</label>
                        </div>
                        <div class="flex items-center gap-x-3">
                            <input id="Albergue" name="registro" value="albergue" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                            <label for="albergue" class="block text-base font-medium leading-6 text-marron-600">Albergue</label>
                        </div>';
                }
                @endphp
                
                <div class="flex items-center gap-x-3">
                    <input id="Perrito" name="registro" value="perrito" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                    <label for="perrito" class="block text-base font-medium leading-6 text-marron-600">Perrito</label>
                </div>
            </div>
            <div class="mt-24 w-[50%] mx-auto ">
                <input type="submit" value="Enviar" class="w-full text-base p-3 text-base font-medium text-center text-gris-100 rounded-lg bg-marron-900 hover:bg-marron-300 focus:ring-4 focus:outline-none focus:ring-marron-300 hover:cursor-pointer">
            </div>
        </form>
    </div>
</section>