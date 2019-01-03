<?php
// $errorという変数を用意して、入力チェックに引っかかった項目の情報を保存するようにする
// $errorはhtmlの表示部分で、入力を促す表示を作る時に使用
// 例) もし, nick_nameに何も入ってなかった場合、
// $error['nick_name']='blank';　という情報を保存

session_start();    //SESSION変数を使うときの変数

// フォームからデータが送信された時
// $_POSTが空っぽじゃなかった時、
if (!empty($_POST)) {
  // エラー項目の確認
  // ニックネームが未入力
  if ($_POST['title'] == '') {
    $error['title']='blank';
  }

  // エラー項目の確認
  // emaliが未入力
  if ($_POST['content'] == '') {
    $error['content']='blank';
  }


  // エラー項目の確認
  // nicknameが未入力

// 画像ファイルの拡張子チェック
// jpg. gif. pgn この３つを許可して他はエラーにする
// 注意：画像ファイルの拡張子を自分で手入力して変えないこと
// 画像のサイズは2MG以下のものを用意すること

$file_name = $_FILES['picture_path']['name'];
// ファイルがしていされた時に実行
if (!empty($file_name)) {
  // 拡張子を取得
  // $file_nameに「3.png」が代入されている場合、後ろの三文字を取得する
  // substr() 文字列を場所を指定して、一部分切り出す関数
  // -3:後ろから３番目、3:前から３番目
  // $error['picture_path']がtypeだったら、「ファイルはjpg, gif, pngのいずれかを指定してください」というエラーメッセージを表示
  // チャレンジ問題！チェックする拡張子にjpegを追加してみてください
  $ext = substr($file_name, -4);
  if ($ext != '.jpg' && $ext != '.gif' && $ext != '.png' && $ext2 != 'jpeg') {
    $error['picture_path'] = 'type';
  }
}

// エラーがない場合
if (empty($error)) {
  

// 画像をアップロードする
// アップロード後のファイル名を作成
// $picture_path = date('YmdHis'). $_FILES['picture_path']['name'];
// サーバー上に仮に置かれている場所と名前
  $picture_path = date('YmdHis'). $_FILES['picture_path']['name'];
  move_uploaded_file($_FILES['picture_path']['tmp_name'], '../member_picture/' .$picture_path);

  // セッションに値を保存
  // SESSION→どの画面でもアクセス可能なスーパーグローバル変数
  $_SESSION['join'] = $_POST; //POST送信されたデータを代入
  $_SESSION['join']['picture_path'] = $picture_path;

  // check.phpに移動
  header('Location: check.php');
  exit(); //ここで処理が終了する

}

}



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
  <head>
<meta charset="UTF-8">
<title>記事投稿 | Special Blog</title>
<link rel="stylesheet" href="blog.css">
</head>
<body>
<form method="post" action="" name="form" enctype="multipart/form-data">
  <div class="post">
    <h2>記事投稿</h2>
    <p>題名</p>
      <div class="form-group">
              <?php if (isset($_POST['title'])) { ?>
              <input type="text" class="form-control" placeholder="Title" name="tile" value="<?php echo htmlspecialchars($_POST['title'],ENT_QUOTES,"UTF-8"); ?>">
              <?php }else{ ?>
              <input type="text" class="form-control" placeholder="Title" name="title" >
              <?php } ?>
              <?php if (isset($error['title']) && ($error['title']=='blank')) { ?>
                <a class="error">*タイトルを入力してください。</a>
              <!-- この$変数が存在していた時(isset) -->
              <?php } ?>
    <p>本文</p>
        <div class="form-group">
              <?php if (isset($_POST['content'])) { ?>
              <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="Content" value="<?php echo htmlspecialchars($_POST['content'], ENT_QUOTES, "UTF-8"); ?>"></textarea>
              <?php }else{ ?>
              <textarea name="content" id="content" cols="30" rows="7" class="form-control" placeholder="Content" name="content"></textarea>
              <?php } ?>
              <?php if (isset($error['content']) && ($error['content']=='blank')) { ?>
                <a class="error">*本文を入力してください。</a>
              <?php } ?><br>
      <input type="file" name="picture_path" class="form-control">
    <p><input name="submit" type="submit" value="投稿"></p>
  </div>
</form>
</body>
</html>