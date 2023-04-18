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
    <link rel="stylesheet" href="../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Quelques outils à savoir utiliser</title>
    <link rel="icon" type="image/png" href="../../../images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
        <div class="row justify-content-center">
            <div class="col">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Quelques outils à savoir utiliser</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Quelques outils à savoir utiliser
                </h1>
                <p style="margin-top: 30px;"> 
                    Pour administrer des systèmes à distance, quelques outils peuvent se rendre utiles. En voici une liste non exhaustive :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li><a href="https://openvpn.net/" target="_blank">OpenVPN</a></li>
                    <li><a href="https://fr.wikipedia.org/wiki/Remote_Desktop_Protocol" target="_blank">RDP</a></li>
                    <li><a href="https://www.teamviewer.com/fr/" target="_blank">Teamviewer</a></li>
                    <li><a href="https://www.realvnc.com/fr/connect/download/viewer/" target="_blank">VNC</a></li>
                    <li><a href="../../../knowledge-base/basics/network/osi-model/layer5to7/ssh.php" target="_blank">SSH</a></li>
                    <li><a href="https://fr.wikipedia.org/wiki/PuTTY" target="_blank">PuTTY</a></li>
                    <li><a href="https://winscp.net/eng/index.php" target="_blank">WinSCP</a></li>
                </ul>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>