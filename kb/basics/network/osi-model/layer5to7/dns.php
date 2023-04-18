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
    <title>Modèle OSI - Couche 5 à 7 : Le service DNS</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 5 à 7</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le service DNS</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le service DNS
                </h1>
                <p style="margin-top: 30px;"> 
                    Nous avons beau être des êtres humains avec une bonne mémoire, notre cerveau n'est pas fait pour retenir des séries de chiffres comme 145.239.37.162. On aimerait mieux avoir à retenir des noms comme jaynerro.com.</br>
                    Il ne s'agit donc pas d'un problème technique, Internet fonctionne très bien avec des adresses IP, mais d'un problème de nommage pour permettre un accès simplifié à Internet pour nous tous, pauvres êtres humains. Ce système de nommage est le Domain Name System (DNS).
                </p>
                <p style="margin-top: 50px; justify-content: start" id="DNS">
                    <b>Présentation du DNS</b>
                </p>
                <p style="margin-top: 30px;">
                    Le DNS est un protocole indispensable au fonctionnement d'Internet. Non pas d'un point de vue technique, mais d'un point de vue de son utilisation. Il est inconcevable aujourd'hui d'utiliser des adresses IP en lieu et place des noms des sites web pour naviguer sur Internet. Se souvenir de 58.250.12.36 est déjà compliqué, mais quand vous surfez sur 40 sites différents par jour, cela fait quelques adresses à retenir. Et ça, on ne sait pas faire...</br></br>
                    Un arbre avec des branches</br></br>
                    Une arborescence ordonnée</br></br>
                    Le système DNS, vous l'utilisez tous les jours quand vous naviguez sur Internet. Lorsque vous voulez accéder à jaynerro.com, le système DNS se charge de convertir (on parle de résolution) le nom du site web demandé en adresse IP.</br></br>
                    Un nom de domaine se décompose en plusieurs parties. Prenons l'exemple suivant : www.google.fr
                </p>
                <div id="TLD">
                    <div id="gTLD">
                        <p style="margin-top: 20px;" id="ccTLD">
                            Chaque partie est séparée par un point. On trouve l'extension en premier (en premier, mais en partant de la droite) ; on parle de Top Level Domain (TLD). Il existe des TLD nationaux, les ccTLD (country code TLD)  : fr, it, de, es, etc. et les TLD génériques (gTLD) : com, org, net, biz, etc.</br></br>
                            Ici, on a le découpage suivant :</br>
                            www.google.fr</br>
                            Il existe une infinité de possibilités pour la deuxième partie. Cela correspond à tous les sites qui existent : google.fr, jaynerro.com, ovh.net, twitter.com, etc.
                            Comme vous le voyez, google.fr est un sous-domaine de fr. Le domaine fr englobe tous les sous-domaines finissant par fr.</br></br>
                            La troisième partie est exactement comme la seconde. On y retrouve généralement le fameux "www", ce qui nous donne des noms de domaine comme www.google.fr. www peut soit être un sous-domaine de google.fr, mais dans ce cas il pourrait y avoir encore des machines ou des sous-domaines à ce domaine, soit être directement le nom d'une machine.
                            Ici, www est le nom d'une machine dans le domaine google.fr.</br></br>
                            On peut bien entendu ajouter autant de troisièmes parties que nécessaire, ce qui peut vous conduire à avoir un nom de domaine comme : www.fr.1.new.super.google.fr.</br></br>
                            Voici une toute petite partie de l'arborescence des noms Internet :
                        </p>
                    </div>
                </div>
                <img src="../../../../../images/dns-domain-name.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;" id="FQDN">
                    Chaque "partie" est appelée label et l'ensemble des labels constitue un FQDN : Fully Qualified Domain Name. Ce FQDN est unique. Par convention, un FQDN se finit par un point, car au-dessus des TLD il y a la racine du DNS, tout en haut de l'arbre. Ce point disparaît lorsque vous utilisez les noms de domaine avec votre navigateur, mais vous verrez qu'il deviendra très important lorsque nous configurerons notre propre serveur DNS.</br></br>
                    Au niveau DNS, www.google.fr n'est pas un FQDN, car il manque le point à la fin.</br></br>
                    Tout FQDN sur Internet doit obligatoirement se finir par un point, comme www.jaynerro.com. qui est alors bien un FQDN, car on est sûr qu'il n'y a pas de domaine au-dessus.</br></br>
                    Si jamais vous administrez un réseau, et que vous possédez le domaine mondomaine.com, vous pouvez vous amuser à ajouter dans votre serveur DNS une machine qui s'appellera www.google.fr.mondomaine.com.</br>
                    Ainsi, dès qu'une personne qui utilise votre serveur DNS demande www.google.fr en oubliant de mettre le . à la fin, elle sera envoyée vers votre la machine www.google.fr.mondomaine.com. !</br></br>
                    Mais revenons aux principes du DNS pour étudier un dernier point important dans l'arborescence.
                    Dans l'architecture du service DNS, chaque label est responsable du niveau directement en dessous et uniquement de celui-ci. La racine est responsable du domaine .com, le .com de google.com et google.com de www.google.com, etc. Bien entendu, Google veut gérer lui-même le domaine google.com. L'organisme qui gère le domaine .com délègue donc la gestion de ce nom de domaine à Google.</br>
                    Ainsi, chaque personne qui veut posséder un domaine sur Internet peut l'acheter, mais devra ensuite gérer un serveur DNS pour publier ses adresses.
                    Cependant, la plupart des entreprises qui vendent des noms de domaine (qu'on appelle registrar) proposent de gérer elles-mêmes vos enregistrements DNS.</br></br>
                    Le domaine wikipedia.org. est un sous-domaine de .org. Cette délégation est accomplie en indiquant la liste des serveurs DNS associée au sous-domaine dans le domaine de niveau supérieur.</br>
                    Tous les sous-domaines ne sont pas nécessairement délégués. Les délégations créent des zones, c'est-à-dire des ensembles de domaines et leurs sous-domaines non délégués qui sont configurés sur un serveur déterminé. Les zones sont souvent confondues avec les domaines.</br></br>
                    Nous savons donc que le DNS est organisé sous forme d'une grosse arborescence, et que chaque partie de l'arborescence peut être gérée par la personne qui la possède.</br></br>
                    Mais comment fait-on pour savoir qui possède telle où telle partie et où sont stockées les informations que l'on recherche ?</br></br></br>
                    La résolution</br></br>
                    Les hôtes n'ont qu'une connaissance limitée du système des noms de domaine. Quand ils doivent résoudre un nom, ils s'adressent à un ou plusieurs serveurs de noms dits récursifs (ou résolveur) ou dans les caches, comme ceux des navigateurs ou bien ceux des résolveurs eux mêmes.</br></br>
                    Il y a deux types de serveurs DNS: les résolveurs et les serveurs faisant autorité
                </p>
                <p style="margin-top: 20px;" id="FAI">
                    Ces serveurs vont parcourir la hiérarchie DNS et faire suivre la requête à un ou plusieurs autres serveurs de noms pour fournir une réponse. Les adresses IP de ces serveurs récursifs sont souvent obtenues via DHCP ou encore configurés en dur sur la machine hôte. Les fournisseurs d'accès à Internet (FAI) mettent à disposition de leurs clients ces serveurs récursifs. Il existe également des serveurs récursifs publics comme ceux de Cloudflare, Yandex.DNS, Google Public DNS, OpenNIC ou FDN.</br></br>
                    Reprenons, vous êtes connectés à votre réseau, votre serveur DHCP vous a donné une adresse IP, un masque de sous-réseau et probablement une passerelle par défaut, ainsi qu'un serveur DNS.
                    Imaginez que vous entrez www.jaynerro.com dans votre navigateur. Lorsque vous entrez ce nom, votre machine doit commencer par le résoudre en une adresse IP.
                    Vous allez donc demander une résolution au serveur DNS que vous avez reçu par le DHCP. Celui-ci a deux moyens pour vous fournir la réponse :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>il connaît lui-même la réponse ;</li>
                    <li>il doit la demander à un autre serveur, car il ne la connaît pas.</li>
                </ul>
                <p style="margin-top: 30px;">
                    La plupart du temps, votre serveur DNS est bien peu savant et demande à un autre serveur de lui donner la réponse. En effet, chaque serveur DNS étant responsable d'un domaine ou d'un petit nombre de domaines, la résolution consiste à aller chercher la bonne information sur le bon serveur.</br>
                    Nous voulons donc joindre le site www.jaynerro.com et voilà ce que va faire mon serveur DNS.
                    Tout d'abord, il est évident que cette information ne se trouve pas sur notre serveur, car ce n'est pas lui qui est en charge de jaynerro.com.
                    Pour obtenir cette résolution, notre serveur va procéder de façon rigoureuse et commencer par là où il a le plus de chance d'obtenir l'information, c'est-à-dire au point de départ de notre arborescence.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Il va demander aux serveurs racine l'adresse IP de www.jaynerro.com. Mais comme les serveurs racine ne sont pas responsables de ce domaine, ils vont le rediriger vers un autre serveur qui peut lui donner une information et qui dépend de la racine, le serveur DNS de com.</li>
                    <li>Il demande ensuite au serveur DNS de com l'adresse IP de www.jaynerro.com. Mais comme auparavant, le serveur com renvoie l'adresse IP du serveur DNS qui dépend de lui, le serveur DNS de jaynerro.com.</li>
                    <li>Enfin, il demande au serveur DNS de jaynerro.com l'adresse IP de www.jaynerro.com et là, ça marche : le serveur de jaynerro.com connaît l'adresse IP correspondante et peut la renvoyer.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Maintenant, vous avez l'adresse IP de www.jaynerro.com !</br></br>
                    On dit qu'un serveur fournissant la résolution d'un nom de domaine sans avoir eu à demander l'information à quelqu'un d'autre fait autorité. Les serveurs DNS utilisent un système de cache pour ne pas avoir à redemander une information de façon répétitive, mais ils ne font pas autorité pour autant, car l'information stockée en cache peut ne plus être valide après un certain temps.</br></br>
                    Les serveurs récursifs fournissent des réponses qui ne sont pas nécessairement à jour, à cause du cache mis en place. On parle alors de réponse ne faisant pas autorité (non-authoritative answer).</br></br>
                    Existe-t-il aussi un protocole pour convertir une adresse IP en nom de domaine ?
                    Non, c'est inutile. Le DNS sait faire cela, on parle alors de reverse DNS et de résolution inverse.</br></br>
                    Pour trouver le nom de domaine associé à une adresse IP, on utilise un principe semblable. Dans un nom de domaine, la partie la plus générale est à droite : org dans fr.wikipedia.org, le mécanisme de résolution parcourt donc le nom de domaine de droite à gauche. Dans une adresse IP V4, c'est le contraire : 213 est la partie la plus générale de 213.228.0.42. Pour conserver une logique cohérente, on inverse l'ordre des quatre termes de l'adresse et on la concatène au pseudo domaine in-addr.arpa. Ainsi, par exemple, pour trouver le nom de domaine de l'adresse IP 91.198.174.2, on résout 2.174.198.91.in-addr.arpa.</br></br>
                    La résolution inverse est importante dans le cadre de la réalisation de diagnostics réseaux car c'est elle qui permet de rendre les résultats de la commande traceroute humainement exploitables.</br></br>
                    Une adresse IP peut être associée à différents noms de domaine via l'enregistrement de plusieurs entrées PTR dans le sous-domaine .arpa consacré à cette adresse (in-addr.arpa. pour IPv4 et ip6.arpa. pour IPv6). L'utilisation d'enregistrements PTR multiples pour une même adresse IP est éventuellement présente dans le cadre de l'hébergement virtuel de multiples domaines web derrière la même adresse IP mais n'est pas recommandée dans la mesure où le nombre des champs PTR à renvoyer peut faire dépasser à la réponse la taille des paquets UDP de réponse et entraîner l'utilisation du protocole TCP (plus coûteux en ressources) pour envoyer la réponse à la requête DNS.
                </p>
                <p style="margin-top: 30px;">
                    En plus des adresses IP, des informations complémentaires peuvent être associées aux noms de domaines comme des enregistrements dans le contexte de la lutte contre le spam (SPF), RRSIG pour la sécurité des informations du DNS (DNSSEC) ou NAPTR pour associer des numéros de téléphone à des adresses e-mail (ENUM).
                </p>
                <p style="margin-top: 50px;">
                    La gestion internationale des noms de domaine</br></br>
                    Même si le système DNS n'est pas indispensable au fonctionnement d'Internet, il en est un élément incontournable.
                    Le système de noms de domaine est géré par un organisme américain appelé l'ICANN (Internet Corporation for Assigned Names and Numbers). Celui-ci dépend directement du Département du Commerce des États-Unis. L'ICANN est responsable de la gestion des 13 serveurs DNS qui gèrent la racine du DNS. Ces 13 serveurs connaissent les adresses IP des serveurs DNS gérant les TLD (les .fr, .com; org, etc.)</br></br>
                    Il n'y a vraiment que 13 serveurs racine ?</br></br>
                    Oui et non.</br></br>
                    En fait, après plusieurs attaques sur les serveurs racine, on s'est rendu compte de la faiblesse de n'avoir que 13 serveurs et de la menace que cela pouvait représenter pour le fonctionnement d'Internet.
                    On a donc mis en place un système qui duplique les 13 serveurs en différents endroits d'Internet. Il y a donc réellement aujourd'hui plusieurs centaines de serveurs racine qui dupliquent les informations des 13 serveurs d'origine.</br></br>
                    Le mécanisme qui permet cette duplication de serveurs, et notamment d'adresses IP, s'appelle l'anycast, mais il fait appel à des notions réseau très avancées que nous n'exposerons pas ici.</br></br>
                    C'est l'ICANN qui autorise la création d'une nouvelle extension, comme le .xxx ou l'utilisation de caractères non-latins (arabes, chinois, japonais, etc.).</br>
                    L'ICANN délègue ensuite les domaines de premier niveau à divers organismes. Pour l'Europe, c'est le RIPE (Réseaux IP Européens) qui délègue lui-même à L'AFNIC (Association Française pour le Nommage Internet en Coopération) qui est responsable du domaine .fr (ainsi que des extensions correspondantes à la France d'outre-mer) ; pour le domaine .com, c'est VeriSign qui s'en occupe. Les labels inférieurs correspondent généralement à des sites ou à des entreprises, et la gestion du nom de domaine leur revient.
                </p>
                <p style="margin-top: 50px;">
                    Configuration de Bind</br></br>
                    Maintenant que nous nous sommes familiarisés avec les noms de domaine et le fonctionnement des DNS, nous allons configurer notre premier nom de domaine. Nous utiliserons le serveur de noms de domaine le plus vieux et le plus utilisé au monde : BIND.</br></br>
                    Il existe des alternatives à BIND, comme DJBdns ou MaraDNS, qui sont souvent réputés plus sécuriés, mais peut-être un peu moins utilisés.</br></br>
                    La configuration de notre nom de domaine se fera sous Debian.</br></br>
                    Préparation</br></br>
                    Présentons d'abord ce que nous allons configurer ici.</br>
                    Première chose, quand vous possédez un domaine, vous devez avoir deux serveurs DNS, un serveur primaire et un serveur secondaire. Ceci est nécessaire pour pouvoir garantir que si l'un tombe en panne, le second permettra toujours d'accéder à vos serveurs.</br>
                    Le domaine que nous allons configurer sera : reseau.fr.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Ce nom de domaine sera géré par deux serveurs dns :
                        <ul>
                            <li>ns1.reseau.fr - 192.168.0.1 sera notre serveur maître ;</li>
                            <li>ns2.reseau.fr - 192.168.0.2 sera notre serveur esclave.</li>
                        </ul>
                    </li>
                    <li>Les adresses email de ce nom de domaine seront gérées par deux serveurs de messagerie :
                        <ul>
                            <li>mx1.reseau.fr - 192.168.0.3 ;</li>
                            <li>mx2.reseau.fr - 192.168.0.4.</li>
                        </ul>
                    </li>
                    <li>Ce nom de domaine possédera deux machines :
                        <ul>
                            <li>tuto.reseau.fr - 192.168.0.5 ;</li>
                            <li>www.reseau.fr - 192.168.0.6.</li>
                        </ul>
                    </li>
                    <li>Il existera aussi une autre machine, blog.reseau.fr, qui sera un alias de www.reseau.fr.</li>
                </ul>
                <p style="margin-top: 30px;" id="MX">
                    Nous ne connaissons pas les serveurs de messagerie (MX pour Mail eXchanger), mais vous devez simplement savoir que pour chaque domaine, il doit y avoir un serveur de messagerie qui permet de recevoir des mails pour les adresses de notre domaine.<br></br>
                    Nous ne connaissons pas non plus les alias. Un alias est une association entre un nom de machine et un autre nom de machine, alors que le DNS a l'habitude de faire la liaison entre un nom de machine et une adresse IP. C'est donc une association particulière du DNS.<br></br>
                    Installation de Bind9
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind'?></code></pre>
                <p style="margin-top: 30px;">
                    Les fichiers de configuration de Bind se trouvent, comme on peut s'y attendre, dans /etc/bind.
                    La configuration se fait en deux temps. Nous devons tout d'abord déclarer à notre serveur quels seront les noms de domaine qu'il va devoir gérer, on appelle ça des zones, et cela se fait dans le fichier named.conf. Ensuite, nous devrons configurer chacune de ces zones, grâce à un fichier de configuration par zones qui se nommera db.nomZone.</br></br>
                    Configuration du serveur master</br></br>
                    Déclaration des zones</br></br>
                    Une zone se déclare de cette façon :</br></br>
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind2'?></code></pre>
                <p style="margin-top: 30px;">
                    Le type indique si vous êtes master ou slave sur la zone, c'est-à-dire si c'est vous qui effectuez les mises à jour (master) ou si vous les recevez d'un autre serveur (slave).
                    File indique le fichier dans lequel sera configurée votre zone.</br>
                    Allow-transfer indique le serveur qui pourra recevoir vos mises à jour. Bien entendu, cette directive n'existe que dans le cas d'un serveur master.</br></br>
                    Vous pouvez vérifier la syntaxe du fichier named.conf grâce à la commandenamed-checkconf /etc/bind/named.conf
                    Celle-ci nous sera de nouveau utile pour tester le format des fichiers de zone eux-mêmes</br></br>
                    Passons maintenant à la configuration de notre zone.</br></br>
                    Configuration de la zone du serveur master</br></br>
                    On édite donc le fichier /etc/bind/db.reseau.fr. Afin d'avoir une configuration "basique", vous pouvez faire une copie de /etc/bind/db.local.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind3'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Dans ce fichier de zone, nous allons indiquer des enregistrements. Il en existe de plusieurs types :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>A (ou address record) : c'est le type le plus courant, il fait correspondre un nom d'hôte à une adresse IPv4 ;</li>
                    <li>AAAA : fait correspondre un nom d'hôte à une adresse IPv6 ;</li>
                    <li id="CNAME">CNAME (canonical name record) : permet de créer un alias pointant sur un autre nom d'hôte ;</li>
                    <li id="NS">NS (name server record) : définit le ou les serveurs DNS du domaine ;</li>
                    <li>MX (mail exchange record) : définit le ou les serveurs de mail du domaine ;</li>
                    <li id="PTR">PTR (pointer record) : fait correspond une IP à un nom d'hôte. Il n'est utilisé que dans le cas d'une zone inverse, que nous verrons plus loin ;</li>
                    <li id="SOA">SOA (Start Of Authority record) : donne les infos de la zone, comme le serveur DNS principal, l'adresse mail de l'administrateur de la zone, le numéro de série de la zone et des durées que nous détaillerons.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Il en existe d'autres mais pas forcément utiles ou intéressants pour l'instant.
                    Voici ce que donnera notre fichier de zone complet :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind4'?></code></pre>
                <p style="margin-top: 30px;">
                    Examinons chacune de ces informations.</br>
                    La première info est un TTL (Time to Live). Quand quelqu'un va interroger votre serveur DNS pour obtenir des informations, ces informations vont être stockées en cache chez cette personne (dans la mémoire de son serveur DNS, pour éviter qu'il vienne nous réinterroger de nombreuses fois s'il a de nouveau besoin d'une information). Ce TTL est la durée pendant laquelle les informations sont conservées en cache. 
                    Ce délai passé, une nouvelle demande devra être faite au serveur. Le TTL est défini ici sur 1 semaine. En fonction de la fréquence de vos mises à jour, vous pouvez décider de baisser cette valeur pour que vos clients aient leurs informations à jour.</br></br>
                    La deuxième info est la variable ORIGIN. Celle-ci est optionnelle. Vous voyez les petits @ plus loin ? Ces @ prennent la valeur de la variable ORIGIN. En l'absence de variable ils prendront la valeur du nom de votre zone défini dans le fichier named.conf (reseau.fr ici).</br>
                    Vient ensuite notre premier enregistrement, c'est un enregistrement de type SOA (Start Of Authority). Le type SOA est suivi de deux informations. La première est le nom du serveur de domaine principal (master) et la seconde est l'adresse mail de l'administrateur du domaine (en remplaçant l'arrobase par un point). Suivent entre parenthèses différentes valeurs.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Le serial peut être comparé à un numéro de version de votre zone. Il doit être incrémenté à chaque modification. Cela indique à votre serveur que votre zone a été mise à jour et qu'il faut envoyer la notification à vos serveurs esclaves. Les best practices recommandent une syntaxe particulière pour le serial de la forme AAAAMMJJXX (où XX est la version du jour en question). Cela vous permet entre autres de savoir la date de la dernière mise à jour de votre zone.</li>
                    <li>Refresh est le temps au bout duquel les enregistrements sont stockés sur le serveur slave. Passer ce délai, le serveur slave demandera une nouvelle mise à jour au serveur master.</li>
                    <li>Retry est le temps qu'attendra le serveur slave dans le cas où le serveur master contacté n'est pas joignable pour faire un nouvel essai.</li>
                    <li>Expire est le temps pendant lequel le serveur slave continuera à essayer de contacter le serveur master.</li>
                    <li>Minimum est la durée minimale du cache ; elle est en général égale à Refresh.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Nous trouvons ensuite les enregistrements, du moins ceux qui nous intéressent !</br></br>
                    Les enregistrements se découpent en 4 parties sur une ligne (parfois 5 pour des enregistrements spécifiques).</br>
                    La première information, c'est l'hôte de votre domaine. Nous avons parlé du @ tout à l'heure qui est remplacé par la valeur de $ORIGIN (le cas échéant par le nom de votre zone). Notez qu'on peut ne rien mettre du tout si on veut parler du domaine entier. Rien, @, ou un nom de machine ou de sous-domaine au choix.</br>
                    Le second, représente la classe. Ici, elle spécifie qu'il s'agit d'un enregistrement concernant Internet. Il existe d'autres valeurs mais elles ne sont pas utilisées, donc on met toujours IN.
                    Le troisième spécifie le type d'enregistrement dont on a détaillé les différents types précédemment.</br>
                    Enfin, le dernier spécifie la valeur de l'enregistrement dépendant du type. Un type A attendra une adresse IP, un type PTR attendra un nom d'hôte, etc.
                    On trouve parfois, juste avant cette dernière valeur, un nombre qui indique le "poids" d'un enregistrement. On verra plus loin dans quel cas c'est utile.</br></br>
                    On commence généralement par les enregistrements des serveurs gérant notre domaine et les services associés (le mail en l'occurrence). Dans notre cas il s'agit des types NS et MX. On utilise l'@ parce que ces enregistrements ne déterminent pas un hôte en particulier, mais bien le domaine entier.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind5'?></code></pre>
                <p style="margin-top: 30px;">
                    Cette ligne se traduit donc par : "ns1.reseau.fr est un serveur de nom de domaine de reseau.fr"</br></br>
                    J'attire votre attention sur le "." situé à la fin de ns1.reseau.fr, car celui-ci est extrêmement important. Cette valeur doit être un FQDN et le FQDN contient le "." représentant la racine du DNS. Si vous aviez écrit ns1.reseau.fr sans le ".", votre serveur aurait automatiquement rajouté à la fin le FQDN de votre zone, ce qui aurait donné ns1.reseau.fr.reseau.fr. ; ce qui n'a plus du tout la même valeur !</br></br>
                    Ceci étant, réécrire à chaque fois le FQDN c'est un peu contraignant. Et comme on sait que, ne pas finir sa ligne par un "." rajoute au FQDN de votre zone, on peut se permettre de n'écrire que "ns1". Ainsi, votre serveur rajoutera "reseau.fr." et on aura le FQDN que l'on cherchait à obtenir.</br>
                    Voyez la deuxième ligne qui utilise cette syntaxe raccourcie.
                    Les enregistrements MX utilisent la même syntaxe que pour les NS et indiquent l'adresse IP d'un serveur de messagerie, à cela près que nous avons rajouté un chiffre devant "mx1". Nous avons dit tout à l'heure que ce chiffre déterminait le "poids" d'un enregistrement, on parle aussi de priorité. Nous avons deux serveurs MX : mx1 et mx2 ; cette valeur va permettre de déterminer lequel des deux doit être utilisé en priorité. Plus elle est basse, plus le serveur est prioritaire.</br></br>
                    Mais nous avons aussi deux serveurs NS ! Comment se passe cette priorité, étant donné qu'il n'y a pas de valeur pour les départager ?</br></br>
                    Dans ce cas, c'est chacun son tour. Sur une machine Linux, essayez plusieurs fois de suite cette commande :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind6'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous verrez que les réponses que vous recevez ne sont jamais dans le même ordre. Cela s'appelle du Round-Robin, c'est une méthode qui permet d'équilibrer la charge entre les deux serveurs pour ne pas les surcharger, car un serveur sera autant consulté que les autres serveurs du même type.</br></br>
                    Très bien, maintenant on sait que les serveurs mail de notre domaine sont mx1.reseau.fr et mx2.reseau.fr. Cependant, on ne sait toujours pas leurs adresses IP alors que c'est quand même le but d'un serveur DNS, non ?</br></br>
                    D'ailleurs, vous voyez qu'ensuite nous définissons l'adresse IP de mx1 (sans . à la fin, donc mx1.reseau.fr ! ) avec un enregistrement de type A.</br>
                    C'est ce qu'on appelle un Glue Record. On définit une première fois le nom d'hôte du serveur NS, puis on définit l'adresse IP de cet hôte. On doit faire cela, car un enregistrement NS associe un nom de serveur au nom du domaine. Il faut donc ajouter un enregistrement A pour le nom de ce serveur.</br></br>
                    On retrouve ensuite les enregistrements les plus courants, ceux de type A (et AAAA quand on a de l'IPv6). En effet, le rôle principal du DNS est de faire correspondre un nom d'hôte avec son adresse IP, et c'est ce que fait le type A.</br></br>
                    La syntaxe est relativement simple comme vous pouvez le voir :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind7'?></code></pre>
                <p style="margin-top: 30px;">
                    Comme pour les autres enregistrements, "tuto" ou "tuto.reseau.fr." revient au même. N'oubliez pas le point si vous optez pour le FQDN.</br></br>
                    Le type CNAME est aussi simple à comprendre. On fait correspondre un nom d'hôte à un autre nom d'hôte. Bien sûr, si "blog" pointe sur "www", l'enregistrement www doit exister.</br></br>
                    Résolution inverse CIDR</br>
                    Les délégations des zones inverses se font sur une frontière d'octet, ce qui fonctionne quand les blocs d'adresses sont distribués de façon classful mais pose des problèmes quand les blocs assignés sont de taille quelconque.
                    Par exemple, si deux clients A et B disposent chacun des blocs 192.168.0.0/25 et 192.168.0.128/25, il n'est pas possible de déléguer 0.168.192.in-addr.arpa. au premier pour qu'il puisse définir les PTR correspondant à ses hôtes, car cela empêcherait le second de faire de même.
                    La RFC 2317 a défini une approche pour traiter ce problème, elle consiste à faire usage de domaines intermédiaires et de CNAME.</br></br>
                    Je le répète encore une fois : si vous choisissez le FQDN, n'oubliez pas le point, c'est une des premières causes d'erreurs dans les configurations DNS.</br></br>
                    Voilà, notre zone est maintenant configurée sur notre serveur master. Vous devez redémarrer BIND pour que les changements soient pris en compte :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind8'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous pouvez vérifier la syntaxe du fichier de zone grâce à la commande suivante :named-checkzone reseau.fr /etc/bind/db.reseau.fr.</br></br>
                    Configuration du serveur slave</br></br>
                    Nous avons prévu deux serveurs dans notre architecture . Celui que nous venons de configurer est le master ; celui que nous allons faire sera le slave. Les modifications se font sur le master, et celui-ci enverra des notifications aux slaves (il peut y en avoir plusieurs) pour que leurs zones soient mises à jour.</br>
                    La configuration du serveur slave est donc relativement simple, tout se passe dans le named.conf. Il n'y a pas de fichier de zone à configurer étant donné que celui-ci sera reçu du master.</br></br>
                    Si vous souhaitez tester complètement la mise en place du serveur DNS avec master et slave, vous pouvez tout à fait mettre en place le serveur slave sur une autre de vos machines virtuelles.</br></br>
                    On commence par installer Bind comme pour le master et on édite /etc/bind/named.conf.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind9'?></code></pre>
                <p style="margin-top: 30px;">
                    Et c'est tout !</br>
                    La directive masters indique l'adresse IP du serveur master duquel nous allons recevoir les mises à jour de notre zone.</br></br>
                    Résolution inverse</br></br>
                    Pour l'instant, nous avons vu le protocole DNS comme un moyen de résoudre un nom d'hôte en une adresse IP. Nous avons parlé des enregistrements de type PTR et vous savez donc que DNS permet aussi de faire le travail inverse. C'est une résolution inverse.
                    Votre serveur DNS se doit de pouvoir résoudre une adresse IP en un nom d'hôte. C'est ce que nous allons faire ici.</br></br>
                    Retournons dans notre fichier named.conf afin d'ajouter cette zone inverse. Nous allons déclarer la zone inverse de notre adressage IP, ici c'est 192.168.0.0/24.
                    Alors qu'une zone "normale" se déclare de façon plutôt logique, une zone inverse doit respecter une certaine forme concernant le nom de la zone :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind10'?></code></pre>
                <p style="margin-top: 30px;">
                    Voilà pour la déclaration. Il faut juste faire attention au nommage de la zone, la partie réseau de l'adresse IP à l'envers, puis ".in-addr.arpa".</br>
                    On crée ensuite le fichier de zone.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind11'?></code></pre>
                <p style="margin-top: 30px;">
                    Ce n'est pas très compliqué. C'est l'inverse d'une zone "normale". Ça, je pense que vous l'avez compris maintenant.</br>
                    Les points auxquels il faut faire attention :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>une zone inverse ne contient que des enregistrements de type NS ou PTR ;</li>
                    <li>dans notre zone "normale", blog redirigeait vers www, mais là une adresse IP ne peut pointer que vers un seul hôte ;</li>
                    <li>la variable ORIGIN a changé ! Il faut donc penser à utiliser le FQDN de nos hôtes à chaque fois.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Vérification</br></br>
                    On va quand même vérifier le fonctionnement de notre zone maintenant.</br>
                    Commencez déjà par redémarrer votre serveur de nom pour prendre en compte les changements de configuration : # /etc/init.d/bind9 restart</br>
                    Il existe plusieurs commandes pour faire des interrogations DNS. La commande la plus utilisée est host mais dig fournit plus d'informations et permet un diagnostic plus précis en cas de problème. Vérifiez d'abord le serveur DNS utilisé par votre machine. Comme cette machine est elle-même un serveur DNS, elle va devoir s'interroger elle-même.</br></br>
                    Le programme qui fait toutes les résolutions DNS pour votre machine s'appelle le resolver. Ainsi, chaque programme qui a besoin de faire une résolution DNS s'adresse au resolver.</br>
                    Son fichier de configuration se trouve dans /etc/resolv.conf qui doit au moins contenir l'adresse d'un serveur DNS à interroger :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind12'?></code></pre>
                <p style="margin-top: 30px;">
                    Oui, votre serveur va s'interroger lui-même. Vous pouvez spécifier d'autres serveurs, un par nameserver. Ce fichier peut aussi contenir des informations sur votre domaine ou le domaine de recherche.</br></br>
                    On peut maintenant commencer nos tests :</br></br>
                    Nous allons donc utiliser la commande host qui permet de faire une interrogation DNS.</br>
                    Sa syntaxe est la suivante:</br>
                    # host -t type nom_a_chercher IPserveur</br></br>
                    On peut ainsi indiquer le type de la requête (NS, A, MX, CNAME, etc.), le nom à interroger, ainsi que l'adresse IP du serveur que l'on peut préciser.</br></br>
                    Par exemple, si l'on cherche l'adresse des serveurs DNS du domaine reseau.fr :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind13'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Et pour avoir leurs adresses IP :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../../script/bind14'?></code></pre>
                <p style="margin-top: 30px;">
                    Si tout se passe bien, c'est parfait. Dans le cas contraire, penser à vérifier que les syntaxes de vos fichiers de zones sont bonnes, avec "named-checkzone", et que vous avez bien pensé à relancer votre serveur Bind, etc.</br></br>
                    Nous venons de voir que grâce à la commande host (ou dig), il est possible de demander toute information contenue dans vos zones DNS, ou même sur des serveurs situés sur Internet !</br></br></br>
                    Exercice</br></br>
                    Sachant que 8.8.8.8 est un serveur DNS public proposé par Google,
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Trouvez les noms et adresses IP des 13 serveurs racine ;</li>
                    <li>trouvez la ou les adresses IP de www.siteduzero.fr ;</li>
                    <li>trouvez la ou les adresses IP de www.siteduzero.com ;</li>
                    <li>trouvez les adresses IP des serveurs DNS de lalitte.com.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Voici les requêtes à faire pour obtenir les réponses :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li># host -t ns . 8.8.8.8</li>
                    <li>Faire ensuite une requête A pour chacun des serveurs racine :</li>
                    <li># host -t a www.siteduzero.fr 8.8.8.8</li>
                    <li># host -t a www.siteduzero.com 8.8.8.8</li>
                    <li># host -t ns lalitte.com 8.8.8.8</li>
                </ul>
                <p style="margin-top: 50px;">
                    Sécurité du DNS</br>
                    Le protocole DNS a été conçu avec un souci minimum de la sécurité. Plusieurs failles de sécurité du protocole DNS ont été identifiées depuis. Les principales failles du DNS ont été décrites dans le RFC 3833 publié en août 2004.</br></br>
                    Interception des paquets</br>
                    Une des failles mises en avant est la possibilité d'intercepter les paquets transmis. Les serveurs DNS communiquent au moyen de paquets uniques et non signés. Ces deux spécificités rendent l'interception très aisée. L'interception peut se concrétiser de différentes manières, notamment via une attaque de type « man in the middle », de l'écoute des données transférées et de l'envoi de réponse falsifiée (voir paragraphe ci-dessous).</br></br>
                    Fabrication d'une réponse</br>
                    Les paquets des serveurs DNS étant faiblement sécurisés, authentifiés par un numéro de requête, il est possible de fabriquer de faux paquets. Par exemple, un utilisateur qui souhaite accéder au site http://mabanque.example.com fait une demande au site DNS. Il suffit, à ce moment, qu'un pirate informatique réponde à la requête de l'utilisateur avant le serveur DNS pour que l'utilisateur se retrouve sur un site d'hameçonnage.</br></br>
                    Corruption des données</br>
                    La trahison par un serveur, ou corruption de données, est, techniquement, identique à une interception des paquets. La seule différence venant du fait que l'utilisateur envoie volontairement sa requête au serveur. Cette situation peut arriver lorsque, par exemple, l'opérateur du serveur DNS souhaite mettre en avant un partenaire commercial.</br></br>
                    Empoisonnement du cache DNS</br>
                    L'empoisonnement du cache DNS ou pollution de cache DNS (en anglais, DNS cache poisoning) est une technique permettant de leurrer les serveurs DNS afin de leur faire croire qu'ils reçoivent une requête valide tandis qu'elle est frauduleuse.</br></br>
                    Déni de service</br>
                    Une attaque par déni de service (ou attaque par saturation; en anglais, Denial of Service attack ou DoS attack) est une attaque sur un serveur informatique qui résulte en l'incapacité pour le serveur de répondre aux requêtes de ses clients.</br></br>
                    DNSSEC</br>
                    Pour contrer ces vulnérabilités (corruption des données, empoisonnement de cache DNS, etc), le protocole DNSSEC (RFC 4033, RFC 4034, RFC 4035) a été développé. Il utilise les principes de cryptographie asymétrique et de signature numérique pour garantir l'intégrité des données, ainsi qu'une preuve de non-existence si l'enregistrement demandé n'existe pas. La zone racine du DNS a été signée le 15 juillet 2010, et le déploiement de DNSSEC sur les domaines de premier niveau (TLD : Top Level Domain) continue, une liste des domaines couverts étant disponible.</br></br>
                    Chiffrement</br>
                    Depuis 2015, l'IETF travaille à la sécurité du canal de communication du DNS (là où DNSSEC protège les données). Cela a débouché sur la publication de plusieurs RFC permettant l'utilisation de TLS afin de chiffrer la communication entre les clients DNS et les résolveurs. Il s'agit principalement de : DNS sur TLS (RFC 7858, utilisant le port 853) et DNS sur HTTPS (RFC 8484, requête DNS encapsulée dans une requête HTTP, et traitée par un serveur Web).</br></br>
                    Il n'y a pas, en 2018, de possibilités de chiffrer – via TLS – les communications entre un résolveur et un serveur faisant autorité.</br></br>
                    Détails du protocole</br>
                    DNS utilise en général UDP et le port 53. La taille maximale des paquets utilisée est de 512 octets. Si une réponse dépasse cette taille, la norme prévoit que la requête doit être renvoyée sur le port TCP 53. Ce cas est cependant rare et évité, et les firewalls bloquent souvent le port TCP 53.</br></br>
                    L'extension EDNS0 (RFC 2671) permet d'utiliser une taille de paquets plus élevée, sa prise en charge est recommandée pour IPv6 comme pour DNSSEC.</br></br>
                    La norme prévoit qu'il existe une classe associée aux requêtes. Les classes IN (Internet), CH (Chaos) et HS (Hesiod) sont définies, seule la classe IN étant réellement utilisée en pratique. La classe chaos est utilisée par BIND pour révéler le numéro de version.</br></br></br>
                    Exemples de consultation DNS</br>
                    Pour vérifier l'association entre un nom et une adresse IP, plusieurs commandes sont disponibles suivant les systèmes d'exploitation utilisés.</br>
                    Par exemple sur Windows la commande nslookup est disponible via l'invite de commande ou encore dig sur les systèmes compatibles avec UNIX. </br>
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

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Domain_Name_System" target="_blank">Wikipedia - DNS</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>