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
                    <li id="liOSI">
                      <a>Modèle OSI</a>
                      <ul>

                        <li id="liLayer1">
                          <a href="#">Couche 1</a>
                        </li>

                        <li id="liLayer2">
                          <a href="#">Couche 2</a>
                        </li>

                        <li id="liLayer3">
                          <a href="#">Couche 3</a>
                        </li>

                        <li id="liLayer4">
                          <a href="#">Couche 4</a>
                        </li>

                        <li id="liLayer5to7">
                          <a>Couche 5 à 7</a>
                          <ul>

                            <li id="liDHCP">
                              <a href="#">DHCP</a>
                            </li>

                            <li id="liDNS">
                              <a href="#">DNS</a>
                            </li>

                            <li id="liHTTP">
                              <a href="#">HTTP/S</a>
                            </li>

                            <li id="liSSH">
                              <a href="#">SSH</a>
                            </li>

                            <li id="liFTP">
                              <a href="#">FTP</a>
                            </li>

                            <li id="liSNMP">
                              <a href="#">SNMP</a>
                            </li>

                            <li id="liSMB">
                              <a href="#">SMB</a>
                            </li>

                            <li id="liRDP">
                              <a href="#">RDP</a>
                            </li>

                            <li id="liTelnet">
                              <a href="#">Telnet</a>
                            </li>

                          </ul>
                        </li>

                      </ul>
                    </li>
                    <li id="liWirelessNetwork">
                      <a>Réseaux sans fil</a>
                      <ul>
                        <li id="liWiFi">
                          <a href="#">Wi-fi</a>
                        </li>

                        <li id="li4G">
                          <a href="#">4G</a>
                        </li>

                        <li id="liBluetooth">
                          <a href="#">Bluetooth</a>
                        </li>

                        <li id="liNFC">
                          <a href="#">NFC</a>
                        </li>

                        <li id="liRFID">
                          <a href="#">RFID</a>
                        </li>
                      </ul>
                    </li>
                    <li id="liNetworkEquipments">
                      <a>Équipements réseau</a>
                      <ul>
                        <li id="liSwitch">
                          <a href="#">Switch</a>
                        </li>

                        <li id="liRouteur">
                          <a href="#">Router</a>
                        </li>

                        <li id="liFirewall">
                          <a href="#">Firewall</a>
                        </li>

                        <li id="liAP">
                          <a href="#">AP</a>
                        </li>

                        <li id="liModem">
                          <a href="#">Modem</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li id="liSystem">
                  <a>Système</a>
                  <ul>

                    <li id="li4">
                      <a href="#">Link 4</a>
                    </li>

                    <li id="li5">
                      <a href="#">Link 5</a>
                    </li>

                  </ul>
                </li>
                <li id="liDevelopment">
                  <a>Développement</a>
                  <ul>

                    <li id="li6">
                      <a href="#">Link 6</a>
                    </li>

                    <li id="li7">
                      <a href="#">Link 7</a>
                    </li>

                  </ul>
                </li>
                <li id="liHardware">
                  <a>Hardware</a>
                  <ul>

                    <li id="li8">
                      <a href="#">Link 8</a>
                    </li>

                    <li id="li9">
                      <a href="#">Link 9</a>
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
              <a href="#">
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