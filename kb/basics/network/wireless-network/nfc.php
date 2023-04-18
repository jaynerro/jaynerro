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
    <title>Réseaux sans fil - NFC</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux sans fil</p></li>
                            <li class="breadcrumb-item active" aria-current="page">NFC</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="NFC"> 
                    NFC
                </h1>
                <p style="margin-top: 30px;"> 
                    Le Near-Field Communication ou la communication en champ proche, est une technologie de communication sans fil à courte portée et à haute fréquence, permettant l'échange d'informations entre des périphériques jusqu'à une distance d'environ 10 cm dans le cas général. Cette technologie est une extension de la norme ISO/CEI 14443 standardisant les cartes de proximité utilisant la radio-identification (RFID) qui combinent une carte à puce et un lecteur au sein d'un seul périphérique.</br></br>
                    Un périphérique NFC est capable de communiquer avec des équipements ISO/CEI 14443, avec un autre périphérique NFC ou avec certaines infrastructures sans-contact comme les composteurs des transports en commun ou les terminaux de paiement chez les commerçants. La technologie ISO/CEI 14443 équipe des cartes et des lecteurs utilisés dans les transports, dans le commerce ou pour l’accès à certains services publics, et le NFC équipe de plus en plus de terminaux mobiles. En 2011, le NFC équipait en effet 50 millions de tablettes tactiles ou téléphones mobiles. Dotés d’un écran, d’un clavier et d’une connexion internet, ces terminaux NFC ont un fort potentiel d’usages en favorisant les interactions entre les machines, les objets et un contexte
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/nfc-1.jpeg" class="img-fluid float-right" style="max-width: 63%; margin-left: 3%; margin-top: 30px;"/>
                <img src="../../../../images/nfc-2.png" class="img-fluid float-left" style="max-width: 26.5%; margin-left: 3%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 50px; justify-content: start">
                    <b>Caractéristiques principales</b>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Débits de communication : 106, 212 ou 424 kbit/s (le débit de 848 kbit/s n'est pas compatible avec la norme NFCIP-1).</li>
                    <li>Gamme de fréquence : 13,56 MHz.</li>
                    <li>Distance de communication : maximum 10 cm dans le cas général. En pratique, la distance maximum dépend des équipements et des protocoles utilisés, il n'existe pas de maximum intrinsèque à la technologie NFC. Par exemple, pour les applications de paiement par NFC en France, la distance maximum de communication entre une carte bancaire et un terminal de paiement est de 3 cm5. Mais, d'après un expert en sécurité informatique, si l'on remplace le terminal de paiement par du matériel spécifique non normé (un amplificateur coûtant 2 000 euros et une antenne mesurant 50 cm coûtant 1 000 euros), il est possible de communiquer avec une carte de paiement jusqu'à une distance de 1,5 m.</li>
                    <li>Mode de communication : half-duplex ou full-duplex.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Au contraire d'autres techniques de radio-identification ou du bluetooth dont la portée est d'une dizaine de mètres, la technique NFC n'est utilisable que sur de très courtes distances (quelques centimètres). Elle suppose une démarche volontaire de l'utilisateur et normalement ne peut pas être utilisée à son insu. Mais cela n'exclut pas la collecte des données NFC par le système lui-même, qui reste capable de conserver l'historique des usages de l'utilisateur utilisant cette technique de communication. En mai 2010, à l'occasion d'un test des services sans contacts déployés à Nice, la Commission nationale informatique et liberté a énoncé les grands principes pour que les services sans contact respectent les règles françaises en matière de protection des données personnelles.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Normes liées au NFC</b>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>NFCIP-1 (ISO/CEI 18092) définit l'interface et le protocole de communication entre deux périphériques NFC ;</li>
                    <li>ISO/CEI 14443-1 à ISO/CEI 14443-4 définissent la communication avec des circuits intégrés sans contact ;</li>
                    <li>NDEF (NFC Data Exchange Format) définit le format d'échange logique des données.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Des organismes autre que l'ISO/CEI, tels que l'ECMA ou l'ETSI, ont également normé des usages ou techniques basées sur le NFC.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Usages</b>
                </p>
                <p style="margin-top: 30px;">
                    Le NFC autorise de nombreux usages, certains se situent directement dans la continuité des cartes sans contact (billettique, paiement, accès...), d'autres sont fondés sur l'interaction de l'individu avec son environnement : objets, personnes...
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Trois modes de fonctionnement du NFC</b>
                </p>
                <p style="margin-top: 30px;">
                    Le mode émulation de carte</br></br>
                    Dans le mode émulation de carte, dit passif, le terminal mobile se comporte comme une carte à puce sans-contact. Dans le cas où le terminal mobile est un téléphone mobile compatible, la carte SIM de l'opérateur peut être utilisée comme élément de sécurité en stockant des informations chiffrées. Les usages sont multiples: paiement, billettique spectacle ou transport (ex. : Carte Navigo), couponing, contrôle d'accès... Le mobile, par ses fonctionnalités étendues (IHM, connexion réseau, capacité de traitement), enrichit considérablement les services basés sur des cartes.
                    Le mode lecteur</br></br>
                    Le terminal mobile devient un lecteur de cartes sans-contacts (mode actif) ou de « radio-étiquettes » (étiquettes électroniques). Ce mode permet de lire des informations en approchant son mobile devant des étiquettes électroniques disposées dans la rue, sur des abribus, des monuments, des affiches... ou sur des colis, des produits ou sur sa carte de visite (vCard)...
                    Le mode pair-à-pair</br></br>
                    Ce mode permet à deux terminaux mobiles d'échanger de l'information, par exemple des vCard, des photos, des vidéos, de l'argent, des tickets, etc. Un appareil doté de la technologie NFC est capable d'échanger des informations avec des cartes à puces sans contact mais également avec d'autres appareils dotés de cette technologie.
                    Ce mode peut également être couplé avec une technologie permettant un transfert plus rapide. Le système d'exploitation mobile Android, via Android Beam, permet par exemple depuis la version Ice Cream Sandwich de transférer les données via une connexion bluetooth, une fois la communication NFC établie; Samsung a amélioré le système en remplaçant, dans S-Beam, la liaison bluetooth par une liaison Wi-Di (ou Wi-Fi Direct).
                </p>
                <p style="margin-top: 30px;">
                    Exemples d'usages
                    En 2012, les services NFC commencent à voir le jour un peu partout dans le monde et notamment en Corée, en France et en Turquie. Quelques exemples d'usages :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>déverrouiller et rendre visible l'accès à la mémoire de masse d'une clé USB sécurisée avec un smartphone, tablette tactile ;</li>
                    <li>paiement en utilisant une carte bancaire sans contact, ou un appareil mobile (téléphone mobile, smartphone, ordinateur portable, tablette tactile…) sur un terminal de paiement sans contact ;</li>
                    <li>paiement du stationnement à une borne acceptant le paiement sans contact à l'aide de son terminal mobile NFC ;</li>
                    <li>achat et validation sans contact d'un titre de transport ou d'un billet d'entrée à un spectacle avec son mobile ;</li>
                    <li>gestion de coupons de réduction dans un magasin, gestion de points de fidélité chez les commerçants (couponing) ;</li>
                    <li>accès et démarrage d'un véhicule à l'aide de son téléphone mobile ;</li>
                    <li>lecture d'informations produits (prix, composition, allergie, etc.) dans un magasin ;</li>
                    <li>contrôle d'accès à des locaux en accès réservé (salle de réunion, entreprise, salle de cours, etc.) ;</li>
                    <li>échange de profils entre deux utilisateurs d'un réseau social ou de niveaux de jeux en rapprochant (« tapant ») les deux téléphones (mode pair-à-pair) ;</li>
                    <li>lecture d'une carte de visite électronique avec un PDA ;</li>
                    <li>synchronisation de signets Internet et de contacts entre un PDA et un téléphone mobile ;</li>
                    <li>récupération de la clef Wi-Fi d'un point d'accès en approchant son périphérique NFC de la borne de diffusion ;</li>
                    <li>dans le cadre du traitement diabétique, lecture de glycémie via smartphone d'un capteur d'analyse de liquide intercellulaire ;</li>
                    <li>accès aux fonctionnalités domotique d'un bâtiment ;</li>
                    <li>dans le domaine des jeux vidéo, notamment les amiibo (Wii U, Nintendo 3DS, Switch) ;</li>
                    <li>suivi de la traçabilité de la chaîne du froid.</li>
                </ul>
                <p style="margin-top: 30px;">
                    En 2016, le nombre de cartes de paiement sans contact est estimé à 31,5 millions en France, sans que les utilisateurs en soient toujours conscients.</br></br>
                    En 2017, Wax Tailor réalise By Any Remixes Necessary, premier vinyle au monde équipé d'une puce NFC.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Sécurité</b>
                </p>
                <p style="margin-top: 30px;">
                    Le paiement sans contact basé sur le NFC est d'une grande facilité d'usage, ce qui n'est pas toujours compatible avec une sécurité efficace. Début 2016, des hackers allemands du Chaos Computer Club ont présenté des failles dans les protocoles de communications. La plus importante concerne le protocole utilisé (principalement en Allemagne) entre la carte et le terminal de paiement sans contact. Elle est due à une mauvaise implémentation du code d'authentification du message. Une personne mal intentionnée munie d'un smartphone et d'une application spécifique peut récupérer des informations confidentielles telles que le numéro de la carte bancaire et sa date d'expiration (pas de récupération de nom, cryptogramme ou historique d'opération), à condition de placer le smartphone à quelques centimètres de celle-ci.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Diffusion de la technologie</b>
                </p>
                <p style="margin-top: 30px;">
                    La société française AirTag a affirmé avoir lancé le premier kit de développement logiciel pour communication en champ proche en 2008. La diffusion du NFC passe par des services sans contact nombreux, fonctionnant partout, quel que soit son opérateur, sa banque ou son modèle de terminal NFC :</br></br>
                    En France et au Royaume-Uni</br>
                    le NFC commence à être utilisée à partir de 2011 et son implantation est encore balbutiante en 2012. Seules neuf villes, dont Nice, Strasbourg (précurseur), Caen, et Marseille possèdent des moyens de paiement compatibles NFC en 2012, et ce, uniquement pour les systèmes de transports en commun. En Europe, le NFC est implantée avec l'aide du secteur public qui rechigne à investir des sommes suffisantes dans son développement. Les principaux acteurs du NFC se sont regroupés par domaine d'activité pour réfléchir sur des questions telles que l’interopérabilité, le modèle économique ou la gestion de la relation client.</br>
                    En France, plusieurs expérimentations ont été menées à partir de 2005, notamment à Nice, Caen et Strasbourg pour le paiement, à Rennes, Grenoble, Marseille dans le domaine des transports publics. Parallèlement les acteurs du sans contact se sont organisés pour élaborer des spécifications communes.</br></br>
                    Aux États-Unis</br>
                    les premiers programmes d'exploitation du NFC sont aussi apparus en 2011, mais la pénétration du système s'effectue beaucoup plus rapidement et, déjà en 2012, de nombreux magasins et systèmes de transports en commun sont compatibles avec cette technologie. Cela s'explique par le fait que le modèle concurrentiel prédomine avec un positionnement récent d’acteurs privés, essentiellement Google, PayPal et Amazon qui ont implanté massivement cette technologie dans les smartphones, les cartes de crédit et les lecteurs de carte de crédit.</br></br>
                    En Corée du Sud et au Japon</br>
                    le NFC a commencé à être exploitée en 2004. Les services NFC sur téléphones mobiles sont donc très développés. Tous les magasins et tous les réseaux de transport d'une certaine importance disposent de la technologie NFC pour régler les paiements. Les opérateurs et constructeurs de mobiles jouent un rôle prépondérant.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>NFC vs RFID</b>
                </p>
                <p style="margin-top: 30px;">
                    Bien que ces deux technologies aient presque les mêmes fonctionnalités, elles sont totalement différentes.</br></br>
                    Autonomie</br>
                    La RFID peut bien fonctionner à une distance de plusieurs mètres. Par exemple, un laissez-passer de portail peut fonctionner à distance. Ainsi, vous n'avez pas à virer dangereusement votre voiture jusqu'au péage.</br>
                    La technologie NFC est plus récente. C'est une belle version de la RFID. Il peut fonctionner dans une plage maximale de 4 pouces. Contrairement à la RFID, il s'agit d'une communication unidirectionnelle. Les données ne circulent que des étiquettes vers l'équipement de lecture.</br></br>
                    Fonction et objectif</br>
                    La RFID est plus adaptée au suivi et à la localisation des actifs dans les fonctions logistiques. Il est également plus idéal pour sécuriser les accès ou rationaliser la surveillance des invités.</br>
                    D'autre part, NFC est idéal pour les transactions de paiement.</br>
                    Si le grand magasin pour lequel vous magasinez accepte les paiements via NFC, vous pouvez utiliser votre téléphone portable pour payer les articles que vous achetez.</br>
                    Les clients n'ont qu'à placer leur portefeuille mobile à proximité de l'appareil. La paiement sans contact lecteur recueille les données et traite le paiement. Le processus est rapide et transparent.</br></br>
                    Savoir-faire</br>
                    NFC et RFID ont des capacités différentes. Les articles compatibles NFC peuvent apporter une expérience Web unique aux produits physiques. Il favorise l'adoption de l'Internet des objets.</br>
                    En revanche, la RFID a des capacités plus spécifiques. Mais il prend en charge les balises. La RFID ne peut pas analyser le contenu Web tel que les URL et les liens.</br></br>
                    Structure</br>
                    NFC se trouve normalement sur les téléphones ou les ordinateurs. C'est intangible. D'autre part, la RFID est petite et flexible. Ils peuvent prendre la forme d'un autocollant et coûtent environ 10 centimes par étiquette.</br>
                    Ces autocollants peuvent être utilisés pour créer des laissez-passer ou des bracelets d'accès. Par exemple, vous pouvez exiger que les gens portent des bracelets RFID pour avoir accès à votre événement.</br></br>
                    Communication entre pairs</br>
                    L'une des caractéristiques du NFC est la communication peer-to-peer. L'appareil NFC peut servir de lecteur et de tag. Cela signifie qu'il peut transférer et recevoir des données d'un autre appareil NFC.</br>
                    Par exemple, les smartphones NFC peuvent transmettre des informations d'un autre. Il vous suffit de connecter les deux appareils ensemble. Finalement, ils peuvent se transformer en appareils de partage de données. Au final, les deux téléphones auront la même copie des informations. Comme vous l'avez probablement vu dans les publicités, de nombreux smartphones sont désormais capables de transmettre des informations aux clients.</br>
                    La RFID ne peut que lire les données. Par exemple, après un événement, vous sauriez combien de participants étaient là. Vous connaîtrez leur comportement et leur pouvoir d'achat. Cela dépend de la fréquence à laquelle ils ont utilisé leurs bracelets. Mais vous ne pouvez pas transférer ou extraire ces données vers un autre appareil RFID.</br></br>
                    Technologie dérivée</br>
                    NFC s'appuie sur le support de la RFID et transforme les limitations en une fonctionnalité. Par conséquent, NFC ne peut être utilisé que dans les communications à courte portée.</br>
                    Étant donné que NFC ne peut fonctionner que sur une courte distance, il s'agit d'un choix populaire pour une communication sécurisée. Cela se produit entre les appareils des clients et les systèmes de paiement.</br></br>
                    Utilisations populaires</br>
                    La RFID est plus couramment utilisée dans le suivi des actifs et le chronométrage des courses. Il est également utilisé dans la gestion des stocks et le suivi des outils. Les entreprises événementielles l'utilisent pour contrôle d'accès et le suivi des participants. D'autre part, le NFC est plus couramment destiné à faciliter les transactions de paiement en ligne ou à accéder à des contenus exclusifs. en utilisant un NFC-smartphone activé. Par exemple, si vous achetez un billet via votre smartphone compatible NFC, vous pouvez simplement scanner votre appareil pour accéder au jeu.</br></br>
                </p>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Near-field_communication" target="_blank">Wikipedia - Near-field communication</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.rfidfuture.com/fr/rfid-vs-nfc-whats-the-difference-between-them.html" target="_blank">myrfidsolution.com - RFID vs NFC : quelle est la différence entre eux ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>