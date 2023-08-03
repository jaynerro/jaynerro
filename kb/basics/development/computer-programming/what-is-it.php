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
    <link rel="stylesheet" href="../../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>La programmation informatique - Qu'est-ce que c'est ?</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Qu'est-ce que c'est ?</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Qu'est-ce que c'est ?
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    De manière générale, la programmation informatique est l'une des étapes du cycle de vie de l'obtention d'un logiciel. De façon plus précise, c'est l'écriture de ce qu'on appelle le code source d'un programme. Le programme informatique lui-même étant l'ensemble d'instructions machine qui permettent de résoudre un problème ou une tâche spécifique. C'est l'ensemble de ces instructions qu'on qualifie de « code source », et c'est leur écriture qui représente ce qu'on entend par programmation informatique.</br></br>
                    Donc lorsqu'on parle de programmation informatique, on fait référence à l'activité d'écriture d'instructions qui vont être interprétées par une machine pour exécuter une tâche ou pour résoudre un problème précis.</br></br>
                    L'activité de programmation informatique fait elle-même partie d'un cycle de vie plus global dans le développement du logiciel. Il y'a d'autres activités en amont comme le recueil de besoin, la spécification fonctionnelle, et d'autres activités en aval comme la validation fonctionnelle, et les tests unitaires. C'est l'ensemble des étape du cycle de vie de l'obtention du programme qu'on qualifie d'ingénierie logicielle (ou de développement informatique).</br></br>
                    Pour écrire un programme informatique (ou logiciel), on utilise un langage informatique.
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Pourquoi est-il nécessaire de développer des programmes informatiques ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    En fait, vous devez comprendre que tout appareil électronique, c'est-à-dire tout appareil capable de convertir le courant électrique en signal numérique a besoin d'un logiciel (autrement dit d'un programme informatique) pour fonctionner. Dit simplement, le logiciel est une façon à l'être humain de communiquer à l'appareil l'action qu'il veut que celui-ci exécute, et surtout la façon dont il veut que cette action soit effectuée. C'est au développeur de programmer la façon dont l'action en question sera effectuée grâce à un langage informatique.</br></br>
                    En réalité, chaque bouton sur un appareil électronique comme un ordinateur, une machine à laver, un téléphone, déclenche un programme informatique qui dit à l'appareil la tâche qu'il doit effectuer et de quelle manière il doit l'effectuer. Donc quand on parle de programmation informatique, ne voyez pas forcément les gros logiciels de type Microsoft ou Oracle. Toute action que vous pouvez programmer et qui est déclenché à la suite d'un événement (comme un clic sur un bouton, un double-clic, une diction, etc.) est un programme informatique.</br></br>
                    Un appareil électronique est composée de 2 parties : le Hardware et le Software. Le Hardware est la partie physique de l'appareil, c'est la partie qu'on voit. Tandis que le Software est le logiciel, la partie invisible qui fait vivre le Hardware.
                </p>
                <p style="margin-top: 30px;"> 
                    L'exécution d'une tâche dans tout matériel Tech (ordinateur, smartphone, smart TV ou même votre machine) passe par l'appel d'un programme qui y est intégré. Or, aujourd'hui, tout notre monde est basé sur l' High Tech. C'est pourquoi il vous faut un minimum de connaissance en programmation informatique.
                </p>

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