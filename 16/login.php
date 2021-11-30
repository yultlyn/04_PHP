<?php
session_start();

// セッション変数を持っており、かつ承認済みであれば
if (!empty($_SESSION) && $_SESSION['authenticated'] == true) {
    header('Location: member.php'); // 会員ページに移動
    exit;
  }


$userId = '';
$pass = '';
if (!empty($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
   
}



?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <style>
.error {
  color: #f00;
}
</style>
</head>
<body>
    <h1>ログイン</h1>
  


    <p>ユーザIDとパスワードを入力して「ログイン」ボタンを押してください。</p>
    <form action="member.php" method="post" name ='login' novalidate>
 
        <p>ユーザーID
            <input type="text" name="userId" value="<?=htmlspecialchars($userId, ENT_QUOTES, 'UTF-8');?>">
        </p>

        <p>パスワード
            <input type="text" name="pass" value="<?=htmlspecialchars($pass, ENT_QUOTES, 'UTF-8');?>">
        </p>

        <p><input type="submit" value="ログイン"></p>
    </form>
</body>
</html>
