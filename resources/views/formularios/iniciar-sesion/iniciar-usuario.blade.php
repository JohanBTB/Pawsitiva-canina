<section class="relative isolate px-6 pt-14 lg:px-8 bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Iniciar sesion: usuario  </h2>
        <form id="form-registro" method="GET" action="registrar">
        <div class="space-y-12">
        <div class="border-b border-gris-900/10 mt-24 pb-12">
            <h2 class="mb-4 text-2xl tracking-tight font-bold  text-marron-800">Ingrese sus datos  </h2>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-2 sm:col-start-1">
                <label for="nombre" class="block text-sm font-medium leading-6 text-marron-800">Nombre</label>
                <div class="mt-2">
                    <input required type="text" name="nombre" id="nombre" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-2 sm:col-start-1">
                <label for="contraseña" class="block text-sm font-medium leading-6 text-marron-800">Contraseña</label>
                <div class="mt-2">
                    <input required type="password" name="contraseña" id="contraseña" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="text-sm font-semibold leading-6 text-gris-900" onclick="document.getElementById('form-registro').reset()"   >Cancelar</button>
            <button type="submit" class="rounded-md bg-marron-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-marron-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-marron-600">Guardar</button>
            </div>
        </form>
    </div>
</section>