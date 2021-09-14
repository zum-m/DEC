<?php
$data = [
  [
    'id' => 1,
    'name' => 'ファントムブラッド',
    'hero' => 'ジョナサン・ジョースター',
    'rival' => 'ディオ・ブランドー',
  ],
  [
    'id' => 2,
    'name' => '戦闘潮流',
    'hero' => 'ジョセフ・ジョースター',
    'rival' => 'カーズ',
  ],
  [
    'id' => 3,
    'name' => 'スターダストクルセイダース',
    'hero' => '空条承太郎',
    'rival' => 'DIO',
  ],
  [
    'id' => 4,
    'name' => 'ダイヤモンドは砕けない',
    'hero' => '東方仗助',
    'rival' => '吉良吉影',
  ],
  [
    'id' => 5,
    'name' => '黄金の風',
    'hero' => 'ジョルノ・ジョバァーナ',
    'rival' => 'ディアボロ',
  ],
  [
    'id' => 6,
    'name' => 'ストーンオーシャン',
    'hero' => '空条徐倫',
    'rival' => 'エンリコ・プッチ',
  ],
  [
    'id' => 7,
    'name' => 'スティール・ボール・ラン',
    'hero' => 'ジョニィ・ジョースター',
    'rival' => 'ファニー・ヴァレンタイン',
  ],
  [
    'id' => 8,
    'name' => 'ジョジョリオン',
    'hero' => '東方定助',
    'rival' => '透龍',
  ],
];

// ここから処理を記述！GETは大文字🟡

// var_dump($_GET);
// exit();

$keyword = $_GET["keyword"];

// キーワードをちゅしゅつする処理// 用意されたデータからキーワードがヒットするものを抽出する処理


$results = array_filter($data, function ($x) use ($keyword) {
  return str_contains($x['id'], $keyword)
    || str_contains($x['name'], $keyword)
    || str_contains($x['hero'], $keyword)
    || str_contains($x['rival'], $keyword);

});

$output = '';

foreach ($results as $result) {
  $output .= "<tr><td>{$result['id']}</td><td>{$result['name']}</td><td>{$result['hero']}</td><td>{$result['rival']}</td></tr>";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>データ検索フォーム</title>
</head>

<body>
  <fieldset>
    <legend>検索結果</legend>
    <a href="data_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>id</th>
          <th>name</th>
          <th>hero</th>
          <th>rival</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに`<tr><td>'id'</td><td>'name'</td><td>'hero'</td><td>'rival'</td></tr>`の形式でデータが表示する -->
        <?=$output?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>