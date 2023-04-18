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
    <title>Réseaux sans fil - RFID</title>
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
                            <li class="breadcrumb-item active" aria-current="page">RFID</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="RFID"> 
                    RFID
                </h1>
                <p style="margin-top: 30px;"> 
                    La radio-identification, désignée par l'acronyme RFID (de l’anglais radio frequency identification), est une méthode pour mémoriser et récupérer des données à distance en utilisant des marqueurs appelés « radio-étiquettes » (« RFID tag » ou « RFID transponder » en anglais).</br></br>
                    Les radio-étiquettes sont de petits objets, tels que des étiquettes autoadhésives, qui peuvent être collés ou incorporés dans des objets ou produits et même implantés dans des organismes vivants (animaux, corps humain). Les radio-étiquettes comprennent une antenne associée à une puce électronique qui leur permet de recevoir et de répondre aux requêtes radio émises par l’émetteur-récepteur.</br></br>
                    Ces puces électroniques contiennent un identifiant et éventuellement des données complémentaires.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="group col-sm-8">  
                <img src="../../../../images/rfid-2.png" class="img-fluid float-right" style="max-width: 55%; margin-left: 2%; margin-top: 30px;"/>
                <img src="../../../../images/rfid-1.jpeg" class="img-fluid float-left" style="max-width: 39.8%; margin-left: 1%; margin-top: 30px;"/>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 50px; justify-content: start"> 
                    Cette technologie d’identification peut être utilisée pour identifier :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>les objets, comme avec un code-barres (on parle alors d’étiquette électronique) ;</li>
                    <li>les personnes, en étant intégrée dans les passeports, carte de transport, carte de paiement (on parle alors de carte sans contact) ;</li>
                    <li>les carnivores domestiques (chats, chiens et furets) dont l'identification RFID est obligatoire dans de nombreux pays, en étant implantée sous la peau. C'est également le cas de manière non obligatoire pour d'autres animaux de travail, de compagnie ou d'élevage de rente (on parle alors de puce sous-cutanée).</li>
                </ul>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Principe</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Un système de radio-identification est composé de deux entités qui communiquent entre elles :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Un marqueur, nommé radio-étiquette, tag RFID, ou encore transpondeur (de l'anglais transponder, contraction des mots transmitter et responder), apposé sur l'élément à identifier et encodant des données numériques. Ces données peuvent être lues sans ligne de vue directe, contrairement aux code-barres, avec une détection automatique et avec des distances de lecture supérieures (de 10 à 200 m selon le type de puces).</li>
                    <li>d’un ou plusieurs lecteurs RFID, appelés aussi interrogateurs, coupleurs, ou station de base.</li>
                </ul>
                <p style="margin-top: 30px;">
                    À ces deux éléments s'ajoute généralement un intergiciel (middleware) ou application hôte, constitué d'un terminal (ordinateurs de supervision), connecté au lecteur, et permettant l’exploitation des données collectées.</br></br>
                    Le système est activé par un transfert d'énergie électromagnétique. Le lecteur agit généralement en maître, il envoie une onde électromagnétique en direction de l'objet à identifier. Il active ainsi le marqueur, qui lui renvoie de l'information.</br></br>
                    Le lecteur envoie des requêtes aux tags RFID pour récupérer des données stockées dans leur mémoire. Le tag, généralement télé-alimenté par le signal du lecteur, génère en premier lieu un code permettant d’identifier l’objet sur lequel il est déposé. La communication entre les deux entités s'engage. Le lecteur peut procéder à une écriture d’information dans le tag.
                </p>
                <img src="../../../../images/rfid-3.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Principe de communication RFID avec une radio-étiquette passive
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Lecteurs</b>
                </p>
                <p style="margin-top: 30px;">
                    Le lecteur est le composant qui coordonne la communication RFID et assure la télé-alimentation des tags dans le cas de la RFID passifs. Il est composé d'un module radio fréquence pour la transmission et la réception, d’une unité de contrôle, d’une antenne, et d’une interface pour transmettre les données vers un terminal.</br></br>
                    Les lecteurs sont des dispositifs actifs, émetteurs de radiofréquences qui vont activer les marqueurs qui passent devant eux en leur fournissant à courte distance l’énergie dont ceux-ci ont besoin. Ainsi, le lecteur est constitué d’un circuit qui émet une énergie électromagnétique à travers une antenne, et une énergie électronique, qui reçoit et décode les informations envoyées par les marqueurs, puis les envoie au dispositif de collecte des données. Le lecteur est aussi à même d’écrire du contenu sur les tag RFID. Le lecteur RFID est l’élément responsable de la lecture des étiquettes radiofréquence, de l'écriture de contenu sur les tag RFID si besoin, et de la transmission des informations vers le middleware.</br></br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Basse fréquence</li>
                    <ul>
                        <li>125 kHz ;</li>
                        <li>134,2 kHz pour la charge du transpondeur ; 134,2 kHz pour un bit 0 et 123,2 kHz pour un bit 1 pour la réponse du transpondeur dans le cas d’une transmission FSK (Texas Instruments Series 2000) ;</li>
                    </ul>
                </ul>
                <p style="margin-top: 30px;">
                    Les caractéristiques physiques de ces tags, d'un poids et une taille réduits, font d'eux des candidats idéals pour être d'une part intégrés dans tout type de matériaux (textiles, métaux, plastiques, etc), et d'autre part pour l'identification du bétail. Les basses-fréquences permettent une lecture en tout milieu, mais à courte distance (quelques décimètres au maximum).
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Haute fréquence</li>
                    <ul>
                        <li>125 kHz ;</li>
                        <li>13,56 MHz (ISO 14 443 A 1-4, ISO 14443B 1-4, ISO 15693-3 et ISO 18000-3), la plus répandue actuellement dans l'industrie et le grand public pour des applications à portée limitée ;</li>
                    </ul>
                </ul>
                <p style="margin-top: 30px;">
                    Ces tags sont particulièrement fins, les antennes boucle pouvant être imprimées ou gravées. Ils sont utilisés pour des applications de logistique et de traçabilité, par exemple dans les applications de transport et d’identité39 : passeport, badge de transport comme le pass Navigo, badge de ski, cartes sans contact, contrôle d'accès des bâtiments, etc. Cette technologie est à la base des applications NFC (Near Field Communication), que l’on trouve dans de plus en plus de smartphones. Cette fréquence permet une lecture à une distance de l'ordre du mètre, mais est plus sensible à la proximité de métaux ou de liquides.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Ultra haute fréquence</li>
                    <ul>
                        <li>125 kHz ;</li>
                        <li>Ces fréquences ne sont pas harmonisées dans toutes les régions du monde, variant entre 860 et 960 MHz : 915 MHz aux États-Unis, de 865 MHz à 868 MHz dans l’Union européenne pour l’UHF (EPCglobal (en) et ISO 18000-6c). Les fréquences et les puissances d’émission dépendent des législations en vigueur. En conséquence, les tags doivent généralement présenter des bandes passantes importantes qui réduisent leurs performances.</li>
                    </ul>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Une application est par exemple le suivi des trains.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Supra-haute fréquence</li>
                        <ul>
                            <li>2,45 GHz ou 5,8 GHz (micro-ondes), permet des portées de plusieurs mètres, utilisé pour le télépéage notamment.</li>
                        </ul>
                </ul>
                <img src="../../../../images/rfid-4.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Gammes de fréquences les plus utilisées et quelques applications RFID 
                </p>
                <p style="margin-top: 30px;">
                    Une fréquence plus élevée présente l’avantage de permettre un échange d’informations (entre lecteur et marqueur) à des débits plus importants qu’en basse fréquence, et à une distance de lecture plus grande. Les débits importants permettent l’implémentation de nouvelles fonctionnalités au sein des marqueurs (cryptographie, mémoire plus importante, anti-collision). Par contre une fréquence plus basse bénéficiera d’une meilleure pénétration dans la matière.</br></br>
                    Le lecteur et le tag sont équipés d'antennes, qui doivent s’adapter à l’environnement. De plus, la RFID doit cohabiter d’un point de vue spectral avec d’autres technologies sans fil.</br></br>
                    L’anti-collision est la possibilité pour un lecteur de dialoguer avec un marqueur lorsque plus d’un marqueur se trouvent dans son champ de détection. Plusieurs algorithmes d’anti-collision sont décrits par les normes (ISO 14443, ISO 15693 et ISO 18000).</br></br>
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Radio-étiquettes</b>
                </p>
                <p style="margin-top: 30px;">
                    Le transpondeur RFID détient l’information (ex. prix du produit, nom du manufacturier, date de péremption, etc.) sur une puce électronique miniaturisée, associée à une antenne qui assure la transmission de l’information vers le lecteur RFID via fréquence radios.</br></br>
                    Le marqueur se compose :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>d’une antenne ;</li>
                    <li>d’une puce de silicium ;</li>
                    <li>d’un substrat et/ou d’une encapsulation.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un tag RFID est composé d’une antenne conçue pour fonctionner dans une bande de fréquence donnée, connectée à une puce électronique, qui stocke les données. Un circuit d’adaptation est nécessaire dans certains cas pour adapter l’impédance de l’antenne à celle de la puce.</br></br>
                    La capacité d'information d'une étiquette RFID est typiquement de 2 kB, mais la plupart ne contiennent qu'un numéro d'identification de 96 ou 128 bits.</br></br>
                    Outre de l’énergie pour l’étiquette, le lecteur envoie un signal d’interrogation particulier auquel répond l’étiquette. L’une des réponses les plus simples possibles est le renvoi d’une identification numérique, par exemple celle du standard EPC-96 qui utilise 96 bits. Une table ou une base de données peut alors être consultée pour assurer un contrôle d’accès, un comptage ou un suivi donné sur une ligne de montage, ainsi que toute statistique souhaitable.</br></br>
                    Le marqueur est extrêmement discret par sa finesse (parfois celle d’une feuille de Rhodoïd), sa taille réduite (quelques millimètres), et sa masse négligeable. Il est fabriqué par des technologies d'électronique imprimée. Son coût étant devenu minime, on peut envisager de le rendre jetable, bien que la réutilisation soit plus « écologiquement correcte ».</br></br>
                    Les tags RFID peuvent être classés en fonction de leur mode d’alimentation, leur fréquence d’utilisation, leur capacité cryptographique, leur protocole de communication, la présence ou non d’une puce électronique, leur performance de communication, leurs propriétés en lecture et/ou écriture, leur prix.</br></br>
                    Modes d'alimentation</br></br></br>
                    Tag passif</br>
                    Dénués de piles, ces tags tirent leur énergie des ondes magnétique ou électromagnétiques émises par le lecteur au moment de leur interrogation. Ils rétromodulent l'onde issue de l'interrogateur pour transmettre des informations. Ils n'intègrent pas d'émetteurs RF. La rétention des données est estimée à 10 ans et 100 000 cycles d’écriture.</br></br>
                    Ils sont peu coûteux à fabriquer : leur coût moyen de 2007 à 2016 se situe entre 0,10 € et 0,20 €  et varie de 0,05 € au minimum à 1,5 €. Ils sont généralement réservés à des productions en volume.</br></br>
                    Tag semi-actif</br>
                    Les étiquettes semi-actives (aussi appelés semi-passives ou encore BAP, Battery-Assisted Passive tags, en français marqueurs passifs assistés par batterie) utilisent l’énergie du lecteur pour générer la réponse à une requête lecteur. Elles agissent comme des étiquettes passives au niveau communication. En revanche, les autres éléments de la puce tels que le microcontrôleur et la mémoire tirent leur énergie d’une pile. Cette batterie leur permet, par exemple, d’enregistrer des données lors du transport. Ces étiquettes sont utilisées dans les envois de produits sous température dirigée et enregistrent la température de la marchandise à intervalle régulier.</br></br>
                    Ces tags sont plus robustes et plus rapides en lecture et en transmission que les tags passifs, mais ils sont aussi plus chers.</br></br></br>
                    Tag actif</br>
                    Les étiquettes actives sont équipées d’une batterie leur permettant d’émettre un signal. De ce fait, ils peuvent être lus depuis de longues distances (100 m environ), contrairement aux marqueurs passifs. En général, les transpondeurs actifs ont une plus grande capacité mémoire pour stocker diverses types d’information telles que le connaissement (128 Kb et plus). Ils sont principalement utilisés dans des applications de télémétrie, pour communiquer un grand nombre d'informations sur de grandes distances.</br></br>
                    Cependant, une émission active d’informations signale à tous la présence des marqueurs et pose des questions quant à la sécurité des marchandises. Autre limitation, leur durée de vie est de 5 ans maximum. Ces tags coûtent généralement plus chers (15 à 40 € en 2007). Le risque de collision entre la fréquence d’opération du transpondeur avec des ondes électromagnétiques usuelles est plus élevé, ce qui limite également la localisation très fine des produits.</br></br>
                    Les étiquettes sans puce font aussi leur apparition. Comme leur nom l'indique, ils ne disposent pas de circuit électronique. C'est l'impression de l'étiquette, basée sur des principes physiques ou chimiques, qui engendre un identifiant unique. D'un coût très faible, ces dernières peuvent être une alternative aux code-barres. Un exemple d'étiquette sans puce est le tag SAW (surface acoustic wave, onde acoustique de surface).</br></br>
                </p>
                 
            </div>
        </div>


        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Radio-identification" target="_blank">Wikipedia - Radio-identification</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/S%C3%A9curit%C3%A9_de_l%27information_au_sein_des_RFID" target="_blank">Wikipedia - Sécurité de l'information au sein des RFID</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>