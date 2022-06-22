<?php
include "connexion.php";


$nom = isset($_REQUEST["name"]) ? $_REQUEST["name"] : "" ;
$prix = isset($_REQUEST["price"]) ? $_REQUEST["price"] : "" ;

if(!empty($nom) and !empty($prix)){

$req=$pdo->prepare(  
    "INSERT INTO produits(name,prix) VALUES(?,?)"
);
$req->execute(
    $nom,
    $prix
);

}
else{
    echo' erreur veuillez remplir tout les champs svp';
}
 
?>
