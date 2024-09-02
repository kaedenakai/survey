<?php
include 'func.php';

// 質問4と質問5の回答数をカウントする変数
$q4_yes = 0;
$q4_no = 0;
$q5_yes = 0;
$q5_no = 0;

// ファイルからデータを読み込み、質問4と質問5の回答をカウント
$file = fopen('data/data.txt', 'r'); // ファイルを開く
if ($file) {
    while ($str = fgets($file)) {
        $columns = explode(",", $str); // カンマ区切りで分割して配列に入れる
        if (isset($columns[6])) { // 質問4の回答
            $q4_response = trim($columns[6]);
            if ($q4_response === 'はい') $q4_yes++;
            if ($q4_response === 'いいえ') $q4_no++;
        }
        if (isset($columns[7])) { // 質問5の回答
            $q5_response = trim($columns[7]);
            if ($q5_response === 'はい') $q5_yes++;
            if ($q5_response === 'いいえ') $q5_no++;
        }
    }
    fclose($file); // ファイルを閉じる
} else {
    echo "<p>アンケート結果を表示できませんでした。</p>";
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート結果グラフ</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.jsの読み込み -->
<style>
    canvas {
        width: 300px !important;
        height: 300px !important;
    }
</style>
</head>
<body>
<h1>アンケート結果（円グラフ）</h1>
<h3>質問4の結果</h3>
<canvas id="chartQ4" width="200" height="200"></canvas>
<h3>質問5の結果</h3>
<canvas id="chartQ5" width="200" height="200"></canvas>

<script>
// 円グラフを作成する関数
function createPieChart(ctx, label, data) {
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['はい', 'いいえ'],
            datasets: [{
                label: label,
                data: data,
                backgroundColor: ['#36A2EB', '#FF6384'],
            }]
        },
        options: {
            plugins: {
                legend: {
                    labels: {
                        font: {
                            size: 48 // ラベルのフォントサイズを指定（サイズを大きくする）
                        }
                    }
                }
            }
        }
    });
}

// 質問4の円グラフを描画
createPieChart(
    document.getElementById('chartQ4').getContext('2d'),
    '質問4',
    [<?php echo $q4_yes; ?>, <?php echo $q4_no; ?>]
);

// 質問5の円グラフを描画
createPieChart(
    document.getElementById('chartQ5').getContext('2d'),
    '質問5',
    [<?php echo $q5_yes; ?>, <?php echo $q5_no; ?>]
);
</script>

<ul>
    <li><a href="result.php">結果に戻る</a></li>
    <li><a href="home.php">ホームに戻る</a></li>
</ul>
</body>
</html>