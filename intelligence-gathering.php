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
    <link rel="stylesheet" href="static/css/style.css">

    <?php // Titre de l'onget de la page ?>
    <title>Veille informationnelle</title>
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
            Veille informationnelle
          </h1>

          <div id="myBtnContainer" style="margin-top: 40px; margin-bottom: 10px;">
            <button type="button" class="btn btn-dark active" onclick="filterSelection('all')" style="margin-left: 4px; margin-top: 8px;">Tout</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('networkandsecurity')" style="margin-left: 4px; margin-top: 8px;">Réseaux & Sécurité</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('personaldata')" style="margin-left: 4px; margin-top: 8px;">Données personnelles</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('ethicalhacking')" style="margin-left: 4px; margin-top: 8px;">Ethical Hacking</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('threatintelligence')" style="margin-left: 4px; margin-top: 8px;">Threat Intelligence</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('awareness')" style="margin-left: 4px; margin-top: 8px;">Sensibilisation</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('other')" style="margin-left: 4px; margin-top: 8px;">Autres</button>
          </div>

          <div class="specialcontainer">

            <div class="filterDiv other">
              <a href="https://www.it-connect.fr/le-senat-autorise-lactivation-a-distance-des-micros-ou-cameras-des-smartphones/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/surveillance.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Le Sénat autorise l’activation à distance des micros ou caméras des smartphones</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">09/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
           <div class="filterDiv awareness">
              <a href="https://www.it-connect.fr/comment-creer-une-campagne-de-phishing-avec-gophish/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Comment créer une campagne de phishing avec Gophish ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">16/09/2021</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.csoonline.com/article/3698516/chatgpt-creates-mutating-malware-that-evades-detection-by-edr.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">ChatGPT creates mutating malware that evades detection by EDR</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">06/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

           <div class="filterDiv threatintelligence">
              <a href="https://www.orangecyberdefense.com/fr/insights/blog/lutilisation-croissante-de-lintelligence-artificielle-dans-les-cyberattaques-une-menace-grandissante-pour-la-securite-informatique?utm_source=twitter&utm_medium=Social&utm_campaign=Resources" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">L’utilisation croissante de l’intelligence artificielle dans les cyberattaques : une menace grandissante pour la sécurité informatique</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">30/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/Ignitetechnologies/Mindmap/blob/main/Shodan/Shodan%20UHD.png" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Shodan Mindmap</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">19/02/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://www.cio-online.com/actualites/lire-le-deepfake-voice-nouvelle-menace-sur-la-securite-des-entreprises-14948.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/surveillance.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Le Deepfake Voice, nouvelle menace sur la sécurité des entreprises</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">23/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
            <div class="filterDiv awareness">
              <a href="https://www.linkedin.com/posts/cybertaskforce-france_quenpensezvous-cybersaezcuritaez-cybersaezcuritaez-activity-6990946846378467328-7CWv?utm_source=share&utm_medium=member_desktop" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Qu'est qu'une violence numérique ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">06/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.authentic8.com/blog/21-osint-research-tools-threat-intelligence-investigations" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">21 OSINT research tools for threat intelligence investigations</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">29/09/2021</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/mxrch/GHunt" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">GHunt, an offensive Google framework, designed to evolve efficiently focused on OSINT</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">03/12/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

           <div class="filterDiv threatintelligence">
              <a href="https://drive.google.com/file/d/1zEHbBJEHddxVdCbdvBplgh1AaVDot9eM/view" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">ChatGPT for CyberSecurity</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">09/01/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://www.lesechos.fr/finance-marches/banque-assurances/le-risque-cyber-va-devenir-inassurable-selon-le-patron-de-zurich-insurance-1892042" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Le risque cyber va devenir « inassurable », selon le patron de Zurich Insurance</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">26/12/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.lemondeinformatique.fr/actualites/lire-les-premiers-pas-de-chatgpt-dans-la-cyber-malveillance-89163.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Les premiers pas de ChatGPT dans la cyber-malveillance</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">10/01/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv ethicalhacking">
              <a href="https://amr-git-dot.github.io/offensive/Priv-esc/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px; ">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Windows Privilege escalation Cheat Sheet</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">24/01/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/Ignitetechnologies/Mindmap/tree/main/Burp%20Suite" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px; ">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Burp Suite Extensions Cheat Sheet</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">10/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://veille-cyber.com/les-ransomwares-moins-lucratifs-les-cybercriminels-diversifient-leurs-tactiques/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Les ransomwares moins lucratifs, les cybercriminels diversifient leurs tactiques</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">02/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv networkandsecurity">
              <a href="https://www.macg.co/services/2023/02/dns0eu-un-nouveau-service-de-dns-europeen-par-les-createurs-de-nextdns-134861" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness8.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">dns0.eu : un nouveau service de DNS européen</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Réseaux & Sécurité</h6>
                        <small class="text-muted">15/02/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv personaldata">
              <a href="https://www.cnil.fr/fr/la-cnil-publie-une-nouvelle-version-de-son-guide-de-la-securite-des-donnees-personnelles" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/cnil.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">La CNIL publie une nouvelle version de son guide de la sécurité des données personnelles</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Données personnelles</h6>
                        <small class="text-muted">03/04/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/CMEPW/BypassAV" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px; ">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Mindmap sur le bypass AV</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">03/02/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://france3-regions.francetvinfo.fr/provence-alpes-cote-d-azur/bouches-du-rhone/marseille/6-conseils-pour-mieux-proteger-sa-vie-privee-et-ses-donnees-en-ligne-2768222.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Cybersécurité : 6 conseils pour mieux protéger sa vie privée et ses données en ligne</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">06/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://offsec.tools/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">offsec.tools - A vast collection of security tools for bug bounty, pentest and red teaming</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">10/12/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://wiki.campuscyber.fr/Matrice_des_comp%C3%A9tences_des_m%C3%A9tiers_techniques" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Campus Cyber - Matrice des compétences des métiers techniques</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">08/02/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://www.radiofrance.fr/franceinter/podcasts/veille-sanitaire/veille-sanitaire-du-mardi-07-mars-2023-6034395" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/surveillance.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Meta et Google collaborent avec la police pour traquer les femmes cherchant à avorter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">07/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/Ignitetechnologies/Nmap-For-Pentester" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px; ">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Nmap cheatsheet</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">11/02/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://pauljerimy.com/security-certification-roadmap/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Security Certification Roadmap</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">13/08/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/Samsar4/Ethical-Hacking-Labs" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Ethical Hacking Labs</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">07/05/2021</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.zimperium.com/blog/the-case-of-cloud9-chrome-botnet/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Cloud9, une extension de navigateur malveillante</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">08/11/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv ethicalhacking">
              <a href="https://github.com/0xsyr0/OSCP" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">OSCP Cheat Sheet</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">24/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://www.amazon.fr/Cyberattaques-dessous-dune-menace-mondiale/dp/2019462494" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Cyberattaques : Les dessous d'une menace mondiale</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">02/10/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://usbeketrica.com/fr/article/pourquoi-la-cybersecurite-n-arrive-plus-a-recruter#:~:text=Alors%20que%20les%20menaces%20et,structurelles%20au%20sein%20des%20effectifs." target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Pourquoi la cybersécurité n’arrive plus à recruter</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">10/06/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.malwarebytes.com/blog/news/2022/06/hackers-can-take-over-accounts-you-havent-even-created-yet" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Les pirates peuvent s'emparer de comptes que vous n'avez pas encore créés</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">07/06/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv other">
              <a href="https://www.youtube.com/watch?v=m2WLjBisiLs" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Cyber-guerres : les secrets de ces conflits invisibles</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">03/05/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
            <div class="filterDiv threatintelligence">
              <a href="https://www.ledevoir.com/societe/695250/recherche-et-innovation-des-failles-de-cybersecurite-dans-les-bornes-de-recharge-de-vehicules-electriques" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Des failles de cybersécurité dans les bornes de recharge de véhicules électriques</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">04/04/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/rapport-activite-2022" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Chiffres et tendances des cybermenaces : Cybermalveillance.gouv.fr dévoile son rapport d’activité 2022</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">23/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv threatintelligence">
              <a href="https://www.cert.ssi.gouv.fr/cti/CERTFR-2023-CTI-001/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">CERT-FR : Panorama de la cybermenace 2022</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">24/01/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/cyberattaque-consignes-collaborateurs" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Que faire en cas de cyberattaque ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">14/04/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv awareness">
              <a href="https://www.cybermalveillance.gouv.fr/medias/2021/09/immunite-cyber.pdf" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Évaluez la sécurité numérique de votre collectivité en 10 points</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">12/09/2021</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <div class="filterDiv all networkandsecurity personaldata ethicalhacking threatintelligence awareness other" style="margin-bottom: 140px;"></div>

          </div>
          <script>
            filterSelection("all")
            function filterSelection(c) {
              var x, i;
              x = document.getElementsByClassName("filterDiv");
              if (c == "all") c = "";
              // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
              for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
              }
            }

            // Show filtered elements
            function w3AddClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                  element.className += " " + arr2[i];
                }
              }
            }

            // Hide elements that are not selected
            function w3RemoveClass(element, name) {
              var i, arr1, arr2;
              arr1 = element.className.split(" ");
              arr2 = name.split(" ");
              for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                  arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
              }
              element.className = arr1.join(" ");
            }
            
          </script>

        </div>
      </div>
    </div>
      
  </body>
  <?php //Inclusion du pied de page ?>
  <?php require_once('footer.php'); ?>
</html>

