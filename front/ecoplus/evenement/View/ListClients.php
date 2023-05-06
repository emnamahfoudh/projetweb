<?php
include '../Controller/ClientC.php';
$clientC = new ClientC();
$list = $clientC->listClients();
?>
<!DOCTYPE html>
<html>

<head>
    <style>
        h1{
            font-size: 32px;
			font-family: Arial, sans-serif;
			color: #379800;
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <center>
        <h1>List of Participants</h1>
        <h2>
        <a href="addClient.php">Add Participant</a>
    </center>
    <table class="table table-success table-striped">
    
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
        <?php
        foreach ($list as $client) {
        ?>
            <tr>
                <td><?= $client['idClient']; ?></td>
                
                <td><?= $client['firstName']; ?></td>
                <td><?= $client['lastName']; ?></td>
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
    </table>
</body>

</html>