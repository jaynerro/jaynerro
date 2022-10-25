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
    <title>Modèle OSI - Qu'est-ce que c'est ?</title>
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
                      <li class="breadcrumb-item"><p style="font-size: medium;">Modèle OSI</p></li>
                      <li class="breadcrumb-item active" aria-current="page">Qu'est-ce que c'est ?</li>
                  </ol>
              </nav>
          </div> 
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1> 
            Qu'est-ce que c'est ?
          </h1>
          <p style="margin-top: 30px;"> 
            Dans les années 1950, les communications étaient « point à point », c'est-à-dire qu'on ne pouvait communiquer qu'avec une seule machine à la fois. </br>
            Les chercheurs qui devaient communiquer avec plusieurs autres chercheurs à l'époque, se sont rendu compte qu'il serait intéressant de pouvoir le faire en temps réel plutôt que de passer d'un interlocuteur à l'autre successivement.
            Ils ont donc cherché à créer un nouveau moyen de communication qui ne serait alors plus centralisé, mais maillé. </br>
            Cela signifie que toute information pourrait passer par différents points, et que si certains points disparaissaient, cela n'empêcherait pas l'information de circuler. 
          </p>

        </div>
      </div>

      <div class="row justify-content-center" style="margin-top: 10px;">
        <div class="group col-sm-8">  
          <img src="../../../../images/star-network-topology.png" class="img-fluid float-left" style="max-width: 30%; margin-left: 10%; margin-top: 1em;"/>
          <img src="../../../../images/mesh-network-topology.png" class="img-fluid float-right" style="max-width: 40.6%; margin-left: 15%; margin-top: 1em;"/>
        </div>
      </div>
      
      <div class="row justify-content-center">
        <div class="group col-sm-8">
          <p style="font-size: small; margin-top: 1em;";> Réseau de communication centralisé (topologie étoile) <span class="marge">Réseau de communication maillé (topologie mesh)</span></p>

          <p style="margin-top: 40px;"> 
            En 1990, une révolution va permettre la croissance réelle d’Internet : le langage HTML et le protocole d'échange HTTP qui permettent la création de pages web. </br>
            Tout va s'accélérer alors avec la création des premiers navigateurs capables d'afficher des images, et la libération de l'utilisation des noms de domaine. Nous pouvons voir sur la figure suivante la progression phénoménale d'Internet dans les années 1990-2000.
          </p>

          <img src="../../../../images/internet-users.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>

          <img src="../../../../images/internet-map.jpeg" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
          <p style="margin-top: 20px; font-size: small;">
            Visualisation des multiples chemins à travers une portion d'Internet en 2003 - OPTE Project
          </p>
          

          <p style="margin-top: 40px;">
            Pour communiquer via le moyen de communication de la parole, nous avons besoin :
          </p>
          <ul style="font-size: large; text-align: justify; color: white; margin-left: 30%;">
            <li>d'un émetteur</li>
            <li>d'un récepteur</li>
            <li>d'un support de transmission (l'air).</li>
          </ul>

          <p style="margin-top: 40px;">
            Pour le téléphone, c'est un peu pareil sauf que nous avons besoin d'un élément complémentaire qui est l'intermédiaire entre la parole et l'électronique. En effet, on transforme la parole en signaux électriques, ils arrivent côté récepteur, puis ils sont de nouveau transformés en paroles. Nous voyons qu'il y a une encapsulation de l'information. </br>
            Nous retrouvons ce système d'encapsulation dans le courrier, pour lequel nous avons besoin :
          </p>
          <ul style="font-size: large; text-align: justify; color: white; margin-left: 30%;">
            <li>d'un émetteur</li>
            <li>d'un récepteur</li>
            <li>d'un support de transmission (la lettre)</li>
            <li>d'un contenant (l'enveloppe)</li>
            <li>d'un intermédiaire (la poste)</li>
          </ul>

          <p style="margin-top: 40px;">
            Pour passer des principes de communication humains à des principes de communication pour ordinateurs, les chercheurs ont regroupé l'ensemble de leurs recherches et de leurs résultats dans une norme que devront respecter les personnes se connectant à Internet : le modèle OSI. </br></br>
            Le modèle OSI (Open Systems Interconnection) est né en 1984. Celui-ci est né après la naissance d'Internet. </br></br>
            La raison est simple : le modèle OSI est né quand nous avons commencé à avoir une certaine expérience des communications entre ordinateurs. Il tient donc compte des communications existantes, mais aussi des communications futures et de leurs évolutions potentielles. </br>
            Son objectif est de normaliser les communications pour garantir un maximum d'évolutivité et d'interopérabilité entre les ordinateurs. </br></br>
            Le modèle OSI est une norme qui préconise comment les ordinateurs devraient communiquer entre eux. Le modèle OSI est un modèle en couches. Cela veut dire qu'il est découpé en plusieurs morceaux appelés couches, qui ont chacune un rôle défini, comme vous le montre le schéma de la figure suivante. 
          </p>

          <img src="../../../../images/osi-model.png" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>
          <p style="margin-top: 20px; font-size: small;">
            Modèle OSI
          </p>

          <p style="margin-top: 40px;">
            Pourquoi 7 ? Nous avons vu que pour mettre en place une communication, il nous faudrait mettre en œuvre un certain nombre d'éléments, comme l'émetteur, le récepteur, le langage, etc. Les chercheurs ont imaginé combien d'éléments principaux il faudrait mettre en place pour communiquer. Et ils en ont trouvé 7 ! </br></br>
            Chaque couche du modèle OSI va donc avoir un rôle à accomplir. Et l'ensemble de ces rôles va permettre de communiquer d'un ordinateur à un autre.</br></br>
          </p>
          <p style="margin-top: 40px;">
            Carte d'identité des couches du modèle OSI</br></br>
            La couche 1 :</br>
            Nom : Physique.</br>
            Rôle : Offrir un support de transmission pour la communication.</br></br>

            La couche 2 :</br>
            Nom : Liaison de données.</br>
            Rôle : Connecter les machines entre elles sur un réseau local.</br>
            Rôle secondaire : Détecter les erreurs de transmission.</br></br>

            La couche 3 :</br>
            Nom : Réseau.</br>
            Rôle : Interconnecter les réseaux entre eux.</br>
            Rôle secondaire : Fragmenter les paquets.</br></br>

            La couche 4 :</br>
            Nom : Transport.</br>
            Rôle : Gérer les connexions applicatives.</br>
            Rôle secondaire : Garantir la connexion.</br></br>

            La couche 5 : on s'en fiche !</br>
            Oui, au-delà de la couche 4, on s'en fiche ! La raison est simple : le modèle OSI est un modèle théorique. Le modèle sur lequel s'appuie Internet aujourd'hui est le modèle TCP/IP. Or, ce modèle n'utilise pas les couches 5 et 6, donc... on s'en fiche ! </br>
            Par contre, la couche 7 existe bien car c'est pour elle que nous mettons tout cela en place, il s'agit de la couche Application. </br></br>
          </p>

          <img src="../../../../images/tcp-ip-model.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 10px;"/>
          <p style="margin-top: 20px; font-size: small;">
            Modèle OSI vs Modèle TCP/IP
          </p>

          <p style="margin-top: 50px;">

            La couche 7 : </br>
            Nom : Application. </br>
            Rôle : Offrir différents services (messagerie, transfert de fichier, émulation de terminal, annuaire, supervision, etc.).</br></br>

            Les couches 1 à 4 sont appelées les couches "Réseau". Ce sont elles qui ont la responsabilité d'acheminer les informations d'une machine à une autre, pour les applications qui le demandent. </br></br>
            Avant d'examiner plus en détail les couches, nous allons préciser le cadre d'utilisation du modèle OSI.</br>
            Le modèle OSI étant une norme, il doit indiquer, aux personnes voulant mettre en place des réseaux, comment travailler. Plus exactement, cela permet aux constructeurs de matériels de réseau de savoir comment fabriquer leurs matériels, et donc de garantir la compatibilité entre eux.</br>
            Nous avons vu que chaque couche avait un rôle qu'il faudra respecter. Ainsi, la couche 2 ne s'occupera jamais de la communication entre réseaux. De même que la couche 3 ne s'occupera pas de la communication sur un réseau local, etc.</br></br>

            Le modèle OSI ajoute deux règles plus générales entre les couches : 
          </p>

          <ul style="font-size: large; text-align: justify; color: white;">
            <li>chaque couche est indépendante </li>
            <li>chaque couche ne peut communiquer qu'avec une couche adjacente</li>
          </ul>

          <p style="margin-top: 65px;">
            Chaque couche est indépendante</br></br>
            L'impact sera que les informations utilisées par une couche ne pourront pas être utilisées par une autre couche.</br>
            Par exemple, pour ceux qui connaissent déjà un peu le réseau, l'adresse IP qui est une adresse de couche 3 ne pourra pas être utilisée par une autre couche, sous peine de ne pas respecter le modèle OSI.</br></br>
            Cela va permettre de garantir l'évolution des communications dans le temps.</br></br>
            Imaginez que vous utilisiez Internet aujourd'hui. Sans le savoir, vous utilisez le protocole IPv4 pour la couche 3. Demain, nous allons passer en protocole IPv6 pour des raisons que nous expliciterons avec la couche 3.</br>
            Si jamais nous utilisons des adresses IPv4 dans une autre couche, le jour où nous changerons le protocole de couche 3 qui utilise les adresses IPv4, nous devrons changer aussi le ou les protocoles qui utilisent cette adresse.</br></br>
            Rendre les couches indépendantes garantit qu'elles sont interchangeables.</br>
            Cela veut dire qu'on pourra changer un protocole associé à une couche sans avoir besoin de changer toutes les couches du modèle OSI.</br>
          </p>

          <p style="margin-top: 75px;">
            Chaque couche ne peut communiquer qu'avec une couche adjacente</br></br>
            Pour comprendre cette règle, vous allez devoir comprendre comment les machines se servent du modèle OSI pour communiquer.</br></br>
            Vous êtes devant votre ordinateur et votre navigateur préféré. Vous entrez l'adresse d'un site dans la barre d'adresses, et le site apparaît aussitôt.</br></br>
            Sans le savoir, vous avez utilisé le modèle OSI !</br></br>
            En gros, l'application (le navigateur) de couche 7, s'est adressée aux couches réseau pour que celles-ci transmettent l'information à l'application demandée sur la machine demandée (le serveur web sur la machine google.com par exemple).</br>
            Lors d'un envoi, nous parcourons donc les couches du modèle OSI de haut en bas, de la couche 7 à la couche 1, ainsi que vous pouvez le voir sur la figure suivante.</br>
          </p>

          <img src="../../../../images/osi-model-2.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>

          <p style="margin-top: 40px; ">
            Ainsi, grâce à la seconde règle du modèle OSI, nous garantissons que lors de l'envoi d'informations, toutes les couches du modèle OSI vont être parcourues.</br></br>
            Ceci est garanti, car nous partons de la couche 7, et la règle nous dit qu'une couche ne peut communiquer qu'avec une couche adjacente. La couche 7 ne pourra donc communiquer qu'avec la couche directement sous elle, la couche 6.</br>
            En fait, c'est presque vrai, car comme vous le savez maintenant, le modèle OSI n'est qu'un modèle théorique, et la couche 7 s'adresse directement aux couches réseau pour communiquer, soit directement à la couche 4, qui s'adresse à la couche 3, qui s'adresse à la couche 2...</br></br>
            Nous pouvons ainsi garantir que tous les rôles associés à chaque couche, et donc nécessaires à la communication, vont être remplis !
          </p>

          <h3 style="margin-top: 130px;">
            Références
          </h3>

          <h6 style="margin-top: 30px;">
            "Apprenez le fonctionnement des réseaux TCP/IP" de Eric Lalitte - Collection OpenClassrooms
          </h6>

          <h6 style="margin-top: 30px; margin-bottom: 140px;">
            <a href="https://www.opte.org/" target="_blank">https://www.opte.org/</a>
          </h6>
        </div>
      </div>

  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('../../../../footer.php'); ?>
</html>