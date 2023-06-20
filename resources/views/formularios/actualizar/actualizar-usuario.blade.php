<?php
    $usuario = Auth::guard('usuario')->user();
    $nombre_completo = explode(' ', $usuario['nombre']);
    $distritos = [
        'Ancon',
        'Ate Vitarte',
        'Barranco',
        'Breña',
        'Carabayllo',
        'Chaclacayo',
        'Chorrillos',
        'Cienieguilla',
        'Comas',
        'El Agustino',
        'Independencia',
        'Jesús Maria',
        'La Molina',
        'La Victoria',
        'Lima',
        'Lince',
        'Los Olivos',
        'Lurigancho',
        'Lurín',
        'Magdalena del Mar',
        'Miraflores',
        'Pachacamac',
        'Puusana',
        'Pueblo Libre',
        'Puente Piedra',
        'Punta Hermosa',
        'Punta Negra',
        'Rimac',
        'San Bartolo',
        'San Borja',
        'San Isidro',
        'San Juan de Lurigancho',
        'San Juan de Miraflores',
        'San Luis',
        'San Martín de Porres',
        'San Miguel',
        'Santa Anita',
        'Santa María del Mar',
        'Santa Rosa',
        'Santiago de Surco',
        'Surquillo',
        'Villa El Salvador',
        'Villa María del Triunfo'
    ];
?>

<section class="relative isolate px-6  mt-96  md:mt-40 xl:mt-12  bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Actualizar Usuario</h2>
        <form id="form-registro" method="POST" action="/actualizar" enctype="multipart/form-data">
            @csrf
        <div class="w-[80%] mx-auto space-y-12">
            <div class="border-b border-gris-900/10 mt-24 pb-12">
                <h2 class="text-base font-semibold leading-7 text-marron-800">Informacion personal</h2>
                <input type="hidden" name="registro" value="usuario">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                    <label for="nombre" class="block text-sm font-medium leading-6 text-marron-800">Nombre</label>
                        <div class="mt-2">
                        <input type="text" required value="{{$nombre_completo[0]}}" name="nombre" id="nombre" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                <div class="sm:col-span-3">
                    <label for="apellido" class="block text-sm font-medium leading-6 text-marron-800">Apellido</label>
                    <div class="mt-2">
                        <input type="text" required value="{{$nombre_completo[1]}}" name="apellido" id="apellido" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-4">
                    <label for="email" class="block text-sm font-medium leading-6 text-marron-800">Correo electrónico</label>
                    <div class="mt-2">
                        <input id="correo" required value="{{$usuario['correo']}}" name="correo" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <!-- <div class="sm:col-span-2 sm:col-start-1">
                    <label for="contraseña" class="block text-sm font-medium leading-6 text-marron-800">Contraseña</label>
                    <div class="mt-2">
                        <input required type="password" name="contraseña" id="contraseña" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                    </div>
                </div> -->


                <div class="sm:col-span-2">
                    <label for="distrito" required class="block text-sm font-medium leading-6 text-marron-800">Distrito</label>
		            <select id="distrito" name="distrito" autocomplete="off"  class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    <?php
                        foreach($distritos as $distrito){
                            if($distrito == $usuario['distrito']){
                                echo "<option selected>".$distrito."</option>";
                            }else{
                                echo "<option>".$distrito."</option>";
                            }
                        }
                    ?>
                    </select>                
                </div>

                <div class="sm:col-span-2">
                    <label for="edad" class="block text-sm font-medium leading-6 text-marron-800">Edad </label>
                    <div class="mt-2">
                    
                        <input type="number" required value="{{$usuario['edad']}}" name="edad" id="edad" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                <div class="sm:col-span-2">
                    <label for="numero" class="block text-sm font-medium leading-6 text-marron-800">Numero telefonico</label>
                    <div class="mt-2">
                        <input pattern="[0-9]+" required type="text" value="{{$usuario['numero_telefonico']}}" name="numero_telefonico" id="numero_telefonico" autocomplete="off" class="block w-full rounded-md border-0 py-1.5 text-gris-900 shadow-sm ring-1 ring-inset ring-gris-300 placeholder:text-gris-400 focus:ring-2 focus:ring-inset focus:ring-marron-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="col-span-full ml-[15%]">
                    <label for="foto" class="block text-sm font-medium leading-6 text-marron-800">Foto de perfil</label>
                    <div class="mt-2 w-64 h-64 flex relative justify-center items-center rounded-lg border border-dashed border-gris-900/25 px-6 py-10">
                        <div>
                            <img id="imgPrevisualizacion" class="absolute h-full w-full top-0 left-0 opacity-75 hover:opacity-25 rounded-xl " src="{{$usuario['foto']}}"/>
                        </div>
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gris-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class=" absolute -right-48 top-20 flex justify-center text-sm leading-6">
                                <label for="foto" class="relative cursor-pointer p-2 border-2 border-marron-600 rounded-xl bg-white  font-semibold text-marron-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-marron-600 focus-within:ring-offset-2 hover:text-marron-500">
                                <span >Sube tu foto de perfil </span>
                                <p class="pl-1">o arrastralo</p>
                                <p><i class="fas fa-image" aria-hidden="true"></i></p>
                                <input id="foto" name="foto" type="file" class="sr-only">
                                </label>
                            </div>
                            <p class="text-xs leading-5 text-gris-600">PNG, JPG, GIF máx. 10MB</p>
                        </div>
                    </div>
                    <script>
                    const preview = document.getElementById('imgPrevisualizacion');
                    const foto = document.getElementById('foto');
                    foto.addEventListener("change", ()=>{
                        const archivo = foto.files;
                        if(!archivo || archivo.length === 0 ){
                            preview.src = "{{str_replace('\\', '/', $usuario['foto']) }}";
                            console.log(archivo);
                            return;
                        }
                        console.log("salio bien");
                        const objetoURL = URL.createObjectURL(archivo[0]);
                        preview.src = objetoURL;
                    });
                    </script>
                </div>
            </div>
        </div>
        <div class="w-full mx-auto mt-6 flex items-center justify-end gap-x-6">
            <!-- <button type="submit" class="text-sm font-semibold leading-6 text-gris-900" onclick="document.getElementById('form-registro').reset()"   >Cancelar</button> -->
            <button type="submit" class="w-full rounded-md bg-marron-600 text-base p-3 text-sm font-semibold text-white shadow-sm hover:bg-marron-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-marron-600">Guardar</button>
        </div>
        </form>
    </div>
</section>