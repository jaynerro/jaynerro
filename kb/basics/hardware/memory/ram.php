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
    <title>Hardware - Mémoire vive</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Mémoire vive</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Mémoire vive
                </h1>
                <img src="../../../../images/ram.jpeg" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 40px;"/>
                <p style="margin-top: 50px;" id="RAM">
                    La mémoire RAM (de l’anglais Random Access Memory – Mémoire à accès aléatoire) permet le stockage de vos données sur le court terme. En cela, elle s’oppose au disque dur ou SSD qui va conserver les données sur le long terme, et ce, même si vous éteignez votre appareil.</br></br>
                    On l’appelle également « mémoire vive » en opposition à la « mémoire morte », qui conserve les données sur le long terme.</br></br>
                    C’est un composé matériel que l’on nomme couramment « barrette ». Celle-ci vient se brancher ou se clipser sur la carte mère de l’ordinateur. Sur la plupart des ordinateurs, il est donc possible d’ajouter des barrettes de RAM s’il y a des emplacements disponibles. Ceci afin de rendre l’appareil plus performant.</br></br>
                    Mémoire RAM, disque dur ou SSD et processeur fonctionnent ensemble pour vous garantir une rapidité d’exécution de vos différents programmes.</br></br>
                    Comment cela fonctionne-t-il ?</br></br>
                    Tout d’abord, les données sont stockées sur le disque dur ou SSD. Puis, le processeur envoie ces données à la mémoire vive afin que vous puissiez y accéder le plus rapidement possible. Cela vous permet également de faire fonctionner plusieurs programmes à la fois, qui utilisent tous une part de mémoire vive.</br></br>
                    Le processeur lit ensuite les données de la mémoire vive. Celles-ci sont ensuite écrasées. Elles sont perdues si vous éteignez votre ordinateur.</br></br>
                    Quels sont les différents types de mémoire RAM ?</br></br>
                    La mémoire RAM se divise en plusieurs types :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>La SRAM (Static Random Access Memory)</li>
                    <li>La DRAM (Dynamic Random Access Memory)</li>
                    <li>Et la SDRAM (Synchronous Dynamic Access Memory)</li>
                </ul>
                <p style="margin-top: 50px;">
                    La SRAM permet de stocker des données grâce à une cellule mémoire qui est composée de 6 transistors. Elle sert à conserver temporairement la mémoire cache d’un processeur. Elle est la solution la plus rapide.</br></br>
                    Quant à la DRAM, elle permet de stocker des données via un transistor et un accumulateur.</br></br>
                    La SDRAM est le type de RAM le plus récent. Elle répond aux nouvelles exigences des autres composants. Pour ce faire, elle fonctionne de pair avec le processeur. Elle a un débit de données doubles (qu’on appelle DDR) qui accélère sa performance.
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>Sécurité</b>
                </p>
                <p style="margin-top: 30px; font-size: large; margin-left: 15px; justify-content: start">
                    <b>Attaque par démarrage à froid</b>
                </p>
                <p style="margin-top: 10px;">
                    Bien que les spécifications de la mémoire dynamique indiquent que la conservation des données de la mémoire n'est garantie que si la mémoire est rafraîchie régulièrement (typiquement toutes les 64 ms), les condensateurs de cellules de mémoire conservent souvent leurs charges durant des périodes significativement plus longues, en particulier à basses températures. Sous certaines conditions, la plupart des données de la mémoire DRAM peuvent être récupérées même si la mémoire n'a pas été rafraîchie depuis plusieurs minutes.</br></br>
                    Cette propriété peut être utilisée pour contourner certaines mesures de sécurité et récupérer des données stockées dans la mémoire et supposées avoir été détruites à la mise hors tension de l'ordinateur. Pour ce faire, il suffit de redémarrer l'ordinateur rapidement et copier le contenu de la mémoire vive. Alternativement, on peut refroidir les puces de mémoire et les transférer sur un autre ordinateur. Une telle attaque a réussi à contourner des systèmes populaires de chiffrement de disque, tels que TrueCrypt, BitLocker Drive Encryption de Microsoft, et FileVault d'Apple. Ce type d'attaque contre un ordinateur est appelé une attaque par démarrage à froid (Cold boot attack).
                </p>
                <p style="margin-top: 50px; font-size: large; margin-left: 15px;  justify-content: start">
                    <b>Attaque par martèlement de mémoire</b>
                </p>
                <p style="margin-top: 10px;">
                    Le martèlement de mémoire (Row hammer) est un effet secondaire imprévu dans les mémoires dynamiques à accès directe (DRAM) qui provoque une fuite de charge électrique dans des cellules de mémoire, et en conséquence provoque une interaction électrique entre ces cellules et d'autres cellules voisines.
                </p>
                <p style="margin-top: 40px;">
                    ____________________________________________
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>La mémoire cache</b>
                </p>
                <p style="margin-top: 10px;">
                    La mémoire cache est un type de mémoire vive (RAM) à laquelle le microprocesseur peut accéder plus rapidement qu'à la mémoire RAM habituelle. Généralement, cette mémoire cache est directement intégrée dans la puce de l'unité centrale (UC) ou placée sur une puce distincte dotée d'une interconnexion par bus à l'UC.</br></br>
                    Une mémoire cache ou antémémoire est, en informatique, une mémoire qui enregistre temporairement des copies de données provenant d'une source, afin de diminuer le temps d'un accès ultérieur (en lecture) d'un matériel informatique (en général, un processeur) à ces données. Le principe du cache est également utilisable en écriture, et existe alors en trois modes possibles : write-through, write-back et write-around</br></br>
                    La fonction de base de la mémoire cache est de stocker les instructions de programme qui sont fréquemment re-référencées par les logiciels en cours d'exécution. L'accès rapide à ces instructions accroît la vitesse globale des logiciels.</br></br>
                    Lorsque le microprocesseur traite des données, il cherche d'abord dans la mémoire cache ; s'il y trouve les instructions (stockées suite à une précédente lecture des données), cela lui évite d'effectuer une lecture des données plus longue dans une mémoire plus volumineuse ou sur d'autres périphériques de stockage.</br></br>
                    La plupart des programmes utilisent très peu de ressources une fois qu'ils ont été ouverts et utilisés pendant un certain temps, principalement parce que les instructions souvent re-référencées ont tendance à être placées en mémoire cache. Cela explique pourquoi les mesures des performances système des ordinateurs équipés de processeurs plus lents mais de mémoires caches plus grandes ont tendance à être plus élevées que celles des ordinateurs plus rapides mais plus limités en espace mémoire cache.</br></br>
                    La mise en cache multiniveau est devenue courante dans les architectures serveur et des postes de travail, les différentes couches améliorant le rendement grâce à la gestion en niveaux. En termes simples, moins l'accès à certaines données ou instructions est fréquent, plus leur niveau d'écriture dans la mémoire cache est bas.
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
                    <a href="https://www.cyberpreventys.com/conseils-informatique-cybersecurite/memoire-ram-informatique/" target="_blank">Cyber Preventys - qu’est-ce que la mémoire RAM ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/M%C3%A9moire_vive" target="_blank">Wikipedia - Mémoire vive</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/M%C3%A9moire_vive_dynamique" target="_blank">Wikipedia - Mémoire vive dynamique</a>
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