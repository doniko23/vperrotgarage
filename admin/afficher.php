<?php 

  session_start();

    if(!isset($_SESSION['rtdfzk655dnDTsb'])){
      header("Location: ../login.php");
       }
 
    if(empty($_SESSION['rtdfzk655dnDTsb'])){
      header("Location: ../login.php");
       }

  require("../config/commandes.php");
   $Produits=afficher();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <title>site E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VPGarage</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../admin/">Nouveau produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="supprimer.php">Suppression produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="afficher.php"  style="font-weight: bold;">Produits</a>
        </li>
       </ul>
       <div style="display: flex; justify-content: flex-end;">
        <a href="deconnexion.php" class="btn btn-warning"> Se deconnecter</a>
       </div>
  
    </div>
  </div>
</nav>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">


       <table class="table">
         <thead>
          <tr>
           <th scope="col">#</th>
           <th scope="col">First</th>
           <th scope="col">Last</th>
           <th scope="col">Handle</th>
          </tr>
         </thead>
         <tbody>
          <tr>
           <th scope="row">1</th>
           <td>Mark</td>
           <td>Otto</td>
           <td>@mdo</td>
          </tr>
         <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
         </tr>
         <tr>
          <th scope="row">3</th>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
         </tr>
         </tbody>

       </table>
      </div>
    </div>
  </div>

</body>
</html>
