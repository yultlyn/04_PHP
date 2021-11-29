<?php
session_start();

$_SESSION['user'] = 'taro';
$user = $_SESSION['user'] ;

?>

<h1>会員専用ページへようこそ</h1>
<p>あなたのユーザーIDは<?=$user;?>です</p>
<p>このページでは会員専用の情報が閲覧できます。</p>

<p><a href="logout.php">ログアウトする</a></p>
