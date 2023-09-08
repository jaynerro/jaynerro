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
    <link rel="stylesheet" href="../../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/vendor/fontawesome/all.min.css" />

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Hardware - Mémoire morte</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Hardware</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Mémoires</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Mémoire morte</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Mémoire morte
                </h1>
                <img src="../../../../images/rom.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 40px;"/>
                <p style="margin-top: 30px;" id="ROM">
                    Originellement, l'expression mémoire morte (en anglais, Read-Only Memory : ROM) désignait une mémoire informatique non volatile dont le contenu est fixé lors de sa programmation, qui pouvait être lue plusieurs fois par l'utilisateur, mais ne pouvait plus être modifiée.</br></br>
                    Avec l'évolution des technologies, la définition du terme mémoire morte (en français) ou read only memory (en anglais) a été élargie pour inclure les mémoires non volatiles dont le contenu est fixé lors de leur fabrication, qui peuvent être lues plusieurs fois par l'utilisateur et qui ne sont pas prévues pour être modifiées. Elles peuvent parfois cependant l'être par un utilisateur expérimenté, éventuellement avec un matériel spécial. Ces mémoires sont les UVPROM, les PROM, les EPROM et les EEPROM.
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>Utilisation</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Les mémoires mortes sont utilisées, entre autres, pour stocker :
                </p>
                <ul style="font-size: large; text-align: justify; color: white; margin-top: 30px;">
                    <li>les informations nécessaires au démarrage d’un ordinateur (BIOS, instructions de démarrage, microcode);</li>
                    <li>des tables de constantes ou des tables de facteurs de conversion ;</li>
                    <li>Elle fait aussi partie des microprogrammes présents dans les ordinateurs et la plupart des appareils électroniques (smartphone, baladeur et autres lecteurs de CD/DVD) mais aussi la plupart des appareils programmables (TV, réveil, machine à laver, lave vaisselle, etc.).</li>
                </ul>
                <p style="margin-top: 30px;">
                    Le temps d’accès à la mémoire morte est de l’ordre de grandeur de 150 nanosecondes comparativement à un temps d’accès d’environ 10 nanosecondes pour la mémoire vive. Pour accélérer le traitement des informations, les données stockées dans la mémoire morte sont généralement copiées dans une mémoire vive avant d’être traitées. On appelle cette opération le shadowing.
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>Types</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Les mémoires mortes sont classées selon la possibilité de les programmer et de les effacer :
                </p>
                <ul style="font-size: large; text-align: justify; color: white; margin-top: 30px;">
                    <li>Les ROM (Read Only Memory) dont le contenu est défini lors de la fabrication.</li>
                    <li>Les PROM (Programmable Read Only Memory) sont programmables par l’utilisateur, mais une seule fois en raison du moyen de stockage, les données sont stockées par des fusibles.</li>
                    <li>Les EPROM (Erasable Programmable Read Only Memory) sont effaçables et programmables par l’utilisateur.</li>
                    <li>Les UVPROM or Flash EPROM (Ultra Violet Programmable Read Only Memory) sont des mémoires programmables par l'utilisateur. Elles sont effaçables en les mettant dans une chambre à ultraviolet. Les UV Prom ont été remplacées par les EEPROM qui ne nécessitent pas d’être extraites de l'appareil pour être reprogrammées.</li>
                    <li>Les EEPROM (de l'anglais Electrically Erasable Programmable Read Only Memory) sont effaçables et programmables par l’utilisateur. Elles sont plus faciles à effacer que les EPROM car elles sont effaçables électriquement donc sans manipulations physiques. Elles constituent désormais le principal type de mémoire morte avec les mémoires SD, USB, CompactFlash et enfin les disques SSD.</li>
                </ul>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>La mémoire flash</b>
                </p>
                <p style="margin-top: 10px;">
                    La mémoire flash est une mémoire de masse à semi-conducteurs réinscriptible, c'est-à-dire possédant les caractéristiques d'une mémoire vive mais dont les données ne disparaissent pas lors d'une mise hors tension. La mémoire flash stocke dans des cellules de mémoire les bits de données qui sont conservées lorsque l'alimentation électrique est coupée.</br></br>
                    Sa vitesse élevée, sa durée de vie et sa faible consommation (qui est même nulle au repos) la rendent très utile pour de nombreuses applications : appareils photo numériques, téléphones cellulaires, imprimantes, assistants personnels (PDA), ordinateurs portables ou dispositifs de lecture et d'enregistrement sonore comme les baladeurs numériques, clés USB. De plus, ce type de mémoire ne possède pas d'éléments mécaniques, ce qui lui confère une grande résistance aux chocs.</br></br>
                    Les mémoires Flash sont une variété de mémoire EEPROM rapide et effaçable par secteur complet, et non par case individuelle. On trouve plusieurs interfaces pour les adresser, série (24cxx) commandées par bus I2C, SPI… ou parallèles (29cxx), en 8/16/32 bits. C'est ce type de mémoire qui est utilisé dans les BIOS des cartes mères et dans des cartes électroniques où elles enregistrent des informations inhérentes à la carte comme l'adresse MAC, le nom du constructeur ou le type de produit. Elles servent également dans les cartes mémoires SD, USB et CompactFlash mais aussi dans les disques SSD.
                </p>
                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/M%C3%A9moire_morte" target="_blank">Wikipedia - Mémoire morte</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Electrically-erasable_programmable_read-only_memory" target="_blank">Wikipedia - Electrically-erasable programmable read-only memory</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Hi%C3%A9rarchie_de_m%C3%A9moire" target="_blank">Wikipedia - Hiérarchie de mémoire</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>