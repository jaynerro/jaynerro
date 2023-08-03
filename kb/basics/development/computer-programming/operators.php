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
    <title>La programmation informatique - Les opérateurs</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les opérateurs</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les opérateurs
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Les opérateurs en programmation informatique, comme ceux que vous pouvez retrouver en arithmétique, sont les symboles qui permettent d’effectuer des opérations. Mais en plus des fonctions que les opérateurs ont en mathématique, ceux qui sont utilisés en programmation peuvent agir sur tous les types de variables : booléennes, alphanumériques et numériques.</br></br>
                    Les opérateurs peuvent être unaires, binaires et ternaires. C’est-à-dire qu’ils peuvent effectuer plusieurs opérations différentes en même temps.</br></br>
                    Voyons quelques exemples d’opérateur :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>« + », « – », « x » et « / » ont une fonction semblable à ceux que l’on a retrouvés depuis notre enfance ;</li>
                    <li>Pour la division euclidienne avec reste, vous avez « % » ;</li>
                    <li>Pour incrémenter ou décrémenter une valeur, il y a « ++ » et « — » ;</li>
                    <li>Pour affecter une valeur à un variable ou pour le résultat d’une opération ou encore pour déterminer si deux ou plusieurs valeurs sont égales, vous utiliserez soit « : = », soit « == » soit « = » ;</li>
                    <li>Pour exprimer une différentiation, vous utiliseriez « != » ;</li>
                    <li>Pour exprimer une supériorité vous avez « > » ou « >= » et pour l’infériorité, c’est « < » et « <= » ;</li>
                    <li>Les opérateurs booléens sont : « && » (et), « || » (ou), et « ! » (non) ;</li>
                    <li>Les opérateurs logiques sont : « & » (et), « | » (ou), « ~ » (non) et « ^ » (NOR ou en français « ou exclusif »).</li>
                </ul>
                <p style="margin-top: 30px;">
                    Après il faut quand même noter que la signification des opérateurs varient fortement en fonction du langage de programmation. Illustrons les opérateurs avec des exemples en Java.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/operators1'?></code></pre>
                <p style="margin-top: 30px;">
                    Ici, on effectue l’addition de a et b pour affecter le résultat dans c. On utilise donc l’opérateur « + » pour l’addition et « = » pour l’affectation.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/operators2'?></code></pre>
                <p style="margin-top: 30px;">
                    Comme pour l’exemple précédent, on fait toujours « a + b », mais cette fois-ci on soumet les deux variables à une condition. On teste si leur valeur est différente de 0 avec l’opérateur « != » en séparant les deux conditions avec l’opérateur « && ».
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/operators3'?></code></pre>
                <p style="margin-top: 30px;">
                    Cette fois-ci, on vérifie si b est égal à 0. Pour cela, nous utilisons l’opérateur ternaire « ?: » pour soumettre la condition. Donc cette expression veut dire : si b = 0, c = a, sinon c = a + b.
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