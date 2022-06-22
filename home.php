<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion des notes (UICI)</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    .img{
        border: none;
        box-shadow: 0 0 40px #000000;	
        width: 250px;
        height: 250px;
        top: 20px;

    }
 
</style>


<body>
<div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html">
                    <p style="color: antiquewhite;font-weight:bold;font-size:20px">Gestion de note uici</p>
                </a>
                <a class="sidebar-brand brand-logo-mini" href="index.html">
                    <p style="color: antiquewhite;font-weight:bold;font-size:20px">U<strong style="color:orangered";>I</strong >C <strong style="color:orangered">I</strong></p>
                </a>
            </div>
            <ul class="nav">
            <li class="nav-item profile">
                    <div class="profile-desc">
                        <div class="profile-pic">
                           
                            <div class="profile-name">
                                <h5 class="mb-0 font-weight-normal">Mohamed Bamba</h5>
                                <span>Createur</span>
                            </div>
                        </div>
                        <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                        <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                           
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-dark rounded-circle">
                                        <i class="mdi mdi-onepassword  text-info"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <p class="preview-subject mb-1">Deconnexion</p>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                           
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-category">
                    <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="home.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Acceuil</span>
                    </a>
                </li>
               
               

        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
                    <ul class="navbar-nav w-100">
                        <li class="nav-item w-100">
                            <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                                <input type="text" class="form-control" placeholder="recherche de client">
                            </form>
                        </li>
                    </ul>
                    

            </nav>
            <!-- partial -->
            <div class="main-panel">
                    <div class="content" style="background:white;">
                
                                        <center> 
                                    <h2 style="  width: 620px;
                                    font-family: sans-serif;
                                    text-align: center;
                                    color:green;
                                    font-size: 30px;
                                    background-color: #191c25;
                                    border-radius: 10px;
                                    margin: 50px;
                                    padding: 8px;
                                    z-index: 10px;
                                    position:relative;
                                    margin-right:150px;
                                    ">Gestion des notes de l'Université International de Cote d'Ivoire  ( UICI).</h2></center> 
                                        
                        
                            
                                    <div class="row" >

                                            <!-- debut 1er card -->
                                            <div class="col-6">
                                                <div>
                                                    <img class="img" src="assets/images/etudiant.jpg" alt="">
                                                                    
                                                </div>

                                                <button type="button" class="btn "  style="background-color:green;color:white;width:250px" data-bs-toggle="modal" data-bs-target="#card1" data-bs-whatever="@test1">Espace Etudiant</button>
                                            </div>
                                            <!-- fin 1er card -->
                                            <!-- debuter 2em card -->
                                            <div class="col-6" style="margin-left:380px;top:-285px;">
                                                    <div>
                                                   
                                                        <img class="img" src="assets/images/etudiant2.jpg" alt="">
                                                                    
                                                    </div>

                                                    <button type="button" class="btn "  style="background-color:green;color:white;width:250px" data-bs-toggle="modal" data-bs-target="#card2" data-bs-whatever="@test2">Espace Professeur</button>
                                            </div>
                                                       <!-- fin 2em card -->
                                            <!-- debuter 3me card -->
                                            <div class="col-6" style="margin-left:790px;top:-575px;">
                                                    <div>
                                                   
                                                        <img class="img" src="assets/images/-business-texte-concept-photo-sous-licence_csp45058320.webp" alt="">
                                                                    
                                                    </div>

                                                    <button type="button" class="btn "  style="background-color:green;color:white;width:250px" data-bs-toggle="modal" data-bs-target="#card3" data-bs-whatever="@test2">Espace Administration</button>
                                            </div>

                                    </div>
                                        <!-- fin 3em card -->

                                    </div>
                             
                    </div>
                    
               
                
            </div>
                 
                <!-- affiche card1 flottant -->
            <div class="modal fade" id="card1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Bienvenue dans votre espace étudiant</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                    <form action="php/setting.php"  method="POST">
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Matricule étudiant :</label>
                                        <input name="matricul1" type="text" class="form-control" id="recipient-name">
                                    </div>
                                    <div style="top: 10px;position:relative; background-color:white;">
                                    <button type="button" style="background-color: red; color:white;" class="btn" data-bs-dismiss="modal">Fermer</button>
                                    <button name="voir" type="submit" style="background-color:green ; color:white;" class="btn ">Valider</button>
                                  
                                </div>
                                <div style="position:relative; top: 10px;color:red;" >
                                    <?php
                                            if(isset($sms)){
                                                echo $sms;
                                            }
                                    ?>
                                </div>
                               
                                    </form>
                                </div>
                               
                            </div>
                     </div>
             

            </div>
                <!-- fin  card1 flottant-->
            
                <!-- affiche card2 flottant -->
             <div class="modal fade" id="card2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Bienvenue dans votre espace professeur</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="setting.php" method="POST">
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label"> Matricule prof:</label>
                                                <input name="matricul2" type="text" class="form-control" id="recipient-name">
                                            </div>
                                           
                                            <div>
                                            <button type="button" style="background-color: red; color:white;" class="btn" data-bs-dismiss="modal">Fermer</button>
                                            <button name="voir2" type="submit" style="background-color:green ; color:white;" class="btn ">Valider</button>
                                  
                                        </div>
                                            </form>
                                        </div>
                                       
                                </div>
                        </div>
                </div>

                    <!-- fin afficher card2 flottant -->

                    <!-- affiche card1 flottant -->
                <div class="modal fade" id="card3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Bienvenue dans l'espace administratif</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <form>
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient 1:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message 1:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Envoyer message</button>
                                    </div>
                            </div>
                     </div>
                 </div>
                <!-- fin  card1 flottant-->

                </div>
            </div>
            </div>

        </div>
        
          
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> visitez <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank">MOMO Yes </a> from MOMOYes.com</span>
        </div>
    </footer>
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    


</body>

</html>