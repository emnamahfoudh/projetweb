<!doctype html>
<html lang="fr">

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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets --> 
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesoeet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
 </head>






  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <title>gestion des evennements</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
    <style>
 
      /* Styling the body */
      body {
          margin: 0;
          padding: 0;
      }
        
      /* Styling section, giving background
          image and dimensions */
      section {
          width: 90%;
          height: 90vh;
        
      }
        
      /* Styling the left floating section */
      section .leftBox {
          width: 50%;
          height: 100%;
          float: left;
          padding: 50px;
          box-sizing: border-box;
      }
        
      /* Styling the background of
          left floating section */
      section .leftBox .content {
          color: #fff;
          background: rgba(0, 0, 0, 0.5);
          padding: 40px;
          transition: .5s;
      }
        
      /* Styling the hover effect 
          of left floating section */
      section .leftBox .content:hover {
          background: #227b0c;
      }
        
      /* Styling the header of left
          floating section */
      section .leftBox .content h1 {
          margin: 0;
          padding: 0;
          font-size: 50px;
          text-transform: uppercase;
      }
        
      /* Styling the paragraph of
          left floating section */
      section .leftBox .content p {
          margin: 10px 0 0;
          padding: 0;
      }
        
      /* Styling the three events section */
      section .events {
          position: relative;
          width: 50%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
          float: right;
          box-sizing: border-box;
      }
        
      /* Styling the links of
      the events section */
      section .events ul {
          position: absolute;
          top: 50%;
          transform: translateY(-50%);
          margin: 0;
          padding: 40px;
          box-sizing: border-box;
      }
        
      /* Styling the lists of the event section */
      section .events ul li {
          list-style: none;
          background: #fff;
          box-sizing: border-box;
          height: 200px;
          margin: 15px 0;
      }
        
      /* Styling the time class of events section */
      section .events ul li .time {
          position: relative;
          padding: 20px;
          background: #262626;
          box-sizing: border-box;
          width: 30%;
          height: 100%;
          float: left;
          text-align: center;
          transition: .5s;
      }
        
      /* Styling the hover effect
          of events section */
      section .events ul li:hover .time {
          background: #06ab4e;
      }
        
      /* Styling the header of time
          class of events section */
      section .events ul li .time h2 {
          position: absolute;
          margin: 0;
          padding: 0;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          color: #fff;
          font-size: 60px;
          line-height: 30px;
      }
        
      /* Styling the texts of time
      class of events section */
      section .events ul li .time h2 span {
          font-size: 30px;
      }
        
      /* Styling the details
      class of events section */
      section .events ul li .details {
          padding: 20px;
          background: #fff;
          box-sizing: border-box;
          width: 70%;
          height: 100%;
          float: left;
      }
        
      /* Styling the header of the
      details class of events section */
      section .events ul li .details h3 {
          position: relative;
          margin: 0;
          padding: 0;
          font-size: 22px;
      }
        
      /* Styling the lists of details
      class of events section */
      section .events ul li .details p {
          position: relative;
          margin: 10px 0 0;
          padding: 0;
          font-size: 16px;
      }
        
      /* Styling the links of details
      class of events section */
      section .events ul li .details a {
          display: inline-block;
          text-decoration: none;
          padding: 10px 15px;
          border: 1.5px solid #262626;
          margin-top: 8px;
          font-size: 18px;
          transition: .5s;
      }
        
      /* Styling the details class's hover effect */
      section .events ul li .details a:hover {
          background: #459510;
          color: #fff;
          border-color: #1e9813;
      }
  </style>

</head>



<body >
   <!-- header section start -->
   <div class="header_section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="logo"><a href="index.php"><img src="images/ecoplus.png"></a></div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
             <a class="nav-item nav-link" href="acceuil.php">ACCEUIL</a>
             <a class="nav-item nav-link" href="qui sommes nous.php">QUI SOMMES NOUS ?</a>
             <a class="nav-item nav-link" href="forum.php">FORUM</a>
             <a class="nav-item nav-link" href="pricing.php">FORMATION</a>
             <a class="nav-item nav-link" href="ressources materielles.php">RESSOURCES MATERIELLES</a>
          </div>
       </div>
       <div class="login_menu">
          <a href="#"><img src="images/search-icon.png"></a>
       </div>
    </nav>


  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images\zermatt-estate-2020.jpg.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>  ENVIRONNEMENT</h5>
          <p>OFFREZ-NOUS UNE VIE VERTE ET SAINE QUE NOUS DEVONS PROTÉGER</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="images\zona-del-barolo-cosa-vedere.jpg.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>NOS EVENNEMENTS</h5>
          <p>CONTRIBUEZ AVEC NOUS POUR RENDRE NOTRE PLANÈTE VERTE</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  
      



<pre>

</pre>
<hr>


<div>
  
</div>


<p><h3><span style="color: rgb(17, 107, 33);"><strong>NOS EVENNEMENTS</strong></span></h3></p>
  <div class="card-group">

    <div class="card">
      <img src="images\World_Wildlife_Day.width-800.jpg" height="350" weight ="350" alt="...">
      <div class="card-body">
        <h5 class="card-title"> green</h5>
        <p class="card-text">Les animaux et les plantes ne sont pas seulement précieux pour eux-mêmes - ils font également partie d'un environnement naturel plus large qui peut fournir de la nourriture, un abri, de l'eau et d'autres fonctions à d'autres animaux sauvages et humains.</p>
        <form action="evenement/View/addClient.php" method="post">
<button type="submit" class="btn btn-success">participer</button>
</form>
      </div>
    </div>


    <div class="card">
      <img src="images\3d-earth-ecology-concepts-plasticine-earth-environment-take-care-of-the-planet.jpg"height="350" weight ="350" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"> main dans la main </h5>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        <form action="evenement/View/addClient.php" method="post">
<button type="submit" class="btn btn-success">participer</button>
</form>
      </div>
    </div>


    <div class="card">
      <img src="images\renewable_energy_sources-e1551858601606.jpg" class="card-img-top" height="350" weight ="350"alt="...">
      <div class="card-body">
        <h5 class="card-title">impact now
        </h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        <form action="evenement/View/addClient.php" method="post">
<button type="submit" class="btn btn-success">participer</button>
</form>
      </div>

    </div>
   
  </div>

  <form action="evenement/View/upcomingCourses.php" method="post">
<button type="submit" class="btn btn-success">voir la table d'evenement</button>
</form>



<pre>

</pre>

<hr>
<pre>

</pre>

  
<div>
    <section>
        <div class="leftBox">
            <div class="content">
                <h1>
                  Événements et spectacles
                </h1>
                 
<p>
  L'environnement est notre système de support de vie de base et est composé d'êtres vivants, d'environnements physiques et de conditions climatiques.
  Il est dérivé d'un mot français, "Environner", qui signifie "entourer".
  Le terme environnement comprend toutes les entités biotiques et abiotiques qui nous entourent.
  Biotic fait référence au monde des organismes vivants, tandis qu'Abiotic fait référence au monde des éléments non vivants.
   L'environnement nous fournit les éléments essentiels - l'air, l'eau, la nourriture et la terre qui sont essentiels pour que la vie s'épanouisse sur la Terre.
                </p>
 
            </div>
        </div>
  
        <div class="events">
            <ul>
                <li>
                    <div class="time">
                        <h2>
                            15 <br><span>Mars</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                          Où se passe l'événement ?
                        </h3>
                         
<p>
  Humans share the planet with 8 million other species of plants and animals. 
  We have a responsibility to future generations and all living things to protect the environment.
   
                        </p>
 
  
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear: both;"></div>
                </li>
  
                <li>
                    <div class="time">
                        <h2>
                            27 <br><span>Mai</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                          Où se passe l'événement ?
                        </h3>
                         
<p>Nous sommes bombardés de reportages et de reportages sur la pollution, le déclin de la faune, le changement climatique .
 
  avec de petits changements, tout le monde peut faire sa part de manière modeste mais significative et souvent économiser de l'argent.

                           
                        </p>
 
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>
                </li>
  
                <li>
                    <div class="time">
                        <h2>
                            12 <br><span>aout</span>
                        </h2>
                    </div>
                    <div class="details">
                        <h3>
                          Où se passe l'événement ?
                        </h3>
                         
<p>
  L'éolien et le solaire alimentent une révolution de l'énergie propre.
  Voici ce que vous devez savoir sur les énergies renouvelables et comment vous pouvez aider à avoir un impact chez vous.
                        </p>
 
  
                        <a href="#">View Details</a>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
        </div>
    </section>
</div>
  
<pre>

</pre>


<div class="p-3 text-primary-emphasis --bs-success-border-subtle">

  <div class="card-header">
    <span style="color: rgba(253, 0, 0, 0.959);">DON'T WORRY</span>

  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>vous recevrez une notification avant l'evennement</p>
      <footer class="blockquote-footer">vous pouvez choisir  <cite title="Source Title">quand la recevoir</cite></footer>
    </blockquote>
  </div>

</div>


</body>
<pre>

</pre>
<hr>
<pre>
  
</pre>
<div class="footer_section layout_padding">
  <div class="container">
     <div class="newsletter_section">
        <div class="newsletter_left">
           <div class="footer_logo"><img src="images/ecoplus.png"></div>
           <img src="ecoplus.png" width="200" height="auto">
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
                    <li><a href="acceuil.php">ACCEUIL</a></li>
                    <li><a href="qui sommes nous.php">QUI SOMMES NOUS?</a></li>
                    <li><a href="forum.php">FORUM</a></li>
                    <li><a href="pricing.php">FORMATION</a></li>
                   
                    <li><a href="ressources materielles.php">RESSOURCES MATERIELLES</a></li>
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
                    <li><a href="#"><img src="images/map-icon.png"><span class="padding_left_10">Petite Ariana</span></a></li>
                    <li><a href="#"><img src="images/call-icon.png"><span class="padding_left_10">+00 1234567890</span></a></li>
                    <li><a href="#"><img src="images/mail-icon.png"><span class="padding_left_10">eco.plus@esprit.tn</span></a></li>
                 </ul>
              </div>
           </div>
        </div>
        <h1 class="follow_text">suivez nous</h1>
        <div class="social_icon">
           <ul>
              <li><a href="#"><img src="images/fb-icon.png"></a></li>
              <li><a href="#"><img src="images/twitter-icon.png"></a></li>
              <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
              <li><a href="#"><img src="images/instagram-icon.png"></a></li>
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
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<!-- javascript --> 
<script src="js/owl.carousel.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
  $(document).ready(function(){
  $(".fancybox").fancybox({
     openEffect: "none",
     closeEffect: "none"
     });
     
</script>


</html>