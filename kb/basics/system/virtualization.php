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
    <link rel="stylesheet" href="../../../static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Virtualisation</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Virtualisation</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Virtualisation
                </h1>
                <img src="../../../images/virtualization.png" class="img-fluid mx-auto d-block" style="max-width: 85%; margin-top: 30px;"/>
                <p style="margin-top: 10px;"> 
                    La virtualisation est une technologie que vous pouvez utiliser pour créer des représentations virtuelles de serveurs, de stockage, de réseaux et d'autres machines physiques. Le logiciel virtuel imite les fonctions du matériel physique pour exécuter plusieurs machines virtuelles sur une seule machine physique. Les entreprises ont recours à la virtualisation pour utiliser efficacement leurs ressources matérielles et obtenir un meilleur rendement de leurs investissements. Elle alimente également les services de cloud computing qui aident les organisations à gérer leur infrastructure plus efficacement.
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Pourquoi la virtualisation est-elle importante ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    En utilisant la virtualisation, vous pouvez interagir avec n'importe quelle ressource matérielle avec une plus grande flexibilité. Les serveurs physiques consomment de l'électricité, occupent de l'espace de stockage et nécessitent une maintenance. Vous êtes souvent limité par la proximité physique et la conception du réseau si vous voulez y accéder. La virtualisation supprime toutes ces limitations en abstrayant la fonctionnalité du matériel physique en logiciel. Vous pouvez gérer, entretenir et utiliser votre infrastructure matérielle comme une application sur le web.</br></br>
                    Exemple de virtualisation</br></br>
                    Considérons une entreprise qui a besoin de serveurs pour trois fonctions :</br></br>
                </p>
                <ol style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>Stocker les e-mails professionnels en toute sécurité</li>
                    <li>Exécuter une application client</li>
                    <li>Exécuter des applications professionnelles internes</li>
                </ol>
                <p style="margin-top: 30px; justify-content: start"> 
                    Chacune de ces fonctions a des exigences de configuration différentes : 
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>L'application de messagerie électronique nécessite une capacité de stockage plus importante et un système d'exploitation Windows.</li>
                    <li>L'application destinée aux clients nécessite un système d'exploitation Linux et une puissance de traitement élevée pour gérer les gros volumes de trafic du site web.</li>
                    <li>L'application professionnelle interne nécessite iOS et davantage de mémoire interne (RAM).</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Pour répondre à ces exigences, l'entreprise configure trois serveurs physiques dédiés différents pour chaque application. L'entreprise doit faire un investissement initial élevé et effectuer une maintenance et des mises à niveau permanentes pour une seule machine à la fois. L'entreprise ne peut pas non plus optimiser sa capacité de calcul. Cela paie 100 % des coûts de maintenance des serveurs mais n'utilise qu'une fraction de leurs capacités de stockage et de traitement.</br></br>
                    Utilisation efficace du matériel</br></br>
                    Avec la virtualisation, l'entreprise crée trois serveurs numériques, ou machines virtuelles, sur un seul serveur physique. Il spécifie les exigences du système d'exploitation pour les machines virtuelles et peut les utiliser comme les serveurs physiques. Cependant, l'entreprise a maintenant moins de matériel et moins de dépenses connexes.</br></br>
                    Infrastructure en tant que service</br></br>
                    L'entreprise peut aller plus loin et utiliser une instance ou une machine virtuelle d'un fournisseur cloud computing. L'entreprise peut demander des ressources de serveur avec des configurations variables. Toutes les applications fonctionnent sur ces serveurs virtuels sans que les utilisateurs ne remarquent la moindre différence. La gestion du serveur devient également plus facile pour le service informatique de l'entreprise.</br></br>
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Quels sont les avantages de la virtualisation ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    La virtualisation offre plusieurs avantages à toute organisation :</br></br>
                    Utilisation efficace des ressources</br></br>
                    La virtualisation améliore les ressources matérielles utilisées dans votre centre de données. Par exemple, au lieu d'exécuter un serveur sur un système informatique, vous pouvez créer un pool de serveurs virtuels sur le même système informatique en utilisant et en renvoyant des serveurs au pool selon les besoins. Le fait d'avoir moins de serveurs physiques sous-jacents libère de l'espace dans votre centre de données et permet de réaliser des économies sur l'électricité, les générateurs et les appareils de refroidissement. </br></br>
                    Gestion informatique automatisée</br></br>
                    Maintenant que les ordinateurs physiques sont virtuels, vous pouvez les gérer en utilisant des outils logiciels. Les administrateurs créent des programmes de déploiement et de configuration pour définir les modèles de machines virtuelles. Vous pouvez dupliquer votre infrastructure de manière répétée et cohérente et éviter les configurations manuelles sujettes aux erreurs.</br></br>
                    Reprise plus rapide après sinistre</br></br>
                    Lorsque des événements tels que des catastrophes naturelles ou des cyberattaques affectent les activités d'une entreprise, le rétablissement de l'accès à l'infrastructure informatique et le remplacement ou la réparation d'un serveur physique peuvent prendre des heures, voire des jours. En revanche, le processus prend quelques minutes avec les environnements virtualisés. Cette réponse rapide améliore considérablement la résilience et facilite la continuité des activités, de sorte que les opérations peuvent se poursuivre comme prévu.  
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Comment fonctionne la virtualisation ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    La virtualisation utilise un logiciel spécialisé, appelé hyperviseur, pour créer plusieurs instances de cloud ou machines virtuelles sur un seul ordinateur physique.</br></br>
                    Instances de cloud ou machines virtuelles</br></br>
                    Après avoir installé le logiciel de virtualisation sur votre ordinateur, vous pouvez créer une ou plusieurs machines virtuelles. Vous pouvez accéder aux machines virtuelles de la même manière que vous accédez aux autres applications sur votre ordinateur. Votre ordinateur est appelé l'hôte, et la machine virtuelle est appelée l'invité. Plusieurs invités peuvent fonctionner sur l'hôte. Chaque invité possède son propre système d'exploitation, qui peut être identique ou différent du système d'exploitation de l'hôte.</br></br>
                    Du point de vue de l'utilisateur, la machine virtuelle fonctionne comme un serveur normal. Il comporte des paramètres, des configurations et des applications installées. Les ressources informatiques, telles que les unités centrales de traitement (CPU), la mémoire vive (RAM) et le stockage, sont les mêmes que sur un serveur physique. Vous pouvez également configurer et mettre à jour les systèmes d'exploitation invités et leurs applications si nécessaire sans affecter le système d'exploitation hôte.</br></br>
                    Hyperviseurs</br></br>
                    L'hyperviseur est le logiciel de virtualisation que vous installez sur votre machine physique. Il s'agit d'une couche logicielle qui sert d'intermédiaire entre les machines virtuelles et le matériel sous-jacent ou le système d'exploitation hôte. L'hyperviseur coordonne l'accès à l'environnement physique afin que plusieurs machines virtuelles aient accès à leur propre part de ressources physiques.</br></br>
                    Par exemple, si la machine virtuelle a besoin de ressources informatiques, comme la puissance de traitement d'un ordinateur, la demande est d'abord adressée à l'hyperviseur. L'hyperviseur transmet ensuite la demande au matériel sous-jacent, qui exécute la tâche.</br></br>
                    Voici les deux principaux types d'hyperviseurs.</br></br>
                    Hyperviseurs de type 1</br></br>
                    Un hyperviseur de type 1, également appelé hyperviseur « bare-metal », fonctionne directement sur le matériel informatique. Il possède certaines capacités de système d'exploitation et est très efficace car il interagit directement avec les ressources physiques.</br></br>
                    Hyperviseurs de type 2</br></br>
                    Un hyperviseur de type 2 s'exécute comme une application sur un matériel informatique doté d'un système d'exploitation existant. Utiliser ce type d'hyperviseur lorsque vous exécutez plusieurs systèmes d'exploitation sur une seule machine.</br></br>
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Comment fonctionne la virtualisation ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Vous pouvez utiliser la technologie de virtualisation pour obtenir les fonctions de nombreux types différents d'infrastructure physique et tous les avantages d'un environnement virtualisé. Vous pouvez aller au-delà des machines virtuelles pour créer une collection de ressources virtuelles dans votre environnement virtuel.</br></br>
                    Virtualisation des serveurs</br></br>
                    La virtualisation des serveurs est un processus qui divise un serveur physique en plusieurs serveurs virtuels. C'est un moyen efficace et rentable d'utiliser les ressources du serveur et de déployer les services informatiques dans une organisation. Sans la virtualisation des serveurs, les serveurs physiques n'utilisent qu'une petite partie de leurs capacités de traitement, ce qui laisse les appareils inactifs.</br></br>
                    Virtualisation du stockage
                </p>
                <div id="SAN">
                    <p style="margin-top: 20px;" id="NAS"> 
                        La virtualisation du stockage combine les fonctions des dispositifs de stockage physiques tels que le stockage en réseau (NAS - de l'anglais Network Attached Storage) et le réseau de stockage (SAN - de l'anglais Storage Area Network). Vous pouvez mettre en commun le matériel de stockage de votre centre de données, même s'il provient de différents fournisseurs ou de types différents. La virtualisation du stockage utilise tout votre stockage physique de données et crée une grande unité de stockage virtuel que vous pouvez attribuer et contrôler en utilisant un logiciel de gestion. Les administrateurs informatiques peuvent rationaliser les activités de stockage, telles que l'archivage, la sauvegarde et la récupération, car ils peuvent combiner virtuellement plusieurs dispositifs de stockage en réseau en un seul dispositif de stockage.</br></br>
                        Virtualisation des réseaux</br></br>
                        Tout réseau informatique comporte des éléments matériels tels que des commutateurs, des routeurs et des pare-feu. Une organisation ayant des bureaux sur plusieurs sites géographiques peut avoir plusieurs technologies de réseau différentes travaillant ensemble pour créer son réseau d'entreprise. La virtualisation du réseau est un processus qui combine toutes ces ressources réseau pour centraliser les tâches administratives. Les administrateurs peuvent modifier et contrôler ces éléments virtuellement sans toucher aux composants physiques, ce qui simplifie grandement la gestion du réseau.</br></br>
                        Voici deux approches de la virtualisation du réseau.</br></br>
                        Réseaux définis par logiciel</br></br>
                        Le réseau défini par logiciel (SDN) contrôle le routage du trafic en prenant en charge la gestion du routage des données dans l'environnement physique. Par exemple, vous pouvez programmer votre système pour qu'il donne la priorité au trafic d'appels vidéo sur le trafic d'applications afin de garantir une qualité d'appel constante dans toutes les réunions en ligne.</br></br>
                        Virtualisation de la fonction réseau</br></br>
                        La technologie de virtualisation des fonctions réseau combine les fonctions des appareils réseau, tels que les pare-feu, les équilibreurs de charge et les analyseurs de trafic qui fonctionnent ensemble, pour améliorer les performances du réseau.</br></br>
                        Virtualisation des données</br></br>
                        Les organisations modernes collectent des données provenant de plusieurs sources et les stockent sous différents formats. Elles peuvent également stocker des données à différents endroits, par exemple dans une infrastructure dans le cloud et dans un centre de données sur site. La virtualisation des données crée une couche logicielle entre ces données et les applications qui en ont besoin. Les outils de virtualisation des données traitent la demande de données d'une application et renvoient les résultats dans un format approprié. Ainsi, les organisations utilisent des solutions de virtualisation des données pour accroître la flexibilité de l'intégration des données et prendre en charge l'analyse interfonctionnelle des données.</br></br>
                        Virtualisation d'application</br></br>
                        La virtualisation des applications extrait les fonctions des applications pour les faire fonctionner sur des systèmes d'exploitation autres que ceux pour lesquels elles ont été conçues. Par exemple, les utilisateurs peuvent exécuter une application Microsoft Windows sur une machine Linux sans modifier la configuration de la machine. Pour réaliser la virtualisation des applications, suivez ces pratiques :
                    </p>
                </div>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>Streaming d'application – Les utilisateurs diffusent l'application à partir d'un serveur distant, de sorte qu'elle ne s'exécute que sur l'appareil de l'utilisateur final lorsque cela est nécessaire.</li>
                    <li>Virtualisation des applications sur serveur – Les utilisateurs peuvent accéder à l'application distante à partir de leur navigateur ou de l'interface client sans l'installer.</li>
                    <li>Virtualisation locale de l'application – Le code de l'application est livré avec son propre environnement pour fonctionner sur tous les systèmes d'exploitation sans modification.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Virtualisation des postes de travail</br></br>
                    La plupart des organisations ont un personnel non technique qui utilise des systèmes d'exploitation de bureau pour exécuter des applications professionnelles courantes. Par exemple, vous pouvez avoir le personnel suivant :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>Une équipe de service clientèle qui a besoin d'un ordinateur de bureau équipé de Windows 10 et d'un logiciel de gestion des relations avec la clientèle.</li>
                    <li>Un service marketing qui a besoin de Windows Vista pour les applications de vente.</li>
                </ul>
                <p style="margin-top: 30px;"> 
                    Vous pouvez utiliser la virtualisation des postes de travail pour exécuter ces différents systèmes d'exploitation de bureau sur des machines virtuelles, auxquelles vos équipes peuvent accéder à distance. Ce type de virtualisation rend la gestion des postes de travail efficace et sûre, ce qui permet de réaliser des économies sur le matériel. Voici les types de virtualisation des postes de travail.</br></br>
                    Infrastructure de bureau virtuel</br></br>
                    L'infrastructure de bureau virtuels exécute des bureaux virtuels sur un serveur distant. Vos utilisateurs peuvent y accéder en utilisant des appareils clients.</br></br>
                    Virtualisation locale des postes de travail</br></br>
                    Dans la virtualisation locale du bureau, vous exécutez l'hyperviseur sur un ordinateur local et créez un ordinateur virtuel avec un système d'exploitation différent. Vous pouvez passer de votre environnement local à votre environnement virtuel de la même manière que vous pouvez passer d'une application à l'autre.
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>En quoi la virtualisation diffère-t-elle du cloud computing ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Le cloud computing est la fourniture à la demande de ressources informatiques sur Internet avec une tarification à l'usage. Au lieu d'acheter, de posséder et d'entretenir un centre de données physique, vous pouvez accéder à des services technologiques, tels que la puissance de calcul, le stockage et les bases de données, selon vos besoins, auprès d'un fournisseur de services dans le cloud.</br></br>
                    La technologie de virtualisation rend le cloud computing possible. Les fournisseurs de services dans le cloud mettent en place et entretiennent leurs propres centres de données. Ils créent différents environnements virtuels qui utilisent les ressources matérielles sous-jacentes. Vous pouvez ensuite programmer votre système pour accéder à ces ressources dans le cloud en utilisant les API. Vos besoins en matière d'infrastructure peuvent être satisfaits sous la forme d'un service entièrement géré.
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>En quoi la virtualisation des serveurs est-elle différente de la conteneurisation ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    La conteneurisation est un moyen de déployer le code d'une application pour qu'il s'exécute sur n'importe quel environnement physique ou virtuel sans modification. Les développeurs regroupent le code de l'application avec les bibliothèques, les fichiers de configuration et les autres dépendances dont le code a besoin pour fonctionner. Ce paquet unique de logiciels, appelé container, peut fonctionner indépendamment sur n'importe quelle plateforme. La conteneurisation est un type de virtualisation des applications.</br></br>
                    On peut considérer la virtualisation des serveurs comme la construction d'une route pour relier deux endroits. Vous devez recréer un environnement virtuel complet, puis y exécuter votre application. En comparaison, la conteneurisation revient à construire un hélicoptère qui peut voler vers l'un ou l'autre de ces endroits. Votre application se trouve à l'intérieur d'un conteneur et peut fonctionner sur tous les types d'environnements physiques ou virtuels.
                </p>
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://aws.amazon.com/fr/what-is/virtualization/#:~:text=La%20virtualisation%20est%20une%20technologie,sur%20une%20seule%20machine%20physique." target="_blank">Amazon - Qu'est-ce que la virtualisation ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Virtualisation" target="_blank">Wikipedia - Virtualisation</a>
                </h6>             

                <h6 style="margin-top: 30px;">
                    <a href="https://www.redhat.com/fr/topics/virtualization/what-is-virtualization" target="_blank">Red Hat - La virtualisation, qu'est-ce que c'est ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.lebigdata.fr/virtualisation-definition" target="_blank">lebigdata.fr - Virtualisation : qu’est-ce que c’est et à quoi ça sert ?</a>
                </h6>              

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>