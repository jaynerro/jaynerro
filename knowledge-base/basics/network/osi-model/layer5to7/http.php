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
    <title>Modèle OSI - Couche 5 à 7 : HTTP</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 5 à 7</p></li>
                            <li class="breadcrumb-item active" aria-current="page">HTTP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    HTTP
                </h1>
                <p style="margin-top: 30px;">
                    L’Hypertext Transfer Protocol, généralement abrégé HTTP, littéralement « protocole de transfert hypertexte », est un protocole de communication client-serveur développé pour le World Wide Web. HTTPS (avec S pour secure, soit « sécurisé ») est la variante sécurisée par le chiffrement et l'authentification.</br></br>
                    HTTP est un protocole de la couche application dans le modèle OSI. Il peut fonctionner sur n'importe quelle connexion fiable. Dans les faits on utilise le protocole TCP comme couche de transport. Un serveur HTTP utilise alors par défaut le port 80 (443 pour HTTPS).</br></br>
                    Les clients HTTP les plus connus sont les navigateurs Web.</br></br>
                    HTTP a été inventé par Tim Berners-Lee avec les adresses Web et le langage HTML pour créer le World Wide Web.
                    À cette époque, le File Transfer Protocol (FTP) était déjà disponible pour transférer des fichiers, mais il ne supportait pas la notion de format de données telle qu'introduite par Multipurpose Internet Mail Extensions (MIME). 
                    La première version de HTTP était très élémentaire, mais prévoyait déjà le support d'en-têtes MIME pour décrire les données transmises.</br>
                    Cette première version reste encore partiellement utilisable de nos jours, connue sous le nom de HTTP/0.9.
                </p>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Implémentation</b>
                </p>
                <p style="margin-top: 30px;">
                    Méthodes</br></br>
                    Dans le protocole HTTP, une méthode est une commande spécifiant un type de requête, c'est-à-dire qu'elle demande au serveur d'effectuer une action. En général l'action concerne une ressource identifiée par l'URL (Uniform Resource Locator) qui suit le nom de la méthode.</br>
                    Dans l'illustration ci-dessous, une requête GET est envoyée pour récupérer la page d'accueil wikipedia :
                </p>
                <img src="../../../../../images/http-request.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http'?></code></pre>
                <p style="margin-top: 30px;">
                    Il existe de nombreuses méthodes, les plus courantes étant GET, HEAD et POST :</br></br>
                    GET</br>
                    C'est la méthode la plus courante pour demander une ressource. Une requête GET est sans effet sur la ressource, il doit être possible de répéter la requête sans effet.</br></br>
                    HEAD</br>
                    Cette méthode ne demande que des informations sur la ressource, sans demander la ressource elle-même.</br></br>
                    POST</br>
                    Cette méthode est utilisée pour transmettre des données en vue d'un traitement à une ressource (le plus souvent depuis un formulaire HTML). L'URI fourni est l'URI d'une ressource à laquelle s'appliqueront les données envoyées. Le résultat peut être la création de nouvelles ressources ou la modification de ressources existantes. À cause de la mauvaise implémentation des méthodes HTTP (pour Ajax) par certains navigateurs (et la norme HTML qui ne supporte que les méthodes GET et POST pour les formulaires), cette méthode est souvent utilisée en remplacement de la requête PUT, qui devrait être utilisée pour la mise à jour de ressources. (Définition de L'URI à la fin de la page)
                    OPTIONS</br>
                    Cette méthode permet d'obtenir les options de communication d'une ressource ou du serveur en général.</br></br>
                    CONNECT</br>
                    Cette méthode permet d'utiliser un proxy comme un tunnel de communication.</br></br>
                    TRACE</br>
                    Cette méthode demande au serveur de retourner ce qu'il a reçu, dans le but de tester et effectuer un diagnostic sur la connexion.</br></br>
                    PUT</br>
                    Cette méthode permet de remplacer ou d'ajouter une ressource sur le serveur. L'URI fourni est celui de la ressource en question.</br></br>
                    PATCH</br>
                    Cette méthode permet, contrairement à PUT, de faire une modification partielle d'une ressource.</br></br>
                    DELETE</br>
                    Cette méthode permet de supprimer une ressource du serveur.</br></br>
                    Ces 3 dernières méthodes nécessitent généralement un accès privilégié.</br></br>
                    Du client au serveur</br>
                    La liaison entre le client et le serveur n'est pas toujours directe, il peut exister des machines intermédiaires servant de relais :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Un proxy (ou serveur mandataire) peut modifier les réponses et requêtes qu'il reçoit et peut gérer un cache des ressources demandées.</li>
                    <li>Une passerelle (ou gateway) est un intermédiaire modifiant le protocole utilisé.</li>
                    <li>Un tunnel transmet les requêtes et les réponses sans aucune modification, ni mise en cache.</li> 
                </ul>
                <p style="margin-top: 50px; justify-content: start">
                    <b>Versions</b>
                </p>
                <p style="margin-top: 30px;">
                    HTTP 0.9</br>
                    Au début du World Wide Web, il était prévu d'ajouter au protocole HTTP des capacités de négociation de contenu, en s'inspirant notamment de MIME. En attendant, le protocole HTTP 0.9 était extrêmement simple.
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>connexion du client HTTP</li>
                    <li>envoi d'une requête de méthode GET</li>
                    <li>réponse du serveur HTTP</li>
                    <li>le serveur ferme la connexion pour signaler la fin de la réponse.</li>
                </ol>
                <p style="margin-top: 30px; justify-content: start">
                    Requête :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http1'?></code></pre>
                <p style="margin-top: 30px;">
                    La méthode GET est la seule possible. Le serveur reconnaît qu'il a affaire à une requête HTTP 0.9 au fait que la version n'est pas précisée à la suite de l'URI.</br></br>
                    Réponse :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http2'?></code></pre>
                <p style="margin-top: 30px;">
                    Pour répondre à une requête HTTP 0.9, le serveur envoie directement le contenu de la réponse, sans métadonnées. Il ne doit jamais se comporter ainsi pour les requêtes HTTP de version supérieure.
                    Inutile de chercher les versions inférieures à 0.9 du protocole HTTP : elles n'existent pas, car HTTP 0.9 n'avait initialement pas de numéro de version. Il a fallu lui en attribuer un quand HTTP 1.0 est arrivé.
                </p>
                <p style="margin-top: 30px;">
                    HTTP 1.0</br>
                    Le protocole HTTP 1.0, décrit dans la RFC 1945, prévoit l'utilisation d'en-têtes spécifiés dans la RFC 822. La gestion de la connexion reste identique à HTTP 0.9 : le client établit la connexion, envoie une requête, le serveur répond et ferme immédiatement la connexion.</br></br>
                    Une requête HTTP présente le format suivant :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http3'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Les réponses HTTP présentent le format suivant :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http4'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Requête :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http5'?></code></pre>
                <p style="margin-top: 30px;">
                    La version du protocole HTTP est précisée à la suite de l'URI. La requête doit être terminée par un double retour à la ligne (CRLFCRLF). HTTP 1.0 supporte aussi les méthodes HEAD et POST. On constate l'usage d'en-têtes inspirés de MIME pour transférer les métadonnées :</br></br>
                    Host</br>
                    Permet de préciser le site web concerné par la requête, ce qui est nécessaire pour un serveur hébergeant plusieurs sites à la même adresse IP (name based virtual host, hôte virtuel basé sur le nom). C'est le seul en-tête réellement important.</br></br>
                    Referer</br>
                    Indique l'URI du document qui a donné un lien sur la ressource demandée. Cet en-tête permet aux webmasters d'observer d'où viennent les visiteurs.</br></br>
                    User-Agent</br>
                    Indique le logiciel utilisé pour se connecter. Il s'agit généralement d'un navigateur web ou d'un robot d'indexation.</br></br>
                    Réponse :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/http6'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    La première ligne donne le &nbsp; <a href="https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP" target="_blank"> code de statut HTTP </a> &nbsp; (200 dans ce cas).
                </p>
                <p style="margin-top: 30px;">
                    Date</br>
                    Moment auquel le message est généré.</br></br>
                    Server</br>
                    Indique quel modèle de serveur HTTP répond à la requête.</br></br>
                    Content-Type</br>
                    Indique le type MIME de la ressource.</br></br>
                    Content-Length</br>
                    Indique la taille en octets de la ressource.</br></br>
                    Expires</br>
                    Indique le moment après lequel la ressource devrait être considérée obsolète ; permet aux navigateurs Web de déterminer jusqu'à quand garder la ressource en mémoire cache.</br></br>
                    Last-Modified</br>
                    Indique la date de dernière modification de la ressource demandée.
                </p>
                <p style="margin-top: 30px;">
                    HTTP 1.1</br>
                    Le protocole HTTP 1.1 est décrit par le RFC 2616 qui rend le RFC 2068 obsolète. La différence avec HTTP 1.0 est une meilleure gestion du cache. L'en-tête Host devient obligatoire dans les requêtes.</br></br>
                    Les soucis majeurs des deux premières versions du protocole HTTP sont d'une part le nombre important de connexions lors du chargement d'une page complexe (contenant beaucoup d'images ou d'animations) et d'autre part le temps d'ouverture d'une connexion entre client et serveur (l'établissement d'une connexion TCP prend un temps triple de la latence entre client et serveur). Des expérimentations de connexions persistantes ont cependant été effectuées avec HTTP 1.0 (notamment par l'emploi de l'en-tête Connection: Keep-Alive), mais cela n'a été définitivement mis au point qu'avec HTTP 1.1.</br>
                    Par défaut, HTTP 1.1 utilise des connexions persistantes, autrement dit la connexion n'est pas immédiatement fermée après une requête, mais reste disponible pour une nouvelle requête. On appelle souvent cette fonctionnalité keep-alive. Il est aussi permis à un client HTTP d'envoyer plusieurs requêtes sur la même connexion sans attendre les réponses. On appelle cette fonctionnalité pipelining. La persistance des connexions permet d'accélérer le chargement de pages contenant plusieurs ressources, tout en diminuant la charge du réseau.</br>
                    La gestion de la persistance d'une connexion est gérée par l'en-tête Connection.</br>
                    HTTP 1.1 supporte la négociation de contenu. Un client HTTP 1.1 peut accompagner la requête pour une ressource d'en-têtes indiquant quels sont les langues et formats de données préférés. Il s'agit des en-têtes dont le nom commence par Accept-.</br>
                    Les en-têtes supplémentaires supportés par HTTP 1.1 sont :</br></br>
                    Connection</br>
                    Cet en-tête peut être envoyé par le client ou le serveur et contient une liste de noms spécifiant les options à utiliser avec la connexion actuelle. Si une option possède des paramètres ceux-ci sont spécifiés par l'en-tête portant le même nom que l'option (Keep-Alive par exemple, pour spécifier le nombre maximum de requêtes par connexion). Le nom close est réservé pour spécifier que la connexion doit être fermée après traitement de la requête en cours.</br></br>
                    Accept</br>
                    Cet en-tête liste les types MIME de contenu acceptés par le client. Le caractère étoile * peut servir à spécifier tous les types / sous-types.</br></br>
                    Accept-Charset</br>
                    Spécifie les encodages de caractères acceptés.</br></br>
                    Accept-Language</br>
                    Spécifie les langues acceptées.</br></br>
                    L'ordre de préférence de chaque option (type, encodage ou langue) est spécifié par le paramètre optionnel q contenant une valeur décimale entre 0 (inacceptable) et 1 (acceptable) inclus (3 décimales maximum après la virgule), valant 1 par défaut.</br></br>
                    Le support des connexions persistantes doit également fonctionner dans les cas où la taille de la ressource n'est pas connue d'avance (ressource générée dynamiquement par le serveur, flux externe au serveur…).</br></br>
                    Pour cela, l'encodage de transfert nommé chunked permet de transmettre la ressource par morceaux consécutifs en précédant chacun par une ligne de texte donnant la taille de celui-ci en hexadécimal. Le transfert se termine alors par un morceau de taille nulle, où des en-têtes finaux peuvent être envoyés.</br></br>
                    Les en-têtes supplémentaires liés à cet encodage de transfert sont :</br></br>
                    Transfer-Encoding</br>
                    Spécifie l'encodage de transfert. La seule valeur définie par la spécification RFC 26163 est chunked.</br></br>
                    Trailer</br>
                    Liste tous les en-têtes figurant après le dernier morceau transféré.</br></br>
                    TE</br>
                    Envoyé par le client pour spécifier les encodages de contenu supportés (Content-Encoding, ne pas confondre avec Transfer-Encoding car chunked est obligatoirement supporté par les clients et serveurs implémentant le standard HTTP/1.1), et spécifie si le client supporte l'en-tête Trailer en ajoutant trailers à la liste.</br></br>
                </p>
                <p style="margin-top: 30px;">
                    HTTP/2</br>
                    Une nouvelle version d'HTTP, HTTP/2, a été développée au sein du groupe de travail « Hypertext Transfer Protocol Bis » (httpbis) de l'Internet Engineering Task Force, et approuvée comme RFC standard le 18 février 2015. Le développement d'HTTP/2 a débuté à la suite de la création du protocole SPDY proposé par Google afin de réduire le temps de chargement des pages Web. Le groupe de travail httpbis s'était initialement interdit de proposer une nouvelle version d'HTTP, concentrant son activité sur la clarification des spécifications d'HTTP 1.1. 
                    Considérant l'arrivée de SPDY et son adoption rapide sur le Web, avec notamment des implémentations dans deux des principaux navigateurs Web, Google Chrome et Mozilla Firefox, Mark Nottingham, « chair » d'httpbis, a émis l'opinion qu'il était temps d'envisager HTTP/2 et proposé d'amender la charte d'httpbis en ce sens, initiant de fait le développement du nouveau protocole.</br>
                    Après plus de 2 ans de discussions, la RFC est approuvée en février 2015 par le groupe de pilotage de l'IETF, et est publiée en mai 2015.
                </p>
                <p style="margin-top: 30px;">
                    HTTP/3</br>
                    Une nouvelle version d’HTTP, HTTP/3, est la troisième et prochaine version majeure du protocole de transfert hypertexte utilisé pour échanger des informations sur le World Wide Web. Celle-ci repose sur le protocole QUIC (Quick UDP Internet Connections), développé par Google en 2012.</br>
                    La sémantique HTTP est cohérente d'une version à l'autre. En effet, les mêmes méthodes de requête, codes de statut et champs de message sont généralement applicables à toutes les versions.</br>
                    Si HTTP/1 et HTTP/2 utilisent tous deux TCP comme protocole de transport, HTTP/3 quant à lui utilise le protocole QUIC, un protocole de la couche transport qui est plus adapté au Web. Le passage à QUIC vise à résoudre un problème majeur de HTTP/2 appelé "Head-of-line Blocking" grâce à une encapsulation des paquets dans UDP. En effet, avec HTTP/2 reposant sur TCP, une connexion permet d'accéder aux ressources demandées une à une (une seule à la fois). Lorsque l'envoi d’une ressource est perturbé (par exemple par une perte de paquets), la livraison globale des ressources est ralentie. Avec HTTP/3 reposant sur le protocole QUIC, on n’a plus ce problème puisque tous les flux sont indépendants étant encapsulés dans UDP, protocole de transport ne nécessitant pas de connexion.
                </p>
                <p style="margin-top: 60px;">
                    Bonus : URI</br>
                    Un URI, de l'anglais Uniform Resource Identifier, soit littéralement identifiant uniforme de ressource, est une courte chaîne de caractères identifiant une ressource sur un réseau (par exemple une ressource Web) physique ou abstraite, et dont la syntaxe respecte une norme d'Internet mise en place pour le World Wide Web (voir RFC 3986). La norme était précédemment connue sous le terme UDI.</br>
                    L'IETF l'a d'abord défini dans la RFC 2396 en se basant sur des propositions de Tim Berners-Lee (RFC 1630). Mise à jour par la RFC 2732 puis révisée de nombreuses fois sous le titre rfc2396bis, la RFC 3986 définit les URI en janvier 2005.</br>
                    Le sigle URI est généralement utilisé pour désigner une telle chaîne de caractères. Par exemple urn:ietf:rfc:2396 est un URI identifiant la RFC 2396.</br>
                    Les URI sont la technologie de base du World Wide Web car tous les hyperliens du Web sont exprimés sous forme d'URI.</br></br>
                    Principe</br>
                    Un URI doit permettre d'identifier une ressource de manière permanente, même si la ressource est déplacée ou supprimée.</br></br>
                    Application</br>
                    Bien que les URI soient très largement utilisés dans le monde informatique, avec surtout les URL sur Internet, on en retrouve d'autres applications dans le monde réel. Ainsi, le code ISBN, qui est l'identifiant unique d'un livre, permet de retrouver celui-ci depuis n'importe quelle librairie ou bibliothèque, dans le monde entier. On peut considérer également les codes-barres comme une métaphore d'URI dans le monde physique : un code-barres ne localise pas un produit, mais l'identifie (bien qu'il identifie l'ensemble des exemplaires d'un produit, pas chaque exemplaire individuellement, ce qui est le travail du numéro de série, lequel n'est pas systématique, mais réservé aux produits onéreux).</br></br>
                    Un URI peut être de type « locator » ou « name » ou les deux.</br></br>
                    Un Uniform Resource Locator (URL) est un URI qui, outre le fait qu'il identifie une ressource sur un réseau, fournit les moyens d'agir sur une ressource ou d'obtenir une représentation de la ressource en décrivant son mode d'accès primaire ou « emplacement » réseau. Par exemple, l'URL http://www.wikipedia.org/ est un URI qui identifie une ressource (page d'accueil Wikipédia) et implique qu'une représentation de cette ressource (une page HTML en caractères encodés) peut être obtenue via le protocole HTTP depuis un réseau hôte appelé www.wikipedia.org.</br></br>
                    Un Uniform Resource Name (URN) est un URI qui identifie une ressource par son nom dans un espace de noms. Un URN peut être employé pour parler d'une ressource sans que cela préjuge de son emplacement ou de la manière de la référencer. Par exemple, l'URN urn:isbn:0-395-36341-1 est un URI qui, étant un numéro de l'International Standard Book Number (ISBN), permet de faire référence à un livre, mais ne suggère ni où, ni comment en obtenir une copie réelle.</br></br>
                    Relation avec les URL et URN</br>
                    Le point de vue actuel du groupe de travail qui supervise les URI est que les termes URL et URN sont des aspects dépendant du contexte des URI, et que l'on a rarement besoin de faire la distinction entre les deux. Dans les publications techniques, spécialement les normes érigées par l'IETF et le W3C, le terme URL n'a pas été reconnu pendant longtemps, parce qu'il était rarement nécessaire de faire une distinction entre les URL et les URI. Cependant, dans des contextes non techniques et dans les logiciels du World Wide Web, le terme URL reste omniprésent. De plus, le terme adresse web, qui n'a pas de définition formelle, est souvent employé dans des publications non techniques comme synonyme d'URL ou URI, bien qu'il ne se réfère généralement qu'aux protocoles 'HTTP' et 'HTTPS'.</br>
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
                    <a href="https://fr.wikipedia.org/wiki/Hypertext_Transfer_Protocol" target="_blank">Wikipedia - HTTP</a>
                </h6>      
                
                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Liste_des_codes_HTTP" target="_blank">Wikipedia - Liste des codes HTTP</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Sch%C3%A9ma_d%27URI" target="_blank">Wikipedia - Schéma d'URI</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/SPDY" target="_blank">Wikipedia - SPDY</a>
                </h6>
                
                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/QUIC" target="_blank">Wikipedia - QUIC</a>
                </h6>
                
                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Ossification_des_protocoles" target="_blank">Wikipedia - Ossification_des_protocoles</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>