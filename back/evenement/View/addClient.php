<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["lastName"]) &&
    isset($_POST["firstName"]) &&

    isset($_POST["address"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["id_event"])
) {
    if (
        !empty($_POST["lastName"]) &&
        !empty($_POST['firstName']) &&

        !empty($_POST["address"]) &&
        !empty($_POST["dob"]) &&
        !empty($_POST["id_event"])

    ) {
        $client = new Client(
            null,
            $_POST['lastName'],
            $_POST['firstName'],

            $_POST['address'],
            new DateTime($_POST['dob']),
            $_POST['id_event']

        );
        $clientC->addClient($client);
        header('Location:ListClients.php');
    } else
        $error = "Missing information";
}


?>








<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ecoplus Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ecoplus Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/ecoplus.png">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../projet/backc.css">
    <link rel="stylesheet" type="text/css" href="backc.css">
    <title>admin</title>

  
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    


<style>
.sidebar {
	flex: 0 0 300px;
	margin-left: 20px;
}
.wrapper {
	display: flex;
}

.content {
	flex: 1;
}

.sidebar {
	flex: 0 0 300px;
	margin-left: 20px;
}

img {
	max-width: 100%;
	height: auto;
}
</style>



<style>
  body {
    background-color: #f5f5f5;
    font-family: Arial, sans-serif;
  }
  
  a {
    text-decoration: none;
    color: #333;
  }
  
  a:hover {
    text-decoration: underline;
  }
  
  form {
    background-color: #fff;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
    box-shadow: 0 2px 4px rgba(0,0,0,0.3);
    border-radius: 5px;
  }
  
  h1 {
    font-size: 24px;
    margin-top: 0;
    margin-bottom: 20px;
  }
  
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  input[type="text"],
  input[type="date"] {
    border: 1px solid #ccc;
    padding: 5px;
    border-radius: 3px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 10px;
    font-size: 16px;
  }
  
  input[type="submit"],
  input[type="reset"] {
    background-color: #008CBA;
    border: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
    margin-right: 10px;
  }
  
  input[type="submit"]:hover,
  input[type="reset"]:hover {
    background-color: #006B8F;
  }
  
  .error {
    color: red;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .success {
    color: green;
    font-weight: bold;
    margin-bottom: 10px;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group:last-child {
    margin-bottom: 0;
  }
  
  .form-control:focus {
    outline: none;
    box-shadow: 0 0 2px 1px #008CBA;
    border-color: #008CBA;
  }
  
</style>


    </head>
    <body>
      
    
<header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    
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
                                <img src="../../assets/images/ecoplus.png" alt="user" class="rounded-circle" width="31">
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

        <aside class="left-sidebar" style =" margin-top: 30px;" data-sidebarbg="skin6">
 
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.html" aria-expanded="false"><i style="color : grey" class="mdi mdi-view-dashboard"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="pages-profile.html" aria-expanded="false"><i style="color : grey"
                                    class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span></a></li>
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="table-basic.html" aria-expanded="false"><i  style="color : grey" class="mdi mdi-border-all"></i><span
                                    class="hide-menu">Table</span></a></li>
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="icon-material.html" aria-expanded="false"><i style="color : grey" class="mdi mdi-face"></i><span
                                    class="hide-menu">Icon</span></a></li>
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="starter-kit.html" aria-expanded="false"><i style="color : grey" class="mdi mdi-file"></i><span
                                    class="hide-menu">Blank</span></a></li>
                        <li class="sidebar-item"> <a style="color : grey" class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="error-404.html" aria-expanded="false"><i style="color : grey" class="mdi mdi-alert-outline"></i><span
                                    class="hide-menu">404</span></a></li>
                        
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>




		<!-- mon code  -->
  
        <a href="ListClients.php" style="text-decoration:none;">Back to List</a>
<hr>

<div id="error" style="color:red;">
  <?php echo $error; ?>
</div>

<form action="" method="POST">
  <div class="contactez-nous">
    <h1>Ajouter un client</h1>
    <p>--------------------------</p>
    <form action="/page-traitement-donnees" method="post">
      <div>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" maxlength="20" required>
      </div>
      <div>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" maxlength="20" required>
      </div>
      <div>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required>
      </div>
      <div>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required>
      </div>
      <div>
        <label for="id_event">ID Event:</label>
        <input type="text" name="id_event" id="id_event" required>
      </div>
      <div>
        <input type="submit" value="Save">
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>
</form>


</body>


</html>