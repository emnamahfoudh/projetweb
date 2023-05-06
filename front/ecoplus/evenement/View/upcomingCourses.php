<?php
include '../Controller/CourseC.php';
$courseC = new CourseC();

$list = $courseC->upcomingCourse();
// Get the closest event based on date
$closestEvent = null;
foreach ($list as $course) {
    $date = strtotime($course['date']);
    if (!$closestEvent || abs($date - time()) < abs(strtotime($closestEvent['date']) - time())) {
        $closestEvent = $course;
    }
}
?>
<html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Teab</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../../images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../../css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesoeet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <!-- header section start -->
   <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="logo"><a href="index.php"><img src="../../images/ecoplus.png"></a></div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
      
      
      
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>gestion des evennements</title>
  <link rel="stylesheet" href="../../style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="../../script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
      
      
      
      
      
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
             <a class="nav-item nav-link" href="../../acceuil.php">ACCEUIL</a>
             <a class="nav-item nav-link" href="../../qui sommes nous.php">QUI SOMMES NOUS ?</a>
             <a class="nav-item nav-link" href="../../forum.php">FORUM</a>
             <a class="nav-item nav-link" href="../../pricing.php">FORMATION</a>
             <a class="nav-item nav-link" href="../../ressources materielles.php">RESSOURCES MATERIELLES</a>
          </div>
       </div>
       <div class="login_menu">
          <a href="#"><img src="../../images/search-icon.png"></a>
       </div>
    </nav>

</head>

<head>
<style>
        .title {
  color: #097969;
}
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
</head>

<body>

    <center>
        <h1 class="title">List of events</h1>
    </center>
    <table class="table table-success table-striped">
        <tr>
            <th>Id event</th>
            <th>Label</th>
            <th>Duration</th>
            <th>Number of places</th>
            <th>Date of the event</th>
            <td></td>
        </tr>
        <tbody id="result">
        <?php
                   

        foreach ($list as $course) {
        ?>
            <tr>
                <td><?= $course['idevent']; ?></td>
                <td><?= $course['label']; ?></td>
                <td><?= $course['duration']; ?></td>
                <td><?= $course['nbPlaces']; ?></td>
                <td><?= $course['date']; ?></td>
                
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
    <script>
        // Show the closest event in a pop-up
        var closestEvent = <?php echo json_encode($closestEvent); ?>;
        if (closestEvent) {
            var eventDate = new Date(closestEvent.date);
            var message = "The closest event is " + closestEvent.label + " on " + eventDate.toLocaleDateString() + " at " + eventDate.toLocaleTimeString();
            alert(message);
        }
    </script>
</body>
<footer>
   <div class="footer_section layout_padding">
  <div class="container">
     <div class="newsletter_section">
        <div class="newsletter_left">
           <div class="footer_logo"><img src="../../images/ecoplus.png"></div>
           <img src="../../ecoplus.png" width="200" height="auto">
        </div>
        <div class="newsletter_right">
           <h5 class="newsletter_taital">abonnement</h5>
           <div class="subscribe_main">
              <input type="text" class="mail_text" placeholder="Enterer votre adressse mail" name="text">
              <div class="subscribe_bt"><a href="#">abonnez vous</a></div>
           </div>
        </div>
     </div>
     <div class="footer_taital_main">
        <div class="row">
           <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">EcoPlus
                  </h2>
              <p class="ipsum_text">votre meilleur choix pour un engagement environnemental concret</p>
           </div>
           <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Menus</h2>
              <div class="footer_links">
                 <ul>
                    <li><a href="../../acceuil.php">ACCEUIL</a></li>
                    <li><a href="../../qui sommes nous.php">QUI SOMMES NOUS?</a></li>
                    <li><a href="../../forum.php">FORUM</a></li>
                    <li><a href="../../pricing.php">FORMATION</a></li>
                   
                    <li><a href="../../ressources materielles.php">RESSOURCES MATERIELLES</a></li>
                 </ul>
              </div>
           </div>
           <div class="col-lg-3 col-sm-6">
              <h2 class="liens utiles">liens utiles</h2>
              <div class="footer_links">
                 <ul>
                    <li><a href="#">@facebook</a></li>
                    <li><a href="#">@instagram</a></li>
                    <li><a href="#">@twitter</a></li>
                    
                 </ul>
              </div>
           </div>
           <div class="col-lg-3 col-sm-6">
              <h2 class="useful_text">Contactez nous</h2>
              <div class="addres_link">
                 <ul>
                    <li><a href="#"><img src="../../images/map-icon.png"><span class="padding_left_10">Petite Ariana</span></a></li>
                    <li><a href="#"><img src="../../images/call-icon.png"><span class="padding_left_10">+00 1234567890</span></a></li>
                    <li><a href="#"><img src="../../images/mail-icon.png"><span class="padding_left_10">eco.plus@esprit.tn</span></a></li>
                 </ul>
              </div>
           </div>
        </div>
        <h1 class="follow_text">suivez nous</h1>
        <div class="social_icon">
           <ul>
              <li><a href="#"><img src="../../images/fb-icon.png"></a></li>
              <li><a href="#"><img src="../../images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="../../images/linkedin-icon.png"></a></li>
              <li><a href="#"><img src="../../images/instagram-icon.png"></a></li>
           </ul>
        </div>
     </div>
  </div>
</div>
<!-- footer section end -->  
<!-- copyright section start -->
<div class="copyright_section">
  <div class="container">
     <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="https://html.design"> Free  html Templates</p>
  </div>
</div>
<!-- copyright section end -->    
<!-- Javascript files-->
<script src="../../js/jquery.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/jquery-3.0.0.min.js"></script>
<script src="../../js/plugin.js"></script>
<!-- sidebar -->
<script src="../../js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/custom.js"></script>
<!-- javascript --> 
<script src="../../js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
  $(document).ready(function(){
  $(".fancybox").fancybox({
     openEffect: "none",
     closeEffect: "none"
     });
     
</script>
<script>
  $(document).ready(function(){
      // Add minus icon for collapse element which is open by default
      $(".collapse.show").each(function(){
       $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
      });
      
      // Toggle plus minus icon on show hide of collapse element
      $(".collapse").on('show.bs.collapse', function(){
       $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
      }).on('hide.bs.collapse', function(){
       $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      });
  });
</script>

</html>