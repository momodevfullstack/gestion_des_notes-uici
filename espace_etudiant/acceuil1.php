<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
<title>Sixteen Clothing HTML Template</title>
<link href="../page_acceuil/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../page_acceuil/assets/css/fontawesome.css">
<link rel="stylesheet" href="../page_acceuil/assets/css/templatemo-sixteen.css">
<link rel="stylesheet" href="../page_acceuil/assets/css/owl.css">
<link rel="stylesheet"  href="style.css">
</head>
<body>
  <!-- ***** Preloader Start ***** -->
   
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="" style="position: absolute;top:-10px;">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href=""><h2>Gestion des <em>notes</em> De <em>UICI</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
      
              <li class="nav-item">
                <a class="nav-link" href="../index.php">Acceuil</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="">Espace Etudiant</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>
<div style="color:red; ">
<?php
if(isset($sms)){
    echo $sms;
}
?>


<form >

<fieldset id="entete">
    <center> 
            <legend id="langue">
               <h2 class="h2">Gestion des notes de uici</h2> 
            </legend> <br>
            </center>
        </fieldset>
        <fieldset id="entete2">
            <center>
            <legend class="connexion">
              <h2 class="h2">connexion</h2>
            </legend><br>
            </center>
            <label id="utilisateur">Matricule :</label>
            <input type="text"name="matricul" ><br><br>
            <label class="label2">Mot de passe :</label>
            <input class="input" type="password" name="password" ><br><br>
            
        </fieldset id="footer">
        <fieldset id="exécuter">
            
        <button type="button" class="btn " style="background-color:green;color:white;width:180px; margin-left:20px;top: 20px;position:relative;" data-bs-toggle="modal" data-bs-target="#card0" data-bs-whatever="@test1">Créer un compte </button>
        
        <button class="button" type="submit" name="envoyer"> <a href="page1.php" style="color:white;">Exécuter  </a></button>
      
        
           
        </fieldset>

</form>

  <!-- affiche card1 flottant -->
  <div class="modal fade" id="card0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="top:55px;" >
                        <div class="modal-dialog" >
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5" class="modal-title" id="exampleModalLabel">Bienvenue à l'Université international de Cote d'Ivoire </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="height: 700px;">
                                    <form action="page1.php" method="POST">
                                    <div class="mb-3">
                                        <label style="color:black ;" for="recipient-name" class="col-form-label">Matricule :</label>
                                        <input  name="matricul"  style="margin-left: -10px; width:450px;position:relative;top:10px;" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label style="color:black ; position:relative; top:-10px;" for="recipient-name" class="col-form-label">Nom :</label>
                                        <input  name="nom"  style="margin-left: -10px; width:450px;position:relative;top:-20px;" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label  style="color:black ; position:relative; top:-30px;" for="recipient-name" class="col-form-label">Prenoms :</label>
                                        <input  name="prenom"  style="margin-left: -10px; width:450px;position:relative;top:-40px;" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label  style="color:black ; position:relative; top:-60px;" for="recipient-name" class="col-form-label">Sexe :</label>
                                        <input  name="sexe"  style="margin-left: -10px; width:450px;position:relative;top:-70px;" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label  style="color:black ; position:relative; top:-80px;" for="recipient-name" class="col-form-label">Telephone :</label>
                                        <input  name="telephone"  style="margin-left: -10px; width:450px;position:relative;top:-90px;" type="number" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label  style="color:black ; position:relative; top:-100px;" for="recipient-name" class="col-form-label">Email :</label>
                                        <input name="email" style="margin-left: -10px; width:450px;position:relative;top:-110px;" type="gmail" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="mb-3">
                                        <label  style="color:black ; position:relative; top:-130px;" for="recipient-name" class="col-form-label">Mot de passe :</label>
                                        <input name="password" style="margin-left: -10px; width:450px;position:relative;top:-130px;" type="password" class="form-control" id="recipient-name">
                                    </div>
                                    <div class="footer" style="top: -90px;position:relative;">
                                    <button type="button" style="background-color: red; color:white; margin-right:50px;" class="btn" data-bs-dismiss="modal">Fermer</button>
                                    <button name="valider" type="submit" style="background-color:green ; color:white;margin-right:10px;" class="btn ">Valider</button>
                                </div>
                                <div class="footer" style="position:relative; top: -40px;" >
                                    
                                </div>
                                    </form>
                                </div>
                                
                            </div>
                     </div>
             

            </div>
                <!-- fin  card1 flottant-->

</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 <!-- Bootstrap core JavaScript -->
 <script src="../page_acceuil/vendor/jquery/jquery.min.js"></script>
    <script src="../page_acceuil/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../page_acceuil/assets/js/custom.js"></script>
    <script src="../page_acceuil/assets/js/owl.js"></script>
    <script src="../page_acceuil/assets/js/slick.js"></script>
    <script src="../page_acceuil/assets/js/isotope.js"></script>
    <script src="../page_acceuil/assets/js/accordions.js"></script>

</body>
</html>

<?php
