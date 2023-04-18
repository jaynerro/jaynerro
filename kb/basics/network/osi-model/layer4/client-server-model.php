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
    <link rel="stylesheet" href="../../../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Modèle OSI - Couche 4 : Le modèle client-serveur</title>
    <link rel="icon" type="image/png" href="../../../../../images/jaynerro-icon.png">

  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../../../header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
        <div class="row justify-content-center">
            <div class="col">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle OSI</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 4</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le modèle client-serveur</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le modèle client-serveur
                </h1>
                <p style="margin-top: 30px;">
                    Avant de rentrer plus en détail dans la couche 4, nous allons voir en détail ce qu'est une application et le modèle client-serveur.
                </p>
                <img src="../../../../../images/client-server-model.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start">
                    <b>Le serveur</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour une application client / serveur, il faut un serveur.</br>
                    Le propre d'un serveur est d'offrir un service. Par exemple, si l'on prend le cas d'un serveur web, son rôle est de mettre à disposition des internautes des pages web. 
                    Un serveur de messagerie mettra à disposition des adresses mail ainsi qu'un service d'envoi et de réception de mails.</br></br>
                    On peut donc dire d'une machine qu'elle est un serveur, dès lors qu'elle fournit un service.</br></br>
                    Le détail d'un serveur</br>
                    Sans descendre au niveau du fonctionnement basique d'un serveur et du langage de programmation qui a été utilisé pour le créer, nous allons quand même essayer de comprendre le mode de fonctionnement d'un serveur.</br></br>
                    Le serveur écoute</br>
                    Étant donné que le serveur est censé fournir un service accessible tout le temps, on dit qu'il est en écoute. En fait, le serveur va écouter sur le réseau et être prêt à répondre aux requêtes qui lui sont adressées.</br>
                    Vous pouvez tout à fait le voir sur une machine virtuelle Linux, ou même sur un autre système d'exploitation avec la commande netstat -an. Le résultat étant un peu un fouillis, je vous propose, sous Linux, d'utiliser l'option -antp.
                </p>
                <img src="../../../../../images/client-server-model-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Ici, trois colonnes nous intéressent.</br>
                    La colonne Adresse locale nous donne l'adresse IP en écoute, ainsi qu'un numéro que nous ne connaissons pas encore.</br>
                    La colonne Etat nous indique... l'état du service !</br>
                    La colonne PID/program name nous indique le numéro du processus en écoute ainsi que son nom.</br></br>
                    Si je prends par exemple la seconde ligne, je vois que j'ai un service MySQL qui tourne sur le numéro 3306 de l'adresse IP 127.0.0.1. Son état LISTEN montre qu'il est en écoute, ce qui est bien pour un service.</br>
                    127.0.0.1 étant une adresse IP spéciale, réservée pour une utilisation locale, ici, notre serveur MySQL sera injoignable depuis le réseau. Il ne sera joignable que depuis la machine elle-même. Cela évite de rendre un service accessible aux autres si on n'en a besoin que localement.</br></br>
                    On peut dire ici que ma machine est un serveur, car elle fournit des services sur le réseau (des programmes sont en écoute et sont prêts à répondre à des requêtes qui leur parviennent).</br></br>
                    On peut s'interroger sur deux autres lignes et notamment sur leurs états. Il y a une ligne à l'état ESTABLISHED qui montre que la connexion est établie.</br>
                    Cela veut dire que notre machine est en train de fournir un service, quelqu'un est connecté sur notre machine.</br>
                    Enfin, l'état TIME WAIT montre d'anciennes connexions qui sont en cours de terminaison.</br></br>
                    Conclusion</br>
                    On peut donc en déduire qu'un service est un programme qui est en écoute sur une machine. On peut alors appeler cette machine un serveur.
                    Mais ce service ne servirait à rien s'il n'était pas utilisé, et pour cela, il faut que des clients viennent se connecter dessus et l'utilisent !
                </p>
                <p style="margin-top: 70px; justify-content: start">
                    <b>Le client</b>
                </p>
                <p style="margin-top: 30px;">
                    Le client est simplement un programme qui se connecte à un service pour l'utiliser. Vous en connaissez plein, et d'ailleurs vous en utilisez tous les jours !</br></br>
                    Oui, en ce moment même vous utilisez un client web qui est votre navigateur et qui se connecte au serveur de Jaynerro.
                    C'est bien une connexion client/serveur qui est établie entre votre navigateur et le serveur web de jaynerro.com.</br></br>
                    Vous utilisez peut-être également un client de messagerie comme Outlook, Thunderbird ou Evolution.
                    Vous pouvez aussi utiliser un client FTP pour le transfert de fichiers, comme Filezilla.
                    Si vous jouez un peu en ligne, vous utilisez sûrement un client pour vous connecter à votre jeu préféré qui fonctionne sur un serveur sur Internet.</br></br>
                    Un client peut-il être serveur ? Et vice versa ?</br></br>
                    Oui, bien sûr ! Par exemple, on a vu dans le paragraphe précédent que ma machine était serveur, mais c'est aussi avec cette machine que je me connecte sur des sites web en tant que client. Elle joue donc à la fois le rôle de client et celui de serveur.</br></br>
                    Alors il n'y a que des machines qui ont les deux rôles ?</br></br>
                    Non, la plupart du temps, les machines serveur ne jouent pas le rôle de client, ou très peu. Elles sont spécialisées en tant que serveur et pour des raisons de sécurité, on limite les services disponibles à ceux qui sont strictement nécessaires, et on évite que cette machine ait une activité de client qui pourrait engendrer des failles.
                    De la même façon, on considère que les machines des utilisateurs comme vous et moi jouent en majeure partie le rôle d'un client et sont donc vues comme des clients et non des serveurs.</br></br></br>
                    On peut dire qu'Internet est aujourd'hui massivement basé sur un fonctionnement client/serveur.</br></br>
                    Ceci dit, ce n'est pas l'unique façon de se connecter. En peer to peer par exemple, chacun peut prendre le rôle de client et de serveur. De même, le service n'est pas assuré par un seul et unique serveur auquel on s'adresse, mais par tout un ensemble de machines qui possèdent la ressource.
                </p>
                
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    "Apprenez le fonctionnement des réseaux TCP/IP" de Eric Lalitte - Collection OpenClassrooms
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>