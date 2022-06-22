<!DOCTYPE html>
<html lang="en">

<head>
       <!-- Required meta tags --> 
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion de note UICI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../ssets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/logo.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html">
                    <p style="color: antiquewhite;font-weight:bold;font-size:20px">Gestion des notes uici</p>
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
                    <a class="nav-link" href="../../home.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Acceuil</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Ajouter un etudiant</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../../index2.php">
                        <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                        <span class="menu-title">Filiere et Niveau</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="pages/ui-features/commande_en_cour.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Commande en cour...</span>
                    </a>
                </li>
               

        </nav>
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
                <div class="content-wrapper" style="background:white;">
     

         <form action="../../php/setting.php" method="POST" class="row g-3" style="width: 540px;height:570px;box-shadow: 0 0 40px #000000;position:relative;top:100px; margin-left:350px; background-color: #191c25; color:white;">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Matricul :</label>
                <input name="matricul" type="text" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Nom :</label>
                <input name="name" type="text" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Prenom :</label>
                <input name ='username' type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Gmail :</label>
                <input name="email" type="gmail" class="form-control" id="inputAddress" placeholder="*****@gmail">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label"> Sexe</label>
                <input name="sexe" type="text" class="form-control" id="inputAddress2" placeholder="Entre M ou F">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label"> Number</label>
                <input name="tel" type="number" class="form-control" id="inputAddress2" placeholder="********">
            </div>
            
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                   Se souvenir de moi
                </label>
                </div>
            </div>
            <div class="col-12">
                <button name="enregistrer" type="submit" style="background-color: green; color:white; width:525px" class="btn">Enregistrer</button>
            </div>
            <div style="color: red;">
                        <?php
                          if(isset($sms))
                          {
                            echo $sms;
                          }
                        ?>
             </div>
            </form>
           
                </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
   
    <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../sets/vendors/chart.js/Chart.min.js"></script>
    <script src="../../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>


