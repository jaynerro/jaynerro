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
    <link rel="stylesheet" href="../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../static/vendor/fontawesome/all.min.css" />

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Hardware - Système binaire</title>
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
                            <li class="breadcrumb-item"><a href="../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Hardware</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Système binaire</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Système binaire
                </h1>
                <img src="../../../images/binary-number-system-1.png" class="img-fluid mx-auto d-block" style="max-width: 65%; margin-top: 40px;"/>
                <p style="margin-top: 30px;">
                    Le binaire est un système de numération en base 2. Globalement, cela veut dire qu'on ne peut compter qu'avec 1 et 0, contrairement au système de numération décimal que nous avons l'habitude d'utiliser dans lequel on se sert des chiffres de 0 à 9.</br></br>
                    Si je compte en binaire, cela donne le résultat suivant :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/binary-system-1'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    Ce qui est équivalent en décimal à :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/binary-system-2'?></code></pre>
                <p style="margin-top: 30px; justify-content: start">
                    <b>Pourquoi utilise-t-on le binaire ?</b>
                </p>
                <p style="margin-top: 6px; justify-content: start">
                    Car les informations électriques passent sous la forme de 0 V ou 5 V, soit deux états différents 0 ou 1.
                </p>
                <p style="margin-top: 35px; justify-content: start">
                    <b>Comment calculer en binaire ?</b>
                </p>
                <p style="margin-top: 6px; justify-content: start">
                    Vous avez l'habitude de travailler en décimal. Il faut savoir que tout nombre décimal peut s'écrire en binaire.</br>
                    Plus exactement, tout nombre décimal peut s'écrire comme une somme de puissances de 2.</br>
                    Prenons un exemple avec le nombre 45. Il peut s'écrire : 45 = 32 + 8 + 4 + 1
                </p>
                <pre><code class="language-markup"><?php require_once'../../../script/binary-system-3'?></code></pre>
                <p style="margin-top: 20px; justify-content: start">
                    On peut donc écrire 45 en binaire : 101101</br></br>
                    Tout nombre décimal peut s'écrire comme une somme de puissances de 2.</br></br>
                    On peut donc faire un tableau de puissances de 2 qui nous aidera à faire nos calculs :
                </p>
                <div class="table-responsive">
                    <table class="table table-dark table-striped" style="margin-top: 10px;">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">2 ^ 7</th>
                                <th scope="col">2 ^ 6</th>
                                <th scope="col">2 ^ 5</th>
                                <th scope="col">2 ^ 4</th>
                                <th scope="col">2 ^ 3</th>
                                <th scope="col">2 ^ 2</th>
                                <th scope="col">2 ^ 1</th>
                                <th scope="col">2 ^ 0</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>128</td>
                                <td>64</td>
                                <td>32</td>
                                <td>16</td>
                                <td>8</td>
                                <td>4</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">?</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top: 10px; justify-content: start">
                    Pour notre nombre 45, cela donne :
                </p>
                <div class="table-responsive">
                    <table class="table table-dark table-striped" style="margin-top: 10px;">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">2 ^ 7</th>
                                <th scope="col">2 ^ 6</th>
                                <th scope="col">2 ^ 5</th>
                                <th scope="col">2 ^ 4</th>
                                <th scope="col">2 ^ 3</th>
                                <th scope="col">2 ^ 2</th>
                                <th scope="col">2 ^ 1</th>
                                <th scope="col">2 ^ 0</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row"></th>
                                <td>128</td>
                                <td>64</td>
                                <td>32</td>
                                <td>16</td>
                                <td>8</td>
                                <td>4</td>
                                <td>2</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th scope="row">45</th>
                                <td>0</td>
                                <td>0</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                                <td>1</td>
                                <td>0</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p style="margin-top: 10px; justify-content: start">
                    Soit 101101.
                </p>
                <p style="margin-top: 40px; ">
                    ___________________________________
                </p>
                <p style="margin-top: 50px; font-size: x-large;">
                    <b>L'hexadécimal</b>
                </p>
                <p style="margin-top: 30px; justify-content: start">
                    À l'inverse du binaire pour lequel nous n'avions que 0 et 1 comme chiffres à notre disposition, en hexadécimal nous en avons 16 : 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, a, b, c, d, e et f.</br></br>
                    Par exemple, 10 en hexadécimal s'écrit a. 11 s'écrit b, etc.</br></br>
                    Tout nombre décimal peut s'écrire comme la somme de puissances de 16.</br></br>
                    Exemple = une adresse MAC s'écrit en hexadécimal (00:23:5e:bf:45:6a).
                </p>
                <script src="../../../static/js/prism.js" type="text/javascript"></script>
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
                    <a href="https://openclassrooms.com/fr/courses/5439146-faites-vos-premiers-pas-dans-le-monde-de-l-electronique-numerique/5689166-codez-en-binaire-les-entiers-naturels-et-relatifs" target="_blank">OpenClassrooms - Maîtrisez le code binaire</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../footer.php'); ?>
</html>