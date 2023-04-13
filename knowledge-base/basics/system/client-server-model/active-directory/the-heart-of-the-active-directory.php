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
    <link rel="stylesheet" href="../../../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../static/vendor/fontawesome/all.min.css" />
    <link rel="stylesheet" href="../../../../../static/css/tree.css">

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
                <ul id="nav-tree">
                    <li id="liSummary" style="margin-top: 20px;">
                        <a><b>Sommaire</b></a>
                        <ul>
                            <a href="#I" style="margin-top: 5px; margin-left: 20px;">I - Les protocoles LDAP, DNS et Kerberos</a>
                                <a href="#I1" style="margin-top: 10px; margin-left: 40px;">1 - Le protocole LDAP</a>
                                    <a href="#I1a" style="margin-top: 10px; margin-left: 60px;">a. Qu’est-ce que le protocole LDAP ?</a>
                                    <a href="#I1b" style="margin-top: 10px; margin-left: 60px;">b. Que contient l’annuaire LDAP ?</a>
                                    <a href="#I1c" style="margin-top: 10px; margin-left: 60px;">c. Comment est structuré l’annuaire LDAP ?</a>
                                <a href="#I2" style="margin-top: 10px; margin-left: 40px;">2 - Le protocole DNS</a>
                                <a href="#I3" style="margin-top: 10px; margin-left: 40px;">3 - Le protocole Kerberos</a>
                                    <a href="#I3a" style="margin-top: 10px; margin-left: 60px;">a. Comment fonctionne le protocole Kerberos ?</a>
                                    <a href="#I3b" style="margin-top: 10px; margin-left: 60px;">b. De quoi est composé un ticket Kerberos ?</a>
                                <a href="#I4" style="margin-top: 10px; margin-left: 40px;">4 - LDAP, DNS et Kerberos en bref</a>
                            <a href="#II" style="margin-top: 15px; margin-left: 20px;">II - Les principaux attributs d’objets dans l’Active Directory</a>
                                <a href="#II1" style="margin-top: 10px; margin-left: 40px;">1 - Les principales classes</a>
                                <a href="#II2" style="margin-top: 10px; margin-left: 40px;">2 - Les identifiants uniques : DistinguishedName et GUID</a>
                                    <a href="#II2a" style="margin-top: 10px; margin-left: 60px;">a. Le DistinguishedName</a>
                                    <a href="#II2b" style="margin-top: 10px; margin-left: 60px;">b. Le GUID</a>
                                <a href="#II3" style="margin-top: 10px; margin-left: 40px;">3 - Les attributs indispensables</a>
                            <a href="#III" style="margin-top: 15px; margin-left: 20px;">III - Les différents types de groupe de l’Active Directory</a>
                                <a href="#III1" style="margin-top: 10px; margin-left: 40px;">1 - L’étendue du groupe</a>
                                <a href="#III2" style="margin-top: 10px; margin-left: 40px;">2 - Le type du groupe</a>
                                <a href="#III3" style="margin-top: 10px; margin-left: 40px;">3 - Les groupes par défaut</a>
                        </ul>
                    </li>
                </ul>
                <p style="margin-top: 40px; margin-left: 10px; justify-content: start" id="I">
                    <b>I - Les protocoles LDAP, DNS et Kerberos</b>
                </p>
                <div id="I1">
                    <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="LDAP">
                        1 - Le protocole LDAP
                    </p>
                </div>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="I1a">
                    a. Qu’est-ce que le protocole LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    Le protocole LDAP (Lightweight Directory Access Protocol) est un protocole qui permet de gérer des annuaires, notamment grâce à des requêtes d’interrogations et de modification de la base d’informations. En fait, l’Active Directory est un annuaire LDAP.</br></br>
                    Les communications LDAP s’effectuent sur le port 389, en TCP, du contrôleur de domaine cible.</br></br>
                    Il existe une déclinaison du protocole LDAP appelée LDAPS (LDAP over SSL) est qui apporte une couche de sécurité supplémentaire avec du chiffrement.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="I1b">
                    b. Que contient l’annuaire LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    L’annuaire LDAP correspond directement à l’Active Directory, il contient donc un ensemble d’unités d’organisation qui forment l’arborescence générale. Ensuite, on trouve tous les différents types d’objets classiques : utilisateurs, ordinateurs, groupes, contrôleurs de domaine, voir même serveurs et imprimantes.</br></br>
                    Pour chaque classe d’objets, il stocke les attributs correspondants et les différentes valeurs de ces attributs pour chaque instance d’un objet. Par exemple, il va stocker toutes les informations relatives à un utilisateur (nom, prénom, description, mot de passe, adresse e-mail, etc.).
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="I1c">
                    c. Comment est structuré l’annuaire LDAP ?
                </p>
                <p style="margin-top: 30px;">
                    Un annuaire est un ensemble d’entrées, ces entrées étant elles-mêmes constituées de plusieurs attributs. De son côté, un attribut est bien spécifique et dispose d’un nom qui lui est propre, d’un type et d’une ou plusieurs valeurs.</br></br>
                    Chaque entrée dispose d’un identifiant unique qui permet de l’identifier rapidement, de la même manière que l’on utilise les identifiants dans les bases de données pour identifier rapidement une ligne.
                </p>
                <div id="GUID">
                    <p style="margin-top: 30px;" id="DN">
                        L’identifiant unique d’un objet est appelé GUID qui est « l’identificateur unique global ». Par ailleurs, un nom unique (DN – Distinguished Name) est attribué à chaque objet, et il se compose du nom de domaine auquel appartient l’objet ainsi que du chemin complet pour accéder à cet objet dans l’annuaire (le chemin à suivre dans l’arborescence d’unités d’organisation pour arriver jusqu’à cet objet).
                    </p>
                    <p style="margin-top: 20px;" id="OU">
                        Par exemple, le chemin d’accès suivant, correspondant à un objet « utilisateur » nommé « Michel », du domaine « jaynerro.local » et étant stocké dans une unité d’organisation (OU) nommée « informatique » contenant elle-même une OU nommée « system » :</br></br>
                        jaynerro.local, informatique, system, Michel</br></br>
                        Se traduira en chemin LDAP par :</br></br>
                        cn=Michel,ou=system,ou=informatique,dc=jaynerro,dc=local</br></br>
                        Ainsi, la chaîne ci-dessus correspondra au Distinguished Name (unique) de l’objet.</br></br>
                        Dans un chemin LDAP vers un objet, on trouve toujours la présence du domaine sous la forme « dc=jaynerro,dc=local », correspondant à « jaynerro.local » dans cet exemple.
                    </p>
                </div>
                <img src="../../../../../images/ad-11.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Exemple de DistinguishedName
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="I2">
                    2 - Le protocole DNS
                </p>
                <p style="margin-top: 30px;">
                    L’importance du protocole DNS n’est plus à prouver, nous l’utilisons chaque jour des centaines de fois, notamment pour la navigation internet et à chaque fois que l’on communique avec un serveur, pour ne citer que ces deux cas de figure.</br></br>
                    Il en est de même pour l’Active Directory qui adore s’appuyer sur le DNS… D’ailleurs, sans le DNS l’Active Directory ne fonctionnera pas. C’est d’ailleurs pour ça que lors de la mise en place d’un domaine, l’installation du serveur DNS est proposée.</br></br>
                    Le protocole DNS est utilisé pour la résolution des noms, ce qui permet aux postes clients de localiser les contrôleurs de domaine au sein de votre système d’information. De la même manière, lorsque l’on souhaite joindre un client au domaine, on utilise un nom comme « it-connect.local », ce qui implique une requête DNS pour savoir quelle est l’adresse IP correspondante à ce nom, vous serez alors redirigé vers votre contrôleur de domaine qui traitera la requête.</br></br>
                    Le serveur DNS crée une zone correspondante à votre domaine et enregistre de nombreux enregistrements. Il y a bien sûr un enregistrement (de type A) pour chaque contrôleur de domaine, mais il existe une multitude d’enregistrements annexes, indispensable au bon fonctionnement de l’Active Directory :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;" id="PDC">
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
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="I3">
                    3 - Le protocole Kerberos
                </p>
                <p style="margin-top: 30px;">
                    Le protocole Kerberos est l’acteur principal de l’authentification au sein d’un domaine, il n’intervient ni dans l’annuaire ni dans la résolution de noms.</br></br>
                    Le protocole Kerberos est un protocole mature, qui est aujourd’hui en version 5. Il assure l’authentification de manière sécurisée avec un mécanisme de distribution de clés.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="I3a">
                    a. Comment fonctionne le protocole Kerberos ?
                </p>
                <p style="margin-top: 30px;" id="KDC">
                    Chaque contrôleur de domaine dispose d’un service de distribution de clés de sécurité, appelé « Centre de distribution de clés / key distribution center (KDC) » et qui réalise deux services :
                </p>
                <div id="AS">
                    <ul style="font-size: large; text-align: justify; color: white;">
                        <li>Un service d’authentification (Authentication Service – AS)</li>
                    </ul>
                </div>
                <p style="margin-top: 30px;" id="TGT">
                    Ce service distribue des tickets spéciaux appelés « TGT » (pour « Ticket-Granting Ticket ») qui permettent d’effectuer d’autres demandes d’accès auprès du service d’émission de tickets (TGS).</br></br>
                    Avant qu’un client puisse obtenir un accès sur un ordinateur du domaine, il doit obtenir un TGT depuis le service d’authentification du domaine cible. Une fois que le service d’authentification retourne le TGT, le client dispose de l’autorisation pour effectuer sa demande auprès du TGS.</br></br>
                    Ce TGT obtenu pourra être réutilisé jusqu’à ce qu’il expire, mais la première demande qui déclenchera la création d’un nouveau TGT requiert toujours un passage par le service d’authentification.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;" id="TGS">
                    <li>Un service d’émission de tickets (Ticket-Granting Service - TGS)</li>
                </ul>
                <p style="margin-top: 30px;">
                    Ce service distribue des tickets aux clients pour la connexion de la machine du domaine. En fait, quand un client veut accéder à un ordinateur, il contacte le service d’émission de tickets correspondant au domaine auquel appartient l’ordinateur, il présente un TGT, et effectue sa demande pour obtenir un ticket d’accès sur cet ordinateur. On parlera alors de l’obtention d’un ticket TGS.</br></br>
                    Les deux services décrits précédemment ont chacun des tâches et un processus précis. Ce mécanisme d’authentification est inévitable pour accéder aux ressources d’un domaine. Sans Kerberos, il n’y aura plus d’authentification, ce qui déclenchera des problèmes d’authentifications et d’accès.</br></br>
                    Si le centre de distribution de clés (KDC) est indisponible depuis le réseau, l’Active Directory sera ensuite indisponible également, et le contrôleur de domaine ne contrôlera plus longtemps le domaine.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="I3b">
                    b. De quoi est composé un ticket Kerberos ?
                </p>
                <p style="margin-top: 30px;">
                    Le ticket Kerberos distribué contient de nombreuses informations qui permettent d’identifier l’élément auquel est attribué ce ticket. Par exemple, pour un utilisateur, il sera possible de savoir son nom, son mot de passe, l’identité du poste initial ainsi que la durée de validité du ticket et sa date d’expiration.</br></br>
                    Par ailleurs, les tickets TGS et TGT contiennent une clé de session qui permet de chiffrer les communications suivantes afin de sécuriser les échanges.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="I4">
                    4 - LDAP, DNS et Kerberos en bref
                </p>
                <p style="margin-top: 30px;">
                    En résumé, vous devez garder en tête que ces trois protocoles sont indispensables au bon fonctionnement de l’Active Directory. Ils assurent des fonctions critiques :
                </p>
                <img src="../../../../../images/ad-12.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 60px; margin-left: 10px; justify-content: start" id="II">
                    <b>II - Les principaux attributs d’objets dans l’Active Directory</b>
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="II1">
                    1 - Les principales classes
                </p>
                <p style="margin-top: 30px;">
                    Avant de s’intéresser aux attributs, nous allons rapidement voir les principales classes d’objets, puisque ce sont ces classes qui contiennent les attributs que nous verrons après.
                </p>
                <div class="table-responsive">
                    <table class="table table-dark table-striped" style="margin-top: 30px;">
                        <thead>
                            <tr>
                                <th scope="col">Nom</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Ordinateur</th>
                                <td>Les ordinateurs clients intégrés au domaine, mais aussi les serveurs et les contrôleurs de domaine</td>
                            </tr>
                            <tr>
                                <th scope="row">Contact</th>
                                <td>Enregistrer des contacts, sans autorisation d’authentification</td>
                            </tr>
                            <tr>
                                <th scope="row">Groupe</th>
                                <td>Regrouper des objets au sein d’un groupe, notamment pour simplifier l’administration (attribution de droits à un service « informatique » qui correspond à un groupe nommé « informatique », par exemple)</td>
                            </tr>
                            <tr>
                                <th scope="row">Unité d’organisation</th>
                                <td>Dossier pour créer une arborescence et organiser les objets.</td>
                            </tr>
                            <tr>
                                <th scope="row">Imprimante</th>
                                <td>Ressource de type « imprimante »</td>
                            </tr>
                            <tr>
                                <th scope="row">Utilisateur</th>
                                <td>Comptes utilisateurs qui permettent de s’authentifier sur le domaine, et accéder aux ressources, aux ordinateurs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top: 30px;">
                    Le tableau ci-dessus regroupe les classes d’objets les plus utilisées et les plus courantes.</br></br>
                    Je tiens à préciser tout de même que par défaut l'Active Directory intègre déjà des containers (Users, Builtin, etc) et qui, à la différence des unités d'organisation natives, ne peuvent pas se voir appliquer des stratégies de groupe (GPO) et qu'il n'est pas possible de créer une délégation sur ces containers.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="II2">
                    2 - Les identifiants uniques : DistinguishedName et GUID
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="II2a">
                    a. Le DistinguishedName
                </p>
                <p style="margin-top: 30px;">
                    Cet identifiant unique également appelé « DN » représente le chemin LDAP qui permet de trouver l’objet dans l’annuaire Active Directory. Lors de l’étude du protocole LDAP, nous avions déjà vu un exemple de DN.</br></br>
                    Voici un autre exemple :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Domaine : it-connect.local</li>
                    <li>Unité d’organisation où se trouve l’objet : informatique</li>
                    <li>Nom de l’objet : Florian</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Le DN de cet objet utilisateur sera :</br></br>
                    cn=Florian,ou=informatique,dc=it-connect,dc=local</br></br>
                    Dans ce DN, on trouve un chemin qui permet de retrouver l’objet, différents éléments sont utilisés :</br></br>
                </p>
                <div class="table-responsive">
                    <table class="table table-dark table-striped" style="margin-top: 30px;">
                        <thead>
                            <tr>
                                <th scope="col">Identification de l’élément</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" id="CN">cn</th>
                                <td>CommonName – Nom commun – Nom de l’objet final ciblé</td>
                            </tr>
                            <tr>
                                <th scope="row">ou</th>
                                <td>OrganizationalUnit – Unité d’organisation</td>
                            </tr>
                            <tr>
                                <th scope="row" id="DC">dc</th>
                                <td>Composant de domaine – Utilisé pour indiquer le domaine cible, avec un élément « dc » par partie du domaine</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top: 30px;">
                    Le DN peut être très long si l’arborescence de l’annuaire est importante et que l’objet se trouve au fin fond de cette arborescence. De plus, le DN peut changer régulièrement si l’objet est déplacé, ou si une unité d’organisation dont il dépend est renommée puisqu’il contient de manière nominative les objets.
                </p>
                <p style="margin-top: 30px; margin-left: 50px; justify-content: start" id="II2b">
                    b. Le GUID
                </p>
                <p style="margin-top: 30px;">
                    Le GUID (Globally Unique IDentifier) est un identificateur global unique qui permet d’identifier un objet d’un annuaire Active Directory. Il correspond à l’attribut « ObjectGUID » dans le schéma Active Directory.</br></br>
                    Il est attribué à l’objet dès sa création et ne change jamais, même si l’objet est déplacé ou modifié. Le GUID suit un objet de la création jusqu’à la suppression.</br></br>
                    Codé sur 128 bits, le GUID d’un objet est unique au sein d’une forêt et il est généré par un algorithme qui garantit son unicité. Des informations aléatoires, d’autres non, comme l’heure de création de l’objet.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="II3">
                    3 - Les attributs indispensables
                </p>
                <p style="margin-top: 30px;">
                    Après avoir vu les attributs ObjectGUID et DistinguishedName, continuons notre quête des attributs avec ce tableau qui récapitule les attributs que l’on manipule le plus souvent.
                </p>
                <div class="table-responsive">
                    <table class="table table-dark table-striped" style="margin-top: 30px;">
                        <thead>
                            <tr>
                                <th scope="col">Nom de l’attribut dans le schéma</th>
                                <th scope="col">Nom de l’attribut dans la console Active Directory</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">sAMAccountName</th>
                                <td>« Nom d’ouverture de session de l’utilisateur »</td>
                                <td>Valeur que devra utiliser l’objet pour s’authentifier sur le domaine</td>
                            </tr>
                            <tr>
                                <th scope="row">UserPrincipalName</th>
                                <td>« Nom d’ouverture de session de l’utilisateur » concaténé au nom du domaine sous la forme « @it-connect.local »</td>
                                <td>Nom complet de l’utilisateur avec le domaine inclus. Également appelé UPN</td>
                            </tr>
                            <tr>
                                <th scope="row">description</th>
                                <td>Description</td>
                                <td>Description de l’objet</td>
                            </tr>
                            <tr>
                                <th scope="row">mail</th>
                                <td>Adresse de messagerie</td>
                                <td>Adresse de messagerie attribuée à l’objet</td>
                            </tr>
                            <tr>
                                <th scope="row">adminCount</th>
                                <td>-</td>
                                <td>Égal à « 1 » s’il s’agit d’un compte de type « Administrateur », égal à « 0 » s’il ne l’est pas</td>
                            </tr>
                            <tr>
                                <th scope="row">DisplayName</th>
                                <td>Nom complet</td>
                                <td>Nom complet qui sera affiché pour cet utilisateur</td>
                            </tr>
                            <tr>
                                <th scope="row">givenName</th>
                                <td>Prénom</td>
                                <td>Prénom de l’utilisateur</td>
                            </tr>
                            <tr>
                                <th scope="row">logonCount</th>
                                <td>-</td>
                                <td>Nombre d’ouverture de session réalisée par cet objet</td>
                            </tr>
                            <tr>
                                <th scope="row">accountExpires</th>
                                <td>Date d’expiration du compte</td>
                                <td>Date à laquelle le compte ne sera plus utilisable (peut être vide)</td>
                            </tr>
                            <tr>
                                <th scope="row">ObjectSID</th>
                                <td>-</td>
                                <td>Identifiant de sécurité unique qui permet d’identifier un objet</td>
                            </tr>
                            <tr>
                                <th scope="row">pwdLastSet</th>
                                <td>-</td>
                                <td>Dernière fois que le mot de passe fût modifié</td>
                            </tr>
                            <tr>
                                <th scope="row">userAccountControl</th>
                                <td>-</td>
                                <td>État du compte – Une dizaine de codes différents sont possibles</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top: 30px;">
                    Pour illustrer mes propos, voici une sortie PowerShell qui affiche quelques attributs et leurs valeurs, concernant l’utilisateur « Florian » :
                </p>
                <img src="../../../../../images/ad-11.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 60px; margin-left: 10px; justify-content: start" id="III">
                    <b>III - Les différents types de groupe de l’Active Directory</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour vous convaincre de l’importance et de l’intérêt qu’il y a à utiliser les groupes, voici un exemple tout simple.</br></br>
                    Je dispose d’un dossier partagé, accessible via le réseau aux utilisateurs du domaine. Ce dossier se nomme « Comptabilité » et je souhaite que toutes les personnes du service comptabilité de mon entreprise accèdent à ce dossier.</br></br>
                    Plutôt que de donner les droits à chaque utilisateur du service comptabilité, tour à tour, on va créer un groupe. De ce fait, je vais créer un groupe nommé « comptabilité » dont les membres sont l’ensemble des utilisateurs correspondant aux collaborateurs du service comptabilité.</br></br>
                    Il suffira ensuite d’ajouter sur le dossier partagé les autorisations pour le groupe « comptabilité », ce qui impliquera que les membres de ce groupe disposeront eux aussi des droits (comme ils font partie du groupe).</br></br>
                    Non seulement ça permet de simplifier la liste des autorisations sur le répertoire (il y a moins d’éléments listés que si chaque utilisateur était ajouté de façon indépendante), mais aussi ça simplifie l’administration, car si un utilisateur change de service, il suffit de le changer de groupe. Il ne sera pas nécessaire de changer les autorisations de cet utilisateur sur des dossiers partagés tel que celui de la « comptabilité ».</br></br>
                    Maintenant, il faut savoir qu’il existe différentes étendues pour les groupes et différents types de groupe, c’est ce que nous allons voir en détail maintenant.
                </p>
                <img src="../../../../../images/ad-13.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Assistant de création d'un groupe
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="III1">
                    1 - L’étendue du groupe
                </p>
                <p style="margin-top: 30px;">
                    L’étendue d’un groupe correspond à sa portée au niveau de l’arborescence Active Directory, les étendues peuvent aller d’une portée uniquement sur le domaine local, mais aussi s’étendre sur la forêt entière.</br></br>
                    Pour ceux qui ne se souviennent plus de ce que sont une forêt et un domaine, retournez au troisième chapitre du premier module.</br></br>
                    Il existe trois étendues différentes :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Domaine local</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un groupe qui dispose d’une étendue « domaine local » peut être utilisé uniquement dans le domaine dans lequel il est créé. Avec ce type d’étendue, le groupe reste local au domaine où il est créé.</br></br>
                    Cependant, les membres d’un groupe à étendue locale peuvent être bien sûr des utilisateurs, mais aussi d’autres groupes à étendues locales, globales ou universelles. Cette possibilité offre là encore une flexibilité dans l’administration.</br></br>
                    Il peut être défini pour contrôler l’accès aux ressources uniquement au niveau du domaine local.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Globale</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un groupe ayant une étendue « globale » pourra être utilisé dans le domaine local, mais aussi dans tous les domaines approuvés par le domaine de base. Ainsi, si un « domaine A » approuve via une relation un « domaine B », alors un groupe global créé dans le « domaine A » pourra être utilisé dans le « domaine B ».</br></br>
                    Un groupe global pourra contenir d’autres objets du domaine, et être utilisé pour contrôler l’accès aux ressources sur le domaine local et tous les domaines approuvés.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Universelle</li>
                </ul>
                <p style="margin-top: 30px;">
                    Un groupe disposant de l’étendue « universelle » à une portée maximale puisqu’il est accessible dans l’ensemble de la forêt, ce qui implique qu’il soit disponible sur tous les domaines de la forêt.</br></br>
                    Un groupe universel peut contenir des groupes et objets provenant de n’importe quel domaine de la forêt. De la même manière, il est possible de l’utiliser pour définir l’accès aux ressources sur tous les domaines de la forêt.</br></br>
                    Ainsi, avec ce type d’étendue on pourra consolider plusieurs groupes qui doivent avoir une portée maximale sur l’ensemble du système.</br></br>
                    Une particularité de ce type de groupe, c’est qu’il est défini au sein d’un catalogue global.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Précisions sur les étendues</li>
                </ul>
                <p style="margin-top: 30px;">
                    Les étendues sont dépendantes du niveau fonctionnel de la forêt et du domaine, ainsi que de la complexité de l’architecture en place, notamment au niveau des relations d’approbations entre les différents domaines et arbres. Si vous créez un groupe à étendue universelle, mais qu’il n’y a pas de relation avec un autre domaine ou une autre forêt, cela n’aura pas d’intérêt.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Exemple</li>
                </ul>
                <p style="margin-top: 30px;">
                    Reprenons l’arborescence que nous avions définie dans le module « Domaine, forêt et arbre », avec les deux domaines « it-connect.local » et « learn-online.local » contenant tous les deux des sous-domaines.</br></br>
                    Imaginons trois groupes et leurs étendues cohérentes :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Comptabilité : étendue « domaine local » sur « paris.it-connect.local »</li>
                    <li>Direction : étendue « globale » sur « learn-online.local » qui approuve tous les sous-domaines</li>
                    <li>Informatique : étendue « universelle » sur la forêt</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start">
                    Ainsi, la portée de ces groupes pourra être schématisée comme ceci au sein de la forêt :
                </p>
                <img src="../../../../../images/ad-14.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="III2">
                    2 - Le type du groupe
                </p>
                <p style="margin-top: 30px;">
                    Maintenant que vous êtes opérationnel sur la compréhension des étendues, nous allons voir le deuxième paramètre proposé lors de la création d’un groupe : le type.</br></br>
                    Il existe deux types :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Sécurité</li>
                </ul>
                <p style="margin-top: 30px;">
                    Les groupes de sécurité sont les plus utilisés et ceux que vous manipulerez le plus souvent. Ils permettent d’utiliser les groupes pour gérer les autorisations d’accès aux ressources.</br></br>
                    Par exemple, si vous avez un partage sur lequel vous souhaitez donner des autorisations d’accès, vous pourrez utiliser un « groupe de sécurité » pour donner des autorisations à tous les membres de ce groupe.</br></br>
                    En résumé, ces groupes sont utilisés pour le contrôle d’accès, ce qui implique que chaque groupe de ce type dispose d’un identifiant de sécurité / Security Identifier « SID ».
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li id="DL">Distribution</li>
                </ul>
                <p style="margin-top: 30px;">
                    L’objectif de ce type de groupe n’est pas de faire du contrôle d’accès, mais plutôt des listes de distribution (DL - Distribution List). Par exemple, créer une liste de distribution d’adresses e-mail en ajoutant des contacts.</br></br>
                    De ce fait, ces groupes sont utilisés principalement par des applications de messagerie, comme Microsoft Exchange.</br></br>
                    Comme il n’y a pas de notion de sécurité, ce type de groupe ne dispose pas d’identifiant de sécurité « SID ».
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Conclusion</li>
                </ul>
                <p style="margin-top: 30px;">
                    Finalement, vous ne devez pas être étonné des définitions données ci-dessus quant aux deux types de groupe disponibles, car les noms sont assez explicites.
                </p>
                <img src="../../../../../images/ad-15.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Il est à noter qu’il est possible de convertir à tout moment un groupe de sécurité en groupe de distribution, et vice-versa. Cependant, le niveau fonctionnel du domaine doit être au minimum « Windows Server 2000 natif » mais de nos jours, il est quasiment « impossible » de ne pas l’être.
                </p>
                <p style="margin-top: 40px; margin-left: 20px; justify-content: start" id="III3">
                    3 - Les groupes par défaut
                </p>
                <p style="margin-top: 30px;">
                    Lors de la création d’un domaine et de la création de l’annuaire Active Directory, différents groupes sont déjà présents, mais alors, à quoi servent-ils ? Intéressons-nous aux groupes intégrés, spéciaux et prédéfinis.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>
                        Les groupes intégrés (« Built-in ») : </br></br>
                        Ce sont des groupes qui permettent d’assigner des autorisations d’administration, de façon générale ou sur des fonctionnalités précises afin de gérer la sécurité finement. Ces groupes sont directement intégrés et stockés dans l’annuaire Active Directory au sein du container « Builtin » accessible de la console « Utilisateurs et ordinateurs Active Directory ». Leur étendue est toujours de type local.</br></br>
                        Par exemple, le groupe « Administrateurs Hyper-V » donnera un accès complet et illimité à toutes les fonctionnalités liées à Hyper-V. Autre exemple, le groupe « Opérateurs de sauvegarde » permet d’accéder aux fonctionnalités de sauvegarde et de restauration des fichiers.
                    </li>
                </ul>
                <img src="../../../../../images/ad-16.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Console Utilisateurs et ordinateurs Active Directory
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>
                        Les groupes spéciaux : Seul le système à la main sur ces groupes, qui sont pratique et qui permettent d’englober les utilisateurs à différentes échelles. On trouve par exemple les groupes « Tout le monde » et « Utilisateurs authentifiés ».</br></br>
                        Ces groupes peuvent être utilisés pour définir du contrôle d’accès (exemple : donner accès aux utilisateurs authentifiés l’accès à un partage).</br></br>
                        Par ailleurs, il n’est pas possible de gérer les membres de ces groupes, le système gère ces groupes en exclusivité.
                    </li>
                    <li style="margin-top: 30px;">
                        Les groupes prédéfinis : On les trouve dans l’unité d’organisation « Users » au sein de la console « Utilisateurs et ordinateurs Active Directory ». Ces groupes prédéfinis sont là en complément des groupes intégrés, sauf que pour eux il y a différents niveaux d’étendues qui sont prédéfinies et qu’on ne peut pas modifier.
                    </li>
                </ul>
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
    
        <?php // Creation du Treeview en JS ?>
        <script src="../../../../../static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="../../../../../static/js/tree.js"></script>
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
    <?php require_once('../../../../../footer.php'); ?>
</html>