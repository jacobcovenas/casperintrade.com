<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Services</title>
    <link rel="icon" href="../img/isotipo.ico" />
    <link href="../styles/output.css" rel="stylesheet" />
    <meta name="description" content="Découvrez comment renforcer vos opérations commerciales avec l'Afrique grâce à Web Casper. Nous proposons des solutions intégrales et personnalisées, de la logistique à l'intermédiation avec des courtiers, des compagnies maritimes et des agences douanières. Faites confiance à notre expérience pour élever votre commerce international au niveau supérieur.">
    <meta name="keywords" content="commerce international, Afrique, Web Casper, importations, exportations, solutions intégrales, logistique, intermédiation avec des courtiers, compagnies maritimes, agences douanières, gestion douanière, collecte et rapports, protection du crédit, financement">
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

                                        <button id="menuButton1" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20" name="boton de idiomas">

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

    <!-- Sección Hero -->
    <section class="text-white bg-gray-100 bg-center relative bg-cover" style="background-image: url(../img/concepto-control-calidad-estandar-m.webp);">
        <div class="mx-auto max-w-screen-xl relative px-4 py-32 lg:flex lg:h-[90vh] lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    <span class="text-orange-600">Boostez</span> vos opérations commerciales avec <span class="text-orange-600">l'Afrique</span>
                </h1>
                <p class="mt-4 max-w-xl sm:text-xl">
                    Découvrez comment Web Casper peut simplifier et optimiser vos importations et exportations vers l'Afrique. Avec notre expérience et notre réseau de contacts sur le continent, nous vous proposons des solutions complètes et personnalisées pour stimuler la croissance de votre entreprise. Faites-nous confiance pour élever votre commerce international au niveau supérieur.
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
                        <h2 class="md:text-3xl text-gray-800">
                            Solutions intégrales pour le commerce international avec l'Afrique
                        </h2>

                        <p class="hidden sm:mt-4 sm:block">
                            Chez Web Casper, nous nous spécialisons dans l'offre d'une large gamme de services conçus pour répondre à tous vos besoins dans le commerce avec le continent africain. De la gestion logistique à l'intermédiation avec les courtiers, les compagnies maritimes et les agences douanières, notre équipe hautement qualifiée est là pour vous apporter le soutien et l'expérience dont vous avez besoin pour réussir en Afrique.
                        </p>

                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                    <img alt="Navire de charge plein de conteneurs" src="../img/aerial-view-cargo-ship-with-cargo-container-sea.webp" class="h-40 w-full object-cover sm:h-56 md:h-full" />

                    <img alt="Avion de charge, camion de charge, cartes" src="../img/supply-chain-representation-still-life.webp" class="h-40 w-full object-cover sm:h-56 md:h-full" />
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
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Logistique</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Notre service de logistique est conçu pour éliminer les complexités du commerce entre l'Amérique latine et l'Afrique, assurant un flux continu de vos marchandises. Nous sommes fiers de notre capacité à personnaliser des solutions logistiques qui non seulement répondent, mais dépassent les attentes de nos clients, couvrant le transport, le stockage et la gestion douanière. Avec notre équipe d'experts et notre technologie de pointe, nous garantissons que votre cargaison arrive à destination en toute sécurité, efficacement et dans les délais convenus, facilitant ainsi un commerce international fluide et fiable.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Intermédiation avec des courtiers</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Notre service d'intermédiation avec des courtiers est essentiel pour naviguer avec succès dans les complexités du marché africain. Nous donnons accès à un réseau sélectionné de courtiers fiables et expérimentés, garantissant que vos transactions commerciales soient gérées avec le plus grand professionnalisme et efficacité. Ce service assure que nos clients obtiennent les meilleures conditions du marché, facilitant la négociation et l'exécution de contrats de manière transparente et sécurisée, maximisant ainsi leurs opportunités commerciales en Afrique.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Compagnies maritimes</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Nous comprenons l'importance cruciale de choisir la bonne compagnie maritime pour le succès de vos opérations d'exportation et d'importation vers et depuis l'Afrique. C'est pourquoi nous collaborons étroitement avec un large éventail de compagnies maritimes de renom, garantissant flexibilité, efficacité et tarifs compétitifs pour le transport maritime de vos marchandises. Notre connaissance approfondie du secteur et nos solides relations avec ces compagnies nous permettent d'offrir des solutions logistiques maritimes adaptées aux besoins spécifiques de chaque client, garantissant la livraison sûre et ponctuelle de leurs produits.
                    </p>
                </blockquote>
                <blockquote class="p-4">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-2xl font-medium text-red-900">Agences douanières</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Notre service d'agences douanières est spécialement conçu pour simplifier et accélérer les procédures douanières dans les importations et exportations entre l'Amérique latine et l'Afrique. Nous disposons d'un réseau d'agences douanières fiables et expérimentées, garantissant le respect de toutes les réglementations et exigences légales dans chaque pays, minimisant ainsi les risques de retards ou de pénalités. Ce service complet assure une gestion douanière efficace et transparente, permettant à nos clients de se concentrer sur l'essentiel : la croissance de leur entreprise sur de nouveaux marchés.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 md:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Collecte et rapports</h2>

                <p class=" 2 md:mt-4">
                    Nous comprenons l'importance d'une gestion efficace de la collecte et des rapports pour maintenir le contrôle financier et prendre des décisions éclairées. C'est pourquoi nous proposons des services complets de collecte et de rapports conçus pour simplifier et optimiser vos processus financiers. De la facturation à la gestion des comptes débiteurs en passant par la génération de rapports financiers personnalisés, notre équipe d'experts est là pour vous aider à maintenir une trésorerie saine et une vision claire de la santé financière de votre entreprise. Faites-nous confiance pour vous fournir les outils et les connaissances dont vous avez besoin pour gérer efficacement votre entreprise et prendre des décisions éclairées pour l'avenir.
                </p>

            </div>
        </div>
        <img alt="homme d'affaires vérifiant des documents" src="../img/businessman-checking-documents-table.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 order-last lg:order-first">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Protection du crédit</h2>

                <p class=" 2 md:mt-4">
                    Nous comprenons l'importance de protéger vos actifs et d'assurer le succès de vos opérations commerciales. C'est pourquoi nous proposons des solutions complètes de protection du crédit conçues pour atténuer le risque de défauts de paiement et de pertes financières. Notre équipe d'experts en gestion des risques travaille diligemment pour évaluer et surveiller la solvabilité de vos clients, identifier les risques potentiels et prendre des mesures proactives pour protéger votre crédit. Que ce soit par le biais d'assurances-crédit, de garanties financières ou de stratégies de recouvrement efficaces, nous nous engageons à protéger vos intérêts et à garantir la santé financière de votre entreprise.
                </p>

            </div>
        </div>
        <img alt="Personne se serrant la main après une réunion d'affaires" src="../img/business-people-shaking-hands-finishing-up-meeting.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!--  -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-4 md:p-12 lg:px-16 lg:py-24 md:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Financement</h2>

                <p class=" 2 md:mt-4">
                    Nous comprenons que le financement adéquat est crucial pour le succès de vos opérations commerciales. C'est pourquoi nous proposons des solutions de financement flexibles conçues spécifiquement pour vos besoins. Que vous recherchiez du capital pour développer vos activités, financer une nouvelle initiative ou couvrir les frais d'exploitation, notre équipe d'experts est là pour vous aider à trouver la meilleure option financière. Nous travaillons en étroite collaboration avec une variété de partenaires financiers fiables pour vous offrir des taux compétitifs et des conditions flexibles qui s'adaptent à votre situation unique. Faites-nous confiance pour vous fournir le soutien financier dont vous avez besoin pour atteindre vos objectifs commerciaux.
                </p>

            </div>
        </div>
        <img alt="Personnes analysant des graphiques financiers" src="../img/people-analyzing-checking-finance-graphs-office.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
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