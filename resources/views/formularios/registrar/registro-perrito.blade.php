<section class="relative isolate px-6 mt-96  md:mt-40 xl:mt-12  bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Registrar perrito   </h2>
        <form id="form-registro" method="GET" action="registrar">
        <div class="space-y-12">
        <div class="border-b border-gris-900/10 mt-24 pb-12">
            <h2 class="text-base font-semibold leading-7 text-marron-800">Informacion personal</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-2 sm:col-start-1">
                <label for="nombre" class="block text-sm font-medium leading-6 text-marron-800">Nombre</label>
                <div class="mt-2">
                    <input required type="text" name="nombre" id="nombre" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="col-span-2">
                <label for="raza" class="block text-sm font-medium leading-6 text-marron-800">Raza(opcional)</label>
                <div class="mt-2">
                    <input type="text" name="raza" id="raza" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="edad" class="block text-sm font-medium leading-6 text-marron-800">Edad(opcional)</label>
                <div class="mt-2">
                    <input type="number" name="edad" id="edad" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label required for="distrito" class="block text-sm font-medium leading-6 text-marron-800">Distrito</label>
                <div class="mt-2">
                    <input type="text" name="distrito" id="distrito" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label requiredfor="numero" class="block text-sm font-medium leading-6 text-marron-800">Numero telefonico</label>
                <div class="mt-2">
                    <input type="text" pattern="[0-9]+" name="numero" id="numero" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                </div>
                </div>
            </div>
            </div>

            <div class="col-span-full">
                <label for="historial" class="block text-sm font-medium leading-6 text-marron-800">Historial Clinico</label>
                <div class="mt-2">
                    <textarea id="historial" name="historial" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                <p class="mt-3 text-sm leading-6 text-gris-600">Escribe un breve resumen de su historial clinico.</p>
            </div>

            <div class="sm:col-span-3">
                <label for="albergue" class="block text-sm font-medium leading-6 text-marron-800">Albergue</label>
                <div class="mt-2">
                    <select id="albergue" name="albergue" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <option>Albergue La Molina</option>
                    <option>Albergue Ate</option>
                    <option>Albergue Surco</option>
                    </select>
                </div>
                </div>

            <div class="sm:col-span-2 mt-2 space-y-10">
                <fieldset>
                <div class="mt-6 space-y-6">
                    <div class="relative flex gap-x-3">
                    <div class="flex h-6 items-center">
                        <input id="adoptado" name="adoptado" type="checkbox" class="h-4 w-4 rounded border-gris-300 text-marron-600 focus:ring-marron-600">
                    </div>
                    <div class="text-sm leading-6">
                        <label for="adoptado" class="font-medium text-marron-800">¿Adoptado?</label>
                    </div>
                </div>
                </fieldset>
                <fieldset>
            </div>

            <div class="col-span-full">
                <label for="foto" class="block text-sm font-medium leading-6 text-marron-800">Foto del perrito</label>
                <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gris-900/25 px-6 py-10">
                    <div class="text-center">
                    <svg class="mx-auto h-12 w-12 text-gris-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>
                    <div class="mt-4 flex text-sm leading-6 text-gris-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-marron-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-marron-600 focus-within:ring-offset-2 hover:text-marron-500">
                        <span>Sube foto del perrito</span>
                        <input required id="file-upload" name="file-upload" type="file" class="sr-only">
                        </label>
                        <p class="pl-1">o arrastralo</p>
                    </div>
                    <p class="text-xs leading-5 text-gris-600">PNG, JPG, GIF máx. 10MB</p>
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