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
    <title>OS - Système de fichiers</title>
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
                            <li class="breadcrumb-item"><p style="font-size: medium;">Système</p></li>
                            <li class="breadcrumb-item"><p style="font-size: medium;">OS</p></li>
                            <li class="breadcrumb-item active" aria-current="page">Système de fichiers</li>
                        </ol>
                    </nav>
                </div> 
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <h1> 
                    Système de fichiers
                </h1>
                <p style="margin-top: 30px;" id="FS"> 
                    Si jamais je branche un disque dur sur mon pc, j'ai beau le voir dans mon BIOS bien branché et bien activé, ce n'est pas pour autant que je vais pouvoir l'utiliser immédiatement. Ceci est du par le fait que le disque va avoir besoin d'une matrice pour fonctionner appellée système de fichiers. Sur du Windows ce sera NTFS. Il s'agit d'une structure qui va permettre de gérer des fichiers mais aussi des autorisations. Sur Linux, ce sera ext3, ext4.  
                </p>
                <img src="../../../../images/disk-management.jpeg" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 40px;"/>

                <p style="margin-top: 30px;" id="FAT"> 
                    Un autre format de système de fichier sont les : FAT32 (clé usb), exFAT (Extended File Allocation Table pour les disques dur externes). Il s'agit de systèmes de fichier simple sans gestion de droit. Sur Windows vous pouvez voir votre gestion de disque dans le Disk Management. 
                </p>
                <img src="../../../../images/linux-file-system.png" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 40px;"/>

                <p style="margin-top: 30px; justify-content: start"> 
                    Pour gérer tout ce qui est Partition, gestion de disque sous Linux nous pouvons utiliser fdisk.
                </p>
                <img src="../../../../images/fat32-exfat-ntfs.jpeg" class="img-fluid mx-auto d-block" style="max-width: 100%; margin-top: 40px;"/>



            </div>
        </div>
      
        <div class="row justify-content-center">
            <div class="group col-sm-8">
  
                <h3 style="margin-top: 130px;">
                    Références
                </h3>

                <h6 style="margin-top: 30px;">
                    <a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_de_fichiers" target="_blank">Wikipedia - Système de fichiers</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.malekal.com/fdisk-gfdisk-creer-supprimer-redimensionner-des-partitions-de-disque-en-ligne-de-commandes-linux/" target="_blank">Malekal.com - fdisk/gfdisk : Créer, supprimer, redimensionner des partitions de disque en ligne de commandes sur Linux</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.youtube.com/watch?v=Sv8h0zGgd3c" target="_blank">Tarik Med - Systèmes de fichiers</a>
                </h6>

                <h6 style="margin-top: 30px;">
                    <a href="https://www.youtube.com/watch?v=iGO7N7eoqZU" target="_blank">Edouard BUGNION - Les systèmes de fichiers</a>
                </h6>

                <h6 style="margin-top: 30px; margin-bottom: 140px;">
                    <a href="https://www.youtube.com/watch?v=2bAMmLBt3-4" target="_blank">Tuyet Tram DANG NGOC - Système d'exploitation : système de fichiers</a>
                </h6>

            </div>
        </div>

    </body>
    <?php //Inclusion du pied de page ?>
    <?php require_once('../../../../footer.php'); ?>
</html>