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

    <?php // Titre de l'onget de la page ?>
    <title>Modèle OSI - Couche 3 : Autres protocoles ARP & ICMP</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 3</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Autres protocoles : ARP & ICMP</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Autres protocoles : ARP & ICMP
                </h1>
                <p style="margin-top: 30px;">
                    <b>Le protocole ARP</b>
                </p>
                <img src="../../../../../images/simple-network-example.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Imaginons que la machine 192.168.0.1 veuille envoyer un message à la machine 192.168.1.2.</br>
                    Nous allons reconstituer son raisonnement.</br>
                    Lors d'un envoi de message, nous traversons les couches du modèle OSI de la couche application vers la couche réseau.
                    Nous traversons donc la couche 7, puis la couche 4, et enfin la couche 3 que nous connaissons maintenant.
                    La couche 3 voit que nous voulons envoyer un paquet à la machine 192.168.1.2. Elle va donc chercher dans sa table de routage par qui il faut passer pour envoyer ce message.
                </p>
                <img src="../../../../../images/routing-table-example-11.png" class="img-fluid mx-auto d-block" style="max-width: 50%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Il est clairement indiqué que nous devons passer par la passerelle 192.168.0.254 pour joindre le réseau 192.168.1.0/24 qui contient l'adresse que l'on veut joindre. Notre machine sait donc qu'il va falloir envoyer le paquet à 192.168.0.254.
                    La machine 192.168.0.254 est sur notre réseau, donc pour lui envoyer la trame nous devons connaître son adresse MAC. Or, nous ne la connaissons pas...</br>
                    Comment faire pour connaître l'adresse MAC de 192.168.0.254 ?</br>
                    Il faudrait pouvoir la lui demander, mais pour lui demander il faudrait connaître son adresse MAC, et pour connaître son adresse MAC il faudrait la lui demander... c'est l'histoire de la poule et de l’œuf.</br>
                    Mais il y a une solution : le protocole ARP (Address Resolution Protocol) !</br></br>
                    Comment faire pour envoyer un message à une machine sur notre réseau sans connaître son adresse MAC ?
                    Si vous vous rappelez bien, nous avons vu quelque chose qui nous le permettait... il s'agit de l'adresse de broadcast !</br>
                    Nous pouvons envoyer un message à l'adresse de broadcast en demandant "est-ce que 192.168.0.254 peut m'envoyer son adresse MAC ?"
                    Grâce à l'adresse de broadcast ce message sera envoyé à tout le monde, et donc 192.168.0.254 le recevra et pourra nous renvoyer son adresse MAC.</br>
                    C'est ce que l'on appelle une requête ARP ou aussi un broadcast ARP.</br></br>
                    Nous pourrons alors envoyer notre trame à la machine 192.168.0.254 qui, grâce à sa table de routage, pourra aiguiller notre message vers la destination 192.168.1.2.</br></br>
                    ARP est donc un protocole qui permet d'associer une adresse MAC de couche 2 à une adresse IP de couche 3.</br></br>
                    Mais les broadcasts ne risquent-ils pas de saturer le réseau à chaque fois que l'on veut envoyer une information ?</br>
                    Bien sûr, et c'est pour cela qu'un mécanisme complémentaire a été mis en place, la table ARP.
                </p>
                <p style="margin-top: 50px;">
                    <b>La table ARP</b>
                </p>
                <p style="margin-top: 30px;">
                    Pour éviter d'avoir à renvoyer en permanence des broadcasts ARP à chaque fois que l'on veut envoyer une information à une machine, nous allons utiliser une table qui va garder les associations adresses IP <-> Adresses MAC pendant un court moment.
                    Ainsi, si j'envoie un paquet à ma passerelle, je noterai son adresse MAC dans ma table ARP et la prochaine fois que je voudrai lui parler, je n'aurai plus à envoyer de broadcast sur le réseau.</br></br>
                    La table ARP va donc associer adresse IP et adresse MAC correspondante. 
                </p>
                <img src="../../../../../images/arp-table.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    On voit ici que ma machine dialogue avec beaucoup d'autres machines sur son réseau. Mais c'est normal puisqu'il s'agit de la passerelle de sortie de mon réseau.</br>
                    Ainsi, quand la passerelle voudra envoyer un paquet à l'adresse 10.8.100.41, elle connaîtra directement son adresse MAC.</br>
                    Mais si jamais je change la carte réseau de ma machine ? Elle changera aussi d'adresse MAC, mais ce sera l'ancienne qui sera indiquée dans la table ?</br>
                    Non, car les informations contenues dans la table ARP ont une durée de vie limitée. En gros, une valeur va rester environ deux minutes dans la table avant d'être effacée s'il n'y a pas eu de dialogue avec cette adresse entre-temps. C'est pour cela que l'on dit que la table ARP est dynamique. Elle évolue au cours du temps en fonction des machines avec lesquelles je dialogue.</br>
                    La commande sous Unix pour voir sa table ARP est arp -an ; elle est arp -a sous Windows.
                    Bien sûr vous risquez de voir peu de chose chez vous s'il n'y a que deux ou trois machines sur votre réseau.</br>
                </p>
                <p style="margin-top: 50px;">
                    <b>Déroulement de A à Z d'une requête ARP</b>
                </p>
                <p style="margin-top: 30px;">
                    Reprenons l'exemple précédent : nous sommes la machine 192.168.0.1 et voulons envoyer un message à la machine 192.168.1.2.</br>
                    Nous savons que nous voulons joindre d'abord le routeur 192.168.0.254, mais ne connaissons pas son adresse MAC.</br>
                    C'est là que le protocole ARP entre en jeu :</br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>on regarde d'abord dans la table ARP locale si on possède l'association entre l'adresse IP 192.168.0.254 et son adresse MAC ;</li>
                    <li>si on la possède, on envoie l'information et c'est terminé ;</li>
                    <li>sinon, on envoie un broadcast ARP sur le réseau ;</li>
                    <li>la machine 192.168.0.254 va nous répondre avec son adresse MAC ;</li>
                    <li>nous allons noter cette adresse MAC dans notre table ARP ;</li>
                    <li>nous allons enfin pouvoir envoyer notre information.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Nous savons maintenant comment font les machines pour passer d'une adresse IP à joindre à l'adresse MAC correspondante : grâce au protocole ARP !</br></br>
                    Mais à quelle couche appartient ce protocole : 2 ou 3 ?</br></br>
                    Le protocole ARP est un protocole de couche 2 ET 3 !</br></br>
                    Oui, il manipule des informations de couche 2, les adresses MAC, et des informations de couche 3, les adresses IP. Ainsi, on dit que ce protocole est "à cheval" entre ces deux couches.
                </p>
                <p style="margin-top: 60px;">
                    <b>ARP cache poisoning</b>
                </p>
                <p style="margin-top: 30px;">
                    Nous allons essayer de réaliser une attaque réseau qui permet d'écouter le trafic d'une autre machine qui est connectée sur le même réseau que nous.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    <b>Le principe</b>
                </p>
                <p style="margin-top: 30px;">
                    L'attaque est basée sur le détournement du fonctionnement du protocole ARP. C'est pour cela qu'elle s'appelle du ARP cache poisoning.
                    Nous allons en réalité modifier à distance la table ARP d'une autre machine.
                </p>
                <p style="margin-top: 30px; justify-content : start">
                    La théorie
                </p>
                <p style="margin-top: 30px;">
                    Dans le meilleur des mondes, une machine fait un broadcast ARP, et la machine destinataire répond en fournissant son adresse MAC.
                    Mais que se passerait-il si je décidais aussi de répondre avec ma propre adresse MAC ?
                    Eh bien ce serait la dernière réponse qui serait prise en compte.</br></br>
                    Par exemple, je peux tout à fait attendre de voir passer une requête ARP qui ne m'est pas destinée. J'attends deux secondes pour y répondre, et je suis alors quasiment sûr que ce sera ma réponse qui sera prise en compte. 
                    Et si j'ai mis dans la réponse ma propre adresse MAC, ce sera mon adresse MAC qui sera associée à l'adresse IP de la machine destinataire de la requête dans la table ARP du demandeur.</br>
                    Prenons le schéma de la figure suivante comme exemple.
                </p>
                <img src="../../../../../images/arp-poisoning.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Nous avons trois machines d'adresses 192.168.0.1, 192.168.0.2 et 192.168.0.3.</br>
                    Imaginons que nous sommes la machine 192.168.0.2 et que nous voulions écouter le trafic envoyé entre 192.168.0.1 et 192.168.0.3.
                    La machine 192.168.0.1 veut envoyer un message à la machine 192.168.0.3. Elle commence donc par envoyer un broadcast ARP afin de déterminer l'adresse MAC de 192.168.0.3.
                    192.168.0.3 répond à la requête ARP (elle répond directement à la machine 192.168.0.1, elle n'a pas besoin d'envoyer son message en broadcast à tout le monde). Et nous décidons de répondre aussi deux secondes plus tard.</br>
                    En recevant la première réponse de 192.168.0.3, la machine 192.168.0.1 va mettre à jour sa table ARP :
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
    <?php require_once('../../../../../footer.php'); ?>
</html>