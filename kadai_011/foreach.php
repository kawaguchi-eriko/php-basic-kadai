<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP課題11</title>
</head>

<body>
   <p>
       <?php
       $vegetable= ['名前' => '玉ねぎ', '値段' => 200 , '産地' => '北海道'];

       //  配列$vegetableの要素を1つずつ順番に出力する
       
       foreach ($vegetable as $key => $value) {
          echo "{$key}:{$value} <br>";
        }
      ?>
   </p>
</body>

</html>