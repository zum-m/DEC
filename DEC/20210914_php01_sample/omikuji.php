<?php

// // // $忘れずに
// $random_number = rand(1,5);

// if ($rand_number == 1){
//     $result = "大吉"；
// }else if ($rand_number == 2 ){
//     $result = "中吉";
// }else if ($rand_number == 3 ){
//     $result = "小吉";
// }else if ($rand_number == 4 ){
//     $result = "吉";
// }else if ($rand_number == 5 ){
//     $result = "凶";
// }

// // echo "$ranbom_number"

// または下の配列で

$result =["daikiti","syou","tyuu"," "," "][rand(0,4)];


?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <h1>今日の運勢は<?= $result ?>です！</h1>
    </body>

</html>
