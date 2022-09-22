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
    <title>Modèle OSI - Couche 1 : La couche Physique</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Couche 1 : La couche Physique</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Couche 1 : La couche Physique
                </h1>
                <p style="margin-top: 30px;"> 
                    Le rôle principal de la couche 1 est de fournir le support de transmission de la communication.</br></br>
                    La couche 1 aura donc pour but d'acheminer des signaux électriques (des 0 et des 1). Pour cela avant nous utilisions un câble coaxial, maintenant nous utlisons :</br>
                </p>
                <p style="margin-top: 30px;">
                    <b>La paire torsadée</b>
                </p>
                <p style="margin-top: 30px;">
                    Le câble à paires torsadées est composé de huit fils, torsadés deux à deux par paires. Vous pouvez en voir un exemple sur la figure suivante.
                </p>

                <img src="../../../../images/networking-cable.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 30px;"/>

                <p style="margin-top: 40px;">
                    Mais pourquoi utiliser 8 fils ? </br></br>
                    Par principe, il n'y a besoin que de deux fils pour faire passer une différence de potentiel.</br>
                    Cependant, nous ne savons pas de quoi l'avenir sera fait, et peut-être que demain nous voudrons faire passer plusieurs informations sur un même câble.</br>
                    Ainsi, le câble à paires torsadées a été créé avec 8 fils, alors que deux auraient suffi, pour permettre son évolution.</br>
                    Aujourd'hui, dans la plupart des réseaux, nous utilisons 2 paires, soit 4 fils, car nous utilisons une paire pour envoyer les données, et une paire pour les recevoir. Nous n'utilisons donc que 4 fils sur 8.
                    Cependant, il existe déjà des technologies qui utilisent plus de 4 fils, et nous avons eu raison d'en mettre 8 dans le câble à paires torsadées.</br>
                    On les torsade les fils pour une meilleure protection du signal électrique. En effet, on s'est rendu compte qu'en torsadant les fils de la sorte, le câble était moins sujet à des perturbations électromagnétiques. </br></br>
                    Le nom du câble à paires torsadées est le 10BT, ou 100BT ou 1000BT, selon le débit utilisé (10 Mbps, 100 Mbps, 1000 Mbps) le T étant là pour "twisted". On ajoute parfois un x derrière, pour dire que le réseau est commuté.</br></br>
                    On branche le câble à paires torsadées avec une prise RJ45. 
                </p>

                <img src="../../../../images/rj45.jpeg" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>

                <p style="margin-top: 40px;">
                    Étant donné que nous n'utilisons que 4 fils, peut-on utiliser n'importe lesquels ? </br>
                    Non ! Il faut utiliser des fils spécifiques, qui sont les fils 1, 2, 3 et 6. Voici en figure suivante le branchement d'un câble et les fils utilisés (avec les couleurs). 
                </p>

                <img src="../../../../images/rj45-straight.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Paire torsadée droite
                </p>

                <p style="margin-top: 40px;">
                    Imaginons que nous ayons une machine A à gauche, et une machine B à droite que nous relions à l'aide de ce câble. Voici sur la figure suivante ce que ça donne.
                </p>

                <img src="../../../../images/rj45-straight-2.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>

                <p style="margin-top: 40px;">
                Il y a un problème, cela ne va pas marcher. Si vous vous rappelez bien, nous utilisons deux paires pour une connexion. Une paire pour envoyer des données et une paire pour les recevoir. </br>
                Or, d'après le câblage utilisé, la transmission de la machine A va être en relation avec la transmission de la machine B. De même, la réception de la machine A va être en relation avec la réception de la machine B (voir la figure suivante). Cela ne marchera pas...
                </p>

                <img src="../../../../images/rj45-straight-with-TxRx.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>

                <p style="margin-top: 40px;">
                    Pour pouvoir relier la transmission de la machine A avec la réception de la machine B, il faudrait que les fils 1 et 2 soient en relation avec les fils 3 et 6... Ce qui reviendrait à croiser les fils... ainsi fut inventé le câble croisé ! </br>
                    Comme vous pouvez le constater sur la figure suivante, nous avons bien la transmission de la machine A en relation avec la réception de la machine B.
                </p>

                <img src="../../../../images/rj45-crossover.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Paire torsadée croisée
                </p>

                <p style="margin-top: 40px;">
                    Nous pouvons en tirer une conclusion : pour relier deux machines directement entre elles, il faut un câble croisé.</br></br>
                    Pourtant quand vous connectez votre ordinateur sur votre box et vous utilisez un câble droit.</br>
                    Il peut y avoir deux raisons à cela :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la prise femelle sur la box a déjà ses connexions transmission et réception inversées ;</li>
                    <li>les prises femelles de ma box et de mon ordinateur sont capables de s'adapter et d'inverser les connexions de transmission et réception si besoin.</li>
                </ul>

                <p style="margin-top: 40px;">
                    Le premier cas est modélisé sur le schéma de la figure suivante. Nous y voyons bien que même si nous utilisons un câble droit, la paire de transmission de la machine A est en relation avec la paire de réception de la machine B.
                </p>

                <img src="../../../../images/rj45-straight-with-switch.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Paire torsadée droit avec switch
                </p>
                
                <p style="margin-top: 40px;">
                    Dans le second cas, la machine B peut choisir indifféremment les paires de transmission et réception pour se trouver dans le cas de la machine A ou de la machine B.</br>
                    Ainsi, étant donné que les cartes réseau ont évolué aujourd'hui, vous pouvez utiliser indifféremment des câbles droits ou croisés sans vous embêter ! Ça reste vrai tant que vous n'utilisez pas de vieux matériel qui ne serait pas capable de changer ses paires de connexion...</br></br>
                    Si vous utilisez du vieux matériel, comment savoir s'il faut utiliser un câble droit ou un câble croisé ?</br>
                    Il y a une règle simple, mais pas toujours facile à comprendre : je dois utiliser un câble croisé pour connecter deux matériels de même type.</br>
                    Vous vous demandez peut-être ce que c'est que deux matériels de même type ? Eh bien ce sont par exemple deux ordinateurs, ou deux imprimantes. Quand ce sont deux matériels identiques, on sait qu'ils sont de même type, c'est facile.</br></br>
                    Par contre, si l'on veut connecter un ordinateur et une imprimante, comment faire ? Il va falloir créer deux catégories :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>les matériels de connexion</li>
                    <li>les matériels connectés</li>
                </ul>

                <p style="margin-top: 20px;">
                    Les matériels de connexion sont ceux qui servent à connecter plusieurs machines entre elles, comme les hubs ou les switchs et les matériels connectés sont tout le reste : Les ordinateurs, les imprimantes, les routeurs, etc.
                </p>

                <p style="margin-top: 40px;">
                    On branche cette paire torsadée à de prises RJ45 femelles montées sur des cartes réseau pour nos machines. </br>
                    Mais pour pouvoir relier plusieurs machines entre elles sur un réseau, il faut utiliser un matériel de connexion. Et pour la couche 1, il s'agit du hub (ou concentrateur en français). Le hub est une machine composée de plusieurs prises RJ45 femelles et qui a pour rôle de relier les machines entre elles (voir la figure suivante).
                </p>

                <img src="../../../../images/ethernet-hub.jpeg" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 30px;"/>
                <p style="margin-top: 20px; font-size: small;">
                    Hub
                </p>

                <p style="margin-top: 20px;">
                    Seulement, le hub a un fonctionnement particulier. Imaginez qu'il y ait 5 machines branchées au hub, les machines A, B, C, D et E. Si A veut parler à C, elle va envoyer l'information au hub. Mais lui ne sait pas lire ! Il va donc envoyer l'information à toutes les machines en se disant qu'il y en aura bien une dans le tas qui sera la bonne !</br>
                    Les machines B, D et E vont voir que l'information n'est pas pour elles et vont la jeter, alors que la machine C va pouvoir la lire ! (on voit tout de suite qu'un hub n'est pas top pour la confidentialité des données...).
                </p>
                <p style="margin-top: 40px;">
                    Mais quel est l'avenir du câblage réseau ? Est-ce encore la paire torsadée ?</br>
                    La fibre optique remplace peu à peu la paire torsadée, notamment en raison des débits qu'elle peut offrir.
                </p>

                <img src="../../../../images/optical-fiber.jpeg" class="img-fluid mx-auto d-block" style="max-width: 40%; margin-top: 30px;"/>

                <p style="margin-top: 40px;">
                    Avec la fibre optique, nous transportons des 0 et des 1, non plus avec de l'électricité mais avec de la lumière !</br>
                    Ce sera en gros, allumé, éteint, allumé, éteint... On envoie de la lumière dans le fil, et elle ressort quelques mètres/kilomètres plus loin.</br>
                    Nous n'allons pas rentrer dans les détails de la fibre optique, mais nous allons seulement voir ce qui nous intéresse.</br></br>
                    Le nom scientifique de la fibre est communément le 1000BF. Du gigabit avec le F pour... Fibre ! Il existe aujourd'hui globalement deux types de fibre :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la fibre monomode ;</li>
                    <li>la fibre multimode.</li>
                </ul>
                <p style="margin-top: 20px;">
                    La fibre monomode fait passer une seule longueur d'onde lumineuse, soit une seule couleur. Elle fonctionne donc avec du laser qui peut être vert, bleu, rouge, etc.</br>
                    La fibre multimode fonctionne avec de la lumière blanche, et donc toutes les longueurs d'ondes (la lumière blanche est la somme de toutes les lumières possibles, comme celle du soleil).</br>
                    Mais pourquoi avoir deux fibres différentes ?</br></br>
                    Le débit et la distance parcourue ne seront pas les mêmes dans les deux cas. En effet, la fibre monomode est beaucoup plus performante que la multimode.</br>
                    Hein ? Une seule lumière est plus efficace que toutes les lumières ensemble ?</br>
                    Eh oui ! Dans le cas de la lumière blanche, la lumière envoyée dans la fibre va être reflétée à l'intérieur de la fibre. Mais chaque couleur va se refléter légèrement différemment, ce qui fait qu'au bout de la fibre au lieu d'avoir une lumière blanche, on aura des couleurs qui arriveront très proches, mais pas parfaitement ensemble.</br></br>
                    C'est comme si vous lanciez une poignée de cailloux. Les cailloux sont bien regroupés au lancement, mais plus ils avancent et plus ils s'éparpillent. Alors que si vous lancez un seul caillou, il arrivera groupé (vu qu'il est seul). C'est pareil pour la fibre monomode. On pourra ainsi parcourir une plus longue distance avec de la fibre monomode. En gros :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>2 km pour la fibre multimode ;</li>
                    <li>60 km pour la fibre monomode.</li>
                </ul>
                <p style="margin-top: 20px;">
                    Même si les distances parcourues aujourd'hui peuvent être beaucoup plus grandes (le record étant de l'ordre de 8000 km) c'est un bon ordre de grandeur.</br>
                    C'est ainsi que l'on a relié les États-Unis et l'Europe, en passant de la fibre monomode dans l'Atlantique, et en répétant le signal lumineux tous les 60 km...</br></br>
                    Aujourd'hui, vous n'utilisez pas la fibre pour relier votre ordinateur au réseau. Par contre, elle est très utilisée chez les opérateurs Internet qui ont besoin de beaucoup de bande passante, dans les grandes entreprises dans ce que l'on appelle le cœur de réseau, et parfois dans certaines entreprises lorsqu'il y a de gros moteurs qui créent des perturbations électromagnétiques (vu que la lumière y est insensible).
                </p>

                <p style="margin-top: 40px;">
                    Voilà, vous avez un aperçu de ce qui se fait en terme de câblage, du moins le câblage matériel, puisqu'il existe aussi aujourd'hui du câblage virtuel : le Wi-fi !
                </p>
                
                <p style="margin-top: 40px;">
                    Nous avons du matériel pour brancher les ordinateurs, il nous reste à savoir comment nous allons organiser ces branchements. En réseau, la topologie est la manière selon laquelle on branche les machines entre elles. </br>
                    Il y a trois topologies principales :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la topologie en bus ;</li>
                    <li>la topologie en anneau ;</li>
                    <li>la topologie en étoile.</li>
                </ul>
                <p style="margin-top: 20px;">
                    Dans la topologie en bus, toutes les machines sont branchées sur le même câble. Comme vous pouvez l'imaginer, cela se rapporte notamment à du câblage coaxial 10B2 ou 10B5.</br>
                    Dans la topologie en anneau, toutes les machines sont branchées à un même câble, mais celui-ci est bouclé sur lui-même en cercle.</br>
                    Enfin, dans la topologie en étoile, toutes les machines sont branchées à une machine centrale, qui sait envoyer les informations à une machine en particulier. Cela nous fait penser à des machines reliées en paires torsadées à un switch.
                </p>
                <p style="margin-top: 60px;">    
                    <b>Caractéristiques du bus</b></br>
                </p>

                <img src="../../../../images/bus-topology.png" class="img-fluid mx-auto d-block" style="max-width: 35%; margin-top: 20px;"/>

                <p style="margin-top: 30px;">
                    Sur un bus, une seule machine peut parler à la fois vu qu'il n'y a qu'un seul câble. En gros, on écoute si une machine parle, et si personne ne parle, on parle ! </br>
                    On ne peut pas brancher une infinité de machines sur un bus car nous n'avons qu'un seul câble pour tout le monde. Une seule personne peut parler à un instant donné. Donc plus il y a de machines et moins nous avons de possibilités de parler.</br>
                    C'est comme si vous étiez dans une pièce avec d'autres personnes. Plus vous êtes nombreux et plus il est difficile de parler et de prendre la parole.</br>
                    La taille du réseau ne peut être illimitée à cause du temps de propagation de l'information. Plus le câble est long, plus l'information met du temps à aller d'un bout à l'autre du réseau, et donc plus il y a de chances pour qu'une machine essaye de parler en même temps que les autres. La taille du réseau est donc limitée pour limiter le risque que plusieurs machines parlent en même temps.
                </p>

                <p style="margin-top: 60px;">    
                    <b>Caractéristiques de l'anneau</b></br>
                </p>

                <img src="../../../../images/ring-topology.png" class="img-fluid mx-auto d-block" style="max-width: 35%; margin-top: 20px;"/>

                <p style="margin-top: 30px;">
                    Sur un anneau, il y a un "jeton" qui tourne en permanence sur l'anneau et que les machines peuvent prendre pour envoyer un message.</br>
                    C'est un peu comme si vous étiez assis en rond avec des amis et que votre seul moyen de communiquer était un panier que vous vous passiez de l'un à l'autre, dans un sens. 
                    Pour parler, il faut prendre le panier et mettre son message dedans. Vous passez le panier à votre voisin qui regarde l'adresse du destinataire. Si c'est lui, il le lit, sinon il passe à son voisin, et ainsi de suite.</br>
                    On ne peut pas brancher une infinité de machines comme sur un bus car il n'y a qu'un jeton pour tout le monde.</br>
                    La taille du réseau ne peut être illimitée pour la même raison que le bus. Plus l'anneau est grand et plus le jeton met du temps à le parcourir. 
                </p>

                <p style="margin-top: 60px;">    
                    <b>Caractéristiques de l'étoile</b></br>
                </p>

                <img src="../../../../images/star-topology-with-switch.png" class="img-fluid mx-auto d-block" style="max-width: 42%; margin-top: 20px;"/>

                <p style="margin-top: 30px;">
                    En étoile, toutes les communications passent par le point central.</br>
                    On lui envoie l'information avec le nom du destinataire, et le point central aiguille l'information vers la bonne machine.</br>
                    On ne peut pas brancher une infinité de machines car cela dépend de la capacité de notre point central à traiter un grand nombre de machines. C'est lui, le facteur limitant.
                    Aujourd'hui, les switchs sont capables de traiter plusieurs milliers de machines. </br>
                    Peut-on faire un réseau de taille illimitée ?</br>
                    Oui ! Mais dans ce cas, il faut relier plusieurs points centraux entre eux. Ainsi, ils se transmettent l'information jusqu'à l'acheminer au destinataire. (voir example ci-dessous)
                </p>

                <img src="../../../../images/star-topology-with-switch-example.png" class="img-fluid mx-auto d-block" style="max-width: 45%; margin-top: 20px;"/>

                <p style="margin-top: 30px;">
                    Quelle topologie utiliser ?</br>
                    Cela semble assez clair, seule la topologie en étoile possède des caractéristiques permettant d'étendre son réseau aussi bien en taille qu'en nombre de machines. Et ça tombe bien, car les réseaux en bus ou anneau sont en voie de disparition aujourd'hui.
                </p>

                <h3 style="margin-top: 70px;">    
                    Le CSMA/CD - Carrier Sense Multiple Access/Collision Detection
                </h3>
                <p style="margin-top: 20px;">    
                    Pour comprendre cet acronyme, il va falloir se replonger dans la topologie en bus, et notamment comprendre comment l'on fait pour parler sur un bus.</br>
                    Dans une topologie en bus, il n'y a qu'un câble pour tout le monde, donc une seule machine peut parler à un instant t. Si deux machines parlent en même temps, il se produit une collision. </br>
                    En fait, le bus transporte une information électrique. Si deux machines parlent en même temps, les signaux électriques se superposent. Quand deux signaux à 5 V arrivent en même temps sur le câble, cela donne étonnamment 5 V. Par contre, si un signal 0 V arrive avec un signal 5 V, il en résulte 5 V et le premier signal devient donc incorrect (car on lit 5 V au lieu de 0 V). </br>
                    Et donc on ne comprend plus rien. </br>
                    Cependant, on peut essayer de limiter le nombre de collisions.</br>
                    C'est là que le CSMA/CD entre en jeu. Son objectif est de limiter le nombre de collisions en organisant le droit à la parole. L'idée est de mettre en place une règle qui permettrait de n'avoir presque plus de collisions :
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>On écoute en permanence sur le bus pour savoir si quelqu'un parle ou s'il y a une collision.</li>
                    <li>On ne peut parler que quand le bus est libre.</li>
                    <li>Si jamais on parle, mais qu'une collision survient (parce que quelqu'un a eu la même idée que nous) on doit se taire et attendre pour reparler.</li>
                </ol>
                <p style="margin-top: 30px;">  
                    Oui mais, s'il y a une collision, je me tais et j'attends. L'autre machine qui a parlé fait pareil. Seulement, lorsqu'on veut reparler il y a de nouveau une collision. Il va donc falloir une petite astuce pour éviter ce phénomène.</br>
                    Pour cela, lorsque nous détectons une collision, nous allons attendre un temps aléatoire avant de reparler. Vu que ce temps est aléatoire, il y a peu de chances pour que les deux machines tombent sur le même temps.
                </p>

                <img src="../../../../images/csma-cd.png" class="img-fluid mx-auto d-block" style="max-width: 60%; margin-top: 20px;"/>

            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    "Apprenez le fonctionnement des réseaux TCP/IP" de Eric Lalitte - Collection OpenClassrooms
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>