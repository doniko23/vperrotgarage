<?php 

session_start();

if(!isset($_SESSION['rtdfzk655dnDTsb'])){
header("Location: ../login.php");
}
session_start();
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

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <form method="post">
    
        <div class="mb-3">
         <label for="exampleInput" class="form-label">identification du produit</label>
         <input type="number" class="form-control" name="idproduit" required>
        </div>
      
         <button type="submit" name="valider" class="btn btn-primary">supprimer le produit</button>
      </form>   

      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     
 <?php foreach($Produits as $produit): ?>
      <div class="col">
          <div class="card shadow-sm">
            <img src="<?=$produit->image ?>">

            <div class="card-body">
                
            </div>
          </div>
        </div>

  <?php endforeach; ?>

    </div>
   </div>

</body>
</html>
<?php

if(isset($_POST['valider']))
{
  if(isset($_POST['idproduit']));
{
   if(!empty($_POST['idproduit']) AND is_numeric($_POST['idproduit']));
{
  $idproduit = htmlspecialchars(strip_tags($_POST['idproduit']));

  try 
  {
    supprimer($idproduit);
   } 
   catch (Exception $e)
{
   $e->getMessage();
}
  
    }
   } 
  }
?>