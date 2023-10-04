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
    <title>Les interfaces - Connectique de stockage</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Connectique de stockage</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Connectique de stockage
                </h1>
                <p style="margin-top: 50px; justify-content: start">
                    Au niveau stockage, on retrouve souvent les connectiques : 
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>SATA</li>
                    <li>SCSI</li>
                    <li>SAS</li>
                </ul>
                <img src="../../../../images/sas.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 40px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    SATA vs SAS
                </p>
                <img src="../../../../images/sata2.jpg" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 40px;"/>
                <p style="margin-top: 20px; font-size: small;">
                   Cable SATA
                </p>
                <img src="../../../../images/scsi.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 40px;"/>
                <p style="margin-top: 20px; font-size: small;">
                   Cable SCSI
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
                    <a href="https://fr.wikipedia.org/wiki/Serial_ATA" target="_blank">Wikipedia - Serial ATA</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.data-labcenter.fr/glossaire/scsi-sas/#:~:text=Le%20Small%20Computer%20System%20Interface,disquette%2C%20imprimante%2C%20scanner)." target="_blank">LabCenter - SCSI / SAS</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Small_Computer_System_Interface" target="_blank">Wikipedia - Small Computer System Interface</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Serial_Attached_SCSI" target="_blank">Wikipedia - Serial Attached SCSI (SAS)</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>