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
    <title>Équipements réseau - Le Switch</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Équipements réseau</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Le Switch</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Le Switch
                </h1>
                <p style="margin-top: 30px;"> 
                    Un switch (ou commutateur en français) est un boîtier sur lequel sont présentes plusieurs prises RJ45 femelles permettant de brancher dessus des machines à l'aide de câbles à paires torsadées. Des images valant mieux que des grands discours, voici, à la figure suivante, un switch.
                </p>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="group col-sm-8">  
                <img src="../../../../images/switch-cisco.jpeg" class="img-fluid float-left" style="max-width: 45%; margin-left: 4%; margin-top: 30px;"/>
                <img src="../../../../images/star-topology-with-switch-example.png" class="img-fluid float-right" style="max-width: 45%; margin-left: 3%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 60px; justify-content:start">
                    Tous les switchs ne se valent pas en termes de caractéristiques, et ils se différencient principalement par :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>le nombre de ports allant de 4 à 96, permettant d’y connecter autant de machines ;</li>
                    <li>le type de port : port RJ45 pour les câbles réseau standard, ou interface optique type SFP+ pour la fibre optique (SFP = Small Form-factor Pluggable). Ce sont les plus courants ;</li>                 
                    <li>le débit possible sur chaque port : de 10 Mbp à 100 Gbp ;</li>
                    <li>les fonctionnalités telles que l’interface de configuration, la compatibilité ou les modes de communication.</li>
                </ul>
                <p style="margin-top: 30px; justify-content:start">
                    Si tout le monde est connecté ensemble, comment le switch sait à qui envoyer la trame ?</b>
                </p>
                <p style="margin-top: 55px;">
                    <b>L'aiguillage des trames</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour envoyer la trame vers la bonne machine, le switch se sert de l'adresse MAC destination contenue dans l'en-tête de la trame.
                    Il contient en fait une table qui fait l'association entre un port du switch et une adresse MAC. Cette table est appelée la table CAM (Content Addressable Memory).</br></br>
                    Prenons un exemple, avec le schéma de la figure suivante.
                </p>
                <img src="../../../../images/switch-example-1.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 30px;"/>
                <p style="margin-top: 30px; justify-content:start">
                    La table CAM de notre switch sera la suivante :
                </p>
                <img src="../../../../images/switch-cam-example-1.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Quand la machine PC0 voudra envoyer une trame à la machine PC2, le switch lira l'adresse destination et saura alors vers quel port renvoyer la trame :
                </p>
                <img src="../../../../images/ethernet-frame-switch-example-1.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame envoyée de PC0 à PC2
                </p>
                <p style="margin-top: 30px;">
                    Le switch va donc envoyer la trame sur le port 3, et elle arrivera bien à la machine PC2 qui est branchée sur ce port, et à elle seule ! </br>
                    Le switch aiguille donc les trames grâce à l'adresse MAC de destination située dans l'en-tête et à sa table CAM qui lui dit sur quel port renvoyer cette trame.</br></br>
                    Comment cette table CAM est fabriquée ? Si je branche une nouvelle machine, comment le switch la connaît ?
                </p>
                <p style="margin-top: 55px;">
                    <b>Mise à jour de la table CAM</b>
                </p>
                <p style="margin-top: 30px;">
                    La table CAM du switch va être fabriquée de façon dynamique. Cela veut dire que le switch va apprendre, au fur et à mesure qu'il voit passer des trames, quelle machine est branchée à quel port. </br>
                    Prenons l'exemple précédent, imaginons que la table CAM du switch est vide et que l'on vient de brancher les machines (voir la figure suivante).
                </p>
                <img src="../../../../images/switch-example-1.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 30px;"/>
                <img src="../../../../images/switch-cam-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table CAM vide
                </p>
                <p style="margin-top: 30px; justify-content:start">
                    Imaginons maintenant que la machine PC0 envoie une trame à la machine PC2.
                </p>
                <img src="../../../../images/ethernet-frame-switch-example-1.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 20px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame envoyée de PC0 à PC2
                </p>
                <ul style="font-size: large; text-align: justify; color: white; margin-top: 30px;">
                    <li>La trame arrive au switch.</li>
                    <li>Il lit l'adresse MAC source et voit l'adresse MAC de la machine PC0.</li>                 
                    <li>Vu que la trame vient du port 1, il met en relation le port 1 et l'adresse MAC de la machine PC0 dans sa table CAM.</li>
                    <li>Il met à jour sa table CAM.</li>
                </ul>
                <img src="../../../../images/switch-cam-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table CAM mise à jour
                </p>
                <p style="margin-top: 30px;">
                    Par contre, l'adresse MAC destination n'est pas présente dans sa table CAM, il ne sait donc pas où envoyer la trame. Pour être sûr que la machine destination va recevoir la trame, il lui suffit de l'envoyer à tout le monde, donc de renvoyer la trame sur tous les ports actifs du switch !</br></br>
                    Attention, ceci n'est pas un broadcast, car l'adresse de destination dans la trame est l'adresse MAC de la machine PC2. La trame est envoyée à tout le monde, mais pas en broadcast.</br></br>
                    La machine PC2 va donc recevoir la trame et va pouvoir répondre à la machine PC0. Elle va donc envoyer une trame à la machine PC0.
                </p>
                <img src="../../../../images/ethernet-frame-switch-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 20px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Trame de réponse envoyée de PC2 à PC0
                </p>
                <ul style="font-size: large; text-align: justify; color: white; margin-top: 30px;">
                    <li>La trame arrive au switch.</li>
                    <li>Il lit l'adresse MAC source et voit l'adresse MAC de la machine PC2.</li>                 
                    <li>Vu que la trame vient du port 3, il met en relation le port 3 et l'adresse MAC de la machine PC2 dans sa table CAM.</li>
                    <li>Il met à jour sa table CAM.</li>
                </ul>
                <img src="../../../../images/switch-cam-example-4.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table CAM mise à jour
                </p>
                <p style="margin-top: 30px; justify-content:start">
                    Et ainsi de suite à chaque fois qu'il voit passer une trame :
                </p>
                <ul style="font-size: large; text-align: justify; color: white; margin-top: 30px;">
                    <li>le switch met à jour sa table CAM quand il voit passer une trame ;</li>
                    <li>le switch envoie une trame à tout le monde s'il n'a pas l'adresse MAC de destination dans sa table CAM.</li>
                </ul>
                <p style="margin-top: 30px; justify-content:start">
                    La table CAM ne va-t-elle jamais cesser de grandir vu que l'on y ajoute en permanence des informations ?
                </p>
                <p style="margin-top: 55px;">
                    <b>Le TTL de la table CAM</b>
                </p>
                <p style="margin-top: 30px;">
                    Le TTL veut dire Time To Live en anglais, soit Durée De Vie. Il représente donc une durée. </br></br>
                    Le principe est de considérer qu'une donnée est valable pendant un certain temps, mais qu'au-delà de ce temps, elle ne l'est plus.</br>
                    Pour une information dans la table CAM, on va considérer qu'elle est valable un certain temps, mais une fois ce temps dépassé, on enlèvera l'information de la table CAM. Ainsi la table CAM sera mise à jour régulièrement et les données les plus anciennes seront effacées.
                </p>
                <img src="../../../../images/switch-cam-example-5.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Table CAM avec TTL
                </p>
                <p style="margin-top: 30px;">
                    Maintenant, si la machine PC0 envoie une trame, le TTL va être remis à jour, car le switch sait que l'information "la machine PC0 est branchée sur le port 1" est une information récente. </br></br>
                    Ainsi, la table CAM du switch se remplira ou se mettra à jour après chaque réception d'une trame, et elle se videra quand elle n'aura pas reçu de trame depuis longtemps. </br></br>
                </p>
                <p style="margin-top: 55px;">
                    <b>Questions complémentaires</b>
                </p>
                <p style="margin-top: 30px;">
                    Le switch peut-il découvrir les adresses MAC des machines sur le réseau ? </br></br>
                    Normalement non. Ce n'est pas son rôle, le switch est un élément passif. D'ailleurs, une machine qui est branchée sur un switch envoie la plupart du temps une trame au réseau quand elle voit que sa carte réseau est branchée, donc le switch la verra et mettra à jour sa table CAM. </br></br>
                    Le switch a-t-il une adresse MAC ? </br></br>
                    Là encore la réponse est non. Personne n'a besoin de parler avec le switch, donc il ne nécessite pas d'adresse MAC. </br>
                    Cependant, certains switchs sont dits « administrables », ce qui veut dire que l'on peut se connecter dessus pour les configurer. Et dans ce cas, ils ont une adresse MAC pour être identifiés sur le réseau.
                </p>
                <p style="margin-top: 45px;">
                    Exemple réel de table CAM
                </p>
                <img src="../../../../images/switch-cam-example-6.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>
                <p style="margin-top: 30px;">
                    On peut remarquer une chose amusante : il y a au moins 5 machines branchées sur le port 4 de mon switch ! </br>
                    C'est possible, en fait je ne peux pas brancher plusieurs machines sur un même port. Par contre, je peux brancher un switch sur le port de mon switch. Et donc toutes les adresses MAC des machines connectées à ce switch seront susceptibles d'apparaître sur le port du premier switch.
                </p>
                <p style="margin-top: 55px;">
                    <b>Trucs et astuces (de vilains...)</b>
                </p>
                <p style="margin-top: 30px;">
                    Connaissant maintenant le fonctionnement d'un switch, comment pensez-vous qu'on puisse faire pour gêner son fonctionnement s'il nous en prend l'envie ? Il y a plusieurs façons de le faire.
                </p>
                <p style="margin-top: 30px;">
                    Méthode 1, saturation par envoi massif intelligent.</br></br>
                    Si l'on envoie des tonnes de trames vers des adresses MAC inexistantes, que se passe-t-il ?</br>
                    Le switch ne sachant pas vers quel port les envoyer, il va les envoyer vers tous les ports actifs... et va donc vite saturer ! </br></br>

                    Méthode 2, saturation de la table CAM.</br></br>
                    Si l'on envoie des tonnes de trames en utilisant à chaque fois une adresse MAC de source différente, que se passe-t-il ?</br>
                    La table CAM du switch va se remplir progressivement. Plus elle sera remplie, plus sa lecture par le switch sera longue, et plus cela induira des temps de latence importants... jusqu'à provoquer l'écroulement du switch. 
                    Quand il sera saturé et n'aura plus le temps de lire sa table CAM, il enverra directement les trames sur tous les ports. Ceci permettrait à un pirate de voir tout le trafic du switch... </br>
                    Cependant, nous verrons par la suite qu'il existe des méthodes bien plus puissantes pour voir le trafic circulant sur un switch.
                </p>
                <p style="margin-top: 55px;">
                    <b>La révolution du switch</b>
                </p>
                <p style="margin-top: 30px;">
                    Par rapport à un hub, un switch permet d'isoler les conversations.</br></br>
                    Le switch a également mis fin au CSMA/CD, puisqu'il n'y a plus de collision. En effet, regardons les cas possibles de plus près.
                </p>
                <img src="../../../../images/switch-example-2.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>
                <p style="margin-top: 30px;">
                    Imaginons que les machines PC0 et PC2 se parlent en même temps : y a-t-il collision ? On peut se dire que, vu que les messages vont être envoyés en même temps, ils vont se superposer. Mais ce serait oublier la structure des câbles à paires torsadées ! </br>
                    En paire torsadée, nous utilisons des fils différents pour la transmission et la réception, donc les messages vont se croiser, mais sur des fils différents ! </br></br>
                    Un schéma plus réel d'un switch serait celui de la figure suivante.
                </p>
                <img src="../../../../images/switch-example-3.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>
                <p style="margin-top: 30px;">
                    On voit bien ici les paires de réception et de transmission différentes. Il n'y a donc pas de collision dans ce cas. </br></br>
                    Observons un autre cas : imaginons avec le schéma précédent que les machines PC0 et PC2 parlent en même temps à la machine PC1. </br>
                    Dans ce cas, les deux messages vont arriver en même temps sur la paire de réception de la machine 24, et badaboum, il y aura collision... ou pas.
                    Ce cas a été prévu et les switchs imaginés en conséquence. </br></br>
                    En fait, le switch possède une mémoire dans laquelle il peut stocker une ou plusieurs trames quand il les reçoit. Il ne renvoie cette trame que si la paire de transmission de la machine à qui elle est destinée est libre. 
                    Ainsi, quand il a deux trames à envoyer sur la même paire de réception, il envoie la première, puis la seconde. Il n'y a alors pas de collision. </br></br>
                    Mais alors, il n'y a pas de collisions sur un switch ? </br></br>
                    Non. Ou alors, c'est qu'on l'a configuré pour qu'il y en ait (nous le verrons par la suite). </br></br>
                    Et donc s'il n'y a plus de collisions, il n'est plus la peine de faire du CSMA/CD : on dit que la carte réseau fonctionne maintenant en full duplex. </br>
                    À l'inverse, quand on fait du CSMA/CD sur un hub ou un câble coaxial, la carte réseau fonctionne en half duplex.</br></br>
                    Mais attention, nous allons voir comment le full duplex peut être aussi destructeur que performant. </br>
                    Imaginez qu'on branche 10 machines sur un hub. Nous sommes sur un hub, donc sur une topologie en bus, donc les machines doivent être en half duplex et faire du CSMA/CD.</br>
                    Que se passe-t-il si la carte réseau de l'une d'entre elles est configurée en full duplex ?</br></br>
                    Eh bien cela est très, très gênant. Tout simplement, car les neuf autres machines attendent que le hub soit libre avant de pouvoir parler, et si jamais quelqu'un parle en même temps qu'elles, elles considèrent qu'il y a une collision.
                    Alors que notre machine en full duplex ne se soucie de rien, parle quand elle veut, ne détecte aucune des collisions qui se produisent. </br>
                    Pire encore, si cette machine est en train de télécharger un gros fichier, elle parle en permanence et empêche toutes les autres de parler. Le réseau est alors inutilisable pour nos neuf machines ! </br></br>
                    Nous voyons donc que toute machine connectée à un hub doit automatiquement avoir sa carte réseau configurée en half duplex. Si vous ne configurez jamais votre carte réseau c’est parce qu’elles sont intelligentes et capables de déterminer le duplex à utiliser. Ainsi, quand une carte réseau est branchée, elle est capable de déterminer si elle doit fonctionner en full duplex ou en half duplex. Branchée à un hub, elle se mettra en half duplex ; branchée à un switch, elle se mettra en full duplex. </br></br>
                    Et si je branche un hub à un switch ? Le hub ne peut pas être configuré, il fait du half duplex. Donc il ne pourra de toute façon jamais faire autre chose, car il fonctionne comme une topologie en bus qui nécessite le CSMA/CD. Le switch va donc devoir s'adapter.</br></br>
                    En fait, pas tout le switch, seulement le port du switch sur lequel est branché le hub. Ce port du switch fonctionnera en half duplex, et tous les autres ports en full duplex. Normalement le switch le détectera comme un grand, mais il est souvent possible de le modifier soi-même, à la main, sur les switchs administrables.</br></br>
                    Il peut arriver que la négociation de duplex ne fonctionne pas et qu'une machine soit en half duplex sur le port d'un switch en full duplex.
                    Dans ce cas cette machine se verra grandement pénalisée, car à chaque fois que quelqu'un lui parlera, elle ne pourra pas parler en même temps.
                </p>
                <p style="margin-top: 60px;">
                    Maintenant que nous avons vu tous les bienfaits que le switch a apportés, nous allons voir une de ses fonctionnalités avancées qui a encore permis d'améliorer les réseaux : les VLANS.
                </p>
                <p style="margin-top: 80px;">
                    <b>Les VLANs</b>
                </p>
                <p style="margin-top: 30px;">
                    Au-delà de la commutation (le fait d'aiguiller une trame vers un port), les switchs ont acquis de nouvelles capacités au cours du temps pour améliorer le fonctionnement des réseaux. Une de ces fonctionnalités est très répandue et intéressante, il s'agit des VLANs. </br></br>
                    Qu'est-ce qu'un VLAN ? Un VLAN est un LAN virtuel (ou virtual LAN en anglais) c’est-à-dire un réseau local virtuel.</br></br>
                    Un VLAN est la capacité de séparer des ports d'un switch dans des réseaux différents. Cela revient à séparer certains ports d'un switch. Ils ne pourront donc plus communiquer ensemble, vraiment plus du tout. </br></br>
                    Prenons un exemple, illustré en figure suivante.
                </p>
                <img src="../../../../images/switch-vlan-1.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous avons un switch de 10 ports sur lequel sont branchées six machines.
                    Nous souhaitons que ces groupes de machines ne puissent pas parler entre eux. Les trois premières parlent ensemble, les trois autres aussi, mais pas d'un groupe à l'autre. Les VLANs peuvent nous aider à faire cela ! </br>
                    L'idée du VLAN est de couper notre switch en plusieurs morceaux, comme si l'on avait plusieurs switchs.</br>
                    Dans notre cas, nous allons créer deux VLANs. Un VLAN pour les trois machines de gauche, et un autre pour les trois machines de droite.</br>
                    Ainsi, nous aurons fait en sorte qu'elles ne puissent plus parler entre elles d'un groupe à l'autre.</br>
                    Voici à la figure suivante ce que cela donne.
                </p>
                <img src="../../../../images/switch-vlan-2.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous voyons ici en vert et en rouge les deux VLANs. Ainsi, les machines connectées aux ports appartenant au VLAN vert ne peuvent communiquer qu'avec le VLAN vert. Et de même pour les machines connectées aux ports appartenant au VLAN rouge. Par contre, il est impossible pour une machine connectée au VLAN vert de communiquer avec une machine connectée au VLAN rouge. C'est comme si l'on avait séparé le switch en deux petits switchs, chacun ayant sa propre table CAM, comme sur la figure suivante.
                </p>
                <img src="../../../../images/switch-vlan-3.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 50px; justify-content:start">
                    <b>Quel est l'intérêt des VLANs ?</b>
                </p>
                <p style="margin-top: 10px;">
                    Dans l'exemple que nous avons choisi, l'intérêt n'est pas flagrant, mais imaginons que nous ayons à gérer une école, avec une administration, 100 enseignants et 1000 élèves. Nous avons alors plusieurs switchs répartis dans l'école. Des gros switchs de 256 ports ! (on appelle cela des châssis.)</br>
                    Il est intéressant de pouvoir segmenter ces switchs pour séparer les trois populations, pour que les élèves n'aient pas accès au réseau administratif ou à celui des enseignants, et que les enseignants n'aient pas accès au réseau administratif (pour changer leur fiche de paye par exemple). Plutôt que d'acheter 25 petits switchs de 48 ports, on en achète 5 gros de 256 ports.</br>
                    En plus de la sécurité offerte par la séparation des réseaux, cela apporte de la facilité de configuration. Si je veux qu'un port passe d'un VLAN à un autre, il me suffit de le configurer sur le switch.</br>
                    Je peux faire tout cela sans bouger de mon bureau d'administrateur réseau à travers une interface web d'administration du switch, comme vous pouvez le voir sur la figure suivante.</br>
                </p>
                <img src="../../../../images/switch-vlan-4.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On voit ici que chaque port peut être positionné dans un VLAN donné.</br>
                    Ici le port 1 est dans le VLAN 1 alors que le port 5 est dans le VLAN 2. Les machines connectées sur ces ports ne pourront pas communiquer ensemble.</br></br>
                    Un VLAN permet donc d'isoler certains ports d'un switch par rapport aux autres, comme si l'on coupait le switch en deux.</br></br>
                    Est-ce vraiment impossible de passer d'un VLAN à un autre ?</br></br>
                    Ce n'est pas impossible, mais presque, cela a déjà été fait : ça s'appelle du VLAN hopping.</br>
                    Malheureusement pour nous, les failles de conception qui le permettaient ont été corrigées et le VLAN hopping n'est plus d'actualité.
                </p>
                <p style="margin-top: 80px;">
                    <b>Cas pratique</b>
                </p>
                <img src="../../../../images/switch-example-4.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Il y a trois switchs connectés entre eux, et quelques machines branchées sur chaque switch.</br>
                    Problème : la semaine dernière, le switch 2, qui est au milieu, est tombé en panne et les machines des switch 1 et 3 ne pouvaient alors plus se parler !</br>
                    On vous demande donc de trouver une solution pour que le réseau puisse continuer de fonctionner, même si l'un des switchs tombe en panne.</br>
                    Ni une ni deux, vous vous dites qu'il faudrait relier les switchs 1 et 3, comme ça si n'importe lequel des switchs tombe en panne, les deux autres seront toujours reliés...</br>
                    Et patatras...</br></br>
                    Une heure à peine après que vous ayez relié les switchs, le réseau ne marche plus, plus personne n'a accès à Internet et on n'arrive même plus à communiquer avec les machines sur le réseau local.</br>
                    Que se passe-t-il ?</br></br>
                    Vous venez de créer ce que l'on appelle une boucle de commutation et ceci est très grave !</br>
                    Cette boucle est grave, car elle offre deux chemins possibles pour atteindre une destination.</br>
                    Dans le cas de l'envoi d'une trame vers une machine, le switch empruntera ces deux chemins et la trame arrivera à destination deux fois. Pas si grave, vous direz.</br>
                    Néanmoins, cela devient très gênant dans le cas d'un broadcast !</br>
                    En effet, notre broadcast va être envoyé sur les deux chemins puis, arrivé au prochain switch, il va être renvoyé par les deux chemins possibles puis, arrivé au prochain switch, renvoyé par les deux chemins possibles, etc.</br>
                    Et ainsi de suite jusqu'à ce que les switchs aient trop de broadcasts à traiter en même temps et soient complètement saturés.</br></br>
                    Ce phénomène s'appelle une tempête de broadcasts (ou broadcasts storm en anglais).</br></br>
                    Il est extrêmement puissant et peut faire écrouler les plus grands réseaux. Un réseau de 15 000 machines peut s'écrouler pendant plusieurs jours à cause d'un problème de ce genre.</br>
                    Et il suffit de créer une simple petite boucle... Il suffit de relier les deux extrémités d'un câble à un même switch...</br>
                    OK, mais alors comment répondre au problème initial ?</br>
                    Il n'y a pas de solution... Du moins pas dans l'état actuel de nos connaissances.</br>
                    Pour ceux qui veulent aller plus loin, vous pourrez vous renseigner sur le web à propos des technologies de spanning tree, fast spanning tree et 802.1d.</br>
                    Ce qu'il faut en retenir : ne jamais faire de boucles sur, ou entre, des switchs !
                </p>
                <p style="margin-top: 60px;">
                    Dernière chose : Vous entendrez parfois parler de pont ou bridge en anglais. Un pont n'est rien d'autre qu'un switch avec seulement deux ports. Donc si vous connaissez le switch, vous connaissez le pont !
                </p>

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
                    <a href="https://openclassrooms.com/fr/courses/6944606-concevez-votre-reseau-tcp-ip" target="_blank">Concevez votre réseau TCP/IP - OpenClassrooms</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>