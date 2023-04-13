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
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Modèle Client-Serveur : Serveur FTP</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle Client-Serveur</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Serveur FTP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Serveur FTP
                </h1>
                <img src="../../../../images/ftp.png" class="img-fluid mx-auto d-block" style="max-width: 25%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Le serveur FTP ou Hébergeur FTP (En anglais « FTP host ») est un espace de stockage. Il s’avère essentiel afin de mettre en ligne les fichiers de vos sites internet ou applications.
                </p>
                <p style="margin-top: 30px; justify-content: start" id="FTP">
                    <b>Définition et usages du protocole FTP</b>
                </p>
                <p style="margin-top: 20px;">
                    Comme son nom l’indique, le File Transfer Protocol (FTP) est un protocole de transfert de fichiers par Internet. Il permet l’échange de commandes et de données entre un ordinateur ou un logiciel, le client FTP, et un serveur, l’hôte FTP. Ce serveur FTP est un répertoire distant. Il héberge les données de votre site web ou de vos applications afin de faciliter leur mise en ligne, leur migration ou leur partage… à la manière d’un centre de données.
                    Le protocole FTP permet d’établir une connexion entre le serveur et le client, grâce à un canal de commandes FTP. Sur ce canal, le webmaster a la possibilité d’utiliser des lignes de commandes telles que « get », pour obtenir un fichier, ou « close », pour fermer la session FTP en cours. Il peut également gagner du temps, en utilisant un logiciel dédié aux services d’hébergement.
                    De nombreux logiciels clients FTP facilitent en effet ces commandes. Les plus connus sont FileZilla et Cyberduck.
                    Le protocole FTP va alors permettre de transmettre les fichiers, textes et images depuis l’ordinateur du gestionnaire de site vers un hébergement web, l’hébergeur FTP. Une fois importées sur le serveur FTP, ces données pourront être publiées. Elles seront donc accessibles aux internautes via leur navigateur.
                    De nombreux cas d’usage existent :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>utiliser le serveur FTP pour transférer des données d’un ordinateur à un autre ;</li>
                    <li>mettre en place un intranet afin de partager des fichiers en haute disponibilité ou sécuriser les accès ;</li>
                    <li>héberger des données sur un serveur mutualisé pour libérer de l’espace disque sur un serveur physique ;</li>
                    <li>créer un site internet ou migrer des contenus vers un nouveau nom de domaine ;</li>
                    <li>sauvegarder des fichiers importants (backup) ;</li>
                    <li>centraliser l’information de plusieurs sites web et noms de domaine.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    <b>Différences entre FTP, FTPS et SFTP</b>
                </p>
                <p style="margin-top: 20px;">
                    Protocole FTP</br></br>
                    Le protocole FTP est la méthode standard de transmission des données entre un client FTP et un serveur FTP. Avec lui, il est possible de réguler les accès des utilisateurs avec un identifiant et un mot de passe.</br></br>
                    Cependant, si la connexion au serveur est sécurisée, la transmission des données, elle, ne l’est pas. En effet, les informations en transit via les standards FTP ne sont pas chiffrées. Elles peuvent donc être interceptées par des tiers malintentionnés. Cette faille explique le développement de deux nouveaux protocoles sécurisés : le FTPS et le SFTP.
                </p>
                <p style="margin-top: 20px;" id="FTPS">
                    Protocole FTPS</br></br>
                    Le FTPS est la déclinaison sécurisée du protocole FTP. Il apporte un niveau de sûreté supplémentaire à votre serveur FTP et donc, in fine, à votre site web. Grâce au chiffrement SSL/TLS, les données (fichiers, logs…) qui transitent entre le client et le serveur FTP sont protégées.
                </p>
                <p style="margin-top: 20px;" id="SFTP">
                    Protocole SFTP</br></br>
                    SFTP signifie « SSH File Transfer Protocol » ou « Secure File Transfer Protocol ». Comme le FTPS, le protocole SFTP vise à sécuriser le flux de données transmis entre le client FTP et le serveur FTP. Pour cela, il s’appuie lui aussi sur un algorithme de chiffrement, le tunnel SSH sécurisé, qui protège les informations. Il est également possible de renforcer la sécurité de votre espace FTP, en mettant en place un système d’authentification avec identifiant et mot de passe : la clé SSH.</br></br>
                    Durant tout le processus de transmission des données via le tunnel SSH sécurisé et la synchronisation des dossiers, les informations restent illisibles. Quant aux clés SSH, elles empêchent tout accès frauduleux aux fichiers du ou des sites web hébergés sur le serveur FTP.</br></br>
                    Le SFTP est donc le protocole le plus sécurisé pour transférer des données entre un client FTP et un serveur FTP.
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
                    <a href="https://www.ovhcloud.com/fr/web-hosting/ftp-host/" target="_blank">Hébergeur FTP</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="http://sdz.tdct.org/sdz/creer-son-serveur-ftp.html" target="_blank">Tutoriel : Créer son serveur FTP</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.youtube.com/watch?v=6P34aPSlReU" target="_blank">Comment créer un Serveur FTP sur Windows Server (2023)</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>