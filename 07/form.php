<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="result.php" method="get" novalidate>
        <p>地域:
            <select name="area">
                <option value="吉祥寺">吉祥寺</option>
                <option value="西荻窪">西荻窪</option>
                <option value="武蔵境">武蔵境</option>
            </select>
        </p>
        <p>間取り:
            <input type="radio" name="layout" value="1K">1K
            <input type="radio" name="layout" value="2DK">2DK
            <input type="radio" name="layout" value="3LDK">3LDK
        </p>
        <p><input type="submit" value="送信"></p>
    </form>
</body>
</html>
