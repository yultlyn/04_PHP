<?php
$lang = 'ja';
if (!empty($_POST)) {
    $lang = $_POST['lang'];
} elseif (isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
}

setcookie('lang', $lang, time() + 86400 * 30);

if ($lang == 'en') {
    $message = 'Welcome!';
} elseif ($lang == 'ja') {
    $message = 'ようこそ!';
} elseif ($lang == 'kr') {
    $message = '오신 것을 환영합니다!';
} elseif ($lang == 'cn') {
    $message = '欢迎光临!';
} elseif ($lang == 'it') {
    $message = 'Benvenuto!';
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$message?></title>
</head>

<body>
    <h1><?=$message?></h1>
    <form action="" method="post" novalidate>
        <p>
            <select name="lang">
                <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>英語</option>
                <option value="ja" <?= $lang == 'ja' ? 'selected' : '' ?>>日本語</option>
                <option value="kr" <?= $lang == 'kr' ? 'selected' : '' ?>>韓国語</option>
                <option value="cn" <?= $lang == 'cn' ? 'selected' : '' ?>>中国語</option>
                <option value="it" <?= $lang == 'it' ? 'selected' : '' ?>>イタリア語</option>
            </select>
            <input type="submit" value="送信">
        </p>
    </form>
</body>

</html>



$totalLang = [
    [
      'language' => '英語',
      'nation'   => 'en',
      'greeting' => 'Welcome!'
    ],
    [
        'language' => '日本語',
        'nation'   => 'ja',
        'greeting' => 'ようこそ!'
      ],
    
      [
        'language' => '韓国語',
        'nation'   => 'kr',
        'greeting' => '오신 것을 환영합니다!'
      ],
    
      [
        'language' => '中国語',
        'nation'   => 'ch',
        'greeting' => '欢迎光临!'
      ],
    
      [
        'language' => 'イタリア語',
        'nation'   => 'it',
        'greeting' => 'Benvenuto!'
      ],
    
      [
        'language' => 'スペイン語',
        'nation'   => 'es',
        'greeting' => 'Hola!'
      ],
    
      [
        'language' => 'ロシア語',
        'nation'   => 'ru',
        'greeting' => 'Привет!'
      ]
    
      ];
