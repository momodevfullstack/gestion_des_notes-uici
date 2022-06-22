<?php

$user='root';
$password='';

try{
    $pdo= new PDO('mysql:host=localhost;dbname:momo_yes', $user,$password);
}
catch(PDOException $se){
    echo'echec';
}


?>