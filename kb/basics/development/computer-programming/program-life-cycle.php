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
    <title>La programmation informatique - Les différentes phases de cycle de vie de la programmation</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Les différentes phases de cycle de vie de la programmation</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Les différentes phases de cycle de vie de la programmation
                </h1>
                <img src="../../../../images/code.jpg" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Pour terminer, il est indispensable que vous sachiez comment est fabriqué un programme informatique. Autrement dit, les différentes étapes qui entre dans le développement d’un logiciel de sa conception sur une feuille blanche à son déploiement sur un ordinateur par des utilisateurs. On appelle cela formellement le cycle de vie du programme informatique. Nous en avions parlé un peu dans les sections précédentes, mais il est important pour bien démarrer de comprendre ces différentes étapes.</br></br>
                    Avant d’entrer dans le cycle de vie proprement dit, il est important que vous sachiez qu’il existe plusieurs types de programmes en fonction de leur utilité. Ce type dépend pour une part du support sur lequel vous souhaitez le déployer. Par exemple, lorsque vous développer une application qui va tourner sur Internet, on parle de site web ou d’application web. Pour une application à usage local sur un PC, on parle d’application desktop. Pour une application à usage local sur un téléphone, on parle d’app mobile. Si c’est une application qui sert des ressources à d’autres applications, on parle de backend. Si au contraire ce sont des applications qui vont demander une ressource, on parle d’application cliente ou client. Si c’est une application en intermédiaire entre un client et un backend, on parle de middleware. Il existe aussi des programmes destinés à être utilisés par d’autres application par incorporation de cette dernière. Ce sont justement des API, des bibliothèques ou des extensions.</br></br>
                    Le cycle de vie peut légèrement varier en fonction du type d’application, mais globalement voici les phases de développement d’un programme informatique :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>L’implémentation : c’est la phase d’écriture du code. C’est pendant cette phase qu’on applique toutes les bases que vous vues précédemment.</li>
                    <li>Le Débogage : c’est une étape dans laquelle vous allez sans doute passer beaucoup de temps. En effet, les bugs peuvent toujours survenir, même avec ceux qui sont très expérimentés. Il s’agit ici de corriger les erreurs de code. Pour se faire, il vous faut identifier d’où provient l’erreur, puis la corriger.</li>
                    <li>L’interprétation : le rôle de l’interprétation est similaire à celui de la compilation. Elle a pour but d’interpréter le code en langage machine, car il y’a des langages qui sont interprétés comme le Python ou le VBA, et il y’a d’autres qui sont compilés. A la différence d’un compilateur, un interpréteur lit les lignes de codes une à une.</li>
                    <li>la compilation : à ce stade, vous savez qu’un ordinateur ne peut pas comprendre le langage humain. D’ailleurs, il ne comprend pas les langages de programmation non plus. La compilation est la phase où le code que l’on a écrit dans le langage de programmation est transformé en langage machine par un logiciel particulier appelé compilateur. Avant que le compilateur traduise les codes, il va procéder à une vérification et signalera tout erreur dans la syntaxe ou dans la structure du code qui lui a été soumis.</li>
                    <li>les tests : une fois votre programme compilé ou interprété, vous devez absolument le tester. Plusieurs types de tests doivent être faits avant de lancer une application ou un logiciel en mode réel. Il y’a des tests unitaires, qui consistent à tester le programme fonction par fonction, les tests d’intégration dans lesquels on teste un module du programme et son intégration avec les autres modules du programme, les tests système où tout le système sera soumis à une vague de test pour mesurer son niveau de conformité, et les tests d’acceptation qui sont une suite des tests système dans la vérification de la conformité du programme. Lors de l’exécution de ces tests, tout ce qui a été fait doit être consigné dans un cahier de tests.</li>
                </ul>
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