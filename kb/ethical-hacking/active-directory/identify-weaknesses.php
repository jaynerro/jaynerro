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
    <link rel="stylesheet" href="../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../static/vendor/fontawesome/all.min.css" />
    <link rel="stylesheet" href="../../../static/css/tree.css">
    
    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../static/css/prism.css"/>
    
    <?php // Titre de l'onget de la page ?>
    <title>Active Directory - Identifiez les faiblesses et les objectifs d’attaque</title>
    <link rel="icon" type="image/png" href="../../../images/jaynerro-icon.png">

  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('../../../header.php'); ?>
    
    <div class="container" style="margin-top: 30px;">
    <?php // Mise en place d'un fil d'Arianne ?>
        <div class="row justify-content-center">
            <div class="col">
                <div class="breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Ethical Hacking</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Active Directory</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Identifiez les faiblesses et les objectifs d’attaque</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Identifiez les faiblesses et les objectifs d’attaque
                </h1>
                <img src="../../../images/ad.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 50px;"/>
                <ul id="nav-tree">
                    <li id="liSummary" style="margin-top: 20px;">
                        <a><b>Sommaire</b></a>
                        <ul>
                            <a href="#I" style="margin-top: 5px; margin-left: 20px;">I - Réalisez votre plan d’attaque du système d’information</a>
                                <a href="#I1" style="margin-top: 10px; margin-left: 40px;">1 - Organisez votre prise de notes</a>
                                <a href="#I2" style="margin-top: 10px; margin-left: 40px;">2 - Appuyez-vous sur le cycle de test d’intrusion</a>
                            <a href="#II" style="margin-top: 15px; margin-left: 20px;">II - Identifiez les serveurs et postes vulnérables</a>
                                <a href="#II1" style="margin-top: 10px; margin-left: 40px;">1 - Identifiez les machines de l’environnement de travail</a>
                                    <a href="#II1A" style="margin-top: 10px; margin-left: 60px;">A - Nmap</a>
                                    <a href="#II1B" style="margin-top: 10px; margin-left: 60px;">B - NBTscan</a>
                                <a href="#II2" style="margin-top: 10px; margin-left: 40px;">2 - Énumérez les vulnérabilités</a>
                            <a href="#III" style="margin-top: 15px; margin-left: 20px;">III - Identifiez les points d’entrée</a>
                                <a href="#III1" style="margin-top: 10px; margin-left: 40px;">1 - Identifiez le domaine Active Directory</a>
                                <a href="#III2" style="margin-top: 10px; margin-left: 40px;">2 - Découvrez les serveurs clés</a>
                                <a href="#III3" style="margin-top: 10px; margin-left: 40px;">3 - Découvrez les serveurs d’intérêt</a>
                                <a href="#III4" style="margin-top: 10px; margin-left: 40px;">4 - Cartographiez les partages réseau</a>
                            <a href="#IV" style="margin-top: 15px; margin-left: 20px;">IV - Identifiez les faiblesses d’Active Directory</a>
                                <a href="#IV1" style="margin-top: 10px; margin-left: 40px;">1 - Identifiez la politique de mot de passe</a>
                                <a href="#IV2" style="margin-top: 10px; margin-left: 40px;">2 - Cartographiez l’Active Directory</a>
                        </ul>
                    </li>
                </ul>
                <div id="I">
                    <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                        <b>I - Réalisez votre plan d’attaque du système d’information</b>
                    </p>
                </div>
                <div id="I1">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        1 - Organisez votre prise de notes
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Pour attaquer un environnement Active Directory, vous aurez très probablement besoin de récolter les informations suivantes :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>
                        Noms de machines :
                        <ul>
                            <li>machines d’intérêt ;</li>
                            <li>adresses (ou plages) IP ;</li>
                            <li>
                                services ouverts :
                                <ul>
                                    <li>versions de services.</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li style="margin-top: 15px;">
                        Noms d'utilisateurs :
                        <ul>
                            <li>privilèges intéressants.</li>
                        </ul>
                    </li>
                    <li style="margin-top: 15px;">
                        Configurations spécifiques :
                        <ul>
                            <li>Active Directory ;</li>
                            <li>autre.</li>
                        </ul>
                    </li>
                </ul>
                <p style="margin-top: 30px;">
                    Cette liste n’est pas exhaustive, mais si déjà vous avez préparé un document avec ces quelques points, vous verrez que ça vous aidera grandement. Vous remplirez cette liste au fur et à mesure de votre attaque.</br>
                    Pour améliorer encore vos notes, vous pouvez les ranger dans des catégories correspondant aux différentes étapes de vos tests. Ces étapes s’apparentent à votre kill chain, ou chaîne d’attaque. C’est votre méthodologie d’intrusion. Ainsi, vous pourrez avoir les catégories suivantes :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>Reconnaissance initiale.</li>
                    <li>Première compromission.</li>
                    <li>Mouvement latéral.</li>
                    <li>Élévation de privilèges.</li>
                    <li>Persistance.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Avoir les bons outils permet d’être bien plus efficace. Il existe beaucoup de logiciels facilitant la prise de notes (Evernote, Microsoft OneNote, Cherrytree, TreeNote et j’en passe), mais mon favori est l’outil Joplin. C’est un outil gratuit, open source, qui fonctionne sur tout type de plateforme (Linux, Windows, Mac, Android, iOS).
                </p>
                <div id="I2">
                    <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                        2 - Appuyez-vous sur le cycle de test d’intrusion
                    </p>
                </div>
                <img src="../../../images/eh-ad.png" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Méthodologie d’attaque
                </p>
                <div id="II">
                    <p style="margin-top: 70px; margin-left: 10px; justify-content: start">
                        <b>II - Identifiez les serveurs et postes vulnérables</b>
                    </p>
                </div>
                <div id="II1">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        1 - Identifiez les machines de l’environnement de travail
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Afin d’identifier les machines vulnérables, il faut d’abord les découvrir sur le réseau. Le but est de chercher où se trouvent les machines. Même si le client sait où se trouvent la plupart de ses équipements, deux points restent intéressants :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>il est important que vous sachiez les découvrir par vous-même, quelle que soit la taille du réseau ;</li>
                    <li>il arrive que des serveurs soient allumés sans que le client le sache. Ce sont souvent ces machines qui présentent un intérêt pour l’attaque, puisqu'elles ne sont pas ou peu surveillées.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Pour les débusquer, la technique principale est le scan réseau.</br></br>
                    On se place dans un contexte où vous ne vous souciez pas des problèmes de détection. Gardez toujours en tête que des scans peuvent être bruyants sur le réseau, et peuvent être perçus comme un comportement malveillant par d’autres équipes. Dans une démarche d’amélioration de la sécurité de votre environnement, faites en sorte que toutes les équipes réseau et systèmes soient prévenues avant de faire vos tests.
                </p>
                <div id="II1A">
                    <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                        A - Nmap
                    </p>
                </div>
                <p style="margin-top: 30px; justify-content: start">
                    Scan ICMP
                </p>
                <p style="margin-top: 20px; justify-content: start">
                    Le scan ICMP, ou Ping-Scan permet d’envoyer une requête ICMP (un PING) à toutes les adresses IP que vous souhaitez découvrir, et si la machine répond, c’est qu’elle est allumée. Pour l’utiliser avec nmap, le paramètre -sP  doit être fourni, puis les adresses à scanner.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad1'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Scan TCP
                </p>
                <p style="margin-top: 20px; justify-content: start">
                    Le scan le plus commun est le scan TCP. Le principe de ce scan est d’envoyer une demande de connexion TCP SYN aux différentes adresses IP sur différents ports. Si ces cibles répondent avec un SYN/ACK ou un RST/ACK, alors elles sont allumées. En cas d’absence de réponse, vous ne pouvez pas discuter avec cette adresse IP. Soit il n’y a pas de machine, soit elle est éteinte, soit il y a un filtre réseau qui bloque vos paquets.</br></br>
                    Si la réponse est un SYN/ACK, vous savez également que le port que vous avez testé est ouvert, un service est accessible sur celui-ci. C’est très intéressant car vous pourrez tenter d'interagir avec ce service, et peut-être l’exploiter !
                </p>
                <img src="../../../images/eh-ad-2.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Scan TCP
                </p>
                <p style="margin-top: 20px; justify-content: start">
                    Ce type de scan est celui par défaut dans nmap. Ainsi, pour l’utiliser, il vous suffit de lancer la commande suivante :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad2'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Scan SYN
                </p>
                <p style="margin-top: 20px; justify-content: start">
                    Il permet d’aller plus vite que le scan TCP. Dans le scan TCP, dès qu’un port est ouvert, l’outil ferme correctement la connexion en répondant avec le dernier ACK. Le scan SYN ne le fait pas. Il ne fait qu’envoyer un SYN, analyse la réponse comme précédemment, et passe à l’IP suivante. Ça permet d’économiser un peu de temps, et donc de scanner plus vite !</br></br>
                    Il faut des droits administrateur pour effectuer un scan SYN. En effet, c’est un scan qui n’utilise pas les paramètres réseau par défaut, puisque les connexions TCP ne sont pas fermées.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad3'?></code></pre>
                <p style="margin-top: 20px; justify-content: start">
                    Faites attention avec les scans SYN, car vous ouvrez des connexions, mais vous ne les fermez pas. Certains systèmes risquent alors d’atteindre rapidement le nombre de connexions ouvertes autorisées, et ne répondront plus, ni à vous, ni aux utilisateurs. La plupart des systèmes récents savent gérer ce type de scan, mais de vieux systèmes peuvent être mis à mal. Un scan TCP sera alors plus adapté.
                </p>
                <div id="II1B">
                    <p style="margin-top: 40px; margin-left: 50px; justify-content: start">
                        B - NBTscan
                    </p>
                </div>
                <p style="margin-top: 25px; justify-content: start">
                    Scan NetBIOS
                </p>
                <p style="margin-top: 20px; justify-content: start">
                    Plus limité que les scans précédents, mais extrêmement rapide, il repose sur le protocole NetBIOS, propre à Windows, qui permet de faire un lien entre adresse IP et nom de machine.
                    L’outil NBTscan, lui aussi gratuit et open source, permet d’effectuer ce type de scan. Utile lorsque l'on doit scanner des très grandes plages réseau, et vraiment efficace.
                    Pour l’utiliser, rien de plus simple, vous n’avez qu’à lui fournir les adresses à scanner.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad4'?></code></pre>
                <p style="margin-top: 20px; justify-content: start">
                    Comme le protocole utilisé est propre à Windows, NBTscan ne découvrira la plupart du temps que des machines Windows. Comme il est extrêmement rapide, cela permet de voir où se trouvent les machines dans un très grand réseau, pour ensuite faire des scans plus complets dans ces sous-réseaux découverts.
                    Une fois que vous avez identifié les machines présentes sur le réseau, une recherche de vulnérabilités peut vous permettre de prendre la main sur l’une d’entre elles.
                </p>
                <div id="II2">
                    <p style="margin-top: 50px; margin-left: 20px; justify-content: start">
                        2 - Énumérez les vulnérabilités
                    </p>
                </div>
                <p style="margin-top: 20px; justify-content: start">
                    Vous savez maintenant quelles machines sont accessibles sur le réseau. L’objectif est d’aller un peu plus loin, et de découvrir les services proposés par ces machines pour peut-être en exploiter, et prendre la main sur quelques hôtes.</br></br>
                    La première étape cruciale est l’énumération de ports.</br></br>
                    Lorsque vous savez qu’une machine vous répond, vous pouvez effectuer un balayage de ports. Vous allez envoyer une requête TCP sur chaque port, et la réponse du serveur vous indiquera s’il y a un service en écoute sur ce port ou non. Avec l’outil nmap, voici comment balayer les ports 21, 22, 80 et 443 sur une adresse spécifique :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad5'?></code></pre>
                <p style="margin-top: 20px; justify-content: start">
                    Généralement, à un port correspond un service. Cependant, il est tout à fait possible que ce ne soit pas le cas. Pour déterminer le service qui tourne derrière chaque port, l’option -sV  de nmap sera d’une grande aide. L’outil tentera même de déterminer la version du service ! 
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad6'?></code></pre>
                <p style="margin-top: 20px; justify-content: start">
                    Chercher des vulnérabilités pour toutes les versions de tous les services peut être assez fastidieux, c'est pourquoi il existe des solutions qui automatisent ce processus. Mais bien comprendre la démarche vous permet de comprendre comment fonctionnent ces outils. Et si un jour vous avez des besoins précis sur une machine, vous n’avez pas besoin de lancer un outil qui va remuer ciel et terre pour récupérer la seule petite information que vous cherchiez.</br></br>
                    Ces solutions automatisées sont les scanners de vulnérabilités. Ils embarquent souvent toutes les étapes dont nous avons parlé. Ils automatisent alors la découverte des hôtes sur le réseau, des services, des versions et des vulnérabilités associées. OpenVAS est un scanner de vulnérabilité gratuit et open source. Dans le monde professionnel, l’outil Nessus est très souvent utilisé (Rapid7 également).
                </p>
                <div id="III">
                    <p style="margin-top: 70px; margin-left: 10px; justify-content: start">
                        <b>III - Identifiez les points d’entrée</b>
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Vous avez maintenant connaissance des machines présentes sur le parc informatique, des services proposés par ces différentes machines, et potentiellement des vulnérabilités que vous pourrez exploiter pour commencer votre phase de compromission. Pour compléter cette reconnaissance, il est primordial de découvrir l’environnement Active Directory.
                </p>
                <div id="III1">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        1 - Identifiez le domaine Active Directory
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Active Directory évolue avec le temps, donc déterminer la version utilisée vous permet de connaître les fonctionnalités et mécanismes de sécurité présents dans la version implémentée dans l’entreprise.</br></br>
                    L’utilitaire ldapsearch permet d’effectuer des requêtes vers un serveur LDAP, et dans votre cas, il permet de demander anonymement à un contrôleur de domaine des informations sur le domaine.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad7'?></code></pre>
                <p style="margin-top: 30px;">
                    Il est possible de fournir l’adresse IP d’un contrôleur de domaine plutôt que le nom de machine dans la ligne de commande.</br></br>
                    Beaucoup d’informations sont retournées par le contrôleur de domaine, notamment le niveau fonctionnel du domaine (domainFunctionality), de la forêt (forestFunctionality) et du contrôleur de domaine (domainControllerFunctionality). Voici la table de correspondance permettant de savoir à quelle version d’Active Directory vous avez affaire.
                </p>
                <img src="../../../images/eh-ad-3.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table de correspondance des niveaux de fonctionnalité
                </p>
                <p style="margin-top: 30px;">
                    La forêt correspond au plus haut niveau logique d’un Active Directory. Par défaut, quand on crée un tout premier domaine, ça crée également une forêt du même nom. Des domaines enfants peuvent ensuite être créés au sein de cette même forêt.</br></br>
                    Vous connaissez également le nom du contrôleur de domaine que vous avez sollicité grâce à l’entrée dnsHostName, DC01 dans cet exemple.</br></br>
                    Enfin, l’entrée rootDomainNamingContext vous indique le nom du domaine racine de la forêt. Il se peut qu’il soit similaire au domaine que vous auditez, ce qui signifie que vous êtes dans le domaine racine. Il y a de grandes chances pour que ce soit alors le seul domaine de la forêt.
                </p>
                <div id="III2">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        2 - Découvrez les serveurs clés
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Toujours dans la phase de découverte d’informations, énumérer les serveurs clés vous sera très utile pour préparer vos attaques. En effet, ces serveurs sont des cibles idéales puisqu’ils contiennent des données sensibles ou confidentielles, et que leur compromission vous permettra de bien avancer dans votre attaque.</br></br>
                    Ainsi, les serveurs que vous allez tenter d’inventorier sont les contrôleurs de domaine, les autorités racine de certification ou encore les serveurs DNS.</br></br>
                    Pour énumérer l’ensemble des contrôleurs de domaine, l’utilitaire nslookup sera d’une grande aide. Vous allez chercher les enregistrements DNS ayant en sous-domaine _kerberos._tcp  qui est propre aux contrôleurs de domaine.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad8'?></code></pre>
                <p style="margin-top: 30px;">
                    Dans votre environnement, il y a un contrôleur de domaine, DC01.</br></br>
                    Si vous n’avez pas connaissance du nom de domaine, vous pouvez effectuer un scan nmap pour découvrir les serveurs avec le port 88 ouvert. Ce port est spécifique à Kerberos, donc aux contrôleurs de domaine.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad9'?></code></pre>
                <p style="margin-top: 30px;">
                    En ce qui concerne les autorités de certification racine, vous pouvez les énumérer avec l’outil Certipy de la manière suivante :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad10'?></code></pre>
                <p style="margin-top: 30px;">
                    Enfin, pour les serveurs DNS, l’utilitaire nslookup peut à nouveau être utilisé. Le nom du domaine est passé en paramètre, et l’outil retournera le nom des serveurs DNS qui font autorité :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad11'?></code></pre>
                <p style="margin-top: 30px;">
                    Ces commandes permettent de répertorier ces serveurs structurant dans un Active Directory. Avoir cette liste permet de faciliter les phases d’exploitation car chercher les noms ou les adresses IP des contrôleurs de domaine à chaque fois qu’une commande doit être passée, c’est très chronophage !
                </p>
                <div id="III3">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        3 - Découvrez les serveurs d’intérêt
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Les serveurs clés sont ceux qui permettent à un environnement Active Directory de fonctionner dans de bonnes conditions. Sur ce socle, il peut y avoir beaucoup d’autres services utilisés par les entreprises. Parmi ces services, certains vous intéressent plus particulièrement.</br></br>
                    Ceux que l’on recherche, une fois compromis, permettent très régulièrement de récolter des informations sensibles, ou de pivoter sur d’autres réseaux ou serveurs du domaine.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Serveurs d’impression</b>
                </p>
                <p style="margin-top: 20px;">
                    Les premiers serveurs d’intérêt sont les serveurs d’impression. D’une part, tout ce qui est imprimé peut être intéressant pour vous, donc si l’imprimante contient un historique des impressions, elle sera une cible de choix. D’autre part, une imprimante est très souvent enregistrée auprès de l’Active Directory afin d’avoir connaissance de l’ensemble des collaborateurs. Si vous la compromettez, vous aurez de grandes chances de découvrir les informations d’authentification de l’imprimante.</br></br>
                    Pour chercher les imprimantes sur le réseau, l’outil nmap peut être utilisé en scannant les ports classiques propres aux imprimantes.</br></br>
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad12'?></code></pre>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Serveurs SCCM</b>
                </p>
                <p style="margin-top: 20px;">
                    SCCM (System Center Configuration Manager) est une solution proposée par Microsoft, qui permet notamment de gérer les applications et mises à jour d’un parc. Parmi ses nombreuses fonctionnalités, SCCM permet de déployer des applications, des mises à jour, des configurations d’applications ou de services, et permet aussi d’avoir un inventaire du parc informatique. Pour que cela soit possible, SCCM doit avoir également une vue dégagée du réseau, et possède souvent des droits privilégiés sur les machines administrées. Si vous arrivez à prendre la main sur un serveur SCCM, vous pourrez découvrir de nouveaux sous-réseaux, et potentiellement compromettre de nouveaux postes.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Serveurs WSUS</b>
                </p>
                <p style="margin-top: 20px;">
                    Les serveurs WSUS (Windows Server Update Services) permettent aux administrateurs de déployer des mises à jour Microsoft sur l’ensemble des machines du parc. De par leur rôle, ces serveurs ont très souvent une visibilité complète sur l’ensemble du réseau. Compromettre un serveur WSUS vous permettra alors de rebondir sur le reste du réseau aisément. 
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Serveurs SCOM</b>
                </p>
                <p style="margin-top: 20px;">          
                    Enfin, les serveurs SCOM (System Center Operations Manager) permettent de surveiller la performance et les événements de systèmes Windows. Ils permettent notamment de superviser un Active Directory, des bases de données MSSQL, ou encore des serveurs Exchange. De la même manière que les solutions précédentes, un serveur SCOM doit avoir une visibilité sur les serveurs supervisés pour parvenir à ses fins. Il peut également avoir des droits privilégiés sur certains d’entre eux. Lorsque vous voyez un serveur SCOM dans un réseau d’entreprise, il peut être ajouté à votre liste de cibles privilégiées.
                </p>
                <div id="III4">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        4 - Cartographiez les partages réseau
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Un autre élément intéressant à cartographier, ce sont les partages réseau. Ils contiennent très souvent des informations extrêmement sensibles pour l’entreprise. C’est très souvent via ces partages que l’ensemble des collaborateurs échangent des documents.</br></br>
                    Vous pouvez y trouver des secrets commerciaux, des informations personnelles, des données précises sur les projets de l’entreprise, ou encore des identifiants d’utilisateurs. Ces données vous seront très utiles pour les phases suivantes de votre plan d’attaque.</br></br>
                    Les partages réseau sous Windows utilisent le protocole SMB pour les échanges de fichiers. Ce service est en écoute sur le port 445. Ainsi, pour trouver les partages sur le réseau, vous pouvez scanner le port 445 sur les différentes machines que vous avez déjà découvertes. L’outil CrackMapExec est un outil open source qui vous permet d'interagir de nombreuses manières avec vos cibles, en utilisant entre autres le protocole SMB. Cet outil permet notamment de faire cette recherche de partages réseau. Il s’utilise de la manière suivante :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad13'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous recevez ainsi la liste des partages réseau ouverts, et vous savez si vous y avez accès en lecture et/ou écriture, grâce à la colonne “Permissions”.
                </p>
                <div id="IV">
                    <p style="margin-top: 70px; margin-left: 10px; justify-content: start">
                        <b>IV - Identifiez les faiblesses d’Active Directory</b>
                    </p>
                </div>
                <div id="IV1">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        1 - Identifiez la politique de mot de passe
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    Une partie des attaques consiste à voler des crédentiels pour les réutiliser sur d’autres postes ou serveurs. Il se peut que ces identifiants aient été modifiés, et que vos tentatives soient infructueuses. Vous devrez être particulièrement vigilant à la politique de mot de passe mise en place dans l’entreprise. En effet, si vous vous trompez de mot de passe pour un compte, il est possible que vous bloquiez ce compte.</br></br>
                    La politique de mot de passe mise en place dans un environnement Active Directory permet plusieurs choses ; notamment :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>bloquer (temporairement ou non) un compte après un nombre de tentatives d’authentification échouées ;</li>
                    <li>imposer une taille et une complexité minimales pour les mots de passe ;</li>
                    <li>définir le temps de validité d’un mot de passe.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Identifier la politique de mot de passe vous permettra alors de passer sous les radars en évitant de bloquer des comptes par inadvertance.</br></br>
                    Pour récupérer la politique de mot de passe par défaut, l’utilitaire Get-ADDefaultDomainPasswordPolicy peut être utilisé dans une console PowerShell.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad14'?></code></pre>
                <p style="margin-top: 30px;">
                    Cette politique de mot de passe impose un mot de passe d’au moins 7 caractères (MinPasswordLength) et une complexité minimale, via le paramètreComplexityEnabled. Dans un intervalle de 30 minutes (LockoutObservationWindow), le compte sera bloqué après 3 tentatives erronées d’authentification (  LockoutThreshold  ). Il sera automatiquement débloqué après 10 minutes (LockoutDuration). Enfin, le mot de passe doit être modifié au moins tous les 90 jours (MaxPasswordAge).
                </p>
                <div id="IV2">
                    <p style="margin-top: 30px; margin-left: 20px; justify-content: start">
                        2 - Cartographiez l’Active Directory
                    </p>
                </div>
                <p style="margin-top: 30px;">
                    La dernière étape que vous devez absolument mener dans la phase de reconnaissance est la cartographie de l’environnement Active Directory lui-même. En effet, il regroupe un très grand nombre d’objets (utilisateurs, ordinateurs, groupes, conteneurs, GPO, etc.), et chacun d’entre eux peut avoir des droits très fins sur les autres.</br></br>
                    Or, par défaut, tous les utilisateurs du domaine peuvent lire l’ensemble des informations présentes dans Active Directory. Ainsi, avec un compte sans privilèges, vous pouvez lister l’ensemble des utilisateurs du domaine, les groupes auxquels ils appartiennent, les droits de ces utilisateurs et groupes, les attributs de toutes ces entités, et bien plus encore. De par cette complexité, il existe beaucoup de données parfois sensibles accessibles à tous, ou de chemins d’attaque cachés.
                </p>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Informations sensibles dans l’AD</b>
                </p>
                <p style="margin-top: 30px;">
                    Chaque objet possède des attributs, et certains d’entre eux peuvent être utilisés par des administrateurs qui pensent être les seuls à y avoir accès.</br></br>
                    La première information importante pour vous, ce sont les noms des objets. Les serveurs sont souvent nommés de manière explicite pour faciliter la vie des administrateurs. Vous retrouverez souvent des noms tels que “SQLSRV”, “FILER01” ou encore “INTRANET”. Grâce à ces informations, vous serez en mesure d’identifier plus facilement les serveurs clés et les machines d’intérêt.</br></br>
                    Par ailleurs, plusieurs attributs sont parfois renseignés et peuvent contenir des informations sensibles, notamment les attributs “description” et “comment” dans lesquels vous trouverez potentiellement des informations plus détaillées sur certains éléments, voire des mots de passe temporaires ou non.</br></br>
                    Lors de mes tests d’intrusion, il m’arrive très fréquemment de trouver un mot de passe de compte de service dans le champ “description” de l’objet. Ainsi, la commande suivante que j’envoie dans une console PowerShell me permet de très rapidement avoir un aperçu des utilisateurs ou ordinateurs ayant un champ de description non vide :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad15'?></code></pre>
                <p style="margin-top: 30px;">
                    L’outil ldapdomaindump sur Linux permet également de récolter des informations sur l’Active Directory, et notamment la liste des utilisateurs et de leur description dans le fichier domain_users.html.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad16'?></code></pre>
                <p style="margin-top: 40px; justify-content: start">
                    <b>Groupes à privilèges</b>
                </p>
                <p style="margin-top: 30px;">
                    Dans un environnement Active Directory, il existe des groupes intégrés qui possèdent des privilèges élevés. Tous les membres de ces groupes héritent alors de ces privilèges. Il est donc important que vous connaissiez ces groupes pour identifier les utilisateurs à cibler dans vos attaques. Les trois principaux sont les suivants :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>administrateurs de l’entreprise : c’est le groupe d’administration le plus élevé. Dans une forêt comportant plusieurs domaines, il sera automatiquement ajouté au groupe d’administration de chaque domaine ;</li>
                    <li>admins du domaine : présent dans chaque domaine, ce groupe est administrateur local de tous les postes du domaine ;</li>
                    <li>administrateurs : ce groupe est également propre à chaque domaine. Il a des droits élevés sur toutes les opérations liées au domaine, notamment sur les contrôleurs de domaine.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Il existe d’autres groupes privilégiés détaillés dans la documentation de Microsoft, que je vous conseille d’aller lire pour en avoir connaissance.</br></br>
                    Un outil qui a beaucoup fait évoluer la sécurité des environnements Active Directory, c’est BloodHound.
                </p>
                <img src="../../../images/eh-ad-4.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    BloodHound est un outil vous permettant de cartographier un environnement Active Directory en le représentant sous forme de graphe. Cette représentation offre alors la puissance de la théorie des graphes pour découvrir des chemins d’attaque qui vous auraient été autrement difficiles, voire impossibles à détecter.</br></br>
                    L’idée de cet outil est d’analyser un environnement Active Directory en énumérant les différents objets de l’environnement (utilisateurs, ordinateurs, groupes, etc.), et en les liant avec des relations. Par exemple, si un utilisateur pdevaux est membre du groupe helpdesk, l’utilisateur sera lié par la relation MemberOf au groupe.
                </p>
                <img src="../../../images/eh-ad-5.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Appartenance à un groupe
                </p>
                <p style="margin-top: 30px;">
                    C’est une visualisation assez claire d’une appartenance, mais l’outil ne s’arrête pas là. Il vous permet de voir également que le groupe helpdesk fait partie du groupe RDPUsers ; donc par héritage, le compte pdevaux en fait également partie.
                </p>
                <img src="../../../images/eh-ad-6.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Héritage des droits
                </p>
                <p style="margin-top: 30px;">
                    Et en fait, ce n’est pas tout : si on demande de lister l’ensemble des groupes auxquels appartient pdevaux, on se rend compte qu’il appartient finalement à beaucoup d’autres groupes !
                </p>
                <img src="../../../images/eh-ad-7.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Ensemble des héritages de groupes
                </p>
                <p style="margin-top: 30px;">
                    Il existe bien d’autres relations entre les objets, notamment des relations permettant de voir qu’un objet est administrateur d’un autre, le droit d’utiliser RDP, le fait qu’un utilisateur est connecté sur une machine, etc.</br></br>
                    Pour collecter les informations sur l’Active Directory, il faut utiliser SharpHound depuis une session authentifiée. Si vous êtes sur une machine du domaine, vous pouvez lancer l’outil sans argument. Si en revanche vous êtes sur votre machine d’attaque, il faudra dans un premier temps vous mettre dans le contexte d’un utilisateur du domaine avec l’utilitaire RunAs.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad17'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Une fois la console ouverte en tant que l’utilisateur, vous pouvez utiliser SharpHound.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/ad18'?></code></pre>
                <p style="margin-top: 30px;">
                    Si vous rencontrez des problèmes lors de l’exécution de SharpHound depuis votre propre machine, veillez à ce que les paramètres réseau de votre machine virtuelle soient correctement configurés. Mettez l’adresse IP d’un contrôleur de domaine comme serveur DNS, et paramétrez le nom de domaine comme suffixe DNS. Vous pouvez également renseigner les paramètres --domain et --domaincontroller lors de l'exécution de SharpHound afin de lui préciser explicitement le nom du domaine que vous souhaitez analyser, ainsi qu'un contrôleur de domaine que vous avez identifié.</br></br>
                    Quand l’outil termine de récolter les informations, il produit un fichier ZIP qu’il est possible d’importer dans BloodHound.</br></br>
                    Il existe d’autres outils permettant de faire une première passe sur un environnement Active Directory, afin d’identifier les éléments que nous avons vus ensemble, et qui parfois vont plus loin. L’outil PingCastle est développé par un Français, et permet de générer des rapports complets sur l’état de santé de votre environnement Active Directory. 
                </p>
                <script src="../../../static/js/prism.js" type="text/javascript"></script>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://openclassrooms.com/fr/courses/7723396-assurez-la-securite-de-votre-active-directory-et-de-vos-domaines-windows" target="_blank">OpenClassrooms - Assurez la sécurité de votre Active Directory et de vos domaines Windows</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Kill_chain_(s%C3%A9curit%C3%A9_informatique)" target="_blank">Wikipedia - Kill chain</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://nmap.org/" target="_blank">Nmap</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://github.com/charlesroelli/nbtscan" target="_blank">NBTscan</a>
                </h6>
                
            </div>
        </div>

        <?php // Creation du Treeview en JS ?>
        <script src="../../../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../static/js/tree.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                window.nav = new NavTree("#nav-tree", {
                searchable: false,
                showEmptyGroups: true,

                groupOpenIconClass: "fas",
                groupOpenIcon: "fa-chevron-down",

                groupCloseIconClass: "fas",
                groupCloseIcon: "fa-chevron-right",

                linkIconClass: "fas",
                linkIcon: "fa-link",

                iconWidth: "25px",

                searchPlaceholderText: "Search",
                });
            });
        </script>

    </body>
    
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>