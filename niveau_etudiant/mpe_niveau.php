<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Gestion de note UICI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/logo.png" />
</head>

<style>
    .div-image{

width: 550px;
height: 250px;
    }

    .img {
border: none;
box-shadow: 0 0 40px #000000;	
width: 350px;
height: 350px;
 top: 20px;
 
    }
    .btn{
        position: relative;
        box-shadow: 0 0 40px #000000;
        top: 20px;
        width: 350px;
        font-weight: bold;
        text-transform: uppercase;
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
                    <a class="nav-link" href="../home.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Acceuil</span>
                    </a>
                </li>

                <li class="nav-item menu-items">
                    <a class="nav-link" href="../pages/forms/add_etudiant.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Ajouter un etudiant</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../index2.php">
                        <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
                        <span class="menu-title">Filiere et Niveau</span>
                    </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" href="../pages/ui-features/commande_en_cour.php">
                        <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
                        <span class="menu-title">Commande en cour...</span>
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
            <div class="main-panel" style=" background-color:white;" >
           
                <div class="contenair"  style=" padding:200px;">
                <a href="../index2.php" style="text-decoration: none;">
                <button class="bt "  style="  box-shadow: 0 0 40px #000000;width: 150px; height:50px;font-weight: bold; color: black;border:none;margin-left:-185px; background-color:orangered;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>retour</button>
                </a>
                    <div class="row" >
                        <div class="col-6" style="width: 150px;">
                        <div class="div-image">
                        <img  class="img" src="../../admin/assets/images/mpe-l1.jpg" alt="">
                        </div>
                      
                        <button class="btn " style="color: black;border:2px solid black;top:120px;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Voir la liste  </button>
                        </div>
                   
                    <!--  -->
                    
                        <div class="col-6" style="width:150px ;">
                       <div >
                        <img class="img"  src="../../admin/assets/images/mpe-l2.jpg" alt="">
                        </div>
                        <button class="btn "  style="color: black;border:2px solid black;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Voir la liste  </button>
                        </div>
                       
                        <div class="col-6" style="top:70px ;width: 150px;">
                       <div >
                        <img class="img"  src="../../admin/assets/images/mpe-l3.jpg" alt="">
                        </div>
                        <button class="btn "  style="color: black;border:2px solid black;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Voir la liste</button>
                        </div>

                        <div class="col-6" style="top:70px ;width: 150px;">
                       <div >
                        <img class="img"  src="../../admin/assets/images/mpe-master1.jpg" alt="">
                        </div>
                        <button class="btn "  style="color: black;border:2px solid black;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Voir la liste</button>
                        </div>

                        <div class="col-6" style="top:150px ;width: 150px;">
                       <div >
                        <img class="img"  src="../../admin/assets/images/mpe-master2.jpg" alt="">
                        </div>
                        <button class="btn "  style="color: black;border:2px solid black;" id="cart" name="add_to_cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Voir la liste  mpe Master 2</button>
                        </div>
                       
                    </div>
                   
                   
                </div>
           
                <!-- fin class='contenaire -->
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
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>