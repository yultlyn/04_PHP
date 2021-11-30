<?php
const IMGS_PATH = 'images/';

if (!empty ($_FILES)) {
    if ($_FILES['userfile']['error'] == UPLOAD_ERR_OK) {
        if (!move_uploaded_file(
            $_FILES['userfile']['tmp_name'],   
            IMGS_PATH . mb_convert_encoding(
              basename($_FILES['userfile']['name']), 'cp932', 'utf8')
            )
        ) {
          $message = 'ファイルの移動に失敗しました';
        }
      }
      
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロードテスト</title>
    <?php if (isset($message)):?>
        <p><?=($message)?></p>
    <?php endif;?>
</head>
<body>
    <h1>アップロードテスト</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <p>ファイル：<input type="file" name="userfile" accept="images/*"></p>
        
        <p><input type="submit" value="送信"></p>
    </form>
</body>
</html>
