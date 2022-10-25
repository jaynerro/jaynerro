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
    <title>Modèle OSI - Couche 5 à 7 : Le service DHCP</title>
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
                            <li class="breadcrumb-item"><a href="../../../../../knowledge-base.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle OSI</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 5 à 7</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le service DHCP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le service DHCP
                </h1>
                <p style="margin-top: 30px;"> 
                    L'adresse IP permet d'identifier une machine sur un réseau. Dans le cas d'un réseau IP (la majorité que vous rencontrerez et ceux qui nous intéressent), cette adresse est indispensable pour pouvoir communiquer avec les autres machines du réseau.</br>
                    Nous allons nous intéresser ici à la manière dont cette adresse peut être obtenue. On distinguera deux méthodes, une manuelle, pour laquelle vous choisissez vous-mêmes l'adresse IP de votre machine et une dynamique où c'est un serveur qui vous fournit cette adresse. Ce serveur s'appelle un serveur DHCP et nous verrons qu'il a d'autres utilités que la simple distribution d'adresses IP.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    <b>Principe du DHCP</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Il existe donc deux méthodes pour obtenir une adresse IP. Soit c'est vous qui la configurez (méthode manuelle), soit c'est un serveur qui vous la donne (méthode dynamique).</br>
                    La méthode manuelle pose quelques problèmes de prime abord. En effet, vous avez vu que pour qu'une machine puisse communiquer avec ses voisines, son adresse IP devait se trouver dans le même réseau que les autres machines.
                    Pour sortir du réseau local, il faut que notre machine connaisse l'adresse de la passerelle. Cela fait déjà quelques informations dont il faut avoir connaissance quand vous branchez votre ordinateur à un réseau local.</br></br>
                    Autre problème, même si vous avez ces informations, comment vous assurez-vous que l'adresse IP que vous choisissez n'est pas déjà utilisée par une autre machine sur le réseau ?</br></br>
                    On se rend donc bien compte qu'il serait bien d'avoir un mécanisme rapide et fiable pour adresser les machines d'un réseau. C'est là qu'entre en jeu le protocole DHCP.</br></br>
                    La première fonction d'un serveur DHCP (Dynamic Host Configuration Protocol) est de fournir des adresses IP (associées à un masque) aux machines en faisant la demande.</br>
                    Si vous avez configuré votre carte réseau pour récupérer son adresse IP automatiquement, votre machine va chercher à contacter un serveur DHCP susceptible d'être présent sur votre réseau local.</br></br>
                    Mais on vient de dire qu'on avait besoin d'une adresse IP pour contacter les autres machines du LAN et ici nous cherchons à dialoguer avec une autre machine. Il nous faut donc une adresse IP, non ? Est-ce qu'on ne se mord pas la queue ?</br></br>
                    Oui c'est vrai, on ne peut pas envoyer de paquets IP, étant donné que nous n'avons pas d'adresse IP. Par contre, nous avons une adresse MAC qui est liée à notre carte Ethernet. On peut donc envoyer des trames Ethernet.</br></br>
                    Néanmoins, s'il y a un serveur DHCP sur le réseau, nous n'avons aucun moyen de connaître son adresse MAC.</br></br>
                    Comment allons-nous pouvoir joindre le serveur DHCP ?</br>
                    Tout ceci devrait vous rappeler quelque chose, non ? Le problème est le même que pour le protocole ARP : nous allons utiliser l'adresse de broadcast !</br>
                    La trame permettant de trouver un serveur DHCP est une trame "DHCPDISCOVER", comme c'est un broadcast, elle est envoyée à l'adresse MAC ff:ff:ff:ff:ff:ff.</br></br>
                    Comme la trame est envoyée en broadcast, le serveur DHCP doit obligatoirement se trouver dans le même réseau que la machine. Comme vous le savez, les routeurs (qui délimitent les réseaux) séparent les domaines de broadcast et ne relaient pas. Néanmoins, certains routeurs disposent de méthodes pour relayer ces trames DHCPDISCOVER. Mais cela ne nous intéresse pas ici.</br></br>
                    Une fois que notre serveur DHCP reçoit le DHCPDISCOVER, il va renvoyer une proposition, c'est un DHCPOFFER. Il va proposer une adresse IP, un masque ainsi qu'une passerelle par défaut et parfois un serveur DNS.</br></br>
                    Les deux derniers sont facultatifs, car ils ne sont pas fondamentalement indispensables au fonctionnement réseau de la machine, bien qu'en pratique on ne puisse pas vraiment s'en passer.</br></br>
                    Le client (votre machine) répond par un DHCPREQUEST. Celui-ci est aussi envoyé en broadcast et sert à prévenir quelle offre est acceptée. Le serveur DHCP dont l'offre a été acceptée valide la demande et envoie un DHCPACK qui valide l'allocation du bail.</br></br>
                    On parle en effet de "bail", car cette attribution d'adresse IP a une durée limitée. Une fois expiré, il faut redemander une adresse IP.
                </p>
                <img src="../../../../../images/dhcp-process.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Requête DHCP complète
                </p>
                <p style="margin-top: 30px;"> 
                    Toutefois, lors d'un renouvellement, notre machine ne va pas refaire toute la procédure en commençant par un DHCPDISCOVER. On repart directement du DHCPREQUEST. Les serveurs DHCP conservent en mémoire les adresses qu'ils ont distribuées, associées aux adresses MAC. Ainsi, vous constatez que vous conservez parfois très longtemps la même adresse IP, même si votre bail a sûrement été renouvelé plusieurs fois.
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