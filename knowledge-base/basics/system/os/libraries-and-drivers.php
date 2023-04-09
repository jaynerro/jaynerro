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
    <title>OS - Libraries & Drivers</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">OS</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Libraries & Drivers</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Libraries & Drivers
                </h1>
                <p style="margin-top: 30px;"> 
                    En informatique, une bibliothèque ou librairie logicielle (ou encore, bibliothèque de programmes) est un ensemble de fonctions utilitaires, regroupées et mises à disposition afin de pouvoir être utilisées sans avoir à les réécrire. Les fonctions sont regroupées de par leur appartenance à un même domaine conceptuel (mathématique, graphique, tris, etc). L'intérêt des bibliothèques réside dans le fait qu'elles contiennent du code utile que l'on ne désire pas avoir à réécrire à chaque fois. 
                </p>
            </div>
        </div>

        <div class="row justify-content-center" style="margin-top: 10px;">
            <div class="group col-sm-8">  
                <img src="../../../../images/library.png" class="img-fluid float-left" style="max-width: 37%; margin-left: 1%; margin-top: 30px;"/>
                <img src="../../../../images/library-2.png" class="img-fluid float-right" style="max-width: 60%; margin-left: 0.3%; margin-top: 30px;"/>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <p style="margin-top: 50px;"> 
                    Les bibliothèques logicielles se distinguent des exécutables dans la mesure où elles ne représentent pas une application. Elles ne sont pas complètes, elles ne possèdent pas l'essentiel d'un programme comme une fonction principale et par conséquent ne peuvent pas être exécutées directement. Les bibliothèques peuvent regrouper des fonctions simples (par exemple le calcul d'un cosinus, ou l'inversion d'une matrice) comme des fonctions complexes avec de nombreuses fonctions internes non accessibles directement.</br></br>
                    Les bibliothèques logicielles sont parfois regroupées en un framework, de façon à constituer un ensemble cohérent et complémentaire de bibliothèques.</br></br>
                    Le mot « librairie » est souvent utilisé à tort pour désigner une bibliothèque logicielle. Il s'agit d'un anglicisme fautif dû à un faux-ami (library).
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Origine du nom</b>
                </p>
                <p style="margin-top: 5px;">
                    Le nom de bibliothèque est dérivé du comportement humain : quand on ignore comment faire quelque chose de technique (par exemple, planter des graines dans un jardin) et que l'on veut pourtant le faire, on peut aller se documenter en bibliothèque et consulter des livres indiquant comment procéder sans avoir à réinventer la procédure soi-même et à chaque fois.</br></br>
                    Les programmes procèdent un peu de la même façon : plutôt que de coder une procédure courante dans chaque programme en ayant besoin (ce qui veut dire qu'une même procédure serait réécrite autant de fois sur un ordinateur qu'il y a de programmes susceptibles de l'utiliser), on rassemble ces procédures dans des bibliothèques. Si un programme a une fonction à remplir et que celle-ci se trouve en bibliothèque, il l'utilisera directement.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Conception et organisation des bibliothèques</b>
                </p>
                <p style="margin-top: 5px;">       
                    L'organisation classique des bibliothèques passe par un découpage thématique des fonctions, permettant au programmeur de retrouver plus facilement la fonction dont il a besoin. Ce découpage thématique permet de classer les bibliothèques selon les services qu'elles rendent :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>Bibliothèques de bas niveau ou bibliothèques système : elles fournissent des services d'interface avec le système d'exploitation, avec les périphériques, ou fournissent des outils génériques :</li>
                    <ul>
                        <li>Bibliothèques d'entrées/sorties : fonctions de lecture et d'écriture de fichiers, de périphériques d'entrée/sortie comme le clavier, l'écran, etc.</li>
                        <li>Gestion de structures de données système.</li>
                    </ul>
                    <li>Bibliothèques de haut niveau (aussi appelées bibliothèques métier, elles interagissent avec celles de bas niveau) : les fonctions qu'elles contiennent sont propres à une activité spécifique:</li>
                    <ul>
                        <li>Boîtes à outils graphiques : ensemble de fonctions permettant de gérer, d'animer et d'afficher des objets graphiques complexes (par exemple : OpenGL),</li>
                        <li>Bibliothèques d'opérateurs de traitement d'image : ensemble de fonctions destinées à structurer l'information dans une image à des fins d'analyse,</li>
                        <li>Gestion de structures de données utilisateur.</li>
                    </ul>
                </ul>
                <div id="API">
                    <p style="margin-top: 30px;"> 
                        Les interfaces de programmation (plus communément appelées API pour Application Programming Interface) sont la partie visibles d'une bibliothèque ou d'un ensemble de bibliothèques, permettant au programmeur de choisir parmi les fonctions disponibles celle qui va lui rendre le service dont il a besoin. Les APIs se présentent comme une liste des noms des fonctions ou/et classes disponibles, avec une documentation sur les paramètres à leur fournir et sur les résultats retournés.
                    </p>
                </div>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Mise en œuvre des bibliothèques au format du système d'exploitation</b>
                </p>
                <p style="margin-top: 20px;">
                    Principes
                </p>
                <p style="margin-top: 5px;">
                    Pour que le code exécutable puisse accéder aux instructions d'une fonction d'une bibliothèque qu'il utilise, il faut que chaque appel de fonction dans le code soit associé à l'adresse effective de la première instruction de la fonction appelée dans la bibliothèque.</br></br>
                    Pour cela, il existe plusieurs méthodes et outils, qui interviennent après l'étape de compilation :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>l'édition de liens assure la mise en place, dans le code exécutable de l'application, des instructions de branchement vers les fonctions externes (issues d'une ou de plusieurs bibliothèques) ;</li>
                    <li>si l'édition de lien est dynamique, intervient un chargeur permettant, lors de l'exécution du programme, d'amener en mémoire les fonctions des bibliothèques utilisées, de sorte que lorsqu'une fonction est appelée, son code soit disponible en mémoire.</li>
                    <li>si l'édition est statique: le code des fonctions utilisées par l'application est intégré au code de l'application qui devient par là-même autonome.</li>
                </ul>
                <p style="margin-top: 10px; justify-content: start;"> 
                    Le chargement des bibliothèques peut survenir de deux manières :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>À la volée lors d'un appel par le programme qui en exploite une fonction (liaison tardive), cette technique a l'avantage de ne charger que le code réellement nécessaire,</li>
                    <li>Ou au chargement du programme en vue de son exécution.</li>
                </ul>
                <p style="margin-top: 10px;"> 
                    Une bibliothèque est en principe partagée par le système d'exploitation afin de ne pas dupliquer son code dans toutes les applications y faisant appel. 
                </p>
                <p style="margin-top: 40px;" id="DLL">
                    Bibliothèques chargées dynamiquement
                </p>
                <p style="margin-top: 5px;">
                    Une bibliothèque dynamique, nommée Dynamic Link Library (.dll) pour Windows et nommée shared object (.so) ou "dynamic library" sous UNIX, est un fichier de bibliothèque logicielle utilisé par un programme exécutable, mais n'en faisant pas partie.</br></br>
                    Ce fichier contient des fonctions qui pourront être appelées pendant l'exécution d'un programme, sans que celles-ci soient incluses dans son exécutable.</br></br>
                    Les avantages des bibliothèques dynamiques sont:
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>la réduction de la taille d'un exécutable, puisque certaines parties du logiciel se situent en dehors de lui,</li>
                    <li>et la mise à jour possible des fonctions utiles pour toutes les applications qui les utilisent. Les applications bénéficient alors automatiquement des corrections ou des améliorations fonctionnelles de la bibliothèque.</li>
                </ul>
                <p style="margin-top: 40px;">
                    Bibliothèques partagées
                </p>
                <p style="margin-top: 5px;">
                    Lorsque plusieurs programmes utilisent les mêmes bibliothèques, il est judicieux de ne charger celles-ci qu'une seule fois en mémoire et de laisser tous les programmes en utiliser la même copie. On parle alors de bibliothèques partagées. Une bibliothèque peut être dynamique sans pour autant être partagée, et partagée sans être dynamique.</br></br>
                    Le fait de partager des bibliothèques implique de fortes contraintes de conception afin que les appels de fonction par un programme, susceptibles de modifier l'état interne de la bibliothèque, ne perturbent pas les autres programmes qui l'utilisent également. Dans un système multitâche, comme on ne maîtrise pas les moments où les fonctions de la bibliothèque sont appelées, il est possible qu'une fonction soit appelée plusieurs fois simultanément. On appelle réentrance la faculté d'une bibliothèque à pouvoir être utilisées simultanément par plusieurs applications.
                </p>
                <p style="margin-top: 40px; justify-content: start;">
                    <b>Cas spécifiques dans différents systèmes d'exploitation</b>
                </p>
                <p style="margin-top: 20px;">
                    Windows
                </p>
                <p style="margin-top: 5px;">
                    DLL signifie Dynamic Link Library, ou en français Bibliothèque de liens dynamiques, dans le cadre du Système d'exploitation Windows. Traditionnellement, le nom de ces fichiers se termine par l'extension ".dll". Une DLL peut contenir du code ou des ressources qui sont alors rendus disponibles à d'autres applications.</br></br>
                    Le code contenu dans une DLL n'est chargé qu'une seule fois en mémoire. Ainsi, lorsqu'un processus tente de charger une DLL qui est déjà en mémoire, le code existant est mappé dans la mémoire du programme sans qu'un second chargement soit nécessaire, gagnant de la place en RAM. Lorsque tous les processus qui exploitaient une DLL se sont terminés, suivant le type de la bibliothèque et les paramètres Windows, l'espace mémoire qui lui était attribué peut être libéré ou non modifié afin que les prochains programmes hôtes n'aient pas à réeffectuer l'opération de chargement.</br></br>
                    Une DLL peut être liée statiquement ou dynamiquement à un programme. Dans le premier cas, le programme déclare explicitement avoir besoin d'une fonction contenue dans une bibliothèque et la résolution de liens est effectuée par l'éditeur de lien au moment de la phase de compilation du programme. Le programme inclut alors dans sa structure binaire la liste des bibliothèques nécessaires à son bon fonctionnement dans sa "table des exportations" (export table). Le chargeur de programmes de Windows vérifie alors lors de l'exécution du programme que toutes les DLL requises sont disponibles, et si ce n'est pas le cas, stoppe le chargement en affichant un message indiquant que des dépendances nécessaires à l'exécutable n'ont pu être trouvées. Dans le second cas, c'est le programme qui demande explicitement le chargement d'une bibliothèque durant son exécution à l'aide de l'API LoadLibrary afin d'obtenir un pointeur sur la fonction désirée. Cette dernière approche est plus pénible car elle nécessite un effort plus important de la part du programmeur, mais elle permet d'une part de ne pas empêcher l'exécution d'un programme lié à une bibliothèque dont l'existence sur le système hôte n'est pas certaine, d'autre part constitue parfois le seul moyen d'accéder à des fonctions qui ne sont pas déclarées dans les fichiers d'interface fournis par l'éditeur et qui sont donc à considérer comme "non documentées".</br></br>
                    Des langages comme C, C++ ou Delphi sont aptes à créer des DLL qui peuvent être exploitées par d'autres programmes. De nombreux outils de développement qui proposent des bibliothèques d'exécution à l'instar des MFC ou de la VCL de Borland proposent soit une liaison statique (intégration directe du code dans l'exécutable) soit une liaison dynamique (la bibliothèque est alors à distribuer sous forme de DLL).</br></br>
                    L'utilisation de DLL permet de mettre à disposition du code et de rendre modulaire l'architecture d'une application. La mise à jour de celle-ci peut également se faire en remplaçant uniquement les DLL obsolètes. Néanmoins, l'utilisation de plusieurs versions concurrentes de DLL est problématique sous Windows et conduit à certaines incompatibilités regroupées sous le terme DLL Hell.</br></br>
                    Les DLL sont recherchées dans le répertoire courant, puis dans les répertoires inclus dans la variable d'environnement path comme c:\windows et c:\windows\system32.</br></br>
                    À cause d'une vulnérabilité appelée « DLL hijacking », « DLL spoofing », « DLL preloading », « DLL side-loading » ou « binary planting », plusieurs programmes chargent et exécutent des DLL malicieuses qui se trouvent dans les mêmes dossiers que des fichier ouverts par ces programmes. Les programmes exécutés à partir de dossiers non protégés, tels que « Téléchargements » et « Tmp » qui sont en lecture/écriture, sont plus susceptibles d'être visés.</br></br>
                    Cette vulnérabilité aurait été découverte en 2000 pour la première fois. En août 2010, après qu'elle soit redécouverte, plusieurs médias de différents pays en discutent. Plusieurs centaines de programmes sont alors jugés vulnérables. En avril 2022, il est révélé que VLC media player aurait fait l'objet d'une telle attaque pendant une quinzaine d'années.
                </p>
                <img src="../../../../images/dll-hijacking.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 40px;"/>
                <img src="../../../../images/dll-hijacking-2.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 30px;"/>
                <p style="margin-top: 60px;">
                    Unix, GNU/Linux et BSD
                </p>
                <p style="margin-top: 5px;">
                    Sous les systèmes de type Unix, les bibliothèques seront conventionnellement nommées à l'aide de l'extension .so (shared objet), .dylib (dynamic library de MacOSX), .a (archive, Unix traditionnels), .sl ("shared library") ou encore .sa ("shared archive", SunOS).</br></br>
                    Les fichiers .so sont recherchés dans les répertoires décrits par /etc/ld.so.conf (documentation disponible avec man ldconfig).</br></br>
                    Les bibliothèques peuvent évoluer et différentes versions peuvent être utilisées sur le même système, par exemple :
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/library'?></code></pre>
                <p style="margin-top: 30px; justify-content: start;">
                    Exemples
                </p>
                <pre><code class="language-markup"><?php require_once'../../../../script/library2'?></code></pre>

                <script src="../../../../static/js/prism.js" type="text/javascript"></script>
                <p style="margin-top: 50px; justify-content: start;">
                    Bibliothèques de langages de scripts
                </p>
                <p style="margin-top: 5px;">
                    Les langages de scripts comme python ou perl ont leurs propres bibliothèques, qui sont souvent écrites dans le dit langage de script.</br></br>
                    Par exemple la bibliothèque python2.4-pychart se compose notamment des trois fichiers suivants :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>/usr/lib/python2.4/site-packages/pychart/log_coord.py</li>
                    <li>/usr/lib/python2.4/site-packages/pychart/axis_doc.py</li>
                    <li>/usr/lib/python2.4/site-packages/pychart/object_set.py</li>
                </ul>
                <p style="margin-top: 60px;">
                    <b>Les drivers</b>
                </p>
                <p style="margin-top: 5px;">
                    Un pilote informatique (driver), souvent abrégé en pilote, est un programme informatique destiné à permettre à un autre programme (souvent un système d'exploitation) d'interagir avec un périphérique. En général, chaque périphérique a son propre pilote. Dit de manière simplifiée, un pilote d'imprimante est un logiciel qui traduit les ordres de l'utilisateur (le système) dans le langage de l'imprimante. Sans pilote, l'imprimante ou la carte graphique par exemple ne pourraient pas être utilisées. Un pilote manquant peut être, lors de son besoin, recherché dans et déchargé d'un répertoire du Web pour son installation.</br></br>
                    Certains systèmes d'exploitation comme Windows proposent leurs propres pilotes génériques censés fonctionner de manière satisfaisante avec la plupart des périphériques pour une utilisation courante. Si ces pilotes gèrent les grandes fonctions communes à tous les matériels, ils n'ont pas toujours toutes les capacités des pilotes de constructeurs, qui seuls connaissent parfaitement et en détail les spécifications du matériel piloté.</br></br>
                    À cause de la diversité des matériels modernes et des systèmes d'exploitation, il existe une multitude de pilotes. Ils gèrent l'interface entre le système d'exploitation (voire application à l'époque du DOS) et le matériel :
                </p>
                <ul style="font-size: large; text-align: justify; color: white;">
                    <li>des imprimantes ;</li>
                    <li>des cartes vidéo ;</li>
                    <li>des cartes réseau ;</li>
                    <li>des cartes son (par exemple : pilotes Realtek AC'97 Audio, rvlkl.exe) ;</li>
                    <li>des bus locaux de divers types, en particulier pour gérer les bus sur les systèmes modernes ;</li>
                    <li>des bus d'entrée/sortie de plusieurs types (par exemple pour les souris, claviers, l'Universal Serial Bus (USB), etc.) ;</li>
                    <li>des disques durs (ATA, Serial ATA, SCSI). En revanche les systèmes de fichiers (NTFS, ReiserFS, ext3fs) ne sont pas considérés comme des pilotes car ils s'adressent non au matériel lui-même, mais déjà à une abstraction de celui-ci ;</li>
                    <li>des scanners, appareils photo numériques, téléphone et caméscopes.</li>
                </ul>
                <p style="margin-top: 30px;">
                    La distinction entre un pilote et une librairie est généralement qu'un pilote est lié au matériel et n'est pas portable entre les plates-formes, tandis qu'une bibliothèque ordinaire devrait être portable et ne pas avoir de dépendances matérielles directes. Ce n'est pas une règle absolue, mais c'est la plus cohérente et rencontrée dans les systèmes embarqués.</br>
                    Il est également courant pour les fournisseurs d'appeler une collection de pilotes une bibliothèque. D'une certaine manière, vous pouvez considérer les pilotes comme un type particulier de bibliothèque dépendant du matériel, et une bibliothèque comme une simple collection de code associé.
                </p>
                <img src="../../../../images/driver.png" class="img-fluid mx-auto d-block" style="max-width: 70%; margin-top: 40px;"/>


            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.techno-science.net/definition/1470.html" target="_blank">Techno-Science.net - System call : Bibliothèque logicielle - Définition et Explications</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Biblioth%C3%A8que_logicielle" target="_blank">Wikipedia - Bibliothèque logicielle</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Dynamic_Link_Library" target="_blank">Wikipedia - Dynamic Link Library</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://learn.microsoft.com/fr-fr/troubleshoot/windows-client/deployment/dynamic-link-library" target="_blank">Microsoft - Qu’est-ce qu’une bibliothèque DLL ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.wikipedia.org/wiki/Pilote_informatique" target="_blank">Wikipedia - Pilote informatique</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>