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
    <title>Réseaux sans fil - Réseau de téléphonie mobile</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux sans fil</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Réseau de téléphonie mobile</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Réseau de téléphonie mobile
                </h1>
                <p style="margin-top: 30px;"> 
                    Un réseau de téléphonie mobile est un réseau téléphonique qui permet l'utilisation simultanée de millions de téléphones sans fil, immobiles ou en mouvement, y compris lors de déplacements à grande vitesse et sur une grande distance.</br></br>
                    Pour atteindre cet objectif, toutes les technologies d'accès radio doivent résoudre un même problème : partager et répartir aussi efficacement que possible une bande de fréquences hertzienne unique entre de très nombreux utilisateurs. Pour cela, diverses techniques de multiplexage sont utilisées pour la cohabitation et la séparation des utilisateurs et des cellules radio : le multiplexage temporel, le multiplexage en fréquence et le multiplexage par codes, ou le plus souvent une combinaison de ces techniques.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/cellular-networks-2.png" class="img-fluid float-right" style="max-width: 33.2%; margin-left: 0%; margin-top: 30px;"/>
                <img src="../../../../images/cellular-networks-1.jpeg" class="img-fluid float-left" style="max-width: 62%; margin-left: 1%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 45px;"> 
                    Un réseau de téléphonie mobile a une structure « cellulaire » qui permet de réutiliser de nombreuses fois les mêmes fréquences ; il permet aussi à ses utilisateurs en mouvement de changer de cellule (handover) sans coupure des communications en cours. Dans un même pays, aux heures d'affluence, plusieurs centaines de milliers, voire plusieurs millions d'appareils sont en service répartis (dans le cas du GSM) sur seulement 500 canaux disponibles.
                </p>
                <p style="margin-top: 50px; justify-content: start" id="GSM">
                    <b>Réseaux GSM</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Les réseaux de téléphonie mobile utilisent des ondes électromagnétiques, tout comme les réseaux pour la radio, la télévision, les satellites et les autres réseaux de communication privés tels que ceux réservés aux gendarmes, ambulanciers et autres. Pour transmettre une information (binaire ou analogique) on utilise un canal. Dans les réseaux GSM, ce canal est porté par une fréquence spécifique autour de laquelle l'onde est modulée. On préfère garder un certain espace entre les canaux car si leurs fréquences sont trop proches, ils empiètent les uns sur les autres en produisant des interférences.</br></br>
                    On a attribué à chaque application (radio, télévision, téléphones, etc.) des groupes de fréquences qui varient selon les continents, voire parfois de pays à pays. En Europe, la téléphonie mobile GSM a reçu (de l'organisme CEPT) deux groupes de fréquences : autour de 900 MHz et autour de 1800 mégahertz (MHz).</br></br>
                    Il a d'abord fallu scinder chacun de ces groupes en deux : une bande de fréquences pour envoyer les signaux de l'antenne-relais vers les téléphones mobiles, l'autre pour les émissions des téléphones vers le réseau. L'une donc pour être appelé et entendre, l'autre pour appeler et parler.</br></br>
                    Fréquences historiques affectées aux premiers opérateurs GSM en France au début des années 2000 (depuis lors Bouygues Telecom et Free mobile ont reçu des bandes de fréquence supplémentaires) :
                </p>
                <img src="../../../../images/cellular-networks-3.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Vient ensuite la subdivision en canaux. En GSM (pour Global System for Mobiles), l'écart de fréquence entre deux canaux adjacents a été fixé à 200 kHz, soit 0,2 MHz. Le groupe 1 défini ci-dessus peut donc contenir 125 canaux (25 MHz/0,2 MHz) et le groupe 2 en contient 375, ce qui fait 500 au total. S'il n'y avait qu'un émetteur pour toute l'Europe, on ne pourrait effectuer que 500 communications à la fois.</br></br>
                    Première solution : des milliers d'émetteurs</br></br>
                    Un grand nombre d'émetteurs à courte portée sont installés, chacun ne couvrant qu'une zone géographique bien délimitée appelée une « cellule » (zone couverte par une antenne). De là, le terme « téléphonie cellulaire ». La portée moyenne varie de 1 à 30 km. Ainsi, les téléphones reçoivent les ondes radio d'une station de base (BTS) et lui répondent pour indiquer s'ils souhaitent s'y attacher. Si celle-ci accepte, elle retient le numéro d'identité de l'appareil mobile (n° IMSI stocké dans la carte SIM), lui affecte des ressources radio et reprend le contact si un appel pour ce téléphone lui parvient ou si le téléphone en effectue un. Ceci permet de réutiliser des milliers de fois les mêmes fréquences hertziennes dans un seul pays.</br></br>
                    Cette solution pose néanmoins un problème si toutes les antennes adjacentes utilisent les mêmes fréquences pour leurs utilisateurs. Si l'un d'eux se situe à la frontière entre les deux zones de portée, il reçoit deux signaux qui se perturbent mutuellement.</br></br>
                    Amélioration : le damier hexagonal</br></br>
                    Les fréquences utilisées par les émetteurs ont alors été divisées. Les antennes gérées par les BTS (pour Base Transceiver Station) sont souvent regroupées par trois sur un pylône ou suivant une configuration équivalente, chacune émet dans un angle de 120°, soit 360° au total (3X120°). Chacune de ces antennes supporte donc un tiers des communications. Sur le schéma (valable uniquement pour la norme GSM), chaque couleur (vert, bleu, jaune) figure un groupe de fréquences différentes. Elles créent ainsi un « damier hexagonal » de cellules. Ce damier est avant tout une vue de l'esprit, les zones se recouvrant les unes avec les autres et leur taille varie avec la météo, le nombre d'utilisateurs, etc. Chaque antenne utilise un groupe de fréquences hertziennes différentes de ses voisines ; les mêmes fréquences ne sont donc réutilisées qu'à une distance permettant de ne pas créer d'interférences. Cela permet aussi à un mobile en frontière de 2 ou 3 cellules d’écouter les cellules adjacentes pour permettre un changement de cellules « en douceur » (soft handover).
                </p>
                <img src="../../../../images/cellular-networks-4.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Réseau cellulaire de téléphonie (GSM/GPRS)
                </p>
                <p style="margin-top: 30px;"> 
                    Zones blanches</br></br>
                    Même si la couverture réseau est de nos jours très étendue, il demeure des espaces géographiques qui n'étaient pas ou ne sont pas encore couverts par les réseaux mobiles : les zones blanches. Dans tous les pays, les fournisseurs de service s'efforcent de couvrir ces zones lorsque la demande le justifie ou lorsque la législation l'impose. Cette couverture est souvent mutualisée, c'est-à-dire réalisée via des antennes financées et partagées par les différents opérateurs du pays ; par extension le terme « zone blanche » désigne alors ces zones partagées (environ 3000 communes en France).</br></br>
                    Évolution du GSM vers le GPRS</br></br>
                    Les réseaux GSM ont évolué vers les normes GPRS et Edge, optimisées pour transférer des données (MMS, accès internet, etc.) qui nécessitent des débits plus élevés que la téléphonie (voix). Cela a été obtenu en améliorant les techniques de codage radio et par regroupement de plusieurs canaux pour permettre le transfert de données à une vitesse plus élevée. Mais les antennes et le réseau radio restent les mêmes : mêmes fréquences et mêmes damiers hexagonaux avec des cellules radio adjacentes utilisant des fréquences différentes pour éviter les interférences.
                </p>
                <p style="margin-top: 50px; justify-content: start" id="UMTS">
                    <b>Réseaux UMTS (3G)</b>
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    Principales différences avec les réseaux GSM
                </p>
                <p style="margin-top: 30px;"> 
                    En GSM, les cellules radio adjacentes utilisent des fréquences différentes (facteur de réutilisation variant de 1/3 à 1/7 selon les cas) ce qui implique de diviser et répartir les fréquences attribuées à un opérateur entre plusieurs cellules radio et donc d'avoir moins de bande passante (moins d'abonnés actifs simultanément) dans chaque cellule.</br></br>
                    Une amélioration importante de l’UMTS par rapport au GSM consiste en la possibilité d’utiliser les mêmes fréquences hertziennes dans toutes les cellules radio, grâce à une nouvelle technique de codage (W-CDMA) et à un « scrambling code » (code d’embrouillage) permettant d’identifier chaque cellule. En conséquence, cela permet d’affecter une largeur spectrale plus grande à chaque cellule (la norme UMTS prévoit 5 MHz par cellule radio) et donc d'avoir au total une bande passante plus importante et plus de débit dans chaque cellule.</br></br>
                    Une autre différence tient au fait que l'UMTS est optimisé pour transporter les données avec des débits variables (vidéos, internet). La bande passante n'est donc plus découpée en canaux de taille fixe (adaptés à la voix), mais une allocation dynamique de ressources permettant des débits variables et irréguliers (accès Internet).</br></br>
                    Une troisième différence concerne la largeur spectrale affectée à chaque cellule radio, la norme UMTS dominante (FDD) prévoit, pour chaque cellule, une largeur spectrale fixe de 2 x 5 MHz (une bande pour l'émission, une autre pour la réception), plus élevée qu'en GSM (qui utilise au maximum dix à vingt canaux de 200 kHz par cellule). Une évolution de la norme appelée DC-HSPA+, ou DC-HSDPA, permet d'agréger deux bandes de fréquence de 5 MHz dans le sens descendant, pour augmenter le débit réception dans une cellule radio pour les terminaux compatibles.
                </p>
                <img src="../../../../images/cellular-networks-5.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Structure d'un réseau 3G UMTS
                </p>
                <p style="margin-top: 30px;"> 
                    Organisation des cellules radio UMTS</br></br>
                    Dans un réseau UMTS, dans les zones de couverture homogènes (macrocells), on retrouve le même type de damiers hexagonaux que celui décrit ci-dessus pour le GSM. Les mêmes fréquences hertziennes sont généralement utilisées dans toutes les cellules (c'est obligatoire pour les opérateurs ne disposant que d'une seule bande de fréquence duplex de 2 x 5 MHz).</br></br>
                    La contrepartie est que, malgré le codage WCDMA et les « scrambling codes » permettant d’identifier une cellule, il y a des interférences dans les zones en limite de 2 cellules mitoyennes et il en résulte un débit beaucoup plus faible qu'au centre des cellules radio ; le changement de cellules d'un terminal en déplacement (handover) est également plus complexe avec des risques de micro-coupures des communications en cours, spécialement dans les variantes « haut débit » (HSDPA et HSPA+) de l’UMTS.
                </p>
                <p style="margin-top: 50px; justify-content: start" id="LTE">
                    <b>Réseaux LTE (4G)</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Différences entre les réseaux UMTS et LTE</br></br>
                    Les réseaux LTE (Long Term Evolution), appelés commercialement 4G, représentent une évolution importante par rapport aux réseaux GSM et UMTS. Les normes spécifiant les réseaux LTE sont issues du 3GPP comme les normes UMTS, mais elles introduisent de nombreuses modifications et améliorations.</br></br>
                    Tout comme l’UMTS, le LTE est une technologie cellulaire qui offre la possibilité de réutiliser les mêmes fréquences hertziennes dans des cellules radio mitoyennes, grâce aux codages radio OFDMA et SC-FDMA et à un encodage permettant d’identifier les cellules. Cela permet d’affecter à chaque cellule une largeur spectrale variant de 5 à 20 MHz et donc d'avoir une bande passante plus importante et plus de débit dans chaque cellule.</br></br>
                    Le LTE et le LTE Advanced sont optimisés pour transporter des données avec des débits fixes et garantis (applications : télévision, téléphonie, visiophonie, lecture de vidéos) ou avec des débits variables : internet, téléchargements, jeux interactifs, cartographie (géolocalisation). Ceci est rendu possible par l’allocation dynamique de la ressource radio permise par les normes définissant le réseau d’accès radio LTE « l'eUTRAN » et par le codage OFDMA qui autorise le partage des bandes de fréquence entre abonnés via un multiplexage temporel et fréquentiel, avec une base de temps (le TTI : Transmission Time Interval) très courte (1 ms) pour redistribuer la bande passante radio entre les terminaux actifs dans chaque cellule.</br></br>
                </p>
                <img src="../../../../images/cellular-networks-6.jpg" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    eUTRAN : architecture de l’accès radio d’un réseau LTE.
                </p>
                <p style="margin-top: 30px;"> 
                    Topologie du réseau</br></br>
                    La partie radio du réseau Radio Access Network appelée « eUTRAN » est simplifiée par l’intégration dans les stations de base « eNode B » des fonctions de contrôle qui étaient implémentées dans les RNC (Radio Network Controller) des réseaux UMTS. Pour remplacer la fonction d’interconnexion des RNC, des liens directs entre les eNode B (appelés X2) sont utilisés.</br></br>
                    Le RAN d’un réseau LTE se limite donc aux eNode B, aux antennes et aux liaisons en fibres optiques vers les antennes distantes (liens CPRI) et celles reliant les eNode B entre eux et avec le cœur de réseau (réseau de backhaul).</br></br>
                    Le cœur de réseau appelé « EPC » (Evolved Packet Core) ou « SAE » (System Architecture Evolution), est bâti sur des technologies « full IP », c'est-à-dire utilisant uniquement les protocoles internet pour la signalisation, le transport de la voix et des données.</br></br>
                    Dans le cas d’une cohabitation avec un réseau UMTS, le LTE nécessite une couverture radio et des fréquences hertziennes spécifiques et des antennes relais le plus souvent dédiées (antennes MIMO) qui peuvent être colocalisées avec celles d’un réseau UMTS.</br></br>
                </p>
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/R%C3%A9seau_de_t%C3%A9l%C3%A9phonie_mobile" target="_blank">Wikipedia - Réseau de téléphonie mobile</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Global_System_for_Mobile_Communications" target="_blank">Wikipedia - Global System for Mobile Communications</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Universal_Mobile_Telecommunications_System" target="_blank">Wikipedia - Universal Mobile Telecommunications System</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/LTE_(r%C3%A9seaux_mobiles)" target="_blank">Wikipedia - LTE (réseaux mobiles)</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/LTE_Advanced" target="_blank">Wikipedia - LTE Advanced</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/5G" target="_blank">Wikipedia - 5G</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.ssi.gouv.fr/uploads/IMG/pdf/cesar2011-papier-secu-reseaux-mobiles-kasmi-morin.pdf" target="_blank">ANSSI - État des lieux de la sécurité des communications cellulaires</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://developer.orange.com/wp-content/uploads/Livre-Blanc-sur-la-se%CC%81curite%CC%81-du-nomadisme.pdf" target="_blank">Orange - Nomadisme et sécurité</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.academia.edu/7453477/S%C3%A9curit%C3%A9_des_R%C3%A9seaux_Axel_Clyde_Boukono" target="_blank">Axel Clyde Boukono - Sécurité des Réseaux 2G / 3G / 4G</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.ummto.dz/dspace/bitstream/handle/ummto/6570/TakoucheKarim_DialloMamadouLamine.pdf?sequence=1&isAllowed=y" target="_blank">Takouche Karim & Diallo Mamadou Lamine - Sécurité des réseaux 4G/LTE</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>