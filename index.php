<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>お問い合わせ情報入力</h1>
    <form action="check.php" method="post">
        <label for="btn1">ニックネーム</label><br>
        <input type="text" name="nickname" id="btn1" required><br>
        <label for="btn2">メールアドレス</label><br>
        <input type="text" name="e-mail" id="btn2" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br>
        <label for="btn3">お問い合わせ内容</label><br>
        <textarea name="content" id="btn3" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="送信">
    </form>
    <h2>管理者用メニュー</h2>
    <ul>
        <li><a href="view.php">お問合せ内容一覧</a></li>
    </ul>
</body>

</html>