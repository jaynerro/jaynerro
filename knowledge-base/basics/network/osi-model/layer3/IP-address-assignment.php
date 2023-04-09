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
    <title>Modèle OSI - Couche 3 : Découpage de plages d'adresses</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 3</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Découpage de plages d'adresses</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Découpage de plages d'adresses
                </h1>
                
                <p style="margin-top: 30px; justify-content: start;">
                    <b>Découpage avec la méthode de base</b>
                </p>
                <p style="margin-top: 10px;">
                    Pourquoi découper une plage d'adresses IP ?</br>
                    Exemple : </br>
                    Dans une école, il vaut mieux isoler le réseau des élèves de celui des profs et ainsi que de celui de l’administration. 
                    Partons du principe que les machines du réseau appartiennent au réseau 10.0.0.0/255.255.0.0.</br></br>
                    Nous allons découper la grande plage d'adresses qui nous a été fournie en plusieurs sous-réseaux plus petits. Nous pourrons alors mettre les élèves dans un sous-réseau, et les profs dans un autre.
                    Et même l'administration dans un autre réseau pour que les profs n'aillent pas modifier leur fiche de paye.
                </p>
                <div id="CIDR">
                    <p style="margin-top: 40px; justify-content: start;">
                        L'écriture CIDR
                    </p>
                </div>
                <p style="margin-top: 10px;">
                    Nous allons utiliser l'écriture des masques CIDR (Classless Inter-Domain Routing). Un masque s'écrit sur 32 bits. Sur ces 32 bits, nous en avons un certain nombre à 1 et le reste à 0.
                    Vu que les 1 et les 0 ne sont pas mélangés (grâce à la contiguïté des bits), il suffit de connaître le nombre de 1 dans un masque pour le connaître complètement.
                    On pourra donc simplement écrire le nombre de 1 dans un masque pour le connaître.
                    On pourra ainsi écrire le masque 255.255.255.0 de la façon suivante /24, qui indique qu'il y a 24 bits à 1 dans le masque. Au lieu d'écrire 192.168.0.1/255.255.255.0, on pourra écrire 192.168.0.1/24.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    Un premier découpage
                </p>
                <p style="margin-top: 10px;">
                    Prenons une entreprise possédant la plage 10.0.0.0/16. Nous allons essayer de découper cette plage.
                    L'entreprise compte 1000 techniciens, 200 commerciaux et 20 directeurs. Il va donc falloir définir trois petites plages au sein de notre grande plage d'origine.
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    1 - Vérification du nombre d'adresses
                </p>
                <p style="margin-top: 10px;">
                    Dans un premier temps, nous allons regarder si notre plage de départ contient assez d'adresses pour nos 1220 employés (1000 + 200 + 20).
                    Le masque contient 16 bits à 1, donc 16 bits à 0 (puisqu'il contient au total 32 bits).
                    Or, nous connaissons une formule qui nous permet de connaître le nombre d'adresses dans un réseau en fonction du nombre de bits à 0 dans le masque.
                </p>
                <p>
                    Rappel : nombre d'adresses dans un réseau = 2<sup>Nombrede0danslemasque</sup>.
                </p>
                <p style="margin-top: 10px;">
                    Nous allons donc avoir dans ce réseau 2^16 adresses, soit 65 536 adresses dans notre plage ! On en a largement plus que les 1220 nécessaires.
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    2 - Calcul des masques
                </p>
                <p style="margin-top: 10px;">
                    Nous savons combien nous voulons d'adresses dans les petites plages à découper, et nous avons la formule précédente qui nous donne la relation entre le nombre d'adresses et le nombre de 0 dans le masque.
                    Nous devrions donc pouvoir déduire le nombre de 0 nécessaires dans chacun des masques, et donc les masques eux-mêmes. </br>
                    Par exemple pour les techniciens qui sont 1000, il me faudra un réseau avec au moins 1000 adresses.
                </p>
                <p>
                    Rappel : nombre d'adresses dans un réseau = 2<sup>Nombrede0danslemasque</sup>.
                </p>
                <p style="margin-top: 10px;">
                    D'après la formule, nous devrions pouvoir déduire le nombre de 0 nécessaires dans le masque. Nous avons 1000 < 2^10. Donc si nous mettons 10 bits à 0 dans le masque, nous devrions pouvoir identifier 1000 machines (nous pourrons même avoir 1024 adresses !) Si on a 10 bits à 0 dans le masque, on obtient le masque suivant :</br>
                    11111111.11111111.11111100.00000000 soit 255.255.252.0 ou /22</br></br>
                    Pour le réseau de nos techniciens, nous pouvons choisir le masque 255.255.252.0 pour pouvoir avoir 1024 adresses dans le réseau et donc avoir assez d'adresses pour les 1000 techniciens.</br></br>
                    Nous pouvons faire le même calcul pour les 200 commerciaux :</br>
                    200 < 2^8 ; le masque pour les commerciaux sera donc 255.255.255.0.</br>
                    Et enfin pour les 20 directeurs :</br>
                    20 < 2^5 ; le masque pour les directeurs sera donc 255.255.255.224.</br></br>
                    Maintenant, il va nous falloir trouver les plages d'adresses associées, et pour cela nous avons beaucoup de choix parmi la grande plage que l'on nous a fournie.</br>
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    3 - Choix des plages d'adresses
                </p>
                <p style="margin-top: 10px;">
                    Nous avons donc la grande plage 10.0.0.0/16 de 65536 adresses à notre disposition, et nous souhaitons trouver une plage de 1024 adresses pour nos techniciens parmi ces 65536 adresses.</br>
                    Le choix le plus simple qui s'offre à nous est de commencer à l'adresse la plus basse, même si ce n'est pas le seul.</br></br>
                    Donc nous choisissons de commencer notre plage d'adresses pour les techniciens à l'adresse 10.0.0.0.</br>
                    Nous pouvons d'ores et déjà identifier le réseau des techniciens par le couple 10.0.0.0/255.255.252.0. Mais il serait bien aussi de connaître la dernière adresse de cette plage, car la donnée du couple adresse/masque ne nous donne pas une indication très précise.</br></br>
                    Commençons nos calculs habituels... en essayant un peu de nous améliorer.
                    D'habitude, on transforme complètement l'adresse et le masque en binaire. Mais y réfléchissant un peu, on se rend compte que seul un des 4 octets du masque nous intéresse, celui où se passe la coupure entre les 1 et les 0. Ici c'est le troisième, 252.</br></br>
                    Donc au lieu de calculer en binaire toute l'adresse, nous n'allons travailler que sur le troisième octet.</br>
                    Masque : 252 -> 11111100</br>
                    Adresse: 0 -> 00000000</br></br>
                    Ainsi, d'après le masque, toutes les adresses des machines de mon réseau commenceront par 000000 sur le troisième octet.
                    La dernière adresse sera donc celle où tous les bits de la partie machine sont à 1, soit 00000011 sur le troisième octet (3 en décimal), et 11111111 sur le quatrième octet qu'il ne faut pas oublier ! (255 en décimal)</br>
                    La dernière adresse de la plage des techniciens est donc 10.0.3.255.</br></br>
                    Nous avons donc choisi une plage d'adresses adéquate pour les techniciens parmi notre grande plage de départ.
                    Il nous faut maintenant en choisir une pour les 200 commerciaux.</br></br>
                    Cependant, nous avons une contrainte supplémentaire sur le choix de notre plage d'adresses, c'est que les techniciens occupent déjà un certain nombre d'adresses de notre plage, de 10.0.0.0 à 10.0.3.255.</br>
                    Nous pouvons par exemple choisir de démarrer la plage d'adresses des commerciaux juste après celle des techniciens, en 10.0.4.0.</br>
                    Nous pouvons d'ores et déjà identifier le réseau des commerciaux par le couple 10.0.4.0/255.255.255.0. Comme pour les techniciens, il serait bien aussi de connaître la dernière adresse de cette plage. Ici, vu que la coupure se fait parfaitement entre deux octets, le calcul est facile !</br>
                    La dernière adresse sera 10.0.4.255.</br></br>
                    Nous pouvons faire le même raisonnement pour les directeurs en commençant à 10.0.5.0.</br>
                    En associant le masque à cette adresse, nous trouvons comme dernière adresse 10.0.5.31.</br></br>
                    Nous avons bien découpé la grande plage d'adresses qui nous était donnée : 10.0.0.0/16 -> 10.0.0.0 à 10.0.255.255 en trois plages d'adresses plus petites :</br>
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>10.0.0.0/22 -> 10.0.0.0 à 10.0.3.255 pour les techniciens ;</li>
                    <li>10.0.4.0/24 -> 10.0.4.0 à 10.0.4.255 pour les commerciaux ;</li>
                    <li>10.0.5.0/27 -> 10.0.5.0 à 10.0.5.31 pour les directeurs.</li>
                </ul>
                <p style="margin-top: 10px;">
                    Si on refait les calculs en partant des directeurs, la plage des directeurs est : 10.0.0.0/27.</br>
                    Pour les commerciaux, il faut commencer en 0, car si on se place à la suite nous restons dans le même réseau que les directeurs. Donc on prend la première adresse possible après 10.0.0.31 qui finit en 0, soit 10.0.1.0 ! Ce qui nous donne pour les commerciaux la plage 10.0.1.0/24 qui finit en 10.0.1.255</br>
                    De la même façon, nous ne pourrons pas commencer la plage des techniciens en 10.0.2.0, il faudra aller jusqu'en 10.0.4.0. La plage des techniciens est donc 10.0.4.0/22 qui finit en 10.0.7.255.</br>
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    Cas particulier
                </p>
                <p style="margin-top: 10px;">
                    Il y a certains cas pour lesquels nous ne pouvons pas trop faire autrement que de nous creuser les méninges.</br></br>
                    Par exemple, vous arrivez dans une entreprise en tant qu'administrateur systèmes et réseaux. L'entreprise utilise actuellement la plage d'adresses 192.168.47.0/24. Cependant, cette entreprise grandissant, les 256 adresses possibles de cette plage commencent à ne pas être suffisantes.
                    L'administrateur en chef vous demande d'agrandir cette plage réseau pour doubler sa taille, et ainsi passer à 512 adresses.</br></br>
                    Le réflexe de base est de se dire qu'on peut ajouter la plage qui se trouve à la suite de 192.168.47.0/24, c'est-à-dire 192.168.48./24... mais ça ne marche pas !</br></br>
                    Faisons nos calculs : pour doubler la taille du réseau, rien de plus simple, il suffit d'ajouter un 0 dans le masque. Ainsi, on passe de 2^8=256 à 2^9=512 adresses. Le masque devient donc 255.255.254.0, autrement écrit /23.</br></br>
                    Mais attention, vu que nous venons de changer le masque, et si vous vous souvenez de la règle quelques lignes au-dessus : le masque, et donc le nombre d'adresses dans un réseau, impose de ne pas démarrer une plage d'adresses n'importe où !</br></br>
                    Nous n'allons donc pas pouvoir choisir n'importe quoi comme adresse de départ pour notre réseau.
                    Si nous voulons garder les adresses actuelles qui commencent par 192.168.47.X, nous pouvons appliquer le nouveau masque à une de ces adresses pour avoir la première et la dernière adresse de la plage.</br></br>
                    Masque: 254 -> 11111110</br>
                    Adresse: 47 -> 00101111</br></br>
                    En mettant la partie machine de l'adresse à 0, nous obtenons 00101110, ce qui correspond à 46.</br>
                    En mettant la partie machine de l'adresse à 1, nous obtenons 00101111, ce qui correspond à 47.</br></br>
                    Notre nouvelle plage d'adresses va donc aller de 192.168.46.0 à 192.168.47.255.</br>
                    La plage ainsi définie est donc 192.168.46.0/23
                </p>
                <p style="margin-top: 70px; justify-content: start;">
                    <b>Découpage avec la méthode avancée</b>
                </p>
                <p style="margin-top: 10px;">
                    Pour commencer, nous devons faire un calcul fait à partir de l'octet significatif du masque : 256 - octet significatif = nombre significatif. </br>
                    Par exemple, si l'on choisit le masque 255.224.0.0, on voit vite que l'octet significatif (celui où la séparation a lieu) est 224. Notre nombre significatif vaut donc 256 - 224 = 32.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    Calcul instantané de la première et la dernière adresse de notre plage
                </p>
                <p style="margin-top: 10px;">
                    Pour cela, il va falloir écrire tous les multiples du nombre significatif jusqu'à 256. Allons-y pour les multiples de 32 : 0, 32, 64, 96, 128, 160, 192, 224, 256.</br>
                    Et maintenant, nous allons simplement appliquer les deux règles suivantes :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>La première adresse du réseau sera le multiple du nombre significatif, inférieur ou égal à l'octet correspondant dans l'adresse.</li>
                    <li>La dernière adresse du réseau sera le multiple suivant, moins 1.</li>
                </ul>
                <p style="margin-top: 10px;">
                    Un exemple sera plus parlant. On associe l'adresse 192.168.0.1 et le masque 255.224.0.0.
                    Dans notre masque, l'octet significatif est le deuxième (255.224.0.0).
                    Nous allons donc prendre le deuxième octet de notre adresse (192.168.0.1), soit 168.</br></br>

                    La première adresse du réseau sera donc le multiple du nombre significatif, inférieur ou égal à 168.
                    En regardant la liste des multiples, on trouve très vite 160 ! 0, 32, 64, 96, 128, 160, 192, 224, 256.</br></br>

                    La dernière adresse du réseau sera le multiple suivant, moins 1.
                    Le multiple suivant est 192, auquel on enlève 1 pour trouver 191.</br></br>

                    La première adresse de la plage est donc 192.160.0.0 et la dernière 192.191.255.255.
                    On a ajouté les 0 pour la première et les 255 pour la dernière, car tous les bits qui suivent sont à 0 ou à 1, selon qu'on veut la première ou la dernière.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    Exemple concret de découpage
                </p>
                <p style="margin-top: 10px;">
                    Vous avez en charge le réseau d'une petite entité d'une entreprise. L'administrateur général vous laisse à disposition le réseau : 192.168.160.0/255.255.224.0.
                    Vous avez dans votre entité trois catégories de personnel :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>550 techniciens ;</li>
                    <li>130 commerciaux ;</li>
                    <li>10 directeurs.</li>
                </ul>
                <p style="margin-top: 10px; justify-content: start;">
                    Il vous faut donc découper la plage d'origine en trois sous-réseaux pour chacune de ces populations.
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    Étape 1 - Calcul de la plage d'origine
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>Le nombre significatif vaut: 256 - 224 = 32.</li>
                    <li>L'octet significatif de l'adresse vaut 160, qui est un multiple de 32 ! Ce sera donc la première adresse, la dernière étant 160 + 32 - 1 = 191.</li>
                    <li>La première adresse est 192.168.160.0 et la dernière est 192.168.191.255.</li>
                </ol>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    Étape 2 - Calcul des masques
                </p>
                <p style="margin-top: 10px;">
                    La seule information que nous avons est le nombre de personnes de chaque population. Ça tombe bien, car nous savons que la taille d'une plage dépend de son masque. 
                    Donc si on connaît le nombre d'adresses nécessaires, nous pouvons en déduire le masque.
                </p>
                <p>
                    Rappel : nombre d'adresses dans un réseau = 2<sup>Nombrede0danslemasque</sup>.
                </p>
                <p style="margin-top: 10px;">
                    Pour les techniciens, qui sont 550, le réseau devra contenir 1024 adresses (la puissance de 2 supérieure) soit 2^10.</br>
                    Le masque contiendra donc 10 bits à 0, soit : 11111111.11111111.11111100.00000000.</br>
                    Soit en décimal : 255.255.252.0.</br></br>

                    Nous pouvons faire pareil pour les commerciaux : 130 < 2^8.</br>
                    Le masque est donc : 255.255.255.0.</br></br>

                    Et pour les directeurs, nous trouvons : 10 < 2^4.</br>
                    Le masque est donc : 255.255.255.240.</br>
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    Étape 3 - Calcul des plages
                </p>
                <p style="margin-top: 10px;">
                    Nous allons commencer par les techniciens. Notre plage de départ démarre en 192.168.160.0. Eh bien nous allons commencer la plage des techniciens à cette adresse, et allons trouver l'adresse de fin grâce au masque.</br></br>

                    Calculons le nombre significatif : 256 - 252 = 4.</br>
                    Le prochain multiple de 4 après 160 est 164 - 1 = 163.</br>
                    La dernière adresse pour les techniciens est donc 192.168.163.255.</br></br>

                    Pour les commerciaux, nous allons donc démarrer à l'adresse juste après pour ne pas empiéter sur la plage des techniciens, soit 192.168.164.0.</br>
                    Nous allons nous passer du nombre significatif pour les commerciaux, car la coupure se fait parfaitement entre deux octets sur le masque. L'adresse de fin est donc facilement calculée à 192.168.164.255.</br></br>

                    Nous démarrons après pour les directeurs, à l'adresse 192.168.165.0. Le nombre significatif vaut 256 - 240 = 16</br>
                    La dernière adresse est donc 192.168.165.15 !
                </p>
                <p style="margin-top: 50px; margin-left: 20px; justify-content: start;">
                    Pour aller plus loin
                </p>
                <p style="margin-top: 10px;">
                    Imaginons que nous ayons 120 secrétaires qui débarquent sur notre réseau.
                    Nous voulons leur créer une nouvelle plage, mais sans toucher aux réseaux existants. Si nous prenons la même méthode que précédemment, nous allons nous planter. Voyons pourquoi.</br></br>
                    Nous avions fini la plage des directeurs à l'adresse 192.168.165.15, nous allons donc démarrer celle des secrétaires à l'adresse suivante, soit 192.168.165.16.</br>
                    Le masque pour les secrétaires sera : 120 < 2^7; soit 255.255.255.128.</br>
                    Le nombre significatif vaut 256 - 128 = 128. La plage des secrétaires va donc finir au prochain multiple de 128 moins 1, soit 127.</br></br>

                    Nous avons donc défini la plage des secrétaires allant de 192.168.165.16 à 192.168.165.127...</br></br>

                    Mais cela ne marche pas ! D'abord, car il n'y a pas assez d'adresses. De 16 à 127, nous n'avons que 112 adresses, pas assez pour nos 120 secrétaires. Ensuite, et c'est le plus grave, notre plage n'est pas celle que nous pensons... 
                    En effet, si nous reprenons la méthode significatif à 0, cela nous donne le calcul suivant :</br>
                    le nombre significatif est 128 ; les multiples de 128 sont 0, 128 et 256 ; notre plage va donc aller de 0 à 127, et non de 16 à 127 !</br></br>
                    Nous empiétons donc sur les adresses des directeurs !</br></br>
                    Pour résoudre ce problème, il suffit de prendre le multiple du nombre significatif suivant !</br>
                    Nous allons commencer notre plage non pas en 192.168.165.16, mais en 192.168.165.128, et donc finir en 192.168.165.255.</br></br>

                    Et là, nous avons bien défini un réseau d'au moins 120 adresses et qui n'empiète pas sur le réseau des directeurs !</br>
                    Cependant, nous avons laissé un trou... Les adresses de 16 à 127 ne sont pas utilisées. C'est normal, et ce n'est pas grave de toute façon. Nous pourrons utiliser ces adresses pour des petits réseaux par la suite si nous le souhaitons. 
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