

<nav class="text-lg bg-celeste-550 fixed w-full min-w-[30rem] z-20 top-0 left-0 border-b-4 border-dotted border-celeste-650 dark:border-celeste-650 ">
  <div class="max-w-screen flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/">
        <img src="images/icons/logo-pawsitiva.png" class="h-14 mx-6" alt="Flowbite Logo">
    </a>
    <div class="ml-auto md:order-2">
      @php
      use Illuminate\Support\Facades\Auth;

      $user = "";
      $tipo = "";
      if (Auth::guard('usuario')->check()){
        $tipo = "Usuario";
        $user = Auth::guard('usuario')->user();
      }elseif(Auth::guard('albergue')->check()){
        $tipo = "Albergue";
        $user = Auth::guard('albergue')->user();
      }
      if($user!=""){
      echo '
      <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="h-16 w-40  mr-0" type="button">
        <img class="border-none h-full w-16 rounded-full float-right hover:opacity-75" src="'.$user['foto'].'"/>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownInformation" class="z-10 hidden border-2 border-celeste-700 bg-celeste-700 divide-y divide-gray-100 text-gris-50 rounded-lg shadow w-44">
          <a class="px-4 py-3 block px-4 py-2 text-sm hover:bg-celeste-600" href="/buscar?q='.strtolower($tipo).'s-'.$user["id"].'">
            <img class="border-none h-40 w-40 rounded-full float-right mt-2 mb-4" src="'.$user['foto'].'"/>
            
            <div class="font-medium ">'.$tipo.'</div>
            <div>'. $user["nombre"] .'</div>
          </a>
          <div class="py-2">
              <a href="/actualizar?registro='.strtolower($tipo).'" 
              class="block px-4 py-2 text-sm hover:bg-celeste-600">Actualizar datos</a>

          </div>';
      if($tipo == 'Albergue'){
        echo'<div class="py-2">
              <a href="/actualizar?registro=albergue-qr" 
              class="block px-4 py-2 text-sm hover:bg-celeste-600">Actualizar QR</a>
          </div>';
      }
      echo '
          <div class="py-2">
              <a href="/cerrar-sesion" 
              onclick="event.preventDefault();
                      document.getElementById(`logout-form`).submit();"
              class="block px-4 py-2 text-sm hover:bg-celeste-600">Cerrar sesión</a>

          </div>
          
        </div>';
      }
        else{
          echo '<a href="/iniciar-sesion"><button type="button" class="text-white bg-celeste-650 hover:bg-celeste-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg  px-4 py-2 text-center mr-3 md:mr-0">Iniciar sesion</button></a>';
        }
        
      @endphp
      <!-- Logout -->
      <form id="logout-form" action="/cerrar-sesion" method="POST" style="display:none">
        @csrf
      </form>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gris-500 rounded-lg md:hidden hover:bg-celeste-650 focus:outline-none focus:ring-2 focus:ring-gris-200 dark:text-gris-400 dark:hover:celeste-650 dark:focus:ring-gris-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Abrir menu</span>
        
        <svg class="w-6 h-6" aria-hidden="true" fill="celeste-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="flex ml-auto md:order-1 text-gris-900" id="">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-semibold rounded-lg  md:flex-row md:space-x-8 md:mt-0 md:border-0">
      <li>
        <a href="/buscar" class="block py-2 pl-3 pr-4 text-white bg-celeste-650 rounded md:bg-transparent <?php if ('buscar'==$valor) {echo "md:text-celeste-650";} ?> md:hover:text-celeste-650 md:p-0" aria-current="page">Buscar</a>
        
      </li>
      <li>
        <a href="/registrar" class="block py-2 pl-3 pr-4 text-white bg-celeste-650 rounded md:bg-transparent <?php if ('registrar'==$valor) {echo "md:text-celeste-650";} ?> md:hover:text-celeste-650 md:p-0">Registrar</a>
      </li>
      <li>
        <a href="/donar" class="block py-2 pl-3 pr-4 text-white bg-celeste-650 rounded md:bg-transparent <?php if ('donar'==$valor) {echo "md:text-celeste-650";} ?> md:hover:text-celeste-650 md:p-0">Donar</a>
      </li>
      <li>
        <a href="/contactanos" class="block py-2 pl-3 pr-4 text-white bg-celeste-650 rounded md:bg-transparent <?php if ('contactanos'==$valor) {echo "md:text-celeste-650";} ?> md:hover:text-celeste-650 md:p-0">Contactanos</a>
      </li>
      
      <li>
        <a href="/sobre-nosotros" class="block py-2 pl-3 pr-4 text-white bg-celeste-650 rounded md:bg-transparent <?php if ('sobre-nosotros'==$valor) {echo "md:text-celeste-650";} ?> md:hover:text-celeste-650 md:p-0">Sobre nosotros</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

