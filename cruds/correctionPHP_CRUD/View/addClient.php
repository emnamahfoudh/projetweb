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
<html lang="en">

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
        <a class="nav-link active" href="upcomingCourses.php ">list of events</a>
        <a class="nav-link" href="ListClients.php">list of participants</a>
        <a class="nav-link" href="SearchCourse.php">chercher un evenement</a>
        <a class="nav-link" href="../back.php">back</a>

      </nav>
    </header>
    <a href="ListClients.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" id="myForm">
  <table border="1" align="center">
    <tr>
      <td>
        <label for="lastName">Last Name:</label>
      </td>
      <td>
        <input type="text" name="lastName" id="lastName" maxlength="20" required>
        <span class="error" id="lastNameError"></span>
      </td>
    </tr>
    <tr>
      <td>
        <label for="firstName">First Name:</label>
      </td>
      <td>
        <input type="text" name="firstName" id="firstName" maxlength="20" required>
        <span class="error" id="firstNameError"></span>
      </td>
    </tr>
    <tr>
      <td>
        <label for="address">Address:</label>
      </td>
      <td>
        <input type="text" name="address" id="address" required>
        <span class="error" id="addressError"></span>
      </td>
    </tr>
    <tr>
      <td>
        <label for="dob">Date of Birth:</label>
      </td>
      <td>
        <input type="date" name="dob" id="dob" required>
        <span class="error" id="dobError"></span>
      </td>
    </tr>
    <tr>
      <td>
        <label for="id_event">id event:</label>
      </td>
      <td>
        <input type="text" name="id_event" id="id_event" maxlength="20" required>
        <span class="error" id="id_eventError"></span>
      </td>
    </tr>
    <tr align="center">
      <td>
        <input type="submit" value="Save">
      </td>
      <td>
        <input type="reset" value="Reset">
      </td>
    </tr>
  </table>
</form>

<script>
  // get the form and all input fields
  const form = document.getElementById("myForm");
  const lastName = document.getElementById("lastName");
  const firstName = document.getElementById("firstName");
  const address = document.getElementById("address");
  const dob = document.getElementById("dob");
  const id_event = document.getElementById("id_event");

  // error messages for each field
  const lastNameError = document.getElementById("lastNameError");
  const firstNameError = document.getElementById("firstNameError");
  const addressError = document.getElementById("addressError");
  const dobError = document.getElementById("dobError");
  const id_eventError = document.getElementById("id_eventError");

  // validate the form on submit
  form.addEventListener("submit", (event) => {
    // prevent form submission
    event.preventDefault();

    // validate last name
    if (lastName.value.trim() === "") {
      lastNameError.textContent = "Last name is required";
      lastName.focus();
      return false;
    } else {
      lastNameError.textContent = "";
    }

    // validate first name
    if (firstName.value.trim() === "") {
      firstNameError.textContent = "First name is required";
      firstName.focus();
      return false;
    } else {
      firstNameError.textContent = "";
    }

    // validate address
    if (address.value.trim() === "") {
      addressError.textContent = "Address is required";
      address.focus();
      return false;
    } else {
      addressError.textContent = "";
    }

    // validate date of birth

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>