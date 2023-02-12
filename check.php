<?php
$nickname=htmlspecialchars($_POST["nickname"], ENT_QUOTES, 'UTF-8');
$email=htmlspecialchars($_POST["e-mail"], ENT_QUOTES, 'UTF-8');
$content=htmlspecialchars($_POST["content"], ENT_QUOTES, 'UTF-8');
if ($nickname==="") {
    $nickname_result="入力されていません";
} 
else {
    $nickname_result=$nickname;
}
if ($email==="") {
    $email_result="入力されていません";
} 
else {
    $email_result=$email;
}
if ($content==="") {
    $content_result="入力されていません";
} else {
    $content_result=$content;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>お問い合わせ情報確認</h1>
    <p>ニックネーム：<?php echo $nickname_result ?></p>
    <p>メールアドレス：<?php echo $email_result ?></p>
    <p>お問い合わせ内容：<?php echo $content_result ?></p>
    <form action="thanks.php" method="post">
        <input type="hidden" name="nickname" value="<?php echo $nickname_result ?>">
        <input type="hidden" name="e-mail" value="<?php echo $email_result ?>">
        <input type="hidden" name="content" value="<?php echo $content_result ?>">
        <input type="button" value="戻る" onclick="history.back()">
        <?php  if($nickname!=="" && $email!=="" && $content!==""): ?>
        <input type="submit" value="送信">
        <?php endif ?>
    </form>
</body>

</html>