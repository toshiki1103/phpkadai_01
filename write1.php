<?php

$name = $_POST["name"];
$memo1 = $_POST["memo1"];
$memo2 = $_POST["memo2"];

// 改行を〜に置換（または別の特殊文字に）
$memo1 = str_replace("\n", " ", $memo1);
$memo2 = str_replace("\n", " ", $memo2);

$c = ",";
$str = $name . $c . $memo1 . $c . $memo2;  

$file = fopen("data11.txt","a");
fwrite($file, $str . "\n");
fclose($file);

header("Location: display2.php");
exit;

?>