<?php

$file = fopen("data11.txt","r");

echo "<table border='1'>";
echo "<tr><th>仮名</th><th>人生でそこそこ滑った瞬間</th><th>わざわざ人に言うまでもないけど、少しだけ困っていること</th></tr>";

while(feof($file) == false){
    $line = trim(fgets($file));
    if($line != ""){
        $data = explode(",", $line);
        echo "<tr>";
        echo "<td>" . htmlspecialchars($data[0]) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($data[1])) . "</td>";
        echo "<td>" . nl2br(htmlspecialchars($data[2])) . "</td>";
        echo "</tr>";
    }
}

echo "</table>";

fclose($file);
?>