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
    <title>Conteneurisation</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base.php">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Conteneurisation</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Conteneurisation
                </h1>
                <img src="../../../images/containerization.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;"> 
                    La conteneurisation est un processus de déploiement logiciel qui regroupe le code d'une application avec tous les fichiers et bibliothèques dont elle a besoin pour s'exécuter sur n'importe quelle infrastructure. Traditionnellement, pour exécuter n'importe quelle application sur votre ordinateur, vous deviez installer la version correspondant au système d'exploitation de votre machine. Par exemple, vous deviez installer la version Windows d'un progiciel sur un ordinateur Windows. Toutefois, avec la conteneurisation, vous pouvez créer un progiciel unique, ou conteneur, qui s'exécute sur tous les types d'appareils et de systèmes d'exploitation. 
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Quels sont les avantages de la conteneurisation ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Les développeurs utilisent la conteneurisation pour créer et déployer des applications modernes en raison des avantages suivants.</br></br>
                    Portabilité</br></br>
                    Les développeurs de logiciels utilisent la conteneurisation pour déployer des applications dans plusieurs environnements sans réécrire le code du programme. Ils créent une application une seule fois et la déploient sur plusieurs systèmes d'exploitation. Par exemple, ils exécutent les mêmes conteneurs sur les systèmes d'exploitation Linux et Windows. Les développeurs mettent également à niveau le code des applications héritées vers des versions modernes à l'aide de conteneurs pour le déploiement.</br></br>
                    Capacité de mise à l’échelle</br></br>
                    Les conteneurs sont des composants logiciels légers qui s'exécutent efficacement. Par exemple, une machine virtuelle peut lancer une application conteneurisée plus rapidement, car elle n'a pas besoin de démarrer un système d'exploitation. Par conséquent, les développeurs de logiciels peuvent facilement ajouter plusieurs conteneurs pour différentes applications sur une seule machine. Le cluster de conteneurs utilise des ressources informatiques provenant du même système d'exploitation partagé, mais un conteneur n'interfère pas avec le fonctionnement des autres conteneurs.</br></br> 
                    Tolérance aux pannes</br></br>
                    Les équipes de développement logiciel utilisent des conteneurs pour créer des applications tolérantes aux pannes. Ils utilisent plusieurs conteneurs pour exécuter des microservices sur le cloud. Comme les microservices conteneurisés fonctionnent dans des espaces utilisateur isolés, un seul conteneur défectueux n'affecte pas les autres conteneurs. Cela augmente la résilience et la disponibilité de l'application.</br></br>
                    Agilité</br></br>
                    Les applications conteneurisées s'exécutent dans des environnements de calcul isolés. Les développeurs de logiciels peuvent résoudre les problèmes et modifier le code de l'application sans interférer avec le système d'exploitation, le matériel ou d'autres services applicatifs. Ils peuvent raccourcir les cycles de publication des logiciels et travailler rapidement sur les mises à jour avec le modèle de conteneur.
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Quels sont les cas d'utilisation de la conteneurisation ?</b>
                </p>
                <p style="margin-top: 30px;">
                    Voici quelques cas d'utilisation de la conteneurisation.</br></br>
                    Migration vers le Cloud</br></br>
                    La migration vers le cloud, ou approche lift and shift, est une stratégie logicielle qui consiste à encapsuler les applications héritées dans des conteneurs et à les déployer dans un environnement de cloud computing. Les entreprises peuvent moderniser leurs applications sans réécrire l'intégralité du code logiciel.</br></br>
                    Adoption de l'architecture de microservices</br></br>
                    Les organisations qui souhaitent créer des applications cloud avec des microservices ont besoin d'une technologie de conteneurisation. L'architecture de microservices est une approche de développement logiciel qui utilise plusieurs composants logiciels interdépendants pour fournir une application fonctionnelle. Chaque microservice possède une fonction unique et spécifique. Une application cloud moderne se compose de plusieurs microservices. Par exemple, une application de streaming vidéo peut disposer de microservices pour le traitement des données, le suivi des utilisateurs, la facturation et la personnalisation. La conteneurisation fournit l'outil logiciel permettant de regrouper les microservices sous forme de programmes déployables sur différentes plateformes.</br></br>
                    Appareils IoT</br></br>
                    Les appareils IoT contiennent des ressources informatiques limitées, ce qui complique la mise à jour manuelle des logiciels. La conteneurisation permet aux développeurs de déployer et de mettre à jour facilement des applications sur des appareils IoT.</br></br>
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Qu'est-ce que l'orchestration de conteneurs ?</b>
                </p>
                <p style="margin-top: 30px;">
                    L'orchestration des conteneurs est une technologie logicielle qui permet la gestion automatique des conteneurs. Cela est nécessaire pour le développement d'applications cloud modernes, car une application peut contenir des milliers de microservices dans leurs conteneurs respectifs. Le grand nombre de microservices conteneurisés empêche les développeurs de logiciels de les gérer manuellement.</br></br>
                    Avantages de l'orchestration des conteneurs</br></br>
                    Les développeurs utilisent des outils d'orchestration de conteneurs pour démarrer, arrêter et gérer automatiquement les conteneurs. Les orchestrateurs de conteneurs permettent aux développeurs de faire évoluer les applications cloud avec précision et d'éviter les erreurs humaines. Par exemple, vous pouvez vérifier que les conteneurs sont déployés avec des ressources adéquates à partir de la plateforme hôte. 
                </p>
                <p style="margin-top: 30px; justify-content: start"> 
                    <b>Quels sont les types de technologie des conteneurs ?</b>
                </p>
                <p style="margin-top: 30px;"> 
                    Voici quelques exemples de technologies courantes utilisées par les développeurs pour la conteneurisation.</br></br>
                    Docker</br></br>
                    Docker, ou Docker Engine, est un environnement d'exécution de conteneur open source couramment utilisé qui permet aux développeurs de logiciels de créer, déployer et tester des applications conteneurisées sur différentes plateformes. Les conteneurs Docker sont des packages autonomes d'applications et de fichiers associés créés avec la structure Docker.</br></br>
                    Linux</br></br>
                    Linux est un système d'exploitation open source doté d'une technologie de conteneur intégrée. Les conteneurs Linux sont des environnements autonomes qui permettent à plusieurs applications basées sur Linux de s'exécuter sur une seule machine hôte. Les développeurs de logiciels utilisent des conteneurs Linux pour déployer des applications qui écrivent ou lisent de grandes quantités de données. Les conteneurs Linux ne copient pas l'intégralité du système d'exploitation dans leur environnement virtualisé. Au lieu de cela, les conteneurs contiennent les fonctionnalités nécessaires allouées dans l'espace de noms Linux.</br></br>
                    Kubernetes</br></br>
                    Kubernetes est un orchestrateur de conteneurs open source couramment utilisé que les développeurs de logiciels utilisent pour déployer, mettre à l'échelle et gérer un grand nombre de microservices. Il dispose d'un modèle déclaratif qui facilite l'automatisation des conteneurs. Le modèle déclaratif garantit que Kubernetes prend les mesures appropriées pour répondre aux exigences basées sur les fichiers de configuration.</br></br>
                </p>
                
            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://aws.amazon.com/fr/what-is/containerization/" target="_blank">Amazon - Qu'est-ce que la conteneurisation ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Virtualisation" target="_blank">Wikipedia - Conteneur (virtualisation)</a>
                </h6>             

                <h6 style="margin-top: 30px;">
                    <a href="https://www.veritas.com/fr/fr/information-center/containerization" target="_blank">Veritas - Qu'est-ce que la conteneurisation ? Quels sont les avantages ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://hellofuture.orange.com/fr/comment-la-conteneurisation-informatique-accelere-le-developpement-des-applications/" target="_blank">hellofuture.orange.com - Comment la conteneurisation informatique accélère le développement des applications</a>
                </h6>              

                <h6 style="margin-top: 30px;">
                    <a href="https://www.redhat.com/fr/topics/containers/what-is-docker" target="_blank">Red Hat - Docker, qu'est-ce que c'est ?</a>
                </h6>
                
                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.redhat.com/fr/topics/containers/what-is-podman" target="_blank">Red Hat - Podman, qu'est-ce que c'est ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>