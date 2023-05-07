

<nav class="bg-white text-lg  dark:bg-celeste-550 fixed w-full min-w-[30rem] z-20 top-0 left-0 border-b-4 border-dotted border-celeste-650 dark:border-celeste-650 ">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="/" class="flex items-center">
      <img src="images/icons/logo-pawsitiva.png" class="h-14 mr-3" alt="Flowbite Logo">
  </a>
  <div class="flex md:order-2">
      <a href="/iniciar-sesion"><button type="button" class="text-white bg-celeste-650 hover:bg-celeste-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-lg  px-4 py-2 text-center mr-3 md:mr-0 dark:bg-celeste-650 dark:hover:bg-celeste-600 dark:focus:ring-blue-800">Iniciar sesion</button></a>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gris-500 rounded-lg md:hidden hover:bg-celeste-650 focus:outline-none focus:ring-2 focus:ring-gris-200 dark:text-gris-400 dark:hover:celeste-650 dark:focus:ring-gris-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="celeste-100" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
  </div>
  <div class="flex md:order-1 text-gris-900" id="">
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

