<?php

include '../Controller/ClientC.php';

$error = "";

// create client
$client = null;

// create an instance of the controller
$clientC = new ClientC();
if (
    isset($_POST["idClient"]) &&
    isset($_POST["lastName"]) &&
    isset($_POST["firstName"]) &&

    isset($_POST["address"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["id_event"])

) {
    if (
        !empty($_POST["idClient"]) &&
        !empty($_POST["lastName"]) &&
        !empty($_POST["firstName"]) &&


        !empty($_POST["address"]) &&
        !empty($_POST["dob"])&&
        !empty($_POST["id_event"])

    ) {
        $client = new Client(
            $_POST['idClient'],
            $_POST['lastName'],  
                      $_POST['firstName'],

            $_POST['address'],
            new DateTime($_POST['dob']),
            $_POST['id_event']

        );
        $clientC->updateClient($client, $_POST["idClient"]);
        header('Location:ListClients.php');
    } else
        $error = "Missing information";
}
?>
<style>
        .title {
  color: #097969;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

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
  background-color: #f0f0f0;
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

button a {
  color: #ffffff;
  text-decoration: none;
  padding: 10px 20px;
  background-color: #4CAF50;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-top: 10px;
  margin-left: 10px;
  transition: background-color 0.3s ease;
}

button a:hover {
  background-color: #3e8e41;
}

hr {
  border: none;
  border-bottom: 1px solid #ccc;
  margin: 20px 0;
}

#error {
  color: red;
}

table {
  width: 80%;
  margin: 0 auto;
  border-collapse: collapse;
  text-align: left;
  margin-top: 20px;
  margin-left: 300px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

td:first-child {
  width: 20%;
  font-weight: bold;
  padding: 10px;
}

td:last-child {
  width: 80%;
  padding: 10px;
}

input[type=text], input[type=date] {
  padding: 10px;
  border: none;
  border-radius: 4px;
  width: 100%;
  box-sizing: border-box;
  margin-bottom: 10px;
  box-shadow: 0 1px 1px rgba(0,0,0,0.1);
}

input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

input[type=submit]:hover, input[type=reset]:hover {
  background-color: #3e8e41;
}
</style>
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

    </head>
   
    
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

<style>
        .title {
  color: #097969;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

</head>
<body>
    <button class="back-button"><a href="ListClients.php">Back to list</a></button>
    <hr>
<div id="error">
    <?php echo $error; ?>
</div>

<?php
if (isset($_POST['idClient'])) {
    $client = $clientC->showClient($_POST['idClient']);
?>

    <form action="" method="POST">
        <table class="client-table" align="center">
            <tr>
                <td>
                    <label for="idClient">Id Client:
                    </label>
                </td>
                <td><input type="text" name="idClient" id="idClient" value="<?php echo $client['idClient']; ?>" maxlength="20"></td>
            </tr>
            
            <tr>
                <td>
                    <label for="lastName">Last Name:
                    </label>
                </td>
                <td><input type="text" name="lastName" id="lastName" value="<?php echo $client['lastName']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="firstName">First Name:
                    </label>
                </td>
                <td><input type="text" name="firstName" id="firstName" value="<?php echo $client['firstName']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td>
                    <label for="address">Address:
                    </label>
                </td>
                <td>
                    <input type="text" name="address" value="<?php echo $client['address']; ?>" id="address">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="dob">Date of Birth:
                    </label>
                </td>
                <td>
                    <input type="date" name="dob" id="dob" value="<?php echo $client['dob']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_event">id_event:
                    </label>
                </td>
                <td><input type="text" name="id_event" id="id_event" value="<?php echo $client['id_event']; ?>" maxlength="20"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Update" class="update-button">
                </td>
                <td>
                    <input type="reset" value="Reset" class="reset-button">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>


</html>