<?php 
session_start();
if(!isset($_SESSION['rtdfzk655dnDTsb'])){
header("Location: ../login.php");
}
session_start();
if(empty($_SESSION['rtdfzk655dnDTsb'])){
header("Location: ../login.php");
}
require("../commandes.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>Site</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
  
    </div>
  </div>
</nav>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <form method="post">
        <div class="mb-3">
         <label for="exampleInput" class="form-label">Titre de l'image</label>
         <input type="name" class="form-control" name="image" required>
        </div>
        <div class="mb-3">
         <label for="exampleInput" class="form-label">Nom du produit</label>
         <input type="text" class="form-control" name="nom" required>
        </div>
        <div class="mb-3">
         <label for="exampleInput" class="form-label">Prix</label>
         <input type="number" class="form-control" name="prix" required>
        </div>
        <div class="mb-3">
         <label for="exampleInput" class="form-label">Description</label>
         </div>
         <textarea type="text" class="form-control" name="description" required></textarea>
         <button type="submit" name="valider" class="btn btn-primary">Ajouter un nouveau produit</button>
      </form>   

      </div>
    </div>
   </div>

</body>
</html>
<?php
if(isset($_POST['valider']))
{
  if(isset($_POST['image']) AND isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['desc']))
{
  if(!empty($_POST['image']) AND !empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['description']))
{
  $image = htmlspecialchars(strip_tags($_POST['image']));
  $nom = htmlspecialchars(strip_tags($_POST['nom']));
  $prix = htmlspecialchars(strip_tags($_POST['prix']));
  $desc = htmlspecialchars(strip_tags($_POST['desc']));

  try 
  {
    ajouter('$image', '$nom', '$prix', '$desc');
   } 
   catch (Exception $e)
{
   $e->getMessage();
}
  
    }
   } 
  }
?>