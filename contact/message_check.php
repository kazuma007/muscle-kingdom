<?php
  session_start();//session変数を使うときに必ず記述



?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Muscle Kingdom</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

    <!-- 
  //////////////////////////////////////////////////////

  FREE HTML5 TEMPLATE 
  DESIGNED & DEVELOPED by FreeHTML5.co
    
  Website:    http://freehtml5.co/
  Email:      info@freehtml5.co
  Twitter:    http://twitter.com/fh5co
  Facebook:     https://www.facebook.com/fh5co

  //////////////////////////////////////////////////////
  -->

    <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="../css/flexslider.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Modernizr JS -->
  <script src="../js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  </head>
  <body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

      <h1 id="fh5co-logo"><a href="../index.php">Muscle Kingdom</a></h1>
      <nav id="fh5co-main-menu" role="navigation">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../blog.php">Blog</a></li>
          <li><a href="../portfolio.html">Application</a></li>
          <li><a href="../about.html">About</a></li>
          <li class="fh5co-active"><a href="contact.php">Contact</a></li>
        </ul>
      </nav>

      <div class="fh5co-footer">
        <p><small>&copy; 2016 Blend Free HTML5. All Rights Reserved.</span> <span>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> </span> <span>Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a></span></small></p>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=100008307001665"><i class="icon-facebook2"></i></a></li>
          <li><a href="https://twitter.com/mountain_ry"><i class="icon-twitter2"></i></a></li>
          <li><a href="https://www.instagram.com/kazu_mountain/?hl=en"><i class="icon-instagram"></i></a></li>
          <li><a href="https://www.linkedin.com/in/kazuma-morishita-6547a1131/"><i class="icon-linkedin2"></i></a></li>
        </ul>
      </div>

    </aside>

    <div id="fh5co-main">
      <div class="fh5co-more-contact">
      </div>
      <div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
    <div class="row">
        <div class="row">
          <div class="col-md-4">
            <h2>Get In Touch</h2>
          </div>
        </div>
      <div class="col-md-6 col-md-offset-3 content-margin-top" align="center">
        <form method="post" action="message_confirm.php" class="form-horizontal" role="form">
          <input type="hidden" name="action" value="submit">
          <h4 align="center"><div class="well">メッセージ内容をご確認ください。</div></h4>
            <table class="table table-bordered">
              <tbody>
                <!-- 登録内容を表示 -->
                <tr>
                  <td><b><div class="text-center">Name</div></b></td>
                  <td><div class="text-center"><?php echo $_SESSION['contact']['name'];?></div></td>
                </tr>
                <tr>
                  <td><b><div class="text-center">Email</div></b></td>
                  <td><div class="text-center"><?php echo $_SESSION['contact']['email'];?></div></td>
                </tr>
                <tr>
                  <td><b><div class="text-center">Message</div></b></td>
                  <td><div class="text-center"><?php echo $_SESSION['contact']['message'];?></div></td>
                </tr>
              </tbody>
            </table>

            <a href="creat.php">&laquo;&nbsp;書き直す</a> |
            <input type="submit" class="btn btn-primary btn-md" value="Send Message">

          </div>
        </form>
      </div>
    </div>
  </div>


  <!-- jQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Waypoint../s -->
  <script src="../js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="../js/jquery.flexslider-min.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
  <script src="../js/google_map.js"></script>
  
  
  <!-- MAIN JS -->
  <script src="../js/main.js"></script>

  </body>
</html>