<?php
include 'func.php';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>アンケート結果画面</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        min-width: 1000px;
    }
    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        word-wrap: break-word; /* 内容が幅を超えた場合に折り返す */
        overflow-wrap: break-word; 
    }
    th {
        background-color: #f2f2f2;
    }
    .table-container {
        max-height: 300px;
        max-width: 100%;
        overflow-y: auto;
        overflow-x: auto;
    }
    th:nth-child(5),
    th:nth-child(6),
    th:nth-child(7),
    th:nth-child(8),
    th:nth-child(9) {
    background-color: #d4edda; /* 薄い緑の背景色 */}
    
    th:nth-child(1), td:nth-child(1) { width: 50px; } /* No */
    th:nth-child(2), td:nth-child(2) { width: 150px; } /* 回答日時 */
    th:nth-child(3), td:nth-child(3) { width: 120px; } /* 名前 */
    th:nth-child(4), td:nth-child(4) { width: 200px; } /* EMAIL */
    th:nth-child(5), td:nth-child(5) { width: 200px; } /* 質問1 */
    th:nth-child(6), td:nth-child(6) { width: 200px; } /* 質問2 */
    th:nth-child(7), td:nth-child(7) { width: 200px; } /* 質問3 */
    th:nth-child(8), td:nth-child(8) { width: 200px; } /* 質問4 */
    th:nth-child(9), td:nth-child(9) { width: 200px; } /* 質問5 */

</style>
<body>
    <h1>アンケート結果</h1>
    <h3>xxx</h3>
    <?php
    $file = fopen('data/data.txt', 'r'); // ファイルを開く

    if ($file) {
        //表を作成
        echo '<div class="table-container">';
        echo "<table>"; 
        echo "<tr><th>No</th><th>回答日時</th><th>名前</th><th>EMAIL</th><th>質問1</th><th>質問2</th><th>質問3</th><th>質問4</th><th>質問5</th></tr>";
        
        $no = 1; // 回答Noのカウンター

        // ファイル内容を1行ずつ読み込んで出力
        while ($str = fgets($file)) {
            echo "<tr>";
            echo "<td>".$no."</td>";
            $columns = explode(",", $str); // カンマ区切りで分割して配列に入れる
           
            // 各列をテーブルのセルに表示
            foreach ($columns as $column) {
                echo "<td>".h(trim($column))."</td>";
            }
            
            echo "</tr>";
            $no++; // 回答Noを増加
        }

        echo "</table>";
        echo '</div>';
        fclose($file); // ファイルを閉じる
    }else{
        echo "<p>アンケート結果を表示できませんでした。</p>";
    }

    ?>
    <ul>
    <li><a href="survey.php">アンケートに答える</a></li>
    <li><a href="home.php">ホームに戻る</a></li>
    </ul>
</body>
</html>