<?php
require ("db_config.php");
global $yhendus;

if(isSet($_REQUEST["uusleht"])){
    $kask=$yhendus->prepare("INSERT INTO etteasted (nimetus, kirjeldus, kellaaeg) VALUES (?, ?, ?)");
    $kask->bind_param("sss", $_REQUEST["nimetus"], $_REQUEST["kirjeldus"], $_REQUEST["kellaaeg"]);
    $kask->execute();
    header("Location: $_SERVER[PHP_SELF]");
    $yhendus->close();
    exit(); }

if(isSet($_REQUEST["kava_kustusid"])) {
    $kask = $yhendus->prepare("DELETE FROM etteasted WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kava_kustusid"]);
    $kask->execute(); }

if(isSet($_REQUEST["inim_kustusid"])) {
    $kask = $yhendus->prepare("DELETE FROM osalejad WHERE id=?");
    $kask->bind_param("i", $_REQUEST["inim_kustusid"]);
    $kask->execute(); }

?>
<!DOCTYPE html>
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
      <title>ADMIN</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Great+Vibes%7CPoppins:400,700&display=swap&subset=latin-ext">
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
      <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="logo" href="index.php"><img src="images/holiday-img.png" alt="holiday"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item ">
                     <a class="nav-link" href="index.php">KUTSE</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="kava.php">KAVA</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="registreerimine.php">REGISTREERIMINE</a>
                  </li>
                  <li class="nav-item active">
                     <a class="nav-link" href="admin.php">ADMIN</a>
                  </li>

               </ul>
            </div>
         </nav>
      </div>
      <!-- header section start -->
      <!-- testimonial section start -->
      <div class="gifts_section layout_padding">
         <div class="container">
            <div class="tree_icon_2"><img src="images/tree-icon.png" alt="tree"></div>
            <h1 class="gifts_taital">ADMIN</h1>
         </div>

         <div class="testimonial_section">
             <div class="container">
                 <h1 class="mark_text">Registreeritud peolised</h1>
                 <ul>
                     <?php
                     $kask=$yhendus->prepare("SELECT id, eesnimi, perenimi, email FROM osalejad");
                     $kask->bind_result($id, $eesnimi, $perenimi, $email );
                     $kask->execute();
                     while($kask->fetch()){
                         echo "<li>".htmlspecialchars($eesnimi).
                              " ".htmlspecialchars($perenimi).
                              " ".htmlspecialchars($email).
                             " <a href='?inim_kustusid=$id'>kustuta</a>".
                              "</li>";
                     }
                     ?>
                 </ul>
                 <h1 class="mark_text">Sündmuste loetelu</h1>
                 <ul>
                     <?php
                     $kask=$yhendus->prepare("SELECT id, nimetus FROM etteasted ORDER BY kellaaeg");
                     $kask->bind_result($id, $nimetus);
                     $kask->execute();
                     while($kask->fetch()){
                         echo "<li><a href='?id=$id'>".
                             htmlspecialchars($nimetus)."</a></li>";
                     }
                     ?>
                 </ul>
                 <br><h2><a href='?lisamine=jah'>Lisa uus sündmus siit!</a></h2>

                 <?php
                 if(isSet($_REQUEST["id"])){
                     $kask=$yhendus->prepare("SELECT id, nimetus, kirjeldus, kellaaeg FROM etteasted WHERE id=?");
                     $kask->bind_param("i", $_REQUEST["id"]);
                     $kask->bind_result($id, $nimetus, $kirjeldus, $kellaaeg);
                     $kask->execute();
                     if($kask->fetch()){
                         echo "<h1 class='mark_text'>".htmlspecialchars($nimetus)."</h1>";
                         echo htmlspecialchars($kellaaeg);
                         echo "<br /><a href='?kava_kustusid=$id'>kustuta</a>";
                     } else {
                         echo "Vigased andmed.";
                     }
                 }
                 if(isSet($_REQUEST["lisamine"])){
                     ?>

                     <form action='?'>
                         <input type="hidden" name="uusleht" value="jah" />
                         <h1 class="mark_text">Sündmuse ajakava täiendamine</h1>
                         <dl>
                             <label for="nimetus">Lisa nimetus:</label>
                             <dd>
                                 <textarea id="nimetus" rows="1" name="nimetus"></textarea>
                             </dd>
                             <label for="kellaaeg">Lisa kellaaeg (formaadis HH:MM:SS):</label>
                             <dd>
                                 <input id="kellaaeg" type="text" name="kellaaeg" />
                             </dd>
                             <label for="kirjeldus">Lisa kirjeldus:</label>
                             <dd>
                                 <textarea id="kirjeldus" rows="10" name="kirjeldus"></textarea>
                             </dd>
                         </dl>
                         <input type="submit" value="sisesta">
                     </form><br>
                     <?php
                 }
                 ?>
             </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <!-- copyright section start -->
         <div class="copyright_section">
            <div class="container">
               <p class="copyright_text">Copyright 2019 All Right Reserved By <a href="https://html.design">Free  html Templates</a><br>
                  Markiine TARge21</div>
         </div>
         <!-- copyright section end -->
      </div>
      <!-- footer section end -->
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
      <script>
         if ( $(window).width() > 990) {
         
          $('.owl-carousel').owlCarousel({
             stagePadding: 350,
             loop:true,
             margin:35,
             nav:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:1
                 },
                 1000:{
                     items:1
                 }
             }
         })
         
          }
         
         
         
          else { 
         
          $('.owl-carousel').owlCarousel({
             stagePadding: 70,
             loop:true,
             margin:10,
             nav:true,
             responsive:{
                 0:{
                     items:1
                 },
                 600:{
                     items:1
                 },
                 1000:{
                     items:1
                 }
             }
         })
         
           }    
         
      </script>
      <script>
         $(window).scroll(function(){
         var sticky = $('#navbar'),
         scroll = $(window).scrollTop();
         
         if (scroll >= 600) sticky.addClass('fix-nav');
         else sticky.removeClass('fix-nav');
         });
      </script>
   </body>
</html>
<?php
$yhendus->close();
?>