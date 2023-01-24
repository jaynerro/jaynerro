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
    <title>Active Directory - L’annuaire Active Directory et les domaines</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle Client-Serveur</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Active Directory</p></li>
                            <li class="breadcrumb-item active" aria-current="page">L’annuaire Active Directory et les domaines</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    L’annuaire Active Directory et les domaines
                </h1>
                <img src="../../../../../images/ad.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 50px;"/>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>I - Un annuaire Active Directory, pourquoi ?</b>
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    1 - L'Active Directory
                </p>
                <p style="margin-top: 30px;">
                    L’Active Directory (AD) est un annuaire LDAP (Lightweight Directory Access Protocol) pour les systèmes d’exploitation Windows, le tout étant créé par Microsoft. Cet annuaire contient différents objets, de différents types (utilisateurs, ordinateurs, etc.), l’objectif étant de centraliser deux fonctionnalités essentielles : l’identification et l’authentification au sein d’un système d’information.</br></br>
                    Depuis Windows Server 2000, le service d’annuaire Active Directory ne cesse d’évoluer et de prendre de l’importance au sein des organisations dans lesquelles il est mis en place. De ce fait, il est notamment utilisé pour le déploiement de stratégie de groupe, la distribution des logiciels ou encore l’installation des mises à jour Windows.
                </p>

                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    2 - Les intérêts d’un annuaire
                </p>
                <p style="margin-top: 30px;">
                    L’importante présence de l’Active Directory dans les entreprises suffit pour se convaincre de ses intérêts, mais alors, quels sont ces intérêts ?
                </p>
                <img src="../../../../../images/ad-1.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 50px;"/>
                <ul style="margin-top: 40px; font-size: large; text-align: justify; color: white;">
                    <li>Administration centralisée et simplifiée : la gestion des objets, notamment des comptes utilisateurs et ordinateurs est simplifiée, car tout est centralisé dans l’annuaire Active Directory. De plus, on peut s’appuyer sur cet annuaire pour de nombreuses tâches annexes comme le déploiement de stratégies de groupe sur ces objets.</br></br></li>
                    <li>Unifier l’authentification : un utilisateur authentifié sur une machine, elle-même authentifiée, pourra accéder aux ressources stockées sur d’autres serveurs ou ordinateurs enregistrés dans l’annuaire (à condition d’avoir les autorisations nécessaires). Ainsi, une authentification permettra d’accéder à tout un système d’information par la suite, surtout que de nombreuses applications sont capables de s’appuyer sur l’Active Directory pour l’authentification. Un seul compte peut permettre un accès à tout le système d’information, ce qui est fortement intéressant pour les collaborateurs.</br></br></li>
                    <li>Identifier les objets sur le réseau : chaque objet enregistré dans l’annuaire est unique, ce qui permet d’identifier facilement un objet sur le réseau et de le retrouver ensuite dans l’annuaire.</br></br></li>
                    <li>Référencer les utilisateurs et les ordinateurs : l’annuaire s’apparente à une énorme base de données qui référence les utilisateurs, les groupes et les ordinateurs d’une entreprise. On s’appuie sur cette base de données pour réaliser de nombreuses opérations : authentification, identification, stratégie de groupe, déploiement de logiciels, etc.</li>
                </ul>      
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    3 - La structure de l’Active Directory
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Les classes et les attributs
                </p>
                <p style="margin-top: 30px;">
                    Au sein de l’annuaire Active Directory, il y a différents types d’objets, comme par exemple les utilisateurs, les ordinateurs, les serveurs, les unités d’organisation ou encore les groupes. En fait, ces objets correspondent à des classes, c’est-à-dire des objets disposant des mêmes attributs.</br></br>
                    De ce fait, un objet ordinateur sera une instance d’un objet de la classe « Ordinateur » avec des valeurs spécifiques à l’objet concerné.</br></br>
                    Certains objets peuvent être des containers d’autres objets, ainsi, les groupes permettront de contenir plusieurs objets de types utilisateurs afin de les regrouper et de simplifier l’administration. Par ailleurs, les unités d’organisation sont des containers d’objets afin de faciliter l’organisation de l’annuaire et permettre une organisation avec plusieurs niveaux.</br></br>
                    Sans les unités d’organisations, l’annuaire ne pourrait pas être trié correctement et l’administration serait moins efficace. Comparez les unités d’organisations à des dossiers qui permettent de ranger les objets à l’intérieur, si cela est plus compréhensible pour vous.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. Le schéma
                </p>
                <p style="margin-top: 30px;">
                    Par défaut, tout annuaire Active Directory dispose de classes prédéfinies ayant chacune une liste d’attributs bien spécifique, et propre à tout annuaire, cela est défini grâce à un schéma.</br></br>
                    Le schéma contient la définition de toutes les classes et de tous les attributs disponibles et autorisés au sein de votre annuaire. Il est à noter que le schéma est évolutif, le modèle de base n’est pas figé et peut évoluer selon vos besoins, voir même pour répondre aux prérequis de certaines applications.</br></br>
                    Par exemple, l’application de messagerie Microsoft Exchange effectue des modifications au schéma lors de son installation.</br></br>
                    Les modifications du schéma doivent être réalisées avec précaution, car l’impact est important et se ressentira sur toute la classe d’objets concernée. Pour preuve, le schéma est protégé et les modifications contrôlées, puisque seuls les membres du groupe « Administrateurs du schéma » peuvent, par défaut, effectuer des modifications.
                </p>
                <img src="../../../../../images/ad-2.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Console pour gérer le schéma de l'annuaire Active Directory
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    c. Les partitions d’annuaire
                </p>
                <p style="margin-top: 30px;">
                    La base de données Active Directory est divisée de façon logique en trois partitions de répertoire (appelé « Naming Context »). Ces trois partitions sont la partition de schéma, la partition de configuration, et la partition de domaine.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>La partition de schéma : cette partition contient l'ensemble des définitions des classes et attributs d’objets, qu’il est possible de créer au sein de l'annuaire Active Directory. Cette partition est unique au sein d’une forêt.</li>
                    <li>La partition de configuration : cette partition contient la topologie de la forêt (informations sur les domaines, les liens entre les contrôleurs de domaines, les sites, etc.). Cette partition est unique au sein d’une forêt.</li>
                    <li>La partition de domaine : cette partition contient les informations de tous les objets d'un domaine (ordinateur, groupe, utilisateur, etc.). Cette partition est unique au sein d’un domaine, il y aura donc autant de partitions de domaine qu’il y a de domaines.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Certaines notions évoquées ici peuvent être inconnues à vos yeux (forêts, GPO,…), rassurez-vous ce cours est là pour cela et nous aborderons ces points au sein des prochains modules et chapitres. Dans un premier temps, nous allons enchaîner sur la notion de domaine et de contrôleur de domaine.
                </p>
                <p style="margin-top: 60px; margin-left: 10px; justify-content: start">
                    <b>II - Contrôleur de domaine et domaine</b>
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    1 - Du groupe de travail au domaine
                </p>
                <p style="margin-top: 30px;">
                    Pour continuer l’apprentissage de l’Active Directory, il est intéressant de voir ce que représente le passage du mode « Groupe de travail » au mode « Domaine ». Pour rappel, toutes les machines sous Windows sont par défaut dans un groupe de travail nommé « WORKGROUP », et qui permet de mettre en relation des machines d’un même groupe de travail, notamment pour le partage de fichiers, mais il n’y a pas de notions d’annuaire, ni de centralisation avec ce mode de fonctionnement.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Modèle « Groupe de travail »
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Une base d’utilisateurs par machine : appelée « base SAM » (Security Account Manager), cette base est unique sur chaque machine et non partagée, ainsi, chaque machine contient sa propre base d’utilisateurs indépendante les unes des autres.</li>
                    <li>Très vite inadapté dès que le nombre de postes et d’utilisateurs augmente, car cela devient lourd en administration et les besoins différents.</li>
                    <li>Création des comptes utilisateurs en nombre, car chaque utilisateur doit disposer d’un compte sur chaque machine, les comptes étant propres à chaque machine.</li>
                    <li>Simplicité de mise en œuvre et ne nécessite pas de compétences particulières en comparaison à la gestion d’un annuaire Active Directory.</li>
                </ul>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. Modèle « Domaine »
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Base d’utilisateurs, de groupes et d’ordinateurs centralisée. Un seul compte utilisateur est nécessaire pour accéder à l’ensemble des machines du domaine.</li>
                    <li>L’annuaire contient toutes les informations relatives aux objets, tout est centralisé sur le contrôleur de domaine, il n’y a pas d’éparpillement sur les machines au niveau des comptes utilisateurs.</li>
                    <li>Ouverture de session unique par utilisateur, notamment pour l’accès aux ressources situées sur un autre ordinateur ou serveur.</li>
                    <li>Chaque contrôleur de domaine contient une copie de l’annuaire, qui est maintenue à jour et qui permet d’assurer la disponibilité du service et des données qu’il contient. Les contrôleurs de domaine se répliquent entre eux pour assurer cela.</li>
                    <li>Administration et gestion de la sécurité centralisée.</li>
                </ul>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    2 - Les contrôleurs de domaine
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Qu’est-ce qu’un contrôleur de domaine ?
                </p>
                <p style="margin-top: 30px;">
                    Lorsque l’on crée un domaine, le serveur depuis lequel on effectue cette création est promu au rôle de « contrôleur de domaine » du domaine créé. Il devient contrôleur du domaine créé, ce qui implique qu’il sera au cœur des requêtes à destination de ce domaine. De ce fait, il devra vérifier les identifications des objets, traiter les demandes d’authentification, veiller à l’application des stratégies de groupe ou encore stocker une copie de l’annuaire Active Directory.</br></br>
                    Un contrôleur de domaine est indispensable au bon fonctionnement du domaine, si l’on éteint le contrôleur de domaine ou qu’il est corrompu, le domaine devient inutilisable.</br></br>
                    De plus, lorsque vous créez le premier contrôleur de domaine dans votre organisation, vous créez également le premier domaine, la première forêt, ainsi que le premier site. Nous aborderons la notion de forêt et de site dans un autre chapitre. Gardez à l’esprit qu’un contrôleur de domaine est un serveur qui contient une copie de l’annuaire Active Directory.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. Le fichier de base de données NTDS.dit
                </p>
                <p style="margin-top: 30px;">
                    Sur chaque contrôleur de domaine, on trouve une copie de la base de données de l’annuaire Active Directory. Cette copie est symbolisée par un fichier « NTDS.dit » (NT Directory Services) qui contient l’ensemble des données de l’annuaire.</br></br>
                    À noter qu’il est possible de réaliser des captures instantanées de ce fichier afin de le consulter en mode « hors ligne » avec des outils spécifiques.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    c. La réplication des contrôleurs de domaine
                </p>
                <p style="margin-top: 30px;">
                    De nos jours, il est inévitable d’avoir au minimum deux contrôleurs de domaine pour assurer la disponibilité et la continuité de service des services d’annuaire. De plus, cela permet d’assurer la pérennité de la base d’annuaire qui est très précieuse. À partir du moment où une entreprise crée un domaine, même si ce domaine est unique, il est important de mettre en place au minimum deux contrôleurs de domaine.</br></br>
                    Sur les anciennes versions de Windows Server, notamment Windows Server 2000 et Windows Server 2003, le mécanisme FRS (File Replication Service) était utilisé pour la réplication. Depuis Windows Server 2008, FRS est mis de côté pour laisser la place à DFSR (Distributed File System Replication), qui est plus fiable et plus performant.</br></br>
                    Ainsi, les contrôleurs de domaine répliquent les informations entre eux à intervalle régulier, afin de disposer d’un annuaire Active Directory identique. Sans rentrer dans les détails, un numéro de version est géré par les contrôleurs de domaine, ce qui permet à un contrôleur de domaine de savoir s’il est à jour ou non par rapport à la version la plus récente de l’annuaire.</br></br>
                    Sur le schéma ci-dessous, on trouve deux contrôleurs de domaine, présent au sein d’un même domaine et qui réplique entre eux des informations. Des postes de travail client sont également présents et intégrés dans ce domaine, ils contactent les contrôleurs de domaine pour effectuer différentes actions (authentification d’un utilisateur, demande d’accès à une ressource...).</br></br>
                    Comme on peut le voir sur le schéma ci-dessous, lorsqu’il y a plusieurs contrôleurs de domaine, les requêtes sont réparties.
                </p>
                <img src="../../../../../images/ad-3.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Par ailleurs, les contrôleurs de domaine répliquent le dossier partagé « SYSVOL » qui est utilisé pour distribuer les stratégies de groupe (GPO - Group Policy) et les scripts de connexion.
                </p>
                <img src="../../../../../images/ad-4.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Structure du dossier SYSVOL
                </p>
                <p style="margin-top: 60px; margin-left: 10px; justify-content: start">
                    <b>III - Domaine, arbre et forêt</b>
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    1 - Symbolisation d’un domaine
                </p>
                <p style="margin-top: 30px;">
                    Lorsque vous verrez des schémas d’architecture Active Directory, vous verrez les domaines représentés par des triangles. Ainsi, notre domaine « jaynerro.local » pourrait être schématisé ainsi :
                </p>
                <img src="../../../../../images/ad-5.png" class="img-fluid mx-auto d-block" style="max-width: 25%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Au sein du domaine schématisé ci-dessous, on retrouvera tout un ensemble d’Unités d’Organisation remplies d’objets de différentes classes : utilisateurs, ordinateurs, groupes, contrôleurs de domaine, etc.</br></br>
                    Vous n’êtes pas sans savoir que de nombreuses entreprises ont plusieurs succursales, ce qui implique plusieurs sites sur différents emplacements géographiques. Selon l’importance de ces sites, on pourra envisager de créer un sous-domaine au domaine principal, voir même plusieurs sous-domaines selon le nombre de succursales. Voyons un exemple.</br></br>
                    On part du domaine de base « jaynerro.local », auquel on ajoute deux sous-domaines : « paris.jaynerro.local » et « londres.jaynerro.local » puisque nous avons deux succursales, une à Paris, l’autre à Londres. Voici la représentation de cette arborescence :
                </p>
                <img src="../../../../../images/ad-6.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Sur le cas ci-dessus, les domaines « paris.jaynerro.local » et « londres.jaynerro.local » sont des sous-domaines du domaine racine « jaynerro.local ». On appel généralement ces domaines, « des domaines enfants ».
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    2 - La notion d’arbre
                </p>
                <p style="margin-top: 30px;">
                    La notion d’arbre doit vous faire penser à un ensemble avec différentes branches, si c’est le cas, vous êtes sur la bonne voie. En effet, lorsqu’un domaine principal contient plusieurs sous-domaines on parle alors d’arbre, où chaque sous-domaine au domaine racine représente une branche de l’arbre.</br></br>
                    Un arbre est un regroupement hiérarchique de plusieurs domaines.</br></br>
                    Par exemple, la schématisation des domaines utilisés précédemment représente un arbre :
                </p>
                <img src="../../../../../images/ad-7.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Les domaines d’un même arbre partagent un espace de nom contigu et hiérarchique, comme c’est le cas avec l’exemple du domaine « jaynerro.local ».
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    3 - La notion de forêt
                </p>
                <p style="margin-top: 30px;">
                    Si vous êtes d’accord avec moi pour dire qu’une forêt c’est un ensemble d’arbres, alors vous avez déjà compris le principe de la notion de « forêt » dans un environnement Active Directory.</br></br>
                    En effet, une forêt est un regroupement d’une ou plusieurs arborescences de domaine, autrement dit d’un ou plusieurs arbres. Ces arborescences de domaine sont indépendantes et distinctes bien qu’elles soient dans la même forêt.</br></br>
                    L’exemple que nous utilisons jusqu’à maintenant avec le domaine principal et les deux sous domaines représente une forêt. Seulement, cette forêt ne contient qu’un seul arbre.</br></br>
                    Imaginons maintenant que nous rachetons la société « Cyber » et que nous décidons de créer un domaine racine « cyber.local », ainsi que trois sous-domaines pour les deux succursales situées à Paris et à Quimper, et un troisième sous-domaine pour un environnement de développement situé à Paris. On obtiendra : quimper.cyber.local, paris.cyber.local et dev.paris.cyber.local. On obtiendra un arbre avec la racine « cyber.local ».</br></br>
                    Voici l’arbre obtenu :
                </p>
                <img src="../../../../../images/ad-8.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Pour simplifier l’administration, les accès et unifier le système d’information, on peut décider de créer cet arbre « Cyber » dans la même forêt que celle où se situe l’arbre « Jaynerro ».</br></br>
                    On peut alors affirmer que les différentes arborescences d’une forêt ne partagent pas le même espace de nom et la même structure.</br></br>
                    Ainsi, on obtiendra une jolie forêt :
                </p>
                <img src="../../../../../images/ad-9.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Mais alors, une forêt pour quoi faire ?</br></br>
                    Vous devez vous dire, c’est bien joli de créer une forêt, de regrouper les domaines entre eux, mais alors qu’est-ce que ça apporte ?
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Tous les arbres d’une forêt partagent un schéma d’annuaire commun</li>
                    <li>Tous les domaines d’une forêt partagent un « Catalogue Global » commun (nous verrons plus tard ce qu’est un catalogue global)</li>
                    <li>Les domaines d’une forêt fonctionnent de façon indépendante, mais la forêt facilite les communications entre les domaines, c’est-à-dire dans toute l’architecture.</li>
                    <li>Création de relations entre les différents domaines de la forêt</li>
                    <li>Simplification de l’administration et flexibilité. Un utilisateur du domaine « paris.jaynerro.local » pourra accéder à des ressources situées dans le domaine « paris.cyber.local » ou se connecter sur une machine du domaine « quimper.cyber.local », si les autorisations le permettent.</li>
                </ul>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    D - Le niveau fonctionnel
                </p>
                <p style="margin-top: 30px;">
                    Le niveau fonctionnel est une notion également à connaître lors de la mise en œuvre d’une infrastructure Active Directory.</br></br>
                    À la création d’un domaine, un niveau fonctionnel est défini et il correspond généralement à la version du système d’exploitation depuis lequel on crée le domaine. Par exemple, si l’on effectue la création du domaine depuis un serveur sous Windows Server 2012, le niveau fonctionnel sera « Windows Server 2012 ».</br></br>
                    Dans un environnement existant, on est souvent amené à faire évoluer notre infrastructure, notamment les systèmes d’exploitation, ce qui implique le déclenchement d’un processus de migration. Une étape incontournable lors de la migration d’un Active Directory vers une version plus récente et le changement du niveau fonctionnel. Ainsi, il est important de savoir à quoi il correspond et les conséquences de l’augmentation du niveau.
                </p>    
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Un niveau fonctionnel, c’est quoi ?
                </p>
                <p style="margin-top: 30px;">
                    Un niveau fonctionnel détermine les fonctionnalités des services de domaine Active Directory qui sont disponibles dans un domaine ou une forêt.</br></br>
                    Le niveau fonctionnel permet de limiter les fonctionnalités de l’annuaire au niveau actuel afin d’assurer la compatibilité avec les plus anciennes versions des contrôleurs de domaine.
                </p>    
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. Pourquoi augmenter le niveau fonctionnel ?
                </p>
                <p style="margin-top: 30px;">
                    Plus le niveau fonctionnel est haut, plus vous pourrez bénéficier des dernières nouveautés liées à l’Active Directory et à sa structure. Ce qui rejoint la réponse à la question précédente.</br></br>
                    Par ailleurs, vous serez obligé d’augmenter le niveau fonctionnel pour ajouter la prise en charge des derniers systèmes d’exploitation Windows pour les contrôleurs de domaine. Par exemple, si le niveau fonctionnel est « Windows Server 2003 », vous ne pourrez pas ajouter un nouveau contrôleur de domaine sous Windows Server 2012 et les versions plus récentes.</br></br>
                    Consulter le tableau des compatibilités sur le TechNet Microsoft</br></br>
                    Ce phénomène implique qu’il est bien souvent inévitable d’augmenter le niveau fonctionnel lorsque l’on effectue une migration, afin de pouvoir supporter les nouveaux OS utilisés.</br></br>
                    À l’inverse, si le niveau fonctionnel est « Windows Server 2012 », il sera impossible d’intégrer de nouveaux contrôleurs de domaine qui utilisent un système d’exploitation plus ancien que Windows Server 2012.</br></br>
                    De plus, vous ne pouvez pas avoir un niveau fonctionnel plus haut que la version de votre contrôleur de domaine le plus récent.
                </p>
                <img src="../../../../../images/ad-10.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Augmenter le niveau fonctionnel du domaine via la console "Utilisateurs et ordinateurs Active Directory"
                </p>
                <p style="margin-top: 30px;">
                    Comme note de fin, je précise qu’une fois le niveau fonctionnel défini, il est impossible de passer à un niveau inférieur. Par exemple, on peut passer du niveau « Windows Server 2003 » à « Windows Server 2008 », mais pas l’inverse. Il existe toutefois une exception, il est possible rétrograder le niveau fonctionnel de Windows Server 2008 R2 à Windows Server 2008.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    c. Quel est la portée d’un niveau fonctionnel ?
                </p>
                <p style="margin-top: 30px;">       
                    Il y a deux niveaux fonctionnels différents, un qui s’applique au niveau du domaine et un autre qui s’applique au niveau de la forêt. Le plus critique étant le niveau fonctionnel de la forêt, car il doit correspondre au niveau minimum actuel sur l’ensemble des domaines de la forêt. De ce fait, il est obligatoire d’augmenter le niveau fonctionnel des domaines avant de pouvoir augmenter le niveau fonctionnel de la forêt.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    E - Domaine, arbre, forêt : conclusion
                </p>
                <p style="margin-top: 30px;">
                    Il faut garder à l’esprit qu’une forêt est un ensemble d’arbres, qu’un arbre est constitué d’une racine et potentiellement de branches qui sont représentées par des domaines et des sous-domaines.</br></br>
                    Tous les domaines pourraient être créés indépendamment les uns des autres, mais cela compliquerait l’administration plutôt que de la rendre plus simple. En effet, le fait de créer cette arborescence et de regrouper les architectures (les arbres) au sein d’une même forêt facilite grandement la relation entre les différents acteurs.</br></br>
                    D’ailleurs, les relations entre les différents éléments s’appellent des « relations d’approbations », mais nous verrons cela dans une autre partie du cours sur l’Active Directory.
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
                    <a href="https://www.it-connect.fr/cours/notions-de-base-de-lactive-directory/" target="_blank">It-connect.fr - Notions de base de l’Active Directory</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Active_Directory" target="_blank">Wikipedia - Active Directory</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol" target="_blank">Wikipedia - Lightweight Directory Access Protocol</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Security_Account_Manager" target="_blank">Wikipedia - Security Account Manager</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Strat%C3%A9gie_de_groupe" target="_blank">Wikipedia - Stratégies de groupe</a>
                </h6>
                
            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>