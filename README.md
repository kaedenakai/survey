# ①課題番号-プロダクト名

アンケートアプリ

## ②課題内容（どんな作品か）

- アンケートの回答、結果の表示（表・グラフ）が可能です。
- 各画面に遷移できます。

## ③DEMO

https://gs-kaede.sakura.ne.jp/kadai07/survey/home.php

## ④作ったアプリケーション用のIDまたはPasswordがある場合

- ID: 
- PW: 

## ⑤工夫した点・こだわった点

- 質問4,5をラジオボタンで回答できるようにし、その結果を集計し、JavascriptのGoogle Chartsを使用して円グラフとして表示されるようにしました。
- 円グラフ化するところなど、同じ処理になるところはなるべく共通化してコードを簡潔に整理しました。
- 見やすさを向上させるため、アンケート結果画面の表をスクロールバーで表示し、回答欄を一定に固定して超過する場合は改行するようにしました。
  
## ⑥難しかった点・次回トライしたいこと(又は機能)

- 表の幅を固定する際、一部を変えてもなかなか実現できず苦戦しました。
- グラフは基本的なものにしてしまいましたが、棒グラフなどほかのグラフもチャレンジしてみたいです。
- 質問５のグラフが表示されず、原因を特定するためにデベロッパーツールを確認したり、格納されてるdataの配列との整合性（配列が０から始まることを失念していたことが原因でした）を確認して改修しました。

## ⑦質問・疑問・感想、シェアしたいこと等なんでも

- [質問]
- なし
- [感想]
- php初回ということで比較的簡単にできました！データを簡単に保存して簡単に呼び出せる、かつJSONで見やすいので、取り扱いやすいなと感じました。
- [参考記事]
-   
