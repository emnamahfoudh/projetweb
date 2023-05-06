<?php


?>
<!DOCTYPE html>
<html>
  <head>
    <title>Backend Template</title>
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
        <a class="nav-link active" href= "View/upcomingCourses.php">gestion des evenements</a>
        <a class="nav-link" href= "">forum</a>
        <a class="nav-link" href= "">materiel</a>
        <a class="nav-link" href= "">formation</a>
        <a class="nav-link" href= "">login</a>
        <a class="nav-link" href= "">...</a>



      </nav>
    </header>
    <main>
      <!-- Your main content goes here -->
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Welcome to your company's backend dashboard!</h5>
          <p class="card-text"></p>
          <a href="#" class="btn btn-primary">Get started</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Recent Activity</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut lorem sed ante tincidunt ultrices.</p>
        </div>
      </div>
    </main>
    <footer>
      <p>&copy; 2023 Your Company Name</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>