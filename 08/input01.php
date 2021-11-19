<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body><form action="input02.php" method="post">
    <!-- 隠しフォーム -->
    <input type="hidden" name="id" value="1234">
    <p>ユーザ名：<input type="text" name="user"></p>
    <!-- パスワードname="pass"を送信 -->
    <p>パスワード：<input type="password" name="pass"></p>
    <p>性別：
    <!-- 男性と女性をラジオボタンで選択させる。
    選択するとそのまま性別(gender)を和文で表示 -->
    <input type="radio" name="gender" value="男性">男性
    <input type="radio" name="gender" vaue="女性">女性
</p>

<p><input type="submit" value="送信"></p>
</form>
</html>
