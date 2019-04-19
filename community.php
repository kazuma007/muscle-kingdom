<?php




  //データベースに接続
  // 外部ファイルから処理の読み込み
  // 外部ファイルでエラーが出ると、処理を中断する
  	require('dbconnect.php');
    $sql = 'SELECT * FROM `questions` ORDER BY id DESC';
    

    //SQL実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    //データ取得
  	while ($record = $stmt->fetch(PDO::FETCH_ASSOC)) {
    	$questions[] = array(
        "id"=>$record['id'],
        "name"=>$record['name'],
        "title"=>$record['title'],
        "question"=>$record['question'],
        "created"=>$record['created']      );

  }


?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
	<head>
<meta charset="UTF-8">
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
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="border js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php">Muscle Kingdom</a></h1>
			<nav id="fh5co-main-menu" role="navigation">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="portfolio.html">Application</a></li>
					<li class="fh5co-active"><a href="community.php">Community</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact/contact.php">Contact</a></li>
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
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Read My Blog</h2>
				<a type="submit" class="btn btn-primary btn-md" href="question/send.php">質問する</a><br>
				<div class="row row-bottom-padded-md">
				<?php foreach ($questions as $question) { ?>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
          <a href="view.php?id=<?php echo $question['id']; ?>" class="lead"><img src="images/kinniku_hanasu.png" width="200" height="200"></a>
					</div>
					<div class="col-md-9 col-padding animate-box" data-animate-effect="fadeInLeft">
							<div class="desc">
							<h3><a href="view.php?id=<?php echo $question['id']; ?>" class="lead"><?php echo $question['title'] ?></a></h3>
								<span><b><i class="icon-comment"></i><?php echo $question['name'] ?></b></span><span>   /   </span>
								<span><b><i class="icon-comment"></i><?php echo $question['created'] ?></b></span></br>
								<a href="view.php?id=<?php echo $question['id']; ?>" class="lead"><h4><?php echo mb_substr(strip_tags($question['question']),0,50).'...'; ?></h4></a>
								<a href="view.php?id=<?php echo $question['id']; ?>" class="lead">Read More<i class="icon-arrow-right3"></i></a><hr style="border:0;border-top:1px solid;">
							</div>
						</div>
    			<?php } ?>
				</div>
				</div>

		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	</body>
</html>

