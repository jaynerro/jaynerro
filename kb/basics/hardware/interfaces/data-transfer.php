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
    <title>Les interfaces - Interfaces de transfert de données</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Les interfaces</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Interfaces de transfert de données</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Interfaces de transfert de données
                </h1>
                <img src="../../../../images/usb.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 40px;"/>
                <p style="margin-top: 50px;" id="USB">
                    L'USB (de l'anglais, « Universal Serial Bus ») est une norme de bus informatique série qui sert à connecter des périphériques informatiques à un ordinateur ou à tout type d'appareil prévu à cet effet (tablette, smartphone, etc.). Le bus USB permet de connecter des périphériques « à chaud » (quand l'ordinateur est en marche) et en bénéficiant du plug and play qui reconnaît automatiquement le périphérique. Il peut alimenter les périphériques peu gourmands en énergie (clé USB, disques SSD) et, pour ses dernières versions à prise USB Type-C, des appareils réclamant plus de puissance (60 W en version standard, 240 W au maximum).</br></br>
                    Les interfaces Thunderbolt permettent elles, à la fois le transfert de données, la sortie vidéo et la recharge via le même câble. 
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
                    <a href="https://fr.wikipedia.org/wiki/USB" target="_blank">Wikipedia - USB</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Thunderbolt_(interface)" target="_blank">Wikipedia - Thunderbolt</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>