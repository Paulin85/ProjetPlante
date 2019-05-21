   <?php
      try
      {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=projetplante;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
        // En cas d'erreur, on affiche un message et on arrête tout
              die('Erreur : '.$e->getMessage());
      }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="description" content="Si vous voulez faire pousser des plantes à la perfection, cliquez-ici.">
    <meta name="keyword" content="Plante, Connectée, Fleurs, Planter, Pousser">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Plante.css"/>
  <title>Connected Flowers</title>
</head>
<body>

  <nav class="navbar navbar-light bg-light">
   <a class="nav-link active" href="Interface_client.php"> Accueil <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="Historique.php"> Planter et Historique <span class="sr-only">(current)</span></a>
     <a class="nav-link" href="Formulaire.php"> Ajouter une Plante <span class="sr-only">(current)</span></a>
</nav>

  <h1> Connected Flowers <br></h1>

  <p>Le site référent pour faire pousser vos plantes !</p>

  <h2> Données du capteur: </h2>

 

  <?php
// On récupère tout le contenu de la table capteur
$reponse2 = $bdd->query('SELECT * FROM capteur');

?>

  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Température: °C
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Humidité:   %
    <span class="badge badge-primary badge-pill"> 0% = sec , 100% = humide</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Luminosité:   %
    <span class="badge badge-primary badge-pill"> 0% = sombre , 100% = ensoleillé </span>
  </li>
</ul>
     
     <div>
            <a class="scroll" href="#section2"><img class="fleche" alt="Arrow Down Icon" src="images/arrow-down.png"></a>           
     </div>




        <section id="section2">

  <h2>Les Plantes:</h2>

<?php
// On récupère tout le contenu de la table plante
$reponse = $bdd->query('SELECT * FROM plante');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"> <?=$donnees['nom'] ?></h5>
      <p class="card-text"> <?=$donnees['description'] ?></p>
      <p class="card-text"> <?=$donnees['temperature'] ?> °C</p>
      <p class="card-text"> <?=$donnees['humidite'] ?> %</p>
      <p class="card-text"> <?=$donnees['luminosite'] ?> %</p>
    </div>
  </div>
</div>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
<section id="section2">
</body>

</html>