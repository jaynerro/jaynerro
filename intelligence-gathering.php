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
    <link rel="stylesheet" href="static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Veille informationnelle</title>
    <link rel="icon" type="image/png" href="/images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('header.php'); ?>
    
    <div class="container" style="margin-top: 80px;">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1> 
            Veille informationnelle
          </h1>
        
          <div class="row row-cols-1 row-cols-sm-3 g-4" style="margin-top: 40px;">
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text" style="color: black">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="position-absolute top-80 start-10 btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text" style="color: black">This is a short card.</p>
                  <a href="#" class="position-absolute top-80 start-10 btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text" style="color: black">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="position-absolute top-80 start-10 btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text" style="color: black">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <a href="#" class="position-absolute top-80 start-10 btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
      
  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>

