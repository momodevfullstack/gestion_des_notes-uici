<?php
require "setting.php" ;

    $Matricule=$_POST["matricul"];
    $nom=$_POST["nom"];
    $prenoms=$_POST["prenom"];
    $sexe = $_POST["sexe"];
    $telephone=$_POST["telephone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
   

    if(isset($_POST["valider"])){

        $Matricule=isset($_POST["matricul"])? $_POST["matricul"]:"";
        $nom=isset($_POST["nom"])? $_POST["nom"]:"";
        $prenom=isset($_POST["prenom"])? $_POST["prenom"]:"";
        $sexe=isset($_POST["sexe"])? $_POST["sexe"]:"";
        $telephone=isset($_POST["telephone"])? $_POST["telephone"]:"";
        $email=isset($_POST["email"])? $_POST["email"]:"";
        $password=isset($_POST["password"])? $_POST["password"]:"";

        if(!empty($Matricule) and !empty($nom) and !empty($prenom)and !empty($sexe)and !empty($telephone) and !empty($email) and !empty($password))
            {
                $verify=false;
                $found=true;
                $req=$pdo->prepare("SELECT*FROM etudiant");
                $req->execute();
                $Allusers=$req->fetchAll(PDO::FETCH_ASSOC);


                    foreach ($Allusers as $key => $value){
                        if($value["email"] ==  $email)
                        { 
                            $verify = true ;
                        }
                    }
                        if(!$verify) 
                        {

                                if($found){
                                        $req=$pdo->prepare("INSERT INTO etudiant(matricul,nom,prenom,sexe,telephone,email,password) VALUES(:matricul,:nom,:prenom,:sexe,:telephone,:email,:password)");
                                        $statu=$req->execute(["matricul"=>$Matricule,"nom"=>$nom,"prenom"=>$prenom,"sexe"=>$sexe,"telephone"=>$telephone,"email"=>$email,"password"=>$password]);

                                        if($statu){
                                            $resultat =["$statu"=>true ,"msg"=>"inscription reusite"];
                                        }else{
                                            $resultat= ["$statu"=>false ,  "msg"=>"erreur"];
                                        }  
                                }
                                else {
                                    $resultat=["$statu"=>false , "msg"=>"erreur"];
                                }
                        }     
                }
                          
                   
                    
    }
                       
?>