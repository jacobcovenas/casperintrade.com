<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Accueil</title>
    <link rel="icon" href="../img/isotipo.ico" />
    <link href="../styles/output.css" rel="stylesheet" />
    <meta name="description" content="Votre partenaire en commerce international avec l'Afrique. Nous connectons des continents pour renforcer votre entreprise avec des solutions dynamiques, une expertise éprouvée et des services fiables. Découvrez comment nous boostons le succès de vos opérations dès aujourd'hui.">
    <meta name="keywords" content="commerce international, Afrique, Web Casper, partenaire commercial, connectivité, solutions dynamiques, expertise éprouvée, services fiables, logistique, intermédiation, conseil douanier, succès commercial">
</head>

<body>

    <!-- Navegacion telefono -->
    <ul id="menu" class="bg-white lg:hidden fixed py-4 transition top-0 left-0 w-60 z-20 h-screen -translate-x-60">
        <li>
            <a href="./accueil.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Accueil</span>
            </a>
        </li>
        <li>
            <a href="./nous.php" class="btn-nav-phone">
                <span class="text-sm font-medium">À propos de nous</span>
            </a>
        </li>
        <li>
            <a href="./partenaires.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Partenaires commerciaux</span>
            </a>
        </li>
        <li>
            <a href="./services.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Services</span>
            </a>
        </li>
        <li>
            <a href="./produits.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Produits</span>
            </a>
        </li>
        <li>
            <a href="./contact.php" class="btn-nav-phone">
                <span class="text-sm font-medium">Contact</span>
            </a>
        </li>
        <li class="p-4">
            <div class="relative">
                <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                    <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                        Français
                    </a>

                    <button id="menuButton" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>

                <div id="menuDropdown" class="hidden absolute end-0 z-20 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg" role="menu">
                    <div class="p-2">
                        <a href="./accueil.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Français <img class="w-6 h-6" src="../img/francia.webp" alt="drapeau de la France" />
                        </a>
                        <a href="../english/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Anglais <img class="w-6 h-6" src="../img/reino-unido.webp" alt="drapeau du Royaume-Uni" />
                        </a>
                        <a href="../index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                            Espagnol <img class="w-6 h-6" src="../img/espana.webp" alt="drapeau de l'Espagne" />
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
                        <img alt="CASPER logo" src="../img/Logo frances.webp" class="w-80 h-auto" height="200" width="200" />
                    </a>
                </div>

                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden lg:block">
                        <ul class="flex items-center gap-10 text-sm text-white uppercase">
                            <li>
                                <a class="link-nav" href="./accueil.php">
                                    Accueil
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./nous.php">
                                    À propos de nous
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./partenaires.php">
                                    Partenaires commerciaux
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./services.php">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./produits.php">
                                    Produits
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./contact.php">
                                    Contact
                                </a>
                            </li>
                            <li>
                                <div class="relative">
                                    <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                                        <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                            Français
                                        </a>

                                        <button id="menuButton1" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20">

                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>

                                    <div id="menuDropdown1" class="hidden z-60 absolute end-0 mt-2 w-56 rounded-md border border-gray-100 bg-white shadow-lg" role="menu">
                                        <div class="p-2">
                                            <a href="../index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Espagnol <img class="w-6 h-6" src="../img/espana.webp" alt="bandera de España" />
                                            </a>
                                            <a href="../english/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Anglais <img class="w-6 h-6" src="../img/reino-unido.webp" alt="bandera de Gran Bretaña" />
                                            </a>
                                            <a href="./accueil.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
                                                Français <img class="w-6 h-6" src="../img/francia.webp" alt="bandera de Francia" />
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

    <!-- Section Héros -->
    <section class="bg-gray-100 bg-center relative bg-cover" style="background-image: url(../img/africa1.webp);">
        <div class="mx-auto max-w-screen-xl relative px-4 py-32 lg:flex lg:h-[90vh] lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    Ton <span class="text-orange-600">partenaire en commerce international</span> avec <span class="text-orange-600">l'Afrique</span>
                </h1>
                <p class="mt-4 max-w-xl sm:text-xl text-gray-700">
                    Nous relions les continents pour renforcer votre entreprise. Avec notre expérience et notre réseau de contacts en Afrique, nous facilitons vos opérations d'importation et d'exportation. Découvrez comment nous pouvons dynamiser votre succès commercial dès aujourd'hui.
                </p>
                <div class="mt-8 flex flex-wrap justify-start">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-white px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-red-500" href="./services.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            Explorez nos solutions dès maintenant !
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 1 -->
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h2 class="text-orange-600 text-center w-full block">À propos de nous...</h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Dynamique</p>
                        </div>
                    </div>
                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nous embrassons l'agilité et l'innovation à chaque étape du processus. Notre approche dynamique nous permet de nous adapter rapidement aux demandes changeantes du marché, garantissant des solutions flexibles et efficaces pour votre entreprise. Faites confiance à notre capacité à maintenir le rythme et à amener votre commerce international avec l'Afrique au niveau supérieur.
                    </p>
                </blockquote>
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Expert</p>
                        </div>
                    </div>
                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nous sommes de véritables experts en commerce international avec l'Afrique. Forts de nombreuses années d'expérience et d'une connaissance approfondie du marché africain, nous proposons des solutions personnalisées et stratégiques pour chaque client. Notre équipe hautement qualifiée est là pour vous fournir des conseils d'experts et garantir le succès de vos opérations commerciales en Afrique.
                    </p>
                </blockquote>
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Fiable</p>
                        </div>
                    </div>
                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        La fiabilité est notre pierre angulaire. Nous nous engageons à offrir un service transparent, sûr et fiable à chaque étape de votre voyage commercial avec l'Afrique. De la gestion logistique au dédouanement, vous pouvez compter sur nous pour répondre à vos attentes et garantir le succès de vos opérations. Avec Casper International Trading, vous avez un partenaire sur lequel vous pouvez compter pleinement.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Section 2 -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24 lg:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Experts en commerce international avec l'Afrique</h2>
                <p class="mt-2 md:mt-4">
                    Nous nous consacrons à simplifier et à optimiser vos opérations commerciales avec l'Afrique. Forts de plus de 20 ans d'expérience et d'une équipe hautement qualifiée, nous proposons des solutions complètes en logistique, intermédiation et conseil douanier. Notre engagement est de vous fournir un service exceptionnel allant de la gestion logistique à l'expertise en commerce international, facilitant ainsi votre accès au marché africain.
                </p>
                <div class="mt-4 md:mt-8">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-yellow-400 px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-green-400" href="./nous.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            Découvrez-en plus sur notre histoire et nos valeurs
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <img alt="Navire de fret dans le port" src="../img/vista-aerea-buque-carga-contenedor-carga-puerto.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!-- Section 3 -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Promouvoir le succès de vos opérations commerciales</h2>
                <p class="mt-2 md:mt-4">
                    Nous disposons d'une équipe exceptionnellement talentueuse et dévouée qui s'engage pour votre succès dans le commerce international avec l'Afrique. Nos experts sont hautement qualifiés et possèdent une vaste expérience dans différents domaines clés, de la logistique et de la gestion de la chaîne d'approvisionnement à l'intermédiation avec les courtiers et au conseil douanier spécialisé sur le marché africain.
                </p>
                <div class="mt-4 md:mt-8">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-yellow-400 px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-green-400" href="./services.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>
                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            Découvrez-en plus sur nos services
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <img alt="Personnes d'affaires se serrant la main" src="../img/closeup-shot-business-handshake-cropped-shot-two-people-wearing-formal-suits-shaking-hands-business-handshake-concept.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!-- Footer -->
    <footer class="bg-red-900">
        <div class="mx-auto max-w-5xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="flex justify-center text-teal-600">
                <a class="flex justify-center items-center" href="./index.php">
                    <img alt="Logo de CASPER" src="../img/logo frances blanco.webp" class="w-80 h-auto" height="200" width="200" />
                </a>
            </div>
            <p class="mx-auto mt-6 max-w-md text-center leading-relaxed text-gray-200">
                © 2024 CASPER INTERNATIONAL TRADE S.A.C.S. Tous droits réservés. Tous les noms de sociétés, noms de produits et logos inclus ici peuvent être des marques commerciales déposées ou des marques de service de leurs propriétaires respectifs.
            </p>
            <ul class="mt-12 flex flex-wrap justify-center gap-6 md:gap-8 lg:gap-12">
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./accueil.php"> Accueil </a>
                </li>
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./nous.php"> À propos de nous </a>
                </li>
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./partenaires.php"> Partenaires Commerciaux </a>
                </li>
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./services.php"> Services </a>
                </li>
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./produits.php"> Produits </a>
                </li>
                <li>
                    <a class="text-gray-200 transition hover:text-gray-200/75" href="./contact.php"> Contact </a>
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