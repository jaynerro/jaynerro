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
                    Par rapport à un hub, un switch permet d'isoler les conversations. Le switch a également mis fin au CSMA/CD, puisqu'il n'y a plus de collision.
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