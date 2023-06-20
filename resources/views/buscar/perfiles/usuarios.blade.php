<main class="profile-page px-6 mt-96  md:mt-40 xl:mt-12 lg:px-8">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image:url({{ asset('images/buscar/usuarios/general.png') }});
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>  
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-gris-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bbg-marron-100">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="{{$datos['nombre']}}" src="{{$datos['foto']}}" class="shadow-xl rounded-full align-middle border-none -mt-[50%] w-48 h-48 mb-3 rounded-full shadow-lg">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-marron-500 active:bg-marron-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  + Agregar
                </button>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">
              <div class="flex justify-center py-4 lg:pt-4 pt-8">
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-marron-600">22</span><span class="text-sm text-gris-400">Amigos</span>
                </div>
                <div class="mr-4 p-3 text-center">
                  <span class="text-xl font-bold block uppercase tracking-wide text-marron-600">{{$datos['cant_perros']}}</span><span class="text-sm text-gris-400">Perritos adoptados</span>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-marron-700 mb-2">
              {{ $datos['nombre'] }}
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-gris-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-gris-400"></i>
              {{$datos['distrito']}}
            </div>
            <div class="mb-2 text-gris-600 ">
            <i class="fas fa-phone-alt mr-2 text-lg text-gris-400"></i><b>Numero telefonico:&nbsp;</b>{{$datos['numero_telefonico']}}
            </div>
            <div class="mb-8 text-gris-600">
            <i class="far fa-envelope mr-2 text-lg text-gris-400"></i><b>Correo:&nbsp;</b>{{$datos['correo']}}
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>