<?php 

$nickname=htmlspecialchars($_POST["nickname"], ENT_QUOTES, 'UTF-8');
$email=htmlspecialchars($_POST["e-mail"], ENT_QUOTES, 'UTF-8');
$content=htmlspecialchars($_POST["content"], ENT_QUOTES, 'UTF-8');

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password= '';
$dbh = new PDO($dsn,$user,$password);
// $dbh = query('SET NAMES UTF8MB4');
$stmt = $dbh -> prepare('INSERT INTO survey SET nickname=?,email=?,content=?');
$stmt -> execute([$nickname,$email,$content]);
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
    <h1>お問い合わせありがとうございました！</h1>
    <p>お問い合わせ内容</p>
    <p>ニックネーム：<?php echo $nickname ?></p>
    <p>メールアドレス：<?php echo $email ?></p>
    <p>お問い合わせ内容：<?php echo $content ?></p>
</body>

</html>