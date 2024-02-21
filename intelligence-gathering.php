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
            <button type="button" class="btn btn-dark" onclick="filterSelection('osint')" style="margin-left: 4px; margin-top: 8px;">OSINT</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('governance')" style="margin-left: 4px; margin-top: 8px;">Gouvernance</button>
            <button type="button" class="btn btn-dark" onclick="filterSelection('other')" style="margin-left: 4px; margin-top: 8px;">Autres</button>
          </div>

          <div class="specialcontainer">

          <div class="filterDiv threatintelligence">
              <a href="https://www.it-connect.fr/ransomware-lockbit-3-0-outil-de-dechiffrement-gratuit/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Opération Cronos – Ransomware LockBit 3.0 : un outil de déchiffrement est disponible</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">20/02/2024</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv governance">
              <a href="https://monespacenis2.cyber.gouv.fr/?utm_source=brevo&utm_campaign=La%20veille%20de%20la%20Cyberscurit1902&utm_medium=email" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Evaluez si vous êtes concernés par la directive NIS 2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gouvernance</h6>
                        <small class="text-muted">19/02/2024</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv threatintelligence">
              <a href="https://www.ouest-france.fr/economie/budget/caf-600-000-allocataires-vises-par-un-piratge-il-est-conseille-de-changer-de-mot-de-passe-6368f7b6-cb24-11ee-a3b1-a38454b34a5c#:~:text=La%20Caisse%20d'Allocations%20Familiales,donn%C3%A9es%20de%20600%20000%20allocataires." target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">CAF : 600 000 allocataires visés par un piratage, il est conseillé de changer de mot de passe</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">14/02/2024</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv governance">
              <a href="https://smartlinks.audiomeans.fr/l/le-monde-de-la-cyber-7962208c/teasing-la-cybersecurite-obligatoire-avec-nis-2-orange-cyberdefense-0b8dcc52" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Se préparer à la directive NIS 2 - Orange Cyberdefense</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gouvernance</h6>
                        <small class="text-muted">13/02/2024</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://aqui.fr/article/chasser-lombre-de-la-cybermenace-dans-le-ciel-des-pme/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Chasser l’ombre de la cybermenace dans le ciel des PME</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">11/01/2024</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv awareness">
              <a href="https://www.orangecyberdefense.com/ar-ma/insights/blog/infection-par-cle-usb-comment-sen-proteger" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Infection par clé USB : comment s'en protéger ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">31/08/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.orangecyberdefense.com/fr/insights/blog/comment-communiquer-en-cas-de-cyberattaque" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Comment communiquer en cas de cyberattaque ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">24/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv threatintelligence">
              <a href="https://www.usine-digitale.fr/article/4000-adresses-emails-et-mots-de-passe-d-ile-de-france-mobilites-connect-voles-par-des-hackers.N2180027" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">4000 adresses emails et mots de passe d'Ile-de-France Mobilités Connect volés par des hackers</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">09/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.jeunes.gouv.fr/filigranefacile-un-outil-gratuit-pour-proteger-tous-vos-documents-1644" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">FiligraneFacile, un outil gratuit pour protéger tous vos documents</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">16/08/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv osint">
              <a href="https://github.com/megadose/ignorant" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">megadose/ignorant: ignorant permet de vérifier si un numéro de téléphone est utilisé sur un site comme Snapchat, Instagram</h5>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT</h6>
                        <small class="text-muted">20/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv networkandsecurity">
              <a href="https://mega.nz/folder/Bro0kIpY#5bxE_48py3JRf8NmSYsINA" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Entire CCNA course with labs</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Réseaux & Sécurité</h6>
                        <small class="text-muted">05/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv other">
              <a href="https://www.linkedin.com/posts/yildizokan_oscp-notes-active-directory-activity-7084800425115164672-a8ND?utm_source=share&utm_medium=member_desktop" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">OSCP Notes Active Directory</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">12/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.linkedin.com/posts/yasminedouadi_les-professionnels-de-la-cybers%C3%A9curit%C3%A9-seraient-activity-7084135086765305856-cv9l?utm_source=share&utm_medium=member_desktop" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Les professionnels de la cybersécurité sont-ils stressants pour les dirigeants ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">10/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://cdn.comparitech.com/wp-content/uploads/2020/01/CISSP-Cheat-Sheet-Domain-3.pdf" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">CISSP Cheatsheet (Domain 3: Security Engineering)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">06/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv other">
              <a href="https://www.zdnet.fr/actualites/cout-des-attaques-informatiques-en-france-2-milliards-d-euros-une-estimation-bienvenue-mais-a-prendre-avec-des-pincettes-39959924.htm" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Coût des attaques informatiques en France : 2 milliards d’euros, une estimation à prendre avec des pincettes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">27/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.it-connect.fr/darkbert-un-equivalent-de-chatgpt-entraine-avec-les-donnees-du-dark-web/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">DarkBERT, un équivalent de ChatGPT entrainé avec le dark web</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">27/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv governance">
              <a href="https://www.linkedin.com/feed/update/urn:li:activity:7074627435467530240/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">La méthode EBIOS par l'approche "risque" et par l'approche "conformité"</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Gouvernance</h6>
                        <small class="text-muted">15/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv ethicalhacking">
              <a href="https://github.com/ryh04x/CEH-Exam-Questions" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Offensive Bookmarks</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">15/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv ethicalhacking">
              <a href="https://docs.google.com/spreadsheets/d/1dwSMIAPIam0PuRBkCiDI88pU3yzrqqHkDtBngUHNCw8/edit?pli=1#gid=129517485" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">OSCP Similar Boxes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">26/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv osint">
              <a href="https://www.youtube.com/watch?v=EOfJAg95uWQ" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/surveillance.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">La face cachée de l'osint (darkweb, vie privée, complots, GAFAM)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT</h6>
                        <small class="text-muted">10/05/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv osint">
              <a href="https://cylect.io/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Cylect.io – AI OSINT Tool</h5>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT</h6>
                        <small class="text-muted">30/04/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv ethicalhacking">
              <a href="https://github.com/ryh04x/CEH-Exam-Questions" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">CEH Cheat Sheet</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">19/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.amazon.fr/Code-cybers%C3%A9curit%C3%A9-2024-annot%C3%A9-comment%C3%A9/dp/2247223001" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Code de la Cybersécurité - Anticiper et répondre aux Cyberattaques - 2ème édition</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">02/11/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv awareness">
              <a href="https://lameleeadour.com/les-risques-internet-pour-les-enfants/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Risques internet pour les enfants : que peuvent faire les parents ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">04/10/2022</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv awareness">
              <a href="https://www.orangecyberdefense.com/fr/insights/blog/comment-proteger-votre-entreprise-des-cyberattaques-pendant-les-fetes-de-fin-dannee?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_57" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Comment protéger votre entreprise des cyberattaques pendant les fêtes de fin d’année ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">07/12/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.numerama.com/cyberguerre/1574754-orange-a-fabrique-une-extension-chrome-qui-detecte-les-sites-de-phishing.html?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_49" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Orange a créé une extension Chrome pour détecter les sites de phishing</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">29/11/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv threatintelligence">
              <a href="https://www.it-connect.fr/cette-faille-de-securite-dans-google-agenda-permet-de-pirater-un-ordinateur-a-distance/#:~:text=Actu%20Cybers%C3%A9curit%C3%A9%20Web-,Cette%20faille%20de%20s%C3%A9curit%C3%A9%20dans%20Google%20Agenda,pirater%20un%20ordinateur%20%C3%A0%20distance%20!&text=Une%20faille%20de%20s%C3%A9curit%C3%A9%20affecte,d'un%20ordinateur%20%C3%A0%20distance." target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Faille de sécurité critique dans Google Agenda</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">16/11/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv osint">
              <a href="https://korben.info/outil-turbolehe-ameliorer-enquetes-osint-generer-rapport-holehe.html?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_31" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Turbolehe – Un peu d’OSINT pour trouver des emails</h5>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT</h6>
                        <small class="text-muted">31/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv awareness">
              <a href="https://www.francenum.gouv.fr/guides-et-conseils/protection-contre-les-risques/cybersecurite/une-mallette-cyber-pour-sensibiliser?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_29" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Une Mallette Cyber pour sensibiliser les salariés des TPE PME aux menaces en ligne</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">20/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv personaldata">
              <a href="https://www.numerama.com/tech/1480552-tout-comprendre-au-dsa-la-loi-europeenne-qui-encadre-les-geants-du-web.html?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_27" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness8.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">DSA : la loi européenne qui encadre les géants du web</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Données personnelles</h6>
                        <small class="text-muted">24/08/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv other">
              <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/actualites/orange-collaboration-cybermalveillance-gouv-fr?utm_campaign=Cyber%2BLettre&utm_medium=web&utm_source=Cyber_Lettre_22" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Orange renforce sa collaboration avec Cybermalveillance.gouv.fr</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">19/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv ethicalhacking">
              <a href="https://github.com/vxunderground/MalwareSourceCode" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/colored-github-icon.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Vxunderground : codes sources de logiciels malveillants</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Ethical Hacking</h6>
                        <small class="text-muted">07/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv networkandsecurity">
              <a href="https://www.cisa.gov/news-events/cybersecurity-advisories/aa23-278a" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness5.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">10 principales erreurs de configuration de cybersécurité par la NSA et la CISA</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Réseaux & Sécurité</h6>
                        <small class="text-muted">05/10/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.solutions-numeriques.com/dossiers/campus-cyber-premier-bilan-avec-michel-van-den-berghe-son-president/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Campus Cyber : premier bilan</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">24/09/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv awareness">
              <a href="https://www.silicon.fr/competences-prestataire-cyber-460659.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Les compétences à attendre d’un prestataire cyber</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">16/03/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv threatintelligence">
              <a href="https://www.presse-citron.net/quest-ce-que-le-spearphishing-cette-menace-qui-nous-met-en-danger/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Qu’est-ce que le spearphishing ?</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">16/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv awareness">
              <a href="https://www.cybermalveillance.gouv.fr/tous-nos-contenus/bonnes-pratiques/sauvegardes" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness1.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Bonnes pratiques : les sauvegardes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">13/11/2019</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv awareness">
              <a href="https://cyber.gouv.fr/actualites/publication-dun-outil-dautoevaluation-de-gestion-de-crise-cyber" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Outil d’autoévaluation de gestion de crise cyber</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Sensibilisation</h6>
                        <small class="text-muted">04/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.alliancy.fr/travailler-cybersecurite-portrait-robot-expert-ideal" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Travailler dans la cybersécurité : portrait-robot de l’expert idéal</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">03/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          <div class="filterDiv other">
              <a href="https://www.pinterest.de/pin/574138652508468001/" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/awareness3.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Infographie des différents domaines et sous-domaines de la Cybersécurité (non exhaustif)</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autres</h6>
                        <small class="text-muted">03/07/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          
          <div class="filterDiv threatintelligence">
              <a href="https://thehackernews.com/2023/06/fake-researcher-profiles-spread-malware.html" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/malware.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">Des faux comptes Github se faisant passer pour des chercheurs en cybersécurité créés pour diffuser des malwares</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
                        <small class="text-muted">15/06/2023</small>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

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
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
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
                        <h6 class="card-subtitle mb-2 text-muted">Threat Intelligence</h6>
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

            <div class="filterDiv osint">
              <a href="https://www.authentic8.com/blog/21-osint-research-tools-threat-intelligence-investigations" target="_blank">
                <div class="card text-white bg-dark" style="margin-top: 20px;">
                  <div class="row g-0">
                    <div class="col-md align-self-center" style="margin-left: 10px">
                      <img src="/images/offsectools.png" class="img-fluid mx-auto d-block" style="max-width: 100px;">
                    </div>
                    <div class="col-md-10">
                      <div class="card-body">
                        <h5 class="card-title">21 OSINT research tools for threat intelligence investigations</h5>
                        <h6 class="card-subtitle mb-2 text-muted">OSINT</h6>
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

           <div class="filterDiv other">
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
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
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
                      <img src="/images/awareness2.png" class="img-fluid mx-auto d-block" style="max-width: 90px;">
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

