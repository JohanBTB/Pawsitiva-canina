<section class="relative isolate px-6 pt-14 lg:px-8 bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-32 sm:py-48 lg:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Iniciar sesion: usuario  </h2>
        <form id="form-registro" method="POST" action="/iniciar-sesion?registro=usuario">
            @csrf
            <div class="space-y-12">
                <div class="text-align-center flex justify-center border-b border-gris-900/10 mt-24 pb-12">
                    
                    <div class="md:w-max[80%] w-[50%]  mt-10 text-medium md:text-xl">
                        <h2 class="mt-4 mb-16 text-3xl  tracking-tight font-bold  text-marron-800">Ingrese sus datos  </h2>
                        <div class="block my-8">
                            <label for="correo" class="block font-medium leading-6 text-marron-800">Correo</label>
                            <div class="mt-2">
                                <input required type="text" name="correo" id="correo" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="block my-8 relative">
                            <label for="contraseña" class="block font-medium leading-6 text-marron-800">Contraseña</label>
                            <div class="mt-2">
                            <input required type="password" name="contraseña" id="contraseña" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                            <img id="perrito-cerrado" src="gifts\navigation\cerrado.png" class="absolute top-0 -right-32 w-24 h-24"> 
                            <img id="perrito-abierto" src="gifts\navigation\abierto.png" class="hidden absolute top-0 -right-32 w-24 h-24">    
                        </div>    
                        <div class="sm:col-span-6 mt-2 space-y-10">
                            <fieldset>
                                <div class="mt-2 space-y-6">
                                    <div class="relative flex gap-x-3">
                                        <div class="flex h-6 items-center">
                                            <input id="mostrar_contraseña" name="mostrar_contraseña" type="checkbox" value="si" class="h-4 w-4 rounded border-gris-300 text-marron-600 focus:ring-marron-600">
                                        </div>
                                        <div class="text-sm leading-6">
                                            <label for="adoptado" class="font-medium text-marron-800">Mostrar contraseña</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
            	        </div>
                        <script>
                            const contraseña = document.getElementById("contraseña");
                            const perrito_abierto = document.getElementById("perrito-abierto");
                            const perrito_cerrado = document.getElementById("perrito-cerrado");
                            const check_box = document.getElementById("mostrar_contraseña");
                            check_box.addEventListener('change', function() {
                                if(check_box.checked){
                                    contraseña.type="text";
                                    perrito_abierto.classList.remove('hidden');
                                }else{
                                    contraseña.type="password";
                                    perrito_abierto.classList.add('hidden');
                                }
                            });
                        </script>
                        <a class="block text-sm my-2 text-marron-800" href="/registrar">¿Aun no te has registrado? Registrate ahora hacienco click aquí</a>
                        <div class="block mt-16">
                            <button type="submit" class="rounded-md bg-marron-600 p-3 text-base font-semibold text-white shadow-sm hover:bg-marron-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-marron-600  w-full">Iniciar sesión</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    

</section>