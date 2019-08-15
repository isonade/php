
<?php
    define('DB_DATABASE', 'dbname');
    define('DB_USERNAME', 'username');
    define('DB_PASSWORD', 'passwd');
    define('PDO_DSN', 'mysql:dbhost=localhost;dbname=' . DB_DATABASE);
    // 接続
try {
    $db = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //INSERT
    //$db ->exec("insert into user (email,password) values ('aaa@sss','aaa')");
    //echo "user added!";
  // disconnect
  $db = null;

  } catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}
//接続

//SELECT文を変数に格納
$sql = "SELECT * FROM user";
//SQLのステートメントを実行し、結果を変数に格納
//$stmt = $db->query($sql);

 ?>
 <!DOCTYPE html>
 <html lang="ja">
   <head>
     <meta charset="utf-8">
     <title>管理画面</title>
   </head>
   <body>
     <h2>管理画面</h2>
     <table border="1">
    <tr>
      <th>ID</th>
      <th>メールアドレス</th>
      <th>プラン</th>
      <th>ステータス</th>
      <th>作成日時</th>
      <th>更新日時</th>
    </tr>

    <?php// foreach ( as ) : ?>
    <tr>
      <td><?php// echo  ; ?></td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>1</td>
    </tr>
  <?php// endforeach ; ?>

  </table>
   </body>
 </html>
