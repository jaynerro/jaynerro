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
    <title>Modèle OSI - Couche 4 : NAT et le port forwarding</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 4</p></li>
                            <li class="breadcrumb-item active" aria-current="page">NAT et le port forwarding</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="NAT"> 
                    Couche 4 : NAT et le port forwarding
                </h1>
                <p style="margin-top: 40px;"> 
                    Un peu d'histoire</br></br>
                    La NAT (Network address translation, translation d'adresse réseau en français) vient répondre à deux problèmes majeurs, le second problème étant engendré par le premier.
                    Il y a tout d'abord eu un problème de pénurie d'adresses sur Internet auquel une réponse apportée a été de spécialiser certaines plages d'adresses IP pour une utilisation privée. Cela a engendré un second problème qui est de pouvoir accéder à Internet en utilisant ces adresses IP privées.</br></br></br>
                    Problème n°1</br></br>
                    Nous avons vu qu'Internet était composé de réseaux connectés entre eux.</br>
                    Mais combien de machines Internet peut-il contenir ?
                    Y a-t-il une limite ?
                    Quel serait le facteur limitant ?</br>
                    En fait, si vous vous souvenez de la couche 3, il y a bien un facteur limitant au nombre de machines possibles sur Internet, c'est le nombre d'adresses IP disponibles.
                    En effet, une adresse IP est codée sur 4 octets, soit 32 bits. Elle peut donc prendre 2^32  valeurs, soit environ 4 milliards.</br>
                    Il peut donc y avoir 4 milliards d'adresses IP dans le monde.</br></br>
                    C'est beaucoup... ou pas.</br>
                    En effet, à l'échelle d'Internet et de sa croissance, 4 milliards c'est bien peu. Et d'ailleurs, nous avons quasiment utilisé tous les blocs d'adresses disponibles sur Internet... Nous ne pouvons plus rajouter de nouvelles machines sur Internet...</br></br>
                    Voici des tableaux représentant l'utilisation des blocs d'adresses sur Internet, en 1993, 2000 et 2007. Chaque chiffre correspond au premier octet d'un bloc d'adresses (par exemple la case 52 représente tous les réseaux commençant par 52, soit 52.X.X.X)
                </p>
                <img src="../../../../../images/ipv4-address-blocks-1.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Utilisation des blocs d'adresses IP en 1993
                </p>
                <img src="../../../../../images/ipv4-address-blocks-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Utilisation des blocs d'adresses IP en 2000
                </p>
                <img src="../../../../../images/ipv4-address-blocks-3.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Utilisation des blocs d'adresses IP en 2007
                </p>
                <p style="margin-top: 30px;"> 
                    On peut voir sur les images précédentes que, dès 2007, les plages disponibles étaient restreintes. On considère que la totalité des plages étaient utilisées en juin 2012.</br>
                    La NAT répond à une partie du problème posé par la pénurie d'adresses, il ya également un nouveau standard de protocole IP mis en place qui règle ce problème : il s'agit d'IPv6, que nous verrons un peu plus tard.</br></br></br>
                    La solution temporaire, l'adressage privé</br></br>
                    Les personnes qui géraient Internet se sont dit à un moment donné que, vu que certains réseaux étaient privés et que les machines sur ces réseaux n'avaient pas besoin d'être jointes depuis Internet (elles étaient de simples clients, mais pas des serveurs), il n'était pas nécessaire de leur fournir une adresse IP publique à chacune d'entre elles.
                    Ainsi, on s'est dit qu'on pourrait donner des adresses IP privées à ces machines.</br></br>
                    C'est une adresse qui a été réservée pour une utilisation privée.</br>
                    En gros, on a réservé une certaine plage d'adresses pour une utilisation privée. Cette plage d'adresses n'est donc pas utilisée sur Internet, elle est réservée pour tous les réseaux du monde entier qui n'ont pas besoin d'être joints depuis Internet.</br></br>
                    Mais comment ont été choisies ces adresses ?</br></br></br>
                    La RFC 1918</br></br>
                    La RFC 1918 précise les adresses à utiliser sur un réseau local.</br>
                    Ce document dit en gros que si vous voulez créer un réseau local, vous devez utiliser des adresses réservées pour un réseau privé parmi les suivantes :</br></br>
                    10.0.0.0/8</br>
                    172.16.0.0/12</br>
                    192.168.0.0/16</br></br>
                    Voilà, vous savez maintenant quelles adresses utiliser sur votre réseau local. Toutefois, la plupart du temps, c'est votre box qui vous donne une adresse et qui vous impose l'utilisation d'une adresse parmi ces plages.</br></br>
                    Mais que se passe-t-il si l'on ne respecte pas les plages indiquées par la RFC ?</br>
                    Cela fonctionnera... ou presque. Vous arriverez à aller partout sur Internet, sauf sur les réseaux à qui appartiennent réellement les adresses que vous avez utilisées.</br></br>
                    Prenons un exemple.</br>
                    Vous venez de recevoir votre tout nouveau routeur, et vous souhaitez connecter entre elles vos machines chez vous. Au moment de choisir un adressage pour le réseau, vous prenez arbitrairement le réseau 74.125.230.0/24 (c'est un peu tordu comme choix, mais bon :o )
                    Vous branchez les machines entre elles et essayez de les pinguer... ça marche !
                    Vous configurez le routeur comme passerelle par défaut, vous le branchez à Internet et essayez de naviguer... ça marche encore !
                    Cool ! Tout semble marcher à merveille.
                    Vous jouez à vos jeux préférés, envoyez et recevez vos mails, tout va bien.
                    Puis, vous essayez d'aller sur Google pour faire une recherche et là, patatras, ça ne marche pas !
                    Tout fonctionne, sauf Google.</br>
                    Sans le savoir, vous avez choisi le même réseau que celui des serveurs de Google 74.125.230.0/24. C'est ce qui explique que vous ne puissiez plus les joindre désormais. Nous allons voir ce qui se passe exactement.
                    Regardons ce qui se passe au niveau de votre machine.
                    Pour mieux comprendre, regardons notre table de routage. Elle doit ressembler à cela :
                </p>
                <img src="../../../../../images/routing-table-internet-box-nat.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table de routage de notre machine
                </p>
                <p style="margin-top: 30px;">
                    Ainsi, quand nous essayons de nous connecter à www.google.fr qui a comme adresse IP 74.125.230.84, notre table de routage nous dit qu'il faut rester sur le réseau local. Donc notre requête ne partira pas sur Internet et nous n'aurons jamais de réponse de Google.</br></br>
                    Le fait d'avoir choisi arbitrairement une plage d'adresses en dehors de celles préconisées par la RFC 1918 nous empêche d'accéder aux vrais réseaux qui possèdent ces adresses.
                    À l'inverse, étant donné que les réseaux de la RFC 1918 n'appartiennent à personne sur Internet, nous sommes sûrs de ne pas nous priver d'accès à quelque réseau que ce soit en les choisissant.</br></br>
                    Vous saurez donc maintenant choisir proprement vos adresses pour vos réseaux si vous devez en créer.</br></br>
                    Vous aurez peut-être remarqué, si vous essayez de pinguer Google, que vous avez obtenu une autre adresse IP pour le serveur Google que celle que j'ai indiquée. C'est normal, car Google possède des milliers de sites identiques sur Internet pour garantir la disponibilité du service. Il y a donc de très nombreuses adresses IP possibles pour les serveurs de Google.</br></br></br>
                    Problème n°2</br></br>
                    Imaginons que vous êtes chez vous, derrière votre box, avec un adressage privé en 192.168.0.0/24.
                    Votre machine a comme adresse 192.168.0.1/24.</br>
                    Voici ce qui se passerait si nous n'avions pas de NAT et que nous voulions joindre un site sur Internet comme www.jaynerro.com qui a comme adresse IP 145.239.37.162 au moment de ma requête.</br>
                    Votre machine fabrique une jolie trame à envoyer sur le réseau avec le contenu suivant :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet, qui contient le paquet/datagramme IP
                </p>
                <p style="margin-top: 30px;">
                    Cette trame va, par la suite, aller de routeur en routeur sur Internet en fonction de son adresse IP destination qui est ici 145.239.37.162, et la trame va donc bien aller jusqu'à www.jaynerro.com.
                    Mais au retour, jaynerro.com va nous répondre, à l'adresse spécifiée comme adresse IP source dans le datagramme d'origine...
                    Et patatras, cette adresse est une adresse privée (192.168.0.1) qui n'appartient à personne sur Internet et qui ne peut donc pas être routée ! 
                    Notre trame va donc arriver à un routeur au cœur d'Internet, qui va la bloquer, car il sait qu'une adresse privée n'est pas censée se balader sur Internet.
                    Dans ce cas, nous n'aurons jamais notre réponse de la part de jaynerro.com.</br></br>
                    De manière générale, nous n'aurons jamais de réponses à des requêtes envoyées sur Internet quand nous utilisons des adresses privées...
                    La solution à ce problème, c'est la NAT !
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Fonctionnement de la NAT</b>
                </p>
                <p style="margin-top: 30px;">
                    Principe</br></br>
                    Nous avons identifié le problème. Quand un paquet est envoyé sur Internet, la réponse ne revient pas, car l'adresse IP destination est une adresse privée.
                    Or, cette adresse IP destination dans la réponse est en fait l'adresse IP source qui était indiquée dans la requête !</br>
                    Il faudrait donc que cette adresse IP source, qui est privée, puisse être remplacée par une adresse publique. C'est là tout le principe de la NAT !</br></br>
                    Il existe deux types de NAT différents, la NAT dynamique et la NAT statique.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>La NAT dynamique associe n adresses privées à une seule adresse publique. Ainsi, on peut connecter n machines en n'utilisant qu'une seule adresse publique. On économise donc des adresses.</li>
                    <li>En NAT statique, on fixe une adresse publique pour chaque adresse privée. On n'économise donc... rien du tout !</li>
                </ul>
                <p style="margin-top: 30px;">
                    Dans la suite, nous ne nous intéresserons qu'à la NAT dynamique, la NAT statique étant aujourd'hui très peu utilisée, car elle ne répond pas au problème de la pénurie d'adresses IP.</br></br></br>
                    Fonctionnement de la NAT dynamique</br></br>
                    Il nous faut maintenant changer l'adresse IP source dans un paquet envoyé sur Internet pour y mettre une adresse IP publique. Mais laquelle choisir ?
                    C'est simple, nous allons tout simplement utiliser l'adresse IP du routeur qui fait la liaison entre notre réseau privé et Internet, réseau public. En effet, ce routeur possède une adresse IP publique du côté d'Internet.</br>
                    Prenons l'exemple de votre réseau chez vous, derrière votre box Internet.
                </p>
                <img src="../../../../../images/nat-example.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Réseau local derrière box Internet
                </p>
                <p style="margin-top: 30px;">
                    Les adresses locales sont sur le réseau 192.168.0.0/24 qui est bien un réseau privé. On voit bien aussi l'adresse 82.238.22.47 qui est l'adresse publique de notre box (choisie au hasard).
                    Regardons maintenant ce qui se passe dans le cas de la NAT lors de l'envoi d'un paquet sur Internet.</br></br>
                    Étape 1, envoi sur le réseau local d'une requête à jaynerro.com :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet en sortie de la machine 192.168.0.1
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Étape 2, NAT du paquet par le routeur :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet en sortie de la box
                </p>
                <p style="margin-top: 30px;">
                    On voit bien ici que l'adresse IP source a été changée pour mettre celle de la box.</br>
                    Ainsi, notre paquet va aller jusqu'à jaynerro.com, et celui-ci va répondre à l'adresse IP 82.238.22.47 qui est celle de notre box.</br></br>
                    Mais comment la box va pouvoir renvoyer le paquet à la bonne machine sur le réseau local ? Que se passe-t-il si plusieurs machines font des requêtes en même temps sur jaynerro.com ?</br></br>
                    Pour l'instant, notre box n'a aucun moyen de savoir à quelle machine en interne elle doit renvoyer le paquet, mais nous allons voir que nous pouvons utiliser les ports de la couche 4 pour ajouter une information qui nous permettra de savoir quelle machine a envoyé la requête !</br></br></br>
                    Utilisation des ports de la couche 4</br></br>
                    Lors de l'établissement d'une connexion, que ce soit en TCP ou en UDP, un port source est choisi par la machine qui émet la requête. Nous allons nous servir de ce port pour identifier la machine qui a émis la requête à l'origine. Sachant que ce port est choisi aléatoirement entre 1024 et 65535.</br>
                    Si nous reprenons l'envoi de la trame et y ajoutons les informations de couche 4, cela donne :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example-4.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet en sortie de la machine 192.168.0.1
                </p>
                <p style="margin-top: 30px;">
                    La box va recevoir ce paquet et pouvoir noter la correspondance entre l'adresse IP source 192.168.0.1 et le port source utilisé 10277.
                    En fait, elle note même un quadruplet d'informations dans une table, la table NAT.
                </p>
                <img src="../../../../../images/nat-table-example.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On a d'un côté les informations sur le réseau local, et de l'autre les informations à la sortie de la box, après que la NAT ait eu lieu.</br>
                    Regardons maintenant le paquet renvoyé par la box :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example-5.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet en sortie de la box
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    jaynerro.com va répondre à cette requête, et il va envoyer un paquet à notre box :
                </p>
                <img src="../../../../../images/ethernet-frame-nat-example-6.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame Ethernet en sortie de jaynerro.com
                </p>
                <p style="margin-top: 30px;">
                    La box recevant ce paquet va pouvoir regarder dans sa table NAT et voir que celui-ci doit être naté en sens inverse et renvoyé à 192.168.0.1.
                    Ainsi, notre machine 192.168.0.1 qui a envoyé une requête sur Internet, avec son adresse IP privée, va quand même pouvoir recevoir la réponse.</br></br>
                    Mais, nous n'en avons pas encore tout à fait fini avec la NAT dynamique.
                    Imaginons, par le plus grand des hasards, que deux machines sur notre réseau local fassent une requête vers jaynerro.com, en utilisant le même port source.</br>
                    La table NAT de la box serait la suivante :
                </p>
                <img src="../../../../../images/nat-table-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On se rend alors compte que les informations à droite dans le tableau sont parfaitement identiques.
                    Au retour d'un paquet appartenant à l'une ou l'autre des connexions, la box n'aura aucun moyen de savoir si c'est 192.168.0.1 ou 192.168.0.2 qui doit recevoir la réponse...</br>
                    Donc le choix du port source comme élément différenciateur n'est pas suffisant. Il va encore falloir trouver une astuce.
                </p>
                <div id="SNAT">
                    <p style="margin-top: 30px;" id="PAT">
                        La box entre en jeu : PAT (Port address translation) - SNAT</br></br>
                        En fait, il y a un moyen simple de s'assurer que toutes les requêtes qui sortiront n'auront jamais le même port source, il suffit que ce soit la box qui le fixe.
                        Ainsi, la box modifiera à la fois l'adresse IP source ET le port source.
                        Par rapport à notre cas précédent, ça donnerait la table NAT suivante :
                    </p>
                </div>
                <img src="../../../../../images/nat-table-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On voit maintenant que lorsqu'un paquet reviendra avec comme port destination 2356, la box saura qu'il s'agit d'un paquet à destination de 192.168.0.1 et que, lorsqu'il reviendra avec comme port destination 2357, ce sera pour la machine 192.168.0.2.</br>
                    Vu que c'est la box elle-même qui choisit le port source, on est sûrs qu'on n'aura jamais deux fois le même port !
                </p>
                <p style="margin-top: 20px;" id="ISR">
                    La fonction NAT dans un routeur de service intégré (ISR) traduit une adresse IP source interne en adresse IP globale.
                </p>
                <p style="margin-top: 50px;">
                    Accéder à Internet c'est bien, mais pouvoir être joint c'est mieux !</br></br>
                    En effet, grâce à la NAT dynamique, nous pouvons sortir sur Internet en ayant une adresse privée. Par contre, il n'est pas possible à quelqu'un de nous joindre de l'extérieur.</br>
                    Nous n'avons qu'une seule adresse publique et n adresses privées. Ainsi, lors de l'établissement d'une connexion depuis l'extérieur, le routeur n'a aucun moyen de savoir pour quelle machine privée est la requête.
                    Quand c'est une machine interne qui initialise la connexion, le routeur peut noter les informations de connexion et ainsi identifier le paquet au retour. Par contre, quand le premier paquet d'une connexion arrive de l'extérieur, le routeur n'a aucun moyen de savoir pour qui est la requête.
                </p>
                <img src="../../../../../images/nat-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Sens de connexion possible avec la NAT
                </p>
                <p style="margin-top: 30px;">
                    La NAT dynamique pose donc un sérieux problème, il est possible de sortir vers Internet, mais il n'est pas possible à des machines d'Internet de nous joindre directement.
                    Comme toujours, nous allons trouver une solution à ce problème !</br></br>
                    Imaginons que nous faisons tourner un service sur notre machine sur le réseau local privé. Par exemple, un serveur web qui tourne sur le port 80 de la machine 192.168.0.1.
                </p>
                <img src="../../../../../images/nat-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Réseau local avec serveur web
                </p>
                <p style="margin-top: 30px;">
                    Si quelqu'un veut accéder à notre réseau, la seule porte d'entrée est l'adresse IP publique 82.238.22.47. S'il s'adresse au port 80 de ce routeur, il y a deux cas possibles :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>soit il y a un serveur web sur le routeur et la personne tombera dessus ;</li>
                    <li>soit il n'y a pas de serveur web et le routeur renverra un segment TCP avec le flag RST de postionné.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Mais dans les deux cas, la personne n'arrivera pas sur notre joli site web local.</br>
                    Il y a pourtant bien une solution, il est possible de dire à notre routeur de rediriger la requête spécifiquement vers notre machine 192.168.0.1 en fonction du port sur lequel la requête a lieu. Cela s'appelle le port forwarding !
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Le port forwarding</b>
                </p>
                <p style="margin-top: 30px;">
                    Le port forwarding consiste à rediriger un port de notre routeur vers un port donné sur une machine locale.</br></br>
                    Pour notre exemple précédent, nous allons dire au routeur que tout paquet arrivant sur son port 80 devra être redirigé vers la machine d'adresse 192.168.0.1 sur le port 80.
                </p>
                <img src="../../../../../images/port-forwarding-table.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <img src="../../../../../images/port-forwarding.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;" id="DNAT"/>
                <p style="margin-top: 20px; font-size: small;">
                    Port forwarding vers notre serveur web - DNAT
                </p>
                <p style="margin-top: 30px;">
                    Ainsi, toute personne accédant à notre adresse IP publique sur le port 80 sera automatiquement redirigée, sans même le savoir, vers notre serveur web local.
                    Notre serveur peut ainsi, grâce au port forwarding, être joignable depuis l'extérieur.</br>
                    Par conséquent, si vous avez plusieurs services sur votre réseau local, comme par exemple un serveur FTP ou un serveur de jeu, vous pouvez tout à fait les rendre joignables depuis l'extérieur du réseau. Chacun sera joignable sur un port particulier.</br>
                    Ce mécanisme est très intéressant, car seuls les services que nous voulons rendre joignables le seront, et cela présente un gros intérêt au niveau sécurité.</br></br>
                    Il est bien sûr possible de rediriger la connexion vers un autre port que celui d'origine. On aurait pu, par exemple, rediriger le port 80 vers le port 3000 de la machine 192.168.0.1. Il n'y a pas de limitation !</br></br>
                </p>
                <p style="margin-top: 50px;">
                    Le port forwarding, c'est sécurise !</br></br>
                    Le fait d'utiliser de la NAT dynamique ainsi que le port forwarding augmente le niveau de sécurité de votre réseau.</br>
                    Le principe sur un ordinateur, c'est que chaque port ouvert sera une porte ouverte potentielle vers celui-ci.
                    Quand il n'y avait pas de NAT, chaque machine était connectée à Internet avec sa propre adresse IP publique. Ses 65535 ports étaient donc tous potentiellement accessibles... et constituaient potentiellement des portes ouvertes vers la machine.
                    Attention, je ne dis pas que les 65535 ports étaient accessibles. Seuls ceux qui étaient en écoute l'étaient, car une application tournait derrière. Seulement, peu de gens avaient conscience de tous les ports ouverts sur leur machine.</br></br>
                    Prenons notre exemple précédent et regardons les conséquences.</br>
                    Nous faisons tourner un serveur web sur notre machine 192.168.0.1, mais regardons tous les ports en écoute sur cette machine (en imaginant que cette machine est un vieux Windows)
                </p>
                <img src="../../../../../images/port-forwarding-example.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous voyons ici qu'il y a beaucoup plus de ports ouverts que nous pouvions le penser !</br>
                    En effet, Windows ouvrait un certain nombre de ports pour pouvoir partager des fichiers sur le réseau ou fournir d'autres services par défaut.
                    Quand il n'y avait pas de NAT, notre machine était donc accessible directement depuis Internet, et tous ces ports étaient autant de portes ouvertes vers elle.</br>
                    D'ailleurs, beaucoup d'attaques ont été menées à cette époque, marquée notamment par la recrudescence des vers.</br></br>
                    Un ver est un virus qui se réplique automatiquement à travers les réseaux comme Internet, en accédant à des applications vulnérables sur les machines, à travers les ports qui sont accessibles.</br></br>
                    Il y a eu par exemple, pour les plus connus, MS Blaster ou SQL Slammer. Autant de vers qui ont paralysé énormément de machines et de services sur Internet quand ils sont apparus.</br></br>
                    Si, à l'époque, les machines avaient été derrière la NAT, la diffusion de ces vers n'aurait pas été aussi importante, car les ports des machines n'auraient pas pu être atteints depuis Internet.</br></br>
                    Un des intérêts majeurs de la NAT et du port forwarding est de ne rendre accessible QUE ce qui est nécessaire.</br>
                    Dans notre exemple, nous n'aurions mis en place du port forwarding que pour le port 80 pour rendre accessible notre serveur web. Ainsi, tout autre port potentiellement vulnérable n'aurait pas été joignable depuis Internet, et les vers ou autres virus n'auraient pas pu se répandre de la sorte.</br></br>
                    En plus de répondre à la problématique de la pénurie d'adresses, la NAT et le port forwarding ont donc apporté une grande amélioration au niveau sécurité, en ne rendant accessibles QUE les ports nécessaires.</br></br>
                    Ainsi, votre box, faisant de la NAT, protège vos machines sur votre réseau local. Cependant, il y a pourtant un inconvénient majeur au port forwarding...
                </p>
                <p style="margin-top: 50px;">
                    La limite du port forwarding</br></br>
                    En effet, nous avons vu dans notre exemple que nous pouvons rendre notre serveur web joignable sur Internet. Mais que se passe-t-il si nous avons deux serveurs web sur notre réseau local ?</br>
                    Eh bien c'est la catastrophe ! Étant donné que nous n'avons qu'un seul port 80 disponible, nous ne pourrons pas le rediriger vers nos deux serveurs web, il va falloir faire un choix.
                    Au pire, nous pourrions rediriger un autre port que le port 80, comme le 81, mais cela ne respecterait pas les standards d'Internet.</br>
                    Cela obligerait notamment les personnes voulant accéder à ce site à indiquer le port directement dans l'URL du navigateur, comme par exemple http://www.jaynerro.com:81.</br>
                    Ce n'est donc pas une solution satisfaisante.</br></br>
                    Malheureusement pour nous, nous atteignons une limite du port forwarding qui limite à un seul serveur sur le réseau local par port disponible.
                    Donc un seul serveur web, un seul serveur ssh, un seul serveur DNS, etc.</br></br>
                    Toutefois, je vais vous rassurer, il existe quelques solutions qui permettent, pour certains services, de mettre un nombre illimité de serveurs derrière une unique adresse IP publique. Mais, étant donné que ces solutions sont applicatives, de couche 7, nous ne les verrons pas tout de suite.
                </p>
                <p style="margin-top: 50px;">
                    Bonus : Problèmes inhérents</br></br>
                    Bien que certaines applications s'en accommodent sans difficulté, le NAT n'est pas transparent vis-à-vis des applications du réseau et reporte une complexité additionnelle sur le fonctionnement des applications (RFC 2993, RFC 3027) :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Les communications entre postes qui se situent derrière des NAT posent un problème, c'est le cas des protocoles pair à pair.</li>
                    <li>La fragmentation éventuelle des paquets dans le réseau pose également un problème quand un NAT est traversé, car il n'est pas possible pour un hôte qui reçoit des fragments avec le même fragment id et des adresses IP source identiques d'identifier qu'ils appartiennent en réalité à deux hôtes différents derrière un NAT.</li>
                    <li>Certains protocoles, comme rlogin, imposent que le port source soit fixé à 512. La traversée d'un NAT empêche alors plus d'une session sortante par adresse publique.</li>
                    <li>IPSec pose également des problèmes lors de la traversée d'un NAT dans la mesure où l'en-tête authentifié par AH est altéré par le NAT.</li>
                    <li>Le protocole X Window pose également un problème, car les connexions TCP sont initiées par les clients vers l'affichage.</li>
                    <li>rsh et rlogin utilisent un socket initié par le serveur vers le client pour l'erreur standard.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un problème majeur se pose lorsqu'un protocole de communication transmet l'adresse IP de l'hôte source dans un paquet, ou des numéros de ports. Cette adresse n'étant pas valide après avoir traversé le routeur NAT, elle ne peut être utilisée par la machine destinataire. Ces protocoles sont dits « passant difficilement les pare-feu », car ils échangent au niveau applicatif (FTP) des informations du niveau IP (échange d'adresses) ou du niveau TCP (échange de ports), ce qui transgresse le principe de la séparation des couches réseaux.</br></br>
                    Quelques protocoles de ce type sont : FTP, H.323, les protocoles faisant du poste-à-poste (IRC-DCC), les protocoles de gestion de réseau, DNS, certains messages ICMP, traceroute, le protocole SIP.</br></br>
                    Pour pallier cet inconvénient, les routeurs NAT doivent inspecter le contenu, ils font alors office de passerelle applicative (Application-Level Gateway, ALG) et manipulent des paquets qui les traversent pour remplacer les adresses IP spécifiées par les adresses externes. Cela implique de connaître le format du protocole.</br></br>
                    Le NAT ne fait que participer à la politique de sécurité du site, et ce n'est pas son objectif principal : une fois la traduction établie, elle est bidirectionnelle. Le NAT n'est donc pas un substitut au pare-feu.</br></br>
                    Le hairpinning est un problème du NAT.</br></br></br>
                    À défaut de configuration explicite, les NAT rejettent généralement les connexions entrantes, ce qui cause des problèmes notamment pour les applications pair à pair.</br></br>
                    Deux protocoles ont été développés pour permettre à des postes clients de demander l'ouverture et la redirection de ports déterminés au routeur NAT :</br>
                    Simple Traversal of UDP through NATs (STUN, RFC 3489)</br>
                    Universal Plug and Play (UPnP) via le Internet Gateway Device Protocol </br></br>
                    Des logiciels comme Skype utilisent d'autres techniques pour la communication entre pairs derrière des NAT. pwnat utilise une variante qui fait usage de messages ICMP pour la découverte du client.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    En synthèse, les trois principaux types de NAT utilisés sont :
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>Le NAT statique (à une IP privée correspond une IP publique). Pour un accès permanent à une ressource sur un réseau privé depuis Internet. Utilisé pour un serveur web s'il est contraint d'être placé sur un réseau privé. Annule le bénéfice des IP privées car ne diminue pas le besoin en IP publiques.</li>
                    <li>Le NAT dynamique avec pool d'adresses (à N IP privées correspondent X IP publiques avec X ≤ N). Le PAT (Port Address Translation) lui est préféré (pool réduit à 1 adresse).</li>
                    <li>Le NAT dynamique avec surcharge = NAT overload = PAT (à N IP privées correspond une seule IP publique). C'est celui utilisé par les Box Internet grand public.</li>
                </ol>
                <p style="margin-top: 30px;">
                    Par principe le PAT est une faille de sécurité car il permet à des hôtes sur Internet de joindre des hôtes dans l'intranet. Pour éviter cela, il est fortement conseillé de ne pas utiliser des hôtes de la zone intranet, mais plutôt ceux de la zone DMZ qui abrite des serveurs configurés et protégés pour accueillir des connexions extérieures contrairement à la zone intranet.</br></br>
                    Vocabulaire : Masquerading ou NAT Overload, où l'adresse IP du routeur est seule utilisée comme adresse externe. Le masquerading est donc un sous-cas de la dynamique PAT. Permet de translater plusieurs adresses IP privées par une adresse IP publique, en attribuant des numéros de ports source distincts par IP privée.
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
                    <a href="https://fr.wikipedia.org/wiki/Network_address_translation" target="_blank">Wikipedia - Network address translation</a>
                </h6>
               

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>