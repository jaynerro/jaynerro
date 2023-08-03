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
    <link rel="stylesheet" href="../../../../static/css/tree.css">
    
    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>

    <?php // Titre de l'onget de la page ?>
    <title>La programmation informatique - Les structures de données</title>
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
                            <li class="breadcrumb-item"><a href="../../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Développement</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">La programmation informatique</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Les structures de données</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les structures de données
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Avant d'exécuter une instruction, vous devez récupérer les valeurs que vous allez utiliser lors de cette instruction. N'est ce pas ? Donc, où stocker ces valeurs exactement ?</br></br>
                    Les structures de données servent justement à effectuer ce stockage entre autres. Mais cela ne se fait pas n'importe comment, il y a une classification précise établie lors de la création de la structure.</br></br>
                    Il existe plusieurs types de structures de données comme par exemple, les listes et les tableaux que nous allons voir ci-après. Mais aussi, d'autres types plus ou moins complexes comme les graphes, les piles, les files, etc. Étant donné que vous serez amenés à utiliser ces structures de données systématiquement, nous allons voir plus en détail les plus importantes entre elles.
                </p>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>Les listes</b>
                </p>
                <p style="margin-top: 30px;">
                    Une liste est une collection ordonnées de données de même type. Sa définition et ses caractéristiques peuvent changer d’un langage à un autre. Par exemple, en programmation scala, une liste est une collection immutable de données de même type.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/list'?></code></pre>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>Les tableaux</b>
                </p>
                <p style="margin-top: 30px;">
                    Le principe d’un tableau est semblable à celui d’une liste. La différence est que le nombre de lignes est prédéfini. Vous pouvez créer un tableau avec plusieurs lignes et plusieurs colonnes, comme pour un tableau quelconque. Tout comme pour les listes, la définition et les caractéristiques du tableau varient en fonction du langage. En scala par exemple, un tableau est une collection ordonnée et mutables des valeurs de même type. Voici un exemple de déclaration de tableau, d’insertion et de lecture d’une valeur. 
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/array'?></code></pre>
                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Programmation_informatique" target="_blank">Wikipedia - Programmation informatique</a>
                </h6>             

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.data-transitionnumerique.com/programmation-informatique-guide-complet/" target="_blank">Data Transition Numérique - Apprendre à coder : le guide ultime de la programmation informatique</a>
                </h6>              

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>