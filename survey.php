<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート画面</title>
</head>
<body>
	<h1>XXに関するアンケート</h1>
	<h3>以下の質問に答えてください</h3>
	<form action="survey_done.php" method="post">
		お名前: <input type="text" name="name">
		EMAIL: <input type="text" name="mail"><br>
		質問1 <input type="text" name="q1"><br>
		質問2 <input type="text" name="q2"><br>
		質問3 <input type="text" name="q3"><br>
		質問4 <input type="text" name="q4"><br>
		質問5 <input type="text" name="q5"><br>
		<input type="submit" value="送信">
	</form>
	<ul>
	<li><a href="home.php">ホームに戻る</a></li>
	</ul>
</body>
</html>