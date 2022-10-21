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
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Modèle OSI - Couche 5 à 7 : Le service web</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle Client-Serveur</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le service web</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le service web
                </h1>
                <p style="margin-top: 30px;">
                    Le service que nous allons voir maintenant n'est pas indispensable au fonctionnement des réseaux, mais il est aujourd'hui le fondement même d'Internet : le web.
                    Nous allons voir dans ce chapitre comment mettre en place un serveur web et le configurer.</br></br>
                    Principe du web</br>
                    Le fonctionnement du web s'appuie sur le protocole applicatif HTTP.
                    Comme les autres protocoles que nous avons étudiés, HTTP a un mode de fonctionnement bien spécifique.
                    Ce qui nous intéresse aujourd'hui, c'est surtout de savoir utiliser la navigation, mais pas de la comprendre en détail, du moins pas pour l'instant.</br></br>
                    Le protocole HTTP</br>
                    Plutôt que d'essayer de comprendre en détail le protocole HTTP, nous allons voir ce qu'il permet de faire.
                    Vous savez qu'une page web est composée de balises HTML.
                    Le principe du protocole HTTP est de transporter ces pages HTML, et potentiellement quelques informations supplémentaires.
                    Le serveur web met donc à disposition les pages web qu'il héberge, et le protocole HTTP les transporte sur le réseau pour les amener au client.</br>
                    Nous allons donc mettre en œuvre un serveur web qui permettra de mettre à disposition des internautes nos pages web !</br></br>
                    Les différents serveurs web</br>
                    Il existe de nombreux serveurs web sur le marché.
                    Le plus connu est Apache et il est utilisé par une majorité de sites sur Internet.
                    Voici l'utilisation des différents serveurs à travers le monde :
                </p>
                <img src="../../../../images/various-web-servers.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Serveurs web les plus utilisés (source: W3techs.com)
                </p>
                <p style="margin-top: 30px;">
                    Toutefois, si l'on regarde plus précisément les évolutions des serveurs, on se rend compte que la tendance n'est pas à la progression pour Apache :
                </p>
                <img src="../../../../images/web-server-developers.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Graph représentant l'utilisation des serveurs web (source: netcraft)
                </p>
                <p style="margin-top: 30px;">
                    Le serveur nginx a notamment vécu une très belle progression, car il offre des performances souvent meilleures qu'Apache.</br>
                    Cependant, pour notre mise en place, nous allons opter pour Apache qui reste le serveur numéro un. Vous pourrez si vous le souhaitez essayer un autre serveur, comme nginx, mais la configuration est souvent très différente d'un serveur à l'autre.
                </p>
                <p style="margin-top: 50px;">
                    <b>Mise en place et configuration</b>
                </p>
                <p style="margin-top: 30px; justify-content: start;">
                    Installation et configuration d'Apache</br></br>
                    Installation d'Apache</br></br>
                    1. Sous Ubuntu/Debian, téléchargez le serveur HTTP Apache depuis le site ci-dessus et décompressez-le :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache1'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    2. De la même façon, téléchargez et décompressez les sources de PHP :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache2'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    'NN' devra être remplacé par la version spécifique à utiliser.</br></br>        
                    3. Compilez et installez Apache. Consultez la documentation sur l'installation d'Apache pour plus de détails quant à la compilation de ce logiciel.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache3'?></code></pre>
                <p style="margin-top: 30px;">
                    4. Maintenant que vous avez Apache 2.x.NN de disponible sous /usr/local/apache2, configurez-le avec le support pour le chargement de modules, ainsi que le MPM prefork standard. Pour tester votre installation, utilisez la procédure normale pour démarrer le serveur Apache, i.e. :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache4'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    et arrêtez-le pour continuer dans la configuration de PHP :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache5'?></code></pre>
                <p style="margin-top: 30px;">
                    5. Maintenant, configurez et compilez PHP. Ce sera à ce moment-là où vous pourrez personnaliser PHP avec les diverses options disponibles, comme la liste des extensions à activer. Dans notre exemple, nous effectuerons une configuration simple, avec Apache 2 et le support MySQL.</br></br>
                    Si vous avez construis Apache depuis les sources, tel que décrit ci-dessus, l'exemple suivant devrait être correct concernant les chemins vers les apxs, mais si vous avez installé Apache d'une autre façon, vous devrez prendre en compte vos spécificités et ajustez les chemins apxs en conséquent. Notez que suivants les distributions, vous pourriez être amené à renommer apxs en apxs2.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache6'?></code></pre>
                <p style="margin-top: 30px;">
                    Si vous décidez de modifier les options de configuration après l'installation, vous devrez exécuter de nouveau les étapes "configure", "make" et "make install". Vous n'aurez alors qu'à redémarrer Apache pour que le nouveau module prenne effet. Une re-compilation d'Apache n'est pas nécessaire.
                    Notez que, sauf indications contraires, l'étape "make install" installera également PEAR, mais aussi divers outils PHP comme phpsize, PHP CLI et bien plus encore.</br></br>
                    6. Setup your php.ini
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache7'?></code></pre>
                <p style="margin-top: 30px;">
                    Vous devez éditer le fichier .ini pour définir les options PHP. Si vous préférez placer ce fichier dans un autre répertoire, utilisez l'option --with-config-file-path=/some/path à l'étape 5.</br>
                    Si vous choisissez le fichier php.ini-production, assurez-vous de lire la liste des modifications correspondante car il peut affecter considérablement la façon dont PHP fonctionnera.</br></br>
                    7. Éditez le fichier httpd.conf pour charger le module PHP. Le chemin spécifié à droite de la chaîne LoadModule, doit correspondre au chemin système du module PHP. L'étape "make install" ci-dessus devrait avoir réalisé cette opération à votre place, mais une simple vérification permettra de s'en assurer.</br></br>
                    Pour PHP 8:
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache8'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    Pour PHP 7:
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache9'?></code></pre>
                <p style="margin-top: 30px;">
                    8. Dites à Apache d'analyser certaines extensions comme étant des scripts PHP. Par exemple, laissez Apache passer à PHP les fichiers dont l'extension est .php. Au lieu d'utiliser seulement la directive AddType d'Apache, nous souhaitons éviter tout risque potentiellement dangereux, lors d'un téléchargement de de la création de fichier comme exploit.php.jpg, d'exécution PHP. En utilisant cette exemple, vous pouvez avoir n'importe quelle extension d'analyser par PHP. Nous avons ajouté .php pour l'exemple.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache10'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    9. Utilisez la procédure normale pour démarrer le serveur Apache, i.e. :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache11'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    Ou
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache12'?></code></pre>
                <p style="margin-top: 30px;">
                    Si vous avez suivi les étapes précédentes, vous avez maintenant un serveur web Apache2 fonctionnel avec le support PHP comme module SAPI. Bien-sûr, il y a une multitude d'autres options de configuration de disponibles avec Apache et PHP. Pour plus d'informations, entrez la commande ./configure --help dans l'arbre source correspondant.</br></br>
                    Vous pourrez, par la suite, installer un serveur de bases de données mysql si vous le souhaitez. Il faudra alors aussi installer les modules nécessaires pour que PHP5 et mysql puissent dialoguer ensemble.</br></br>
                    Notre serveur étant installé, nous allons vérifier qu'il est bien en écoute :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache13'?></code></pre>
                <p style="margin-top: 30px;">
                    Le service est bien en écoute, nous pouvons tester pour voir ce qui est présenté. Pour cela, nous allons simplement faire pointer notre navigateur sur l'adresse IP de notre machine virtuelle :
                </p>
                <img src="../../../../images/apache-default-page.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Page d'Apache par défaut
                </p>
                <p style="margin-top: 30px;">
                    Nous voyons bien la page par défaut du serveur Apache, ça marche !</br>
                    Nous allons maintenant regarder comment configurer notre serveur pour pouvoir afficher nos propres sites web.</br></br>
                    Configuration d'Apache2</br>
                    Comme habituellement sous Unix, les fichiers de configuration se trouvent dans le répertoire /etc. Pour Apache2, ils sont dans le répertoire apache2.</br>
                    Regardons le contenu de ce répertoire :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache14'?></code></pre>
                <p style="margin-top: 30px;">
                    Nous voyons ici différents fichiers et répertoires plus ou moins importants. Nous allons les parcourir.</br></br>
                    Tout d'abord, il faut savoir qu'avant Apache2 il y avait Apache et qu'à peu près toutes les informations de configuration étaient dans un seul et unique fichier, httpd.conf.</br>
                    Cela posait quelques problèmes, car ce fichier devenait un peu un fourre-tout dans lequel il était difficile de savoir où certaines informations étaient situées et s'il n'y avait pas des informations redondantes.</br></br>
                    Pour Apache2, ce fichier de configuration a été séparé en plusieurs parties.</br>
                    Le point de départ est le fichier apache2.conf.</br></br>
                    Ce fichier contient un certain nombre de directives importantes, ainsi que les inclusions (Includes) des autres fichiers de configuration.</br>
                    Cependant, il n'y a pas de directives qui nous intéressent dans ce fichier. Si vous souhaitez vous spécialiser dans l'utilisation d'Apache et comprendre chacun des directives, la documentation officielle vous tend les bras.</br></br>
                    Par contre, les includes en fin de fichier nous donnent une idée des parties de la configuration qui sont en dehors de apache2.conf, et qui vont pouvoir nous intéresser :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache15'?></code></pre>
                <p style="margin-top: 30px;">
                    Nous voyons d'abord l'inclusion de modules.</br>
                    En effet, Apache est un service modulaire. Cela veut dire que l'on peut lui ajouter des modules qui viennent lui ajouter des fonctionnalités particulières.</br>
                    Par exemple, Apache peut jouer le rôle de proxy. Pour cela, il faut lui ajouter le module mod_proxy.</br></br>
                    On peut ainsi ajouter toutes sortes de fonctionnalités à Apache.</br></br>
                    Nous avons deux lignes includes pour les modules :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache16'?></code></pre>
                <p style="margin-top: 30px;">
                    Ceci nous indique qu'Apache va prendre en compte les fichiers .load et .conf situés dans le répertoire mods-enabled (qui est lui-même dans /etc/apache2, puisque c'est notre répertoire de travail).</br></br>
                    Allons donc voir ce qui est contenu dans le répertoire mods-enabled :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache17'?></code></pre>
                <p style="margin-top: 30px;">
                    Les plus avertis d'entre vous auront remarqué que tous ces fichiers ne sont que des liens vers d'autres fichiers qui sont situés dans ../mods-available/.</br></br>
                    Pour les utilisateurs habitués de Windows, les liens sous Unix sont comme les raccourcis sous Windows.</br></br>
                    En fait, le répertoire mods-enabled ne contient que des liens. Ces liens pointent vers les vrais fichiers qui sont contenus dans mods-available.</br></br>
                    Nous venons de découvrir le fonctionnement modulaire d'Apache2.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Tous les modules sont installés dans mods-available.</li>
                    <li>On crée des liens vers ces fichiers dans mods-enabled.</li>
                    <li>Seul le répertoire mods-enabled est lu par la configuration d'Apache.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Ce mode de fonctionnement nous permettra très facilement de désactiver ou d'activer un module pour Apache2. Il suffira de créer un lien vers le module ou au contraire de l'effacer.</br></br>
                    Vous pouvez faire cela à la main, ou utiliser la commande a2enmod.</br></br>
                    Donc, pour installer un module, vous avez deux choix :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'installer avec la commande apt-get install nom_module ;</li>
                    <li>récupérer les fichiers .conf et .load et les mettre dans le répertoire mods-available, puis créer des liens vers ces fichiers dans mods-enabled.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start;">
                    Vous savez donc maintenant installer, désactiver ou activer un module.</br></br>
                    Nous allons passer à la suite des includes de notre fichier apache2.conf.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache18'?></code></pre>
                <p style="margin-top: 30px;">
                    Là, il s'agit simplement de conserver ce qui pouvait exister historiquement, mais ce fichier est vide par défaut.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache19'?></code></pre>
                <p style="margin-top: 30px;">
                    Ce fichier va indiquer sur quel port notre serveur doit écouter. Par défaut, il s'agit du port 80, mais cela peut être modifié si vous le souhaitez (mais vous ne voudriez pas outrepasser une norme, n'est-ce pas ?)</br></br>
                    Il y a ensuite quelques informations sur le format des logs du service et le répertoire conf.d qui peut comprendre des attributs de configuration particuliers, mais cela ne nous intéresse pas ici.</br></br>
                    Et enfin une dernière partie très importante qui concerne les virtualhosts :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache20'?></code></pre>
                <p style="margin-top: 30px;">
                    Le virtualhost est une notion très importante dans Apache2. C'est ce qui nous permet de faire tourner plusieurs sites sur le même serveur Apache2.
                    Vous pouvez avoir un serveur web qui présente plusieurs sites web, comme www.lalitte.com et www.mailforkids.net qui sont deux sites différents, mais hébergés sur le même serveur Apache2.</br></br>
                    Nous allons donc regarder ce qui est contenu dans le répertoire sites-enabled.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache21'?></code></pre>
                <p style="margin-top: 30px;">
                    Un seul fichier ici ! Enfin, un lien plus exactement, mais nous connaissons le principe maintenant, qui est le même que pour les modules avec un répertoire sites-available qui contient les fichiers et le répertoire sites-enabled qui contient les liens vers les fichiers dans sites-available.</br>
                    Ce fichier est le fichier de configuration par défaut de nos virtualhosts. C'est lui qui sera utilisé par défaut pour toute requête web arrivant à notre serveur.</br>
                    Regardons son contenu :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache22'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    Nous n'avons besoin de comprendre que quelques éléments pour l'instant.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache23'?></code></pre>
                <p style="margin-top: 30px;">
                    Ceci indique le début d'une directive de configuration Apache et notamment le début d'un virtualhost qui sera en écoute sur le port 80.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache24'?></code></pre>
                <p style="margin-top: 30px;">
                    Le DocumentRoot est très important. C'est ce qui va indiquer au serveur Apache2 où vont se situer les pages de notre site web. Dans notre cas, comme dans la majorité des cas, la racine de notre site web se situera dans /var/www/.</br>
                    D'ailleurs, nous pouvons aller voir le contenu de ce répertoire :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache25'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    Il ne contient qu'un fichier index.html. Allons voir son contenu :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache26'?></code></pre>
                <p style="margin-top: 30px;">
                    Cela correspond bien à ce que nous avons vu tout à l'heure sur la page web !</br>
                    Nous pouvons essayer de faire une modification et de voir le résultat.
                    Éditez le fichier index.html et mettez-y ce que vous voulez !</br></br>
                    Utilisation des virtualhosts</br>
                    Nous allons essayer de présenter deux sites différents sur notre serveur.</br></br>
                    Mais comment Apache saura différencier ces deux sites et saura lequel présenter lors d'une requête sur le port 80 ?</br></br>
                    En fait, il y a plusieurs façons de faire des virtualhosts, mais nous allons nous baser sur la plus répandue en utilisant des noms de domaine différents pour nos sites.</br></br>
                    Nous allons créer les sites toto.com et tutu.com.</br>
                    Ainsi, quand une requête arrivera, Apache2 pourra savoir si la demande est pour toto.com ou tutu.com.</br></br>
                    Configuration du DNS</br>
                    Dans la vraie vie, vous devez acheter un domaine pour qu'il devienne accessible sur Internet.</br>
                    Dans notre cas, je ne vais pas vous faire dépenser de l'argent pour un exemple. Nous allons plutôt utiliser une petite astuce qui pourra vous être utile pour beaucoup d'autres choses.</br></br>
                    Nous allons utiliser une fonctionnalité qui permet de court-circuiter le fonctionnement normal du DNS grâce au fichier hosts.</br></br>
                    Le fichier hosts est un fichier présent sur tous les systèmes, qui permet d'indiquer des associations entre nom de machine et adresse IP qui seront prioritaires par rapport au DNS.</br></br>
                    Par exemple, si j'écris:</br>
                    192.168.0.1   www.google.fr</br></br>
                    La prochaine fois que j'essaierai d'aller vers www.google.fr, ma machine pensera que le serveur de Google se trouve à l'adresse 192.168.0.1 et enverra la requête à cette adresse.</br></br>
                    Nous allons donc modifier notre fichier hosts pour y ajouter des associations pour www.toto.com et www.tutu.com.</br></br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Sous Unix, le fichier hosts se trouve dans /etc.</li>
                    <li>Sous Windows, il se trouve dans C:\Windows\System32\drivers\etc\.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Donc sur notre Debian, nous allons éditer le fichier hosts et ajouter deux lignes en haut du fichier :</br>
                    192.168.0.1   www.toto.com</br>
                    192.168.0.1   www.tutu.com</br></br>
                    Désormais, dès lors que notre machine voudra accéder à un de ces deux sites, elle accédera à... elle-même.</br></br>
                    Configuration des virtualhosts.</br>
                    Comme on l'a vu précédemment, les virtualhosts se configurent dans sites-available/.</br>
                    Nous allons donc créer deux nouveaux fichiers pour nos deux virtualhosts. Pour cela, nous allons simplement copier le fichier default, et modifier le contenu des fichiers copiés.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache27'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Ensuite, nous allons simplement modifier trois choses et ajouter :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>une directive ServerName pour indiquer le nom de notre virtualhost ;</li>
                    <li>le DocumentRoot qui précise où se situent nos pages ;</li>
                    <li>et enfin la balise Directory pour y indiquer notre nouveau chemin.</li>
                </ul>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache28'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Nous faisons de même pour tutu.com.</br>
                    Il nous reste encore à activer ces virtualhosts dans sites-enabled/.
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache29'?></code></pre>
                <p style="margin-top: 30px;">
                    Le . indique le répertoire courant. Donc ici, nous allons créer un lien dans le répertoire courant qui pointera vers le fichier toto.com. Notre lien s'appellera donc sites-enabled/toto.com.</br></br>
                    Nos virtualhosts sont prêts, il ne nous reste plus qu'à créer les répertoires et pages de nos sites :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache30'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Nos virtualhosts sont maintenant effectifs.</br></br>
                    Nous avons donc réussi à présenter deux sites différents sur un seul et même serveur Apache2.</br></br>
                    Nous allons maintenant voir deux cas différents de configuration qui permettent de placer les pages de vos sites en dehors de /var/www/.</br></br>
                    Un répertoire venu d'ailleurs</br>
                    Imaginons que vous avez mis en place votre propre serveur web et que vous avez réalisé une page web présentant votre famille sur le nom de domaine que vous avez acheté www.mafamille.com.
                    Votre petite sœur vient vous voir et aimerait bien mettre en place un site pour elle pour présenter ses hobbies.</br>
                    Maintenant que vous savez faire des virtualhosts, vous pourriez tout à fait créer le nom de domaine petitesoeur.mafamille.com et faire un virtualhost pour ce site.
                    Cependant, vous trouvez plus intéressant de faire un site du type www.mafamille.com/masoeur.</br>
                    Ainsi, vous pourriez faire pareil pour tous les membres de la famille.</br></br>
                    Cependant, si vous faites comme cela, vous devrez donner accès au répertoire /var/www/ à votre sœur, ce qui ne vous emballe pas trop si elle y fait des bêtises.</br></br>
                    Il existe une solution simple. Vous pouvez tout à fait laisser un accès complet à un répertoire pour votre sœur, et faire un raccourci de ce répertoire dans /var/www/.</br></br>
                    Essayez par exemple de créer une page web dans /home/user/ :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache31'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Vous pouvez alors créer un lien de ce répertoire dans /var/www :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache32'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Désormais, si vous allez sur le site www.mafamille.com/masoeur/ vous allez tomber sur la page de votre petite sœur !
                    Et ceci, sans qu'elle mette à mal toutes les pages que vous avez mis du temps à créer.
                </p>
                <p style="margin-top: 30px;">
                    Votre site a prospéré et vous hébergez maintenant une bonne dizaine de virtualhosts, pour votre voisin, votre école, votre club de bridge, etc.</br>
                    Vous avez même créé une page qui donne des statistiques sur l'utilisation générale de votre serveur Apache2 : le nombre de pages lues, le nombre de sites, etc.</br>
                    Vous aimeriez maintenant que cette page puisse être accessible sur chacun des différents virtualhosts que vous possédez.</br></br>
                    Une façon de faire serait de dupliquer la page sur chacun des virtualhosts, mais ce serait lourd et devrait être répété à chaque nouveau site créé. Il y a cependant une solution simple, grâce aux alias.</br></br>
                    Un alias permet de faire correspondre une partie de l'URL à un chemin particulier dans l'arborescence.</br></br>
                    Par exemple, je peux dire que si j'indique dans mon URL messtats/, qui n'est pas un répertoire dans /var/www/, le navigateur sera redirigé vers le répertoire /home/messtats/.</br>
                    Ainsi, www.toto.com/messtats/ ou www.tutu.com/messtats/ pointeront vers la même page.</br></br>
                    Les alias peuvent se configurer grâce au module alias.</br></br>
                    Nous allons tester cela en modifiant le fichier /etc/apache2/mods-available/alias.conf pour ajouter une ligneAlias /test/ /home/user/:
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/apache33'?></code></pre>
                <p style="margin-top: 30px;">
                    Relancez Apache2 et mettez-vous sur l'URL www.toto.com/test/.</br></br>
                    Si tout se passe bien, vous allez vous retrouver sur la page de votre petite sœur !</br>
                    Et de même pour www.tutu.com/test/ ou 192.168.01/test/.</br></br>
                    Nous avons pu ainsi créer une page, ou un répertoire, accessible depuis n'importe lequel de nos virtualhosts.
                </p>

                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
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
                    <a href="https://httpd.apache.org/docs/2.4/install.html" target="_blank">apache.org - Compilation et installation</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.php.net/manual/fr/install.unix.apache2.php" target="_blank">php.net - Apache 2.x sur les systèmes Unix</a>
                </h6>

                

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>