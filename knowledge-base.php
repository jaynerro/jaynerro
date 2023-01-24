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
                      <a href="/knowledge-base/basics/network/network-architecture.php">L'architecture réseau</a>
                    </li>

                    <li id="liOSI">
                      <a>Modèle OSI</a>
                      <ul>

                        <li id="liOSIModelDefinition">
                          <a href="/knowledge-base/basics/network/osi-model/definition.php">Qu'est-ce que c'est ?</a>
                        </li>

                        <li id="liLayer1">
                          <a href="/knowledge-base/basics/network/osi-model/layer1.php">Couche 1</a>
                        </li>

                        <li id="liLayer2">
                          <a href="/knowledge-base/basics/network/osi-model/layer2.php">Couche 2</a>
                        </li>
                        
                        <li id="liLayer3">
                          <a>Couche 3</a>
                          <ul>

                            <li id="liLayer3AndIPProtocol">
                              <a href="/knowledge-base/basics/network/osi-model/layer3/layer3.php">La couche Réseau</a>
                            </li>

                            <li id="liIPAddressAssignment">
                              <a href="/knowledge-base/basics/network/osi-model/layer3/IP-address-assignment.php">Découpage de plages d'adresses</a>
                            </li>

                            <li id="liARPAndICMP">
                              <a href="/knowledge-base/basics/network/osi-model/layer3/ARP-ICMP.php">Autres protocoles : ARP & ICMP</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liLayer4">
                          <a>Couche 4</a>
                          <ul>
                            <li id="liClientServerModel">
                              <a href="/knowledge-base/basics/network/osi-model/layer4/client-server-model.php">Modèle Client-Serveur</a>
                            </li>

                            <li id="liLayer4">
                              <a href="/knowledge-base/basics/network/osi-model/layer4/layer4.php">La couche Transport</a>
                            </li>

                            <li id="liLayer4">
                              <a href="/knowledge-base/basics/network/osi-model/layer4/nat-and-port-forwarding.php">NAT et port forwarding</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liLayer5to7">
                          <a>Couche 5 à 7</a>
                          <ul>

                            <li id="liDHCP">
                              <a href="/knowledge-base/basics/network/osi-model/layer5to7/dhcp.php">DHCP</a>
                            </li>

                            <li id="liDNS">
                              <a href="/knowledge-base/basics/network/osi-model/layer5to7/dns.php">DNS</a>
                            </li>

                            <li id="liHTTP">
                              <a href="/knowledge-base/basics/network/osi-model/layer5to7/http.php">HTTP</a>
                            </li>

                            <li id="liSSH">
                              <a href="/knowledge-base/basics/network/osi-model/layer5to7/ssh.php">SSH</a>
                            </li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li id="liWirelessNetwork">
                      <a>Réseaux sans fil</a>
                      <ul>
                        <li id="liWiFi">
                          <a href="/knowledge-base/basics/network/wireless-network/wi-fi.php">Wi-fi</a>
                        </li>

                        <li id="liBluetooth">
                          <a href="/knowledge-base/basics/network/wireless-network/bluetooth.php">Bluetooth</a>
                        </li>

                        <li id="liCellularNetwork">
                          <a href="/knowledge-base/basics/network/wireless-network/cellular-network.php">Réseau de téléphonie mobile</a>
                        </li>

                        <li id="liRFID">
                          <a href="/knowledge-base/basics/network/wireless-network/rfid.php">RFID</a>
                        </li>

                        <li id="liNFC">
                          <a href="/knowledge-base/basics/network/wireless-network/nfc.php">NFC</a>
                        </li>
                      </ul>
                    </li>
                    <li id="liNetworkingHardware">
                      <a>Équipements réseau</a>
                      <ul>
                        <li id="liSwitch">
                          <a href="/knowledge-base/basics/network/networking-hardware/switch.php">Switch</a>
                        </li>

                        <li id="liRouteur">
                          <a href="/knowledge-base/basics/network/networking-hardware/router.php">Routeur</a>
                        </li>

                        <li id="liFirewall">
                          <a href="/knowledge-base/basics/network/networking-hardware/firewall.php">Firewall</a>
                        </li>

                        <li id="liAP">
                          <a href="/knowledge-base/basics/network/networking-hardware/ap.php">AP</a>
                        </li>

                        <li id="liModem">
                          <a href="/knowledge-base/basics/network/networking-hardware/modem.php">Modem</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="liSystem">
                  <a>Système</a>
                  <ul>

                    <li id="liBIOS">
                      <a href="/knowledge-base/basics/system/firmware-bios.php">Firmware, BIOS</a>
                    </li>

                    <li id="liOS">
                      <a>OS</a>
                      <ul>

                        <li id="liOSIntroduction">
                          <a href="/knowledge-base/basics/system/os/introduction.php">Introduction</a>
                        </li>

                        <li id="liKernelUser">
                          <a href="/knowledge-base/basics/system/os/kernel-mode-and-user-mode.php">User mode vs Kernel mode</a>
                        </li>

                        <li id="liSystemCall">
                          <a href="/knowledge-base/basics/system/os/system-call.php">System call</a>
                        </li>

                        <li id="liLibrariesDrivers">
                          <a href="/knowledge-base/basics/system/os/libraries-and-drivers.php">Libraries & Drivers</a>
                        </li>

                        <li id="liDaemonsServices">
                          <a href="/knowledge-base/basics/system/os/daemons-services.php">Daemons & Services</a>
                        </li>

                        <li id="liFileSystem">
                          <a href="/knowledge-base/basics/system/os/file-system.php">Système de fichiers</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liClientServerModel">
                      <a>Modèle Client-Serveur</a>
                      <ul>

                        <li id="liClientServerModelDefinition">
                          <a href="/knowledge-base/basics/network/osi-model/layer4/client-server-model.php">Définition</a>
                        </li>

                        <li id="liActiveDirectory">
                          <a>Active Directory</a>
                          <ul>

                            <li id="liAD1">
                              <a href="/knowledge-base/basics/system/client-server-model/active-directory/active-directory-and-domains.php">L’annuaire Active Directory et les domaines</a>
                            </li>

                            <li id="liAD2">
                              <a href="/knowledge-base/basics/system/client-server-model/active-directory/the-heart-of-the-active-directory.php">Au cœur de l’annuaire Active Directory</a>
                            </li>

                            <li id="liAD3">
                              <a href="/knowledge-base/basics/system/client-server-model/active-directory/active-directory-more-is-better.php">Active Directory, à plusieurs c’est mieux !</a>
                            </li>

                          </ul>
                        </li>

                        <li id="liWebServer">
                          <a href="/knowledge-base/basics/system/client-server-model/web-server.php">Serveur web</a>
                        </li>

                        <li id="liFTPServer">
                          <a href="#">Serveur FTP</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liVirtualization">
                      <a href="#">Virtualisation</a>
                    </li>

                    <li id="liContainer">
                      <a href="#">Conteneur</a>
                    </li>

                    <li id="liTools">
                      <a href="#">Quelques outils à savoir utiliser</a>
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
                          <a href="#">Qu'est-ce que c'est ?</a>
                        </li>

                        <li id="liProgrammingParadigms">
                          <a href="#">Les différents paradigmes</a>
                        </li>

                        <li id="liAlgorithm">
                          <a href="#">L'algorithme</a>
                        </li>

                        <li id="liVariablesTypes">
                          <a href="#">Les variables et leurs types</a>
                        </li>

                        <li id="liDataStructure">
                          <a href="#">Les structures de données</a>
                        </li>

                        <li id="liClassesObjectsFonctions">
                          <a href="#">Les classes, les objets et les fonctions</a>
                        </li>

                        <li id="liOperators">
                          <a href="#">Les opérateurs</a>
                        </li>

                        <li id="liConditionalIterativeStatements">
                          <a href="#">Les instructions conditionnelles et itératives</a>
                        </li>

                        <li id="liLibrairies">
                          <a href="#">Les librairies</a>
                        </li>

                        <li id="liFrameworks">
                          <a href="#">Les frameworks</a>
                        </li>

                        <li id="liProgramLifecyclePhases">
                          <a href="#">Les différentes phases de cycle de vie de la programmation</a>
                        </li>

                        <li id="liIDE">
                          <a href="#">IDE</a>
                        </li>
                      
                      </ul>
                    </li>

                    <li id="liProgrammingLanguages">
                      <a>Langages de programmation</a>
                      <ul>

                        <li id="liHTMLCSS">
                          <a href="#">HTLM / CSS</a>
                        </li>

                        <li id="liPHPSQL">
                          <a href="#">PHP / SQL</a>
                        </li>

                        <li id="liJS">
                          <a href="#">Javascript</a>
                        </li>

                        <li id="liPython">
                          <a href="#">Python</a>
                        </li>

                        <li id="liC">
                          <a href="#">C</a>
                        </li>
                      
                      </ul>
                    </li>

                  </ul>
                </li>
                <li id="liHardware">
                  <a>Hardware</a>
                  <ul>

                    <li id="liBinary">
                      <a href="#">Système binaire</a>
                    </li>

                    <li id="liMemory">
                      <a>Les mémoires</a>
                      <ul>

                        <li id="liRAM">
                          <a href="#">Mémoire vive</a>
                        </li>

                        <li id="liROM">
                          <a href="#">Mémoire morte</a>
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
              <a>
                Ethical Hacking
              </a>
              <ul>
                <li id="li40">
                  <a>
                    Collapse 20
                  </a>
                  <ul>
                    <li id="li60">
                      <a href="#">
                        Link 20
                      </a>
                    </li>
                    <li id="li70">
                      <a href="#">
                        Link 30
                      </a>
                    </li>
                    <li id="li80">
                      <a>
                        Collapse 30
                      </a>
                      <ul>
                        <li id="li90">
                          <a href="#">
                            Link 40
                          </a>
                        </li>
                        <li id="li100">
                          <a href="#">
                            Link 50
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="li50">
                  <a href="#">
                    Link 60
                  </a>
                </li>
              </ul>
            </li>
            <li id="li5" data-value="li5" style="margin-top: 20px;">
              <a href="/knowledge-base/glossary.php">
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