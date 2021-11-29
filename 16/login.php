<?php
session_start();


$user = '';
$pass = '';
if (!empty($_POST)) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $error = $_POST['error'];



if (!empty($_SESSION) && $_SESSION['authenticated'] == true) {
    header('Location: member.php'); // 会員ページに移動
    exit;
  }


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
    <?php if (/* $loginErrorに値が入っていれば */): ?>
<p class="error"><?= htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8');?>ユーザIDかパスワードが正しくありません</p>
<?php endif; ?>

    <p>ユーザIDとパスワードを入力して「ログイン」ボタンを押してください。</p>
    <form action="member.php" method="post" name ='login' novalidate>
 
        <p>ユーザーID
            <input type="text" name="user" value="<?=htmlspecialchars($user, ENT_QUOTES, 'UTF-8');?>">
        </p>

        <p>パスワード
            <input type="text" name="pass" value="<?=htmlspecialchars($user, ENT_QUOTES, 'UTF-8');?>">
        </p>

        <p><input type="submit" value="ログイン"></p>
    </form>
</body>
</html>
