<?php
//受け取る内容
$name =$_POST["name"];
$mail =$_POST["mail"];
$q1 =$_POST["q1"];
$q2 =$_POST["q2"];
$q3 =$_POST["q3"];
$q4 =$_POST["q4"];
$q5 =$_POST["q5"];

//作成日時,名前,メール
$c = ",";
$str = date("Y-m-d H:i:s").$c.$name.$c.$mail.$c.$q1.$c.$q2.$c.$q3.$c.$q4.$c.$q5;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート完了画面</title>
</head>
<body>

    <h1>回答を記録しました。</h1>
    <h2>ありがとうございました。</h2>

    <ul>
    <li><a href="survey.php">もう一度回答する</a></li>
    <li><a href="result.php">結果を表示する</a></li>
    <li><a href="home.php">ホームに戻る</a></li>
    </ul>
</body>
</html>