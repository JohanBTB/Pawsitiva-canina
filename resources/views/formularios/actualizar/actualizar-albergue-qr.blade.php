<?php
    $albergue = Auth::guard('albergue')->user();
?>
<section class="relative isolate px-6 mt-96  md:mt-40 xl:mt-12 bg-gris-50 relative isolate text-marron-500">
    <div class="mx-auto max-w-4xl py-12 md:py-24 xl:py-48 max-w-screen-md">
        <h2 class="mb-4 text-6xl tracking-tight font-extrabold text-center text-marron-800">Actualizar QR del Albergue  </h2>
        <form id="form-registro" method="POST" action="/actualizar" enctype="multipart/form-data">
        @csrf
        <div class="w-[80%] mx-auto space-y-12">
            <div class="border-b border-gris-900/10 mt-24 pb-12">
                <h2 class="text-base font-semibold leading-7 text-marron-800">Codigo Qr del Albergue</h2>
                <input type="hidden" name="registro" value="albergue-qr">
                <div class="col-span-full ml-[15%] mt-16">
                    <label for="foto" class="block text-sm font-medium leading-6 text-marron-800">Foto de QR</label>
                    <div class="mt-2 w-64 h-64 flex relative justify-center items-center rounded-lg border border-dashed border-gris-900/25 px-6 py-10">
                        <div>
                            <img id="imgPrevisualizacion" class="absolute h-full w-full top-0 left-0 opacity-75 hover:opacity-25 rounded-xl " src="{{$albergue['codigo_qr']}}"/>
                        </div>
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gris-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class=" absolute -right-56 top-20 flex justify-center text-sm leading-6">
                                <label for="foto" class="relative cursor-pointer p-2 border-2 border-marron-600 rounded-xl bg-white  font-semibold text-marron-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-marron-600 focus-within:ring-offset-2 hover:text-marron-500">
                                <span >Sube tu foto del código QR </span>
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
                            preview.src = "{{str_replace('\\', '/', $albergue['foto']) }}";
                            return;
                        }
                        const objetoURL = URL.createObjectURL(archivo[0]);
                        preview.src = objetoURL;
                    });
                    </script>
                </div>
            </div>
        </div>
        <div class=" mx-auto mt-6 flex items-center justify-end gap-x-6">
            <!-- <button type="submit" class="text-sm font-semibold leading-6 text-gris-900" onclick="document.getElementById('form-registro').reset()"   >Cancelar</button> -->
            <button type="submit" class="rounded-md bg-marron-600 p-3 text-base font-semibold text-white shadow-sm hover:bg-marron-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-marron-600 w-full">Guardar</button>
        </div>
        </form>
    </div>
</section>