<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>php基礎編</title>
</head>
<body>
  <p>
    <?php
    // ソート対象の配列
    $nums = [15, 4, 18, 23,10];

    // 昇順、降順の並び替え
    function sort_2way(&$array, $order){
      if($order){
        // 昇順ソート
        echo "昇順にソートします<br>";
        sort($array);
        
      } else {
        // 降順ソート
        echo "降順にソートします<br>";
        rsort($array);
      }
    }

    sort_2way($nums, true);
    foreach ($nums as $num){
      echo $num. "<br>";
    }


    sort_2way($nums, false);
    foreach ($nums as $num){
      echo $num. "<br> ";
    }
    ?>
  </p>
</body>
</html>