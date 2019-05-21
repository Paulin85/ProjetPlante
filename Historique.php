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
   <a class="nav-link" href="Interface_client.php"> Accueil <span class="sr-only">(current)</span></a>
    <a class="nav-link active" href="Historique.php"> Planter et Historique <span class="sr-only">(current)</span></a>
     <a class="nav-link active" href="Formulaire.php"> Ajouter une Plante <span class="sr-only">(current)</span></a>
</nav>

    <h2>Choisissez une Plante à faire pousser:</h2>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Liste des Plantes
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">

    <?php
            $reponse = $bdd->query('SELECT * FROM plante');
            while ($donnees = $reponse->fetch(PDO::FETCH_ASSOC)):
          ?>

    <button class="dropdown-item" type="button" href="#"><?=$donnees['nom']?></button>
      <?php
            endwhile;
          ?>
  </div>
</div>



  <h2>Votre Historique:</h2>

<?php
// On récupère tout le contenu de la table capteur
$reponse = $bdd->query('SELECT * FROM capteur');
$reponse2 = $bdd->query('SELECT * FROM plante');

?>



    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Heure</th>
      <th scope="col">Plante</th>
      <th scope="col">Humidité</th>
      <th scope="col">Température</th>
      <th scope="col">Luminosité</th>
    </tr>
  </thead>
  <tbody>
    <tr>
         <?php
            while ($row = $reponse->fetch(PDO::FETCH_ASSOC) and $row2 = $reponse2->fetch(PDO::FETCH_ASSOC)):
          ?>

          <tr>
            <th scope="row"><?=$row['Temps_capteur']?></th>
            <td><?=$row2['nom']?></td>
            <td><?=$row['humidite_capteur']?>%</td>
            <td><?=$row['temperature_capteur']?>°C</td>
            <td><?=$row['luminosite_capteur']?>%</td>
          </tr>

            <?php
            endwhile;
          ?>

  </tbody>
</table>

          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</body>

</html>