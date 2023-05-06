<?php
include '../Controller/CourseC.php';
$courseC = new CourseC();

$list = $courseC->upcomingCourse();

?>
<html>

<head>
<title>list of events</title>
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
</head>

<body>
<header>
      <nav>
      <a class="nav-link" href="ListClients.php">list of participants</a>
      <a class="nav-link" href="addClient.php">ajouter un participant</a>
        <a class="nav-link" href="SearchCourse.php">chercher un evenement</a>
        <a class="nav-link" href="../back.php">back</a>

      </nav>
    </header>
    <center>
        <h1>List of events</h1>
    </center>
    <table border="1" align="right" width="70%" style="margin-left: auto; margin-right: auto; margin-top: 10px;">
        <tr>
            <th>Id event</th>
            <th>Label</th>
            <th>Duration</th>
            <th>Number of places</th>
            <th>Date </th>
            <td></td>
        </tr>
        <?php
        foreach ($list as $course) {
        ?>
            <tr>
                <td><?= $course['idevent']; ?></td>
                <td><?= $course['label']; ?></td>
                <td><?= $course['duration']; ?></td>
                <td><?= $course['nbPlaces']; ?></td>
                <td><?= $course['date']; ?></td>
                <td>
                    <?php
                    if ($course['nbPlaces'] != 0) {
                    ?>
                        <button><a href="bookCourse.php?idevent=<?php echo $course['idevent']; ?>">Book</a></button>
                </td>
            <?php
                    } else
                        echo '<h3> Sold Out </h3>'
            ?>
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