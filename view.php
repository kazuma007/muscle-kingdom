<?php 
    session_start();

    require('dbconnect.php');


    $sql ='SELECT * FROM `questions` WHERE `id`=?';

    $data = array($_GET['id']);
    // SQL文実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);


    // データ取得
    while ($record = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $questions[] = array(
        "id"=>$record['id'],
        "name"=>$record['name'],
        "title"=>$record['title'],
        "question"=>$record['question'],
        "created"=>$record['created']      );
    }

    require('dbconnect.php');
    $sql = 'SELECT * FROM `questions` ORDER BY id DESC';
    

    //SQL実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute();

    //データ取得
    while ($record = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $articles[] = array(
        "id"=>$record['id'],
        "name"=>$record['name'],
        "title"=>$record['title'],
        "question"=>$record['question'],
        "created"=>$record['created']      );
  }


if (!empty($_POST)) {

  // エラー項目の確認
  // ニックネームが未入力
  if ($_POST['name'] == '') {
    $error['name']='blank';
  }

  if ($_POST['answer'] == '') {
    $error['answer']='blank';
  }

    require('dbconnect.php');
    $sql = 'INSERT INTO `answers` SET  `name`=?,
                                    `id`=?,
                                    `answer`=?,
                                    `created`=NOW()';

    $data = array($_POST['name'], $_POST['id'], $_POST['answer']);
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

}

    require('dbconnect.php');


    $sql ='SELECT * FROM `answers` WHERE `id`=?';

    $data = array($_GET['id']);
    // SQL文実行
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    while ($record = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $answers[] = array(
        "answer_id"=>$record['answer_id'],
        "name"=>$record['name'],
        "id"=>$record['id'],
        "answer"=>$record['answer'],
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
        <div class="row row-bottom-padded-md">
          <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
            <h2 class="fh5co-heading">QUESTION</h2>
            <?php foreach ($questions as $question_each) { ?>
            <h2 class="fh5co-heading"><h2><?php echo $question_each["title"]; ?></h2></h2>
            <span><b><?php echo $question_each["name"]; ?>   /   <?php echo $question_each["created"]; ?></b></span><br><br>
            <b><p class="content"><?php echo $question_each["question"]; ?></p></b>
            <?php } ?>
        <hr style="border:0;border-top:5px solid;"><br>
            <h2 class="fh5co-heading">ANSWER</h2>
            <?php foreach ($answers as $answer_each) { ?>
            <span><b><?php echo $answer_each["name"]; ?></b></span>   /   
            <span><b><?php echo $answer_each["created"]; ?></b></span><br><br>
            <b><p class="content"><?php echo $answer_each["answer"]; ?></p></b><hr style="border:0;border-top:1px solid;">
            <?php } ?>

        <form action="" method="post" name="form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
              <?php if (isset($_POST['name'])) { ?>
              <input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo htmlspecialchars($_POST['name'],ENT_QUOTES,"UTF-8"); ?>">
              <?php }else{ ?>
              <input type="text" class="form-control" placeholder="Name" name="name">
              <?php } ?>
              <?php if (isset($error['name']) && ($error['name']=='blank')) { ?>
                <a class="error">*名前を入力してください。</a>
              <!-- この$変数が存在していた時(isset) -->
              <?php } ?>
                  </div>
                </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
              <?php if (isset($_POST['answer'])) { ?>
              <textarea name="answer" id="answer" cols="30" rows="7" class="form-control" placeholder="Answer" value="<?php echo htmlspecialchars($_POST['answer'], ENT_QUOTES, "UTF-8"); ?>"></textarea>
              <?php }else{ ?>
              <textarea name="answer" id="answer" cols="30" rows="7" class="form-control" placeholder="Answer" name="answer"></textarea>
              <?php } ?>
              <?php if (isset($error['answer']) && ($error['answer']=='blank')) { ?>
                <a class="error">*回答を入力してください。</a>
              <?php } ?>
                  </div>
                  <div class="form-group">
                  <?php foreach ($questions as $question_each) { ?>
                    <input type='hidden' name='id' id="id"value="<?php echo $question_each['id']; ?>">
                  <?php } ?>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-md" value="Answer">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
        </form>
            <a href="blog.php">&laquo;&nbsp;一覧へ戻る</a>
          </div>
          <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
            <h2 class="fh5co-heading">OTHER QUESTIONS</h2>
            <?php foreach ($articles as $post) { ?>
            <h4><a href="view.php?id=<?php echo $post['id']; ?>" class="lead"><?php echo $post['title'] ?></h4>
            <?php } ?>
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
  <script src="js/google_map.js"></script>
  
  
  <!-- MAIN JS -->
  <script src="js/main.js"></script>

  </body>
</html>

