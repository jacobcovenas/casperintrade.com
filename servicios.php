<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Servicios</title>
    <link rel="icon" href="./img/isotipo.ico" />
    <link href="./styles/output.css" rel="stylesheet" />
    <meta name="description" content="Descubre cómo potenciar tus operaciones comerciales con África junto a Web Casper. Ofrecemos soluciones integrales y personalizadas, desde logística hasta intermediación con brockers, navieras y agencias de aduanas. Confía en nuestra experiencia para llevar tu comercio internacional al siguiente nivel.">
    <meta name="keywords" content="comercio internacional, África, Web Casper, importaciones, exportaciones, soluciones integrales, logística, intermediación con brockers, navieras, agencias de aduanas, gestión aduanera, recaudación e informes, protección del crédito, financiamiento">

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
            <a href="./socios.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Socios comerciales</span>
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
                                <a class="link-nav text-sm" href="./socios.php">
                                    Socios comerciales
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
    <section class=" text-white bg-gray-100 bg-center relative bg-cover" style="background-image: url(./img/concepto-control-calidad-estandar-m.webp);">
        <div class="mx-auto max-w-screen-xl relative px-4 py-32 lg:flex lg:h-[90vh] lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    <span class="text-orange-600">Potencia</span> tus operaciones comerciales con <span class="text-orange-600">África</span>
                </h1>
                <p class="mt-4 max-w-xl sm:text-xl">
                    Descubre cómo Web Casper puede simplificar y optimizar tus importaciones y exportaciones hacia África. Con nuestra experiencia y red de contactos en el continente, te ofrecemos soluciones integrales y personalizadas para impulsar el crecimiento de tu negocio. Confía en nosotros para llevar tu comercio internacional al siguiente nivel.
                </p>
            </div>
        </div>
    </section>

    <!--  -->
    <section>
        <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="bg-yellow-400 p-4 md:p-12 lg:px-16 lg:py-24">
                    <div class="mx-auto max-w-xl text-center">
                        <h2 class=" md:text-3xl text-gray-800">
                            Soluciones integrales para el comercio internacional con África
                        </h2>

                        <p class="hidden  sm:mt-4 sm:block">
                            En Web Casper, nos especializamos en ofrecer una amplia gama de servicios diseñados para satisfacer todas tus necesidades en el comercio con el continente africano. Desde la gestión logística hasta la intermediación con brockers, navieras y agencias de aduanas, nuestro equipo altamente calificado está aquí para brindarte el apoyo y la experiencia que necesitas para tener éxito en África.
                        </p>

                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <img alt="Barco de carga lleno de contenedores" src="./img/aerial-view-cargo-ship-with-cargo-container-sea.webp" class="h-40 w-full object-cover sm:h-56 md:h-full" />

                    <img alt="Avion de carga, camion de carga, mapas" src="./img/supply-chain-representation-still-life.webp" class="h-40 w-full object-cover sm:h-56 md:h-full" />
                </div>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-16">
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Logística</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nuestro servicio de logística está diseñado para eliminar las complejidades del comercio entre Latinoamérica y África, asegurando un flujo sin interrupciones de sus mercancías. Nos enorgullecemos de nuestra capacidad para personalizar soluciones logísticas que no solo cumplen, sino que superan las expectativas de nuestros clientes, abarcando desde el transporte y almacenamiento hasta la gestión aduanera. Con nuestro equipo experto y tecnología de vanguardia, garantizamos que su carga llegue a su destino de manera segura, eficiente y en el tiempo acordado, facilitando así un comercio internacional fluido y confiable.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Intermediación con brockers</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nuestro servicio de intermediación con brokers es esencial para navegar con éxito las complejidades del mercado africano. Proporcionamos acceso a una red selecta de brokers confiables y experimentados, garantizando que sus transacciones comerciales sean manejadas con la máxima profesionalidad y eficacia. Este servicio asegura que nuestros clientes obtengan las mejores condiciones de mercado, facilitando la negociación y ejecución de contratos de forma transparente y segura, maximizando así sus oportunidades comerciales en África.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Navieras</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Comprendemos la importancia crítica de seleccionar la naviera adecuada para el éxito de sus operaciones de exportación e importación hacia y desde África. Por ello, colaboramos estrechamente con una amplia gama de compañías navieras de renombre, asegurando flexibilidad, eficiencia y tarifas competitivas para el transporte marítimo de sus mercancías. Nuestro profundo conocimiento del sector y nuestras sólidas relaciones con estas navieras nos permiten ofrecer soluciones logísticas marítimas adaptadas a las necesidades específicas de cada cliente, garantizando la entrega segura y puntual de sus productos.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Agencias de aduanas</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nuestro servicio de agencias de aduanas está especialmente diseñado para simplificar y agilizar los procedimientos aduaneros en las importaciones y exportaciones entre Latinoamérica y África. Contamos con una red de agencias de aduanas confiables y experimentadas, que aseguran el cumplimiento de todas las regulaciones y requisitos legales en cada país, minimizando los riesgos de retrasos o penalizaciones. Este servicio integral garantiza una gestión aduanera eficiente y transparente, permitiendo a nuestros clientes concentrarse en lo más importante: el crecimiento de su negocio en nuevos mercados.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 md:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Recaudación e informes</h2>

                <p class=" 2 md:mt-4">
                    Entendemos la importancia de una gestión eficiente de la recaudación e informes para mantener el control financiero y tomar decisiones informadas. Es por eso que ofrecemos servicios completos de recaudación e informes diseñados para simplificar y optimizar tus procesos financieros. Desde la facturación y la gestión de cuentas por cobrar hasta la generación de informes financieros personalizados, nuestro equipo experto está aquí para ayudarte a mantener un flujo de efectivo saludable y una visión clara de la salud financiera de tu negocio. Confía en nosotros para proporcionarte las herramientas y los conocimientos que necesitas para gestionar tu negocio con eficacia y tomar decisiones informadas para el futuro.
                </p>

            </div>
        </div>
        <img alt="hombre de negocios revisando documentos" src="./img/businessman-checking-documents-table.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 order-last lg:order-first">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Protección del crédito</h2>

                <p class=" 2 md:mt-4">
                    Entendemos la importancia de proteger tus activos y asegurar el éxito de tus operaciones comerciales. Es por eso que ofrecemos soluciones integrales de protección del crédito diseñadas para mitigar el riesgo de impagos y pérdidas financieras. Nuestro equipo de expertos en gestión de riesgos trabaja diligentemente para evaluar y monitorear la solvencia de tus clientes, identificar posibles riesgos y tomar medidas proactivas para proteger tu crédito. Ya sea a través de seguros de crédito, garantías financieras o estrategias de cobranza efectivas, estamos comprometidos a salvaguardar tus intereses y garantizar la salud financiera de tu negocio.
                </p>

            </div>
        </div>
        <img alt="Persona estrechandose las manos luego de una reunión de negocios" src="./img/business-people-shaking-hands-finishing-up-meeting.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 md:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Financiamiento</h2>

                <p class=" 2 md:mt-4">
                    Entendemos que el financiamiento adecuado es crucial para el éxito de tus operaciones comerciales. Es por eso que ofrecemos soluciones flexibles de financiamiento diseñadas específicamente para tus necesidades. Ya sea que estés buscando capital para expandir tus operaciones, financiar una nueva iniciativa o cubrir gastos operativos, nuestro equipo experto está aquí para ayudarte a encontrar la mejor opción financiera. Trabajamos en estrecha colaboración con una variedad de socios financieros confiables para ofrecerte tasas competitivas y términos flexibles que se adapten a tu situación única. Confía en nosotros para proporcionarte el apoyo financiero que necesitas para alcanzar tus objetivos comerciales.
                </p>

            </div>
        </div>
        <img alt="Personas analizando graficos financieros" src="./img/people-analyzing-checking-finance-graphs-office.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!-- Footer -->
        <footer class="bg-red-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center text-teal-600">
                <a class="flex justify-center items-center" href="./index.php">
                    <img alt="CASPER logo" src="./img/logo blanco.webp" class="w-80 h-auto" height="200" width="200" />
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
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./socios.php"> Socios Comerciales </a>
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