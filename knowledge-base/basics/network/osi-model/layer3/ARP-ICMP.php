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
    <link rel="stylesheet" type="text/css" href="../../../../../static/css/prism.css"/>

    <?php // Titre de l'onget de la page ?>
    <title>Modèle OSI - Couche 3 : Autres protocoles ARP & ICMP</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 3</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Autres protocoles : ARP & ICMP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Autres protocoles : ARP & ICMP
                </h1>
                <p style="margin-top: 30px;">
                    <b>Le protocole ARP</b>
                </p>
                <img src="../../../../../images/simple-network-example.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Imaginons que la machine 192.168.0.1 veuille envoyer un message à la machine 192.168.1.2.</br>
                    Nous allons reconstituer son raisonnement.</br>
                    Lors d'un envoi de message, nous traversons les couches du modèle OSI de la couche application vers la couche réseau.
                    Nous traversons donc la couche 7, puis la couche 4, et enfin la couche 3 que nous connaissons maintenant.
                    La couche 3 voit que nous voulons envoyer un paquet à la machine 192.168.1.2. Elle va donc chercher dans sa table de routage par qui il faut passer pour envoyer ce message.
                </p>
                <img src="../../../../../images/routing-table-example-11.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Il est clairement indiqué que nous devons passer par la passerelle 192.168.0.254 pour joindre le réseau 192.168.1.0/24 qui contient l'adresse que l'on veut joindre. Notre machine sait donc qu'il va falloir envoyer le paquet à 192.168.0.254.
                    La machine 192.168.0.254 est sur notre réseau, donc pour lui envoyer la trame nous devons connaître son adresse MAC. Or, nous ne la connaissons pas...</br>
                    Comment faire pour connaître l'adresse MAC de 192.168.0.254 ?</br>
                    Il faudrait pouvoir la lui demander, mais pour lui demander il faudrait connaître son adresse MAC, et pour connaître son adresse MAC il faudrait la lui demander... c'est l'histoire de la poule et de l’œuf.</br>
                    Mais il y a une solution : le protocole ARP (Address Resolution Protocol) !</br></br>
                    Comment faire pour envoyer un message à une machine sur notre réseau sans connaître son adresse MAC ?
                    Si vous vous rappelez bien, nous avons vu quelque chose qui nous le permettait... il s'agit de l'adresse de broadcast !</br>
                    Nous pouvons envoyer un message à l'adresse de broadcast en demandant "est-ce que 192.168.0.254 peut m'envoyer son adresse MAC ?"
                    Grâce à l'adresse de broadcast ce message sera envoyé à tout le monde, et donc 192.168.0.254 le recevra et pourra nous renvoyer son adresse MAC.</br>
                    C'est ce que l'on appelle une requête ARP ou aussi un broadcast ARP.</br></br>
                    Nous pourrons alors envoyer notre trame à la machine 192.168.0.254 qui, grâce à sa table de routage, pourra aiguiller notre message vers la destination 192.168.1.2.</br></br>
                    ARP est donc un protocole qui permet d'associer une adresse MAC de couche 2 à une adresse IP de couche 3.</br></br>
                    Mais les broadcasts ne risquent-ils pas de saturer le réseau à chaque fois que l'on veut envoyer une information ?</br>
                    Bien sûr, et c'est pour cela qu'un mécanisme complémentaire a été mis en place, la table ARP.
                </p>
                <p style="margin-top: 50px;">
                    <b>La table ARP</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour éviter d'avoir à renvoyer en permanence des broadcasts ARP à chaque fois que l'on veut envoyer une information à une machine, nous allons utiliser une table qui va garder les associations adresses IP <-> Adresses MAC pendant un court moment.
                    Ainsi, si j'envoie un paquet à ma passerelle, je noterai son adresse MAC dans ma table ARP et la prochaine fois que je voudrai lui parler, je n'aurai plus à envoyer de broadcast sur le réseau.</br></br>
                    La table ARP va donc associer adresse IP et adresse MAC correspondante. 
                </p>
                <img src="../../../../../images/arp-table.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On voit ici que ma machine dialogue avec beaucoup d'autres machines sur son réseau. Mais c'est normal puisqu'il s'agit de la passerelle de sortie de mon réseau.</br>
                    Ainsi, quand la passerelle voudra envoyer un paquet à l'adresse 10.8.100.41, elle connaîtra directement son adresse MAC.</br>
                    Mais si jamais je change la carte réseau de ma machine ? Elle changera aussi d'adresse MAC, mais ce sera l'ancienne qui sera indiquée dans la table ?</br>
                    Non, car les informations contenues dans la table ARP ont une durée de vie limitée. En gros, une valeur va rester environ deux minutes dans la table avant d'être effacée s'il n'y a pas eu de dialogue avec cette adresse entre-temps. C'est pour cela que l'on dit que la table ARP est dynamique. Elle évolue au cours du temps en fonction des machines avec lesquelles je dialogue.</br>
                    La commande sous Unix pour voir sa table ARP est arp -an ; elle est arp -a sous Windows.
                    Bien sûr vous risquez de voir peu de chose chez vous s'il n'y a que deux ou trois machines sur votre réseau.</br>
                </p>
                <p style="margin-top: 50px;">
                    <b>Déroulement de A à Z d'une requête ARP</b>
                </p>
                <p style="margin-top: 30px;">
                    Reprenons l'exemple précédent : nous sommes la machine 192.168.0.1 et voulons envoyer un message à la machine 192.168.1.2.</br>
                    Nous savons que nous voulons joindre d'abord le routeur 192.168.0.254, mais ne connaissons pas son adresse MAC.</br>
                    C'est là que le protocole ARP entre en jeu :</br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>on regarde d'abord dans la table ARP locale si on possède l'association entre l'adresse IP 192.168.0.254 et son adresse MAC ;</li>
                    <li>si on la possède, on envoie l'information et c'est terminé ;</li>
                    <li>sinon, on envoie un broadcast ARP sur le réseau ;</li>
                    <li>la machine 192.168.0.254 va nous répondre avec son adresse MAC ;</li>
                    <li>nous allons noter cette adresse MAC dans notre table ARP ;</li>
                    <li>nous allons enfin pouvoir envoyer notre information.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Nous savons maintenant comment font les machines pour passer d'une adresse IP à joindre à l'adresse MAC correspondante : grâce au protocole ARP !</br></br>
                    Mais à quelle couche appartient ce protocole : 2 ou 3 ?</br></br>
                    Le protocole ARP est un protocole de couche 2 ET 3 !</br></br>
                    Oui, il manipule des informations de couche 2, les adresses MAC, et des informations de couche 3, les adresses IP. Ainsi, on dit que ce protocole est "à cheval" entre ces deux couches.
                </p>
                <p style="margin-top: 60px;">
                    <b>ARP cache poisoning ou ARP spoofing</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous allons essayer de réaliser une attaque réseau qui permet d'écouter le trafic d'une autre machine qui est connectée sur le même réseau que nous.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    <b>Le principe</b>
                </p>
                <p style="margin-top: 30px;">
                    L'attaque est basée sur le détournement du fonctionnement du protocole ARP. C'est pour cela qu'elle s'appelle du ARP cache poisoning.
                    Nous allons en réalité modifier à distance la table ARP d'une autre machine.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    La théorie
                </p>
                <p style="margin-top: 30px;">
                    Dans le meilleur des mondes, une machine fait un broadcast ARP, et la machine destinataire répond en fournissant son adresse MAC.
                    Mais que se passerait-il si je décidais aussi de répondre avec ma propre adresse MAC ?
                    Eh bien ce serait la dernière réponse qui serait prise en compte.</br></br>
                    Par exemple, je peux tout à fait attendre de voir passer une requête ARP qui ne m'est pas destinée. J'attends deux secondes pour y répondre, et je suis alors quasiment sûr que ce sera ma réponse qui sera prise en compte. 
                    Et si j'ai mis dans la réponse ma propre adresse MAC, ce sera mon adresse MAC qui sera associée à l'adresse IP de la machine destinataire de la requête dans la table ARP du demandeur.</br>
                    Prenons le schéma de la figure suivante comme exemple.
                </p>
                <img src="../../../../../images/arp-poisoning.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous avons trois machines d'adresses 192.168.0.1, 192.168.0.2 et 192.168.0.3.</br>
                    Imaginons que nous sommes la machine 192.168.0.2 et que nous voulions écouter le trafic envoyé entre 192.168.0.1 et 192.168.0.3.
                    La machine 192.168.0.1 veut envoyer un message à la machine 192.168.0.3. Elle commence donc par envoyer un broadcast ARP afin de déterminer l'adresse MAC de 192.168.0.3.
                    192.168.0.3 répond à la requête ARP (elle répond directement à la machine 192.168.0.1, elle n'a pas besoin d'envoyer son message en broadcast à tout le monde). Et nous décidons de répondre aussi deux secondes plus tard.</br>
                    En recevant la première réponse de 192.168.0.3, la machine 192.168.0.1 va mettre à jour sa table ARP :
                </p>
                <img src="../../../../../images/arp-table-example.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table ARP de 192.168.0.1
                </p>
                <p style="margin-top: 30px;">
                    Ce qui est tout à fait normal.</br>
                    Mais la machine 192.168.0.1 va recevoir une nouvelle réponse, celle que nous avons envoyée et qu'elle va prendre en compte ! Or, cette réponse associe, non pas l'adresse IP de 192.168.0.3 à l'adresse MAC de 192.168.0.3, mais à notre adresse MAC, celle de 192.168.0.2.
                </p>
                <img src="../../../../../images/arp-table-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table ARP de 192.168.0.1
                </p>
                <p style="margin-top: 30px;">
                    Ainsi, désormais et jusqu'à ce que la table ARP soit mise à jour ou que la machine 192.168.0.3 ne lui envoie un paquet, la machine 192.168.0.1 va nous envoyer ses paquets en pensant les envoyer à 192.168.0.3.</br>
                    Il ne nous reste plus qu'à faire la même attaque envers 192.168.0.3 pour modifier sa table ARP, pour pouvoir intercepter tous les échanges entre ces deux machines !
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Amélioration de l'attaque</b>
                </p>
                <p style="margin-top: 10px; justify-content : start">
                    Cependant, nous avons deux problèmes actuellement :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>si une des machines réussit à envoyer une réponse ARP à l'autre après la nôtre, la table ARP sera remise à jour correctement et l'attaque ne fonctionnera plus ;</li>
                    <li>au bout d'un certain temps, la table ARP se videra et l'attaque ne marchera plus.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Mais il y a une solution ! Et c'est le fonctionnement de ARP qui nous l'offre.</br>
                    En fait, quand une machine reçoit une réponse ARP, même si elle n'a rien demandé, elle va prendre les informations contenues dans cette réponse comme étant valides et plus à jour que celles qu'elle possède déjà. Ainsi, on ne sera pas obligés d'attendre une requête ARP pour répondre.</br>
                    On pourra "bombarder" la machine destination de réponses ARP pour être sûrs que sa table n'est jamais correctement remise à jour.</br></br>
                    On sera sûrs alors de recevoir tout le trafic, tant que l'on fera durer l'attaque.</br></br>
                    Tout cela est bien joli, mais comment on peut faire tout ça ?
                    Eh bien, des outils existent, et nous permettent de le faire facilement.</br>
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Mise en pratique</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour cela, nous allons avoir besoin d'un logiciel qui fabrique des paquets truqués pour nous. Il y en a plusieurs, nous allons faire cela à l'aide de scapy.</br>
                    Scapy est un outil extraordinaire qui vous permet de faire à peu près tout ce que vous voulez en réseau, nous allons en voir une infime partie compte tenu de ses possibilités.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    Utilisation d'un petit script d'automatisation
                </p>
                <p style="margin-top: 30px;">
                    Nous n'allons pas étudier scapy en détail pour l'instant car son utilisation pourrait nécessiter un ouvrage à part entière. Il s'agit seulement d'un petit script sorti d'Internet un petit peu modifié, qui utilise scapy pour la fonction d'ARP cache poisoning qui nous intéresse.</br>
                    Voici le contenu du script :
                </p>
                <pre class="line-numbers"><code class="language-python"><?php require_once'../../../../../script/arpcachepoison.py'?></code></pre>
                <p style="margin-top: 30px;">
                    Si vous voulez des explications sur ce script, vous n'en aurez pas ici. Notre objectif est de l'utiliser, pas de faire un cours de Python, vous pourrez aller lire l'aide-mémoire sur Python pour mieux le comprendre, mais ce n'est en rien nécessaire.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    Mise en œuvre de l'attaque
                </p>
                <p style="margin-top: 10px;">
                    Pour commencer, nous allons le lancer simplement pour voir sa syntaxe. Pour ceux qui ont installé ce script à la main, il faut le rendre executable avant de pourvoir l'exécuter ! Un petit chmod 755 arpcachepoison.py devrait faire l'affaire.</br></br>
                    Testons la commande:
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison'?></code></pre>
                <p style="margin-top: 30px;">
                    La première ligne de WARNING ne nous intéresse pas, c'est juste un message d'information qui ne nous empêchera pas d'arriver à nos fins !</br>
                    La seconde ligne nous donne l'usage du script. Il faut donner en paramètre au script l'adresse IP de la machine que l'on veut attaquer, puis celle de la machine pour laquelle on veut se faire passer. Rien de plus simple !</br>
                    Testons notre première attaque, nous sommes la machine Debian02 et nous voulons modifier le cache ARP de la machine Debian01 afin de nous faire passer pour la machine Debian03.</br>
                    Pour commencer, nous allons faire un ping de Debian01 vers Debian03 afin d'avoir les bonnes informations dans la table ARP :</br></br>
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison2'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Puis regardons ensemble la table ARP :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison3'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Elle a bien été mise à jour avec l'adresse MAC légitime de la machine Debian03.</br>
                    Lançons maintenant notre attaque sur le machine Debian02 :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison4'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Ici on voit que chaque point représente un paquet envoyé.</br>
                    Regardons le résultat sur la table ARP de la machine Debian01 :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison5'?></code></pre>
                <p style="margin-top: 30px;">
                    L'information sur l'adresse MAC de la machine Debian03 a bien été modifiée !
                    Nous pouvons le vérifier en tentant de pinguer la machine Debian03 depuis la machine Debian01 :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison6'?></code></pre>
                <p style="margin-top: 30px;">
                    Le ping ne fonctionne plus, pourquoi donc ? </br></br>
                    En fait, la machine Debian01 envoie le ping à Debian02 et non pas à Debian03, cependant, l'adresse IP de destination dans le ping est bien Debain03.</br>
                    Mais notre machine Debian02 n'est pas censée accepter des paquets pour une autre adresse IP que la sienne, car elle n'est pas un routeur. Donc les requêtes ping sont jetées par Debian02. </br></br>
                    Ca fonctionne, mais ce n'est pas très furtif comme attaque car la personne sur Debian01 va chercher d'où vient son problème réseau !
                    Effectivement, si nous voulons que la personne sur Debian01 ne se rende compte de rien, il faut qu'elle reçoive bien les réponses à son ping, et pour cela il suffit d'indiquer à Debian02 de se comporter comme un routeur.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison7'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Et maintenant, les pings devraient passer :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison8'?></code></pre>
                <p style="margin-top: 30px;">
                    Ca marche, maintenant les paquets sont interceptés par Debian02, et pourtant le comportement du réseau est tout à fait normal. Nous allons pouvoir espionner tout ce que fait Debian 01 à son insu !
                    Enfin, nous allons pouvoir voir des paquets réseau, d'ici à réellement pouvoir observer ce qui est fait, il y a quand même encore beaucoup de travail.
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Amélioration de l'attaque</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous avions vu que, pour que l'attaque soit efficace, il faudrait bombarder la victime de réponses ARP.</br>
                    Pour l'instant, notre script envoie 5 paquets par seconde, si vous voulez être encore plus rapide, vous pouvez aller changer la variable inter en toute fin de script. Par exemple, passer la à 0.02 et regardez le résultat.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison9'?></code></pre>
                <p style="margin-top: 30px;">
                    Ce n'est pas obligatoirement nécessaire de bombarder aussi fort, mais dans certains cas cela peut s'avérer utile. Plus vous envoyez les paquets vite, moins il y a de chance que la machine Debian01 mette à jour sa table ARP.</br>
                    Attention cependant à ne pas saturer le réseau et vous faire capter par l'administrateur réseau !</br>
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Conséquences et objectifs de l'attaque</b>
                </p>
                <p style="margin-top: 30px;">
                    Une des première conséquence que nous avons observée est que si l'on n'active pas le routage sur la machine qui fait l'attaque, les paquets sont jetés et cela coupe donc toute possibilité de communication.</br>
                    On appelle cela un DOS (Denial of service <=> Déni de service), car on empêche une machine d'accéder ou de fournir un service réseau.</br>
                    Une fois le routage activé, nous pouvons aussi observer le dialogue entre 192.168.0.1 et 192.168.0.3 : Attaque de l'homme au milieu / Man-in-the-middle (MITM)
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/arpcachepoison10'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Nous pouvons remarquer deux choses :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>nous voyons bien passer les requêtes ping ;</li>
                    <li>nous ne voyons pas passer les réponses renvoyées par 192.168.0.3.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Pourquoi ne voit-on pas passer les réponses ?</br></br>
                    Parce que nous n'avons lancé l'attaque que dans un sens !</br>
                    Nous n'avons pas encore modifié la table ARP de 192.168.0.3. Donc elle renvoie normalement ses réponses directement à 192.168.0.1 sans passer par nous.
                    Si on mene l'attaque dans les deux sens, on observera les réponses au ping (il faut pour cela lancer deux attaques en parallèle dans deux terminaux différents).
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Encore une amélioration de l'attaque</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous avons vu que grâce à cette attaque, nous sommes capables d'écouter le trafic entre deux machines sur un réseau local.</br>
                    Oui, ne vous leurrez pas, cette attaque n'est possible que sur un réseau local. Vous ne pourrez donc pas espionner qui que ce soit sur Internet...</br>
                    Mais n'y aurait-il pas une machine particulière sur le réseau qu'il serait intéressant d'écouter ?</br>
                    Bien sûr ! C'est notre passerelle, car elle voit passer tout le trafic des machines du réseau local vers Internet !
                    Ainsi, si je menais l'attaque entre une machine du réseau local et la passerelle, je pourrais voir le trafic Internet de cette machine...</br>
                    Mais nous pouvons faire encore mieux !
                </p>
                <p style="margin-top: 40px; justify-content : start">
                    <b>Encore une autre amélioration de l'amélioration de l'attaque</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous pouvons écouter le trafic entre une machine et la passerelle mais, tant qu'à faire, il serait encore mieux d'écouter le trafic entre toutes les machines du réseau et la passerelle.</br>
                    Pour cela, nous pouvons utiliser l'adresse IP de broadcast en adresse IP de destination pour envoyer notre attaque et nous toucherons ainsi directement toutes les machines du réseau (le sens inverse de l'attaque devra par contre être fait pour chacune des machines).</br></br>
                    Donc nous sommes maintenant capables d'écouter le trafic de n'importe quelle machine de notre réseau.</br></br>
                    Nous avons vu le protocole ARP et comment l'utiliser à des fins peu recommandables.</br>
                    Mais nous allons voir qu'il existe d'autres protocoles de couche 3, notamment celui qui nous sert déjà depuis un petit moment à envoyer des pings ou à faire des traceroute, le protocole ICMP.
                </p>
                <p style="margin-top: 50px; justify-content : start">
                    <b>Contre-mesure</b>
                </p>
                <p style="margin-top: 30px;">
                    Il est préférable pour un petit réseau d’utiliser une table statique. Une table ARP statique permet de fixer l’association de l’adresse IP avec l’adresse MAC d’un équipement. Dans un réseau plus large, le travail serait trop fastidieux. 
                    En effet, pour n machines, chaque machine doit posséder n-1 entrées dans sa table ARP donc n^2-n entrées au total.</br></br>
                    Il existe également des logiciels permettant la détection et la prévention de l’attaque par déni de service. 
                    Les logiciels qui détectent l'usurpation ARP reposent généralement sur une forme de certification ou de vérification croisée des réponses ARP. Les réponses ARP non certifiées sont alors bloquées. Ces techniques peuvent être intégrées au serveur DHCP afin que les adresses IP dynamiques et statiques soient certifiées. 
                    Cette capacité peut être mise en œuvre dans des hôtes individuels ou être intégrée dans des switch Ethernet ou d'autres équipements de réseau. L'existence de plusieurs adresses IP associées à une seule adresse MAC peut indiquer une attaque ARP spoof, bien qu'il existe des utilisations légitimes d'une telle configuration.</br>
                    Dans une approche plus passive, un dispositif écoute les réponses ARP sur un réseau, et envoie une notification par courrier électronique lorsqu'une entrée ARP change.</br></br>
                    AntiARP fournit une prévention de l'usurpation d'identité basée sur Windows au niveau du noyau. </br></br>
                    ArpStar est un module Linux pour le noyau 2.6 et les routeurs Linksys qui supprime les paquets invalides qui violent le mappage, et contient une option de repoison ou de guérison.</br></br>
                    Certains environnements virtualisés tels que KVM fournissent également des mécanismes de sécurité pour empêcher l'usurpation de MAC entre les invités fonctionnant sur le même hôte.</br></br>
                    De plus, certains adaptateurs ethernet fournissent des fonctions anti-spoofing MAC et VLAN.</br></br>
                    OpenBSD surveille passivement les hôtes se faisant passer pour l'hôte local et notifie en cas de tentative d'écrasement d'une entrée permanente.</br></br></br>

                    Sécurité des systèmes d'exploitation</br>
                    Les systèmes d'exploitation réagissent différemment. Linux ignore les réponses non sollicitées, mais, en revanche, utilise les réponses aux demandes des autres machines pour mettre à jour son cache. Solaris n'accepte les mises à jour des entrées qu'après un délai d'attente. </br>
                    Dans Microsoft Windows, le comportement du cache ARP peut être configuré par plusieurs entrées de registre sous HKEY_LOCAL_MACHINE\SYSTEM\CurrentControlSet\Services\Tcpip\Parameters, ArpCacheLife, ArpCacheMinReferenceLife, ArpUseEtherSNAP, ArpTRSingleRoute, ArpAlwaysSourceRoute, ArpRetryCount.
                </p>
                <p style="margin-top: 70px;">
                    <b>Le protocole ICMP</b>
                </p>
                <p style="margin-top: 20px;">
                    Le protocole ICMP (Internet Control Message Protocol), ne va pas concurrencer le protocole IP, car son objectif n'est pas de transporter de l'information. Son rôle est de contrôler les erreurs de transmission, et d'aider au débogage réseau.</br>
                    Son utilisation nous permet de comprendre rapidement d'où peut venir un problème réseau, et de nous donner des outils pour investiguer un problème réseau.
                    Le protocole ICMP est donc un "complément" du protocole IP, ou plus exactement des protocoles de la pile TCP/IP, qui permet de comprendre plus facilement ce qui se passe sur un réseau quand il y a un problème.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    <b>Fonctionnement du protocole</b>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>ICMP sert à indiquer automatiquement des erreurs quand elles surviennent ;</li>
                    <li>ICMP peut fournir des outils pour étudier un problème réseau.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Les messages automatiques
                </p>
                <p style="margin-top: 30px;">
                    Il y a deux informations qui nous intéressent dans l'en-tête ICMP, le type et le code. Le type permet de dire à quoi sert le message ICMP, le code permettant de préciser le rôle du message.</br>
                    Par exemple, un paquet ICMP de type 3 indique que le destinataire n'est pas accessible.
                    Si j'envoie un paquet à une machine B et que je reçois un message ICMP de type 3, je sais qu'il y a eu un problème sur le réseau.</br>
                    Maintenant, le code du message va me dire ce qui a précisément posé problème :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>un code égal à 0 me dira que le réseau n'est pas accessible (globalement, qu'un routeur sur le chemin n'a pas de route pour le réseau destination) ;</li>
                    <li>un code égal à 1 me dira que la machine n'est pas accessible (une requête ARP a sûrement été envoyée par le dernier routeur, mais personne n'y a répondu) ; etc.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Au niveau de ma machine, si j'ai fait un ping par exemple, je verrai un message comme "Destination unreachable" dans ma ligne de commande. Mais si je suis en environnement graphique, il y a toutes les chances pour que je n'aie aucune information ICMP qui s'affiche, même si le paquet ICMP automatique a bien été reçu par ma machine.
                    Il faut dans ce cas sortir un sniffer comme tcpdump ou wireshark pour voir les messages d'erreur ICMP circuler sur le réseau.</br>
                    Nous avons vu le premier type de message automatique, le type 3, mais il y en a d'autres, voici les plus utilisés :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>type 5, ICMP redirect, indique qu'il y a un chemin plus court vers la destination ;</li>
                    <li>type 11, TTL exceeded, indique que la durée de vie du paquet a expiré.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Le premier est utilisé quand un routeur renvoie un paquet par l'interface depuis laquelle il l'a reçu. Cela veut dire qu'il n'est pas nécessaire de passer par lui et qu'il y a un chemin plus court. Ceci permet à l'administrateur qui voit passer ces messages d'améliorer le routage sur son réseau.</br></br>
                    Le second est très utilisé. Pour le comprendre, vous devez déjà apprendre ce qu'est le TTL dans l'en-tête IP.</br>
                    Nous avons déjà vu un TTL, c'était celui de la table CAM du switch. Il indiquait la durée de vie d'une information dans la table.
                    Eh bien un mécanisme équivalent a été implémenté dans le protocole IP pour éviter que les paquets ne circulent indéfiniment entre différents routeurs.</br></br>
                    Imaginons qu'un routeur A ait comme passerelle par défaut un routeur B, et que le routeur B ait comme passerelle par défaut le routeur A.
                    Un paquet envoyé à l'un des routeurs à destination d'un autre réseau va circuler alternativement d'un routeur à l'autre, comme une balle de ping-pong, sans jamais s'arrêter. Après quelque temps, beaucoup de paquets feront de même, et le réseau sera saturé.</br></br>
                    Pour éviter ce problème, on a implémenté un système de TTL dans l'en-tête IP. Quand une machine envoie un paquet IP sur le réseau, un des éléments de l'en-tête est le TTL qui est une valeur entre 0 et 255. Par exemple, tout paquet envoyé depuis un Linux a un TTL de 64, cela varie d'un système à l'autre, 64 étant la plus petite.
                    À chaque passage par un routeur, celui-ci va enlever 1 au TTL. Si le TTL arrive à 0, il jette le paquet à la poubelle ET envoie un message d'erreur ICMP "TTL exceeded".</br></br>
                    Ainsi, si un paquet fait une partie de ping-pong entre deux routeurs, le processus s'arrêtera quand le TTL sera arrivé à 0. Grâce au TTL, on évite la saturation d'un réseau par mauvaise configuration de routage. Le message ICMP TTL exceeded permet, en plus, de comprendre le problème réseau.
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    Messages utiles pour déboguer le réseau
                </p>
                <p style="margin-top: 30px;">
                    Ces paquets ICMP vont en fait nous être utiles pour des commandes qui vont nous permettre de déboguer des problèmes réseau. Or, ces commandes, nous les connaissons déjà...</br></br>
                    Il s'agit de la commande ping et de la commande traceroute.</br>
                    Le ping est en fait la combinaison de deux types de messages ICMP, un echo request, type 8, et un echo reply, type 0.
                    Le principe du ping est qu'une machine envoie un echo request, auquel répond une machine destinataire avec un echo reply. C'est pour cela que quand on arrive à pinguer une autre machine, on sait que le routage est correct dans les deux sens.</br></br>
                    Pour le traceroute, c'est un peu plus compliqué.</br>
                    On utilise en fait une petite astuce en se servant d'un message automatique ICMP, le TTL exceeded. comment peut-on connaître tous les routeurs entre nous et une destination donnée, en se servant de paquets ICMP TTL exceeded ?</br>
                    Nous devons utiliser un paquet ICMP TTL exceeded. L'idée est de faire générer ce paquet par le premier routeur. Ainsi, en voyant ce message d'erreur, je pourrais voir l'adresse du routeur dans ce paquet.
                    Comment faire pour faire générer ce message d'erreur par le premier routeur ?</br>
                    Il suffit de mettre un TTL à 1 dans le paquet envoyé.
                    Le premier routeur va le recevoir, décrémenter le TTL de 1 et donc le mettre à 0. Il devra jeter le message à la poubelle et me renvoyer un message d'erreur ICMP TTL exceeded. Ainsi, je pourrai connaître son adresse IP !</br>
                    Si vous avez compris le principe, pour connaître l'adresse du second routeur, il me suffira de mettre le TTL à 2 dans le paquet envoyé. Et ainsi de suite pour connaître tous les routeurs traversés !</br></br>
                    Parfois, en faisant des traceroute, vous aurez l'impression de passer deux fois par le même routeur.</br>
                    En fait, le fonctionnement de traceroute fait en sorte qu'on envoie une nouvelle requête avec un TTL différent pour chaque routeur que l'on veut connaître. Mais chacune de ces requêtes peut passer par un chemin différent sur Internet, le résultat d'un traceroute n'est jamais figé dans le marbre, car le routage peut évoluer.
                </p>
                <img src="../../../../../images/icmp.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Type de message ICMP
                </p>
                

                <script src="../../../../../static/js/prism.js" type="text/javascript"></script>
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

                <h6 style="margin-top: 30px;">
                    <a href="https://openclassrooms.com/fr/courses/6944606-concevez-votre-reseau-tcp-ip" target="_blank">Concevez votre réseau TCP/IP - OpenClassrooms</a>
                </h6>
                        
                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://en.wikipedia.org/wiki/ARP_spoofing" target="_blank">ARP spoofing - Wikipédia</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>