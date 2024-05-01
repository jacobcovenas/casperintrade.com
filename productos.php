<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Productos</title>
    <link rel="icon" href="./img/isotipo.ico" />
    <link href="./styles/output.css" rel="stylesheet" />
    <meta name="description" content="Descubre nuestra amplia gama de productos para exportación, desde harinas y aceites vegetales hasta pescados y legumbres. Calidad, versatilidad y nutrición en cada opción. ¡Conoce más en CASPER!">
    <meta name="keywords" content="Exportación de alimentos, Harina de maíz, Sémola de trigo, Harina de soya, Aceites vegetales, Carne de pollo, Caballa, Bonito, Jurel, Calamar, Frijol negro, Arroz, Palta, Limón tahitiano, Azúcar, Café">

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
    <section class=" text-white bg-white bg-center relative bg-cover">
        <div class="mx-auto max-w-screen-xl relative px-4 py-10 lg:flex lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    <span class="text-orange-600">Productos</span>
                </h1>
            </div>
        </div>
    </section>

    <section class=" text-white bg-white bg-center relative bg-cover">
        <div class="mx-auto max-w-screen-xl relative px-4 py-10 grid gap-6">
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/ingrediente-harina-de-maiz.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Harina de maíz</h1>
                        <p class="mt-2 text-gray-600">
                            La harina de maíz es un ingrediente versátil que aporta numerosos beneficios alimenticios. Es una fuente de carbohidratos complejos que proporciona energía sostenida, siendo ideal para mantener niveles estables de glucosa en sangre. Además, al ser libre de gluten, es apta para personas con sensibilidad al gluten o celíacas. Rica en fibra, promueve la salud digestiva y contribuye a la sensación de saciedad. Su contenido en vitaminas del complejo B y minerales como hierro y magnesio la convierten en una opción nutricionalmente densa para fortalecer el sistema nervioso y el metabolismo. Con su versatilidad culinaria, desde la preparación de platos tradicionales hasta la elaboración de postres, la harina de maíz es un ingrediente fundamental para una dieta equilibrada y variada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/ingrediente-semola-trigo.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Sémola de trigo</h1>
                        <p class="mt-2 text-gray-600">
                            La sémola de trigo es un producto derivado del trigo, caracterizado por su molienda más gruesa que la harina convencional. Se produce a partir de granos de trigo despojados de su cáscara y se presenta en forma de polvo granulado, con un color blanco si proviene de trigo blando o amarillento si es de trigo duro. Se encuentra en diferentes grosores, desde la semolina más fina hasta la sémola gruesa. Es utilizada en diversas cocinas del mundo para elaborar una amplia variedad de platos, como pasta en Italia, porridge en Inglaterra, cuscús en el norte de África y rebozados crujientes. Su versatilidad culinaria y su valor nutricional la convierten en un ingrediente apreciado en muchas culturas gastronómicas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/harina-de-soya.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Harina de soya</h1>
                        <p class="mt-2 text-gray-600">
                            La harina de soya es un producto versátil y nutritivo obtenido al moler finamente granos de soya desgrasados. Es una excelente fuente de proteínas vegetales de alta calidad, fibra dietética y una amplia gama de vitaminas y minerales, incluyendo hierro, calcio y magnesio. Además, es naturalmente libre de gluten, lo que la hace apta para personas con sensibilidad al gluten o celíacas. Se utiliza en una variedad de formas en la cocina, como sustituto de la harina de trigo en productos horneados, en batidos, sopas y salsas para aumentar su valor nutricional, y como espesante en la industria alimentaria. Su versatilidad y su perfil nutricional la convierten en una opción popular en dietas vegetarianas y veganas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/aceites-vegetales.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Aceites vegetales</h1>
                        <p class="mt-2 text-gray-600">
                            El aceite vegetal es un producto culinario esencial y versátil que se obtiene de plantas como girasol, oliva, soya, coco y maíz, entre otras. Es una fuente importante de ácidos grasos insaturados, como ácido oleico y ácido linoleico, que son beneficiosos para la salud cardiovascular al reducir el colesterol LDL. Además, contiene antioxidantes como la vitamina E, que ayudan a proteger las células del daño oxidativo. Su uso en la cocina abarca desde freír y saltear hasta hornear y aderezar ensaladas, proporcionando un sabor característico a los platos. Además, se utiliza en la industria alimentaria, cosmética y farmacéutica debido a sus propiedades nutritivas y emolientes para la piel y el cabello. Es importante elegir aceites vegetales prensados en frío y de alta calidad para maximizar sus beneficios nutricionales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/maduracion-de-carne-de-pollo-828x548.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Carne de pollo</h1>
                        <p class="mt-2 text-gray-600">
                            La carne de pollo ofrece una amplia gama de beneficios para la salud y la nutrición. Es una excelente fuente de proteínas magras, que son esenciales para el crecimiento y reparación de los tejidos musculares, así como para mantener un sistema inmunológico fuerte. Además, es baja en grasas saturadas y calorías, lo que la convierte en una opción saludable para aquellos que buscan controlar su peso o mantener una dieta equilibrada. Su contenido de vitaminas del grupo B, como la niacina y la vitamina B6, contribuye al metabolismo energético y al funcionamiento adecuado del sistema nervioso. También es rica en minerales como el hierro y el zinc, importantes para la formación de glóbulos rojos y el sistema inmunológico, respectivamente. La versatilidad de la carne de pollo en la cocina permite una variedad de preparaciones sabrosas y saludables, lo que la convierte en un elemento básico en muchas dietas en todo el mundo.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/f.elconfidencial.com_original_98e_11e_faf_98e11efaf9aa654e34afb762e5341619.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Caballa</h1>
                        <p class="mt-2 text-gray-600">
                            La caballa es un pescado azul rico en ácidos grasos omega-3, que son beneficiosos para la salud cardiovascular y cerebral. Además, es una excelente fuente de proteínas de alta calidad, vitaminas del grupo B (como B12 y niacina) y minerales como el hierro, el magnesio y el fósforo. Consumir caballa regularmente puede ayudar a reducir el riesgo de enfermedades cardiovasculares, mejorar la función cerebral y mantener huesos y músculos fuertes. Su versatilidad en la cocina, ya sea a la parrilla, al horno, en conserva o ahumada, la convierte en una opción deliciosa y nutritiva para incluir en una dieta equilibrada.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/bonito.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Bonito</h1>
                        <p class="mt-2 text-gray-600">
                            El bonito es un tipo de pescado azul que ofrece una serie de beneficios para la salud. Es una excelente fuente de proteínas magras, que son esenciales para el crecimiento y reparación de los tejidos musculares. Además, es rico en ácidos grasos omega-3, que son conocidos por sus propiedades antiinflamatorias y beneficios para la salud cardiovascular. Consumir bonito regularmente puede ayudar a reducir el riesgo de enfermedades cardíacas, mejorar la función cerebral y mantener una piel saludable. También es una buena fuente de vitaminas del complejo B, como la niacina y la vitamina B12, así como de minerales como el potasio y el magnesio. Su delicioso sabor y su versatilidad en la cocina lo convierten en una opción popular para incluir en una dieta equilibrada y nutritiva.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/images.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Jurel</h1>
                        <p class="mt-2 text-gray-600">
                            El jurel, también conocido como chicharro, es un pescado azul que ofrece una serie de beneficios para la salud. Es una excelente fuente de proteínas de alta calidad, esenciales para el crecimiento y reparación de los tejidos musculares. Además, es rico en ácidos grasos omega-3, que son conocidos por sus propiedades antiinflamatorias y beneficios para la salud cardiovascular. Consumir jurel regularmente puede ayudar a reducir el riesgo de enfermedades cardíacas, mejorar la función cerebral y mantener una piel saludable. También es una buena fuente de vitaminas del complejo B, como la niacina y la vitamina B12, así como de minerales como el hierro y el fósforo. Su sabor distintivo y su versatilidad en la cocina lo convierten en una opción popular para incluir en una dieta equilibrada y nutritiva.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/calamar1.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Calamar</h1>
                        <p class="mt-2 text-gray-600">
                            El calamar es un marisco versátil y nutritivo que ofrece una serie de beneficios para la salud. Es una excelente fuente de proteínas magras, esenciales para el crecimiento y reparación de los tejidos musculares. Además, es bajo en calorías y grasas saturadas, lo que lo convierte en una opción saludable para incluir en una dieta equilibrada. El calamar también es rico en minerales como el zinc, el hierro y el magnesio, así como en vitaminas del complejo B, como la vitamina B12 y la niacina. Consumir calamar regularmente puede ayudar a mantener la salud cardiovascular, mejorar la función cerebral y fortalecer el sistema inmunológico. Su sabor suave y su textura tierna lo hacen adecuado para una variedad de preparaciones culinarias, desde frito y a la plancha hasta en ensaladas y guisos.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/Frijol.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Frijol negro</h1>
                        <p class="mt-2 text-gray-600">
                            El frijol negro es una legumbre nutritiva y versátil que ofrece una serie de beneficios para la salud. Es una excelente fuente de proteínas vegetales, fibra dietética y una variedad de vitaminas y minerales, incluyendo hierro, magnesio, fósforo y folato. Consumir frijoles negros regularmente puede ayudar a controlar los niveles de azúcar en sangre, mejorar la salud digestiva y promover la sensación de saciedad, lo que puede ser beneficioso para el control del peso. Además, su contenido en fibra puede ayudar a reducir el riesgo de enfermedades cardíacas y mejorar la salud del colon. Los frijoles negros son una opción deliciosa y versátil en la cocina, ya sea en guisos, sopas, ensaladas, tacos o como acompañamiento de platos principales.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/images\ \(1\).webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Arroz</h1>
                        <p class="mt-2 text-gray-600">
                            El arroz es un alimento básico en la dieta de muchas culturas alrededor del mundo y ofrece una serie de beneficios para la salud. Es una excelente fuente de carbohidratos, que son la principal fuente de energía para el cuerpo. Además, el arroz integral es rico en fibra dietética, lo que promueve la salud digestiva y ayuda a mantener los niveles de azúcar en sangre estables. El arroz también es bajo en grasas y colesterol, lo que lo convierte en una opción saludable para incluir en una dieta equilibrada. Es una buena fuente de vitaminas y minerales, como el hierro, el magnesio y el zinc. Consumir arroz regularmente puede ayudar a reducir el riesgo de enfermedades cardíacas, mejorar la salud digestiva y promover la sensación de saciedad. Además, su versatilidad en la cocina lo convierte en un ingrediente básico para una amplia variedad de platos, desde acompañamientos simples hasta platos principales elaborados.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/Palta-2-1024x682.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Palta</h1>
                        <p class="mt-2 text-gray-600">
                            La palta, también conocida como aguacate, es una fruta deliciosa y nutritiva que ofrece una serie de beneficios para la salud. Es rica en grasas saludables, principalmente ácidos grasos monoinsaturados, que son beneficiosos para la salud cardiovascular y pueden ayudar a reducir el colesterol LDL (colesterol "malo"). Además, la palta es una excelente fuente de fibra dietética, lo que promueve la salud digestiva y ayuda a mantener la sensación de saciedad. También es rica en vitaminas y minerales, incluyendo vitamina K, vitamina E, potasio y ácido fólico. Consumir palta regularmente puede ayudar a mejorar la salud del corazón, promover la salud de la piel y el cabello, y apoyar el sistema inmunológico. Su cremosa textura y su sabor suave la hacen una adición deliciosa a una variedad de platos, como ensaladas, sándwiches, batidos y guacamole.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/limon-tahiti-sera-el-unico-citrico-de-peru-que-cerraria-sus--28467.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Limón tahitiano</h1>
                        <p class="mt-2 text-gray-600">
                            El limón es una fruta cítrica ampliamente conocida por sus numerosos beneficios para la salud. Es una excelente fuente de vitamina C, un antioxidante que ayuda a fortalecer el sistema inmunológico y a proteger contra enfermedades. Además, el limón es bajo en calorías y contiene fibra, lo que lo convierte en una opción saludable para agregar sabor y nutrición a las comidas y bebidas. Consumir limón regularmente puede ayudar a mejorar la digestión, promover la salud de la piel, y contribuir a la pérdida de peso gracias a su efecto diurético y desintoxicante. Además, su versatilidad en la cocina lo convierte en un ingrediente básico en una variedad de platos, desde aderezos para ensaladas hasta marinadas para carnes y pescados, así como en bebidas refrescantes como limonadas y tés.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/azucar.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Azúcar</h1>
                        <p class="mt-2 text-gray-600">
                            El azúcar es un carbohidrato simple que proporciona energía al cuerpo, pero su consumo en exceso puede tener efectos negativos para la salud. Aunque es una fuente rápida de energía, el consumo excesivo de azúcar refinado puede contribuir al aumento de peso, la obesidad y el riesgo de enfermedades crónicas como la diabetes tipo 2 y las enfermedades cardíacas. Además, el azúcar añadido puede estar presente en muchos alimentos procesados y bebidas, lo que puede llevar a un consumo excesivo sin darnos cuenta. Es importante moderar el consumo de azúcar y optar por fuentes de carbohidratos más saludables, como frutas, verduras y granos enteros. Cuando sea necesario endulzar, opciones más saludables incluyen el uso moderado de edulcorantes naturales como la miel, el jarabe de arce o los edulcorantes artificiales en cantidades limitadas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('./img/cafe.webp');">
                        <!-- Espacio para la imagen del producto -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Café</h1>
                        <p class="mt-2 text-gray-600">
                            El café es una bebida popular que ofrece una serie de beneficios para la salud cuando se consume con moderación. Es una fuente rica en antioxidantes, como los ácidos clorogénicos, que pueden ayudar a proteger las células del daño oxidativo y reducir el riesgo de enfermedades crónicas como las enfermedades cardíacas y el cáncer. Además, la cafeína presente en el café puede mejorar el estado de alerta, la concentración y el rendimiento mental, así como aumentar temporalmente el metabolismo y la quema de grasas. Consumir café con moderación también se ha asociado con un menor riesgo de enfermedades neurodegenerativas, como el Alzheimer y el Parkinson. Sin embargo, es importante tener en cuenta que el exceso de café puede causar efectos secundarios como nerviosismo, insomnio, e irritabilidad en algunas personas. Por lo tanto, es recomendable limitar el consumo de café a cantidades moderadas, generalmente de 1 a 3 tazas al día, y evitar añadir excesivo azúcar o crema para mantener sus beneficios para la salud.
                        </p>
                    </div>
                </div>
            </div>



        </div>
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