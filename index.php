<?
$remoteAddr = isset($_SERVER['HTTP_CF_CONNECTING_IP']) ? $_SERVER['HTTP_CF_CONNECTING_IP'] : $_SERVER['REMOTE_ADDR'];
// $remoteAddr = '141.94.17.28';
function functionGeolocalization($remote_addr, $http_user_agent, $country)
{
    $apiCountry = $country;
    $apiCity = "";
    $apiRegionName = "";
    try {
        if (functionUserAgentIsBot($http_user_agent)) {
            echo "Estás utilizando un bot.";
            return [$apiCountry, $apiCity, $apiRegionName];
        }

        $data = @file_get_contents("http://ip-api.com/json/" . $remote_addr);
        //var_dump($data); // Salida para depuración
        $array = json_decode($data, true);
        // var_dump($array); // Salida para depuración

        if ($array && array_key_exists("status", $array) && $array["status"] == "success") {
            $apiCountry = strtolower($array['countryCode']);     //country    
            $apiCity = strtolower($array['city']);               //city
            $apiRegionName = strtolower($array['regionName']);   //regionName 
        } else {
            $data =  @file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $remote_addr);
            // var_dump($data); // Salida para depuración
            $array = unserialize($data);
            // var_dump($array); // Salida para depuración

            if ($array && array_key_exists("geoplugin_status", $array) && $array["geoplugin_status"] == "200") {
                if ($array["geoplugin_status"] === 200) {
                    $apiCountry = strtolower($array['geoplugin_countryCode']);     //country    
                    $apiCity = strtolower($array['geoplugin_city']);               //city
                    $apiRegionName = strtolower($array['geoplugin_regionName']);   //regionName 
                }
            }
        }
    } catch (Exception $e) {
        //echo "Se produjo un error: " . $e->getMessage(); // Salida para depuración

        $apiCountry = $country;
        $apiCity = "";
        $apiRegionName = "";
    }
    return [$apiCountry, $apiCity, $apiRegionName];
}

function functionUserAgentIsBot($user_agent)
{

    $botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
    return preg_match("/" . trim($botRegexPattern) . "/", $user_agent);
}

[$apiCountry, $apiCity, $apiRegionName] = functionGeolocalization($remoteAddr, $_SERVER['HTTP_USER_AGENT'], 'pe');

// echo ($apiCountry);

switch ($apiCountry) {
    case 'es':
    case 'ar':
    case 'bo':
    case 'cl':
    case 'co':
    case 'cr':
    case 'cu':
    case 'ec':
    case 'sv':
    case 'gt':
    case 'hn':
    case 'mx':
    case 'ni':
    case 'pa':
    case 'py':
    case 'pe':
    case 'do':
    case 'uy':
    case 've':

        $idioma = 'es'; // Español para España
        break;
    case 'fr':
    case 'bj':
    case 'bf':
    case 'bi':
    case 'cm':
    case 'cf':
    case 'td':
    case 'km':
    case 'cg':
    case 'cd':
    case 'ci':
    case 'dj':
    case 'ga':
    case 'gn':
    case 'gw':
    case 'mg':
    case 'ml':
    case 'mr':
    case 'mu':
    case 'ma':
    case 'ne':
    case 'rw':
    case 'sn':
    case 'sc':
    case 'tg':

        $idioma = 'fr';
        break;
    case 'us':
    case 'bw':
    case 'io':
    case 'cm':
    case 'cv':
    case 'et':
    case 'gm':
    case 'gh':
    case 'ke':
    case 'ls':
    case 'lr':
    case 'mg':
    case 'mw':
    case 'mu':
    case 'ms':
    case 'na':
    case 'ng':
    case 'rw':
    case 'sh':
    case 'sc':
    case 'sl':
    case 'ss':
    case 'sz':
    case 'tz':
    case 'ug':
    case 'zm':
    case 'zw':
        $idioma = 'en';
        break;
    default:
        $idioma = 'es';
        break;
}

// echo ($idioma);

switch ($idioma) {
        // case 'es':
        //     header("Location: ./index.php");
        //     break;
    case 'en':
        header("Location: ./english/index.php");
        break;
    case 'fr':
        header("Location: ./francais/accueil.php");
        break;
    default:
        break;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASPER | Inicio</title>
    <link rel="icon" href="./img/isotipo.ico" />
    <link href="./styles/output.css" rel="stylesheet" />
    <meta name="description" content="Tu socio en comercio internacional con África. Conectamos continentes para potenciar tu negocio con soluciones dinámicas, experiencia experta y servicios fiables. Descubre cómo impulsamos el éxito de tus operaciones hoy.">
    <meta name="keywords" content="comercio internacional, África, Web Casper, socio comercial, conectividad, soluciones dinámicas, experiencia experta, servicios fiables, logística, intermediación, asesoramiento aduanero, éxito comercial">

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
                        <a href="./francais/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
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
                        <ul class="flex items-center gap-10 text-sm text-white uppercase">
                            <li>
                                <a class="link-nav" href="./index.php">
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./nosotros.php">
                                    Nosotros
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./socios.php">
                                    Socios comerciales
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./servicios.php">
                                    Servicios
                                </a>
                            </li>
                            <li>
                                <a class="link-nav" href="./contacto.php">
                                    Contacto
                                </a>
                            </li>
                            <li>
                                <div class="relative">
                                    <div class="inline-flex items-center overflow-hidden rounded-md border bg-white">
                                        <a href="#" class="border-e px-4 py-2 text-sm/none text-gray-600 hover:bg-gray-50 hover:text-gray-700">
                                            Español
                                        </a>

                                        <button id="menuButton1" class="h-full p-2 text-gray-600 hover:bg-gray-50 hover:text-gray-700 z-20">

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
                                            <a href="./francais/index.php" class="flex z-20 gap-2 justify-start items-center rounded-lg px-4 py-2 text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700" role="menuitem">
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
    <section class="bg-gray-100 bg-center relative bg-cover" style="background-image: url(./img/africa1.webp);">
        <div class="mx-auto max-w-screen-xl relative px-4 py-32 lg:flex lg:h-[90vh] lg:items-center">
            <div class="max-w-7xl text-start">
                <h1 class="text-gray-800 bg-clip-text text-3xl sm:text-6xl w-1/2">
                    Tu <span class="text-orange-600">socio en comercio internacional</span> con <span class="text-orange-600">África</span>
                </h1>
                <p class="mt-4 max-w-xl sm:text-xl text-gray-700">
                    Conectamos continentes para potenciar tu negocio. Con nuestra experiencia y red de contactos en África, facilitamos tus operaciones de importación y exportación. Descubre cómo podemos impulsar tu éxito comercial hoy mismo.
                </p>
                <div class="mt-8 flex flex-wrap justify-start">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-white px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-red-500" href="./servicios.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            ¡Explora nuestras soluciones!
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion 1 -->
    <section class="bg-white">
        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
            <h2 class="text-orange-600 text-center w-full block">Acerca de nosotros...</h2>

            <div class="mt-8 grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-8">
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Dinámico</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Abrazamos la agilidad y la innovación en cada paso del proceso. Nuestro enfoque dinámico nos permite adaptarnos rápidamente a las cambiantes demandas del mercado, garantizando soluciones flexibles y eficientes para tu negocio. Confía en nuestra capacidad para mantener el ritmo y llevar tu comercio internacional con África al siguiente nivel.
                    </p>
                </blockquote>
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Experto</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        Somos verdaderos expertos en el comercio internacional con África. Con años de experiencia y un profundo conocimiento del mercado africano, ofrecemos soluciones personalizadas y estratégicas para cada cliente. Nuestro equipo altamente calificado está aquí para brindarte asesoramiento experto y garantizar el éxito de tus operaciones comerciales en África.
                    </p>
                </blockquote>
                <blockquote class="p-8">
                    <div class="flex flex-col items-center gap-4">
                        <div>
                            <p class="mt-1 text-center text-lg font-medium text-red-600">Fiable</p>
                        </div>
                    </div>

                    <p class="line-clamp-2 text-center sm:line-clamp-none mt-4">
                        La confiabilidad es nuestra piedra angular. Nos comprometemos a ofrecer un servicio transparente, seguro y confiable en cada etapa de tu viaje comercial con África. Desde la gestión logística hasta el despacho aduanero, puedes confiar en nosotros para cumplir tus expectativas y garantizar el éxito de tus operaciones. Con Casper International Trading, tienes un socio en el que puedes confiar plenamente.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Seccion 2 -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24 lg:order-last">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Expertos en comercio internacional con África</h2>

                <p class=" 2 md:mt-4">
                    Nos dedicamos a simplificar y optimizar tus operaciones comerciales con África. Con más de 20 años de experiencia y un equipo altamente calificado, ofrecemos soluciones integrales en logística, intermediación y asesoramiento aduanero. Nuestro compromiso es brindarte un servicio excepcional que abarca desde la gestión logística hasta la asesoría especializada en comercio internacional, facilitando así tu acceso al mercado africano.
                </p>

                <div class="mt-4 md:mt-8">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-yellow-400 px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-green-400" href="./nosotros.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            Descubre más sobre nuestra historia y valores
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <img alt="Buque de carga en puerto" src="./img/vista-aerea-buque-carga-contenedor-carga-puerto.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
    </section>

    <!-- Seccion 3 -->
    <section class="overflow-hidden bg-white sm:grid lg:grid-cols-2">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-left ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-orange-600">Impulsando el Éxito de tus Operaciones Comerciales</h2>

                <p class=" 2 md:mt-4">
                    Contamos con un equipo excepcionalmente talentoso y dedicado que está comprometido con tu éxito en el comercio internacional con África. Nuestros expertos están altamente capacitados y tienen una amplia experiencia en diversas áreas clave, desde logística y gestión de cadena de suministro hasta intermediación con brockers y asesoramiento aduanero especializado en el mercado africano.
                </p>
                <div class="mt-4 md:mt-8">
                    <a class="group relative inline-flex items-center overflow-hidden rounded bg-yellow-400 px-8 py-3 text-gray-800 focus:outline-none focus:ring active:bg-green-400" href="./servicios.php">
                        <span class="absolute -end-full transition-all group-hover:end-4">
                            <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </span>

                        <span class="text-sm font-medium transition-all group-hover:me-4">
                            Descubre más sobre nuestros servicios
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <img alt="Personas de nogocio estrechandose las manos" src="./img/closeup-shot-business-handshake-cropped-shot-two-people-wearing-formal-suits-shaking-hands-business-handshake-concept.webp" class="h-56 w-full object-cover sm:h-80 lg:h-full" height="200" width="200" />
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