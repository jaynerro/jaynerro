<?php //On démarre la session ?>
<?php //session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php // Type d'encodage ?>
    <meta charset="utf-8">

    <?php // Balise viewport permettant à une page web d'être responsive ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Bootstrap CSS ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Équipements réseau - AP</title>
    <link rel="icon" type="image/png" href="../../../../images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../../header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
        <div class="row justify-content-center">
            <div class="col">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Équipements réseau</p></li>
                            <li class="breadcrumb-item active" aria-current="page">AP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div id="AP">
                    <h1> 
                        AP
                    </h1>
                </div>
                <p style="margin-top: 30px;"> 
                    Un point d'accès réseau, (PA ou AP de l'anglais : access point), dans le domaine des réseaux de télécommunications, est un endroit équipé d'une structure dédié pour se connecter matériellement à un réseau filaire ou radio, en suivant une procédure logicielle à l'aide d'un terminal.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/ap-wifi.png" class="img-fluid float-left" style="max-width: 35%; margin-left: 1.6%; margin-top: 30px;"/>
                <img src="../../../../images/ap-wifi-2.png" class="img-fluid float-right" style="max-width: 61.3%; margin-left: 0.2%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 40px; justify-content: start;"> 
                    Il existe plusieurs types d'AP:
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Point d'accès sans fil</li>
                    <li>Modem</li>
                    <li>Routeur</li>
                    <li>Commutateur réseau / Switch</li>
                    <li>Concentrateur / Hub</li>
                    <li id="CPL">Boitier Courants porteurs en ligne (CPL)</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    La plupart de ces équipements ont une autre finalité que le simple point d'accès. Par exemple, ils peuvent relier deux réseaux disjoints. Les plus fréquents sont les bornes Wi-Fi publiques, d'ailleurs plus connues sous cette dénomination ou sous celle de hotspot Wi-Fi. En général, les Fournisseurs d'accès à Internet (FAI) attribuent aussi le terme point d'accès (PA) à leur modem station d'accueil réservé à un usage privé et domestique (exemples : Livebox, Freebox, Bbox, etc.).</br></br>
                    Ces points d'accès sont désormais multi-fonctions. Ils font également office de routeur, serveur, filaire et sans-fil Wi-Fi avec option téléphone ou télévision (exemple: IPTV).</br></br>
                    Les points d'accès, publics ou privés, des FAI sont généralement de type Wi-Fi IEEE 802.11n ou IEEE 802.11ac.</br></br>
                    Une borne Wi-Fi, un point (d'accès) Wi-Fi (Access Point : AP) ou bien un hotspot, est un matériel qui donne accès à un réseau sans fil Wi-Fi permettant aux utilisateurs de téléphones mobiles, de tablettes tactiles ou d'ordinateurs portables de se connecter à Internet. L'accès ainsi fourni peut être gratuit ou payant pour l'utilisateur.</br></br>
                    Des annuaires de zones d'accès sans fil sont disponibles en ligne afin de faciliter la recherche de ces bornes partout dans le monde.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Différences entre point d'accès sans fil et routeur sans fil</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Point d’accès sans fil et routeur sans fil, tous deux prennent en charge la connectivité réseau Wi-Fi et jouent des rôles similaires. La confusion survient en conséquence. En fait, ces deux appareils réseau ne sont pas les mêmes. La différence entre les deux sera expliquée ci-dessous.
                </p>
                <img src="../../../../images/wireless-ap-vs-router.jpeg" class="img-fluid mx-auto d-block" style="max-width: 95%; margin-top: 55px;"/>

                <p style="margin-top: 55px; justify-content: start">
                    <b>Fonction</b>
                </p>
                <p style="margin-top: 30px;"> 
                    En général, la plupart des routeurs sans fil combinent les fonctionnalités d'un point d'accès sans fil, d'un routeur Ethernet, d'un pare-feu de base et d'un petit switch Ethernet (commutateur). Alors qu'un point d'accès sans fil se présente généralement comme un composant intégré à des appareils tels que des routeurs ou des extendeurs de réseau Wi-Fi. En un mot, les routeurs sans fil peuvent fonctionner comme points d'accès, mais tous les points d'accès ne peuvent pas fonctionner comme routeurs.</br></br>
                    Sans ambiguïté, un routeur sans fil, jouant le rôle de "hub Ethernet", aide à établir un réseau local en reliant et en gérant tous les appareils qui y sont connectés. Cependant, le point d'accès est un sous-appareil du réseau local et ne donne accès qu'au réseau établi du routeur. Par conséquent, si vous êtes un administrateur réseau, vous pouvez utiliser un routeur sans fil pour modifier les paramètres du réseau, mais un point d'accès sans fil n'est pas équipé de la fonctionnalité.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Connexion</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Mode routeur vs mode AP, le mode de connexion est divergent. L’AP sans fil ne peut pas être connecté à un modem. En général, un switch ou un routeur sera utilisé comme intermédiaire. Alors que le routeur sans fil dispose d'une fonction d'accès commuté à large bande qui vous permet de vous connecter directement à un modem pour l'accès à l'internet par ligne commutée.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Couverture</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Les routeurs sans fil sont les appareils de réseau les plus courants aujourd'hui. Mais parfois, si la zone de couverture que le routeur ne peut pas atteindre, le signal Wi-Fi sera faible et des points morts apparaîtront. Au lieu de cela, un point d'accès sans fil peut être ajouté dans les endroits où le réseau est en mauvais état, ce qui permet d'éliminer les points morts et d'étendre le réseau sans fil.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Application</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Généralement, les routeurs sans fil desservent les maisons résidentielles, les environnements de travail SOHO (Small Office, Home Office) et les petits bureaux ou organisations, qui peuvent répondre sans effort aux demandes d'accès fixes et modérées. Il est évident que ce type de routeur ne peut pas s'adapter à la croissance des besoins du réseau dans un avenir prévisible. Quant aux points d'accès sans fil, ils sont surtout utilisés dans les moyennes et grandes entreprises et organisations, plus d'un point d'accès sans fil étant impliqué pour prendre en charge plusieurs utilisateurs. Contrairement à la situation précédente, les gestionnaires de réseau peuvent ajouter des points d'accès supplémentaires à mesure que la demande augmente, afin de couvrir une zone physique plus étendue.</br></br>
                    En règle générale, des produits plus performants peuvent répondre à plus de besoins. En bref, le résultat final doit être pris en compte. Si vous voulez simplement un réseau sans fil à la maison pour répondre aux besoins des membres de votre famille, un routeur sans fil est suffisant. Mais si vous souhaitez créer un réseau sans fil plus fiable qui profite à un grand nombre d'utilisateurs, un point d'accès sans fil est alors plus approprié.
                </p>
                
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Point_d%27acc%C3%A8s" target="_blank">Wikipedia - Point d'accès (AP)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.mywifiservice.com/fr/installation/Building_Hotspot_WiFi_Network" target="_blank">My Wi-Fi Service - Création du réseau de points d'accès Wi-Fi</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://community.fs.com/fr/blog/wireless-access-point-vs-router-what-are-the-differences.html" target="_blank">FS Community - Quelle est la différence entre un point d'accès sans fil et un routeur sans fil ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>