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
    <link rel="stylesheet" href="../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Glossaire</title>
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../header.php'); ?>
    
    <div class="container" style="margin-top: 80px;">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1> 
            Glossaire
          </h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8" style="margin-left: 5%;">

          <h2 style="margin-top: 60px; font-size: 300%;">
            C
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/networking-hardware/switch.php">CAM</a>
          </h3>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer3.php">CIDR</a>
          </h3>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer2.php">CRC</a>
          </h3>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer1.php">CSMA/CD</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            I
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer3.php">IP</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            L
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/network-architecture.php">LAN</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            M
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer2.php">MAC</a>
          </h3>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/network-architecture.php">MAN</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            O
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/definition.php">OSI</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            R
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/osi-model/layer3.php">RFC</a>
          </h3>

          <h2 style="margin-top: 60px; font-size: 300%;">
            S
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/networking-hardware/switch.php">SFP</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            T
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/networking-hardware/switch.php">TTL</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            V
          </h2>

          <h3 style="margin-top: 35px;">
            <a href="./basics/network/networking-hardware/switch.php">VLAN</a>
          </h3>


          <h2 style="margin-top: 60px; font-size: 300%;">
            W
          </h2>

          <h3 style="margin-top: 35px; margin-bottom: 200px;">
            <a href="./basics/network/network-architecture.php">WAN</a>
          </h3>

          
        </div>
      </div>

  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('../footer.php'); ?>
</html>