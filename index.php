<?php
/*avant d'executer n'importe quelle commande, se connecter à php*/
/*require("..config/commandes.php");*/
/*je crée une commande qui va recuprer tous les produits*/
/*$mesProduits=afficher();*/
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <title>garage Vincent PERROT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>

  <body>
 <header>

  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">

      <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white"><img src="image/logo.png.png" width=200px height=100px></img><br><br>Bienvenue dans votre Garage</h4>
          <p class="text-muted">Votre garage V.PERROT est une réference en France. Vous pouvez réparer, entretenir et même acheter votre vehicule.
        N'attendez plus pour nous rendre visite. Nous sommes ouvert de lundi au vendredi.</p>
        </div>

        <div class="col-sm-4 offset-md-1 py-1">
          <h4 class="text-white">Mon Compte</h4><br><br>
          <ul class="list-unstyled">
            <li><a href="login.php" class="btn btn-primary my-2">Se connecter</a></li><br>
            <li><a href="admin/index1.php" class="btn btn-primary my-2">Ajouter un produit</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center"></a><img src="image/logo.png.png" width=10% height=7%></img>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" 
      aria-controls="navbarHeader" aria-expanded="false" 
      aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>


  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <div class="col">
          <div class="card shadow-sm">
            <title>Placeholder</title><img src="image/imageOpel.png.jpg"></img>
      <div class="card-body"><p class="card-text">Modèle : OPEL CORSA 1.3 CDCI <br>75 CH DIESEL<br>
            Année de mise en circulation : 2008<br>Diesel<br>Kilométrage : 177220 km</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                </div>
                <small class="text-muted">Prix=4790€</small>
              </div>
            </div>
          </div>
        </div>

 <div class="col">
          <div class="card shadow-sm">
            <title>Placeholder</title><img src="image/imageLandRover.png.jpg"></img>

            <div class="card-body">
              <p class="card-text">Modèle : LAND ROVER FREELANDER SX<br>112CH 4X4<br>Année de mise en circulation : 2001<br>
                Diesel<br>Kilométrage : 184200 km
                </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                </div>
                <small class="text-muted">Prix = 7290€</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <title>Placeholder</title><img src="image/imageVolkswagen.png.jpg"></img>

            <div class="card-body">
              <p class="card-text">Modèle : VOLKSWAGEN POLO 1.6 TDI<br>75CH<br>Année de mise en circulation : 2010<br>
                    Diesel<br>Kilométrage : 177261 km
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                </div>
                <small class="text-muted">Prix = 7290€</small>
              </div>
            </div>
          </div>
        </div>
     
     

      </div>
    </div>
  </div>

</main>

<footer class="btn btn-sm btn-outline-secondary1 py-5">

  <div class="container">
    <p class="mb-1">Votre garage V.PERROT à votre service &copy; 
      prenez-rendez <a href="">ici<a> ou passez-nous voir tous les jours du lundi au vendredi.</p>
      <img src="image/imagehoraire.png" width=300px height=150px></img>
   </div>

</footer>

  </body>
</html>


<!--
<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php foreach($Produits as $produit): ?>
      <div class="col">
          <div class="card shadow-sm">
            <title><?= $produit->nom ?></title><img src="<?= $produit->image ?>"></img>
      <div class="card-body"><p class="card-text"><? substr($produit->description, 0, 300); ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Acheter</button>
                </div>
                <small class="text-muted"><?=$produit->prix ?>€</small>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; ?>
!-->

<!--
<section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto"><img src="image/logo.png.png" width=50% height=40%></img>
        <h1 class="fw-light">Acheter et Réparer votre voiture</h1>
        <p class="lead text-muted">Votre garage V.PERROT est une réference en France. Vous pouvez réparer, entretenir et même acheter votre vehicule.
        N'attendez plus pour nous rendre visite. Nous sommes ouvert de lundi au vendredi..</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Visiter nos modèles de voitures</a>
          <a href="#" class="btn btn-secondary my-2">Réparer votre voiture</a>
        </p>
      </div>
    </div>
  </section>

!-->