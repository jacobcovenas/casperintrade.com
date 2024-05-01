<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Produits</title>
    <link rel="icon" href="../img/isotipo.ico" />
    <link href="../styles/output.css" rel="stylesheet" />
    <meta name="description" content="Découvrez notre large gamme de produits d'exportation, des farines et des huiles végétales aux poissons et aux légumineuses. Qualité, polyvalence et nutrition à chaque option. Découvrez-en plus chez CASPER !">
    <meta name="keywords" content="Exportation d'aliments, Farine de maïs, Semoule de blé, Farine de soja, Huiles végétales, Viande de poulet, Maquereau, Thon, Chinchard, Calmar, Haricot noir, Riz, Avocat, Citron vert tahitien, Sucre, Café">
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

    <!-- Seccion Hero -->
    <section class=" text-white bg-white bg-center relative bg-cover">
        <div class="mx-auto max-w-screen-xl relative px-4 py-10 lg:flex lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    <span class="text-orange-600">Produits</span>
                </h1>
            </div>
        </div>
    </section>

    <section class=" text-white bg-white bg-center relative bg-cover">
        <div class="mx-auto max-w-screen-xl relative px-4 py-10 grid gap-6">
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/ingrediente-harina-de-maiz.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Farine de maïs</h1>
                        <p class="mt-2 text-gray-600">
                            La farine de maïs est un ingrédient polyvalent qui apporte de nombreux avantages alimentaires. C'est une source de glucides complexes qui fournissent une énergie soutenue, idéale pour maintenir des niveaux stables de glucose dans le sang. De plus, étant sans gluten, elle convient aux personnes sensibles au gluten ou atteintes de la maladie cœliaque. Riche en fibres, elle favorise la santé digestive et contribue à la sensation de satiété. Sa teneur en vitamines du complexe B et en minéraux tels que le fer et le magnésium en fait une option nutritionnellement dense pour renforcer le système nerveux et le métabolisme. Avec sa polyvalence culinaire, de la préparation de plats traditionnels à la réalisation de desserts, la farine de maïs est un ingrédient essentiel pour une alimentation équilibrée et variée.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/ingrediente-semola-trigo.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Semoule de blé</h1>
                        <p class="mt-2 text-gray-600">
                            La semoule de blé est un produit dérivé du blé, caractérisé par sa mouture plus grossière que la farine conventionnelle. Elle est produite à partir de grains de blé débarrassés de leur enveloppe et se présente sous forme de poudre granuleuse, avec une couleur blanche si elle provient du blé tendre ou jaunâtre si elle est issue du blé dur. Elle se trouve sous différentes épaisseurs, de la semoule la plus fine à la semoule la plus grossière. Elle est utilisée dans diverses cuisines du monde pour préparer une grande variété de plats, comme les pâtes en Italie, la bouillie en Angleterre, le couscous en Afrique du Nord et les panures croustillantes. Sa polyvalence culinaire et sa valeur nutritionnelle en font un ingrédient apprécié dans de nombreuses cultures gastronomiques.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/harina-de-soya.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Farine de soja</h1>
                        <p class="mt-2 text-gray-600">
                            La farine de soja est un produit polyvalent et nutritif obtenu en broyant finement des grains de soja dégraissés. C'est une excellente source de protéines végétales de haute qualité, de fibres alimentaires et d'une large gamme de vitamines et de minéraux, notamment le fer, le calcium et le magnésium. De plus, elle est naturellement sans gluten, ce qui la rend adaptée aux personnes sensibles au gluten ou atteintes de la maladie cœliaque. Elle est utilisée de différentes manières en cuisine, comme substitut de la farine de blé dans les produits de boulangerie, dans les smoothies, les soupes et les sauces pour augmenter leur valeur nutritionnelle, et comme épaississant dans l'industrie alimentaire. Sa polyvalence et son profil nutritionnel en font un choix populaire dans les régimes végétariens et végétaliens.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/aceites-vegetales.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Huiles végétales</h1>
                        <p class="mt-2 text-gray-600">
                            L'huile végétale est un produit culinaire essentiel et polyvalent obtenue à partir de plantes telles que le tournesol, l'olive, le soja, la noix de coco et le maïs, entre autres. C'est une source importante d'acides gras insaturés, tels que l'acide oléique et l'acide linoléique, qui sont bénéfiques pour la santé cardiovasculaire en réduisant le cholestérol LDL. De plus, elle contient des antioxydants comme la vitamine E, qui aident à protéger les cellules contre les dommages oxydatifs. Son utilisation en cuisine va de la friture et du sauté à la cuisson au four et à l'assaisonnement des salades, offrant une saveur caractéristique aux plats. De plus, elle est utilisée dans l'industrie alimentaire, cosmétique et pharmaceutique en raison de ses propriétés nutritives et émollientes pour la peau et les cheveux. Il est important de choisir des huiles végétales pressées à froid et de haute qualité pour maximiser leurs bienfaits nutritionnels.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/maduracion-de-carne-de-pollo-828x548.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Viande de poulet</h1>
                        <p class="mt-2 text-gray-600">
                            La viande de poulet offre une large gamme d'avantages pour la santé et la nutrition. C'est une excellente source de protéines maigres, essentielles à la croissance et à la réparation des tissus musculaires, ainsi qu'au maintien d'un système immunitaire fort. De plus, elle est faible en gras saturés et en calories, ce qui en fait un choix sain pour ceux qui cherchent à contrôler leur poids ou à maintenir un régime équilibré. Sa teneur en vitamines du groupe B, comme la niacine et la vitamine B6, contribue au métabolisme énergétique et au bon fonctionnement du système nerveux. Elle est également riche en minéraux tels que le fer et le zinc, importants pour la formation des globules rouges et le système immunitaire, respectivement. La polyvalence de la viande de poulet en cuisine permet une variété de préparations savoureuses et saines, ce qui en fait un élément de base dans de nombreux régimes alimentaires à travers le monde.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/f.elconfidencial.com_original_98e_11e_faf_98e11efaf9aa654e34afb762e5341619.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Maquereau</h1>
                        <p class="mt-2 text-gray-600">
                            Le maquereau est un poisson bleu riche en acides gras oméga-3, bénéfiques pour la santé cardiovasculaire et cérébrale. De plus, c'est une excellente source de protéines de haute qualité, de vitamines du groupe B (comme la B12 et la niacine) et de minéraux tels que le fer, le magnésium et le phosphore. Consommer du maquereau régulièrement peut aider à réduire le risque de maladies cardiovasculaires, à améliorer la fonction cérébrale et à maintenir des os et des muscles forts. Sa polyvalence en cuisine, que ce soit grillé, au four, en conserve ou fumé, en fait une option délicieuse et nutritive à inclure dans un régime équilibré.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/bonito.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Bonite</h1>
                        <p class="mt-2 text-gray-600">
                            Le bonite est un type de poisson bleu qui offre plusieurs avantages pour la santé. C'est une excellente source de protéines maigres, essentielles à la croissance et à la réparation des tissus musculaires. De plus, il est riche en acides gras oméga-3, connus pour leurs propriétés anti-inflammatoires et leurs bienfaits pour la santé cardiovasculaire. Consommer du bonite régulièrement peut aider à réduire le risque de maladies cardiaques, à améliorer la fonction cérébrale et à maintenir une peau saine. Il est également une bonne source de vitamines du complexe B, comme la niacine et la vitamine B12, ainsi que de minéraux tels que le potassium et le magnésium. Son goût délicieux et sa polyvalence en cuisine en font un choix populaire pour inclure dans un régime équilibré et nutritif.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/images.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Chinchard</h1>
                        <p class="mt-2 text-gray-600">
                            Le chinchard, également connu sous le nom de chicharro, est un poisson bleu qui offre plusieurs avantages pour la santé. C'est une excellente source de protéines de haute qualité, essentielles à la croissance et à la réparation des tissus musculaires. De plus, il est riche en acides gras oméga-3, connus pour leurs propriétés anti-inflammatoires et leurs bienfaits pour la santé cardiovasculaire. Consommer du chinchard régulièrement peut aider à réduire le risque de maladies cardiaques, à améliorer la fonction cérébrale et à maintenir une peau saine. Il est également une bonne source de vitamines du complexe B, comme la niacine et la vitamine B12, ainsi que de minéraux tels que le fer et le phosphore. Son goût distinctif et sa polyvalence en cuisine en font un choix populaire pour inclure dans un régime équilibré et nutritif.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/calamar1.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Calamar</h1>
                        <p class="mt-2 text-gray-600">
                            Le calamar est un fruit de mer polyvalent et nutritif qui offre plusieurs avantages pour la santé. C'est une excellente source de protéines maigres, essentielles à la croissance et à la réparation des tissus musculaires. De plus, il est faible en calories et en graisses saturées, ce qui en fait un choix sain pour inclure dans un régime équilibré. Le calamar est également riche en minéraux tels que le zinc, le fer et le magnésium, ainsi qu'en vitamines du complexe B, comme la vitamine B12 et la niacine. Consommer du calamar régulièrement peut aider à maintenir la santé cardiovasculaire, à améliorer la fonction cérébrale et à renforcer le système immunitaire. Son goût doux et sa texture tendre en font un ingrédient adapté à une variété de préparations culinaires, de la friture à la plancha en passant par les salades et les ragoûts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/Frijol.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Haricot noir</h1>
                        <p class="mt-2 text-gray-600">
                            Le haricot noir est une légumineuse nutritive et polyvalente qui offre une gamme de bienfaits pour la santé. C'est une excellente source de protéines végétales, de fibres alimentaires et d'une variété de vitamines et de minéraux, notamment le fer, le magnésium, le phosphore et l'acide folique. Consommer régulièrement des haricots noirs peut aider à contrôler les niveaux de sucre dans le sang, améliorer la santé digestive et favoriser la sensation de satiété, ce qui peut être bénéfique pour la gestion du poids. De plus, leur teneur en fibres peut aider à réduire le risque de maladies cardiaques et à améliorer la santé du côlon. Les haricots noirs sont une option délicieuse et polyvalente en cuisine, que ce soit dans les ragoûts, les soupes, les salades, les tacos ou en accompagnement des plats principaux.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/images\ \(1\).webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Riz</h1>
                        <p class="mt-2 text-gray-600">
                            Le riz est un aliment de base dans l'alimentation de nombreuses cultures à travers le monde et offre une gamme de bienfaits pour la santé. C'est une excellente source de glucides, qui sont la principale source d'énergie pour le corps. De plus, le riz complet est riche en fibres alimentaires, ce qui favorise la santé digestive et aide à maintenir des niveaux de sucre dans le sang stables. Le riz est également faible en matières grasses et en cholestérol, ce qui en fait une option saine à inclure dans une alimentation équilibrée. C'est une bonne source de vitamines et de minéraux, tels que le fer, le magnésium et le zinc. Consommer du riz régulièrement peut aider à réduire le risque de maladies cardiaques, améliorer la santé digestive et favoriser la sensation de satiété. De plus, sa polyvalence en cuisine en fait un ingrédient de base pour une grande variété de plats, des accompagnements simples aux plats principaux élaborés.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/Palta-2-1024x682.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Avocat</h1>
                        <p class="mt-2 text-gray-600">
                            L'avocat, également connu sous le nom d'avocat, est un fruit délicieux et nutritif qui offre une gamme de bienfaits pour la santé. Il est riche en graisses saines, principalement en acides gras monoinsaturés, qui sont bénéfiques pour la santé cardiovasculaire et peuvent aider à réduire le cholestérol LDL (« mauvais » cholestérol). De plus, l'avocat est une excellente source de fibres alimentaires, ce qui favorise la santé digestive et aide à maintenir une sensation de satiété. Il est également riche en vitamines et minéraux, notamment la vitamine K, la vitamine E, le potassium et l'acide folique. Consommer régulièrement de l'avocat peut aider à améliorer la santé cardiaque, à promouvoir la santé de la peau et des cheveux, et à soutenir le système immunitaire. Sa texture crémeuse et son goût doux en font un ajout délicieux à une variété de plats, tels que les salades, les sandwiches, les smoothies et le guacamole.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/limon-tahiti-sera-el-unico-citrico-de-peru-que-cerraria-sus--28467.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Citron tahitien</h1>
                        <p class="mt-2 text-gray-600">
                            Le citron est un agrume largement connu pour ses nombreux bienfaits pour la santé. C'est une excellente source de vitamine C, un antioxydant qui aide à renforcer le système immunitaire et à protéger contre les maladies. De plus, le citron est faible en calories et contient des fibres, ce qui en fait une option saine pour ajouter de la saveur et de la nutrition aux repas et aux boissons. Consommer régulièrement du citron peut aider à améliorer la digestion, à promouvoir la santé de la peau et à contribuer à la perte de poids grâce à son effet diurétique et détoxifiant. De plus, sa polyvalence en cuisine en fait un ingrédient de base dans une variété de plats, des vinaigrettes pour salades aux marinades pour viandes et poissons, ainsi que dans des boissons rafraîchissantes comme les limonades et les thés.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/azucar.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Sucre</h1>
                        <p class="mt-2 text-gray-600">
                            Le sucre est un glucide simple qui fournit de l'énergie au corps, mais sa consommation excessive peut avoir des effets négatifs sur la santé. Bien qu'il soit une source rapide d'énergie, une consommation excessive de sucre raffiné peut contribuer à la prise de poids, à l'obésité et au risque de maladies chroniques telles que le diabète de type 2 et les maladies cardiaques. De plus, le sucre ajouté peut être présent dans de nombreux aliments transformés et boissons, ce qui peut conduire à une consommation excessive sans s'en rendre compte. Il est important de modérer la consommation de sucre et d'opter pour des sources de glucides plus saines, telles que les fruits, les légumes et les céréales complètes. Lorsque l'édulcoration est nécessaire, des options plus saines comprennent l'utilisation modérée d'édulcorants naturels tels que le miel, le sirop d'érable ou les édulcorants artificiels en quantités limitées.
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full bg-white shadow-lg rounded-lg overflow-hidden hover:shadow-xl transition-all duration-500 ease-in-out transform hover:-translate-y-3">
                <div class="flex flex-col md:flex-row min-h-80">
                    <div class="md:w-1/3 w-full h-56 md:h-auto bg-cover" style="background-image: url('../img/cafe.webp');">
                        <!-- Espace pour l'image du produit -->
                    </div>
                    <div class="md:w-2/3 w-full p-6">
                        <h1 class="text-gray-900 font-bold text-2xl">Café</h1>
                        <p class="mt-2 text-gray-600">
                            Le café est une boisson populaire qui offre une gamme de bienfaits pour la santé lorsqu'il est consommé avec modération. C'est une source riche en antioxydants, tels que les acides chlorogéniques, qui peuvent aider à protéger les cellules contre les dommages oxydatifs et à réduire le risque de maladies chroniques telles que les maladies cardiaques et le cancer. De plus, la caféine présente dans le café peut améliorer l'alerte, la concentration et les performances mentales, ainsi qu'augmenter temporairement le métabolisme et la combustion des graisses. Consommer du café avec modération a également été associé à un risque plus faible de maladies neurodégénératives, telles que la maladie d'Alzheimer et de Parkinson. Cependant, il est important de noter que l'excès de café peut entraîner des effets secondaires tels que la nervosité, l'insomnie et l'irritabilité chez certaines personnes. Par conséquent, il est conseillé de limiter la consommation de café à des quantités modérées, généralement de 1 à 3 tasses par jour, et d'éviter d'ajouter trop de sucre ou de crème pour maintenir ses bienfaits pour la santé.
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
                    <img alt="Logo de CASPER" src="../img/Logo frances.webp" class="w-80 h-auto" height="200" width="200" />
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