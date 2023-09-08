<?php //On démarre la session ?>
<?php //session_start(); ?>


<!DOCTYPE html>
<html lang="fr">

  <head>
    <?php // Base pour les urls htaccess ?>
    <base href="/">

    <?php // Type d'encodage ?>
    <meta charset="utf-8">

    <?php // Balise viewport permettant à une page web d'être responsive ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php // Bootstrap CSS ?>
    <link rel="stylesheet" href="static/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/vendor/fontawesome/all.min.css" />
    <link rel="stylesheet" href="static/css/tree.css">

    <?php // Feuille de style ?>
    <link rel="stylesheet" href="static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Knowledge Base</title>
    <link rel="icon" type="image/png" href="/images/jaynerro-icon.png">
  </head>

  <?php // Corps de la page ?>
  <body class="dark">

    <?php //Inclusion de la barre de navigation ?>
    <?php require_once('header.php'); ?>
    
    <div class="container" style="margin-top: 80px;">
      <div class="row justify-content-center">
        <div class="col-sm-8">
          <h1> 
            Knowledge Base
          </h1>
        </div>
      </div>
      <div class="row justify-content-center" style="margin-top: 30px; margin-bottom: 120px;">
        <div class="col-sm-8">
          <ul id="nav-tree">
            <li id="liCyberBasics">
              <a>Cybersécurité : les bases</a>
              <ul>
                <li id="liNetwork">
                  <a>Réseaux</a>
                  <ul>
                    <li id="liNetworkArchitecture">
                      <a href="/kb/basics/network/network-architecture">L'architecture réseau</a>
                    </li>

                    <li id="liOSI">
                      <a>Modèle OSI</a>
                      <ul>

                        <li id="liOSIModelDefinition">
                          <a href="/kb/basics/network/osi-model/definition">Qu'est-ce que c'est ?</a>
                        </li>

                        <li id="liLayer1">
                          <a href="/kb/basics/network/osi-model/layer1">Couche 1</a>
                        </li>

                        <li id="liLayer2">
                          <a href="/kb/basics/network/osi-model/layer2">Couche 2</a>
                        </li>
                        
                        <li id="liLayer3">
                          <a>Couche 3</a>
                          <ul>

                            <li id="liLayer3AndIPProtocol">
                              <a href="/kb/basics/network/osi-model/layer3/layer3">La couche Réseau</a>
                            </li>

                            <li id="liIPAddressAssignment">
                              <a href="/kb/basics/network/osi-model/layer3/IP-address-assignment">Découpage de plages d'adresses</a>
                            </li>

                            <li id="liARPAndICMP">
                              <a href="/kb/basics/network/osi-model/layer3/ARP-ICMP">Autres protocoles : ARP & ICMP</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liLayer4">
                          <a>Couche 4</a>
                          <ul>
                            <li id="liClientServerModel">
                              <a href="/kb/basics/network/osi-model/layer4/client-server-model">Modèle Client-Serveur</a>
                            </li>

                            <li id="liLayer4">
                              <a href="/kb/basics/network/osi-model/layer4/layer4">La couche Transport</a>
                            </li>

                            <li id="liLayer4">
                              <a href="/kb/basics/network/osi-model/layer4/nat-and-port-forwarding">NAT et port forwarding</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liLayer5to7">
                          <a>Couche 5 à 7</a>
                          <ul>

                            <li id="liDHCP">
                              <a href="/kb/basics/network/osi-model/layer5to7/dhcp">DHCP</a>
                            </li>

                            <li id="liDNS">
                              <a href="/kb/basics/network/osi-model/layer5to7/dns">DNS</a>
                            </li>

                            <li id="liHTTP">
                              <a href="/kb/basics/network/osi-model/layer5to7/http">HTTP</a>
                            </li>

                            <li id="liSSH">
                              <a href="/kb/basics/network/osi-model/layer5to7/ssh">SSH</a>
                            </li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li id="liWirelessNetwork">
                      <a>Réseaux sans fil</a>
                      <ul>
                        <li id="liWiFi">
                          <a href="/kb/basics/network/wireless-network/wi-fi">Wi-fi</a>
                        </li>

                        <li id="liBluetooth">
                          <a href="/kb/basics/network/wireless-network/bluetooth">Bluetooth</a>
                        </li>

                        <li id="liCellularNetwork">
                          <a href="/kb/basics/network/wireless-network/cellular-network">Réseau de téléphonie mobile</a>
                        </li>

                        <li id="liRFID">
                          <a href="/kb/basics/network/wireless-network/rfid">RFID</a>
                        </li>

                        <li id="liNFC">
                          <a href="/kb/basics/network/wireless-network/nfc">NFC</a>
                        </li>
                      </ul>
                    </li>
                    <li id="liNetworkingHardware">
                      <a>Équipements réseau</a>
                      <ul>
                        <li id="liSwitch">
                          <a href="/kb/basics/network/networking-hardware/switch">Switch</a>
                        </li>

                        <li id="liRouteur">
                          <a href="/kb/basics/network/networking-hardware/router">Routeur</a>
                        </li>

                        <li id="liFirewall">
                          <a href="/kb/basics/network/networking-hardware/firewall">Firewall</a>
                        </li>

                        <li id="liAP">
                          <a href="/kb/basics/network/networking-hardware/ap">AP</a>
                        </li>

                        <li id="liModem">
                          <a href="/kb/basics/network/networking-hardware/modem">Modem</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="liSystem">
                  <a>Système</a>
                  <ul>

                    <li id="liBIOS">
                      <a href="/kb/basics/system/firmware-bios">Firmware, BIOS</a>
                    </li>

                    <li id="liOS">
                      <a>OS</a>
                      <ul>

                        <li id="liOSIntroduction">
                          <a href="/kb/basics/system/os/introduction">Introduction</a>
                        </li>

                        <li id="liKernelUser">
                          <a href="/kb/basics/system/os/kernel-mode-and-user-mode">User mode vs Kernel mode</a>
                        </li>

                        <li id="liSystemCall">
                          <a href="/kb/basics/system/os/system-call">System call</a>
                        </li>

                        <li id="liLibrariesDrivers">
                          <a href="/kb/basics/system/os/libraries-and-drivers">Libraries & Drivers</a>
                        </li>

                        <li id="liDaemonsServices">
                          <a href="/kb/basics/system/os/daemons-services">Daemons & Services</a>
                        </li>

                        <li id="liFileSystem">
                          <a href="/kb/basics/system/os/file-system">Système de fichiers</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liClientServerModel">
                      <a>Modèle Client-Serveur</a>
                      <ul>

                        <li id="liClientServerModelDefinition">
                          <a href="/kb/basics/network/osi-model/layer4/client-server-model">Définition</a>
                        </li>

                        <li id="liActiveDirectory">
                          <a>Active Directory</a>
                          <ul>

                            <li id="liAD1">
                              <a href="/kb/basics/system/client-server-model/active-directory/active-directory-and-domains">L’annuaire Active Directory et les domaines</a>
                            </li>

                            <li id="liAD2">
                              <a href="/kb/basics/system/client-server-model/active-directory/the-heart-of-the-active-directory">Au cœur de l’annuaire Active Directory</a>
                            </li>

                            <li id="liAD3">
                              <a href="/kb/basics/system/client-server-model/active-directory/active-directory-more-is-better">Active Directory, à plusieurs c’est mieux !</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liWebServer">
                          <a href="/kb/basics/system/client-server-model/web-server">Serveur web</a>
                        </li>

                        <li id="liFTPServer">
                          <a href="/kb/basics/system/client-server-model/ftp-server">Serveur FTP</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liVirtualization">
                      <a href="/kb/basics/system/virtualization">Virtualisation</a>
                    </li>

                    <li id="liContainer">
                      <a href="/kb/basics/system/containerization">Conteneurisation</a>
                    </li>

                    <li id="liTools">
                      <a href="/kb/basics/system/tools">Quelques outils à savoir utiliser</a>
                    </li>

                  </ul>
                </li>
                <li id="liDevelopment">
                  <a>Développement</a>
                  <ul>

                  <li id="liComputerProgramming">
                      <a>La programmation informatique</a>
                      <ul>

                        <li id="liComputerProgrammingDefinition">
                          <a href="/kb/basics/development/computer-programming/what-is-it">Qu'est-ce que c'est ?</a>
                        </li>

                        <li id="liProgrammingParadigms">
                          <a href="/kb/basics/development/computer-programming/programming-paradigm">Les différents paradigmes</a>
                        </li>

                        <li id="liAlgorithm">
                          <a href="/kb/basics/development/computer-programming/algorithm">L'algorithme</a>
                        </li>

                        <li id="liVariablesTypes">
                          <a href="/kb/basics/development/computer-programming/variables-and-types">Les variables et leurs types</a>
                        </li>

                        <li id="liDataStructure">
                          <a href="/kb/basics/development/computer-programming/data-structure">Les structures de données</a>
                        </li>

                        <li id="liClassesObjectsFonctions">
                          <a href="/kb/basics/development/computer-programming/classes-objects-functions">Les classes, les objets et les fonctions</a>
                        </li>

                        <li id="liOperators">
                          <a href="/kb/basics/development/computer-programming/operators">Les opérateurs</a>
                        </li>

                        <li id="liConditionalIterativeStatements">
                          <a href="/kb/basics/development/computer-programming/conditional-iterative-statements">Les instructions conditionnelles et itératives</a>
                        </li>

                        <li id="liLibrairies">
                          <a href="/kb/basics/development/computer-programming/libraries">Les librairies</a>
                        </li>

                        <li id="liFrameworks">
                          <a href="/kb/basics/development/computer-programming/frameworks">Les frameworks</a>
                        </li>

                        <li id="liProgramLifecyclePhases">
                          <a href="/kb/basics/development/computer-programming/program-life-cycle">Les différentes phases de cycle de vie de la programmation</a>
                        </li>

                        <li id="liIDE">
                          <a href="/kb/basics/development/computer-programming/ide">IDE</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liProgrammingLanguages">
                      <a>Langages de programmation</a>
                      <ul>

                        <li id="liHTMLCSS">
                          <a href="/kb/basics/development/programming-languages/html-css">HTLM / CSS</a>
                        </li>

                        <li id="liPHPSQL">
                          <a href="/kb/basics/development/programming-languages/php-sql">PHP / SQL</a>
                        </li>

                        <li id="liJS">
                          <a href="/kb/basics/development/programming-languages/javascript">Javascript</a>
                        </li>

                        <li id="liPython">
                          <a href="/kb/basics/development/programming-languages/python">Python</a>
                        </li>

                        <li id="liC">
                          <a href="/kb/basics/development/programming-languages/c">C</a>
                        </li>
                      
                      </ul>
                    </li>

                  </ul>
                </li>
                <li id="liHardware">
                  <a>Hardware</a>
                  <ul>

                    <li id="liBinary">
                      <a href="/kb/basics/hardware/binary-number-system">Système binaire</a>
                    </li>

                    <li id="liMemory">
                      <a>Les mémoires</a>
                      <ul>

                        <li id="liRAM">
                          <a href="/kb/basics/hardware/memory/ram">Mémoire vive</a>
                        </li>

                        <li id="liROM">
                          <a href="/kb/basics/hardware/memory/rom">Mémoire morte</a>
                        </li>

                        <li id="liCache">
                          <a href="#">Mémoire cache</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liCPU">
                      <a>Les processeurs</a>
                      <ul>

                        <li id="liCoreThread">
                          <a href="#">Coeurs, Threads & Hyper Threading</a>
                        </li>

                        <li id="liInstructionSetArchitecture">
                          <a href="#">Différentes architectures et jeu d'instructions</a>
                        </li>

                        <li id="liAssembly">
                          <a href="#">Assembleur</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liGPU">
                      <a>Les processeurs graphiques</a>
                      <ul>

                        <li id="liGPUOperation">
                          <a href="#">Fonctionnement</a>
                        </li>

                        <li id="liGPUForms">
                          <a href="#">Différents types de processeurs</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liInterfaces">
                      <a>Les interfaces</a>
                      <ul>

                        <li id="liDataTransfer">
                          <a href="#">Interfaces de transfert de données</a>
                        </li>

                        <li id="liNetworkInterface">
                          <a href="#">Interfaces réseau</a>
                        </li>

                        <li id="liStorageConnectivity">
                          <a href="#">Connectique de stockage</a>
                        </li>

                        <li id="liNetworkConnectivity">
                          <a href="#">Connectique réseau</a>
                        </li>
                      
                      </ul>
                    </li>

                  </ul>
                </li>
              </ul>
            </li>

            <li id="liEH" style="margin-top: 20px;">
              <a>Ethical Hacking</a>
              <ul>
                <li id="liActiveDirectoryEH">
                  <a>Active Directory</a>
                  <ul>
                    <li id="liIdentifyWeakness">
                      <a href="/kb/ethical-hacking/active-directory/identify-weaknesses">Identifiez les faiblesses et les objectifs d’attaque</a>
                    </li>
                    <li id="liExploitAttackPaths">
                      <a href="/kb/ethical-hacking/active-directory/exploit-attack-paths">Exploitez les chemins d’attaque</a>
                    </li>
                    <li id="liProtectAndMonitor">
                      <a href="/kb/ethical-hacking/active-directory/protect-and-monitor">Protégez et surveillez votre environnement</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li id="liGlossary" data-value="liGlossary" style="margin-top: 20px;">
              <a href="/kb/glossary">
                Glossaire
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <?php // Creation du Treeview en JS ?>
    <script src="static/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/tree.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        window.nav = new NavTree("#nav-tree", {
          searchable: false,
          showEmptyGroups: true,

          groupOpenIconClass: "fas",
          groupOpenIcon: "fa-chevron-down",

          groupCloseIconClass: "fas",
          groupCloseIcon: "fa-chevron-right",

          linkIconClass: "fas",
          linkIcon: "fa-link",

          iconWidth: "25px",

          searchPlaceholderText: "Search",
        });
      });
    </script>

  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>