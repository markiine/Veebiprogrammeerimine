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
      <title>KUTSE</title>
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
      <div class="header_section">
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="navbar" class="menu_main">
               <div class="menu_right">
                  <div class="costum_menu">
                     <ul>
                        <li class="active"><a href="index.php">KUTSE</a></li>
                        <li><a href="kava.php">KAVA</a></li>
                        <li><a href="registreerimine.php">REGISTREERIMINE</a></li>
                        <li><a href="admin.php">ADMIN</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- holidays section start -->
      <div class="holidays_section layout_padding">
         <div class="container-fluid">
            <div class="background_bg">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="holiday_img"><img src="images/holiday-img.png" alt="holiday"></div>
                     </div>
                     <div class="col-md-6">
                        <div class="holiday_taital_main">
                           <h1 class="holiday_taital">KUTSE</h1>
                           <h2 class="holiday_text">
                              Kallis sõber!<br>
                              Kutsun sind jõulupeole, mis toimub 25. detsembril Kultuurikatlas. <br>
                              Ürituse algus kell 12:00.
                           </h2>
                           <p class="dummy_text">NB! Kanna midagi punast!</p>
                           <div class="read_bt_2"><a href="registreerimine.php">Registeerimine</a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- holidays section end -->
         <!-- copyright section start -->
      <div class="footer_section layout_padding">
          <!-- copyright section start -->
          <div class="copyright_section">
              <div class="container">
                  <p class="copyright_text">Copyright 2022 All Right Reserved By <a href="https://html.design">Free  html Templates</a><br>
                      Markiine TARge21</div>
          </div>
          <!-- copyright section end -->
      </div>
         <!-- copyright section end -->
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