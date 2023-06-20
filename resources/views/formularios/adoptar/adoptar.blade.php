<?php
	if (Auth::guard('usuario')->check()){
        $tipo = "Usuario";
        $user = Auth::guard('usuario')->user();
      }
?>
<section class="relative isolate px-6 mt-96  md:mt-40 xl:mt-12  bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Adoptar perrito</h2>
        <form id="form-registro" method="POST" action="/adoptar">
            @csrf
            <div class="w-[80%] mx-auto space-y-12">
                <div class="border-b border-gris-900/10 mt-24 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-marron-800">Informacion personal</h2>
                        <input type="hidden" name="id_usuario" value="{{$user['id']}}">
                        <input type="hidden" name="id_perrito" value="{{$perrito['id']}}">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-2 sm:col-start-1">
                            <label for="usuario_nombre" class="block text-sm font-medium leading-6 text-marron-800">Nombre (Usuario)</label>
                            <div class="mt-2">
                                <input value="{{$user['nombre']}}" required type="text" readonly name="nombre_usuario" id="nombre_usuario" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>

		                <div class="sm:col-span-2">
                            <label requiredfor="numero" class="block text-sm font-medium leading-6 text-marron-800">Numero telefonico</label>
                            <div class="mt-2">
                            <input value="{{$user['numero_telefonico']}}" readonly type="text" pattern="[0-9]+" name="numero_telefonico" id="numero_telefonico" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-2">
                        <label for="fecha_adopcion" class="block text-sm font-medium leading-6 text-marron-800">Fecha de adopción</label>
                        <div class="mt-2">
                            <input value="<?php echo date('Y-m-d'); ?>" readonly type="date" min="2000-01-01" max="2099-12-31" name="fecha_adopcion" id="fecha_adopcion" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

		            <div class="sm:col-span-2 sm:col-start-1">
                        <label for="perro_nombre" class="block text-sm font-medium leading-6 text-marron-800">Nombre (Perro)</label>
                        <div class="mt-2">
                            <input value="{{$perrito['nombre']}}" required type="text" readonly name="nombre_perro" id="nombre_perro" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

		            <div class="sm:col-span-6 mt-2 space-y-10">
                        <fieldset>
                        <div class="mt-6 space-y-6">
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="compromiso" name="compromiso" type="checkbox" value="si" class="h-4 w-4 rounded border-gris-300 text-marron-600 focus:ring-marron-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="adoptado" class="font-medium text-marron-800">Me comprometo a cuidar y brindar amor, atención y los cuidados necesarios al perro que he adoptado, garantizando su bienestar y felicidad en todo momento"</label>
                                </div>
                            </div>
                        </div>
               	        </fieldset>
            	    </div>
	    	

                    <div class="col-span-6 mr flex my-6  gap-x-6">
                        <button type="submit" id="adoptar_boton" disabled class="w-full rounded-md bg-gris-500 bg-marron-600 p-3 text-base font-semibold text-white shadow-sm 
                        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-marron-600">Adoptar</button>
                        <!-- <button type="submit" class="text-sm font-semibold leading-6 text-gris-900" onclick="document.getElementById('form-registro').reset()"   >Cancelar</button> -->
                    </div>
                    <script>
                        const adoptar_button = document.getElementById("adoptar_boton");
                        const check_box = document.getElementById("compromiso");
                        check_box.addEventListener('change', function() {
                            adoptar_button.disabled = !check_box.checked;
                            adoptar_button.classList.toggle('bg-gris-500');
                            adoptar_button.classList.toggle('hover:bg-marron-500');
                        });
	    	        </script>
                </div>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</section>