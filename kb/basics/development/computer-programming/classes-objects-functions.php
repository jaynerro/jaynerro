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
    <title>La programmation informatique - Les classes, les objets et les fonctions</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les classes, les objets et les fonctions</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les classes, les objets et les fonctions
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    La classe peut s’apparenter à un moule dans lequel on fabrique un objet. C’est surtout dans la programmation orientée objet que cette notion prend tout son sens. Elle regroupe les attributs et les méthodes qui vont constituer un objet.</br></br>
                    Vous faites donc appel à une classe précise lorsque vous avez besoin de créer un objet possédant les attributs et les méthodes de celle-ci. C’est ce que l’on appelle l’instanciation d’une classe.</br></br>
                    Voyons un exemple de classe, mais cette fois-ci, en C# :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/classes'?></code></pre>
                <p style="margin-top: 30px;">
                    Dans le programme, on utilise une instance de la classe A dans la classe B pour effectuer une addition entre x et y. Ce qui veut dire que vous pouvez utiliser les méthodes d’une classe dans une autre sans aucun souci. Cliquez sur le lien suivant pour plus de détails sur la programmation orientée objet et les classes.</br></br>
                    À l’issue de ce que vous venez de voir, on déduit l’objet. L’objet est le résultat de l’instanciation d’une classe. Dans l’exemple précédent, A1 est donc un objet de la classe A. Vous pouvez par la suite créer d’autres objets A2, A3, etc. grâce à la classe A.</br></br>
                    Vous savez maintenant qu’un objet est une instanciation d’une classe. Et vous avez appris aussi que chaque classe contient des attributs et des méthodes. Et bien, les fonctions sont justement ces méthodes.</br></br>
                    Une fonction permet d’exécuter les requêtes du programme à l’aide d’une suite d’instructions. Une fonction peut avoir un ou plusieurs paramètres. Il peut aussi ne pas en avoir. Il en va de même en ce qui concerne sa valeur de retour.</br></br>
                    Pour écrire une fonction sans valeur de retour, vous utiliseriez par exemple le préfixe « void ». Et pour celles qui ont des valeurs, souvent c’est le type de la valeur qui sera mis en préfixe. Nous allons voir un peu plus bas les types qui existent en programmation informatique.
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