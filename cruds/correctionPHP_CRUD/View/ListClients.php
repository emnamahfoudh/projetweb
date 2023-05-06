<?php
include '../Controller/ClientC.php';
$clientC = new ClientC();
$list = $clientC->listClients();
?>
<html>

<head>
<title>list of participants</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* Your custom CSS styles go here */
      body {
        font-family: Arial, sans-serif;
      }
      header {
        background-color: #007bff;
        color: white;
        padding: 10px;
      }
      nav {
        background-color: #f8f9fa;
        padding: 10px;
        width: 20%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
      }
      .nav-link {
        color: #007bff;
        font-weight: bold;
        margin-bottom: 10px;
      }
      main {
        padding: 10px;
        margin-left: 20%;
        width: 80%;
      }
      .card {
        margin-bottom: 20px;
      }
      footer {
        background-color: #f8f9fa;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
      }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</div>

</head>

<body>
<header>
      <nav>
        <a class="nav-link active" href="upcomingCourses.php">liste des evenements</a>
        <a class="nav-link" href="addClient.php">ajouter un participant</a>
        <a class="nav-link" href="SearchCourse.php">chercher un evenement</a>
        <a class="nav-link" href="../back.php">back</a>

      </nav>
    </header>
    <center>
        <h1>List of clients</h1>
        <h2>
            <a href="addClient.php">Add participant</a>
        </h2>
    </center>
    
    <table border="1" align="right" width="70%" style="margin-left: auto; margin-right: auto; margin-top: 10px;">
            <tr>
            <th>Id </th>
            <th>Last Name</th>
            <th>First Name</th>

            <th>Address</th>
            <th>Date of Birth</th>
            <th>id event</th>

            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $client) {
        ?>
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
                        <input type="hidden" value=<?PHP echo $client['idClient']; ?> name="idClient">
                    </form>
                </td>
                <td>
                    <a href="deleteClient.php?idClient=<?php echo $client['idClient']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
        <center>    <button> <a onclick="window.print()">Print this page</a></button>
</center>
    </table>
    
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>