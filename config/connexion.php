/* connexion avec ma base de donnée */
<?php


try {
     $conn=new PDO("mysql:host=127.00.1;dbname=vperrotgarage;charset=utf8", "root", "");
      //On définit le mode d'erreur de PDO sur Exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     /*On capture les exceptions si une exception est lancée et on affiche
 *les informations relatives à celle-ci*/
} catch (Exception $e)
{
    $e->getMessage();
}


 
?>


