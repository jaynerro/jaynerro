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
    <link rel="stylesheet" href="../../../../static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../static/vendor/fontawesome/all.min.css" />

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="../../../../static/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../static/css/prism.css"/>


    <?php // Titre de l'onget de la page ?>
    <title>Hardware - Différentes architectures et jeu d'instructions</title>
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
                            <li class="breadcrumb-item"><a href="../../../../knowledge-base">Knowledge Base</a></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Cybersécurité : les bases</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Hardware</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">Les processeurs</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Différentes architectures et jeu d'instructions</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Différentes architectures et jeu d'instructions
                </h1>
                <img src="../../../../images/arm-vs-x86.png" class="img-fluid mx-auto d-block" style="max-width: 55%; margin-top: 40px;"/>
                <p style="margin-top: 50px;">
                    Les instructions d'un processeur dépendent fortement du processeur utilisé. La liste de toutes les instructions qu'un processeur peut exécuter s'appelle son jeu d'instructions.</br></br>
                    Celui-ci définit les instructions supportées, ainsi que la manière dont elles sont encodées en mémoire. Le jeu d'instruction des PC actuels est le x86, un jeu d'instructions particulièrement ancien, apparu en 1978. Les anciens macintoshs (la génération de macintosh produits entre 1994 et 2006) utilisaient un jeu d'instruction différent : le PowerPC (depuis 2006, les macintoshs utilisent un processeur X86).</br></br>
                    Mais les architectures x86 et Power PC ne sont pas les seules au monde : il existe d'autres types d'architectures qui sont très utilisées dans le monde de l’informatique embarquée et dans tout ce qui est tablettes et téléphones portables derniers cris. On peut citer notamment les architectures ARM, MIPS et SPARC. Pour résumer, il existe différents jeux d'instructions, que l'on peut classer suivant divers critères.</br></br>
                    Une des classification de ces diverses architectures se base sur le nombre d'instructions. Elle classe nos processeurs en deux catégories :
                </p>
                <ul style="margin-top: 20px; font-size: large; text-align: justify; color: white;">
                    <li>les RISC (reduced instruction set computer), au jeu d'instruction simple ;</li>
                    <li>et les CISC (complex instruction set computer), qui ont un jeu d'instruction étoffé.</li>
                </ul>
                <p style="margin-top: 60px; margin-left: 40px; font-size: x-large; justify-content: start">
                    <b>ARM vs x86</b>
                </p>
                <p style="margin-top: 30px;">
                    La principale différence entre les deux architectures tient dans les choix de conception de leur jeu d’instruction : le x86 est une architecture CISC (Complex Instruction Set Computer), tandis que l’ARM est une architecture RISC (Reduced ISC).</br></br>
                    Cela signifie que les puces ARM ne supportent que des instructions simples et de taille fixe (4 octets pour le jeu d’instructions ARM standard, 2 octets pour le jeu réduit Thumb), s’exécutant en un nombre constant de cycles, à l’inverse des puces x86 qui proposent des instructions nécessitant plus de cycles que d’autres, pour réaliser certaines tâches complexes. Les puces ARM supportent également moins de modes d’adressage (la façon de référencer une donnée dans une instruction), la plupart des instructions ne pouvant travailler qu’avec des données présentes dans un registre (des petites zones de mémoire intégrées au processeur), alors que la majorité des instructions x86 peuvent aller chercher des données directement en mémoire.</br></br>
                    L’intérêt d’une architecture RISC se situe principalement dans la moindre complexité du schéma électronique de la puce : pour atteindre un même niveau de performances, il faut généralement moins de transistors, ce qui permet de réduire les coûts de production et d’avoir une meilleure efficacité thermique. Du fait de l’obligation de faire des accès mémoire explicites dans le code, les processeurs RISC sont également souvent dotés d’un plus grand nombre de registres, ce qui permet de réduire la fréquence des accès mémoire. Ainsi, l’architecture ARMv7 dispose de 15 registres principaux et l’architecture ARMv8 en comporte 31, alors que le x86 n’en possède que 8 pour le code 16/32/64 bits et 8 supplémentaires réservés au code 64 bits.</br></br>
                    Les architectures CISC ont pour leur part l’avantage de permettre un code exécutable plus compact, réduisant ainsi le nombre d’accès à la mémoire. Par ailleurs, même si elles sont plus longues à exécuter que les instructions simples, certaines instructions spécialisées peuvent s’exécuter bien plus vite que leur équivalent en instructions simples. En contrepartie, l’étage de décodage des instructions est plus complexe, puisqu’il doit être capable d’interpréter un grand nombre d’instructions, de tailles très variables (les plus courtes ne font qu’un seul octet, mais les plus longues frisent les 20 octets) et de gérer des modes d’adressage avancés, nécessitant de réaliser des opérations arithmétiques pour déterminer les adresses. Par exemple, l’un des modes d’adressage du x86 permet d’utiliser des adresses de la forme R1+R2*C1+C2 ou R1 et R2 sont le contenu de deux registres et C1 et C2 deux constantes intégrées directement dans le code de l’instruction.</br></br>
                    Notons toutefois qu’en pratique les processeurs x86 d’aujourd’hui ont en fait un cœur d’exécution interne plus proche d’une architecture RISC que d’une architecture CISC, associé à un étage de décodage des instructions qui s’occupe de convertir le flux d’instructions x86 en instructions internes plus simples. Ces processeurs restent des processeurs CISC, du fait de leur interface interne, mais le recours à une architecture interne RISC permet de réduire la complexité des unités d’exécution.
                    À l’inverse, les processeurs ARM (et bon nombre d’autres processeurs RISC) ont adopté des instructions spécialisées, notamment pour les traitements multimédia, via des extensions du jeu d’instructions de base, comme par exemple l’extension NEON.
                </p>
                <p style="margin-top: 30px;" id="CISC">
                    Les processeurs CISC</br></br>
                    Les jeux d'instructions CISC sont les plus anciens et étaient à la mode jusqu'à la fin des années 1980. À cette époque, on programmait rarement avec des langages de haut niveau et beaucoup de programmeurs codaient en assembleur. Avoir un jeu d'instruction complexe, avec des instructions de "haut niveau" qu'on ne devait pas refaire à partir d'instructions plus simples, facilitait la vie des programmeurs.</br></br>
                    Cette complexité des jeux d'instructions n'a pas que des avantages "humains", mais a aussi quelques avantages techniques. Le premier est une meilleure densité de code : un programme codé sur CISC utilise moins d'instructions et prend moins de mémoire. À l'époque des processeurs CISC, la mémoire était rare et chère, ce qui faisait que les ordinateurs n'avaient pas plusieurs gigaoctets de mémoire : économiser celle-ci était crucial. Cet avantage était donc crucial, ce qui contrebalançait les défauts de ces architectures. Ces défauts étaient essentiellement le fait que le grand nombre d'instructions entraîne une grande consommation de transistors et d'énergie. La difficulté de conception de ces processeur était aussi sans précédent.
                </p>
                <p style="margin-top: 30px;" id="RISC">
                    Les processeurs RISC</br></br>
                    Est-ce que les instructions complexes des processeurs CISC sont vraiment utiles ? Pour le programmeur qui écrit ses programmes en assembleur, elle le sont. Mais depuis l'invention des langages de haut niveau, la réponse dépend de l'efficacité des compilateurs. Des analyses assez anciennes, effectuées par IBM, DEC et quelques laboratoires de recherche, ont montré que les compilateurs n'utilisaient pas la totalité des instructions fournies par un processeur. Nombre de ces instructions ne sont utilisées que dans de rares cas, voire jamais. Autant dire que beaucoup de transistors étaient gâchés ! L'idée de créer des processeurs possédant des jeux d'instructions simples et contenant un nombre limité d'instructions très rapides commença à germer. Ces processeurs sont de nos jours appelés des processeurs RISC (acronyme de Reduced Instruction Set Computer). Ils n'ont pas les défauts des CISC, mais n'en ont pas les avantages : la densité de code est mauvaise, en contrepartie d'une simplicité non-négligeable du processeur et une moindre consommation thermique/de transistors.</br></br>
                    Mais de tels processeurs RISC, complètement opposés aux processeurs CISC, durent attendre un peu avant de percer. Par exemple, IBM décida de créer un processeur possédant un jeu d'instruction plus sobre, l'IBM 801, qui fût un véritable échec commercial. Mais la relève ne se fit pas attendre. C'est dans les années 1980 que les processeurs possédant un jeu d'instruction simple devinrent à la mode. Cette année là, un scientifique de l'université de Berkeley décida de créer un processeur possédant un jeu d'instruction contenant seulement un nombre réduit d'instructions simples, possédant une architecture particulière. Ce processeur était assez novateur et incorporait de nombreuses améliorations qu'on retrouve encore dans nos processeurs haute performances actuels, ce qui fit son succès : les processeurs RISC étaient nés.
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
                    <a href="https://fr.wikibooks.org/wiki/Fonctionnement_d%27un_ordinateur/Les_jeux_d%27instructions#Les_jeux_d'instruction_RISC_vs_CISC" target="_blank">Wikibooks - Fonctionnement d'un ordinateur/Les jeux d'instructions</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.infobidouille.com/pcworld/la-question-technique-17-arm-contre-x86-quelles-differences-fondamentales/" target="_blank">Infobidouille - ARM contre x86, quelles différences fondamentales ?</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://fr.quora.com/Quelle-est-la-diff%C3%A9rence-entre-une-architecture-ARM-et-une-architecture-X86#:~:text=La%20principale%20diff%C3%A9rence%20entre%20les,architecture%20RISC%20(Reduced%20ISC)." target="_blank">Quora - Quelle est la différence entre une architecture ARM et une architecture X86 ?</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>