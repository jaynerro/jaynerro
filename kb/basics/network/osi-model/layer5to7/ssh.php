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
    <title>Modèle OSI - Couche 5 à 7 : SSH</title>
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
                            <li class="breadcrumb-item"><a href="../../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Réseaux</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Modèle OSI</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Couche 5 à 7</p></li>
                            <li class="breadcrumb-item active" aria-current="page">SSH</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1 id="SSH"> 
                    SSH
                </h1>
                <p style="margin-top: 30px;"> 
                    Secure Shell (SSH) est à la fois un programme informatique et un protocole de communication sécurisé. Le protocole de connexion impose un échange de clés de chiffrement en début de connexion. Par la suite, tous les segments TCP sont authentifiés et chiffrés. Il devient donc impossible d'utiliser un sniffer pour voir ce que fait l'utilisateur.</br>
                    Le protocole SSH a été conçu avec l'objectif de remplacer les différents protocoles non chiffrés comme rlogin, telnet, rcp et rsh.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Le protocole</b>
                </p>
                <p style="margin-top: 30px; justify-content: start;"> 
                    Le protocole SSH existe en deux versions majeures : la version 1.0 et la version 2.0.
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>La première version permet de se connecter à distance à un ordinateur afin d'obtenir un shell ou ligne de commande. Cette version souffrait néanmoins de problèmes de sécurité dans la vérification de l'intégrité des données envoyées ou reçues, la rendant vulnérable à des attaques actives. En outre, cette version implémentait un système sommaire de transmission de fichiers, et du port tunneling.</li>
                    <li>La version 2 qui était à l'état de brouillon jusqu'en janvier 2006 est largement utilisée à travers le monde.</li>
                </ul>
                <p style="margin-top: 30px;">
                    Cette version est beaucoup plus sûre au niveau cryptographique, et possède en plus un protocole de transfert de fichiers complet, le SSH file transfer protocol.</br></br>
                    Habituellement le protocole SSH utilise le port TCP 22. Il est particulièrement utilisé pour ouvrir un shell sur un ordinateur distant. Peu utilisé sur les stations Windows (quoiqu'on puisse l'utiliser avec PuTTY, mRemote, cygwin ou encore OpenSSH), SSH fait référence pour l'accès distant sur les stations Linux et Unix.</br></br>
                    SSH peut également être utilisé pour transférer des ports TCP d'une machine vers une autre, créant ainsi un tunnel. Cette méthode est couramment utilisée afin de sécuriser une connexion qui ne l'est pas (par exemple le protocole de récupérations de courrier électronique POP3) en la faisant transférer par le biais du tunnel chiffré SSH.</br></br>
                    Il est également possible de faire plusieurs sauts entre consoles SSH, c'est-à-dire ouvrir une console sur un serveur, puis, de là, en ouvrir une autre sur un autre serveur.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>SSH avec authentification par clés</b>
                </p>
                <p style="margin-top: 30px;">
                    Avec SSH, l'authentification peut se faire sans l'utilisation de mot de passe ou de phrase secrète en utilisant la cryptographie asymétrique. La clé publique est distribuée sur les systèmes auxquels on souhaite se connecter. La clé privée, qu'on prendra le soin de protéger par un mot de passe, reste uniquement sur le poste à partir duquel on se connecte. L'utilisation d'un « agent ssh » permet de stocker le mot de passe de la clé privée pendant la durée de la session utilisateur.</br>
                    Cette configuration profite aussi à SCP (Secure Copy) et à SFTP (SSH File Transfert Protocol) qui se connectent au même serveur SSH.</br></br>
                    Des exemples de logiciels ssh les plus connus sont les suivants : 
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>OpenSSH, le projet libre d'outils SSH. OpenSSH est l'implémentation ssh la plus utilisée, y compris par les distributions GNU/Linux.</li>
                    <li>PuTTY, un client SSH multi-OS.</li>
                </ul>
                <p style="margin-top: 60px;">
                    Le protocole SSH peut permettre l'encapsulation de n'importe quel protocole. Ainsi, un protocole non chiffré comme l'HTTP peut être encapsulé (comprendre "emballé", comme un objet dans un colis) dans un le protocole SSH pour passer un pare-feu ou un proxy par exemple. Il sera ensuite désencapsulé à la destination ("déballé"). On peut également entendre la description de "Proxy SSH" lorsque l'on parle de ce procédé de tunneling SSH.</br></br>
                    La commande SSH se compose de 3 parties distinctes :
                </p>
                <pre style="margin-top: 30px;"><code class="language-markup"><?php require_once'../../../../../script/ssh'?></code></pre>
                <p style="margin-top: 30px;">
                    La commande de la clé SSH indique à votre système que vous souhaitez ouvrir une connexion Secure Shell chiffrée. {user} représente le compte auquel vous souhaitez accéder. Par exemple, vous voudrez peut-être accéder à l’utilisateur root, qui est essentiellement synonyme d’administrateur système avec tous les droits de modification de tout sur le système. {host} fait référence à l’ordinateur auquel vous souhaitez accéder. Ceci peut être une adresse IP (par ex. 244.235.23.19) ou un nom de domaine (par exemple, www.xyzdomain.com).</br></br>
                    Lorsque vous appuyez sur Entrée, vous serez invité à entrer le mot de passe du compte demandé. Lorsque vous le saisissez, rien ne s’affiche à l’écran, mais votre mot de passe est en fait transmis. Une fois que vous avez fini de taper, appuyez une fois sur Enter. Si votre mot de passe est correct, vous serez accueilli avec une fenêtre de terminal à distance.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>SSH et ses techniques de chiffrement</b>
                </p>
                <p style="margin-top: 30px;">
                    La façon dont fonctionne SSH, c’est qu’il utilise un modèle client-serveur pour permettre l’authentification de deux systèmes distants et le chiffrement des données qui les traversent.</br></br>
                    SSH fonctionne par défaut sur le port TCP 22 (bien que cela puisse être modifié si nécessaire). L’hôte (serveur) écoute le port 22 (ou tout autre port SSH assigné) et guette les connexions entrantes. Il organise la connexion sécurisée en authentifiant le client et en ouvrant le bon environnement de correct si la vérification est réussie.
                </p>
                <img src="../../../../../images/ssh-working.jpeg" class="img-fluid mx-auto d-block" style="max-width: 80%; margin-top: 30px;"/>
                <p style="margin-top: 30px;">
                    Le client doit commencer la connexion SSH en lançant le handshake TCP avec le serveur, en assurant une connexion symétrique sécurisée, en vérifiant si l’identité affichée par le serveur correspond aux enregistrements précédents (habituellement enregistrés dans un fichier de stockage de clés RSA) et présente les informations d’identification requises pour authentifier la connexion.</br></br>
                    Il existe deux étapes pour établir une connexion : d’abord, les systèmes doivent s’entendre sur les normes de chiffrement pour protéger les communications futures, et deuxièmement, l’utilisateur doit s’authentifier. Si les informations d’identification correspondent, l’utilisateur reçoit l’accès.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Négociation de chiffrement de session</b>
                </p>
                <p style="margin-top: 30px;">
                    Lorsqu’un client tente de se connecter au serveur via TCP, le serveur présente les protocoles de chiffrement et les versions respectives qu’il prend en charge. Si le client possède une paire de protocoles et de versions correspondant, un accord est atteint et la connexion commence avec le protocole accepté. Le serveur utilise également une clé publique asymétrique que le client peut utiliser pour vérifier l’authenticité de l’hôte.</br></br>
                    Une fois que cela est établi, les deux parties utilisent ce qu’on appelle un algorithme d’échange de clés Diffie-Hellman (en anglais) pour créer une clé symétrique. Cet algorithme permet au client et au serveur d’arriver à une clé de chiffrement partagée qui sera désormais utilisée pour chiffrer toute la session de communication.</br></br>
                    Voici comment l’algorithme fonctionne à un niveau très basique:
                </p>
                <ol style="font-size: large; text-align: justify; color: white;">
                    <li>Le client et le serveur se mettent d’accord sur un très grand nombre premier, qui n’a bien sûr aucun facteur en commun. Cette valeur de nombre premier est également appelée  valeur de départ.</li>
                    <li id="AES">Ensuite, les deux parties conviennent d’un mécanisme de chiffrement commun pour générer un autre ensemble de valeurs en manipulant les valeurs de base d’une manière algorithmique spécifique. Ces mécanismes, également appelés générateurs de chiffrement, effectuent de grandes opérations sur les valeurs de base. Un exemple d’un tel générateur est AES (Advanced Encryption Standard).</li>
                    <li>Les deux parties génèrent indépendamment un autre nombre premier. Celui-ci est utilisé comme clé privée secrète pour l’interaction.</li>
                    <li>Cette clé privée nouvellement générée, avec le numéro partagé et l’algorithme de chiffrement (p. Ex. AES), sert à calculer une clé publique qui est distribuée à l’autre ordinateur.</li>
                    <li>Les parties utilisent ensuite leur propre clé privée, la clé publique partagée de l’autre machine et le numéro premier d’origine pour créer une clé partagée finale. Cette clé est calculée indépendamment par les deux ordinateurs, mais créera la même clé de chiffrement des deux côtés.</li>
                    <li>Maintenant que les deux côtés ont une clé partagée, ils peuvent chiffrer symétriquement toute la session SSH. La même clé peut être utilisée pour chiffrer et déchiffrer des messages.</li>
                </ol>
                <p style="margin-top: 30px;">
                    Maintenant que la session sécurisée symétriquement chiffrée a été établie, l’utilisateur doit être authentifié.
                </p>
                <p style="margin-top: 50px; justify-content: start;">
                    <b>Authentification de l’utilisateur</b>
                </p>
                <p style="margin-top: 30px;">
                    La phase finale avant que l’utilisateur ait accès au serveur authentifie ses informations d’identification. Pour cela, la plupart des utilisateurs SSH utilisent un mot de passe. L’utilisateur est invité à entrer le nom d’utilisateur, suivi du mot de passe. Ces informations d’identification passent en toute sécurité par le tunnel chiffré symétriquement, de sorte qu’il n’ a aucune chance d’être capturé par un tiers.</br></br>
                    Bien que les mots de passe soient chiffrés, il n’est toujours pas recommandé d’utiliser des mots de passe pour les connexions sécurisées. C’est parce que de nombreux robots peuvent simplement forcer des mots de passe faciles ou mots de passe par défaut, et accéder à votre compte. Au lieu de cela, l’alternative recommandée est SSH Key Pairs.</br></br>
                    Il s’agit d’un ensemble de clés asymétriques utilisées pour authentifier l’utilisateur sans avoir à entrer de mot de passe.</br></br>
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
                    <a href="https://fr.wikipedia.org/wiki/Secure_Shell" target="_blank">Wikipedia - SSH</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.it-connect.fr/chapitres/a-quoi-sert-ssh/" target="_blank">IT-connect - A quoi sert SSH ?</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.hostinger.fr/tutoriels/ssh-linux" target="_blank">Hostinger - Comprendre et mieux utiliser le protocole SSH</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.ipxo.com/blog/what-is-ssh/" target="_blank">Ipxo - What is SSH ?</a>
                </h6>             

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../../footer.php'); ?>
</html>