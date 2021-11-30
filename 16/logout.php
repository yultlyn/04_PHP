<?php
session_start();

$_SESSION = array();
$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 36000,
  $params['path'], $params['domain'],
  $params['secure'], $params['httponly']);
session_destroy();


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ログアウトしました</p>
    
    <p><a href="login.php">ログインページへ</a></p>
    
</body>
</html>
