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
    <title>Modèle OSI - Couche 2 : La couche Liason de données</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle OSI</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Couche 2 : La couche Liason de données</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Couche 2 : La couche Liason de données
                </h1>
                <p style="margin-top: 30px;">
                    <b>Son rôle</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Le rôle de la couche 2 est de connecter des machines sur un réseau local. Plus exactement, l'objectif est de permettre à des machines connectées ensemble de communiquer. </br></br>
                    La couche 2 possède un autre rôle important qui est la détection des erreurs de transmission. Détection, et non pas correction, la différence est importante, car la couche 2 verra les erreurs, et fermera les yeux sur celles-ci.
                </p>
                <p style="margin-top: 50px;" id="MAC">
                    <b>Son identifiant : l'adresse MAC</b>
                </p>
                <p style="margin-top: 30px;"> 
                    En réseau, la plupart du temps on veut parler à une machine en particulier. Et pour pouvoir parler à une machine en particulier, il va bien falloir être capable de l'identifier. Les chercheurs ont donc créé un identifiant particulier à la couche 2 qui permettrait de distinguer les machines entre elles : l'adresse MAC (Media Access Control). </br></br>
                    L’adresse MAC n’est pas exactement l’adresse d’une machine, il s’agit de l'adresse d'une carte réseau. </br></br>
                    L’adresse MAC s’écrit en hexadécimal (exemple : 00:23:5e:bf:45:6a). Elle est codée sur 6 octets. Ainsi, chaque adresse MAC va être unique au monde. </br>
                    Une adresse MAC est composée de 2 parties :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>La première moitié (les 3 premiers octets) identifie le fabricant de la carte réseau.</li>
                    <li>La deuxième moitié identifie la carte réseau elle-même.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Parmi les adresses MAC, il y en a une particulière, c'est l'adresse dans laquelle tous les bits sont à 1, ce qui donne ff:ff:ff:ff:ff:ff : il s’agit de l'adresse de broadcast. </br>
                    L'adresse de broadcast est une adresse universelle qui identifie n'importe quelle carte réseau. </br>
                    Elle me permet ainsi d'envoyer un message à toutes les cartes réseaux des machines présentes sur mon réseau, en une seule fois.
                    Toute machine qui reçoit une trame qui a, comme adresse MAC de destination, l'adresse de broadcast, considère que la trame lui est destinée. </br>
                </p>
                <p style="margin-top: 30px;"> 
                    Maintenant, nous savons relier les ordinateurs entre eux grâce à la couche 1 et les identifier grâce à l'adresse MAC de couche 2. Il manque un langage pour pouvoir les faire communiquer...
                </p>
                <p style="margin-top: 50px;">
                    <b>Un protocole : Ethernet</b>
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    Ethernet n'est pas le seul protocole de la couche 2, mais il est de très loin le plus utilisé aujourd'hui. Exemples d'autres protocoles de la couche 2 : MPLS, STP, Token ring, CDP, LLSP, CAN, PPP, ATM, etc.
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    <b>À quoi sert un protocole ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    L'objectif des réseaux est de pouvoir s'échanger des informations. Étant donné que nous discutons entre des machines très différentes, qui elles-mêmes ont des systèmes d'exploitation très différents (Windows, Mac OS, Linux, etc.), nous devons créer un langage de communication commun pour se comprendre. C'est le protocole. </br>
                    Nous avons vu que des 0 et des 1 allaient circuler sur nos câbles. Nous allons donc recevoir des choses du genre : 001101011110001100100011111000010111000110001...</br>
                    Ce qui ne veut pas dire grand-chose... tant que nous ne nous entendons pas sur leur signification. Le protocole va ainsi définir quelles informations vont être envoyées, et surtout dans quel ordre.</br></br>
                    Dans notre message, nous allons au moins devoir envoyer :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'adresse de l'émetteur ;</li>
                    <li>l'adresse du destinataire ;</li>
                    <li>le message proprement dit.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Ainsi, nous pouvons très bien dire que les 48 premiers caractères que nous allons recevoir représentent l'adresse MAC de l'émetteur (puisque l'adresse MAC fait 48 bits) les 48 suivants l'adresse du récepteur, puis enfin le message. </br> </br>
                    Le protocole va donc définir le format des messages envoyés sur le réseau. </br>
                    Plus exactement, nous allons appeler ce message, une trame. La trame est le message envoyé sur le réseau, en couche 2. </br>
                </p>
                <p style="margin-top: 55px; justify-content: start;"> 
                    <b>Format d'une trame Ethernet</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Les chercheurs ont estimé qu’il était plus intéressant de connaître l'adresse du destinataire en premier, car ainsi nous pouvons immédiatement savoir si le message est pour nous ou pas. S'il est pour nous, nous en continuons la lecture. S'il n'est pas pour nous, ce n'est pas la peine de passer du temps à le lire. </br>
                    Nous allons donc positionner en premier l'adresse MAC du destinataire, suivie de l'adresse MAC de l'émetteur (aussi appelée adresse MAC source). </br></br>
                    Nous avons vu que, lors de l'envoi d'une information, nous parcourons les couches de haut en bas (voir la figure suivante). 
                </p>
                <img src="../../../../images/osi-model-2.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    Nous sommes donc passés par la couche 3 avant de passer par la couche 2. La couche 3 peut donc indiquer à la couche 2 quel est le protocole qui a été utilisé en couche 3. </br>
                    Et c'est utile, car à l'arrivée, quand la couche 2 de la machine réceptrice reçoit les données, qu'elle voit que l'adresse MAC de destination est bien la sienne, elle doit envoyer les informations à la couche 3, et donc au bon protocole de couche 3. </br>
                    Il est donc nécessaire d'indiquer dans la trame quel protocole de couche 3 a été utilisé quand le message a été envoyé et qu'il a traversé les couches du modèle OSI de haut en bas. On appele ça l'EtherType. </br></br>
                    Il nous manque l'essentiel :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'information à envoyer ;</li>
                    <li>nous n'avons toujours pas réglé le problème de la détection d'erreurs.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Pour l'information, nous allons la placer juste après le protocole de couche 3. De plus, nous allons enchaîner avec le code de correction des erreurs, ou CRC.
                </p>
                <p style="margin-top: 40px; justify-content: start;" id="CRC"> 
                    Qu'est-ce que le CRC ?
                </p>
                <p style="margin-top: 30px;"> 
                    Le Cyclic Redundancy Check (Contrôle de redondance cyclique en français) est une valeur mathématique qui est représentative des données envoyées.
                    C'est un nombre qui sera différent pour chaque message. </br></br>
                    Imaginons qu'une machine A envoie un message à une machine B.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Lors de l'envoi, A calcule le CRC (une valeur X) et le met à la fin de la trame.</li>
                    <li>B reçoit le message et fait le même calcul que A avec la trame reçue (une valeur Y).</li>
                    <li>B compare la valeur qu'elle a calculée (Y) avec la valeur que A avait calculée et mise à la fin de la trame (X).</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Si elles sont égales, cela signifie que la trame envoyée par A est bien identique à la trame reçue par B. </br>
                    Si elles sont différentes, cela signifie qu’il y a eu une erreur lors de la transmission. La trame reçue par B n'est apparemment pas la même que celle envoyée par A. Il y a eu un problème quelque part, mais nous l'avons détecté ! </br></br>
                </p>
                <p style="margin-top: 40px; justify-content: start;"> 
                    On obtient ainsi notre trame Ethernet complète :
                </p>
                <img src="../../../../images/ethernet-type-2-frame-format.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 80px; justify-content: start;"> 
                    Une trame Ethernet a-t-elle besoin d'une taille minimale ? Et d'une taille maximale ?
                </p>
                <p style="margin-top: 30px;"> 
                    La réponse est oui. La taille minimale permettra de garantir que, lors d'une collision, la machine ayant provoqué la collision détectera celle-ci. </br>
                    La taille minimale est de 64 octets, pour une trame Ethernet. </br></br>
                    La raison de la taille maximale est tout autre : s'il n'y avait pas de taille maximale, il serait possible qu'une machine envoie une gigantesque trame qui occuperait tout le réseau, empêchant les autres machines de communiquer. C'est pour éviter ce genre de problème qu'une taille maximale a été choisie. </br>
                    La taille maximale est de 1518 octets, pour une trame Ethernet. 
                </p>
                <p style="margin-top: 40px;"> 
                    Le matériel de couche 2 est le &nbsp; <a href="/kb/basics/network/networking-hardware/switch.php"> switch </a> .
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
    <?php require_once('../../../../footer.php'); ?>
</html>