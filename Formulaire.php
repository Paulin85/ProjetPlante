<?php
try
{
  $bdd = new PDO('mysql:host=localhost;dbname=projetplante;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

if(isset($_POST['nom']) && isset($_POST['categorie']) && isset($_POST['description']) && isset($_POST['humidite']) && isset($_POST['temperature']) && isset($_POST['luminosite']) && isset($_POST['floraison'])) {

        // ajout d'entrée dans la table plante de la base de données plante.
    $req = $bdd->prepare('INSERT INTO plante(nom, categorie, description, humidite, temperature, luminosite, floraison) VALUES(:nom, :categorie, :description, :humidite, :temperature, :luminosite, :floraison)');

    $req->execute(array(
        'nom' => $_POST['nom'],
        'categorie' => $_POST['categorie'],
        'description' => $_POST['description'],
        'humidite' => $_POST['humidite'],
        'temperature' => $_POST['temperature'],
        'luminosite' => $_POST['luminosite'],
        'floraison' => $_POST['floraison']
    ));

}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="Plante.css">
    <title>Connected Flowers</title>
  </head>
  <body class="formulaire">

  <nav class="navbar navbar-light bg-light">
   <a class="nav-link" href="Interface_client.php"> Accueil <span class="sr-only">(current)</span></a>
    <a class="nav-link" href="Historique.php"> Planter et Historique <span class="sr-only">(current)</span></a>
     <a class="nav-link active" href="Formulaire.php"> Ajouter une Plante <span class="sr-only">(current)</span></a>
</nav>

  <h2>Veuillez compléter ci-dessous</h2>
<section>
   <form action="Formulaire.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1"> Nom de la Plante</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="nom">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Catégorie</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="categorie">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Humidité</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="humidite">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Température</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="temperature">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Luminosité</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="luminosite">
  </div>
   <div class="form-group">
    <label for="exampleFormControlInput1"> Période de Floraison</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="floraison">
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

   <div class="col-auto my-1">
      <input class="btn btn-primary" type="submit" value="Ajouter">
    </div>

</form>

</section>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>