<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ecoplus Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-magnify me-1"></i> <span class="font-16">Search</span></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="mdi mdi-window-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../assets/images/users/profile.png" alt="user" class="rounded-circle" width="31">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i>
                                    My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i>
                                    My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                                    Inbox</a>
                            </ul>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">EVENNEMENTS</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-profile.html" aria-expanded="false"><i
                                    class="mdi mdi-account-network"></i><span class="hide-menu">forum</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.html" aria-expanded="false"><i class="mdi mdi-border-all"></i><span
                                    class="hide-menu">materielles</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                    class="hide-menu">formation</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="starter-kit.html" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">user</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="error-404.html" aria-expanded="false"><i class="mdi mdi-alert-outline"></i><span
                                    class="hide-menu">reclammation</span></a></li>
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-6">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 d-flex align-items-center">
                              <li class="breadcrumb-item"><a href="index.html" class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                              <li class="breadcrumb-item active" aria-current="page">EVENNEMENTS</li>
                            </ol>
                          </nav>
                        <h1 class="mb-0 fw-bold">EVENNEMENTS</h1> 
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">PARTICIPANTS</h4>
                                        
                                    </div>
                                    
                                </div>
                                
                                <img src="..\assets\images\5721222.png" class="rounded float-start" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">CRUDS</h4>
                                <h6 class="card-subtitle">gerer les participants de cet evennement</h6>
                                <div class="mt-5 pb-3 d-flex align-items-center">
                                    <span class="btn btn-primary btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-cart-outline fs-4" ></i>
                                    </span>
                                    <div class="ms-3">

                                 <form action="View/addClient.php" method="post">
		<button type="submit">creer</button>
        </form>
                                    </div>
                                   
                                </div>
                                
                                
                                <div class="py-3 d-flex align-items-center">
                                    <span class="btn btn-info btn-circle d-flex align-items-center">
                                        <i class="mdi mdi-diamond fs-4 text-white" ></i>
                                    </span>
                                    <div class="ms-3">

                                       <form action="View/ListClients.php" method="post">
		<button type="submit">afficher</button>
	</form>
                                    </div>
                                    
                                </div>

                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Sales chart -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">EVENNEMENTS</h4>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <img src="../assets/images/2037641.png" class="rounded float-start" >
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">CRUDS</h4>
                                    <h6 class="card-subtitle">gerer les evennements</h6>
                                    <div class="mt-5 pb-3 d-flex align-items-center">
                                        <span class="btn btn-primary btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-cart-outline fs-4" ></i>
                                        </span>
                                        <div class="ms-3">
                                            
                                        <form action="View/upcomingCourses.php" method="post">
		<button type="submit">afficher</button>
        </form>
                                        </div>
                                       
                                    </div>
                                    <div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-warning btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-star-circle fs-4" ></i>
                                        </span>
                                        <div class="ms-3">
                                        <form action="View/SearchCourse.php" method="post">
		<button type="submit">chercher un evenement par le nom</button>
        </form>
                                            
                                        </div>
                                       
                                    </div>
                                    <!--<div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-success btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-comment-multiple-outline text-white fs-4" ></i>
                                        </span>
                                        <div class="ms-3">
                                            <button><a href="https://www.example.com">MODIFIER</a></button>
    
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="py-3 d-flex align-items-center">
                                        <span class="btn btn-info btn-circle d-flex align-items-center">
                                            <i class="mdi mdi-diamond fs-4 text-white" ></i>
                                        </span>
                                        <div class="ms-3">
                                            <button><a href="https://www.example.com">AFFICHER</a></button>
    
                                            
                                        </div>
                                        
                                    </div>-->
    
                                   
                                </div>
                            </div>
                        </div>
                    </div>










            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Flexy Admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>