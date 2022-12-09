<!-- 受け取り側 -->

<!DOCTYPE html>

<?php
// GETで送られてきた名前とアドレスのデータを受け取る
// まずは、var_dump($_GET);で見てみる。
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

// XSS対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

// $_GETの中身を変数に移動
$name = $_POST['name'];
$mail = $_POST['mail'];
$food = $_POST['food'];

// ファイルに書き込む内容を用意。まずは日付を保存する。
$time = date("Y-m-d H:i:s");
// $name = $_POST['name'];
// $mail = $_POST['mail'];
// $food = $_POST['food'];

// aモードでファイルをオーブン
$file = fopen('data/data.txt', 'a');

//ファイルへの書き込み。"\n"は「ファイル内での改行」を指示する記述。ブラウザでいう<br>とのようなもの。
fwrite($file, $time."\n");
fwrite($file, $name."\n");
fwrite($file, $mail."\n");
fwrite($file, $food."\n");

//ファイルを閉じる
fclose($file);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>お名前：<?= htmlspecialchars($name, ENT_QUOTES) ?> </p>
    <p>Mail：<?= htmlspecialchars($mail, ENT_QUOTES) ?></p>
    <p>好きな食べもの：<?= htmlspecialchars($food, ENT_QUOTES) ?></p>
</body>
</html>