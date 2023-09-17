<?php
    function getAdmin($email, $password) { 

        if(require("config/connexion.php"))
        {
            $req = $conn->prepare("SELECT * FROM admin WHERE email = ? AND motdepasse = ?");

             $req->execute(array($email, $password));
             if($req->rowCount() == 1){
                $data = $req->fetch();

                return $data;
             }else{
                return false;
             }

             /*$req->closeCursor();*/
        }

    }
    function ajouter($image, $nom, $prix, $desc)
    {
        if(require("connexion.php"))
        {
            $req = $conn->prepare("INSERT INTO produits (image, nom, prix, description);
             VALUES ('$image', '$nom', $prix, '$desc')");
             $req->execute(array($image, $nom, $prix, $desc));
             $req->closeCursor();
        }
    }
    function afficher()
    {
       if(require("connexion.php"))
    {
             $req=$conn->prepare("SELECT * FROM produits ORDER BY id DESC");
             $req->execute();
             $data=$req->fetchAll(PDO::FETCH_OBJ);
                return $data;
             /*$req->closeCursor();*/
    }
}
    function supprimer($id)
 {
        if(require("connexion.php"))
    {
             $req = $conn->prepare("DELETE FROM produits WHERE id=?");
             $req->execute(array($id));
    }
 }

?>
