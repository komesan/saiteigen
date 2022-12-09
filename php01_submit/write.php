<?php
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


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>