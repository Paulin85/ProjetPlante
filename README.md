---


---

<h1 id="projet-plante-connectée">Projet Plante Connectée</h1>
<p>Ce projet est un projet de première année informatique qui se déroule du 4 avril au 7 juin. Il sera réalisé par groupe de 2 personnes.</p>
<p>Le projet consiste à concevoir un logiciel utilisant plusieurs langages de programmation à la fois procéduraux et objets. Il s’agira de faire interagir des objets connectés au monde réel avec le logiciel créé afin de faire de la captation d’information et agir sur des dispositifs connectés.</p>
<p>L’objectif de ce projet est de réaliser un logiciel qui permettra aux utilisateurs, ayant certaines connaissances ou non en botanique, de l’aider à faire pousser des plantes en fonction de ses besoins, de ses critères et de l’alarmer en cas de besoin. L’utilisateur devra posséder un objet connecté qui renverra les données au logiciel pour pouvoir connaître la température, l’humidité du sol et la luminosité du lieu.</p>
<p>Tout d’abord, il faut créer <strong>l’objet connecté</strong>: Nous avons pour cela une carte Arduino UNO et les capteurs nécessaires (photorésistance, DHT11) et un module Wi-Fi (ici ESP8266). Une fois les capteurs de luminosité, de température et d’humidité brancher, il faut, à l’aide du logiciel Arduino et du code source compiler en C( disponible dans le dépôt GitPlante), envoyer les programmes à la carte Arduino qui opérera ces programmes et nous renverra les valeurs des données récupérer.</p>
<p>Ensuite, il faut brancher le module Wi-Fi à la carte Arduino lui aussi. Une fois cela-fais, il nous reste à connecté notre objet à un RaspBerry Pi3 qui aura pour fonction de recevoir les données du capteur en Wi-Fi et les envoyer à la base de données. Le programme du RaspBerry doit être coder en Python.</p>
<p><strong>La Base de données</strong>: Elle contiendra plus de 30 plantes de la région ainsi que ses caractéristiques (famille, température, floraison, luminosité, photo…). Et elle devra recevoir, grâce au RaspBerry, les données de l’objet connecté et les renvoyer vers le logiciel de l’utilisateur .</p>
<h2 id="structure">Structure</h2>
<p>Le projet est composé de :</p>
<ul>
<li>Une application</li>
<li>Une base de données PHPmyAdmin</li>
<li>Un capteur de température, d’humidité (DHT11) et de luminosité branché à la carte Arduino Uno.</li>
<li>Un module Wi-FI (ESP 8266)</li>
<li>Une carte Arduino Uno</li>
<li>Une carte Raspberry PI3</li>
</ul>
<p>Les différents langages utilisés sont :</p>
<ul>
<li>C</li>
<li>PHP</li>
<li>SQL</li>
<li>Python</li>
</ul>
<h2 id="fichier-et-dossier">Fichier et dossier</h2>
<p>Le dossier est composé des fichiers suivants :</p>
<ul>
<li>Interface_client.php</li>
<li>Historique.php</li>
<li>Formulaire.php</li>
<li>Plante.css</li>
<li>projetplante.sql</li>
<li>Dossier : images</li>
</ul>
<h2 id="interface-client">Interface client</h2>
<p>L’interface_client.php est le code la page d’accueil de l’application où sont répertoriées toutes les données des plantes.</p>
<p>L’historique.php est le code de la page qui permet de choisir quelles plantes faire pousser chez soi ainsi que l’historique des données du capteur.</p>
<p>Le formulaire.php est le code de la page qui permet de rajouter une plante à la base de donnée en remplissant différents champs.</p>
<p>Le fichier Plante.css est le code qui s’occupe de la mise en forme de l’interface</p>
<h2 id="la-base-de-données">La Base de Données</h2>
<p>Le fichier projetplante.sql est la base de données qui possède les données des plantes, des capteurs et de l’utilisateur.<br>
Elle communiquera directement avec les fichiers php pour afficher les données de la base de données.</p>

