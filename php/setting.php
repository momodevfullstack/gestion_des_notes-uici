<?php

include 'bd.php';

//inscription sur la page en tant que etudiant
/*
if(isset($_POST['valider']))
{
    $matricul = $_POST['matricul'];  
    $name = $_POST['nom']; 
    $username = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($matricul) and !empty($name) and !empty($username) and !empty($sexe) and !empty($tel)and !empty($email) and  !empty($password) )

    {
        $matricul =isset($_POST['matricul'])? $_POST['matricul']:'';
        $name = isset($_POST['nom'])? $_POST['nom']:"";
        $username = isset($_POST['prenom'])? $_POST['prenom']:"";
        $sexe = isset($_POST['sexe'])? $_POST['sexe']:"";
        $tel = isset($_POST['tel'])? $_POST['tel']:"";
        $email = isset($_POST['email'])? $_POST['email']:"";
        $password = isset($_POST['password'])? $_POST['password']:"";


        $req= $con->prepare('INSERT INTO etudiant(matricul,nom,prenom,sexe,telephone,email,password) VALUES (:matricul,:name,:username,:sexe,:tel,:email,:password)') ;
        $req->execute(["matricul"=>$matricul,"nom"=>$name,"prenom"=>$username,"sexe"=>$sexe,"telephone"=>$tel,"email"=>$email,"password"=>$password]);
         header('location: ../espace_etudiant/acceuil1.php');
         echo 'aze';
    }
    else
    {

        $sms='Veuillez remplir tout les champs svp...';
    }
}
else
{
    $sms='Erreur au niveau de la connexion....';
}

//fin inscription 

//se connecter sur la page etudiant

if(isset($_POST['voir']))

{
    
    $matricul1 = $_POST['matricul1'];
  
        if( isset($_POST['matricul1']) )
    {

            if( !empty($matricul1)){

            
                $req=$con->prepare('SELECT * FROM etudiant');
                $req->execute();
                $tableau= $req ->fetchAll(PDO::FETCH_ASSOC);
                
               
                foreach($tableau as $key=> $valeur){
                    if($valeur["matricul"] == $matricul1){
                     header('location:../espace_etudiant/accueil1.php');
                    
                    }
                    else{
                       echo 'qsdfgh';
                        $sms='  <h3>Veuillez vérifier vos informations svp</h3> ';
                    }

                }

            } 
            else{
               
                $sms=' <h3> Veuillez remplir tout les champs svp</h3> ';
            }
    }
    else{
       
        $sms='Erreurs...';
    }
}
else{
   
    $sms=  " <h3>  Erreur au niveau de la connexion....</h3>  ";
}

//se connecter sur la page prof

if(isset($_POST['voir2']))

{
    
    $matricul1 = $_POST['matricul1'];
  
        if( isset($_POST['matricul1']) )
    {

            if( !empty($matricul1)){

            
                $req=$con->prepare('SELECT * FROM enseignant');
                $req->execute();
                $tableau= $req ->fetchAll(PDO::FETCH_ASSOC);
                
               
                foreach($tableau as $key=> $valeur){
                    if($valeur["matricul"] == $matricul1){
                     header('location:../espace_professeur/accueil2.php');
                    
                    }
                    else{
                       echo 'qsdfgh';
                        $sms='  <h3>Veuillez vérifier vos informations svp</h3> ';
                    }

                }

            } 
            else{
               
                $sms=' <h3> Veuillez remplir tous les champs svp</h3> ';
            }
    }
    else{
       
        $sms='Erreurs...';
    }
}
else{
   
    $sms=  " <h3>  Erreur au niveau de la connexion....</h3>  ";
}

?>