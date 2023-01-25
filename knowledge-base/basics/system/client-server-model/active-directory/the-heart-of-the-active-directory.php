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
    <title>Active Directory - Au cœur de l’annuaire Active Directory</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Au cœur de l’annuaire Active Directory</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Au cœur de l’annuaire Active Directory
                </h1>
                <img src="../../../../../images/ad.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 50px;"/>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start">
                    <b>I - Les protocoles LDAP, DNS et Kerberos</b>
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    1 - Le protocole LDAP
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Qu’est-ce que le protocole LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    Le protocole LDAP (Lightweight Directory Access Protocol) est un protocole qui permet de gérer des annuaires, notamment grâce à des requêtes d’interrogations et de modification de la base d’informations. En fait, l’Active Directory est un annuaire LDAP.</br></br>
                    Les communications LDAP s’effectuent sur le port 389, en TCP, du contrôleur de domaine cible.</br></br>
                    Il existe une déclinaison du protocole LDAP appelée LDAPS (LDAP over SSL) est qui apporte une couche de sécurité supplémentaire avec du chiffrement.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. Que contient l’annuaire LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    L’annuaire LDAP correspond directement à l’Active Directory, il contient donc un ensemble d’unités d’organisation qui forment l’arborescence générale. Ensuite, on trouve tous les différents types d’objets classiques : utilisateurs, ordinateurs, groupes, contrôleurs de domaine, voir même serveurs et imprimantes.</br></br>
                    Pour chaque classe d’objets, il stocke les attributs correspondants et les différentes valeurs de ces attributs pour chaque instance d’un objet. Par exemple, il va stocker toutes les informations relatives à un utilisateur (nom, prénom, description, mot de passe, adresse e-mail, etc.).
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    c. Comment est structuré l’annuaire LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    Un annuaire est un ensemble d’entrées, ces entrées étant elles-mêmes constituées de plusieurs attributs. De son côté, un attribut est bien spécifique et dispose d’un nom qui lui est propre, d’un type et d’une ou plusieurs valeurs.</br></br>
                    Chaque entrée dispose d’un identifiant unique qui permet de l’identifier rapidement, de la même manière que l’on utilise les identifiants dans les bases de données pour identifier rapidement une ligne.</br></br>
                    L’identifiant unique d’un objet est appelé GUID qui est « l’identificateur unique global ». Par ailleurs, un nom unique (DN – Distinguished Name) est attribué à chaque objet, et il se compose du nom de domaine auquel appartient l’objet ainsi que du chemin complet pour accéder à cet objet dans l’annuaire (le chemin à suivre dans l’arborescence d’unités d’organisation pour arriver jusqu’à cet objet).</br></br>
                    Par exemple, le chemin d’accès suivant, correspondant à un objet « utilisateur » nommé « Michel », du domaine « jaynerro.local » et étant stocké dans une unité d’organisation (OU) nommée « informatique » contenant elle-même une OU nommée « system » :</br></br>
                    jaynerro.local, informatique, system, Michel</br></br>
                    Se traduira en chemin LDAP par :</br></br>
                    cn=Michel,ou=system,ou=informatique,dc=jaynerro,dc=local</br></br>
                    Ainsi, la chaîne ci-dessus correspondra au Distinguished Name (unique) de l’objet.</br></br>
                    Dans un chemin LDAP vers un objet, on trouve toujours la présence du domaine sous la forme « dc=jaynerro,dc=local », correspondant à « jaynerro.local » dans cet exemple.
                    Pour résumer : 
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Les DC (domain components) sont les branches les plus hautes de l'arbre (niveau du domaine). Par exemple sur le domaine DOMAINE.NET ont aura DC=DOMAINE,DC=NET.</li>
                    <li>Les OU (organizational units) servent à stocker des objets LDAP (utilisateurs, groupes, ordinateurs imprimantes, des autres OU). Par exemple ont peut avoir une OU Informatique, une autres comptabilité etc...</li>
                    <li>Les CN (common name) représente le nom commun de l'objet. Par exemple pour l'utilsateur Jean, on retrouve CN=Jean.</li>
                </ul>
                <img src="../../../../../images/ad-11.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Exemple de DistinguishedName
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    2 - Le protocole DNS
                </p>
                <p style="margin-top: 30px;">
                    L’importance du protocole DNS n’est plus à prouver, nous l’utilisons chaque jour des centaines de fois, notamment pour la navigation internet et à chaque fois que l’on communique avec un serveur, pour ne citer que ces deux cas de figure.</br></br>
                    Il en est de même pour l’Active Directory qui adore s’appuyer sur le DNS… D’ailleurs, sans le DNS l’Active Directory ne fonctionnera pas. C’est d’ailleurs pour ça que lors de la mise en place d’un domaine, l’installation du serveur DNS est proposée.</br></br>
                    Le protocole DNS est utilisé pour la résolution des noms, ce qui permet aux postes clients de localiser les contrôleurs de domaine au sein de votre système d’information. De la même manière, lorsque l’on souhaite joindre un client au domaine, on utilise un nom comme « it-connect.local », ce qui implique une requête DNS pour savoir quelle est l’adresse IP correspondante à ce nom, vous serez alors redirigé vers votre contrôleur de domaine qui traitera la requête.</br></br>
                    Le serveur DNS crée une zone correspondante à votre domaine et enregistre de nombreux enregistrements. Il y a bien sûr un enregistrement (de type A) pour chaque contrôleur de domaine, mais il existe une multitude d’enregistrements annexes, indispensable au bon fonctionnement de l’Active Directory :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Enregistrement pour localiser le « Primary Domain Controller » : correspondant au contrôleur de domaine qui dispose du rôle FSMO « Émulateur PDC ».</li>
                    <li>Enregistrement pour localiser un contrôleur de domaine qui est catalogue global.</li>
                    <li>Enregistrement pour localiser les KDC du domaine (concept abordé au point suivant de ce cours).</li>
                    <li>Enregistrement pour localiser les contrôleurs de domaine du domaine cible.</li>
                    <li>Enregistrer simplement la correspondance nom/adresse IP des différents contrôleurs de domaine. Il est également possible de créer un second enregistrement avec les adresses IPv6.</li>
                    <li>Enregistrer les contrôleurs de domaine via le GUID pour assurer la localisation dans toute la forêt.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Les notions abordées ci-dessus et qui vous sont inconnues, seront aborder plus loin dans ce cours.</br></br>
                    Il est même possible que l’ensemble des ordinateurs joint au domaine soit enregistré au sein du DNS, si vous le permettez. Ainsi, un ordinateur de l’entreprise pourra être joint via : pc-01.it-connect.local s’il se nomme « pc-01 ».</br></br>
                    Le serveur DNS peut être sur le contrôleur de domaine ou sur un autre serveur DNS du système d’information. Ce serveur DNS peut être sous Windows mais aussi sous Linux en utilisant le paquet « Bind 9 » qui requiert alors une configuration particulière.</br></br>
                    Les contrôleurs de domaine doivent être capables d’écrire dans la zone DNS qui leur correspond, ceci dans le but de gérer les enregistrements dynamiquement. Lors de la création d’un domaine, tous les enregistrements nécessaires au bon fonctionnement du système seront créés automatiquement (je suis sûr que ça vous rassure).
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    3 - Le protocole Kerberos
                </p>
                <p style="margin-top: 30px;">
                    Le protocole Kerberos est l’acteur principal de l’authentification au sein d’un domaine, il n’intervient ni dans l’annuaire ni dans la résolution de noms.</br></br>
                    Le protocole Kerberos est un protocole mature, qui est aujourd’hui en version 5. Il assure l’authentification de manière sécurisée avec un mécanisme de distribution de clés.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    a. Comment fonctionne le protocole Kerberos ?
                </p>
                <p style="margin-top: 30px;">
                    Chaque contrôleur de domaine dispose d’un service de distribution de clés de sécurité, appelé « Centre de distribution de clés / key distribution center (KDC) » et qui réalise deux services :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Un service d’authentification (Authentication Service – AS)</li>
                </ul>
                <p style="margin-top: 30px;">
                    Ce service distribue des tickets spéciaux appelés « TGT » (pour « Ticket-Granting Ticket ») qui permettent d’effectuer d’autres demandes d’accès auprès du service d’émission de tickets (TGS).</br></br>
                    Avant qu’un client puisse obtenir un accès sur un ordinateur du domaine, il doit obtenir un TGT depuis le service d’authentification du domaine cible. Une fois que le service d’authentification retourne le TGT, le client dispose de l’autorisation pour effectuer sa demande auprès du TGS.</br></br>
                    Ce TGT obtenu pourra être réutilisé jusqu’à ce qu’il expire, mais la première demande qui déclenchera la création d’un nouveau TGT requiert toujours un passage par le service d’authentification.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Un service d’émission de tickets (Ticket-Granting Service - TGS)</li>
                </ul>
                <p style="margin-top: 30px;">
                    Ce service distribue des tickets aux clients pour la connexion de la machine du domaine. En fait, quand un client veut accéder à un ordinateur, il contacte le service d’émission de tickets correspondant au domaine auquel appartient l’ordinateur, il présente un TGT, et effectue sa demande pour obtenir un ticket d’accès sur cet ordinateur. On parlera alors de l’obtention d’un ticket TGS.</br></br>
                    Les deux services décrits précédemment ont chacun des tâches et un processus précis. Ce mécanisme d’authentification est inévitable pour accéder aux ressources d’un domaine. Sans Kerberos, il n’y aura plus d’authentification, ce qui déclenchera des problèmes d’authentifications et d’accès.</br></br>
                    Si le centre de distribution de clés (KDC) est indisponible depuis le réseau, l’Active Directory sera ensuite indisponible également, et le contrôleur de domaine ne contrôlera plus longtemps le domaine.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start">
                    b. De quoi est composé un ticket Kerberos ?
                </p>
                <p style="margin-top: 30px;">
                    Le ticket Kerberos distribué contient de nombreuses informations qui permettent d’identifier l’élément auquel est attribué ce ticket. Par exemple, pour un utilisateur, il sera possible de savoir son nom, son mot de passe, l’identité du poste initial ainsi que la durée de validité du ticket et sa date d’expiration.</br></br>
                    Par ailleurs, les tickets TGS et TGT contiennent une clé de session qui permet de chiffrer les communications suivantes afin de sécuriser les échanges.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start">
                    4 - LDAP, DNS et Kerberos en bref
                </p>
                <p style="margin-top: 30px;">
                    En résumé, vous devez garder en tête que ces trois protocoles sont indispensables au bon fonctionnement de l’Active Directory. Ils assurent des fonctions critiques :
                </p>
                <img src="../../../../../images/ad-12.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
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

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Kerberos_(protocole)" target="_blank">Wikipedia - Kerberos</a>
                </h6>             
                
            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>