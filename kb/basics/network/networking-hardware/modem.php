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
    <title>Équipements réseau - Modem</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Équipements réseau</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Modem</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="MODEM"> 
                    Modem
                </h1>
                <p style="margin-top: 30px;"> 
                    Le modem (acronyme, pour modulateur-démodulateur) est un périphérique informatique qui relie un ordinateur à un réseau analogique, comme le réseau téléphonique classique. Il convertit les données numériques de l’ordinateur en signal modulé, dit « analogique », transmissible par un réseau analogique et réciproquement.</br>
                    Du routeur sans fil aux appareils mobiles, les dispositifs qui composent votre réseau domestique parlent tous des langages numériques différents et votre modem en est le traducteur. Il prend les signaux qui proviennent de votre fournisseur d'accès Internet, ou FAI, et les traduit en connexion Internet que votre routeur sans fil diffusera. Au niveau le plus élémentaire, votre modem vous donne accès au Web, mais il peut également faire une grande différence dans l'efficacité de votre sans-fil domestique.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/modem-2.jpeg" class="img-fluid float-right" style="max-width: 33%; margin-left: 3%; margin-top: 30px;"/>
                <img src="../../../../images/modem-1.png" class="img-fluid float-left" style="max-width: 60.5%; margin-left: 1.3%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 55px; justify-content: start">
                    <b>Comment fonctionne un modem ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Le modem reçoit des informations de votre FAI par les lignes téléphoniques, la fibre optique ou un câble coaxial dans votre maison (en fonction de votre fournisseur d'accès) et il les convertit en signal numérique. Le rôle du routeur est de diriger ce signal vers les appareils connectés, que ce soit par câbles Ethernet ou sans-fil, pour que tous vos appareils puissent monter à bord et accéder à Internet. Votre routeur et votre FAI ne peuvent pas communiquer directement parce qu'ils parlent des langages différents (ou plus exactement, ils transmettent des types de signaux différents) et c'est pour cette raison que le rôle de traducteur du modem est si important.</br></br>
                    Il existe trois sortes de modems (câble, DSL et fibre optique) qui fonctionnent sur différents supports de câbles selon votre fournisseur d'accès Internet (FAI). Les modems câbles sont les plus répandus dans le commerce, mais vous ne trouverez pas de produits basés sur la fibre optique dans les magasins. Des FAI tels que Verizon FiOS et AT&T U-verse imposent à leurs clients d'utiliser des dispositifs exclusifs pour leurs services respectifs. Lorsque vous achetez un modem câble ou DSL, assurez-vous de choisir le type de modem qui convient à votre service et vérifiez qu'il est bien compatible avec les vitesses de téléchargement et de téléversement que vous avez souscrites auprès de votre FAI. Si votre modem ne parvient pas à prendre en charge la vitesse de votre service, cela créera un goulet d'étranglement, entraînant ainsi une connexion lente ou intermittente. C'est ennuyeux pour tout utilisateur sans fil et particulièrement frustrant pour ceux qui lisent des flux multimédias ou qui jouent en ligne, et qui comptent sur une connexion sans fil constante.
                </p>
                
                
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/modem-4g.jpeg" class="img-fluid float-left" style="max-width: 40%; margin-left: 10%; margin-top: 30px;"/>
                <img src="../../../../images/modem-fiber.jpeg" class="img-fluid float-right" style="max-width: 40%; margin-left: 2%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Exemples de Modem 4G et Modem Fibre optique
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 55px; justify-content: start">
                    <b>Types de modulation</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">    
                    Différents types de modulation sont utilisés dans les modems :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la modulation d’amplitude (AM, Amplitude Modulation) ; celle-ci sera par exemple réalisée à l’aide d’un multiplicateur analogique recevant sur une entrée la porteuse, sur l’autre le signal numérique à transporter ;</li>
                    <li>la modulation de fréquence (FSK, Frequency Shift Keying) ; les diverses fréquences peuvent être obtenues à l’aide d’un VCO (Voltage-Controlled Oscillator, peu précis) ou par traitement numérique d’un signal produit par une horloge à quartz (division de fréquence, synthèse numérique…) ;</li>
                    <li>la modulation de phase différentielle (DPSK, Differential Phase Shift Keying) : à la fin de chaque cycle de la porteuse, un changement de phase de 180° représente un bit 0, pas de changement de phase un bit 1 ; ceci peut être obtenu en plaçant à la sortie de l’oscillateur générant la porteuse un inverseur et un commutateur qui sélectionne, à chaque passage par 0 de la porteuse, soit la sortie directe, soit la sortie inversée ;</li>
                    <li>modulation d’amplitude et de phase combinées (QAM, Quadrature Amplitude Modulation) : on crée deux sinusoïdes de même fréquence mais déphasées de 90° ; les deux signaux sont combinés en leur donnant des amplitudes adéquates ; une des normes précise seize combinaisons possibles (trois niveaux d’amplitude, douze déphasages) ; l’ensemble des combinaisons constituent ce que l’on appelle une constellation ; une constellation de 16 points permet de transmettre l’état de 4 bits simultanément, c’est ce qui permet une cadence plus élevée que les autres systèmes décrits ci-dessus, qui ne transmettent qu’un bit à la fois ;</li>
                    <li>une variante de la QAM est le codage en treillis ; on utilise ici une constellation de 32 états, ce qui devrait permettre la transmission simultanée de 5 bits ; mais le 5e bit est un bit de vérification, qui assure une protection renforcée contre les erreurs de transmission ; on transmet donc, comme en QAM, l’état de 4 bits ;</li>
                    <li>les modems 56 kbit/s sont conçus pour travailler dans l’environnement des réseaux numériques ; ils utilisent la modulation par impulsions codées (PCM, Pulse Code Modulation) pour convertir le signal modulé en séquence numérique : l’amplitude est mesurée 8 000 fois par seconde, avec une résolution de 8 bits ; le débit théorique devrait atteindre 64 kbit/s, mais le débit réel se situe généralement entre 40 et 56 kbit/s, selon l’état de la ligne de transmission.</li>
                </ul>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Structure</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">    
                    Un modem comporte les blocs suivants :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>un modulateur, pour moduler une porteuse qui est transmise par la ligne téléphonique ;</li>
                    <li>un démodulateur, pour démoduler le signal reçu et récupérer les informations sous forme numérique ;</li>
                    <li>un circuit de conversion 2 fils / 4 fils : le signal du modulateur est envoyé vers la ligne téléphonique alors que le signal arrivant par la ligne téléphonique est aiguillé vers le démodulateur ; c’est grâce à ces circuits, disposés de part et d’autre de la ligne téléphonique, que les transmissions peuvent se faire en duplex intégral (full duplex, c’est-à-dire dans les deux sens à la fois) ;</li>
                    <li>un circuit d’interface à la ligne téléphonique (DAA, Data Access Arrangement) constitué essentiellement d’un transformateur d’isolement et de limiteurs de surtensions.</li>
                </ul>
                <p style="margin-top: 30px;">    
                    Ces circuits seraient suffisants pour transmettre des informations en mode manuel ; toutes les opérations telles que décrochage de la ligne, composition du numéro… sont alors effectuées par l’utilisateur. Afin de permettre un fonctionnement automatisé, où toutes les tâches sont effectuées sous le contrôle d’un logiciel de communication, les modems comportent généralement quelques circuits auxiliaires :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>un circuit de composition du numéro de téléphone ; on peut généralement spécifier composition par impulsions ou par tonalités (DTMF, Dual Tone Multiple Frequency) ;</li>
                    <li>un circuit de détection de sonnerie ; ce circuit prévient l’ordinateur lorsque le modem est appelé par un ordinateur distant ;</li>
                    <li>un détecteur de tonalités, qui détecte les différentes tonalités indiquant que la ligne est libre, occupée, en dérangement, etc. ;</li>
                    <li>un circuit d'identification de l'appelant ou caller-ID.</li>
                </ul>
                <img src="../../../../images/modem-3.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Structure d'un modem
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    <b>Signaux de contrôle</b>
                </p>
                <p style="margin-top: 30px;">    
                    Les différents signaux échangés entre un ordinateur (DTE, Data Terminal Equipment) et un modem (DCE, Data Communications Equipment) sont précisés dans la norme RS.232/V.24 :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>les données à transmettre arrivent au DCE par la ligne Émission ;</li>
                    <li>les données reçues par le DCE apparaissent sur la ligne Réception ;</li>
                    <li>DSR (Data Set Ready, modem prêt) est au niveau actif quand le DCE est alimenté et raccordé à une ligne téléphonique ;</li>
                    <li>DTR (Data Terminal Ready, ordinateur prêt) est actif quand le DTE est prêt ;</li>
                    <li>RTS (Request To Send, demande d’émission) est activé par le DTE lorsqu’il veut envoyer des données ;</li>
                    <li>CTS (Clear To Send, prêt à émettre) est activé par le DCE lorsqu’il a établi la liaison et est prêt à recevoir les données à transmettre ;</li>
                    <li>CD (Carrier Detect, porteuse détectée) est activé par le DCE lorsqu’il reçoit une porteuse provenant d’un autre DCE ;</li>
                    <li>RI (Ring Indicator, indicateur d’appel) est activé par le DCE lorsqu’il reçoit un signal de sonnerie ;</li>
                    <li>la norme prévoit aussi deux connexions de masse, une pour le signal (obligatoire), l’autre pour un blindage (facultatif).</li>
                </ul>
                <p style="margin-top: 30px;">   
                    Le connecteur prévu initialement était un connecteur série RS-232 25 broches, le DB-25. Toutefois, comme de nombreuses broches étaient inutilisées, la tendance actuelle est d’utiliser des connecteurs avec moins de broches, tels le DB-9 qui compte 9 broches.
                </p>
                <p style="margin-top: 55px; justify-content: start">
                    Procédure typique d’émission</br></br>
                    À titre d’exemple, montrons comment ces différents signaux peuvent être utilisés :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>avant de démarrer une transmission de données, l’ordinateur A vérifie que le modem A est sous tension en vérifiant le niveau de DSR ;</li>
                    <li>l’ordinateur A donne l’ordre au modem A de former le numéro de téléphone ;</li>
                    <li>le modem appelé, que nous nommerons B, détecte la sonnerie et prévient l’ordinateur B auquel il est raccordé en activant sa ligne RI ;</li>
                    <li>quand l’ordinateur B est prêt à recevoir les données, il active sa ligne RTS ;</li>
                    <li>le modem B active alors sa porteuse ;</li>
                    <li>le modem A détecte la porteuse et prévient l’ordinateur A en activant CD ;</li>
                    <li>l’ordinateur A active RTS pour demander s’il peut commencer la transmission ;</li>
                    <li>le modem B répond en activant CTS, et la transmission des données peut commencer.</li>
                </ul>     
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.linksys.com/ca/fr/what-is-a-modem.html" target="_blank">Linksys - Qu'est-ce qu'un modem ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Modem" target="_blank">Wikipedia - Modem</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>