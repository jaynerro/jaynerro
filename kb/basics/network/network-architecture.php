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
    <title>L'architecture réseau</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item active" aria-current="page">L'architecture réseau</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    L'architecture réseau
                </h1>
                <p style="margin-top: 30px;"> 
                    Les réseaux ont pour but de permettre la transmission d’informations. À l’époque des tout premiers ordinateurs, le seul moyen de transmission était la disquette, qui était transportée d’un ordinateur à un autre : assez peu pratique... </br></br>
                    Depuis, nous avons à disposition un réseau mondial appelé Internet. Ce réseau est composé de millions de réseaux plus petits. </br></br>
                    Il existe différents types de réseaux informatiques : 
                </p>
                <p style="margin-top: 20px; justify-content: start;" id="LAN">
                    <b id="RLE">Les LAN (Local Area Network)</b>
                </p>
                <p style="margin-top: 20px;"> 
                    Les LAN sont des réseaux à échelle locale, tels que les réseaux domestiques de votre domicile, ou les réseaux à l’échelle d’une entreprise.</br>
                    Dans le cas d'un réseau d'entreprise, on utilise aussi le sigle RLE pour réseau local d'entreprise.
                </p>
                <p style="margin-top: 40px; justify-content: start;" id="MAN">
                    <b>Les MAN (Metropolitan Area Network)</b>
                </p>
                <p style="margin-top: 20px;"> 
                    Les MAN sont déployés à l’échelle d’une ville. Il peut s’agir, par exemple, de réseaux universitaires qui connectent différentes facultés d’une même ville. Ils sont eux-mêmes constitués de LAN qui, ensemble, forment un MAN.
                </p>
                <p style="margin-top: 40px; justify-content: start;" id="WAN">
                    <b>Les WAN (Wide Area Network)</b>
                </p>
                <p style="margin-top: 20px;"> 
                    Les WAN sont des réseaux à échelle mondiale, dont le plus connu est Internet. Ce dernier est lui-même composé de MAN et de LAN.
                </p>
                <p style="margin-top: 30px;"> 
                    À moins de travailler pour un opérateur de télécommunication, vous interviendrez essentiellement sur des LAN, en tant que technicien informatique. 
                    Eh oui, le LAN reste le type de réseau le plus courant, et il est fréquemment déployé à l'échelle d’une entreprise. Il est également la brique élémentaire des réseaux de plus grande taille.
                </p>
                <p style="margin-top: 40px; justify-content: start;" id="DMZ">
                    <b>Bonus : DMZ</b>
                </p>
                <p style="margin-top: 20px;"> 
                    Une DMZ (Demilitarized Zone) est souvent un réseau dans lequel on place les serveurs qui ont besoin d’être joints par Internet. Ainsi, les accès de l’extérieur ne se font généralement que vers la DMZ et non vers le réseau local.
                    Cela nous apporte un peu plus de sécurité de ne pas avoir les machines des utilisateurs sur un réseau directement joignable depuis Internet.
                </p>
                <img src="../../../images/network-architecture-example.png" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 50px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Schéma logique d'une architecture réseau
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    Le schéma logique indique :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'architecture du réseau ;</li>
                    <li>certains aspects de sa configuration logicielle.</li>
                </ul>

                <p style="margin-top: 40px; justify-content: start;"> 
                    <b>Schéma logique et schéma physique</b>
                </p>
                <p style="margin-top: 20px; justify-content: start;"> 
                    En fonction de la mission que vous devez réaliser, vous pourrez rencontrer 2 types de schémas :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Le schéma logique pour concevoir, modéliser et configurer votre réseau.</li>
                    <li>Le schéma physique pour déployer le réseau, installer et câbler le matériel.</li>
                </ul>
                <p style="margin-top: 20px; justify-content: start;"> 
                    Le schéma physique apporte d’autres types d’informations :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la localisation physique des équipements (ville/bâtiment/salle) ;</li>
                    <li>le nombre de câbles utilisés pour relier les éléments ;</li>
                    <li>le nombre exact de machines sur le réseau ;</li>
                    <li>une vue plus détaillée des équipements d’interconnexion.</li>
                </ul>
                <p style="margin-top: 30px; justify-content: start;"> 
                    Il se présente également de manière différente.
                </p>
                <img src="../../../images/physical-vs-logical-diagram.png" class="img-fluid mx-auto d-block" style="max-width: 90%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Schéma physique vs schéma logique
                </p>
                <p style="margin-top: 30px;"> 
                    Parfois, vous trouverez des informations propres à un schéma physique dans un schéma logique, et inversement. 
                    Je vous conseille de consulter les deux, s’ils existent. L’important est de ne pas surcharger un schéma d’informations, au risque de le rendre incompréhensible.
                </p>
                
                

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://openclassrooms.com/fr/courses/6944606-concevez-votre-reseau-tcp-ip" target="_blank">Concevez votre réseau TCP/IP - OpenClassrooms</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>