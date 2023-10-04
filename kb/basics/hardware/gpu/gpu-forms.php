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
    <title>Les processeurs graphiques - Différents types de processeurs</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Les processeurs graphiques</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Différents types de processeurs</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Différents types de processeurs
                </h1>
                <img src="../../../../images/gpu2.png" class="img-fluid mx-auto d-block" style="max-width: 75%; margin-top: 40px;"/>
                <p style="margin-top: 50px;">
                    Il existe différents types de processeurs graphiques, également appelés processeurs géométriques.</br></br>
                    Les tâches graphiques au sein de premiers systèmes informatiques étaient partagés entre processeur géométrique (quand il y en avait un) et processeur vidéo (indispensable pour envoyer l'image à afficher vers l'écran). Le premier est chargé de faire des opérations graphiques au sein de la mémoire, allégeant ainsi le processeur général de cette tâche.</br></br>
                    Aujourd'hui on parle également de processeur vidéo pour désigner un processeur de traitement de signal, utilisé pour le décodage de vidéogrammes, ça n'est pas le sujet abordé ici. Les processeurs vidéos dans leur fonction graphique, permettent sur les premiers systèmes informatiques de modifier l'image au moment de l'envoyer à l'écran, alors typiquement, un écran à balayage, utilisant un canon à électrons parcourant l'écran de gauche à droite et de haut en bas. Ce processeur est synchronisé avec le balayage, et permet donc de gérer de façon synchrone plus ou moins de modification sur l'image (position à lire en mémoire, couleur), évitant ainsi le processeur principal et le processeur graphique de tâches lourdes comme des modifications ou transferts de mémoire.
                </p>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>Différences au niveau de l’architecture</b>
                </p>
                <p style="margin-top: 30px;">
                    AMD a opté pour l’architecture RDNA pour ses cartes graphiques. C’est une architecture qui convient parfaitement à la nouvelle génération du gaming haute performance. Grâce à l’architecture RDNA, vos jeux en ligne prennent vie et l’expérience utilisateur est nettement plus agréable.  La RDNA est en constante évolution et elle se présente comme un concentré de performance surtout si l’on se réfère aux cartes graphiques AMD Radeon RX Série 7900.</br></br>
                    Grâce à sa programmation et à sa performance, cette carte est compatible avec l’architecture GCN. La réorganisation du flot de données est optimisée et le processeur de la carte renforce davantage sa performance et accroît son efficacité.</br></br>
                    Quant à la carte graphique Nvidia, elle a choisi l’architecture Pascal. Toutefois, les modèles récemment sortis utilisent l’architecture Turing. Celle-ci privilégie la technique du Ray Tracing au centre du fonctionnement de ses cartes graphiques Nvidia. Cette technique gère différemment la lumière, donc le rendu de l’image sur votre écran est différent de ce qu’on obtient avec la carte graphique AMD.</br></br>
                    Pour conclure, les deux techniques s’opposent mais l’une comme l’autre garantit un rendu visuel époustouflant. Les deux cartes sont toutes parfaites pour le gaming, le graphisme pur et l’affichage 3D.
                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Processeur_graphique" target="_blank">Wikipedia - Processeur graphique</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.selectronic.fr/informatique/amd-vs-nvidia/" target="_blank">Selectronic.fr - AMD VS Nvidia : quelle marque de carte graphique choisir</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>