<?php
include '../Controller/ClientC.php';
$clientC = new ClientC();
$list = $clientC->listClients();
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

<title>List of Participants</title>
    <style>
        /* Center align the heading */
        h1, h2 {
            text-align: center;
        }
        /* Add some margin to the top and bottom of the table */
        table {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        /* Add borders to the table cells */
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        /* Style the "Add Participant" link */
        a {
            text-decoration: none;
            background-color: #008CBA;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        /* Style the "Update" button */
        input[type="submit"] {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        /* Style the "Delete" link */
        a.delete-link {
            color: red;
            text-decoration: none;
        }
    </style>
    <body>
      <style>table {
      border-collapse: collapse;
      width: 50%;
      margin: 1 auto;
    }

    th, td {
      text-align: left;
      padding: 8px;
    }

    th {
      background-color: #ddd;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    input[type="text"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      </style>

      <style>
        h1{
            font-size: 32px;
			font-family: Arial, sans-serif;
			color: #379801;
			text-align: center;
			text-transform: uppercase;
        }
        h2{
            font-size: 32px;
			font-family: monospace, serif;
			
			text-align: center;
			text-transform: uppercase;
        }
    </style>



    
    
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


</head>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

<h1>List of Participants</h1>
    <h2><a href="addClient.php">Add Participant</a></h2>
    <table>
        <tr>
            <th>Id Client</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>Date of Birth</th>
            <th>id_event</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($list as $client) { ?>
            <tr>
                <td><?= $client['idClient']; ?></td>
                <td><?= $client['lastName']; ?></td>
                <td><?= $client['firstName']; ?></td>
                <td><?= $client['address']; ?></td>
                <td><?= $client['dob']; ?></td>
                <td><?= $client['id_event']; ?></td>
                <td align="center">
                    <form method="POST" action="updateClient.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value="<?= $client['idClient']; ?>" name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?= $client['idClient']; ?>" class="delete-link">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <center>    <button> <a onclick="window.print()">Print this page</a></button>
</center>
    <form method="post" action="stat.php" align="center">
        <input type="submit" name="stat" value="Statistiques">
    </form>

</body>

</html>