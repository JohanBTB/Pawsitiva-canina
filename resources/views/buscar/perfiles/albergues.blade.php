
<?php
//         $albergues = array(
//             array(
//                 "id" => 1,
//                 "nombre" => "Albergue Amor y Rescate",
//                 "direccion"=> "Calle de las Pizzas - Av. Larco, Miraflores, Lima",
//                 "numero"=>"456215875",
//                 "codigo_qr" => "albergues/qr-facebook2.png",
//                 "foto" => "albergues/1.jpg",
//                 "correo" => "amoryrescate@hotmail.com",
//                 "contrasena" => "contrasena1"
//             ),
//             array(
//                 "id" => 2,
//                 "nombre" => "Albergue Talpatitas",
//                 "direccion"=> "Jirón de la Unión, Cercado de Lima, Lima",
//                 "numero"=>"977456895",
//                 "codigo_qr" => "albergues/qr-facebook2.png",
//                 "foto" => "albergues/2.jpg",
//                 "correo" => "talpatitas@hotmail.com",
//                 "contrasena" => "contrasena2"
//             ),
//             array(
//                 "id" => 3,
//                 "nombre" => "Albergue Huellitas a casa",
//                 "direccion"=> "Avenida La Mar, San Miguel, Lima",
//                 "numero"=>"876105982",
//                 "codigo_qr" => "albergues/qr-facebook2.png",
//                 "foto" => "albergues/3.jpg",
//                 "correo" => "HuellitasACasa@outlook.com",
//                 "contrasena" => "contrasena3"
//             )
//         );
        


// $albergue = collect($albergues)->firstWhere('id', $id);



?>

component
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

<main class="profile-page px-6 mt-96  md:mt-40 xl:mt-12 lg:px-8">
  <section class="relative block h-500-px">
    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image:url({{ asset('images/buscar/albergues/general.png') }});
          ">
      <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
    </div>  
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
      <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
        <polygon class="text-gris-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </section>
  <section class="relative py-16 bg-marron-100">
    <div class="container mx-auto px-4">
      <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
        <div class="px-6">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
              <div class="relative">
                <img alt="{{$datos['nombre']}}" src="images/buscar/{{$datos['foto']}}" class="shadow-xl rounded-full align-middle border-none -mt-[50%] w-48 h-48 mb-3 rounded-full shadow-lg">

                <img alt="{{$datos['nombre']}}" src="images/donar/qr-facebook2.png" class="shadow-xl align-middle border-none  w-48 h-48 mb-3 shadow-lg">
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
              <div class="py-6 px-3 mt-32 sm:mt-0">
                <button class="bg-marron-500 active:bg-marron-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" type="button">
                  Mensajear
                </button>
              </div>
            </div>
            <div class="w-full lg:w-4/12 px-4 lg:order-1">

            </div>
          </div>
          <div class="text-center mt-12">
            <h3 class="text-4xl font-semibold leading-normal mb-2 text-marron-700 mb-2">
              {{ $datos['nombre'] }}
            </h3>
            <div class="text-sm leading-normal mt-0 mb-2 text-gris-400 font-bold uppercase">
              <i class="fas fa-map-marker-alt mr-2 text-lg text-gris-400"></i>
              {{$datos['direccion']}}
            </div>
            <div class="mb-2 text-gris-600 ">
            <i class="fas fa-phone-alt mr-2 text-lg text-gris-400"></i>{{$datos['numero']}}
            </div>
            <div class="mb-8 text-gris-600">
            <i class="far fa-envelope mr-2 text-lg text-gris-400"></i>{{$datos['correo']}}
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>
</main>