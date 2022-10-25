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
    <title>Équipements réseau - Le Routeur</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Équipements réseau</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le Routeur</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le Routeur
                </h1>
                <p style="margin-top: 30px;"> 
                    Le routeur est un matériel de couche 3 qui relie plusieurs réseaux. Il doit donc avoir une interface dans chacun des réseaux auquel il est connecté.
                    C'est une machine ayant plusieurs interfaces (plusieurs cartes réseau), chacune reliée à un réseau dont le rôle va être d'aiguiller les informations reçus entre les différents réseaux.
                </p>

            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="group col-sm-8">  
                <img src="../../../../images/router-cisco.jpg" class="img-fluid float-left" style="max-width: 43.5%; margin-left: 1%; margin-top: 30px;"/>
                <img src="../../../../images/router-example.png" class="img-fluid float-right" style="max-width: 52%; margin-left: 2%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">

                <p style="margin-top: 55px;">
                    Un ordinateur ayant deux cartes réseau pourra être un routeur. La différence principale est qu'un routeur accepte de relayer des paquets qui ne sont pas pour lui alors qu'une simple machine les jettera à la poubelle. 
                    Toute machine connectée à un réseau peut donc jouer le rôle de routeur. Il suffit d'activer le routage dessus.
                </p>
                <p style="margin-top: 50px;">
                    <b>Le routage</b>
                </p>
                <p style="margin-top: 20px; justify-content: start;">
                    Prenons un exemple
                </p>
                <p style="margin-top: 10px; justify-content: start;">
                    Nous allons nous mettre dans la peau d'un routeur.</br>
                    Imaginons que nous sommes une machine ayant comme adresse MAC l'adresse 00:11:22:33:44:55 et comme adresse IP 192.168.0.1/24.
                    Nous recevons la trame suivante (dans laquelle nous indiquons aussi l'en-tête de couche 3) sur une de nos interfaces :
                </p>
                <img src="../../../../images/ethernet-frame-router-example.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet avec en-tête de couche 3
                </p>
                <p style="margin-top: 10px;">
                    L'adresse IP de la machine qui a envoyé ces informations est bien l'adresse IP source 10.0.0.1, mais l'adresse MAC de la machine qui a envoyé ces informations nous ne pouvons pas la connaître ! Eh oui, si vous vous souvenez de la couche 2, une adresse MAC est propre à un réseau local. En dehors de ce réseau, nous ne la voyons pas. Justement ici, la trame arrive sur l'interface de notre machine ayant pour adresse IP 192.168.0.1/24. Son réseau ne contient donc pas l'adresse IP 10.0.0.1.
                    La machine 10.0.0.1 ne fait pas partie de notre réseau et nous ne connaîtrons jamais son adresse MAC.
                    L'adresse MAC que nous voyons ici en adresse MAC source est celle du dernier routeur qui nous a envoyé la trame.</br></br></br>
                    Que se passe-t-il quand notre machine reçoit cette trame ?</br></br>
                    La trame arrive à ma carte réseau qui reçoit les 0 et les 1 et les envoie à mon système d'exploitation. La couche 2 de mon système d'exploitation reçoit les 0 et les 1 et les interprète pour me donner l'adresse MAC de destination de la trame.</br>
                    C'est mon adresse MAC 00:11:22:33:44:55 !</br>
                    Donc je lis la suite de l'en-tête de la trame pour voir qui m'envoie cette trame et à quel protocole de couche 3 la couche 2 doit l'envoyer. Il est inscrit IP, donc j'envoie la trame en enlevant l'en-tête Ethernet, ce qui donne le paquet IP, à la couche 3 et plus précisément au protocole IP.</br>
                    La couche 3, donc le protocole IP, lit l'ensemble des informations de l'en-tête IP, puisque nous savons maintenant que ce paquet nous est destiné.
                    Et là, l'adresse IP de destination du paquet n'est pas la nôtre...</br>

                    Ceci étant, ce n'est pas grave, car nous avons vu auparavant qu'il est normal pour un routeur de recevoir un message qui ne lui est pas destiné.
                    Son rôle va maintenant être d'aiguiller le paquet vers sa destination.</br></br>
                    Il possède en fait une table dans laquelle est indiqué le prochain routeur auquel il doit envoyer le paquet pour que celui-ci arrive à sa destination.
                    Cette table s'appelle la table de routage.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>La table de routage</b>
                </p>
                <p style="margin-top: 10px;">
                    La table de routage va donc lister les routeurs auxquels je peux envoyer mon datagramme pour joindre une destination donnée.
                    La destination donnée ne va pas être une machine, mais un réseau. Si on devait indiquer un chemin pour chaque machine sur Internet, les tables de routage seraient énormes !</br></br>
                    Le principe est d'avoir d'un côté la liste des réseaux que l'on veut joindre, et de l'autre la liste des routeurs à qui nous devons envoyer le datagramme pour joindre ces réseaux. On appelle aussi ces routeurs des passerelles (gateway en anglais), car ils servent de "passerelle" entre deux réseaux.</br></br>
                    Voici un exemple de table de routage :
                </p>
                <img src="../../../../images/routing-table-example.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Les tables de routage posséderont donc toujours ces informations mais, selon les systèmes d'exploitation, le format de la table pourra être un peu plus compliqué et comporter des colonnes supplémentaires.
                    Par exemple, voici à la figure suivante la table de routage de ma machine sous Mac.
                </p>
                <img src="../../../../images/routing-table-example-macos.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table de routage Mac OS
                </p>
                <p style="margin-top: 30px;">
                    On voit bien dans la colonne de gauche les réseaux que je veux joindre, et dans la colonne juste à sa droite les passerelles par lesquelles je dois passer pour joindre le réseau correspondant. Les autres colonnes ne nous intéressent pas pour l'instant.</br></br>
                    Si je suis connecté à Internet, dois-je avoir une route pour chacun des milliers de réseaux d'Internet ?
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>La route par défaut</b>
                </p>
                <p style="margin-top: 10px;">
                    Nous venons de voir dans ma table de routage sous Mac une information importante. Dans la première ligne, ce n'est pas un réseau qui est indiqué, mais le mot défaut.
                    Cela indique que si une adresse que je veux joindre n'appartient à aucun des réseaux indiqués dans ma table, il faudra emprunter la passerelle indiquée dans la route par défaut. Cela va régler le problème lié à la multitude de réseaux sur Internet. Il me suffira d'indiquer dans ma table une route par défaut qui permettra d'aller vers Internet et donc de joindre tous les réseaux qui y sont présents.</br></br>
                    Ceci reste encore très abstrait et sûrement complexe à comprendre, alors prenons un petit exemple pour fixer les idées.
                </p>
                <img src="../../../../images/simple-network-example.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Réseau simple
                </p>
                <p style="margin-top: 30px;">
                    Ceci est une architecture qui fait le lien entre nos machines, nos routeurs et nos switchs.
                    Ce schéma est ce que nous appelons un schéma logique. Cela veut dire que nous représentons dessus la logique de connexions entre les réseaux.
                    Ainsi, les switchs qui sont censés être propres à un réseau ne sont pas vraiment représentés. Ils le sont plus ou moins par les barres horizontales qui identifient chacun des réseaux.</br></br>
                    Sur ce schéma, nous voyons deux réseaux (192.168.0.0/24 et 192.168.1.0/24) reliés entre eux grâce au routeur 1 qui possède une interface réseau dans chacun de ces réseaux.</br></br>
                    Essayons d'écrire la table de routage du routeur 1. Pour cela, je vais vous donner une méthode qui s'appliquera toujours et qui fonctionnera pour tous les cas :
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>Indiquer les réseaux auxquels ma machine est connectée ;</li>
                    <li>Indiquer la route par défaut ;</li>
                    <li>Indiquer tous les autres réseaux que je ne peux pas encore joindre avec les deux étapes précédentes.</li>
                </ol>
                <p style="margin-top: 30px; justify-content: start;">
                    1 - Indiquer les réseaux auxquels ma machine est connectée.</br>
                    Mon routeur 1 est connecté à deux réseaux, 192.168.0.0/24 et 192.168.1.0/24.</br>
                </p>
                <img src="../../../../images/routing-table-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start;">
                    Pour l'instant, nous ne nous soucions pas d'indiquer les passerelles, cela viendra dans un second temps.</br></br>
                    2- Indiquer la route par défaut.</br>
                    Le cas est un peu particulier, car notre routeur est déjà connecté à tous les réseaux du schéma. Il n'a donc pas besoin d'une route par défaut pour aller vers d'autres réseaux, il les connaît déjà tous !</br></br>
                    3- Indiquer tous les autres réseaux que je ne peux pas encore joindre avec les deux étapes précédentes.</br>
                    Même chose que la réponse précédente, il n'y a pas de réseau supplémentaire à indiquer.</br>
                    La table de routage sera donc :
                </p>
                <img src="../../../../images/routing-table-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content: start;">
                    Pour indiquer les passerelles, nous appliquons une règle simple : la passerelle pour joindre un de mes réseaux est mon adresse.</br></br>
                    Maintenant, est-ce que cela suffit pour faire dialoguer nos deux réseaux entre eux ?</br></br>
                    La réponse est malheureusement non, bien que le routeur sache maintenant aiguiller les paquets qu'il reçoit.</br></br>
                    Dans ce cas, comment les machines du réseau vont savoir qu'il faut lui envoyer les paquets ?</br></br>
                    Elles auront, elles aussi, une table de routage. Toute machine connectée à un réseau possède une table de routage, même une imprimante ou téléphone.</br>
                    C'est grâce à cette table de routage qu'une machine peut savoir à quelle passerelle envoyer un paquet quand elle veut joindre un autre réseau que le sien. On peut donc reprendre le schéma précédent et, par exemple, faire la table de routage de la machine 192.168.0.1.</br></br>
                    On utilise notre méthode :</br></br>
                    1- Indiquer les réseaux auxquels ma machine est connectée.</br>
                    Ma machine est connectée à un seul réseau 192.168.0.0/24, ce qui donne pour la table de routage :
                </p>
                <img src="../../../../images/routing-table-example-4.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    2- Indiquer la route par défaut.</br>
                    Cette fois, nous pouvons indiquer la route par défaut pour joindre un autre réseau que le nôtre, par exemple 192.168.1.0/24 (même si nous n'avons pas trop le choix dans notre exemple, vu qu'il n'y a qu'un réseau...) :
                </p>
                <img src="../../../../images/routing-table-example-5.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    3- Indiquer tous les autres réseaux que je ne peux pas encore joindre avec les deux étapes précédentes.</br>
                    Là encore, nous avons déjà indiqué les deux réseaux que nous pouvons joindre, donc cette étape peut être oubliée.</br>
                    Notre table de routage est donc :
                </p>
                <img src="../../../../images/routing-table-example-6.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous savons déjà remplir la première ligne, car elle concerne notre propre réseau, nous pouvons donc y indiquer notre propre adresse en passerelle.</br></br>
                    Il nous reste à indiquer la passerelle à utiliser pour joindre le réseau 192.168.1.0/24.</br>
                    La question est donc la suivante : À qui la machine 192.168.0.1 doit envoyer ses paquets pour joindre le réseau 192.168.1.0/24 ?</br>
                    Pour joindre un réseau, une machine doit utiliser une passerelle qui appartient à son propre réseau.
                    Ici, ce sera donc l'adresse du routeur qui est sur le même réseau que la machine 192.168.0.0/24, soit l'adresse 192.168.0.254. Ce qui nous donne :
                </p>
                <img src="../../../../images/routing-table-example-7.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 60px;">
                    Maintenant que nous savons faire des tables de routage, nous allons prendre des exemples un peu plus complexes.
                </p>
                <img src="../../../../images/harder-network-example.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Réseau plus complexe
                </p>
                <p style="margin-top: 30px;">
                    Cela reste en réalité un très petit réseau, mais pour nous, c'est déjà pas mal ! Nous allons donc refaire, comme dans l'exercice précédent, les tables de routage du routeur 1 et de la machine 192.168.0.1.</br></br>
                    Pour le routeur 1.</br>
                    Commençons par le routeur 1, pour la première étape, rien n'a changé, il a toujours ses deux interfaces connectées aux mêmes réseaux.
                </p>
                <img src="../../../../images/routing-table-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Pour l'étape 2, ça change.</br>
                    2- Indiquer la route par défaut.</br>
                    Ici, le routeur 1 doit avoir une route par défaut, car il peut aller sur Internet, mais il ne peut pas connaître tous les réseaux d'Internet. 
                    Sa passerelle doit lui permettre d'aller sur Internet et sera donc la première étape pour aller vers Internet. Il doit passer par le routeur 3, sur l'interface qui est sur le même réseau que lui, soit 192.168.1.253.
                </p>
                <img src="../../../../images/routing-table-example-8.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Passons à la troisième étape.</br>
                    3- Indiquer tous les autres réseaux que je ne peux pas encore joindre avec les deux étapes précédentes.</br>
                    Il y a globalement 4 réseaux sur notre schéma (192.168.0.0/24, 192.168.1.0/24, 10.0.0.0/24 et 10.0.1.0/24) plus Internet.</br>
                    Actuellement, nous savons aller vers les deux premiers. Nous savons aussi aller vers Internet grâce à notre passerelle par défaut. Il nous reste donc deux réseaux à joindre, 10.0.0.0/24 et 10.0.1.0/24.</br>
                    Le réseau 10.0.1.0/24 se trouvant derrière notre gatweay par défaut, nous savons joindre tous les réseaux sauf un, le réseau 10.0.0.0/24 bien nous allons ajouter une route pour lui. En regardant le schéma, nous voyons qu'il faut passer par l'adresse 192.168.0.253 du routeur 2 pour aller vers le réseau 10.0.0.0/24. Ce qui nous donne au final :
                </p>
                <img src="../../../../images/routing-table-example-9.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Il existe une autre écriture possible pour la route par défaut qui est parfois identifiée par le réseau 0.0.0.0/0. Cela dépend notamment des systèmes d'exploitation.</br></br>
                    Pour la machine 192.168.0.1, la table de routage sera :
                </p>
                <img src="../../../../images/routing-table-example-10.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    "Apprenez le fonctionnement des réseaux TCP/IP" de Eric Lalitte - Collection OpenClassrooms
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://openclassrooms.com/fr/courses/6944606-concevez-votre-reseau-tcp-ip" target="_blank">Concevez votre réseau TCP/IP - OpenClassrooms</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>