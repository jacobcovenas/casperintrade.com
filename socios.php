<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Socios Coporativos</title>
    <link rel="icon" href="./img/isotipo.ico" />
    <link href="./styles/output.css" rel="stylesheet" />
    <meta name="description" content="Descubre a nuestros socios en el comercio internacional, líderes en la producción sostenible de productos agropecuarios y la comercialización de productos hidrobiológicos de calidad. Explora nuestras sólidas alianzas con empresas destacadas en Latinoamérica y África.">
    <meta name="keywords" content="socios, comercio internacional, alianzas, producción agropecuaria, productos hidrobiológicos, calidad, sostenibilidad, empresa, Latinoamérica, África, Almiper, UniOceans">

</head>

<body>

    <!-- Navegacion telefono -->
    <ul id="menu" class="bg-white lg:hidden fixed py-4 transition top-0 left-0 w-60 z-20 h-screen -translate-x-60">
        <li>
            <a href="./index.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Inicio</span>
            </a>
        </li>
        <li>
            <a href="./nosotros.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Nosotros</span>
            </a>
        </li>
         
        <li>
            <a href="./servicios.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Servicios</span>
            </a>
        </li>
        <li>
            <a href="./productos.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Productos</span>
            </a>
        </li>
        <li>
            <a href="./contacto.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Contacto</span>
            </a>
        </li>
        <li class="p-4">
            <div class="relative">
                <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                    <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                        Español
                    </a>

                    <button id="menuButton" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div id="menuDropdown" class="hidden absolute end-0 z-20 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg" role="menu">
                    <div class="p-2">
                        <a href="./" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Español <img class="w-6 h-6" src="./img/espana.webp" alt="bandera de España" />
                        </a>
                        <a href="./english/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Inglés <img class="w-6 h-6" src="./img/reino-unido.webp" alt="bandera de Gran Bretaña" />
                        </a>
                        <a href="./francais/accueil.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Francés <img class="w-6 h-6" src="./img/francia.webp" alt="bandera de Francia" />
                        </a>
                    </div>
                </div>
            </div>
        </li>
    </ul>

    <!-- Navegacion -->
    <header class="bg-yellow-500 relative z-10">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between py-4">
                <div class=" md:flex md:items-center md:gap-12">
                    <a class="flex justify-center items-center" href="./index.php">
                        <img alt="CASPER logo" src="./img/logo.webp" class="w-80 h-auto" height="200" width="200" />
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden lg:block">
                        <ul class="flex items-center gap-10 uppercase">
                            <li>
                                <a class="link-nav text-sm" href="./index.php">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a class="link-nav text-sm" href="./nosotros.php">
                                    Nosotros
                                </a>
                            </li>
                             
                            <li>
                                <a class="link-nav text-sm" href="./servicios.php">
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a class="link-nav text-sm" href="./productos.php">
                                    Productos
                                </a>
                            </li>
                            <li>
                                <a class="link-nav text-sm" href="./contacto.php">
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <div class="relative">
                                    <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                                        <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                            Español
                                        </a>

                                        <button id="menuButton1" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20" name="boton de idiomas">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div id="menuDropdown1" class="hidden z-60 absolute end-0 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg" role="menu">
                                        <div class="p-2">
                                            <a href="./" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Español <img class="w-6 h-6" src="./img/espana.webp" alt="bandera de España" />
                                            </a>
                                            <a href="./english/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Inglés <img class="w-6 h-6" src="./img/reino-unido.webp" alt="bandera de Gran Bretaña" />
                                            </a>
                                            <a href="./francais/accueil.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Francés <img class="w-6 h-6" src="./img/francia.webp" alt="bandera de Francia" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>

                    <div class="block lg:hidden">
                        <button type="button" id="btn-nav" class="rounded bg-gray-100 p-2 2 transition hover:text-gray-100/75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

    <!-- Seccion Hero -->
    <section class=" text-white bg-gray-100 bg-center relative bg-cover" style="background-image: url(./img/business-partners-shaking-hands-meeting-hall.webp);">
        <div class="mx-auto max-w-screen-xl relative px-4 py-32 lg:flex lg:h-[90vh] lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl">
                    Nuestros <span class="text-orange-600">socios</span>
                </h1>
                <p class="mt-4 max-w-xl sm:text-xl">
                    Creemos firmemente que el éxito en el comercio internacional se fundamenta en las alianzas sólidas y colaborativas. Aquí destacamos las relaciones estratégicas que hemos forjado a lo largo de los años con empresas líderes y expertos de la industria en Latinoamérica y África.
                </p>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2 py-12">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 order-last lg:order-first">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Almiper</h2>

                <p class=" 2 md:mt-4">
                    Empresa ddedicada a la producción, acopio, procesamiento y comercialización sostenible de productos agropecuarios.
                </p>
                <a class="text-orange-600 inline-block font-bold mt-4 transition hover:underline" href="http://www.almiper.com" rel="noreferrer" target="_blank">Visitar su página web</a>

            </div>
        </div>
        <img alt="Logo de la empresa almiper" src="./img/logo-almiper.webp" height="200" width="200" class="h-100 mx-auto my-auto w-auto object-cover sm:h-80 lg:h-100" />
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2 py-12">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 md:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Unioceans</h2>

                <p class=" 2 md:mt-4">
                    Empresa dedicada a la comercialización de productos hidrobiológicos frescos y congelados,
                    procesados bajo los más altos estándares de calidad e inocuidad.
                </p>
                <a class="text-orange-600 inline-block font-bold mt-4 transition hover:underline" href="https://unioceans.com.pe/" rel="noreferrer" target="_blank">Visitar su página web</a>

            </div>
        </div>
        <img alt="Logo de la empresa unioceans" src="./img/unioceans-logo.webp" height="200" width="200" class="h-100 mx-auto my-auto w-auto object-cover sm:h-80 lg:h-100" />
    </section>

    <!-- Footer -->
        <footer class="bg-red-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center text-teal-600">
                <a class="flex justify-center items-center" href="./index.php">
                    <img alt="CASPER logo" src="./img/logo.webp" class="w-80 h-auto" height="200" width="200" />
                </a>
            </div>

            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-200">
                © 2024 CASPER INTERNATIONAL TRADE S.A.C.S. Todos los derechos reservados. Todos los nombres de empresas, nombres de productos y logotipos incluidos aquí pueden ser marcas comerciales registradas o marcas de servicio de sus respectivos propietarios.
            </p>

            <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./index.php"> Inicio </a>
                </li>

                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./nosotros.php"> Nosotros </a>
                </li>

                 

                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./servicios.php"> Servicios </a>
                </li>
                
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./productos.php"> Productos </a>
                </li>

                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./contacto.php"> Contacto </a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
        document.getElementById('menuButton').addEventListener('click', function() {
            var dropdown = document.getElementById('menuDropdown');
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        });
        document.getElementById('menuButton1').addEventListener('click', function() {
            var dropdown = document.getElementById('menuDropdown1');
            if (dropdown.classList.contains('hidden')) {
                dropdown.classList.remove('hidden');
            } else {
                dropdown.classList.add('hidden');
            }
        });
        const btnNav = document.getElementById("btn-nav");
        const menu = document.getElementById("menu");

        btnNav.addEventListener("click", function() {
            menu.classList.toggle("-translate-x-60");
        });
    </script>
</body>

</html>