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
    <title>La programmation informatique - Les instructions conditionnelles et itératives</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les instructions conditionnelles et itératives</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les instructions conditionnelles et itératives
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Ce sont des instructions qui vous permettent d’indiquer des conditions, des embranchement d’exécution et des itérations (ou boucles). Vous allez systématiquement les utiliser dans vos programmes informatiques.</br></br>
                </p>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>Les conditions</b>
                </p>
                <p style="margin-top: 30px;">
                    Une condition permet de vérifier si une affirmation est vraie ou fausse, comme son nom l’indique. Cela sert à évaluer l’instruction qui doit être exécutée. En algorithme voici comment c’est illustré :
                </p>
                <img src="../../../../images/if-else.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Vous voyez qu’il y a deux branches pour l’exécution du programme. Une instruction à exécuter si la condition est vraie et une autre différente si c’est le contraire. Chaque valeur de retour possède un bloc d’instructions que le programme va exécuter.</br></br>
                    Toutefois, pendant votre parcours, vous serez amené à voir une condition sans pour autant donner une instruction lorsque l’affirmation est fausse. C’est le cas de notre exemple dans la section opérateur. Mais pour une condition complète voici comme ça s’écrit :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/ifelse'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous pourriez aussi apercevoir des formes de condition imbriquées. C’est-à-dire une suite de conditions qui émettra des instructions selon leurs résultats.
                </p>
                <img src="../../../../images/if-else-2.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>Les boucles</b>
                </p>
                <p style="margin-top: 30px;">
                    Encore appelé instructions itératives, ce sont des instructions qui vont le plus souvent s’exercer sur les structures de données (le plus souvent les tableaux et les listes). Elles permettent de les parcourir, effectuer des opérations sur elles et changer leurs valeurs.</br></br>
                    L’utilisation des boucles est également adaptée lorsque vous souhaitez manipuler les suites de données ou itérer un ensemble d’instructions un nombre fois précis ou selon une condition.
                </p>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>La boucle For</b>
                </p>
                <p style="margin-top: 30px;">
                    C’est la boucle idéale lorsque vous souhaitez parcourir un tableau. Il va récupérer les valeurs de celui-ci selon l’ordre que vous avez indiqué dans la déclaration de la boucle. Cette boucle permet aussi d’itérer sur une instruction un nombre précis de fois. Ce que vous voyez ci-dessous est l’algorithme de base d’une boucle.
                </p>
                <img src="../../../../images/for.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Et voici comment cela s’écrit en code. Veuillez toujours vous rappeler que c’est juste un exemple de manière de coder. La syntaxe peut changer selon les langages.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/for'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Dans ce bout de code, le résultat affichera un chiffre à partir de 0 et jusqu’à ce que i atteigne 10.
                </p>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>La boucle ForEach</b>
                </p>
                <p style="margin-top: 30px;">
                    En ce qui concerne foreach, elle est plutôt utilisée sur une liste. Rien ne vous empêche toutefois de l’utiliser sur un tableau. Comme la boucle for, elle parcourt aussi le contenu de la liste.</br></br>
                    En algorithme, cela donne ce que nous voyons en bas :
                </p>
                <img src="../../../../images/foreach.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Elle va donc parcourir la liste et à chaque valeur, exécuter des instructions. Une fois que la liste est vide, le programme se poursuit. Vous pouvez donc déduire qu’elle décrémente la liste à chaque appel. Voici un exemple de code de foreach :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/foreach'?></code></pre>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>La boucle While</b>
                </p>
                <p style="margin-top: 30px;">
                    Jusqu’ici, nous avons vu des itérateurs conditionnels, c’est-à-dire des boucles qui exécutent des instructions uniquement si une condition est respectée. Ce qui n’est pas le cas de la boucle while. En effet, celle-ci demande la condition après l’exécution des instructions. Et si la condition n’est pas respectée, la boucle recommence. Les instructions seront donc exécutées au moins une fois.</br></br>
                    Toutefois, vous pouvez également l’utiliser comme les autres boucles. C’est-à-dire au début de l’instruction.</br></br>
                    Voici comment l’algorithme se présente :
                </p>
                <img src="../../../../images/while.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start">
                    Et voici un exemple d’implémentation :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/while'?></code></pre>
                <p style="margin-top: 30px;">
                    Ce que nous voyons ci-dessus est un exemple où la boucle while agit comme les autres boucles. L’exemple de code ci-après illustre son implémentation lorsqu’elle est utilisée à la fin de l’instruction :
                </p>
                <img src="../../../../images/while2.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <pre><code class="language-markup"><?php require_once'../../../../script/while2'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous remarquez sans doute qu’un préfixe do s’ajoute à l’appel de la boucle. C’est lui qui ordonnera au programme d’exécuter les instructions.</br></br>
                    Encore une fois, prenez ces exemples de code avec des pincettes, car l’utilisation et la spécification de chaque boucle varie en fonction du langage de programmation.
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