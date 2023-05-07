
<section class="relative isolate px-6 mt-96  md:mt-40 xl:mt-12 bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl  py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Registrar</h2>
        <p class="mb-8 lg:mb-16 font-semibold text-center text-gray-500 dark:text-marron-600 sm:text-xl">¿Registrara usuario, perrito o albergue?</p>
                <form action="/registrar" method="GET">
                        <div class="mt-6 space-y-6">
                            <div class="flex items-center gap-x-3">
                            <input id="Usuario" name="registro" value="usuario" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                            <label for="usuario" class="block text-sm font-medium leading-6 text-marron-600">Usuario</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                            <input id="Albergue" name="registro" value="albergue" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                            <label for="albergue" class="block text-sm font-medium leading-6 text-marron-600">Albergue</label>
                            </div>
                            <div class="flex items-center gap-x-3">
                            <input id="Perrito" name="registro" value="perrito" type="radio" class="h-4 w-4 border-marron-300 focus:ring-marron-600">
                            <label for="perrito" class="block text-sm font-medium leading-6 text-marron-600">Perrito</label>
                            </div>
                        </div>
                        <div class="mt-6 space-y-6">
                            <input type="submit" value="Enviar" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-marron-900 sm:w-fit hover:bg-marron-300 focus:ring-4 focus:outline-none focus:ring-marron-300 hover:cursor-pointer">
                        </div>
                                    <?php
            ?>
                </form>
    </div>
</section>