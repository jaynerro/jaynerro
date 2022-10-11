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
    <title>Modèle OSI - Couche 4 : La couche Transport</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 4</p></li>
                            <li class="breadcrumb-item active" aria-current="page">La couche Transport</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Couche 4 : La couche Transport
                </h1>
                <p style="margin-top: 30px;">
                    <b>Son rôle</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Le rôle de la couche 3 est donc d'interconnecter les réseaux. Cela va nous permettre d'envoyer un message d'un réseau à un autre.</br></br>
                    Mais comment envoyer un message à un réseau auquel nous ne sommes pas directement reliés et qui peut parfois être à l'autre bout du monde ?</br>
                    Les réseaux sont tous reliés entre eux, comme une chaîne. Internet est comme un énorme ensemble de réseaux collés les uns aux autres. Pour aller de mon réseau au réseau du site jaynerro.com, je passe par plusieurs réseaux intermédiaires, comme indiqué sur la figure suivante.
                </p>
                <img src="../../../../../images/layer3-network-1.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On voit bien qu'il y a potentiellement plusieurs chemins possibles pour aller de mon réseau à celui du site jaynerro.com.</br>
                    La couche 3 va donc me permettre de joindre n'importe quel réseau sur Internet, en passant à travers d'autres réseaux. Ma connexion à une machine sur un autre réseau se fera à travers des réseaux, de proche en proche.</br></br>
                    Nous pouvons très bien illustrer ceci en utilisant la commande traceroute sous Linux (ou tracer sous Windows).
                    La commande traceroute permet d'indiquer par quelles machines nous passons pour aller d'un point à un autre sur Internet.
                </p>
                <p style="margin-top: 50px;">
                    <b>Son identifiant : l'adresse IP</b>
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    <b>Une adresse multifonction</b>
                </p>
                <p style="margin-top: 30px;">
                    L'adresse IP est l'adresse du réseau et de la machine. Plus exactement, une partie de l'adresse représentera l'adresse du réseau, et l'autre partie l'adresse de la machine. Une adresse IP est codée sur 32 bits (soit 4 octets).</br></br>
                    Afin de simplifier la lecture et l'écriture d'adresses IP pour les humains, nous avons choisi d'écrire les adresses avec la notation en décimal pointée. Cette dernière sépare les 4 octets sous forme de 4 chiffres décimaux allant de 0 à 255.</br>
                    Cela donne par exemple : 192.168.0.1</br></br>
                    On en déduit que la plus petite adresse IP est: 0.0.0.0 (quand tous les bits de l'adresse sont à 0) alors que la plus grande vaut : 255.255.255.255 (quand tous les bits sont à 1).</br></br>
                    Au niveau des ordinateurs et des différents matériels réseau manipulant les adresses IP, ces dernières sont manipulées en binaire (base 2).</br></br>
                    L’adresse IP permet d’identifier la localisation géographique des machines, ou au moins de savoir à quel réseau elles appartiennent, contrairement à l’adresse MAC. Grâce à elle, on peut souvent localiser les émetteurs et récepteurs des messages qui transitent dans un réseau.
                </p>
                <p style="margin-top: 50px;"> 
                    <b>Le masque de sous-réseau</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous allons ajouter une information supplémentaire à l'adresse IP : le masque de sous-réseau. Ces deux informations, adresse IP et masque, sont inséparables car c'est le masque qui indique quelle est la partie réseau de l'adresse, et quelle est la partie machine.
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    <b>Définition : Les bits à 1 dans le masque représentent la partie réseau de l'adresse IP.</b>
                </p>
                <p style="margin-top: 30px;">
                    On en déduit que les bits à 0 représentent la partie machine de l'adresse.
                    Prenons un exemple : on associe l'adresse IP 192.168.0.1 au masque 255.255.0.0.</br>
                    Écrivons maintenant ces deux adresses en binaire pour y voir plus clair :</br></br>
                    192.168.0.1 -> 11000000.10101000.00000000.00000001</br>
                    255.255.0.0 -> 11111111.11111111.00000000.00000000</br></br>

                    L'exercice que nous venons de faire était très facile, car la coupure entre les deux parties de l'adresse se faisait entre deux octets. Or, il arrive très souvent que la coupure se fasse en plein milieu d'un octet. 
                    Par exemple, si nous reprenons l'exemple précédent en utilisant le masque 255.255.240.0, qu'est-ce que cela donne au niveau de l'adresse ?</br></br>
                    192.168.0.1 -> 11000000.10101000.00000000.00000001</br>
                    255.255.240.0 -> 11111111.11111111.11110000.00000000</br></br>
                    On ne peut pas repasser en décimal étant donné que la coupure se fait au milieu d'un octet. En effet, on ne peut malheureusement pas écrire un demi-octet ou une partie d'un octet seulement. On ne peut parler qu'en binaire. </br>
                    La partie réseau de l'adresse est 11000000.10101000.0000 et la partie machine est 0000.00000001.
                </p>
                <p style="margin-top: 50px; justify-content: start;"> 
                    <b>La contiguïté des bits</b>
                </p>
                <p style="margin-top: 30px;">
                    Dans un masque en binaire, il doit y avoir les 1 à gauche et les 0 à droite. On ne peut pas mélanger les 1 et les 0.</br></br>
                    Ainsi, on retrouvera toujours les mêmes valeurs pour les octets d'un masque, qui sont les suivantes :</br>
                    00000000 -> 0</br>
                    10000000 -> 128</br>
                    11000000 -> 192</br>
                    11100000 -> 224</br>
                    11110000 -> 240</br>
                    11111000 -> 248</br>
                    11111100 -> 252</br>
                    11111110 -> 254</br>
                    11111111 -> 255</br></br>
                    Il nous faut maintenant le mettre en pratique pour trouver les plages d'adresses associées à tel ou tel masque.
                    Une plage d'adresse est l'ensemble des adresses définies par l'association d'une adresse et d'un masque, de la plus petite adresse à la plus grande.
                </p>
                <p style="margin-top: 50px; justify-content: start;"> 
                    <b>Calcul de plages d'adresses</b>
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    <b>Calcul de la première et de la dernière adresse d'une plage</b>
                </p>
                <p style="margin-top: 10px;">
                    La première adresse du réseau est celle dont tous les bits de la partie machine sont à 0 et la dernière adresse du réseau est celle dont tous les bits de la partie machine sont à 1.</br></br>
                    Exemple : l'adresse 192.168.0.1 associée au masque 255.255.240.0.</br>
                    Trouvons la première et la dernière adresse du réseau auquel appartient cette adresse.</br>
                    Nous avons le masque et l'adresse :</br>
                    255.255.240.0 -> 11111111.11111111.11110000.00000000</br>
                    192.168.0.1 -> 11000000.10101000.00000000.00000001</br>
                    Première adresse : 11000000.10101000.00000000.00000000 = 192.168.0.0</br>
                    Dernière adresse : 11000000.10101000.00001111.11111111 = 192.168.15.255</br>
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    <b>Nombre d'adresses dans un réseau</b>
                </p>
                <p style="margin-top: 10px;">
                    Si jamais nous n'avions qu'un seul bit pour la partie machine, nous aurions deux possibilités sur ce bit, 0 ou 1. Si nous en avions deux, il y aurait 2 x 2 adresses possibles, soit 4 adresses (00, 01, 10, 11) et ainsi de suite.</br>
                    Donc pour trouver le nombre d'adresses dans un réseau, il suffit de connaître le nombre de bits de la partie machine.
                    Or, vu que la partie machine est définie par le masque, le nombre de machines disponibles dans un réseau est directement dépendant du masque.
                </p>
                <p style="justify-content: start;">
                    La relation est même encore plus explicite : nombre d'adresses dans un réseau = 2<sup>Nombrede0danslemasque</sup>.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Adresse de réseau, adresse de broadcast</b>
                </p>
                <p style="margin-top: 10px;">
                    Parmi la plage d'adresses définie par une adresse IP et un masque, deux adresses sont particulières, la première et la dernière.</br></br>
                    La première adresse d'une plage est l'adresse du réseau lui-même.
                    Cette adresse ne pourra donc pas être utilisée pour une machine.</br></br>
                    La dernière adresse d'une plage est une adresse spéciale, l'adresse de broadcast.</br>
                    Quand nous envoyons un message à l'adresse de broadcast, ce message va être reçu par toutes les machines de notre réseau.
                </p>
                <p style="margin-top: 70px;">
                    NB : Une adresse qui finit en 255 n'est pas obligatoirement une adresse de broadcast et une adresse qui finit en 0 n'est pas obligatoirement une adresse de réseau.</br></br>
                    Exemple : </br>
                    10.8.65.31/255.255.255.224 => Réseau allant de 10.8.65.0 à 10.8.65.31 = Adresse de broadcast !</br>
                    192.168.1.0/255.255.254.0 => Réseau allant de 192.168.0.0 à 192.168.1.255 = Adresse de machine !</br></br>
                    Par contre, une adresse de broadcast est toujours impaire ; une adresse de réseau est toujours paire.
                </p>
                <p style="margin-top: 50px;">
                    <b>Des adresses particulières</b>
                </p>
                <p style="margin-top: 10px; justify-content: start;">
                    <b>Les RFC</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous venons de voir les adresses et les masques et nous avons découvert que nous formons des réseaux en les associant.
                    Cependant, toutes les adresses n'ont pas la même signification, notamment, certaines adresses ont été réservées pour ne pas pouvoir être utilisées sur Internet. 
                    Ces adresses sont définies dans la RFC 1918.</br></br>
                    Une RFC (Request for comments) est un document qui propose et présente une technologie que l'on souhaite voir utiliser sur Internet.</br></br>
                    Par exemple, si je veux créer un nouveau protocole qui va révolutionner Internet, je vais le présenter dans une RFC qui pourra être lue, puis soumise à proposition, et enfin acceptée comme standard d'Internet.</br>
                    Ainsi, depuis la nuit des temps, les RFC précisent le fonctionnement détaillé d'à peu près tout ce qui se trouve sur Internet.
                    Par exemple, il y a une RFC qui présente le protocole IP, la RFC 791.
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    <b>La RFC 1918</b>
                </p>
                <p style="margin-top: 10px;">
                    Cette RFC précise des plages d'adresses, soit des réseaux, qui ont une utilité particulière.
                    En effet, ces plages d'adresses sont réservées pour une utilisation privée. Cela veut dire que si vous faites un réseau chez vous, ou dans une entreprise, il vous faudra obligatoirement utiliser ces adresses.</br></br>
                    Il y a une raison à cela : imaginons que j'installe mon réseau chez moi et que je n'ai pas connaissance de la RFC 1918.
                    Je choisis donc un réseau au hasard, par exemple le réseau 92.243.25.0/255.255.255.0.
                    Mais malheureusement, cette plage réseau appartient à quelqu'un sur Internet. On pourrait penser que ce n'est pas grave, car de toute façon, mon réseau est privé et ne dérangera personne sur Internet. En fait, je vais avoir des problèmes...</br></br>
                    Par exemple, j'essaye d'aller sur mon site préféré, jaynerro.com. Et badaboum, cela ne marche pas !
                    En effet, l'adresse du site jaynerro.com est 92.243.25.239, qui est une adresse qui appartient à la plage réseau que j'ai choisie.
                    Ainsi, quand ma machine essaye de joindre cette adresse, elle pense que la machine se situe sur son propre réseau, d'après son adresse, et donc elle n'arrive pas à la joindre. Je ne pourrai donc jamais aller sur le site jaynerro.com.
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    Comment bien choisir son adresse alors ?
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    C'est simple, il suffit de choisir sa plage d'adresses dans les plages réservées à cet effet dans la RFC 1918.</br>
                    Les plages définies sont :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>10.0.0.0/255.0.0.0</li>
                    <li>172.16.0.0/255.240.0.0</li>
                    <li>192.168.0.0/255.255.0.0</li>
                </ul>
                <p style="margin-top: 30px;">
                    Ces adresses n'appartiennent à personne sur Internet, je serai sûr de pouvoir joindre n'importe quel site sur Internet.
                    C'est aussi pour cela que, très souvent, les adresses qui sont données par les opérateurs sont dans ces plages. 
                </p>
                <p style="margin-top: 60px;">
                    <b>Un protocole : IP</b>
                </p>
                <p style="margin-top: 10px;">
                    Pour rappel, un protocole est un langage. Il permet aux machines qui dialoguent ensemble de se comprendre.</br>
                    Pour la couche 3 du modèle OSI, c'est le protocole IP, ou Internet Protocol.</br>
                    Comme pour la couche 2, nous allons devoir définir de quelles informations nous allons avoir besoin, et dans quel ordre les placer.</br></br>
                    Déjà, nous pouvons nous douter que nous allons avoir l'adresse IP de l'émetteur ainsi que celle du récepteur. Néanmoins, il va y avoir beaucoup d'autres informations.
                    Dans un premier temps, nous n'allons voir que celles qui nous intéressent, et nous ajouterons petit à petit les autres éléments de l'en-tête IP.</br>
                    Nous avons donc :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>adresse IP émetteur ;</li>
                    <li>adresse IP destinataire.</li>
                </ul>
                <p style="margin-top: 10px;">
                    Jusqu'ici rien d'étonnant, il est normal d'avoir les informations identifiant les participants à la communication.</br></br>

                    Toutefois, nous avons dit que l'adresse IP devait toujours être accompagnée du masque ; va-t-on avoir le masque aussi dans l'en-tête IP ?</br></br>

                    La question à laquelle il va falloir répondre est surtout : est-il nécessaire de connaître le masque d'une machine pour lui envoyer un message ?</br>
                    Pour y répondre, mettons-nous dans la peau d'une machine qui veut envoyer un message à une autre.</br>

                    Nous sommes la machine A qui a pour adresse 192.168.0.1/24 et nous souhaitons envoyer un message à une machine B d'adresse 192.168.1.1/24.
                    Ce qui est important pour moi, en tant que machine A, c'est de savoir si la machine B est sur mon réseau. En effet, si elle est sur mon réseau, je lui parlerai grâce à la couche 2. Si elle est sur un autre réseau, il faudra que je fasse appel à la couche 3.</br></br>

                    De quoi ai-je besoin pour savoir si la machine B est sur mon réseau ?</br></br>

                    Pour savoir si la machine B est sur mon réseau, c'est facile !
                    Je regarde la plage d'adresses de mon réseau, et je n'ai plus qu'à regarder si l'adresse de la machine B appartient à cette plage.</br></br>

                    Dans notre cas, ma plage d'adresses va de 192.168.0.0 à 192.168.0.255. Elle ne contient donc pas l'adresse de la machine B (192.168.1.1).
                    J'en déduis donc que B n'est pas sur mon réseau et qu'il va falloir utiliser la couche 3 pour communiquer avec elle.</br></br>

                    Nous remarquons au passage que nous n'avons pas eu besoin du masque de la machine B pour savoir si elle appartenait à notre réseau. Il ne sera donc pas utile d'indiquer le masque dans l'en-tête IP. L'adresse IP suffira.</br></br>

                    Comme pour la trame de couche 2, un format de message est défini par le protocole. Pour le protocole IP, le message s'appelle un datagramme ou un paquet.
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    <b>Le datagramme / paquet</b>
                </p>
                <p style="margin-top: 10px; justify-content: start">
                    Comme pour la couche 2, le datagramme IP va être une suite de 0 et de 1 organisés.</br>
                    Voici la forme qu'il va prendre :
                </p>
                <img src="../../../../../images/packet-ip-format.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Datagramme / paquet IP
                </p>
                <p style="margin-top: 10px; justify-content: start">
                    Nous voyons ici que le format général est proche de celui de la trame Ethernet, mais que les informations contenues sont différentes et dans un ordre différent.
                    L'adresse IP de destination est en fin d'en-tête. Et pourtant, nous avions vu en couche 2 qu'il était important que l'adresse MAC de destination soit en début d'en-tête pour que la machine qui reçoit la trame sache immédiatement si celle-ci lui est destinée. Pourquoi cela serait différent pour IP ?</br>
                    Pour le comprendre, nous allons devoir aborder d'autres notions.
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    <b>L'encapsulation</b>
                </p>
                <p style="margin-top: 10px; justify-content: start">
                    Qu'est-ce qui circule sur le réseau ? Des trames ? Des datagrammes ? Les deux ? Pour répondre à cette question, nous allons devoir nous replonger dans le modèle OSI.
                </p>
                <img src="../../../../../images/osi-model-2.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Comme nous le voyons, un message est envoyé depuis la couche 7 du modèle OSI, et il traverse toutes les couches jusqu'à arriver à la couche 1 pour être envoyé sur le réseau. </br></br>
                    Que devient notre message d'origine, ainsi que les en-têtes de chaque couche ? </br></br>
                    Un en-tête va être ajouté à chaque passage par une couche. On va ainsi accumuler les en-têtes des différentes couches (voir la figure suivante).
                </p>
                <img src="../../../../../images/osi-model-3.png" class="img-fluid mx-auto d-block" style="max-width: 75%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Au passage par la couche 4, on ajoutera l'en-tête de couche 4, puis celui de couche 3 en passant par la couche 3, et ainsi de suite.</br></br>
                    Ce mécanisme s'appelle l'encapsulation, car on encapsule un message dans un autre.</br></br>

                    Nous voyons clairement qu'au final, ce qui va circuler sur le réseau est une trame de couche 2, qui contient le datagramme de couche 3 (qui lui-même contiendra l'élément de couche 4).</br>
                    Ainsi, je vous ai plus ou moins menti quand je vous ai donné le format d'une trame Ethernet.
                </p>
                <img src="../../../../../images/ethernet-frame.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Je ne vous ai pas dit que dans les données à envoyer, il y avait en fait l'en-tête de couche 3, l'en-tête de couche 4, puis enfin, les données à envoyer.
                </p>
                <img src="../../../../../images/ethernet-frame-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Ceci dit, j'ai eu raison de vous le présenter ainsi, car la couche 2 est incapable de lire les informations de couche 3 ou de couche 4, de même qu'elle ne comprend pas les données à envoyer. Pour elle, tout cela est une suite de 0 et de 1 qu'elle est incapable de comprendre, elle ne voit ça que comme des données.</br>
                    Maintenant, vous, vous savez que parmi ces données il y a aussi les en-têtes des couches supérieures.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Exemple réel</b>
                </p>
                <p style="margin-top: 30px;">
                    En utilisant le logiciel wireshark, nous pouvons voir les trames qui passent sur notre réseau. Wireshark est un sniffer. Un sniffer est un programme qui écoute sur le réseau, intercepte toutes les trames reçues par votre carte réseau, et les affiche à l'écran.</br>
                    Si l'on se plonge dans le contenu d'une trame en cliquant sur l'une d'entre elles, nous pouvons voir que Wireshark sépare les éléments de chacune des couches du modèle OSI.</br></br>
                    Nous pouvons voir les éléments vus par la couche 1 (Frame...), puis la couche 2 Ethernet, puis la couche 3 IP, Internet Protocol, la couche 4 que nous ne connaissons pas encore et les données applicatives qui sont ici du web HTTP.
                </p>
                <p style="margin-top: 60px;">
                    Pour revenir à pourquoi l'adresse IP de destination n'est pas en début d'en-tête IP ?</br></br>
                    Quand un message arrive sur une machine, il remonte les couches du modèle OSI de la couche 1 à la couche 7. Il passe donc par la couche 2 qui lit l'adresse MAC de destination :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>si c'est bien celle de la carte réseau, il lit le reste de la trame, puis transmet les données (le paquet/datagramme) à la couche 3 ;</li>
                    <li>si ce n'est pas celle de la carte réseau, il jette la trame.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Donc si le message arrive à la couche 3, cela veut obligatoirement dire que la machine sait déjà que le message lui est destiné, puisque l'adresse MAC de destination est la sienne. Elle n'a donc pas la nécessité de savoir immédiatement si l'adresse IP de destination est la sienne, puisqu'elle sait déjà que le paquet est pour elle.</br>
                    Le choix de mettre l'adresse IP en fin d'en-tête n'est pas anodin et sert surtout à mettre les informations importantes de couche 3 proches des informations importantes de couche 4 que nous verrons plus tard.
                </p>
                <p style="margin-top: 40px;"> 
                    Le matériel de couche 3 permettant de relier plusieurs réseaux est le &thinsp; <a href="/knowledge-base/basics/network/networking-hardware/router.php"> routeur </a>.
                </p>
                
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
    <?php require_once('../../../../../footer.php'); ?>
</html>