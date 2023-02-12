<?php
$dsn ='mysql:dbname=phpkiso;host=localhost';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
// $dbh=query('SET NAMES UTF8MB4');
$sql='SELECT * FROM survey WHERE email LIKE "%gmail.com%"';
$stmt=$dbh->prepare($sql);
$stmt->execute();
$records=$stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($records);
unset($dbh);
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
    <h1>お問合せ情報一覧</h1>
    <?php foreach ($records as $record): ?>
    <hr>
    <p>ニックネーム：<?php echo $record['nickname']?></p>
    <p>メールアドレス：<?php echo $record['email']?></p>
    <p>お問合せ内容：<?php echo $record['content']?></p>
    <?php endforeach ?>
    <hr>
    <a href="index.php">入力画面へ戻る</a>
</body>

</html>